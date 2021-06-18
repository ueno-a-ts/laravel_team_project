<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        // $items = Item::paginate(6);
        $items = Item::all();

        return view('items.index', compact('items'));
    }
}
