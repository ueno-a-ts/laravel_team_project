<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        $items = Item::paginate(6);
        return view('items.index', compact('items'));
    }

    public function show(Item $item){
        return view('items.show', compact('item'));
    }


    // todo: index/show を管理者・一般で表示分けし、コントローラーの重複を削除

    public function adminIndex(){
        $items = Item::latest()->get();
        return view('admin.items.index', compact('items'));
    }

    public function adminShow(Item $item){
        return view('admin.items.show', compact('item'));
    }

    public function adminCreate(){
        return view('admin.items.create');
    }

    public function adminStore(Request $request){
        $this->validateItem();

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

    public function adminEdit(Item $itemId){
        
    }

    public function adminUpdate(){

    }

    public function adminDestroy(){

    }

    // input validation
    protected function validateItem(){
        return request()->validate([
            'item_name' => 'required',
            'item_description' => 'required',
            'item_price' => 'required',
            'imgpath' => 'required|file|image|mimes:jpeg,png'
        ]);
    }
}
