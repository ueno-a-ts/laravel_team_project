@extends('layouts.layout')

@section('page_title', 'admin new item')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <div>
            <a href="{{ url()->previous() }}">< back</a>
        </div>

        <div>
            <div class="row justify-content-center">
                <div class="col-md-7 site-section-heading text-center pt-4">
                  <h2>New Items</h2>
                </div>
            </div>

            <form method="POST" action="/admin/items" enctype="multipart/form-data">
                @csrf

                <div class="p-3 p-lg-5 border">
                    <div class="form-group row">
                        <label for="item_name" class="text-black">
                            商品名
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-lg-12">
                            <input
                                type="text"
                                name="item_name"
                                required
                                value="{{ old('item_name') }}"
                                class="form-control">
                            @error('item_name')
                                <p class="help">{{ $errors->first('item_name')}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="item_description" class="text-black">
                            商品説明
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-lg-12">
                            <textarea
                                type="text"
                                name="item_description"
                                required
                                cols="30" rows="7"
                                class="form-control"
                                >{{ old('item_description') }}</textarea>
                            @error('item_description')
                                <p class="help">{{ $errors->first('item_description')}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="item_price" class="text-black">
                            商品価格
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-lg-12">
                            <input
                                type="text"
                                name="item_price"
                                required
                                value="{{ old('item_price') }}"
                                class="form-control">
                            @error('item_price')
                                <p class="help">{{ $errors->first('item_price')}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tag" class="text-black">
                            商品写真
                            <span class="text-danger">*</span>
                        </label>
                        <div>
                            <input
                                type="file"
                                name="imgpath"
                                required
                                accept="image/png,image/jpeg,image/gif">
                                <span class="help-block">{{$errors->first('image')}}</span>
                            @error('imgpath')
                                <p class="help">{{ $errors->first('imgpath')}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
