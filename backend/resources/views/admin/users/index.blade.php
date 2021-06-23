@extends('layouts.layout')

@section('page_title', 'users')

@section('content')
    <div>
        <a href="{{ url()->previous() }}">< back</a>
    </div>
    <div id="users-index">

        <div class="row justify-content-center">
            <div class="col-md-7 site-section-heading text-center pt-4">
              <h2>Registration Users</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($users as $user)
                <div class="user-card-outer">
                    <div class="user-card-info">
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
                            <button class="btn btn-sm btn-primary delete" type="submit" style="background-color: red">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
