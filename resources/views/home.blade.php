
@extends('layouts.defalut')


@section('content')
<!-- Page Title-->
<!-- Page Content-->
<!-- Main Slider-->
<section class="hero-slider" style="background-image: url(img/soukogazou.jpg); height: 300px;">
    {{--<div class="owl-carousel large-controls dots-inside" data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 7000 }">--}}
        {{----}}
    {{--</div>--}}
</section>
<!-- Top Categories-->
<section class="container padding-top-3x">
    <h3 class="text-center mb-30"><strong style="color: red">Shareeeeeee</strong>は近所の人とモノを<strong style="color: red">貸し借り</strong>するサービスです</h3>
    <div class="text-center"><a class="btn btn-primary margin-top-none" href="/howto">使い方を見る</a></div>
    <br><br><br>
    <div class="homeimg">
    <img src="img/Shareモデル4.png" alt="Category" style="height: 100%; width: 100%; padding: 0px 30px;">
    </div>
    {{--<br><br><br><br><br><br><br><br>--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-4 col-sm-6">--}}
            {{--<div class="text-center">--}}
                {{--<h4 class="card-title">1.使ってみたいけど高くて買えない</h4>--}}
                {{--<div class="inner" style="height: 210px;">--}}
                    {{--<img src="img/PSVR.jpg" alt="Category" style="height: 100%; width: 100%; padding: 0px 30px;">--}}
                {{--</div>--}}
                {{--<div class="card-body text-center" style="height: 210px; padding: 70px 90px;">--}}
                    {{--<img src="img/yazirusi.png" style="width: 100%;">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-4 col-sm-6">--}}
            {{--<div class="text-center">--}}
                {{--<h4 class="card-title">2.数回しか使わないので元が取れない</h4>--}}
                {{--<div class="inner" style="height: 210px;">--}}
                    {{--<img src="img/kawanakya.jpg" alt="Category" style="height: 100%; width: 100%; padding: 0px 30px;">--}}
                {{--</div>--}}
                {{--<div class="card-body text-center" style="height: 210px; padding: 70px 90px;">--}}
                    {{--<img src="img/yazirusi.png" style="width: 100%;">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-4 col-sm-6">--}}
            {{--<div class="text-center">--}}
                {{--<h4 class="card-title">3.部屋が狭いので置く場所がない</h4>--}}
                {{--<div class="inner" style="height: 210px;">--}}
                    {{--<img src="img/heya.jpg" alt="Category" style="height: 100%; width: 100%; padding: 0px 30px;">--}}
                {{--</div>--}}
                {{--<div class="card-body text-center" style="height: 210px; padding: 70px 90px;">--}}
                    {{--<img src="img/yazirusi.png" style="width: 100%;">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-4 col-sm-6">--}}
        {{--<div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">--}}
        {{--<div class="inner">--}}
        {{--<div class="main-img"><img src="img/shop/categories/07.jpg" alt="Category"></div>--}}
        {{--<div class="thumblist"><img src="img/shop/categories/08.jpg" alt="Category"><img src="img/shop/categories/09.jpg" alt="Category"></div>--}}
        {{--</div></a>--}}
        {{--<div class="card-body text-center">--}}
        {{--<h4 class="card-title">Bags</h4>--}}
        {{--<p class="text-muted">Starting from $27.00</p><a class="btn btn-primary btn-sm" href="shop-grid-ls.html">View Products</a>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-4 col-sm-6" style="height: 400px; width: 100%; padding: 0px 30px;">--}}
            {{--<div class="inner" style="height: 50%;">--}}
                {{--<img src="img/projector3.jpg" alt="Category" style="height: 100%; width: 100%;">--}}
            {{--</div>--}}
            {{--<div class="card-body text-center">--}}
                {{--<h4 class="card-title">高くて買えなかったものをレンタルして使おう。</h4>--}}
                {{--<a class="btn btn-primary" href="{{url('/products')}}">商品を見る</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-4 col-sm-6" style="height: 400px;">--}}
            {{--<div class="inner" style="height: 50%;">--}}
                {{--<img src="img/placeit.jpg" alt="Category" style="height: 100%; width: 100%; padding: 0px 30px;">--}}
            {{--</div>--}}
            {{--<div class="card-body text-center">--}}
                {{--<h4 class="card-title">使ってないものをシェアしてお小遣いを稼ごう。</h4>--}}
                {{--<a class="btn btn-primary" href="{{url('/products/create')}}">出品する</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-4 col-sm-6" style="height: 400px;">--}}
            {{--<div class="inner" style="height: 50%;">--}}
                {{--<img src="img/heya2.jpg" alt="Category" style="height: 100%; width: 100%; padding: 0px 30px;">--}}
            {{--</div>--}}
            {{--<div class="card-body text-center">--}}
                {{--<h4 class="card-title">必要最低限のモノで快適に過ごそう。</h4>--}}
                {{--<a class="btn btn-primary" href="{{url('/howto')}}">使い方を見る--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="text-center"><a class="btn btn-outline-secondary margin-top-none" href="shop-categories.html">All Categories</a></div>--}}
</section>
<!-- Promo #1-->

<!-- Featured Products Carousel-->
<section class="container padding-top-3x padding-bottom-3x">
    <h3 class="text-center mb-30">人気の商品</h3>
    <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
        <div class="grid-item" style="height: 320px;">
            <div class="product-card" style="height: 320px;">
                <a class="product-thumb" style="height: 150px;" href="/products/19"><img src="/img/product/19/thum.jpg" style="width: 100%; height: 100%;"></a>
                <h3 class="product-title" style="padding-top: 10px;"><a href="/products/19">Gear VR</a></h3>
                <h4 class="product-price">¥ 200/日</h4>
                <div class="product-buttons" style="padding-top: 1px;">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="いいね"><i class="icon-heart"></i></button>
                    <a href="/products/19">
                        <button class="btn btn-outline-primary btn-sm">詳細を見る</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="grid-item" style="height: 320px;">
            <div class="product-card" style="height: 320px;">
                <a class="product-thumb" style="height: 150px;" href="/products/8"><img src="/img/product/8/thum.jpg" style="width: 100%; height: 100%;"></a>
                <h3 class="product-title" style="padding-top: 10px;"><a href="/products/8">ハンドミキサー</a></h3>
                <h4 class="product-price">¥ 100/日</h4>
                <div class="product-buttons" style="padding-top: 1px;">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="いいね"><i class="icon-heart"></i></button>
                    <a href="/products/8">
                        <button class="btn btn-outline-primary btn-sm">詳細を見る</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="grid-item" style="height: 320px;">
            <div class="product-card" style="height: 320px;">
                <a class="product-thumb" style="height: 150px;" href="/products/5"><img src="/img/product/5/thum.jpg" style="width: 100%; height: 100%;"></a>
                <h3 class="product-title" style="padding-top: 10px;"><a href="/products/5">プロジェクター</a></h3>
                <h4 class="product-price">¥ 100/日</h4>
                <div class="product-buttons" style="padding-top: 1px;">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="いいね"><i class="icon-heart"></i></button>
                    <a href="/products/5">
                        <button class="btn btn-outline-primary btn-sm">詳細を見る</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="grid-item" style="height: 320px;">
            <div class="product-card" style="height: 320px;">
                <a class="product-thumb" style="height: 150px;" href="/products/22"><img src="/img/product/22/thum.jpg" style="width: 100%; height: 100%;"></a>
                <h3 class="product-title" style="padding-top: 10px;"><a href="/products/22">ニンテンドー64</a></h3>
                <h4 class="product-price">¥ 100/日</h4>
                <div class="product-buttons" style="padding-top: 1px;">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="いいね"><i class="icon-heart"></i></button>
                    <a href="/products/22">
                        <button class="btn btn-outline-primary btn-sm">詳細を見る</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center" style="margin-top: 20px;"><a class="btn btn-primary" href="/products">もっと見る</a></div>

</section>


{{--<!-- Popular Brands-->--}}
{{--<section class="bg-faded padding-top-3x padding-bottom-3x">--}}
{{--<div class="container">--}}
{{--<h3 class="text-center mb-30 pb-2">Popular Brands</h3>--}}
{{--<div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: false, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;470&quot;:{&quot;items&quot;:3},&quot;630&quot;:{&quot;items&quot;:4},&quot;991&quot;:{&quot;items&quot;:5},&quot;1200&quot;:{&quot;items&quot;:6}} }"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/01.png" alt="Adidas"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/02.png" alt="Brooks"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/03.png" alt="Valentino"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/04.png" alt="Nike"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/05.png" alt="Puma"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/06.png" alt="New Balance"><img class="d-block w-110 opacity-75 m-auto" src="img/brands/07.png" alt="Dior"></div>--}}
{{--</div>--}}
{{--</section>--}}
<!-- Services-->
<section class="container padding-bottom-2x text-center">
    <h3 class="text-center mb-30">Shareの特徴</h3>
    <div class="row">
        {{--<div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="img/services/01.png" alt="Shipping">--}}
        {{--<h6>Free Worldwide Shipping</h6>--}}
        {{--<p class="text-muted margin-bottom-none">Free shipping for all orders over $100</p>--}}
        {{--</div>--}}
        <div class="col-md-4 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="img/services/02.png" alt="Money Back">
            <h6>近所の人と気軽に貸し借り</h6>
            <p class="text-muted margin-bottom-none">人に会う必要がないので気軽に貸し借りできます</p>
        </div>
        <div class="col-md-4 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="img/services/03.png" alt="Support">
            <h6>カスタマーサポート</h6>
            <p class="text-muted margin-bottom-none">ご不明な点はいつでもお問い合わせください</p>
        </div>
        <div class="col-md-4 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="img/services/04.png" alt="Payment">
            <h6>出品はもちろん無料</h6>
            <p class="text-muted margin-bottom-none">その他、会員登録料・月会費・カード手数料は一切かかりません</p>
        </div>
    </div>
</section>
@endsection