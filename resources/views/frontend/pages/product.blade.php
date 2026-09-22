@extends('frontend.layouts.app')

@section('title', 'Our Products | DOZO Windows')

@section('content')




        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center"
                data-background="{{asset('assets/img/hero/about.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap pt-100">
                                <h2>Our Products</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Products</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->














        <!-- Product Area Start -->
        <section class="project-area section-padding30">
            <div class="container">
                <div class="project-heading mb-35">
                    <div class="row align-items-end">
                        <div class="col-lg-6">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle3">
                                <div class="front-text">
                                    <h2 class="">Our Products</h2>
                                </div>
                                <span class="back-text">Gellary</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <!-- Nav Card -->

                        <div class="tab-content active" id="nav-tabContent">



                            <!-- card ONE -->
                            <div class="tab-pane fade active show" id="nav-all">
                                <div class="project-caption">
                                    <div class="row">

                                        @foreach($products as $product)
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="{{ asset('storage/' . $product->pr_image) }}" alt="" />
                                                </div>
                                                <div class="project-cap">
                                                    <a href="{{ url('/product-view/' . $product->id) }}" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4 class="mb-3">
                                                        <a href="{{ url('/product-view/' . $product->id) }}" style="text-transform: capitalize;">{{$product->pr_title}}</a>
                                                    </h4>
                                                    <h4><i class="fa-solid fa-circle-dot" style="color: #ff5f13;"></i> <a href="{{ url('/product-view/' . $product->id) }}">{{ $product->mainCategory->main_category }}</a></h4>
                                                    <h4><i class="fa-solid fa-circle-dot" style="color: #ff5f13;"></i> <a href="{{ url('/product-view/' . $product->id) }}">{{ $product->subCategory->sub_category }}</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- End Nav Card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Area End -->














@endsection
