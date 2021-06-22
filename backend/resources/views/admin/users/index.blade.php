@extends('layouts.layout')

@section('page_title', 'アカウント管理')

@section('content')
    <div>
        <a href="{{ url()->previous() }}">< back</a>
    </div>
    <div id="items-top">

        <h1>アカウント一覧</h1>
        <br>
        @foreach ($users as $user)
            <div class="user_info">
                <h1>{{ $user -> name }}</h1>
                <ul>
                    <li>{{ $user -> email }}</li>
                    <li>{{ $user -> address }}</li>
                </ul>
            </div>
        @endforeach

    </div>
@endsection
