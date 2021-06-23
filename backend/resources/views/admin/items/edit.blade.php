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
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-lg-12">
                            <textarea
                                type="text"
                                name="item_description"
                                required
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
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-lg-12">
                            <input
                                type="text"
                                name="item_price"
                                required
                                value="{{ $item -> item_price }}"
                                class="form-control">
                            @error('item_price')
                                <p class="help">{{ $errors->first('item_price')}}</p>
                            @enderror
                        </div>
                    </div>

                <div class="field">
                    <label for="tag" class="label">商品写真</label>
                    <p>登録写真は、{{ $item -> imgpath }} です。</p>
                    <img src="{{ asset('images/'. $item -> imgpath ) }}" alt="{{ $item -> imgpath }}" style="width: 300px;height: 300px">
                </div>

                <div class="field is-grouped">
                    <div>
                        <button type="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
