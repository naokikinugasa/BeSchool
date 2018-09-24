

@extends('layouts.defalut')

@section('title', '動画一覧')

@section('content')

    <!-- Page Content-->

    <div class="products_list_title">
        <h4>動画一覧</h4>
    </div>

    <div class="products_container">
        <div class="cat_box">
            <a href="/products/" class="cat_item cat_all">ALL</a>
            <a href="/products/category/1" class="cat_item cat_mind">MIND</a>
            <a href="/products/category/2" class="cat_item cat_skill">SKILL</a>
        </div>
        <div class="products_box">
            @foreach ($products as $product)
            <div class="products_item">
                <div class="product_card">
                    <a class="product_thumb" href="/products/{{ $product->id }}"><video src="{{$product->pic_thum()}}" style="width: 100%; height: 100%;"></video></a>
                    <h5 class="product_cat cat_id_<?php echo $product->category_id; ?>">{{Helper::getCategoryName($product->category_id)}}</h5>
                    <h4 class="product_title" style="padding-top: 10px;"><a href="/products/{{ $product->id }}">{{$product->title}}</a></h4>
                    <p class="product_company">{{$product->getOwnerName()}}</p>
                </div>
            </div>
            @endforeach
        </div>
        {{ $products->links() }}
    </div>

</div>
@endsection