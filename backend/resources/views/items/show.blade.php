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
                <form method="POST" action="mycart">
                    @csrf
                    <input type="hidden" name="item_id" value="{{ $item -> id }}">
                    <button class="btn btn-sm btn-primary" type="submit">
                        @if (Auth::check())
                            カートに追加する
                        @else
                            ログインする
                        @endif
                    </button>
                </form>
            </div>
        </div>

    </div>
@endsection
