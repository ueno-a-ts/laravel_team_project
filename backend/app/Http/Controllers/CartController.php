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

    public function addMycart(Request $request)
    {
        $user_id = Auth::id(); 
        $item_id=$request->item_id;

        $cart_add_info=Cart::firstOrCreate(['item_id' => $item_id,'user_id' => $user_id]);

        if($cart_add_info->wasRecentlyCreated){
            $message = 'カートに追加しました';
        }
        else{
            $message = 'カートに登録済みです';
        }

        $my_carts = Cart::where('user_id',$user_id)->get();

        return view('mycart',compact('my_carts' , 'message'));

    }
}
