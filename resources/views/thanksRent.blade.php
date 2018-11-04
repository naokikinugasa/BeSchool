@extends('layouts.defalut')

@section('title', '予約完了')
@section('content')

<div class="container padding-bottom-3x mb-2">
    <div class="card text-center">
        <div class="card-body padding-top-2x">
            <h3 class="card-title">{{$bunsyo}}が完了しました！</h3>
            <p class="card-text">{{$bunsyo2}}</p>
            <div class="padding-top-1x padding-bottom-1x"><a class="btn btn-outline-primary" href="products">動画一覧ページへ</a></div>
        </div>
    </div>
</div>

@endsection