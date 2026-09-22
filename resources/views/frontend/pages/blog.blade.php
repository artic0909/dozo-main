@extends('frontend.layouts.app')

@section('title', 'Latest News & Blogs | DOZO Windows')

@section('content')












    <!-- slider Area Start-->
    <div class="slider-area ">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center"
            data-background="assets/img/hero/about.jpg">
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
    <section class="blog_area section-padding">
        <div class="container">




            <div class="row">
                <div class="col-xl-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle7 mb-50">
                        <div class="front-text">
                            <h2 class="">Recent blogs</h2>
                        </div>
                        <span class="back-text">Our Blogs</span>
                    </div>
                </div>
            </div>







            <div class="row">



                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">






                        @foreach($blogs as $blog)
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="{{ asset('storage/' . $blog->b_img) }}" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>{{ $blog->created_at->format('d') }}</h3>
                                    <p>{{ $blog->created_at->format('M') }}</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="{{ url('/blog-details/' . $blog->id) }}">
                                    <h2>{{ $blog->b_title }}</h2>
                                </a>
                                <p>{{ Str::limit($blog->content, 150) }}</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> {{ $blog->b_tag }}</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> {{ $blog->b_qt }}</a></li>
                                </ul>
                            </div>
                        </article>
                        @endforeach

                        <!-- Pagination -->
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <!-- Previous Page Link -->
                                @if ($blogs->onFirstPage())
                                <li class="page-item disabled">
                                    <a class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                @else
                                <li class="page-item">
                                    <a href="{{ $blogs->previousPageUrl() }}" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                @endif

                                <!-- Page Number Links -->
                                @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                                    <li class="page-item {{ ($blogs->currentPage() == $i) ? 'active' : '' }}">
                                        <a href="{{ $blogs->url($i) }}" class="page-link">{{ $i }}</a>
                                    </li>
                                    @endfor

                                    <!-- Next Page Link -->
                                    @if ($blogs->hasMorePages())
                                    <li class="page-item">
                                        <a href="{{ $blogs->nextPageUrl() }}" class="page-link" aria-label="Next">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                    @else
                                    <li class="page-item disabled">
                                        <a class="page-link" aria-label="Next">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                    @endif
                            </ul>
                        </nav>



                    </div>
                </div>






                <div class="col-lg-4">
                    <div class="blog_right_sidebar">


                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>



                            @foreach($blogData as $b)
                            <div class="media post_item">
                                <img src="{{ asset('storage/' . $b->b_img) }}" style="width: 100px; height: 80px;" alt="post">
                                <div class="media-body">
                                    <a href="{{ url('/blog-details/' . $b->id) }}">
                                        <h3>{{$b->b_qt}}</h3>
                                    </a>
                                    <p>{{$b->updated_at}}</p>
                                </div>
                            </div>
                            @endforeach



                            <div class="media post_item">
                                <img src="assets/img/blog/image-gallery.png" style="width: 80px; height: 80px;"
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
                                    <a>project</a>
                                </li>
                                <li>
                                    <a>love</a>
                                </li>
                                <li>
                                    <a>technology</a>
                                </li>
                                <li>
                                    <a>travel</a>
                                </li>
                                <li>
                                    <a>restaurant</a>
                                </li>
                                <li>
                                    <a>life style</a>
                                </li>
                                <li>
                                    <a>design</a>
                                </li>
                                <li>
                                    <a>illustration</a>
                                </li>
                            </ul>
                        </aside>



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->





















@endsection
