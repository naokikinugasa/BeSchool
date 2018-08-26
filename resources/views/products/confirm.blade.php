@extends('layouts.defalut')

@section('title', '出品確認')

@section('content')

    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-1">
        <div class="row">
            <!-- Poduct Gallery-->
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
                    <p style="color: red;">まだ出品は完了していません</p>
                <div class="padding-top-2x mt-2 hidden-md-up"></div>
                <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i>
                </div><span class="text-muted align-middle">&nbsp;&nbsp;4.2 | 3 customer reviews</span>
                <h2 class="padding-top-1x text-normal">{{$data['title']}}</h2>
                <input class="loginform" type="hidden" name="title" value="{{$data['title']}}" ><br>
                <hr class="margin-bottom-1x">
                <span class="h2 d-block">¥ {{$data['price_day']}}/日</span>
                @if(isset($data['price_week']))
                <span class="h2 d-block">¥ {{$data['price_week']}}/週</span>
                @endif
                @if(isset($data['price_month']))
                <span class="h2 d-block">¥ {{$data['price_month']}}/月</span>
                @endif
                <input type="hidden" name="price_day" value="{{$data['price_day']}}" >
                <input type="hidden" name="price_week" value="{{$data['price_week']}}" >
                <input type="hidden" name="price_month" value="{{$data['price_month']}}" >

                <p>場所：{{$data['place']}}</p>
                <input type="hidden" name="place" value="{{$data['place']}}" >
                <p>詳細：<br>{{$data['honbun']}}</p>
                <input type="hidden" name="honbun" value="{{$data['honbun']}}">
                <div class="padding-bottom-1x mb-2"><span class="text-medium">Categories:&nbsp;{{Helper::getCategoryName($data['category_id'])}}</span></div>
                <input type="hidden" name="category_id" value="{{$data['category_id']}}">
                <input type="hidden" name="thum" value="{{$thum}}">

                <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <div class="custom-control custom-checkbox d-block">

                    </div>

                    <input class="btn btn-primary margin-right-none" type="submit" name="write" value="出品する">
                </div>

                <div class="_16tcko6">

                    <div class="d-flex flex-wrap justify-content-between">
                        <div class="entry-share mt-2 mb-2"><span class="text-muted">Share:</span>
                            <div class="share-links"><a class="social-button shape-circle sb-facebook" href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter" href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-instagram" href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="socicon-instagram"></i></a><a class="social-button shape-circle sb-google-plus" href="#" data-toggle="tooltip" data-placement="top" title="Google +"><i class="socicon-googleplus"></i></a></div>
                        </div>
                        {{--<div class="sp-buttons mt-2 mb-2">--}}
                        {{--<button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>--}}
                        {{--<button class="btn btn-primary" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-bag"></i> Add to Cart</button>--}}
                        {{--</div>--}}
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>


    {{--<div class="container" style="background: #EEEEEE; height: 1000px; border: solid white;">--}}
        {{--<div class="loginbox">--}}
            {{--<p>写真</p>--}}
            {{--<div class="topNaviPhoto3" style="width: 50%;"><img src="{{$thum}}" alt="" /></div>--}}
            {{--<form method="post" action="{{ url("/products") }}">--}}
                {{--<p>商品名：{{$data['title']}}</p>--}}
                {{--<input class="loginform" type="hidden" name="title" value="{{$data['title']}}" ><br>--}}
                {{--<p>商品説明：{{$data['honbun']}}</p>--}}
                {{--<input type="hidden" name="honbun" value="{{$data['honbun']}}">--}}
                {{--<p>カテゴリー：{{$data['category_id']}}</p>--}}
                {{--<input type="hidden" name="category_id" value="{{$data['category_id']}}">--}}
                {{--<p>受け渡し場所：{{$data['place']}}</p>--}}
                {{--<input type="hidden" name="place" value="{{$data['place']}}" >--}}
                {{--<p>価格：{{$data['price_day']}}</p>--}}
                {{--<input type="hidden" name="price_day" value="{{$data['price_day']}}" >--}}
                {{--@php(var_dump($thum))--}}
                {{--<input type="hidden" name="thum" value="{{$thum}}">--}}
                {{--<input class="myButtonlog2" type="submit" name="write" value="出品">--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection