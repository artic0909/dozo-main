@extends('frontend.layouts.app')

@section('title', 'Blog Details | DOZO Windows')

@section('content')












    <!-- slider Area Start-->
    <div class="slider-area ">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center"
            data-background="{{asset('assets/img/hero/about.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap pt-100">
                            <h2>Latest News</h2>
                            <nav aria-label="breadcrumb ">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Blogs</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->








    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">




                <div class="col-lg-8 posts-list">



                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{ asset('storage/' . $blog->b_img) }}" alt="">
                        </div>
                        <div class="blog_details">
                            <h2>{{$blog->b_title}}</h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="fa fa-user"></i> {{$blog->b_tag}}</a></li>
                                <li><a href="#"><i class="fa fa-hash"></i> {{$blog->b_qt}}</a></li>
                            </ul>
                            <div class="quote-wrapper">
                                <div class="quotes" style="text-align: justify;">
                                    {{$blog->b_desc}}
                                </div>
                            </div>


                        </div>
                    </div>




                </div>






                <div class="col-lg-4">
                    <div class="blog_right_sidebar">




                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>

                            @foreach($blogs as $blog)
                            <div class="media post_item">
                                <img src="{{ asset('storage/' . $blog->b_img) }}" style="width: 100px; height: 80px;" alt="post">
                                <div class="media-body">
                                    <a href="{{ url('/blog-details/' . $blog->id) }}">
                                        <h3>{{$blog->b_qt}}</h3>
                                    </a>
                                    <p>{{$blog->updated_at}}</p>
                                </div>
                            </div>
                            @endforeach



                            <div class="media post_item">
                                <img src="{{asset('assets/img/blog/image-gallery.png')}}" style="width: 80px; height: 80px;"
                                    alt="post">
                                <div class="media-body" data-bs-toggle="modal" data-bs-target="#myBlogCreateModal"
                                    style="cursor: cell;">
                                    <a>
                                        <h3>Make Your Own Blog →</h3>
                                    </a>
                                    <p>Click me</p>
                                </div>
                            </div>


                        </aside>



                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Related Tags</h4>
                            <ul class="list">
                                <li>
                                    <a href="#">project</a>
                                </li>
                                <li>
                                    <a href="#">love</a>
                                </li>
                                <li>
                                    <a href="#">technology</a>
                                </li>
                                <li>
                                    <a href="#">travel</a>
                                </li>
                                <li>
                                    <a href="#">restaurant</a>
                                </li>
                                <li>
                                    <a href="#">life style</a>
                                </li>
                                <li>
                                    <a href="#">design</a>
                                </li>
                                <li>
                                    <a href="#">illustration</a>
                                </li>
                            </ul>
                        </aside>



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Blog Area end =================-->





















@endsection
