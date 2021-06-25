<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function index(){
        $items = Item::orderBy('updated_at', 'asc')->paginate(6);
        return view('items.index', compact('items'));
    }

    public function show(Item $item){
        return view('items.show', compact('item'));
    }

    public function topIndex(){
        $items = Item::latest()->take(3)->get();
        return view('items.topItem', compact('items'));
    }

    public function itemSearch(Request $request){
        $search_word = $request -> input('item_search');

        if (!empty($search_word)) {
            $query = Item::where('item_name', 'LIKE', "%{$search_word}%")
                ->orWhere('item_description', 'LIKE', "%{$search_word}%");
        }

        $items = $query->get();
        return view('search', compact('items', 'search_word'));
    }

    // todo: index/show を管理者・一般で表示分けし、コントローラーの重複を削除

    public function adminIndex(){
        $items = Item::latest()->get();

        if(Auth::user()->admin_check){
            return view('admin.items.index', compact('items'));
        }else{
            return redirect('/top');
        }
    }

    public function adminShow(Item $item){
        if(Auth::user()->admin_check){
            return view('admin.items.show', compact('item'));
        }else{
            return redirect('/top');
        }
    }

    public function adminCreate(){
        if(Auth::user()->admin_check){
            return view('admin.items.create');
        }else{
            return redirect('/top');
        }
    }

    public function adminStore(Request $request){
        $this->validateItem();
        $this->validateImg();

        $item = new Item();

        if ($file = $request->file('imgpath')) {
            $file_name = $file->getClientOriginalName();
            $target_path = public_path('images/');
            $file->move($target_path, $file_name);

            $item->imgpath = $file_name;
        } else {
            $item->imgpath = "";
            return redirect('/admin/items/create');
        }

        $item->item_name = request('item_name');
        $item->item_description = request('item_description');
        $item->item_price = request('item_price');

        $item->save();

        return redirect('/admin/items');
    }

    public function adminEdit(Item $item){
        if(Auth::user()->admin_check){
            return view('admin.items.edit', compact('item'));
        }else{
            return redirect('/top');
        }
    }

    // todo: 画像の変更も実装したい
    public function adminUpdate(Item $item){
        $item->update($this->validateItem());
        return redirect($item -> path());
    }

    public function adminDestroy(Item $item){
        $item = Item::whereIn('id', $item)->delete();
        return redirect('/admin/items');
    }

    // input validation
    protected function validateItem(){
        return request()->validate([
            'item_name' => 'required',
            'item_description' => 'required',
            'item_price' => 'required'
        ]);
    }

    protected function validateImg(){
        return request()->validate([
            'imgpath' => 'required|file|image|mimes:jpeg,png'
        ]);
    }
}
