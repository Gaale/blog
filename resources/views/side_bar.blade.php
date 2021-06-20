@inject('socials', "\App\SocialNetwork")
<div class="col-lg-4 col-xl-4 mt_md--40 mt_sm--40">
    <!-- Start Sidebar Area  -->
    <div class="sidebar-inner">

        <!-- Start Single Widget  -->
        <div class="axil-single-widget widget widget_search mb--30">
            <h5 class="widget-title">We Recommend</h5>
            @inject('posts', "\App\Post")
            @foreach($posts->getRandomPosts() as $post)
                <div class="content-block post-medium mb--20">
                    <div class="post-thumbnail">
                        <a href="{{route('single_post', $post->id)}}">
                            <img src="{{$post->img100_100}}" alt="Post Images">
                        </a>
                    </div>
                    <div class="post-content">
                        <h6 class="title"><a href="{{route('single_post', $post->id)}}">{{$post->title}}</a></h6>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- End Single Widget  -->

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
        <div class="axil-single-widget widget widget_postlist mb--30">
            <h5 class="widget-title">Popular on Blogar</h5>
            <!-- Start Post List  -->
            <div class="post-medium-block">

                <!-- Start Single Post  -->
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
