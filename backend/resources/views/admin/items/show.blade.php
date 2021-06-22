@extends('layouts.layout')

@section('page_title')
{{ $item -> item_name }}@endsection


@section('content')
    <div>
        <a href="/admin/items">< back</a>
    </div>

    <div>
        <div>
            <button class="" onclick="location.href='./{{ $item -> id}}/edit'">Edit</button>
        </div>

        <div>
            <form method="POST" action="/admin/items/{{ $item -> id }}">
                @csrf
                @method('DELETE')
                <button class="" type="submit" style="background-color: red">Delete</button>
            </form>
        </div>
    </div>

    <div id="items-top">
        <div class="title">
            <h1>{{ $item -> item_name }}</h1>
            <img src="{{ asset('images/'. $item -> imgpath ) }}" alt="{{ $item -> imgpath }}" class="" >
            <p>{{ $item -> item_description }}</p>
            <p>{{ number_format($item -> item_price) }}</p>
        </div>
    </div>
@endsection
