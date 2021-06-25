
@extends('layouts.layout')
@section('page_title', 'mycart')

@section('content')
<div class="bg-light py-3">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-0">
            <a href="{{ url()->previous() }}">Back</a>
        </div>
    </div>
    </div>
</div>

<div class="container-fluid">
    <h1 class="" style="color:#555555;  font-size:1.2em; padding:24px 0px;">{{ Auth::user()->name }}さんのカートの中身</h1>
    <p class="text-center">{{ $message ?? '' }}</p><br>

    <table class="table table-bordered">
        @if($my_carts->isNotEmpty())
                <div>
                    @foreach($my_carts as $my_cart)
                    <div class="mycart_box">
                        <p class="product-thumbnail">Image</p>
                        <img src="/images/{{$my_cart->item->imgpath}}" alt="{{ $my_cart->item->imgpath}}" class="img-fluid top-items-img" >
                        <p class="product-name">Product</p>
                        <h2 class="h5 text-black">{{$my_cart->item->item_name}}</h2>
                        <p class="product-price">Price</p>
                        <p class="text-primary h4">{{ number_format($my_cart->item->item_price) }}</p>

                        <div class="product-delete">
                            <form action="/cartdelete" method="post">
                                @csrf
                                <input type="hidden" name="item_id" value="{{ $my_cart->item->id }}">
                                <input type="submit" class="btn btn-primary btn-sm" value="X">
                            </form>
                            <div>
                                <form action="/buy" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-lg text-center buy-btn" >
                                        購入する
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        @else
            <p class="text-center">カートはからっぽです。</p>
        @endif
    </table>
</div>

@endsection
