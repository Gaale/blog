@extends('layout')

@section('title', 'MAIN')

@section('content_1')
    <!-- Start Tab Area  -->
    <div class="axil-tab-area axil-section-gap bg-color-white">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="axil-banner mb--30">
                            <div class="thumbnail">
                                <a href="#">
                                    <img class="w-100"
                                         src="https://www.renderosity.com/rr/mod/bcs/photos/vendor1/vend_banner_6753.jpg"
                                         alt="Banner Images">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="title">Innovation &#38; Tech</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <!-- Start Tab Content Wrapper  -->
                        <div class="tab-content" id="axilTabContent">
                            <div class="single-tab-content tab-pane fade show active" id="tabone" role="tabpanel"
                                 aria-labelledby="tab-one">
                                <div
                                    class="modern-post-activation slick-layout-wrapper axil-slick-arrow arrow-between-side">

                                    <!-- Start Single Post  -->
                                    @foreach($posts->take(10) as $post)
                                        <div class="slick-single-layout">
                                            <div
                                                class="content-block modern-post-style text-center content-block-column">
                                                <div class="post-content">
                                                    <div class="post-cat">
                                                        <div class="post-cat-list">
                                                            @foreach($post->category->take(1) as $cat)
                                                                <a class="hover-flip-item-wrapper"
                                                                   href="{{route('post_by_category', $cat->key)}}">
                                                                   <span class="hover-flip-item">
                                                                   <span
                                                                       data-text="{{$cat->title}}">{{$cat->title}}</span>
                                                                   </span>
                                                                </a>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <h4 class="title" style="height: 120px">
                                                        <a href="{{route('single_post', $post->id)}}">{{$post->title}}</a>
                                                    </h4>
                                                </div>
                                                <div class="post-thumbnail">
                                                    <a href="{{route('single_post', $post->id)}}">
                                                        <img src="{{$post->img780_520}}"
                                                             alt="Post Images">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach
                                <!-- End Single Post  -->
                                </div>
                            </div>
                        </div>
                        <!-- End Tab Content Wrapper  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Tab Area  -->

    <!-- Start Categories List  -->
    <div class="axil-categories-list axil-section-gap bg-color-grey">
        <div class="container">
            <div class="row align-items-center mb--30">
                <div class="col-lg-6 col-md-8 col-sm-8 col-12">
                    <div class="section-title">
                        <h2 class="title">Trending Topics</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-4 col-12">
                    <div class="see-all-topics text-left text-sm-right mt_mobile--20">
                        <a class="axil-link-button" href="#">See All Topics</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Start List Wrapper  -->
                    <div class="list-categories d-flex flex-wrap">

                        <!-- Start Single Category  -->
                        @foreach($categories->take(6) as $cat)
                            <div class="single-cat">
                                <div class="inner">
                                    <a href="{{route('post_by_category', $cat->key)}}">
                                        <div class="thumbnail">
                                            <img src="{{$cat->image}}"
                                                 alt="post categories images">
                                        </div>
                                        <div class="content">
                                            <h5 class="title">{{$cat->title}}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                    @endforeach
                    <!-- End Single Category  -->
                    </div>
                    <!-- End List Wrapper  -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories List  -->

    <!-- Start Post List Wrapper  -->
    <div class="axil-post-list-area post-listview-visible-color axil-section-gap bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-8">
                    <div class="axil-banner">
                        <div class="thumbnail">
                            <a href="#">
                                <img class="w-100" src="https://rom-on.ro/wp-content/uploads/2020/06/biz-kimiz.jpg"
                                     alt="Banner Images">
                            </a>
                        </div>
                    </div>
                    <!-- Start Post List  -->
                    @foreach($posts as $post)
                        <div class="content-block post-list-view axil-control is-active mt--30">
                            <div class="post-thumbnail">
                                <a href="{{route('single_post', $post->id)}}">
                                    <img src="{{$post->img295_250}}" alt="image post">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat" style="width: 100%">
                                    <div class="post-cat-list">
                                        @foreach($post->category as $cat)
                                            <a class="hover-flip-item-wrapper"
                                               href="{{route('post_by_category', $cat->key)}}">
                                            <span class="hover-flip-item">
                                                <span data-text="{{$cat->title}}">{{$cat->title}}</span>
                                            </span>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                                <h4 class="title"><a href="{{route('single_post', $post->id)}}">{{$post->title}}</a>
                                </h4>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper"
                                                   href="{{route('post_by_author', $post->author->key)}}">
                                                    <span class="hover-flip-item">
                                                        <span
                                                            data-text="{{$post->author->name}}">{{$post->author->name}}</span>
                                                    </span>
                                                </a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>{{date('F j, Y', strtotime($post->updated_at))}}</li>
                                                <li>3 min read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="{{$post->author->fb_link}}"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li><a href="{{$post->author->instagram_link}}"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li><a href="{{$post->author->twitter_link}}"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li><a href="{{$post->author->email_link}}"><i class="far fa-envelope"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                @endforeach
                <!-- End Post List  -->

                    <!-- Start Pagination List  -->
                    <ul class="pagination justify-content-center mt--40 tagcloud">
                        @if($posts->currentPage() != 1)
                            <li class="page-item w-15 ml--15"><a class="page-link" href="?page=1">First</a></li>
                            <li class="page-item w-15 mr--15 ml--15"><a class="page-link"
                                                                        href="{{$posts->previousPageUrl()}}">&larr;</a>
                            </li>
                        @endif
                        @if($posts->count() > 1)
                            @for($count = 1; $count <= $posts->lastPage(); $count++)
                                @if($count < $posts->currentPage() + 3 and $count > $posts->currentPage() - 3)
                                    <li class="page-item mr--5 @if($posts->currentPage() == $count) active @endif">
                                        <a class="page-link" href="?page={{$count}}">{{$count}}</a>
                                    </li>
                                @endif
                            @endfor
                            @if($posts->currentPage() != $posts->lastPage())
                                <li class="page-item w-15  ml--15">
                                    <a class="page-link" href="{{$posts->nextPageUrl()}}">&rarr;</a>
                                </li>
                                <li class="page-item w-15 ml--15">
                                    <a class="page-link" href="?page={{$posts->lastPage()}}">Last</a>
                                </li>
                            @endif
                        @endif
                    </ul>
                    <!-- End Pagination List  -->

                </div>
@endsection
@section('side_bar')
    @include('side_bar')
@endsection
