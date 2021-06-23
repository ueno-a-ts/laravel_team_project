@extends('layouts.layout')

@section('page_title', 'top')

@section('content')
    <div id="items-top">

        <div class="row justify-content-center">
            <div class="col-md-7 site-section-heading text-center pt-4">
              <h2>Featured Items</h2>
            </div>
        </div>

        <div class="top-items-outer">
            @foreach ($items as $item)
            <a href="/items/{{ $item -> id }}">
                    <div class="top-items-content">
                        <h3>{{ $item -> item_name }}</h3>
                        <img src="{{ asset('images/'. $item -> imgpath ) }}" alt="{{ $item -> imgpath }}" class="top-items-img" >
                        <p class="text-primary font-weight-bold">{{ number_format($item -> item_price) }}</p>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="top-items-locate-btn">
            <p>
                <a href="/" class="btn btn-sm btn-primary">See More Item</a>
            </p>
        </div>
    </div>
@endsection
