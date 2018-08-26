<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Share　つくば
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Shareは近所の人とモノを貸し借りするサービスです。現在つくば市限定で稼働しています。">
    <meta name="keywords" content="share, つくば">
    <meta name="author" content="Share">
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">
    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" type="text/css" media="screen" href="/css/vendor.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/extend.css">
    <!-- Main Template Styles-->
    <link id="mainStyles" rel="stylesheet" type="text/css" media="screen" href="/css/styles.min.css">
    <!-- Modernizr-->
    <script src="/js/modernizr.min.js"></script>
    <script src="/js/jquery-3.3.1.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/redmond/jquery-ui.css" >
    <script>
        // $関数の割り当てを初期化
        jQuery.noConflict();
        // 改めて変数を割り当てる
        var $j = jQuery;
        $j(function() {
            $j(".datepicker").datepicker();
        });
    </script>
    <link rel="stylesheet" type="text/css" href="/css/pagination.css">
    <!-- <link rel="stylesheet" type="text/css" href="/css/cal.css"> -->
    {{--<link rel="stylesheet" type="text/css" href="/css/app.css">--}}





    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-67426158-5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-67426158-5');
    </script>

    <meta property="og:title" content="Share" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="https://www.share-rental.com/img/ogt4.png" />

</head>
<!-- Body-->
<body>


{{--@if (Auth::check())--}}
{{--<p>USER: {{$user->name . ' (' . $user->emails . ')'}}</p>--}}
{{--@else--}}
{{--<p>※ログインしていません。<a href="/login">ログイン</a> <a href="/register">登録</a> </p>--}}
{{--@endif--}}


