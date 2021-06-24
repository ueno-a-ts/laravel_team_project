
@extends('layouts.layout')
@section('page_title', 'mycart')

@section('content')
<div class="container-fluid">
<div class="">
    <div class="mx-auto" style="max-width:1200px">
        <h1 class="" style="color:#555555;  font-size:1.2em; padding:24px 0px;">{{ Auth::user()->name }}さんのカートの中身</h1>
        <p class="text-center">{{ $message ?? '' }}</p><br>
        <div class="card-body">
        @if($my_carts->isNotEmpty())
            @foreach($my_carts as $my_cart)
            <div class="mycart_box">
                <p><img src="/images/{{$my_cart->item->imgpath}}" alt="" class="incart" ></p>
                <p>{{$my_cart->item->item_name}}</p>
                <p>{{ number_format($my_cart->item->item_price)}}円 </p>
                <form action="/cartdelete" method="post">
                    @csrf
                    <input type="hidden" name="item_id" value="{{ $my_cart->item->id }}">
                    <input type="submit" value="カートから削除する">
                </form>
            </div>
            @endforeach
            <form action="/buy" method="post">
                @csrf
                <button type="submit" class="btn btn-danger btn-lg text-center buy-btn" >
                    購入する
                </button>
            </form>
        </div>
        @else
            <p class="text-center">カートはからっぽです。</p>
        @endif
        <a class="" href="/">商品一覧へ</a>
    </div>
</div>
</div>
@endsection