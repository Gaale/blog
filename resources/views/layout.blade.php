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
                        <form class="header-search-form">
                            <div class="axil-search form-group">
                                <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                        </form>
                        <ul class="metabar-block">
                            <li><a href="#"><img src="/assets/images/others/author.png" alt="Author Images"></a></li>
                        </ul>
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
                    <li class="cat-item">
                        <a href="#" class="inner">
                            <div class="thumbnail">
                                <img src="/assets/images/post-images/category-image-01.jpg" alt="">
                            </div>
                            <div class="content">
                                <h5 class="title">Tech</h5>
                            </div>
                        </a>
                    </li>
                    <li class="cat-item">
                        <a href="#" class="inner">
                            <div class="thumbnail">
                                <img src="/assets/images/post-images/category-image-02.jpg" alt="">
                            </div>
                            <div class="content">
                                <h5 class="title">Style</h5>
                            </div>
                        </a>
                    </li>
                    <li class="cat-item">
                        <a href="#" class="inner">
                            <div class="thumbnail">
                                <img src="/assets/images/post-images/category-image-03.jpg" alt="">
                            </div>
                            <div class="content">
                                <h5 class="title">Travel</h5>
                            </div>
                        </a>
                    </li>
                    <li class="cat-item">
                        <a href="#" class="inner">
                            <div class="thumbnail">
                                <img src="/assets/images/post-images/category-image-04.jpg" alt="">
                            </div>
                            <div class="content">
                                <h5 class="title">Food</h5>
                            </div>
                        </a>
                    </li>
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
                    <div class="content-block post-medium mb--20">
                        <div class="post-thumbnail">
                            <a href="post-details.html">
                                <img src="/assets/images/small-images/blog-sm-01.jpg" alt="Post Images">
                            </a>
                        </div>
                        <div class="post-content">
                            <h6 class="title"><a href="post-details.html">The underrated design book that transformed
                                    the way I
                                    work </a></h6>
                            <div class="post-meta">
                                <ul class="post-meta-list">
                                    <li>Feb 17, 2019</li>
                                    <li>300k Views</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Post  -->

                    <!-- Start Single Post  -->
                    <div class="content-block post-medium mb--20">
                        <div class="post-thumbnail">
                            <a href="post-details.html">
                                <img src="/assets/images/small-images/blog-sm-02.jpg" alt="Post Images">
                            </a>
                        </div>
                        <div class="post-content">
                            <h6 class="title"><a href="post-details.html">Here’s what you should (and shouldn’t) do
                                    when</a>
                            </h6>
                            <div class="post-meta">
                                <ul class="post-meta-list">
                                    <li>Feb 17, 2019</li>
                                    <li>300k Views</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Post  -->

                    <!-- Start Single Post  -->
                    <div class="content-block post-medium mb--20">
                        <div class="post-thumbnail">
                            <a href="post-details.html">
                                <img src="/assets/images/small-images/blog-sm-03.jpg" alt="Post Images">
                            </a>
                        </div>
                        <div class="post-content">
                            <h6 class="title"><a href="post-details.html">How a developer and designer duo at Deutsche
                                    Bank keep
                                    remote</a></h6>
                            <div class="post-meta">
                                <ul class="post-meta-list">
                                    <li>Feb 17, 2019</li>
                                    <li>300k Views</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Post  -->

                </div>
                <!-- End Post List  -->

            </div>
            <!-- End Single Widget  -->

            <!-- Start Single Widget  -->
            <div class="axil-single-widget widget widget_social mb--30">
                <h5 class="widget-title">Stay In Touch</h5>
                <!-- Start Post List  -->
                <ul class="social-icon md-size justify-content-center">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-slack"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
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
    <div class="footer-mainmenu">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h2 class="title">World</h2>
                        <div class="inner">
                            <ul class="ft-menu-list">
                                <li><a href="#">U.N.</a></li>
                                <li><a href="#">Conflicts</a></li>
                                <li><a href="#">Terrorism</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h2 class="title">Politics</h2>
                        <div class="inner">
                            <ul class="ft-menu-list">
                                <li><a href="#">Executive</a></li>
                                <li><a href="#">Senate</a></li>
                                <li><a href="#">House</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h2 class="title">Entertainment</h2>
                        <div class="inner">
                            <ul class="ft-menu-list">
                                <li><a href="#">Celebrity News</a></li>
                                <li><a href="#">Movies</a></li>
                                <li><a href="#">TV News</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h2 class="title">Business</h2>
                        <div class="inner">
                            <ul class="ft-menu-list">
                                <li><a href="#">Environment</a></li>
                                <li><a href="#">Conflicts</a></li>
                                <li><a href="#">Terrorism</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h2 class="title">Health</h2>
                        <div class="inner">
                            <ul class="ft-menu-list">
                                <li><a href="#">Movies</a></li>
                                <li><a href="#">Conflicts</a></li>
                                <li><a href="#">Terrorism</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h2 class="title">About</h2>
                        <div class="inner">
                            <ul class="ft-menu-list">
                                <li><a href="#">U.N.</a></li>
                                <li><a href="#">Conflicts</a></li>
                                <li><a href="#">Terrorism</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Footer Top Area  -->
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4">
                    <div class="logo">
                        <a href="index.html">
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
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
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
