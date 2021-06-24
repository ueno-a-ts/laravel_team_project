@extends('layouts.layout')

@section('content')

    <div>
        <p>検索ワード｜{{ $search_word }}</p>
    </div>

    @if ($items->count())
        <div class="items-outer">
            @foreach ($items as $item)
            <a href="/items/{{ $item -> id }}">
                    <div class="items-content">
                        <h3>{{ $item -> item_name }}</h3>
                        <img src="{{ asset('images/'. $item -> imgpath ) }}" alt="{{ $item -> imgpath }}" class="items-img" >
                        <p class="text-primary font-weight-bold">{{ number_format($item -> item_price) }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    @else
        <div class="row justify-content-center">
            <div class="col-md-7 text-center pt-4">
                <h2>お探しの商品は見つかりませんでした。</h2>
                <br>
                <p><a href="/top" class="btn btn-sm btn-primary">Back to Top</a></p>
            </div>
        </div>
    @endif

@endsection
