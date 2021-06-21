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
}
