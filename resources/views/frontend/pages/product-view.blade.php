@extends('frontend.layouts.app')

@section('title', 'Product View | DOZO Windows')

@section('content')



        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center"
                data-background="{{asset('assets/img/hero/about.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap pt-100">
                                <h2>{{$product->pr_title}}</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Product Details</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->















        <!-- Services Details Start -->
        <div class="services-details-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="single-services section-padding2">
                            <div class="details-img mb-40">
                                <img src="{{ asset('storage/' . $product->pr_image) }}" height="600" alt="">
                            </div>
                            <div class="details-caption">
                                <h3>{{$product->pr_title}}</h3>

                                <p class="mb-3">Main Category: {{ $product->mainCategory->main_category }}</p>
                                <p class="mb-40">Sub Category: {{ $product->subCategory->sub_category }}</p>

                                <h3>Description</h3>
                                <p class="mb-50">{{$product->pr_desc}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Details End -->




@endsection
