
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
        <thead>
            <tr>
                <th class="product-thumbnail">Image</th>
                <th class="product-name">Product</th>
                <th class="product-price">Price</th>
                <th class="product-remove">Remove</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @if($my_carts->isNotEmpty())
                @foreach($my_carts as $my_cart)
                <div class="mycart_box">
                    <td class="product-thumbnail">
                        <img src="/images/{{$my_cart->item->imgpath}}" alt="{{ $my_cart->item->imgpath}}" class="img-fluid top-items-img" >
                    </td>
                    <td class="product-name">
                        <h2 class="h5 text-black">{{$my_cart->item->item_name}}</h2>
                    </td>
                    <td class="product-price">
                        <strong class="text-primary h4">
                            {{ number_format($my_cart->item->item_price) }}
                        </strong>
                    </td>

                    <td class="product-delete">
                        <form action="/cartdelete" method="post">
                            @csrf
                            <input type="hidden" name="item_id" value="{{ $my_cart->item->id }}">
                            <input type="submit" class="btn btn-primary btn-sm" value="X">
                        </form>
                    </td>

                    <td class="product-delete">
                        <form action="/buy" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-lg text-center buy-btn" >
                                購入する
                            </button>
                        </form>
                    </td>

                </div>
                @endforeach
            @else
                <p class="text-center">カートはからっぽです。</p>
            @endif
            </tr>
        </tbody>

        <tbody>
    </table>
</div>

@endsection
