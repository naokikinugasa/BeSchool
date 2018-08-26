

@extends('layouts.defalut')

@section('title', '商品一覧')

@section('content')

    <!-- Page Content-->
    {{--<div class="container padding-bottom-3x mb-1">--}}
        {{--<div class="row">--}}
            {{--<!-- Products-->--}}
            {{--<div class="col-xl-9 col-lg-8">--}}
                {{--<!-- Shop Toolbar-->--}}
                {{--<div class="shop-toolbar padding-bottom-1x mb-2">--}}
                    {{--<div class="column">--}}
                        {{--<div class="shop-sorting">--}}
                            {{--<label for="sorting">Sort by:</label>--}}
                            {{--<select class="form-control" id="sorting">--}}
                                {{--<option>Popularity</option>--}}
                                {{--<option>Low - High Price</option>--}}
                                {{--<option>High - Low Price</option>--}}
                                {{--<option>Avarage Rating</option>--}}
                                {{--<option>A - Z Order</option>--}}
                                {{--<option>Z - A Order</option>--}}
                            {{--</select><span class="text-muted">Showing:&nbsp;</span><span>1 - 12 items</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="column">--}}
                        {{--<div class="shop-view"><a class="grid-view active" href="shop-grid-rs.html"><span></span><span></span><span></span></a><a class="list-view" href="shop-list-rs.html"><span></span><span></span><span></span></a></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- Products Grid-->--}}
                {{--<div class="isotope-grid cols-3 mb-2">--}}
                    {{--<div class="gutter-sizer"></div>--}}
                    {{--<div class="grid-sizer"></div>--}}
                    {{--@foreach ($products as $product)--}}
                    {{--<!-- Product-->--}}
                        {{--<div class="grid-item">--}}
                            {{--<div class="product-card"><a class="product-thumb" href="/products/{{ $product->id }}"><img src="{{$product->pic_thum()}}" alt="Product"></a>--}}
                                {{--<h3 class="product-title"><a href="/products/{{ $product->id }}">{{$product->title}}</a></h3>--}}
                                {{--<h4 class="product-price">{{$product->price}}</h4>--}}
                                {{--<div class="product-buttons">--}}
                                    {{--<button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>--}}
                                    {{--<a href="/products/{{ $product->id }}">--}}
                                    {{--<button class="btn btn-outline-primary btn-sm">詳細を見る</button>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--@endforeach--}}
                {{--</div>--}}
                {{--<!-- Pagination-->--}}
                {{--{{ $products->links() }}--}}
                {{--<nav class="pagination">--}}
                    {{--<div class="column">--}}
                        {{--<ul class="pages">--}}
                            {{--<li class="active"><a href="#">1</a></li>--}}
                            {{--<li><a href="#">2</a></li>--}}
                            {{--<li><a href="#">3</a></li>--}}
                            {{--<li><a href="#">4</a></li>--}}
                            {{--<li>...</li>--}}
                            {{--<li><a href="#">12</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="column text-right hidden-xs-down"><a class="btn btn-outline-secondary btn-sm" href="#">Next&nbsp;<i class="icon-arrow-right"></i></a></div>--}}
                {{--</nav>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}







    <div class="container padding-bottom-3x mb-1">
        <!-- Shop Toolbar-->
        <div class="shop-toolbar padding-bottom-1x mb-2">
            <div class="column">
                <div class="shop-sorting">
                    {{--<label for="sorting">Sort by:</label>--}}
                    {{--<select class="form-control" id="sorting">--}}
                        {{--<option>Popularity</option>--}}
                        {{--<option>Low - High Price</option>--}}
                        {{--<option>High - Low Price</option>--}}
                        {{--<option>Avarage Rating</option>--}}
                        {{--<option>A - Z Order</option>--}}
                        {{--<option>Z - A Order</option>--}}
                    {{--</select>--}}
                    <span class="text-muted">Showing:&nbsp;</span><span>16 items</span>
                </div>
            </div>
            <div class="column">
                <div class="shop-view"><a class="grid-view active" href="shop-grid-ns.html"><span></span><span></span><span></span></a>
                    {{--<a class="list-view" href="shop-list-ns.html">--}}
                    <span></span><span></span><span></span></div>
            </div>
        </div>
        <!-- Products Grid-->
        <div class="isotope-grid cols-4 mb-2">
            <div class="gutter-sizer"></div>
            <div class="grid-sizer"></div>
            <!-- Product-->
            @foreach ($products as $product)
            <div class="grid-item">
                <div class="product-card">
                    <a class="product-thumb" href="/products/{{ $product->id }}"><img src="{{$product->pic_thum()}}" style="width: 100%; height: 100%;"></a>
                    <h3 class="product-title" style="padding-top: 10px;"><a href="/products/{{ $product->id }}">{{$product->title}}</a></h3>
                    <h4 class="product-price">¥ {{$product->price_day}}/日</h4>
                    <div class="product-buttons" style="padding-top: 1px;">
                        {{--<button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="いいね"><i class="icon-heart"></i></button>--}}
                        <a href="/products/{{ $product->id }}">
                        <button class="btn btn-outline-primary btn-sm" style="margin-right: 0px">詳細を見る</button>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $products->links() }}
    </div>

</div>
@endsection