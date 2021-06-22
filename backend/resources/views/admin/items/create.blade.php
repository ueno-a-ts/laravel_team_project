@extends('layouts.layout')

@section('page_title', '商品登録')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <div>
            <a href="{{ url()->previous() }}">< back</a>
        </div>

        <div>
            <h1>商品登録</h1>

            <form method="POST" action="/admin/items" enctype="multipart/form-data">
                @csrf

                <div class="field">
                    <label for="item_name" class="label">商品名</label>
                    <div class="control">
                        <input
                            type="text"
                            name="item_name"
                            required
                            value="{{ old('item_name') }}">
                        @error('item_name')
                            <p class="help">{{ $errors->first('item_name')}}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label for="item_description" class="label">商品説明</label>
                    <div class="control">
                        <textarea
                            type="text"
                            name="item_description"
                            required
                            >{{ old('item_description') }}</textarea>
                        @error('item_description')
                            <p class="help">{{ $errors->first('item_description')}}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label for="item_price" class="label">商品価格</label>
                    <div class="control">
                        <input
                            type="text"
                            name="item_price"
                            required
                            value="{{ old('item_price') }}">
                        @error('item_price')
                            <p class="help">{{ $errors->first('item_price')}}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label for="tag" class="label">商品写真</label>
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
