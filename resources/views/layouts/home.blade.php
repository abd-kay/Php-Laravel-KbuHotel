<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>@yield('title')</title>

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="abdullah kaya">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="images/favicon.png"/>

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/lib/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/lib/font-lotusicon.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/lib/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/lib/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/lib/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/lib/settings.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/lib/bootstrap-select.min.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/style.css">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    @yield('css')
    @yield('headerjs')
</head>

<body>

@include('home._header')
@include('home._slider')
@include('home._chechav')
@section('content')
    hiii
@show
@include('home._footer')
@yield('footerjs')
</body>
</html>
