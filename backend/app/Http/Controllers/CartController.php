<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CartController extends Controller
{
    public function myCart()
    {
        $my_carts = Cart::all();
        return view('carts.mycarts',compact('my_carts'));
        
    }
}
