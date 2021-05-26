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
                                                            <li>300k Views</li>
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
                            <a href="#">Design</a>
                            <a href="#">Life Style</a>
                            <a href="#">Web Design</a>
                            <a href="#">Development</a>
                            <a href="#">Design</a>
                            <a href="#">Life Style</a>
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

                        <!-- Start Comment Form Area  -->
                        <div class="axil-comment-area">
                            <div class="axil-total-comment-post">
                                <div class="title">
                                    <h4 class="mb--0">30+ Comments</h4>
                                </div>
                                <div class="add-comment-button cerchio">
                                    <a class="axil-button button-rounded" href="post-details.html" tabindex="0"><span>Add Your Comment</span></a>
                                </div>
                            </div>

                            <!-- Start Comment Respond  -->
                            <div class="comment-respond">
                                <h4 class="title">Post a comment</h4>
                                <form action="#">
                                    <p class="comment-notes"><span id="email-notes">Your email address will not be
                                                published.</span> Required fields are marked <span
                                            class="required">*</span></p>
                                    <div class="row row--10">
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <label>Your Name</label>
                                                <input id="name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <label>Your Email</label>
                                                <input id="email" type="email">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <label>Your Website</label>
                                                <input id="website" type="text">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Leave a Reply</label>
                                                <textarea name="message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <p class="comment-form-cookies-consent">
                                                <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent"
                                                       type="checkbox" value="yes">
                                                <label for="wp-comment-cookies-consent">Save my name, email, and
                                                    website in this browser for the next time I comment.</label>
                                            </p>
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
                                <h4 class="title">2 comments</h4>
                                <ul class="comment-list">
                                    <!-- Start Single Comment  -->
                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="single-comment">
                                                <div class="comment-img">
                                                    <img src="assets/images/post-images/author/author-b2.png"
                                                         alt="Author Images">
                                                </div>
                                                <div class="comment-inner">
                                                    <h6 class="commenter">
                                                        <a class="hover-flip-item-wrapper" href="#">
                                                                <span class="hover-flip-item">
                                                                    <span data-text="Cameron Williamson">Cameron Williamson</span>
                                                                </span>
                                                        </a>
                                                    </h6>
                                                    <div class="comment-meta">
                                                        <div class="time-spent">Nov 23, 2018 at 12:23 pm</div>
                                                        <div class="reply-edit">
                                                            <div class="reply">
                                                                <a class="comment-reply-link hover-flip-item-wrapper"
                                                                   href="#">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="Reply">Reply</span>
                                                                        </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p class="b2">Duis hendrerit velit scelerisque felis tempus, id
                                                            porta
                                                            libero venenatis. Nulla facilisi. Phasellus viverra
                                                            magna commodo dui lacinia tempus. Donec malesuada nunc
                                                            non dui posuere, fringilla vestibulum urna mollis.
                                                            Integer condimentum ac sapien quis maximus. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="children">
                                            <!-- Start Single Comment  -->
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <div class="single-comment">
                                                        <div class="comment-img">
                                                            <img src="assets/images/post-images/author/author-b3.png"
                                                                 alt="Author Images">
                                                        </div>
                                                        <div class="comment-inner">
                                                            <h6 class="commenter">
                                                                <a class="hover-flip-item-wrapper" href="#">
                                                                        <span class="hover-flip-item">
                                                                            <span
                                                                                data-text="Rahabi Khan">Rahabi Khan</span>
                                                                        </span>
                                                                </a>
                                                            </h6>
                                                            <div class="comment-meta">
                                                                <div class="time-spent">Nov 23, 2018 at 12:23 pm
                                                                </div>
                                                                <div class="reply-edit">
                                                                    <div class="reply">
                                                                        <a class="comment-reply-link hover-flip-item-wrapper"
                                                                           href="#">
                                                                                <span class="hover-flip-item">
                                                                                    <span data-text="Reply">Reply</span>
                                                                                </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="comment-text">
                                                                <p class="b2">Pellentesque habitant morbi tristique
                                                                    senectus et netus et malesuada fames ac turpis
                                                                    egestas. Suspendisse lobortis cursus lacinia.
                                                                    Vestibulum vitae leo id diam pellentesque
                                                                    ornare.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- End Single Comment  -->
                                        </ul>
                                    </li>
                                    <!-- End Single Comment  -->

                                    <!-- Start Single Comment  -->
                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="single-comment">
                                                <div class="comment-img">
                                                    <img src="assets/images/post-images/author/author-b2.png"
                                                         alt="Author Images">
                                                </div>
                                                <div class="comment-inner">
                                                    <h6 class="commenter">
                                                        <a class="hover-flip-item-wrapper" href="#">
                                                                <span class="hover-flip-item">
                                                                    <span data-text="Rahabi Khan">Rahabi Khan</span>
                                                                </span>
                                                        </a>
                                                    </h6>
                                                    <div class="comment-meta">
                                                        <div class="time-spent">Nov 23, 2018 at 12:23 pm</div>
                                                        <div class="reply-edit">
                                                            <div class="reply">
                                                                <a class="comment-reply-link hover-flip-item-wrapper"
                                                                   href="#">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="Reply">Reply</span>
                                                                        </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p class="b2">Duis hendrerit velit scelerisque felis tempus, id
                                                            porta
                                                            libero venenatis. Nulla facilisi. Phasellus viverra
                                                            magna commodo dui lacinia tempus. Donec malesuada nunc
                                                            non dui posuere, fringilla vestibulum urna mollis.
                                                            Integer condimentum ac sapien quis maximus. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End Single Comment  -->
                                </ul>
                            </div>
                            <!-- End Comment Area  -->
                        </div>
                        <!-- End Comment Form Area  -->
                    </div>
                </div>

@endsection

