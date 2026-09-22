@extends('frontend.layouts.app')

@section('title', 'Service Details | DOZO Windows')

@section('content')




        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center"
                data-background="{{asset('assets/img/hero/about.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-8">
                            <div class="hero-cap hero-cap2 pt-120">
                                <h2>{{$service->sr_title}}</h2>
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
                                <img src="{{ asset('storage/' . $service->sr_img) }}" height="500" alt="">
                            </div>
                            <div class="details-caption">
                                <h3>{{$service->sr_title}}</h3>

                                <p class="mb-50">{{$service->sr_desc}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Details End -->







@endsection
