@extends('layouts.layout')
@section('page_title', '管理者画面')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7 site-section-heading text-center pt-4">
        <h2>Admin Console</h2>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="user-card-outer">
            <div>
                <span class="icon icon-shopping_cart" style="font-size: 40px"></span>
                <a href="/admin/items" style="font-size: 30px">
                    商品管理
                </a>
            </div>

            <div>
                <span class="icon-person" style="font-size: 40px"></span>
                <a href="/admin/users" style="font-size: 30px">
                    アカウント管理
                </a>
            </div>
        </div>
    </div>
@endsection
