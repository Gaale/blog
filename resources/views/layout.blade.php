<!doctype html>
<html class="no-js" lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="robots" content="noindex, follow"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.png">

    <!-- CSS
    ============================================ -->

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
<div class="main-wrapper">
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

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

                <div class="col-xl-3 col-lg-8 col-md-8 col-sm-9 col-12">
                    <div class="header-search text-right d-flex align-items-center">
                        <div class="col-xl-3 col-lg-8 col-md-8 col-sm-9 col-12">
                            <nav class="navbar navbar-expand-md navbar-light bg-white">
                                <div class="container">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                        <div class="col-xl-3 col-lg-8 col-md-8 col-sm-9 col-12">
                                            <nav class="navbar navbar-expand-md navbar-light bg-white">
                                                <div class="container">
                                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                                            data-target="#navbarSupportedContent"
                                                            aria-controls="navbarSupportedContent" aria-expanded="false"
                                                            aria-label="{{ __('Toggle navigation') }}">
                                                        <span class="navbar-toggler-icon"></span>
                                                    </button>

                                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                        <!-- Left Side Of Navbar -->
                                                        <ul class="navbar-nav mr-auto">

                                                        </ul>

                                                        <!-- Right Side Of Navbar -->
                                                        <ul class="navbar-nav ml-auto">
                                                            <!-- Authentication Links -->
                                                            @guest
                                                                <li class="nav-item">
                                                                    <a class="nav-link"
                                                                       href="{{ route('login') }}">{{ __('Login') }}</a>
                                                                </li>
                                                                @if (Route::has('register'))
                                                                    <li class="nav-item">
                                                                        <a class="nav-link"
                                                                           href="{{ route('register') }}">{{ __('Register') }}</a>
                                                                    </li>
                                                                @endif
                                                            @else
                                                                <li class="nav-item dropdown">
                                                                    <a id="navbarDropdown"
                                                                       class="nav-link dropdown-toggle" href="#"
                                                                       role="button" data-toggle="dropdown"
                                                                       aria-haspopup="true" aria-expanded="false" v-pre>
                                                                        {{ Auth::user()->name }}
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-right"
                                                                         aria-labelledby="navbarDropdown">
                                                                        <a class="dropdown-item"
                                                                           href="{{ route('logout') }}"
                                                                           onclick="event.preventDefault();
                                                                                 document.getElementById('logout-form').submit();">
                                                                            {{ __('Logout') }}
                                                                        </a>

                                                                        <form id="logout-form"
                                                                              action="{{ route('logout') }}"
                                                                              method="POST" class="d-none">
                                                                            @csrf
                                                                        </form>
                                                                    </div>
                                                                </li>
                                                            @endguest
                                                        </ul>
                                                    </div>
                                                </div>
                                            </nav>
                                        </div>
                                </div>
                        </div>
                        <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                                                 document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Start Hamburger Menu  -->
        <div class="hamburger-menu d-block d-xl-none">
            <div class="hamburger-inner">
                <div class="icon"><i class="fal fa-bars"></i></div>
            </div>
        </div>
        <!-- End Hamburger Menu  -->
</div>
</div>
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

@yield('content_1')
<div class="col-lg-4 col-xl-4 mt_md--40 mt_sm--40">
    <!-- Start Sidebar Area  -->
    <div class="sidebar-inner">

        <!-- Start Single Widget  -->
        <div class="axil-single-widget widget widget_categories mb--30">
            <ul>
                @inject('categories', "\App\Category")
                @foreach($categories->show_categories() as $category)
                    <li class="cat-item">
                        <a href="{{route('post_by_category', $category->key)}}" class="inner">
                            <div class="thumbnail">
                                <img src="{{$category->icon}}" alt="">
                            </div>
                            <div class="content">
                                <h5 class="title">{{$category->title}}</h5>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <!-- End Single Widget  -->

        <!-- Start Single Widget  -->
        <div class="axil-single-widget widget widget_search mb--30">
            <h5 class="widget-title">Search</h5>
            <form action="#">
                <div class="axil-search form-group">
                    <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>
        </div>
        <!-- End Single Widget  -->

        <!-- Start Single Widget  -->
        <div class="axil-single-widget widget widget_postlist mb--30">
            <h5 class="widget-title">Popular on Blogar</h5>
            <!-- Start Post List  -->
            <div class="post-medium-block">

                <!-- Start Single Post  -->
                @inject('posts', "\App\Post")
                @foreach($posts->show_popular_posts() as $post)
                    <div class="content-block post-medium mb--20">
                        <div class="post-thumbnail">
                            <a href="{{route('single_post', $post->id)}}">
                                <img src="{{$post->img100_100}}" alt="Post Images">
                            </a>
                        </div>
                        <div class="post-content">
                            <h6 class="title"><a href="{{route('single_post', $post->id)}}">{{$post->title}}</a></h6>
                            <div class="post-meta">
                                <ul class="post-meta-list">
                                    <li>{{date('F j, Y', strtotime($post->updated_at))}}</li>
                                    <li>{{$post->views}} Views</li>
                                </ul>
                            </div>
                        </div>
                    </div>
            @endforeach
            <!-- End Single Post  -->

            </div>
            <!-- End Post List  -->

        </div>
        <!-- End Single Widget  -->

        <!-- Start Single Widget  -->
        @inject('socials', "\App\SocialNetwork")
        <div class="axil-single-widget widget widget_social mb--30">
            <h5 class="widget-title">Stay In Touch</h5>
            <!-- Start Post List  -->
            <ul class="social-icon md-size justify-content-center">
                @foreach($socials->show_social_networks() as $social)
                    <li><a href="{{$social->contact}}"><i class="{{$social->icon}}"></i></a></li>
                @endforeach
            </ul>
            <!-- End Post List  -->
        </div>
        <!-- End Single Widget  -->

        <!-- Start Single Widget  -->
        <div class="axil-single-widget widget widget_instagram mb--30">
            <h5 class="widget-title">Instagram</h5>
            <!-- Start Post List  -->
            <ul class="instagram-post-list-wrapper">
                <li class="instagram-post-list">
                    <a href="#">
                        <img src="/assets/images/small-images/instagram-01.jpg" alt="Instagram Images">
                    </a>
                </li>
                <li class="instagram-post-list">
                    <a href="#">
                        <img src="/assets/images/small-images/instagram-02.jpg" alt="Instagram Images">
                    </a>
                </li>
                <li class="instagram-post-list">
                    <a href="#">
                        <img src="/assets/images/small-images/instagram-03.jpg" alt="Instagram Images">
                    </a>
                </li>
                <li class="instagram-post-list">
                    <a href="#">
                        <img src="/assets/images/small-images/instagram-04.jpg" alt="Instagram Images">
                    </a>
                </li>
                <li class="instagram-post-list">
                    <a href="#">
                        <img src="/assets/images/small-images/instagram-05.jpg" alt="Instagram Images">
                    </a>
                </li>
                <li class="instagram-post-list">
                    <a href="#">
                        <img src="/assets/images/small-images/instagram-06.jpg" alt="Instagram Images">
                    </a>
                </li>
            </ul>
            <!-- End Post List  -->
        </div>
        <!-- End Single Widget  -->
    </div>
    <!-- End Sidebar Area  -->
