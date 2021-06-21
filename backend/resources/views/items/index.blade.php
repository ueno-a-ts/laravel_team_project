@extends('layouts.layout')

@section('page_title', '商品一覧')

@section('content')
    <div id="items-top">

        <h1>商品一覧</h1>
        <br>
        @foreach ($items as $item)
            <div class="title">
                <a href="/items/{{ $item -> id }}">
                    <h1>{{ $item -> item_name }}</h1>
                    <img src="{{ asset('images/'. $item -> imgpath ) }}" alt="{{ $item -> imgpath }}" class="" >
                </a>
            </div>
        @endforeach

        {{ $items -> links() }}
    </div>
@endsection
