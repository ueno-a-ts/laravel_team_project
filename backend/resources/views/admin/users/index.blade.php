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

            <div>
                <form method="POST" action="/admin/users/{{ $user -> id }}">
                    @csrf
                    @method('DELETE')
                    <button class="" type="submit" style="background-color: red">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
