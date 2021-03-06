@extends('layouts.defalut')

@section('title', '動画詳細')
@section('content')
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-1">
        <div class="row">
            <!-- Poduct Gallery-->
            <div class="col-md-6">
                <div class="product-gallery">
                    <div class="product-carousel owl-carousel">
                        <div data-hash="one" style="height: 100%;"><video src="{{$product->pic_thum()}}" controls></video></div>
                    </div>
                </div>
            </div>
            <!-- Product Info-->
            <div class="col-md-6">
                <div class="padding-top-2x mt-2 hidden-md-up"></div>
                <h2 class="padding-top-1x text-normal">{{$product->title}}</h2>
                <p>URL：<a href="http://www.u-space.com/shop-search/detail.php?shop_id=20207">{{$product->url}}</a></p>
                <p>詳細：<br>{{$product->description}}</p>

                <div class="padding-bottom-1x mb-2"><span class="text-medium">{{Helper::getCategoryName($product->category_id)}}</span></div>

                <button class="btn btn-owner" style="margin-right: 0px; padding: 0px 0px;">
                    <div class="owner-ava">
                        <a href="/company/{{$product->getOwnerId()}}">
                            @if($product->getOwnerAvatar() !== null)
                            <img src="{{$product->getOwnerAvatar()}}" style="display: block;
    width: 44px;
    padding: 3px;
    border: 1px solid #e1e7ec;
border-radius: 50%;">
                            @else
                                <img src="/img/user_default.png" style="display: block;
    width: 44px;
    padding: 3px;
    border: 1px solid #e1e7ec;
border-radius: 50%;">
                            @endif
                        </a>
                    </div>
                </button>
                <span><a href="/company/{{$product->getOwnerId()}}">{{$product->getOwnerName()}}</a></span>

                

                </div>
            </div>

        </div>
    </div>
    </div>


@endsection