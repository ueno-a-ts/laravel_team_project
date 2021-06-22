@extends('layouts.layout')

@section('page_title', 'カート一覧')

@section('content')
<div class="container-fluid">
 <div class="">
     <div class="mx-auto" style="max-width:1200px">
        <h1 class="">{{ Auth::user()->name }}さんのカートの中身</h1>
        <p class="text-center">{{ $message ?? '' }}</p><br>
        <div class="card-body">
            @foreach($my_carts as $my_cart)
                <div class="mycart_box">
                    <p>ユーザーID：{{$my_cart->user_id}}</p>
                    <p>商品ID：{{$my_cart->item_id}}</p>
                </div>
            @endforeach
        </div>
         <a class="" href="/">商品一覧へ</a>
     </div>
 </div>
</div>
@endsection