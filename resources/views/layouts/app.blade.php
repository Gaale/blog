<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="/assets/css/vendor/slick.css">
    <link rel="stylesheet" href="/assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="/assets/css/vendor/base.css">
    <link rel="stylesheet" href="/assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<!-- Start Header -->
<header class="header axil-header  header-light header-sticky ">
    <div class="header-wrap">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3 col-12">
                <div class="logo">
                    <a href="{{route('main')}}">
                        <img class="dark-logo" src="/assets/images/logo/logo-black.png" alt="Blogar logo">
                    </a>
                </div>
            </div>

            <div class="col-xl-6 d-none d-xl-block">
                <div class="mainmenu-wrapper">
                    <nav class="mainmenu-nav">
                        <!-- Start Mainmanu Nav -->
                        <ul class="mainmenu">
                            <li><a href="{{route('main')}}">Main</a></li>
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('services')}}">Our Services</a></li>
                            <li><a href="{{route('contacts')}}">Contacts</a></li>
                        </ul>
                        <!-- End Mainmanu Nav -->
                    </nav>
                </div>
            </div>


</header>
<!-- Start Header -->

<!-- Start Mobile Menu Area  -->
<div class="popup-mobilemenu-area">
    <div class="inner">
        <div class="mobile-menu-top">
            <div class="logo">
                <a href="/">
                    <img class="dark-logo" src="/assets/images/logo/logo-black.png" alt="Logo Images">
                </a>
            </div>
            <div class="mobile-close">
                <div class="icon">
                    <i class="fal fa-times"></i>
                </div>
            </div>
        </div>
        <ul class="mainmenu">
            <li><a href="{{route('main')}}">Main</a></li>
            <li><a href="{{route('about')}}">About Us</a></li>
            <li><a href="{{route('services')}}">Services</a></li>
            <li><a href="{{route('contacts')}}">Contacts</a></li>
        </ul>
    </div>
</div>
<!-- End Mobile Menu Area  -->
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto"></ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
