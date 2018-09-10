@extends('layouts.defalut')

@section('title', '投稿確認')

@section('content')

    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-1">
        <div class="row">
            <!-- <!-- Poduct Gallery -->
            <div class="col-md-6">
                <div class="product-gallery">
                    <div class="gallery-wrapper">
                        <div class="gallery-item active"><a href="/img/shop/single/01.jpg" data-hash="one" data-size="1000x667"></a></div>
                    </div>
                    <div class="product-carousel owl-carousel">
                        <div data-hash="one"><img src="{{$thum}}" style="width: 100%;"></div>
                    </div>
                </div>
            </div>
            <!-- Product Info-->
            <div class="col-md-6">
                <form method="post" action="{{ url("/products") }}">
                    <p style="color: red;">まだ投稿は完了していません</p>
                <div class="padding-top-2x mt-2 hidden-md-up"></div>
                <h2 class="padding-top-1x text-normal">{{$data['title']}}</h2>
                <input class="loginform" type="hidden" name="title" value="{{$data['title']}}" ><br>
                <hr class="margin-bottom-1x">

                <p>URL：{{$data['url']}}</p>
                <input type="hidden" name="url" value="{{$data['url']}}" >
                <p>詳細：<br>{{$data['description']}}</p>
                <input type="hidden" name="description" value="{{$data['description']}}">
                <p>カテゴリー：{{Helper::getCategoryName($data['category_id'])}}</p>
                <input type="hidden" name="category_id" value="{{$data['category_id']}}">
                <input type="hidden" name="thum" value="{{$thum}}">

                <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <div class="custom-control custom-checkbox d-block">

                    </div>

                    <input class="btn btn-primary margin-right-none" type="submit" name="write" value="投稿する">
                </div>

                </form>
            </div>
        </div>
    </div> -->


    {{--<div class="container" style="background: #EEEEEE; height: 1000px; border: solid white;">--}}
        {{--<div class="loginbox">--}}
            {{--<p>写真</p>--}}
            {{--<div class="topNaviPhoto3" style="width: 50%;"><img src="{{$thum}}" alt="" /></div>--}}
            {{--<form method="post" action="{{ url("/products") }}">--}}
                {{--<p>商品名：{{$data['title']}}</p>--}}
                {{--<input class="loginform" type="hidden" name="title" value="{{$data['title']}}" ><br>--}}
                {{--<p>商品説明：{{$data['description']}}</p>--}}
                {{--<input type="hidden" name="description" value="{{$data['desription']}}">--}}
                {{--<p>カテゴリー：{{$data['category_id']}}</p>--}}
                {{--<input type="hidden" name="category_id" value="{{$data['category_id']}}">--}}
                {{--<p>URL：{{$data['url']}}</p>--}}
                {{--<input type="hidden" name="url" value="{{$data['url']}}" >--}}
                {{--@php(var_dump($thum))--}}
                {{--<input type="hidden" name="thum" value="{{$thum}}">--}}
                {{--<input class="myButtonlog2" type="submit" name="write" value="出品">--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection