@extends('layout')

@section('title', 'SINGLE POST')

@section('content_1')

    <!-- Start Post Single Wrapper  -->
    <div class="post-single-wrapper axil-section-gap bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <!-- Start Banner Area -->
                    <div class="banner banner-single-post post-formate post-text-only axil-section-gapBottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Start Single Slide  -->
                                    <div class="content-block">
                                        <!-- Start Post Content  -->
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
                                            <h1 class="title">{{$post->title}}</h1>
                                            <!-- Post Meta  -->
                                            <div class="post-meta-wrapper">
                                                <div class="post-meta">
                                                    <div class="post-author-avatar border-rounded">
                                                        <img src="{{$post->author->icon}}"
                                                             alt="Author Images">
                                                    </div>
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
                                                            <li>{{$post->views}} Views</li>
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
                                        <!-- End Post Content  -->
                                    </div>
                                    <!-- End Single Slide  -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Banner Area -->

                    <div class="axil-post-details">
                        <p class="has-medium-font-size">{{$post->body}}</p>

                        <div class="tagcloud">
                            @foreach($post->category as $cat)
                            <a href="{{route('post_by_category', $cat->key)}}">{{$cat->title}}</a>
                            @endforeach
                        </div>

                        <div class="social-share-block">
                            <div class="post-like">
                                <a href="#"><i class="fal fa-thumbs-up"></i><span>2.2k Like</span></a>
                            </div>
                            <ul class="social-icon icon-rounded-transparent md-size">
                                <li><a href="{{$post->author->fb_link}}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{$post->author->instagram_link}}"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{$post->author->twitter_link}}"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{$post->author->email_link}}"><i class="far fa-envelope"></i></a></li>
                            </ul>
                        </div>

                        <!-- Start Author  -->
                        <div class="about-author">
                            <div class="media">
                                <div class="thumbnail">
                                    <a href="{{route('post_by_author', $post->author->key)}}">
                                        <img src="{{$post->author->icon}}" alt="Author Images">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="author-info">
                                        <h5 class="title">
                                            <a class="hover-flip-item-wrapper" href="{{route('post_by_author', $post->author->key)}}">
                                                    <span class="hover-flip-item">
                                                        <span data-text="{{$post->author->name}}">{{$post->author->name}}</span>
                                                    </span>
                                            </a>
                                        </h5>
                                        <span class="b3 subtitle">{{$post->author->position}}</span>
                                    </div>
                                    <div class="content">
                                        <p class="b1 description">{{$post->author->body}}</p>
                                        <ul class="social-share-transparent size-md">
                                            <li><a href="{{$post->author->fb_link}}"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="{{$post->author->instagram_link}}"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="{{$post->author->twitter_link}}"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="{{$post->author->email_link}}"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Author  -->

                        @if(Auth::check())
                            @if(count($comments) == 0)
                                <p class="b2">No comments yet. Be the first!</p>
                            @endif

                        <!-- Start Comment Form Area  -->
                        <div class="axil-comment-area">
                            <div class="axil-total-comment-post">
                                <div class="title">
                                    <h4 class="mb--0">Comments</h4>
                                </div>
                            </div>

                            <!-- Start Comment Respond  -->
                            <div class="comment-respond">
                                <h4 class="title">Post a comment</h4>
                                <form action="save_comment" method="post">
                                    @csrf
                                    <p class="comment-notes"><span id="email-notes">Your email address will not be
                                                published.</span></p>
                                    <div class="row row--10">
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <input name="post_id" type="hidden" value="{{$post->id}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                               <input name="author" type="hidden" value="{{Auth::user()->name}}">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Leave a Comment</label>
                                                <textarea name="message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-submit cerchio">
                                                <input name="submit" type="submit" id="submit"
                                                       class="axil-button button-rounded" value="Post Comment">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End Comment Respond  -->

                            <!-- Start Comment Area  -->
                            <div class="axil-comment-area">
                                <h4 class="title">{{count($comments)}} comments</h4>
                                <ul class="comment-list">
                                    <!-- Start Single Comment  -->
                                    @foreach($comments as $comment)
                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="single-comment">
                                                <div class="comment-img">
                                                    <img src="http://lorempixel.com/50/50"
                                                         alt="Author Images">
                                                </div>
                                                <div class="comment-inner">
                                                    <h6 class="commenter">
                                                        <a class="hover-flip-item-wrapper" href="#">
                                                                <span class="hover-flip-item">
                                                                    <span data-text="{{$comment->author}}">{{$comment->author}}</span>
                                                                </span>
                                                        </a>
                                                    </h6>
                                                    <div class="comment-meta">
                                                        <div class="time-spent">{{date('F j, Y', strtotime($comment->created_at))}}</div>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p class="b2">{{$comment->message}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                </ul>
                            </div>
                            <!-- End Comment Area  -->
                        </div>
                        <!-- End Comment Form Area  -->
                        @else
                             <p class="b2 mt--30">Log in or register to post comments</p>
                        @endif
                    </div>
                </div>

@endsection

