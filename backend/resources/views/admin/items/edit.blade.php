@extends('layouts.layout')

@section('page_title', 'admin item edit')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <div>
            <a href="{{ url()->previous() }}">< back</a>
        </div>

        <div>
            <div class="row justify-content-center">
                <div class="col-md-7 site-section-heading text-center pt-4">
                  <h2>Edit Items</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <p>
                    <span class="text-danger">*</span>
                    編集したい項目を選んで入力してください
                </p>
            </div>

            <form method="POST" action="/admin/items/{{ $item -> id }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="p-3 p-lg-5 border">
                    <div class="form-group row">
                        <label for="item_name" class="text-black">
                            商品名
                        </label>
                        <div class="col-lg-12">
                            <input
                                type="text"
                                name="item_name"
                                value="{{ $item -> item_name }}"
                                class="form-control">
                            @error('item_name')
                                <p class="help">{{ $errors->first('item_name')}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="item_description" class="text-black">
                            商品説明
                        </label>
                        <div class="col-lg-12">
                            <textarea
                                type="text"
                                name="item_description"
                                cols="30" rows="7"
                                class="form-control"
                                >{{ $item -> item_description }}</textarea>
                            @error('item_description')
                                <p class="help">{{ $errors->first('item_description')}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="item_price" class="text-black">
                            商品価格
                        </label>
                        <div class="col-lg-12">
                            <input
                                type="text"
                                name="item_price"
                                value="{{ $item -> item_price }}"
                                class="form-control">
                            @error('item_price')
                                <p class="help">{{ $errors->first('item_price')}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="form-img">
                        <label for="tag" class="text-black">
                            商品写真
                        </label>
                        <div>
                            <p>
                                <span class="icon icon-camera"></span>
                                登録写真｜{{ $item -> imgpath }}
                            </p>
                        </div>
                        <img src="{{ asset('images/'. $item -> imgpath ) }}" alt="{{ $item -> imgpath }}" style="width: 300px;height: 300px">
                    </div>

                    <div class="form-group row">
                        <div>
                            <button type="submit" class="btn btn-sm btn-primary items-content">Submit</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
