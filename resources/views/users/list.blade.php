

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
            @foreach ($users as $user)
            <div class="grid-item">
                <div class="product-card">
                    <a class="product-thumb" href="/products/{{ $user->id }}">
                    <img src="{{$user->avatar()}}" style="width: 100%; height: 100%;">
                    </a>
                    <h3 class="product-title" style="padding-top: 10px;"><a href="/products/{{ $user->id }}">{{$user->name}}</a></h3>
                    <h4 class="product-price">{{$user->catchphrase}}</h4>
                    <h4 class="product-price">{{$user->skill}}</h4>
                    <h4 class="product-price">{{$user->affiliation}}</h4>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection