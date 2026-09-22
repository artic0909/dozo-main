@extends('frontend.layouts.app')

@section('title', 'About Us | DOZO Windows')

@section('content')





        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center"
                data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap pt-100">
                                <h2>About us</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">About</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->



























        <!-- About Area Start -->
        <section class="support-company-area fix pt-10 section-padding30">
            @foreach ($aboutDetails as $about)
            <div class="support-wrapper align-items-end">
                <div class="left-content">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-55">
                        <div class="front-text">
                            <h2 class="">Who we are</h2>
                        </div>
                        <span class="back-text">About us</span>
                    </div>
                    <div class="support-caption">

                        <p class="pera-top">{{$about->ab_b_desc}}</p>
                        <p>{{$about->ab_desc}}</p>
                        <a href="/service" class="btn red-btn2">read more</a>

                    </div>
                </div>
                <div class="right-content">
                    <!-- img -->
                    <div class="right-img">
                        <img src=" {{ asset('storage/' . $about->ab_img) }}" alt="">
                    </div>
                    <div class="support-img-cap text-center">
                        <span>{{$about->ab_year}}</span>
                        <p>Since</p>
                    </div>
                </div>
            </div>
            @endforeach
        </section>
        <!-- About Area End -->



















        <!-- Testimonial Start -->
        <div class="testimonial-area t-bg testimonial-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle6 mb-50">
                            <div class="front-text">
                                <h2 class="">Testimonial</h2>
                            </div>
                            <span class="back-text">Feedback</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-10 col-lg-11 col-md-10 offset-xl-1">
                        <div class="h1-testimonial-active">

                            @foreach($testimonials as $testimonial)
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption">
                                    <div class="testimonial-top-cap">
                                        <!-- SVG icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="86px"
                                            height="63px">
                                            <path fill-rule="evenodd" stroke-width="1px" stroke="rgb(255, 95, 19)" fill-opacity="0"
                                                fill="rgb(0, 0, 0)"
                                                d="M82.623,59.861 L48.661,59.861 L48.661,25.988 L59.982,3.406 L76.963,3.406 L65.642,25.988 L82.623,25.988 L82.623,59.861 ZM3.377,25.988 L14.698,3.406 L31.679,3.406 L20.358,25.988 L37.340,25.988 L37.340,59.861 L3.377,59.861 L3.377,25.988 Z" />
                                        </svg>
                                        <p>
                                            {{$testimonial->t_feedback}}
                                        </p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                        <div class="founder-text">
                                            <span>{{$testimonial->t_name}}</span>
                                            <p>{{$testimonial->t_prof}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->










        <!-- Team Start -->
        <div class="team-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle5 mb-50">
                            <div class="front-text">
                                <h2 class="">Exparts</h2>
                            </div>
                            <span class="back-text">our Team</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($teams as $team)
                    <!-- single Tem -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">


                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{ asset('storage/' . $team->m_img) }}" alt="" />
                            </div>
                            <div class="team-caption">
                                <span>{{$team->m_prof}}</span>
                                <h3>{{$team->m_name}}</h3>
                            </div>
                        </div>


                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Team End -->







@endsection