<!-- Off-Canvas Mobile Menu-->
<div class="offcanvas-container" id="mobile-menu"><a class="account-link" href="/users">
        @if(isset($user))
            @if(isset($user->avatar))
                <img src="{{$user->avatar}}" alt="">
            @endif
            <div class="user-info">
                <h6 class="user-name">{{$user->name}}</h6>
                {{--<span class="text-sm text-white opacity-60">290 Reward points</span>--}}
            </div></a>
        @endif

    <nav class="offcanvas-menu">
        <ul class="menu">
            <li class="has-children"><span><a href="/"><span>Home</span></a></span>
            </li>
            <li class="has-children active"><span><a href="/howto"><span>使い方</span></a></span>
                {{--<ul class="offcanvas-submenu">--}}
                    {{--<li><a href="shop-categories.html">Shop Categories</a></li>--}}
                    {{--<li class="active has-children"><span><a href="shop-grid-ls.html"><span>Shop Grid</span></a><span class="sub-menu-toggle"></span></span>--}}
                        {{--<ul class="offcanvas-submenu">--}}
                            {{--<li><a href="shop-grid-ls.html">Grid Left Sidebar</a></li>--}}
                            {{--<li class="active"><a href="shop-grid-rs.html">Grid Right Sidebar</a></li>--}}
                            {{--<li><a href="shop-grid-ns.html">Grid No Sidebar</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="has-children"><span><a href="shop-list-ls.html"><span>Shop List</span></a><span class="sub-menu-toggle"></span></span>--}}
                        {{--<ul class="offcanvas-submenu">--}}
                            {{--<li><a href="shop-list-ls.html">List Left Sidebar</a></li>--}}
                            {{--<li><a href="shop-list-rs.html">List Right Sidebar</a></li>--}}
                            {{--<li><a href="shop-list-ns.html">List No Sidebar</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a href="shop-single.html">Single Product</a></li>--}}
                    {{--<li><a href="cart.html">Cart</a></li>--}}
                    {{--<li><a href="checkout.html">Checkout</a></li>--}}
                {{--</ul>--}}
            </li>
            {{--<li class="has-children"><span><a href="#">商品一覧</a><span class="sub-menu-toggle"></span></span>--}}
                {{--<ul class="offcanvas-submenu">--}}
                    {{--<li class="has-children"><span><a href="#">全て</a><span class="sub-menu-toggle"></span></span>--}}
                        {{--<ul class="offcanvas-submenu">--}}
                            {{--<li><a href="#">Sneakers</a></li>--}}
                            {{--<li><a href="#">Loafers</a></li>--}}
                            {{--<li><a href="#">Boat Shoes</a></li>--}}
                            {{--<li><a href="#">Sandals</a></li>--}}
                            {{--<li><a href="#">View All</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="has-children"><span><a href="#">家電</a><span class="sub-menu-toggle"></span></span>--}}
                        {{--<ul class="offcanvas-submenu">--}}
                            {{--<li><a href="#">Sandals</a></li>--}}
                            {{--<li><a href="#">Flats</a></li>--}}
                            {{--<li><a href="#">Sneakers</a></li>--}}
                            {{--<li><a href="#">Heels</a></li>--}}
                            {{--<li><a href="#">View All</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="has-children"><span><a href="#">Men's Clothing</a><span class="sub-menu-toggle"></span></span>--}}
                        {{--<ul class="offcanvas-submenu">--}}
                            {{--<li><a href="#">Shirts &amp; Tops</a></li>--}}
                            {{--<li><a href="#">Pants</a></li>--}}
                            {{--<li><a href="#">Jackets</a></li>--}}
                            {{--<li><a href="#">View All</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="has-children"><span><a href="#">Women's Clothing</a><span class="sub-menu-toggle"></span></span>--}}
                        {{--<ul class="offcanvas-submenu">--}}
                            {{--<li><a href="#">Dresses</a></li>--}}
                            {{--<li><a href="#">Shirts &amp; Tops</a></li>--}}
                            {{--<li><a href="#">Shorts</a></li>--}}
                            {{--<li><a href="#">Swimwear</a></li>--}}
                            {{--<li><a href="#">View All</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="has-children"><span><a href="#">Bags</a><span class="sub-menu-toggle"></span></span>--}}
                        {{--<ul class="offcanvas-submenu">--}}
                            {{--<li><a href="#">Handbags</a></li>--}}
                            {{--<li><a href="#">Backpacks</a></li>--}}
                            {{--<li><a href="#">Luggage</a></li>--}}
                            {{--<li><a href="#">Wallets</a></li>--}}
                            {{--<li><a href="#">View All</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="has-children"><span><a href="#">Accessories</a><span class="sub-menu-toggle"></span></span>--}}
                        {{--<ul class="offcanvas-submenu">--}}
                            {{--<li><a href="#">Sunglasses</a></li>--}}
                            {{--<li><a href="#">Hats</a></li>--}}
                            {{--<li><a href="#">Watches</a></li>--}}
                            {{--<li><a href="#">Jewelry</a></li>--}}
                            {{--<li><a href="#">Belts</a></li>--}}
                            {{--<li><a href="#">View All</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            <li class="has-children"><span><a href="/products"><span>商品一覧</span></a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="/products">全て</a></li>
                    <li><a href="/products/category/1">家電</a></li>
                    <li><a href="/products/category/2">生活用品</a></li>
                    <li><a href="/products/category/3">趣味</a></li>
                    <li><a href="/products/category/4">スポーツ</a></li>
                    <li><a href="/products/category/5">ファッション</a></li>
                    <li><a href="/products/category/6">その他</a></li>
                </ul>
            </li>
            <li class="has-children"><span><a href="/users"><span>ユーザー情報</span></a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="/users">マイページ</a></li>
                    <li><a href="/users/money">売上金</a></li>
                    <li><a href="/users/renting">レンタル中の商品</a></li>
                    <li><a href="/users/listing">出品中の商品</a></li>
                    <li><a href="/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <i class="icon-unlock"></i>ログアウト</a>
                        <form id="logout-form" action="/logout" method="POST" style="display: none;">
                            <input type="hidden" name="_token" value="IZ7zDhh2X46BdoZlMvD0rOHN2BLeb39EKvpRa9XL">
                        </form>
                    </li>
                </ul>
            </li>

        </ul>
    </nav>
</div>
<!-- Topbar-->
{{--<div class="topbar">--}}
    {{--<div class="topbar-column"><a class="hidden-md-down" href="mailto:support@unishop.com"><i class="icon-mail"></i>&nbsp; support@unishop.com</a><a class="hidden-md-down" href="tel:00331697720"><i class="icon-bell"></i>&nbsp; 00 33 169 7720</a><a class="social-button sb-facebook shape-none sb-dark" href="#" target="_blank"><i class="socicon-facebook"></i></a><a class="social-button sb-twitter shape-none sb-dark" href="#" target="_blank"><i class="socicon-twitter"></i></a><a class="social-button sb-instagram shape-none sb-dark" href="#" target="_blank"><i class="socicon-instagram"></i></a><a class="social-button sb-pinterest shape-none sb-dark" href="#" target="_blank"><i class="socicon-pinterest"></i></a>--}}
    {{--</div>--}}
    {{--<div class="topbar-column"><a class="hidden-md-down" href="#"><i class="icon-download"></i>&nbsp; Get mobile app</a>--}}
        {{--<div class="lang-currency-switcher-wrap">--}}
            {{--<div class="lang-currency-switcher dropdown-toggle"><span class="language"><img alt="English" src="img/flags/GB.png"></span><span class="currency">$ USD</span></div>--}}
            {{--<div class="dropdown-menu">--}}
                {{--<div class="currency-select">--}}
                    {{--<select class="form-control form-control-rounded form-control-sm">--}}
                        {{--<option value="usd">$ USD</option>--}}
                        {{--<option value="usd">€ EUR</option>--}}
                        {{--<option value="usd">£ UKP</option>--}}
                        {{--<option value="usd">¥ JPY</option>--}}
                    {{--</select>--}}
                {{--</div><a class="dropdown-item" href="#"><img src="img/flags/FR.png" alt="Français">Français</a><a class="dropdown-item" href="#"><img src="img/flags/DE.png" alt="Deutsch">Deutsch</a><a class="dropdown-item" href="#"><img src="img/flags/IT.png" alt="Italiano">Italiano</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<!-- Navbar-->
<!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
<header class="navbar navbar-sticky">
    <!-- Search-->
    <form class="site-search" method="get">
        <input type="text" name="site_search" placeholder="Type to search...">
        <div class="search-tools"><span class="clear-search">Clear</span><span class="close-search"><i class="icon-cross"></i></span></div>
    </form>
    <div class="site-branding">
        <div class="inner">
            {{--<!-- Off-Canvas Toggle (#shop-categories)--><a class="offcanvas-toggle cats-toggle" href="#shop-categories" data-toggle="offcanvas"></a>--}}
            <!-- Off-Canvas Toggle (#mobile-menu)--><a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
            <!-- Site Logo<a class="site-logo" href="/"><img src="/img/share.png"></a> -->
        </div>
    </div>
    <!-- Main Navigation-->
    <nav class="site-menu">
        <ul>
            <li class="has-megamenu"><a href="/"><span>Home</span></a>
            </li>
            <li><a href="/howto"><span>使い方</span></a>
            </li>
            <li class="has-megamenu"><a href="/products"><span>全て</span></a>
            </li>
            <li class="has-megamenu"><a href="/products/category/1"><span>家電</span></a>
                {{--<ul class="mega-menu">--}}
                    {{--<li><span class="mega-menu-title">Top Categories</span>--}}
                        {{--<ul class="sub-menu">--}}
                            {{--<li><a href="#">Men's Shoes</a></li>--}}
                            {{--<li><a href="#">Women's Shoes</a></li>--}}
                            {{--<li><a href="#">Shirts and Tops</a></li>--}}
                            {{--<li><a href="#">Swimwear</a></li>--}}
                            {{--<li><a href="#">Shorts and Pants</a></li>--}}
                            {{--<li><a href="#">Accessories</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><span class="mega-menu-title">Specialty Shops</span>--}}
                        {{--<ul class="sub-menu">--}}
                            {{--<li><a href="#">Junior's Shop</a></li>--}}
                            {{--<li><a href="#">Swim Shop</a></li>--}}
                            {{--<li><a href="#">Athletic Shop</a></li>--}}
                            {{--<li><a href="#">Outdoor Shop</a></li>--}}
                            {{--<li><a href="#">Luxury Shop</a></li>--}}
                            {{--<li><a href="#">Accessories Shop</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<section class="promo-box" style="background-image: url(/img/banners/02.jpg);"><span class="overlay-dark" style="opacity: .4;"></span>--}}
                            {{--<div class="promo-box-content text-center padding-top-2x padding-bottom-2x">--}}
                                {{--<h4 class="text-light text-thin text-shadow">New Collection of</h4>--}}
                                {{--<h3 class="text-bold text-light text-shadow">Sunglasses</h3><a class="btn btn-sm btn-primary" href="#">Shop Now</a>--}}
                            {{--</div>--}}
                        {{--</section>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<section class="promo-box" style="background-image: url(/img/banners/03.jpg);">--}}
                            {{--<!-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute.--><span class="overlay-dark" style="opacity: .45;"></span>--}}
                            {{--<div class="promo-box-content text-center padding-top-2x padding-bottom-2x">--}}
                                {{--<h3 class="text-bold text-light text-shadow">Limited Offer</h3>--}}
                                {{--<h4 class="text-light text-thin text-shadow">save up to 50%!</h4><a class="btn btn-sm btn-primary" href="#">Learn More</a>--}}
                            {{--</div>--}}
                        {{--</section>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            </li>
            <li><a href="/products/category/2"><span>生活用品</span></a>
            </li>
            <li><a href="/products/category/3"><span>趣味</span></a>

            </li>
            <li><a href="/products/category/4"><span>スポーツ</span></a>

            </li>
            <li><a href="/products/category/5"><span>ファッション</span></a>

            </li>
            <li class="has-megamenu"><a href="/products/category/6"><span>その他</span></a>
            </li>
        </ul>
    </nav>
    <!-- Toolbar-->
    <div class="toolbar">
        <div class="inner">
            <div class="tools">
                @if(\Illuminate\Support\Facades\Auth::check())
                    <div class="account"><a href="/users"></a><i class="icon-head"></i>
                    <ul class="toolbar-dropdown">
                        <li class="sub-menu-user">
                            <div class="user-ava">
                            @if(isset($user->avatar))
                                <img src="{{$user->avatar}}" alt="User">
                            @else
                                <img src="/img/user_default.png" alt="User">
                            @endif
                            </div>
                            <div class="user-info">
                                <h6 class="user-name">{{$user->name}}</h6>
                            </div>
                        </li>
                        <li><a href="/users/">マイページ</a></li>
                        <li><a href="/users/money">売上金</a></li>
                        <li><a href="/users/renting">レンタル中の商品</a></li>
                        <li><a href="/users/listing">出品中の商品</a></li>
                        {{--<li><a href="account-wishlist.html">いいね！一覧</a></li>--}}
                        <li class="sub-menu-separator"></li>
                        <li><a href="/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <i class="icon-unlock"></i>ログアウト</a>
                            <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                <input type="hidden" name="_token" value="IZ7zDhh2X46BdoZlMvD0rOHN2BLeb39EKvpRa9XL">
                            </form>
                        </li>
                    </ul>
                    </div>
                {{--<div class="cart"><a href="cart.html"></a><i class="icon-bag"></i><span class="count">3</span><span class="subtotal">$289.68</span>--}}
                    {{--<div class="toolbar-dropdown">--}}
                        {{--<div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="/img/cart-dropdown/01.jpg" alt="Product"></a>--}}
                            {{--<div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Unionbay Park</a><span class="dropdown-product-details">1 x $43.90</span></div>--}}
                        {{--</div>--}}
                        {{--<div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="/img/cart-dropdown/02.jpg" alt="Product"></a>--}}
                            {{--<div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Daily Fabric Cap</a><span class="dropdown-product-details">2 x $24.89</span></div>--}}
                        {{--</div>--}}
                        {{--<div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="/img/cart-dropdown/03.jpg" alt="Product"></a>--}}
                            {{--<div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Haan Crossbody</a><span class="dropdown-product-details">1 x $200.00</span></div>--}}
                        {{--</div>--}}
                        {{--<div class="toolbar-dropdown-group">--}}
                            {{--<div class="column"><span class="text-lg">Total:</span></div>--}}
                            {{--<div class="column text-right"><span class="text-lg text-medium">$289.68&nbsp;</span></div>--}}
                        {{--</div>--}}
                        {{--<div class="toolbar-dropdown-group">--}}
                            {{--<div class="column"><a class="btn btn-sm btn-block btn-secondary" href="cart.html">View Cart</a></div>--}}
                            {{--<div class="column"><a class="btn btn-sm btn-block btn-success" href="checkout-address.html">Checkout</a></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                @else
                    <div class="account" style="display: none;">
                    </div>

                    <a href="/login" class="sp-header-btn btn-red" style="text-decoration: none">ログイン</a>
                    <a href="/register" class="sp-header-btn header-signup" style="text-decoration: none">新規登録</a>
                @endif
                <div class="search"><i class="icon-search"></i></div>
            </div>
        </div>
    </div>
</header>
<!-- Off-Canvas Wrapper-->
<div class="offcanvas-wrapper">
    @if(basename(request()->path()) !== 'home' && basename(request()->path()) !== '')
    <!-- Page Title-->
    <div class="page-title">
        <div class="container">
            <div class="column">
                <h1>@yield('title')</h1>
            </div>
            {{--<div class="column">--}}
                {{--<ul class="breadcrumbs">--}}
                    {{--<li><a href="index.html">Home</a>--}}
                    {{--</li>--}}
                    {{--<li class="separator">&nbsp;</li>--}}
                    {{--<li><a href="account-orders.html">Account</a>--}}
                    {{--</li>--}}
                    {{--<li class="separator">&nbsp;</li>--}}
                    {{--<li>My Wishlist</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        </div>
    </div>
    @endif
@yield('content')
<!-- Site Footer-->
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- Contact Info-->
                <section class="widget widget-light-skin">
                    <h3 class="widget-title">Get In Touch With Us</h3>
                    <p class="text-white">Phone: 080-1437-4922</p>
                    {{--<ul class="list-unstyled text-sm text-white">--}}
                        {{--<li><span class="opacity-50">Monday-Friday:</span>9.00 am - 8.00 pm</li>--}}
                        {{--<li><span class="opacity-50">Saturday:</span>10.00 am - 6.00 pm</li>--}}
                    {{--</ul>--}}
                    <p><a class="navi-link-light" href="#">sharetsukuba@gmail.com</a></p>
                    {{--<a class="social-button shape-circle sb-facebook sb-light-skin" href="#"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter sb-light-skin" href="#"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-instagram sb-light-skin" href="#"><i class="socicon-instagram"></i></a><a class="social-button shape-circle sb-google-plus sb-light-skin" href="#"><i class="socicon-googleplus"></i></a>--}}
                </section>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Mobile App Buttons-->
                <section class="widget widget-light-skin">
                    <h3 class="widget-title">SNS</h3>
                    {{--<a class="market-button apple-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">App Store</span></a><a class="market-button google-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Google Play</span></a><a class="market-button windows-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Windows Store</span></a>--}}
                    <a class="social-button shape-circle sb-facebook sb-light-skin" href="#"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter sb-light-skin" href="#"><i class="socicon-twitter"></i></a>
                </section>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- About Us-->
                <section class="widget widget-links widget-light-skin">
                    <h3 class="widget-title">About Us</h3>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/howto">使い方</a></li>
                        {{--<li><a href="/aboutshare">Shareについて</a></li>--}}
                        <li><a href="/terms">利用規約</a></li>
                        <li><a href="/contact">お問い合わせ</a></li>
                    </ul>
                </section>
            </div>
            {{--<div class="col-lg-3 col-md-6">--}}
                {{--<!-- Account / Shipping Info-->--}}
                {{--<section class="widget widget-links widget-light-skin">--}}
                    {{--<h3 class="widget-title">Account &amp; Shipping Info</h3>--}}
                    {{--<ul>--}}
                        {{--<li><a href="#">Your Account</a></li>--}}
                        {{--<li><a href="#">Shipping Rates & Policies</a></li>--}}
                        {{--<li><a href="#">Refunds & Replacements</a></li>--}}
                        {{--<li><a href="#">Taxes</a></li>--}}
                        {{--<li><a href="#">Delivery Info</a></li>--}}
                        {{--<li><a href="#">Affiliate Program</a></li>--}}
                    {{--</ul>--}}
                {{--</section>--}}
            {{--</div>--}}
        </div>
        <hr class="hr-light mt-2 margin-bottom-2x">
        <!-- Copyright-->
        <p class="footer-copyright">© All rights reserved. Made with Share</p>
    </div>
</footer>
        @if( Request::path() !== "products/create" && Request::path() !== "products/create/confirm")
        <a class="footer-sell-btn" href="{{url('products/create')}}" style="color:#fff;text-decoration: none;">
            <div>出品</div>
            <i class="icon-camera"></i>
        </a>
        @endif
</div>
<!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
<!-- Backdrop-->
<div class="site-backdrop"></div>
<!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
<script src="/js/vendor.min.js"></script>
<script src="/js/scripts.min.js"></script>


<script>
    $j(document).ready(function() {
        if(location.pathname.split("/")[3]) {
            $j('a[href^="/products/category/' + location.pathname.split("/")[3] + '"]').parent().addClass('active');
        } else if(location.pathname.split("/")[1] == 'home') {
            $j('a[href^="/home"]').parent().addClass('active');
        } else if(location.pathname.split("/")[1] == 'products') {
            $j('a[href="/products"]').parent().addClass('active');
        } else if(location.pathname.split("/")[1] == 'howto') {
            $j('a[href="/howto"]').parent().addClass('active');
        }
    });
</script>


</body>
</html>