</div>
</div>
</div>
</div>
</div>
<!-- End Post List Wrapper  -->

<!-- Start Instagram Area  -->
<div class="axil-instagram-area axil-section-gap bg-color-grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 class="title">Instagram</h2>
                </div>
            </div>
        </div>
        <div class="row mt--30">
            <div class="col-lg-12">
                <ul class="instagram-post-list">
                    <li class="single-post">
                        <a href="#">
                            <img src="/assets/images/small-images/instagram-md-01.jpg" alt="Instagram Images">
                            <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                        </a>
                    </li>
                    <li class="single-post">
                        <a href="#">
                            <img src="/assets/images/small-images/instagram-md-02.jpg" alt="Instagram Images">
                            <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                        </a>
                    </li>
                    <li class="single-post">
                        <a href="#">
                            <img src="/assets/images/small-images/instagram-md-03.jpg" alt="Instagram Images">
                            <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                        </a>
                    </li>
                    <li class="single-post">
                        <a href="#">
                            <img src="/assets/images/small-images/instagram-md-04.jpg" alt="Instagram Images">
                            <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                        </a>
                    </li>
                    <li class="single-post">
                        <a href="#">
                            <img src="/assets/images/small-images/instagram-md-05.jpg" alt="Instagram Images">
                            <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                        </a>
                    </li>
                    <li class="single-post">
                        <a href="#">
                            <img src="/assets/images/small-images/instagram-md-06.jpg" alt="Instagram Images">
                            <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Instagram Area  -->

<!-- Start Footer Area  -->
<div class="axil-footer-area axil-footer-style-1 footer-variation-2">

    <!-- Start Footer Top Area  -->
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4">
                    <div class="logo">
                        <a href="{{route('main')}}">
                            <img class="dark-logo" src="/assets/images/logo/logo-black.png" alt="Logo Images">
                        </a>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8">
                    <!-- Start Post List  -->
                    <div
                        class="d-flex justify-content-start mt_sm--15 justify-content-md-end align-items-center flex-wrap">
                        <h5 class="follow-title mb--0 mr--20">Follow Us</h5>
                        <ul class="social-icon color-tertiary md-size justify-content-start">
                            @foreach($socials->show_social_networks() as $social)
                                <li><a href="{{$social->contact}}"><i class="{{$social->icon}}"></i></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- End Post List  -->
                </div>

            </div>
        </div>
    </div>
    <!-- End Footer Top Area  -->

    <!-- Start Copyright Area  -->

    <div class="col-lg-3 col-md-4">
        <div class="copyright-right text-left text-md-right mt_sm--20">
            <p class="b3">All Rights Reserved © 2021</p>
        </div>
    </div>
    <!-- End Copyright Area  -->
</div>
<!-- End Footer Area  -->

<!-- Start Back To Top  -->
<a id="backto-top"></a>
<!-- End Back To Top  -->

</div>

<!-- JS
============================================ -->
<!-- Modernizer JS -->
<script src="/assets/js/vendor/modernizr.min.js"></script>
<!-- jQuery JS -->
<script src="/assets/js/vendor/jquery.js"></script>
<!-- Bootstrap JS -->
<script src="/assets/js/vendor/bootstrap.min.js"></script>
<script src="/assets/js/vendor/slick.min.js"></script>
<script src="/assets/js/vendor/tweenmax.min.js"></script>
<script src="/assets/js/vendor/js.cookie.js"></script>
<script src="/assets/js/vendor/jquery.style.switcher.js"></script>


<!-- Main JS -->
<script src="/assets/js/main.js"></script>

</body>

</html>
