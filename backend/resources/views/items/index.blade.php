<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ECサイト</title>
</head>
<body>
    <div id="items-top">

        <h1>商品一覧</h1>
        <br>
        @foreach ($items as $item)
            <div class="title">
                <h1>{{ $item -> item_name }}</h1>
                <img src="{{ asset('images/'. $item -> imgpath ) }}" alt="{{ $item -> imgpath }}" class="" >
                <br>
            </div>

        @endforeach
    </div>
</body>
</html>
