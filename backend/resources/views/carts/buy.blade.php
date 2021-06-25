@extends('layouts.layout')

@section('page_title', 'thankyou')

@section('content')
<div class="csite-section">
   <div class="container">
       <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="display-4 text-black">
                {{ Auth::user()->name }}さん<br>ご購入ありがとうございます</h2>
                <span class="icon-check_circle display-3 text-success"></span>
                <div class="lead mb-5">
                    <p>ご登録頂いたメールアドレスへ決済情報をお送りしております。お手続き完了次第商品を発送致します。</p>
                    <p><a href="/top" class="btn btn-sm btn-primary">Back to Top</a></p>
                </div>

                </div>
            </div>
       </div>
   </div>
</div>
@endsection
