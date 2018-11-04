<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>BeSchool</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <!-- <link href="{{ asset('css/extend_app.css') }}" rel="stylesheet"> -->


    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">



    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-67426158-5"></script> -->
<!--     <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-67426158-5');
    </script> -->

    <meta property="og:title" content="" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="" />

</head>
<!-- Body-->
<body>


{{--@if (Auth::check())--}}
{{--<p>USER: {{$user->name . ' (' . $user->emails . ')'}}</p>--}}
{{--@else--}}
{{--<p>※ログインしていません。<a href="/login">ログイン</a> <a href="/register">登録</a> </p>--}}
{{--@endif--}}


<header id="header">
    <div class="menu_logo">
        <a href="{{ url('/') }}"><img src="{{ asset('img/beschool_logo.png') }}" height="50px"></a>
    </div>
    <ul id="head_menu">
        <!-- <li class="menu_item"><a href="{{ url('/') }}">Home</a></li> -->
        @if (isset($user))
        <li class="menu_item"><a href="{{ action('ProductsController@store') }}">Movie</a></li>
        <li class="menu_item"><a href="{{ action('UsersController@index') }}">My Page</a></li>
        <li class="menu_item"><a href="{{ action('Auth\LoginController@logout') }}">logout</a></li>
        @elseif (isset($company))
        <li class="menu_item"><a href="{{ action('ProductsController@store') }}">Movie</a></li>
        <li class="menu_item"><a href="{{ action('Company\HomeController@index') }}">My Page</a></li>
        <li class="menu_item"><a href="{{ action('Auth\LoginController@logout') }}">logout</a></li>
        @else
        <li class="menu_item"><a href="{{ url('/register') }}">新規登録</a></li>
        <li class="menu_item"><a href="{{ url('/login') }}">ログイン</a></li>
        @endif
    </ul>
</header>

<!-- Off-Canvas Wrapper-->
<div class="offcanvas-wrapper">
@yield('content')
</div>
<!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
<!-- Backdrop-->
<div class="site-backdrop"></div>
<!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
<script src="/js/vendor.min.js"></script>
<script src="/js/scripts.min.js"></script>


</body>
</html>



