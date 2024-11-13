<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>UPVC Products Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/dlogo.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
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
                                    <ul>
                                        <li>+(123) 1234-567-8901</li>
                                        <li>info@domain.com</li>
                                        <li>Mon - Sat 8:00 - 17:30, Sunday - CLOSED</li>
                                    </ul>
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
                                                    <li><a href="/product-upvc">UPVC Window</a></li>
                                                    <li><a href="/product-aluminium">Aluminium Window</a></li>
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
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center"
                data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap pt-100">
                                <h2>UPVC Window</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                                    <h2 class="">UPVC Window</h2>
                                </div>
                                <span class="back-text">Products</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="properties__button">
                                <!--Nav Button  -->
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-all-tab" data-toggle="tab"
                                            href="#nav-all" role="tab" aria-controls="nav-all" aria-selected="false">
                                            Show all
                                        </a>
                                        <a class="nav-item nav-link" id="nav-upvc-tab" data-toggle="tab"
                                            href="#nav-upvc" role="tab" aria-controls="nav-upvc"
                                            aria-selected="false">ctg1</a>
                                        <a class="nav-item nav-link" id="nav-aluminium-tab" data-toggle="tab"
                                            href="#nav-aluminium" role="tab" aria-controls="nav-aluminium"
                                            aria-selected="false">ctg2</a>
                                        <a class="nav-item nav-link" id="nav-sliding-tab" data-toggle="tab"
                                            href="#nav-sliding" role="tab" aria-controls="nav-aluminium"
                                            aria-selected="false">ctg3</a>
                                        <a class="nav-item nav-link" id="nav-toughlogy" data-toggle="tab"
                                            href="#nav-tough" role="tab" aria-controls="nav-aluminium"
                                            aria-selected="false">ctg4</a>
                                    </div>
                                </nav>
                                <!--End Nav Button  -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <!-- Nav Card -->

                        <div class="tab-content active" id="nav-tabContent">
                            <!-- card ONE -->
                            <div class="tab-pane fade active show" id="nav-all" role="tabpanel"
                                aria-labelledby="nav-all-tab">
                                <div class="project-caption">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/g1.jpg" alt="" />
                                                </div>
                                                <div class="project-cap">
                                                    <a href="/product-view" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4>
                                                        <a href="/product-view">Floride Chemicals</a>
                                                    </h4>
                                                    <h4><a href="/product-view">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/g2.jpg" alt="" />
                                                </div>
                                                <div class="project-cap">
                                                    <a href="/product-view" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4>
                                                        <a href="/product-view">Floride Chemicals</a>
                                                    </h4>
                                                    <h4><a href="/product-view">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/g3.jpg" alt="" />
                                                </div>
                                                <div class="project-cap">
                                                    <a href="/product-view" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4>
                                                        <a href="/product-view">Floride Chemicals</a>
                                                    </h4>
                                                    <h4><a href="/product-view">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card TWO -->
                            <div class="tab-pane fade" id="nav-upvc" role="tabpanel" aria-labelledby="nav-upvc-tab">
                                <div class="project-caption">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/g3.jpg" alt="" />
                                                </div>
                                                <div class="project-cap">
                                                    <a href="/product-view" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4>
                                                        <a href="/product-view">Floride Chemicals</a>
                                                    </h4>
                                                    <h4><a href="/product-view">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/g4.jpg" alt="" />
                                                </div>
                                                <div class="project-cap">
                                                    <a href="/product-view" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4>
                                                        <a href="/product-view">Floride Chemicals</a>
                                                    </h4>
                                                    <h4><a href="/product-view">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/g1.jpg" alt="" />
                                                </div>
                                                <div class="project-cap">
                                                    <a href="/product-view" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4>
                                                        <a href="/product-view">Floride Chemicals</a>
                                                    </h4>
                                                    <h4><a href="/product-view">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card THREE -->
                            <div class="tab-pane fade" id="nav-aluminium" role="tabpanel"
                                aria-labelledby="nav-aluminium-tab">
                                <div class="project-caption">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/g1.jpg" alt="" />
                                                </div>
                                                <div class="project-cap">
                                                    <a href="/product-view" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4>
                                                        <a href="/product-view">Floride Chemicals</a>
                                                    </h4>
                                                    <h4><a href="/product-view">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/g4.jpg" alt="" />
                                                </div>
                                                <div class="project-cap">
                                                    <a href="/product-view" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4>
                                                        <a href="/product-view">Floride Chemicals</a>
                                                    </h4>
                                                    <h4><a href="/product-view">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/g1.jpg" alt="" />
                                                </div>
                                                <div class="project-cap">
                                                    <a href="/product-view" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4>
                                                        <a href="/product-view">Floride Chemicals</a>
                                                    </h4>
                                                    <h4><a href="/product-view">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- card FOUR -->
                            <div class="tab-pane fade" id="nav-sliding" role="tabpanel"
                                aria-labelledby="nav-sliding-tab">
                                <div class="project-caption">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/g1.jpg" alt="" />
                                                </div>
                                                <div class="project-cap">
                                                    <a href="/product-view" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4>
                                                        <a href="/product-view">Floride Chemicals</a>
                                                    </h4>
                                                    <h4><a href="/product-view">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/g2.jpg" alt="" />
                                                </div>
                                                <div class="project-cap">
                                                    <a href="/product-view" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4>
                                                        <a href="/product-view">Floride Chemicals</a>
                                                    </h4>
                                                    <h4><a href="/product-view">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/g3.jpg" alt="" />
                                                </div>
                                                <div class="project-cap">
                                                    <a href="/product-view" class="plus-btn"><i
                                                            class="ti-plus"></i></a>
                                                    <h4>
                                                        <a href="/product-view">Floride Chemicals</a>
                                                    </h4>
                                                    <h4><a href="/product-view">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
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
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Products</a></li>
                                        <li><a href="#">Projects</a></li>
                                        <li><a href="#">Contact Us</a></li>
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
                                            Sankrail Industrial Park, Dhulagarh,
                                            P.S- Sankrail, Howrah, W.B - 711302 (Near Hanuman Mandir)
                                        </p>
                                    </div>
                                    <ul>
                                        <li><a href="#">Phone: +91 (0) 123 456 789</a></li>
                                        <li><a href="#">WP: +91 (0) 123 456 789</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>




                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="single-footer-caption mb-50">

                                <!-- Map -->
                                <div class="map-footer">
                                    <img src="assets/img/gallery/map.png" alt=""
                                        style="filter: drop-shadow( -5px 5px 0.3px rgba(161, 160, 160, 0.74));" />
                                </div>


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

                                <a href="" class="find-icons">
                                    <img class="inquiry-img" src="assets/img/icon/location-pin.gif" width="60" alt="">
                                </a>

                                <a href="" class="find-icons">
                                    <img class="inquiry-img" src="assets/img/icon/chat.gif" width="60" alt="">
                                </a>

                                <a href="" class="find-icons">
                                    <img class="inquiry-img" src="assets/img/icon/incoming-call.gif" width="60" alt="">
                                </a>

                            </div>
                        </div>





                    </form>
                </div>






            </div>
        </div>
    </div>
    <!-- Contact Us Modal End -->












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














    <!-- JS here -->

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