@extends('layout')

@section('title', $category->title)

@section('content_1')

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
                        @foreach($categories->take(6) as $categ)
                            <div class="single-cat">
                                <div class="inner">
                                    <a href="{{route('post_by_category', $categ->key)}}">
                                        <div class="thumbnail">
                                            <img src="{{$categ->image}}"
                                                 alt="post categories images">
                                        </div>
                                        <div class="content">
                                            <h5 class="title">{{$categ->title}}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                    @endforeach
                    <!-- End Single Category  -->
                    </div>
                    <!-- Start List Wrapper  -->
                </div>
            </div>
        </div>
    </div>
    <!-- Start Categories List  -->


    <!-- Start Post List Wrapper  -->
    <div class="axil-post-list-area axil-section-gap bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h2 class="title mb--40">Articles By "{{$category->title}}" Category</h2>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-8">
                    <!-- Start Post List  -->
                    @foreach($category->post as $post)
                        <div class="content-block post-list-view mt--30">
                            <div class="post-thumbnail">
                                <a href="{{route('single_post', $post->id)}}">
                                    <img src="{{$post->img295_250}}" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat" style="width: 100%">
                                    <div class="post-cat-list" >
                                        @foreach($post->category as $cat)
                                            <a class="hover-flip-item-wrapper" href="{{route('post_by_category', $cat->key)}}">
                                            <span class="hover-flip-item">
                                                <span data-text="{{$cat->title}}">{{$cat->title}}</span>
                                            </span>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                                <h4 class="title"><a href="{{route('single_post', $post->id)}}">{{$post->title}}</a></h4>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="{{route('post_by_author', $post->author->key)}}">
                                                    <span class="hover-flip-item">
                                                        <span data-text="{{$post->author->name}}">{{$post->author->name}}</span>
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
                                        <li><a href="{{$post->author->fb_link}}"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{$post->author->instagram_link}}"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="{{$post->author->twitter_link}}"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="{{$post->author->email_link}}"><i class="far fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                @endforeach
                <!-- End Post List  -->
                </div>

@endsection

@section('side_bar')
    @include('side_bar')
@endsection

