@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ホーム</div>
 
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h>ようこそ、{{ Auth::user()->name }}さん！</h>
                    <br>
                    <th>メールアドレス</th>
                    <td>{{ Auth::user()->email }}<td>
</tr>
<br>
<tr>
<th>住所</th>
<td>{{ Auth::user()->address }}</td>
</tr>
<br>
<a href="./auth/{{Auth::user()->id}}/edit">
編集
</a>
<tr>
                   
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
