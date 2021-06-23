@extends('layouts.show')

@section('page_title')
{{ $item -> item_name }}@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('images/'. $item -> imgpath ) }}" alt="{{ $item -> imgpath }}" class="img-fluid" >
        </div>

        <div class="col-md-6">
            <h1 class="text-black">{{ $item -> item_name }}</h1>

            <p>{{ $item -> item_description }}</p>
            <p>
                <strong class="text-primary h4">
                    {{ number_format($item -> item_price) }}
                </strong>
            </p>
            <div>
                {{-- todo: カートとの連携 --}}
                <form method="POST" action="/">
                    @csrf
                    <input type="hidden" name="cart_items" value="{{ $item -> id }}">
                    <button class="btn btn-sm btn-primary" type="submit">カートに追加する</button>
                </form>
            </div>
        </div>
    </div>
@endsection
