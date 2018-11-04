<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
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
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a href="{{ url('/') }}"><img src="{{ asset('img/beschool_logo.png') }}" height="50px"></a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('company.login') }}">ログイン</a></li>
                            <li><a href="{{ route('company.register') }}">新規会員登録</a></li>
                        @else
                            <!-- <li><a href="{{ url('/') }}">Home</a></li> -->
                            <li><a href="{{ action('ProductsController@store') }}">Movie</a></li>
                            @if (isset($user))
                            <li><a href="{{ action('UsersController@index') }}">My Page</a></li>
                            @endif
                            @if (isset($company))
                            <li><a href="{{ action('Company\HomeController@index') }}">My Page</a></li>
                            @endif
                            <li><a href="{{ action('Auth\LoginController@logout') }}">Logout</a></li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
