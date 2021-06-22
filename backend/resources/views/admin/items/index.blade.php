@extends('layouts.layout')

@section('page_title', '商品管理')

@section('content')
    <div>
        <a href="{{ url()->previous() }}">< back</a>
        <a href="/admin/items/create">商品登録</a>
    </div>
    <div id="items-top">

        <h1>商品一覧</h1>
        <br>
        @foreach ($items as $item)
            <div class="title">
                <a href="/admin/items/{{ $item -> id }}">
                    <h1>{{ $item -> item_name }}</h1>
                    <img src="{{ asset('images/'. $item -> imgpath ) }}" alt="{{ $item -> imgpath }}" class="" >
                </a>
            </div>
        @endforeach

    </div>
@endsection
