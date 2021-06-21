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

    public function show($itemId){
        $item = Item::findOrFail($itemId);
        return view('items.show', compact('item'));
    }


    // todo: index/show を管理者・一般で表示分けし、コントローラーの重複を削除

    public function adminIndex(){
        $items = Item::latest()->get();
        return view('admin.index', compact('items'));
    }

    public function adminShow($itemId){
        $item = Item::findOrFail($itemId);
        return view('admin.show', compact('item'));
    }

    public function adminCreate(){

    }

    public function adminStore(){

    }

    public function adminEdit($itemId){

    }

    public function adminUpdate(){

    }

    public function adminDestroy(){

    }
}
