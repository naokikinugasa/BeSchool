

@extends('layouts.defalut')

@section('title', '動画一覧')

@section('content')

    <!-- Page Content-->
    <div class="products_header">
        <img src="{{ asset('/img/products_img.jpg') }}" width="100%">
    </div>

    <div class="products_list_title">
        <h4>動画一覧</h4>
    </div>

    <div class="products_container">
        <div class="cat_box">
            <a href="{{ action('ProductsController@index') }}" class="cat_item cat_all">ALL</a>
            <a href="{{ action('ProductsController@category', 1) }}" class="cat_item cat_mind">MIND</a>
            <a href="{{ action('ProductsController@category', 2) }}" class="cat_item cat_skill">SKILL</a>
        </div>
        <div class="products_box">
            @foreach ($products as $product)
            <div class="products_item">
                <div class="product_card">
                    <a class="product_thumb" href="{{ action('ProductsController@show', $product->id) }}"><video src="{{asset('/movie/product')}}/{{$product->id}}/thum.qt" style="width: 100%; height: 100%;" controlslist="nodownload"></video></a>
                    <h5 class="product_cat cat_id_<?php echo $product->category_id; ?>">{{Helper::getCategoryName($product->category_id)}}</h5>
                    <h4 class="product_title" style="padding-top: 10px;"><a href="{{ action('ProductsController@show', $product->id) }}">{{$product->title}}</a></h4>
                    <p class="product_company">{{$product->getOwnerName()}}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="pagination_box hidden">
        {{ $products->links() }}
        </div>
        <div class="pagination_box">
            <div class="paginate">
                @if ( $products->previousPageUrl() )
                <a href="{{ $products->previousPageUrl() }}">&lt;&lt;</a>
                @else
                    <p>&lt;&lt;</p>
                @endif

                @if ( $products->nextPageUrl() )
                    <a href="{{ $products->nextPageUrl() }}">&gt;&gt;</a>
                @else
                    <p>&gt;&gt;</p>
                @endif
            </div>
        </div>
    </div>

</div>
@endsection