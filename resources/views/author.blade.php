@extends('layout')

@section('title', $author->name)

@section('content_1')

    <!-- Start Author Area  -->
    <div class="axil-author-area axil-author-banner bg-color-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-author">
                        <div class="media">
                            <div class="thumbnail">
                                <a href="{{route('post_by_author', $post->author->key)}}">
                                    <img src="{{$author->icon}}" alt="Author Images">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="author-info">
                                    <h1 class="title"><a href="{{route('post_by_author', $post->author->key)}}">{{$author->name}}</a></h1>
                                    <span class="b3 subtitle">{{$author->position}}</span>
                                </div>
                                <div class="content">
                                    <p class="b1 description">{{$author->body}}</p>
                                    <ul class="social-share-transparent size-md">
                                        <li><a href="{{$author->fb_link}}"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{$author->instagram_link}}"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li><a href="{{$author->twitter_link}}"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="{{$author->email_link}}"><i class="far fa-envelope"></i></a></li>
                                        <li><a href="{{$author->linkedin_link}}"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Author Area  -->


    <!-- Start Post List Wrapper  -->
    <div class="axil-post-list-area axil-section-gap bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h2 class="title mb--40">Articles By This Author</h2>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-8">
                    <!-- Start Post List  -->
                    @foreach($author->posts as $post)
                        <div class="content-block post-list-view mt--30">
                            <div class="post-thumbnail">
                                <a href="{{route('single_post', $post->id)}}">
                                    <img src="{{$post->img295_250}}" alt="Post Images" href="{{route('single_post', $post->id)}}">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="LIFESTYLE">LIFESTYLE</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="{{route('single_post', $post->id)}}">{{$post->title}}</a></h4>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <ul class="post-meta-list">
                                                <li>{{$post->updated_at}}</li>
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
