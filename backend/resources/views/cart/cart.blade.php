@extends('layouts.layout')

@section('page_title', 'cart')

@section('content')

    <div class="site-blocks-table">
        <table class="table table-bordered">
        <thead>
            <tr>
            <th class="product-thumbnail">Image</th>
            <th class="product-name">Product</th>
            <th class="product-price">Price</th>
            <th class="product-remove">Remove</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td class="product-thumbnail">
                <img src="{{ asset('images/synthesizer_roland.jpg') }}" alt="Image" class="img-fluid">
            </td>
            <td class="product-name">
                <h2 class="h5 text-black">シンセサイザー ローランド</h2>
            </td>
            <td>
                <strong class="text-primary h4">
                    {{ number_format(77000) }}
                </strong>
            </td>
            <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
            </tr>
        </tbody>
        </table>
    </div>

@endsection
