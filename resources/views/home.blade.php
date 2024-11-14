<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Home Page</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="manifest" href="site.webmanifest" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/dlogo.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/slicknav.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/css/themify-icons.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <style>
        .inquiry-img {
            animation: scale1 1s ease-in-out infinite;
            transition: transform 120ms ease-in;
        }

        /* Applying animation delays to each image */
        .inquiry-img:nth-child(1) {
            animation-delay: 0s;
        }

        .inquiry-img:nth-child(2) {
            animation-delay: 0.3s;
            /* Start after the first */
        }

        .inquiry-img:nth-child(3) {
            animation-delay: 0.6s;
            /* Start after the second */
        }

        .inquiry-img:hover {
            transform: scale(1.2);
            animation: none;
        }

        @keyframes scale1 {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }





        .h-btnn {
            display: none !important;
        }

        @media (max-width:991px) {
            .h-btnn {
                display: block !important;
            }
        }
    </style>
</head>

<body>




    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo-loader33.png" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->





    <header style="z-index: 11111;">
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header">
                <div class="header-top d-none d-lg-block" style="background-color: rgb(17, 17, 17)">
                    <div class="container-fluid">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    @foreach($aboutDetails as $abItem)
                                    <ul>
                                        <li><a href="tel:{{$abItem->ab_num}}" style="color:white">+(91)-{{$abItem->ab_num}}</a></li>
                                        <li><a href="mailto:{{$abItem->ab_email}}" style="color:white">{{$abItem->ab_email}}</a></li>
                                        <li>Mon - Sat 9:00 - 19:30, Sunday - CLOSED</li>
                                    </ul>
                                    @endforeach
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header-bottom header-sticky" style="background-color: #ff5f13">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <!-- logo-1 -->
                                    <a href="index.html" class="big-logo"><img src="assets/img/logo/logo.png" alt="" style="
                          filter: drop-shadow(
                            3px 3px 2px rgba(15, 15, 15, 0.616)
                          );
                        " /></a>
                                    <!-- logo-2 -->
                                    <a href="index.html" class="small-logo"><img src="assets/img/logo/l.png" alt="" style="
                          filter: drop-shadow(
                            3px 3px 2px rgba(15, 15, 15, 0.616)
                          );
                        " /></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="/about">About</a></li>

                                            <li>
                                                <a href="#">Product</a>
                                                <ul class="submenu">
                                                    @foreach($maincategories as $maincategory)
                                                    <li><a href="{{ route('product.show', $maincategory->id) }}">{{$maincategory->main_category}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>



                                            <li>
                                                <a href="#">Service</a>
                                                <ul class="submenu">
                                                    <li><a href="/service">DOZO Window Service</a></li>
                                                    <li><a href="/amc">Annual Maintenance Contract</a></li>
                                                </ul>
                                            </li>




                                            <li><a href="/blog">Blog</a></li>
                                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#myInquiryModal"><i
                                                        class="fa-solid fa-headset"></i>&nbsp; Contact Us</a></li>
                                            <li><a href="/amc" class="h-btnn">AMC Inquiry</a></li>




                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-xl-2 col-lg-2 col-md-3">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="/inquiry" class="btn">Inquiry</a>
                                </div>


                            </div>

                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>












    <main>



        <!-- slider Area Start-->
        <div class="slider-area">

            <div class="slider-active">

                @foreach($homeBannners as $banner)
                <div class="single-slider hero-overly slider-height d-flex align-items-center"
                    data-background="{{ asset('storage/' . $banner->home_banner) }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="hero__caption">
                                    <div class="hero-text1">
                                        <span data-animation="fadeInUp" data-delay=".3s">{{$banner->h_s_desc}}</span>
                                    </div>
                                    <h1 data-animation="fadeInUp" data-delay=".5s">{{$banner->h_title}}</h1>
                                    <div class="stock-text" data-animation="fadeInUp" data-delay=".8s">
                                        <h2>{{$banner->h_a_title}}</h2>
                                        <h2>{{$banner->h_a_title}}</h2>
                                    </div>
                                    <div class="hero-text2 mt-110" data-animation="fadeInUp" data-delay=".9s">
                                        <span><a href="{{$banner->h_p_url}}">{{$banner->h_p_name}}</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <!-- slider Area End-->










        <!-- Services Area Start -->
        <div class="services-area1 section-padding30">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-55">
                            <div class="front-text">
                                <h2 class="">Our Services</h2>
                            </div>
                            <span class="back-text">Services</span>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @foreach($services as $service)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="{{ asset('storage/' . $service->sr_img) }}" alt="" />
                            </div>
                            <div class="service-cap">
                                <h4><a href="{{ url('/service-details/' . $service->id) }}">{{$service->sr_title}}</a></h4>
                                <a href="{{ url('/service-details/' . $service->id) }}" class="more-btn">Read More <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="assets/img/icon/services_icon1.png" alt="" />
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Services Area End -->








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












        <!-- contact with us Start -->
        <section class="contact-with-area" data-background="assets/img/gallery/contact.png">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-9 offset-xl-1 offset-lg-1">
                        <div class="contact-us-caption">
                            <div class="team-info mb-30 pt-45">
                                <!-- Section Tittle -->
                                <div class="section-tittle section-tittle4">
                                    <div class="front-text">
                                        <h2 class="">Lats talk with us</h2>
                                    </div>
                                    <span class="back-text">Lat`s chat</span>
                                </div>
                                <p style="text-align: justify;">
                                    Expert Craftsmanship: Our team brings years of expertise to each window solution, ensuring quality in every detail.
                                    Customized Solutions: We provide tailored designs that meet your unique needs, adding beauty and functionality to your space.
                                    Premium Materials: Using top-grade materials, we guarantee durability and elegance in every product.
                                    Innovative Designs: Our modern and efficient designs enhance energy efficiency and elevate the aesthetics of any room.
                                    Dedicated Support: From consultation to installation, our team is here to assist you every step of the way.
                                    Commitment to Satisfaction: We prioritize your satisfaction, ensuring that each project is completed to perfection.
                                </p>
                                <a href="#" class="white-btn" data-bs-toggle="modal" data-bs-target="#myInquiryModal">get in touch</a>
                                &nbsp;
                                <a href="#" class="white-btn" data-bs-toggle="modal" data-bs-target="#myBlogCreateModal">leave your own
                                    blog</a>
                            </div>



                            <!-- gifs -->
                            <div class="gif-area" style="display: flex; flex-wrap: wrap; gap: 1%;">
                                <img src="assets/img/icon/e9.gif" width="70" alt="">
                                <img src="assets/img/icon/e2.gif" width="70" alt="">
                                <img src="assets/img/icon/e8.gif" width="70" alt="">
                                <img src="assets/img/icon/e10.gif" width="70" alt="">
                                <img src="assets/img/icon/e3.gif" width="70" alt="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact with us End-->













        <!-- CountDown Area Start -->
        <div class="count-area">
            <div class="container">
                <div class="count-wrapper count-bg" data-background="{{asset('assets/img/gallery/countt.png')}}">
                    <div class="row justify-content-center">


                        @foreach($aboutNumbers as $abn)
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="count-clients">
                                <div class="single-counter">
                                    <div class="count-number">
                                        <span class="counter">{{$abn->an_number}}</span>
                                    </div>
                                    <div class="count-text">
                                        <p>{{$abn->an_t}}</p>
                                        <h5>{{$abn->an_define}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <!-- CountDown Area End -->












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











        <!-- Blog latest News Area start -->
        <div class="latest-news-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle7 mb-50">
                            <div class="front-text">
                                <h2 class="">latest news</h2>
                            </div>
                            <span class="back-text">Our Blogs</span>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @foreach($blogs as $blog)
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <!-- single-news -->
                        <div class="single-news mb-30">
                            <div class="news-img">
                                <img src="{{ asset('storage/' . $blog->b_img) }}" alt="" />
                                <div class="news-date text-center">
                                    <span>{{$blog->b_date}}</span>
                                </div>
                            </div>
                            <div class="news-caption">
                                <ul class="david-info">
                                    <li>| &nbsp; &nbsp; {{$blog->b_qt}}</li>
                                </ul>
                                <h2>
                                    <a href="{{ url('/blog-details/' . $blog->id) }}">{{$blog->b_title}}</a>
                                </h2>
                                <a href="{{ url('/blog-details/' . $blog->id) }}" class="d-btn">Read more »</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Blog latest News Area End -->


















    </main>














    <footer>
        <!-- Footer Start-->
        <div class="footer-main">
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-4 col-md-4 col-sm-8">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt="" /></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info1" style="text-align: justify;">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                            sed do eiusmod tempor incididunt ut labore.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-2 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Quick Links</h4>
                                    <ul>
                                        <li><a href="/about">About</a></li>
                                        <li><a href="/service">Services</a></li>
                                        <li><a href="/product-upvc">UPVC Windows</a></li>
                                        <li><a href="/product-aluminium">Aluminium Windows</a></li>
                                        <li><a href="/inquiry">For Inquiry</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>




                        <div class="col-lg-3 col-md-4 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Contact Us</h4>
                                    <div class="footer-pera">
                                        <p class="info1">
                                            <a href="https://maps.app.goo.gl/2MkcA6S1yNQJqRgv7" target="_blank" style="color: #767b7c;">
                                                H5CM+4XX, Poly Park, Dhulagori, Howrah, Jala Dhulagiri, West Bengal, 711302
                                            </a>
                                        </p>
                                    </div>
                                    <ul>
                                        @foreach($aboutDetails as $abItem)
                                        <li><a href="tel:{{$abItem->ab_num}}">Phone: +91 {{$abItem->ab_num}}</a></li>
                                        <li><a href="https://wa.me/{{$abItem->ab_num}}">WhatsApp: +91 {{$abItem->ab_num}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>




                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="single-footer-caption mb-50">

                                <!-- Map -->
                                <a href="https://maps.app.goo.gl/2MkcA6S1yNQJqRgv7" target="_blank" class="map-footer">
                                    <img src="assets/img/gallery/map.png" alt=""
                                        style="filter: drop-shadow( -5px 5px 0.3px rgba(161, 160, 160, 0.74));" />
                                </a>


                            </div>
                        </div>
                    </div>
                    <!-- Copy-Right -->
                    <div class="row align-items-center">
                        <div class="col-xl-12">
                            <div class="footer-copy-right">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    <!-- Copyright &copy; -->
                                    <!-- 2024 -->
                                    <!-- All rights reserved | This template is made with -->
                                    <!-- <i class="fa fa-heart" aria-hidden="true"></i> by -->
                                    <!-- <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    2024
                                    All rights reserved by
                                    <a href="" target="">DOZO</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>









    <!-- Contact Us Modal Start -->
    <div class="modal fade" id="myInquiryModal" tabindex="-1" aria-labelledby="myInquiryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="col-xl-12">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle7">
                                <div class="front-text">
                                    <h2 class="">You Need Help ?</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <form action="{{ route('support') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-check-label" for="inquiry">Message</label>
                            <textarea name="inquiry" id="inquiry" name="inquiry" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn22 w-100">Get Ticket</button>







                        <!-- find links -->
                        <div class="modal-footer1 mt-3">
                            <div class="modal-footer-inner"
                                style="display:flex; justify-content: space-evenly; align-items: center; gap: 3px;">

                                <a href="https://maps.app.goo.gl/2MkcA6S1yNQJqRgv7" target="_blank" class="find-icons">
                                    <img class="inquiry-img" src="assets/img/icon/location-pin.gif" width="60" alt="">
                                </a>
                                @foreach($aboutDetails as $abItem)
                                <a href="https://wa.me/{{$abItem->ab_num}}" class="find-icons">
                                    <img class="inquiry-img" src="assets/img/icon/chat.gif" width="60" alt="">
                                </a>

                                <a href="tel:{{$abItem->ab_num}}" class="find-icons">
                                    <img class="inquiry-img" src="assets/img/icon/incoming-call.gif" width="60" alt="">
                                </a>
                                @endforeach
                            </div>
                        </div>





                    </form>
                </div>






            </div>
        </div>
    </div>
    <!-- Contact Us Modal End -->






    <!-- Blog Create Modal Start -->
    <div class="modal fade" id="myBlogCreateModal" tabindex="-1" aria-labelledby="myBlogCreateModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myBlogCreateModalLabel" style="font-weight: 700;">Leave Your Own Blog
                    </h3>
                </div>
                <div class="modal-body">

                    <form id="blogForm" action="{{ route('addBlog') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3" style="display: flex; flex-direction: column; align-items: center;">
                            <label for="b_img" class="form-label">
                                <img src="assets/img/blog/add-image.png" style="width: 80px; cursor: pointer;" alt="">
                                <span id="requiredMark" style="color: red; font-size: 2rem;">*</span>
                                <span id="checkMark" style="color: rgb(28, 121, 5); font-size: 2rem; display: none;">✔</span>
                            </label>
                            <input type="file" name="b_img" class="form-control" id="b_img" style="display: none;"
                                onchange="toggleMarks()">
                            <small id="b_img_error" class="txt-org" style="display: none;">Please upload an image
                                under 1.5MB.</small>
                        </div>

                        <div class="mb-3">
                            <label for="b_title" class="form-label">Post Title<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="b_title" id="b_title">
                            <small id="b_title_error" class="txt-org" style="display: none;">Post title is
                                required.</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-check-label" for="b_qt">Quotes<span style="color: red;">*</span></label>
                            <textarea name="b_qt" id="b_qt" class="form-control"></textarea>
                            <small id="b_qt_error" class="txt-org" style="display: none;">Quotes field is
                                required.</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-check-label" for="b_desc">Post Description<span style="color: red;">*</span></label>
                            <textarea name="b_desc" id="b_desc" class="form-control"></textarea>
                            <small id="b_desc_error" class="txt-org" style="display: none;">Post description is
                                required.</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-check-label" for="b_tag">Post Tags<span style="color: red;">*</span></label>
                            <textarea name="b_tag" id="b_tag" class="form-control"></textarea>
                            <small id="b_tag_error" class="txt-org" style="display: none;">Post tags are
                                required.</small>
                        </div>


                        <div class="mb-3">
                            <label class="form-check-label" for="b_date">Post Date<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="b_date" id="b_date">
                            <small id="b_tag_error" class="txt-org" style="display: none;">Post Date is
                                required.</small>
                        </div>

                        <button type="submit" class="btn w-100">Submit Post</button>

                    </form>

                </div>






            </div>
        </div>
    </div>
    <!-- Blog Create Modal End -->



















    <!-- Inquiry Send Success Modal Start -->
    <div class="modal fade" id="myInquirySuccessModal" tabindex="-1" role="dialog"
        aria-labelledby="myInquirySuccessModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body" style="display: flex; flex-direction: column; align-items: center;">


                    <img src="assets/img/icon/upp.gif" width="180" alt="">



                    <div class="row">
                        <div class="col-xl-12">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle7">
                                <div class="front-text">
                                    <h2 class="" style="text-align: center;">Your Inquiry Is Submitted successfully !
                                    </h2>
                                    <p style="text-align: right; font-weight: 700;">Please Check The Mail →</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn w-100" onclick="window.location.reload()">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Inquiry Send Success Modal End -->






    <!-- Inquiry Send Unsuccess Modal Start -->
    <div class="modal fade" id="myInquiryErrorModal" tabindex="-1" role="dialog"
        aria-labelledby="myInquiryErrorModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body" style="display: flex; flex-direction: column; align-items: center;">


                    <img src="assets/img/icon/unn.gif" width="180" alt="">



                    <div class="row">
                        <div class="col-xl-12">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle7">
                                <div class="front-text">
                                    <h2 class="" style="text-align: center;">Your Inquiry Is Not Submitted !
                                    </h2>
                                    <p style="text-align: right; font-weight: 700;">Please Fill The Form Correctly →</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn w-100" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Inquiry Send Unsuccess Modal End -->























    <!-- JS Start From Here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- counter , waypoint -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="./assets/js/jquery.counterup.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>



    <!-- blog-validation -->
    <script src="assets/js/blog-create.js"></script>



    <script>
        document.querySelector("form").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Create FormData object from the form
            let formData = new FormData(this);

            // Send the form data using Fetch or Ajax
            fetch("{{ route('support') }}", {
                    method: "POST",
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    // Hide the contact form modal
                    $('#myInquiryModal').modal('hide');

                    // Check if the form submission was successful
                    if (data.success) {
                        // Show success modal
                        $('#myInquirySuccessModal').modal('show');
                    } else {
                        // Show error modal
                        $('#myInquiryErrorModal').modal('show');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);

                    // Hide the contact form modal
                    $('#myInquiryModal').modal('hide');

                    // Show error modal if there's an issue with the submission
                    $('#myInquiryErrorModal').modal('show');
                });
        });
    </script>











</body>

</html>