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
                        <script src="/js/checkbutton.js"></script>
                        <form method="POST" action="/admin/users/{{ $user -> id }}">
                            @csrf
                            @method('PUT')

                            <label for="option-sm" class="d-flex mr-3 mb-3">
                                <span class="d-inline-block mr-2" style="top:-2px; position: relative;">
                                    <input
                                        type="radio"
                                        name="admin_check"
                                        onclick="radioDeselection(this, 1)"
                                        {{ old('admin_check') ? "checked" : ( ($user -> admin_check) === 1 ? "checked" : "") }}
                                        value='1'>
                                </span>
                                    <span class="d-inline-block text-black">管理者</span>
                            </label>
                            <label for="option-sm" class="d-flex mr-3 mb-3">
                                <span class="d-inline-block mr-2" style="top:-2px; position: relative;">
                                    <input
                                        type="radio"
                                        name="admin_check"
                                        onclick="radioDeselection(this, 2)"
                                        {{ old('admin_check') ? "checked" : ( ($user -> admin_check) === 0 ? "checked" : "") }}>
                                </span>
                                    <span class="d-inline-block text-black">一般</span>
                            </label>
                            <input type="hidden" name="user_id" value="{{ $user -> id }}">
                            <button class="btn btn-sm btn-primary" type="submit">Edit</button>
                        </form>
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
