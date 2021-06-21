<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ECサイト</title>
</head>
<body>
    <div>
        <a href="{{ url()->previous() }}">< back</a>
    </div>
    <div id="items-top">
        <div class="title">
            <h1>{{ $item -> item_name }}</h1>
            <img src="{{ asset('images/'. $item -> imgpath ) }}" alt="{{ $item -> imgpath }}" class="" >
            <p>{{ $item -> item_description }}</p>
            <p>{{ number_format($item -> item_price) }}</p>
        </div>
        <div>
            {{-- todo: カートとの連携 --}}
            <form method="POST" action="/">
                @csrf
                <input type="hidden" name="cart_items" value="{{ $item -> id }}">
                <button class="button" type="submit">カートに追加する</button>
            </form>
        </div>
    </div>
</body>
</html>
