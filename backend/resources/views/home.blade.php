@extends('layouts.layout')

@section('page_title', 'profile')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row justify-content-center">
                <div class="col-md-7 site-section-heading text-center pt-4">
                  <h2>Profile</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="user-card-outer">
                    <div class="user-card-info">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h1>{{ Auth::user()->name }}</h1>
                        <ul>
                            <li>{{ Auth::user()->email }}</li>
                            <li>{{ Auth::user()->address }}</li>
                        </ul>
                    </div>
                    <div>
                        <a href="/user/{{Auth::user()->id}}/edit">プロフィール内容の編集</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
