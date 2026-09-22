@extends('frontend.layouts.app')

@section('title', 'Page Not Found - 404 | DOZO')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/err.css') }}">
@endsection

@section('content')
<section class="blog_area section-padding" style="padding-top: 120px; padding-bottom: 80px;">
    <div class="container">
        <div class="text-center">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle section-tittle7">
                        <div class="front-text">
                            <h2 class="">Page Not Found</h2>
                        </div>
                        <span class="back-text">- 404 ERROR -</span>
                    </div>
                </div>
            </div>

            <div class="button my-4">
                <a href="/" class="btn23" style="z-index: 10;">RETURN HOME</a>
            </div>

            <a href="https://wayou.github.io/t-rex-runner/" target="_blank" style="cursor: pointer; z-index: 10; display: inline-block;" class="err-img">
                <img src="{{ asset('assets/img/icon/error.gif') }}" width="260" alt="404 Error" class="err">
            </a>
        </div>

        <div class="main-icons">
            <div class="main-icons-inner">
                <img src="{{ asset('assets/img/icon/e1.gif') }}" alt="">
                <img src="{{ asset('assets/img/icon/e2.gif') }}" alt="">
                <img src="{{ asset('assets/img/icon/e3.gif') }}" alt="">
                <img src="{{ asset('assets/img/icon/e4.gif') }}" alt="">
                <img src="{{ asset('assets/img/icon/e5.gif') }}" alt="">
                <img src="{{ asset('assets/img/icon/e7.gif') }}" alt="">
                <img src="{{ asset('assets/img/icon/e8.gif') }}" alt="">
                <img src="{{ asset('assets/img/icon/e9.gif') }}" alt="">
                <img src="{{ asset('assets/img/icon/e10.gif') }}" alt="">
            </div>
        </div>

        <ul class="breadcrumb-animation">
            <li></li><li></li><li></li><li></li><li></li>
            <li></li><li></li><li></li><li></li><li></li>
        </ul>
    </div>
</section>
@endsection
