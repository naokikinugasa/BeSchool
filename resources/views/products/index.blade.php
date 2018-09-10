

@extends('layouts.defalut')

@section('title', '動画一覧')

@section('content')

    <!-- Page Content-->

    <div class="container padding-bottom-3x mb-1">
        <!-- Shop Toolbar-->
        <div class="shop-toolbar padding-bottom-1x mb-2">
            <div class="column">
                <a href="/products/">全て</a>
                <a href="/products/category/1">マインド</a>
                <a href="/products/category/2">スキル</a>
                <div class="shop-sorting">
                    <span class="text-muted">Showing:&nbsp;</span><span>16 items</span>
                </div>
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
                    <a class="product-thumb" href="/products/{{ $product->id }}"><video src="{{$product->pic_thum()}}" style="width: 100%; height: 100%;"></video></a>
                    <h3 class="product-title" style="padding-top: 10px;"><a href="/products/{{ $product->id }}">{{$product->title}}</a></h3>
                    <h4 class="product-price">{{Helper::getCategoryName($product->category_id)}}</h4>
                    <p>{{$product->getOwnerName()}}</p>
                </div>
            </div>
            @endforeach
        </div>
        {{ $products->links() }}
    </div>

</div>
@endsection