<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AMC Page</title>
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
    <link rel="stylesheet" href="assets/css/amc.css">
    <link rel="stylesheet" href="assets/css/function.css">
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



        /* for button ============================================================================================*/
        .bttt1,
        .bttt2 {
            width: 30% !important;
        }

        @media (max-width:660px) {
            .button-main-container {
                display: block !important;
            }

            .bttt1,
            .bttt2 {
                width: 100% !important;
                margin-bottom: 15px !important;
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
                                            <!-- <li><a href="#" data-bs-toggle="modal" data-bs-target="#myInquiryModal"><i
                                                        class="fa-solid fa-headset"></i>&nbsp; Contact Us</a></li> -->
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












    <!-- slider Area Start-->
    <div class="slider-area ">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center"
            data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap pt-100">
                            <h2>Annual Maintenance Contract</h2>
                            <nav aria-label="breadcrumb ">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">AMC</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->











    <!-- AMC Section Start -->
    <section class="blog_area section-padding">
        <div class="container">




            <div class="row">
                <div class="col-xl-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle7 mb-50">
                        <div class="front-text">
                            <h2 class="">AMC</h2>
                        </div>
                        <span class="back-text">Annual</span>
                    </div>
                </div>
            </div>







            <!-- Annual Maintenance Contract Content -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="amc-form">




                        <div class="content">
                            <div class="content__inner">
                                <div class="container overflow-hidden">
                                    <div class="multisteps-form">
                                        <div class="row">
                                            <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                                                <div class="multisteps-form__progress">
                                                    <button class="multisteps-form__progress-btn js-active"
                                                        type="button" title="User Info">User Info</button>
                                                    <button class="multisteps-form__progress-btn" type="button"
                                                        title="Address">Address</button>
                                                    <button class="multisteps-form__progress-btn" type="button"
                                                        title="Order Info">AMC</button>
                                                    <button class="multisteps-form__progress-btn" type="button"
                                                        title="Message">Opinion</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-lg-8 m-auto">
                                                <form class="multisteps-form__form" action="{{ route('amc.store') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <!-- 1st part User INFO -->
                                                    <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="fade">
                                                        <!-- User info fields -->
                                                        <div class="mb-3">
                                                            <label for="fname" class="form-label">Full Name<span class="text-danger">*</span></label>
                                                            <input type="text" name="fname" class="form-control" id="fname" required>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="email" class="form-label">Email address<span class="text-danger">*</span></label>
                                                            <input type="email" name="email" class="form-control" id="email" required>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="mob" class="form-label">Mobile No<span class="text-danger">*</span></label>
                                                            <input type="text" name="mob" id="mob" class="form-control" required>
                                                        </div>

                                                        <div class="button-row d-flex mt-4">
                                                            <button class="btn w-100 ml-auto js-btn-next" type="button" title="Next">Next</button>
                                                        </div>
                                                    </div>

                                                    <!-- 2nd part Address Info -->
                                                    <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="fade">
                                                        <div class="mb-3">
                                                            <label for="add" class="form-check-label">Address<span class="text-danger">*</span></label>
                                                            <textarea name="add" id="add" class="form-control" required rows="7"></textarea>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="pin" class="form-check-label">PIN CODE<span class="text-danger">*</span></label>
                                                            <input type="text" name="pin" id="pin" class="form-control">
                                                        </div>

                                                        <div class="button-row d-flex mt-4 button-main-container">
                                                            <button class="btn22 bttt1 js-btn-prev" type="button" title="Prev">Prev</button>
                                                            <button class="btn bttt2 ml-auto js-btn-next" type="button" title="Next">Next</button>
                                                        </div>
                                                    </div>

                                                    <!-- 3rd part AMC Info -->
                                                    <div class="multisteps-form__panel shadow p-4 rounded bg-white" style="z-index: 1;">
                                                        <div id="amcForm">
                                                            <div class="form-inner" id="windowGroup_1">
                                                                <div class="form-group">
                                                                    <label for="window_name" class="amc-label">Window1<span class="text-danger">*</span></label>
                                                                    <input type="text" class="form-control bdrn" name="window_name[]" placeholder="Hall Room" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="w_length_1" class="amc-label">Length<span class="text-danger">*</span></label>
                                                                    <input type="text" class="form-control bdrn" name="w_length[]" placeholder="Window Len..." required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="w_breadth_1" class="amc-label">Breadth<span class="text-danger">*</span></label>
                                                                    <input type="text" class="form-control bdrn" name="w_breadth[]" placeholder="Window Bread..." required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="w_type_1" class="amc-label">Window Type<span class="text-danger">*</span></label>
                                                                    <select name="w_type[]" class="form-control bdrn" required>
                                                                        <option value="" selected>Select Type</option>
                                                                        <option value="Type 1">Type 1</option>
                                                                        <option value="Type 2">Type 2</option>
                                                                        <option value="Type 3">Type 3</option>
                                                                        <option value="Type 4">Type 4</option>
                                                                        <option value="Type 5">Type 5</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="w_unit_1" class="amc-label">Unit<span class="text-danger">*</span></label>
                                                                    <input type="number" class="form-control bdrn" name="w_unit[]" placeholder="0" required>
                                                                </div>
                                                            </div>

                                                            <div class="add-button">
                                                                <a href="#" class="org-btn" id="addButton">ADD</a>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="button-row d-flex mt-4 col-12 button-main-container">
                                                                <button class="btn22 bttt1 js-btn-prev" type="button" title="Prev">Prev</button>
                                                                <button class="btn bttt2 ml-auto js-btn-next" type="button" title="Next">Next</button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- 4th Expert Opinion Info -->
                                                    <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn" style="z-index: 1;">
                                                        <div class="mb-3">
                                                            <label for="d_op" class="form-check-label">Detail of Your Requirements<span class="text-danger">*</span></label>
                                                            <textarea name="d_op" id="d_op" class="form-control" required rows="7"></textarea>
                                                        </div>

                                                        <div class="button-row d-flex mt-4 button-main-container">
                                                            <button class="btn22 bttt1 js-btn-prev" type="button" title="Prev">Prev</button>
                                                            <button class="btn bttt2 ml-auto" type="submit" title="Submit">SUBMIT</button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>
                </div>
            </div>






            <!-- Inquiry Send Success Modal Start -->
            <div class="modal fade" id="myInquirySuccessModal" tabindex="-1" role="dialog" aria-labelledby="myInquirySuccessModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body" style="display: flex; flex-direction: column; align-items: center;">
                            <img src="assets/img/icon/upp.gif" width="180" alt="">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="section-tittle section-tittle7">
                                        <div class="front-text">
                                            <h2 style="text-align: center;">Your AMC Inquiry Is Send Successfully!</h2>
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
            <div class="modal fade" id="myInquiryErrorModal" tabindex="-1" role="dialog" aria-labelledby="myInquiryErrorModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body" style="display: flex; flex-direction: column; align-items: center;">
                            <img src="assets/img/icon/unn.gif" width="180" alt="">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="section-tittle section-tittle7">
                                        <div class="front-text">
                                            <h2 style="text-align: center;">Your AMC Inquiry Is Not SEND!</h2>
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
























            <!-- We Offer AMC -->
            <div class="row" style="z-index: -1;">
                <div class="col-xl-12 row-innerr">










                    <div class="we-offer">

                        <div class="amc_title" style="margin-top: 40px;">
                            <img src="assets/img/icon/contract.png" width="60" alt="">
                            <h3 class="offer-text">We Offer Annual Maintenance Contract</h3>
                        </div>

                        <div class="row-inner-main">


                            <!-- Offers  -->
                            <ul class="amc_ul">

                                @foreach($offers as $offer)
                                <li class="amc_li">
                                    <p class="amc_p">
                                        <span style="color: #ff5f13; font-weight: 600; font-size: 1.1rem;">✔&nbsp;</span>
                                        <strong>{{$offer->offer}}</strong> Only
                                    </p>
                                </li>
                                @endforeach

                            </ul>


                            <!-- amc_bg -->
                            <div class="amc_bg">
                                <img src="assets/img/gallery/amc.png" alt="">
                            </div>




                        </div>




                        <!-- <hr id="amc_hr"> -->





                    </div>





                </div>
            </div>








        </div>
    </section>
    <!-- AMC Section End -->















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
    <div class="modal fade" id="myInquirySuccessModall" tabindex="-1" role="dialog" aria-labelledby="myInquirySuccessModallLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body" style="display: flex; flex-direction: column; align-items: center;">
                    <img src="assets/img/icon/upp.gif" width="180" alt="">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section-tittle section-tittle7">
                                <div class="front-text">
                                    <h2 style="text-align: center;">Your AMC Inquiry Is Send Successfully!</h2>
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
    <div class="modal fade" id="myInquiryErrorModall" tabindex="-1" role="dialog" aria-labelledby="myInquiryErrorModallLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body" style="display: flex; flex-direction: column; align-items: center;">
                    <img src="assets/img/icon/unn.gif" width="180" alt="">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section-tittle section-tittle7">
                                <div class="front-text">
                                    <h2 style="text-align: center;">Your AMC Inquiry Is Not SEND!</h2>
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




    <script src="assets/js/function.js"></script>
    <script src="assets/js/amc.js"></script>















    <!-- form validation -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const steps = document.querySelectorAll(".multisteps-form__panel");
            const nextButtons = document.querySelectorAll(".js-btn-next");
            const prevButtons = document.querySelectorAll(".js-btn-prev");

            // Function to validate form fields
            function validateForm(stepIndex) {
                let isValid = true;
                const fields = steps[stepIndex].querySelectorAll("input, textarea, select");

                fields.forEach((field) => {
                    const errorMsg = field.parentElement.querySelector(".error-message");

                    // Remove existing error message
                    if (errorMsg) {
                        errorMsg.remove();
                    }

                    // Check if field is required and empty
                    if (field.hasAttribute("required") && !field.value) {
                        isValid = false;
                        showError(field, "This field is required");
                    }

                    // Validate email format
                    if (field.type === "email" && field.value) {
                        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                        if (!emailPattern.test(field.value)) {
                            isValid = false;
                            showError(field, "Please enter a valid email address");
                        }
                    }

                    // Validate phone number format
                    if (field.id === "mob" && field.value) {
                        const phonePattern = /^[0-9]{10}$/;
                        if (!phonePattern.test(field.value)) {
                            isValid = false;
                            showError(field, "Please enter a valid 10-digit phone number");
                        }
                    }
                });

                return isValid;
            }

            // Function to show error messages
            function showError(field, message) {
                const errorMsg = document.createElement("div");
                errorMsg.className = "error-message text-danger";
                errorMsg.style.fontSize = "0.9rem";
                errorMsg.style.marginTop = "0.25rem";
                errorMsg.textContent = message;
                field.parentElement.appendChild(errorMsg);
            }

            // Event listeners for Next buttons
            nextButtons.forEach((button, index) => {
                button.addEventListener("click", () => {
                    if (validateForm(index)) {
                        steps[index].classList.remove("js-active");
                        steps[index + 1].classList.add("js-active");
                    }
                });
            });

            // Event listeners for Prev buttons
            prevButtons.forEach((button, index) => {
                button.addEventListener("click", () => {
                    steps[index + 1].classList.remove("js-active");
                    steps[index].classList.add("js-active");
                });
            });
        });
    </script>




    <script>
        $(document).ready(function() {
            // Handle form submission
            $(".multisteps-form__form").submit(function(event) {
                event.preventDefault(); // Prevent form from submitting normally

                var formData = new FormData(this); // Get the form data

                $.ajax({
                    url: "{{ route('amc.store') }}", // Your route to handle the form data
                    type: 'POST',
                    data: formData,
                    processData: false, // Don't process the data
                    contentType: false, // Don't set content type
                    success: function(response) {
                        // Log the response to the console
                        console.log("Success:", response);
                        // Show success modal if the response is successful
                        $('#myInquirySuccessModal').modal('show'); // Assuming you have a modal with id 'myInquirySuccessModal'
                    },
                    error: function(xhr, status, error) {
                        // Log the error to the console
                        console.log("Error:", error);
                        // Show error modal if the request fails
                        $('#myInquiryErrorModal').modal('show'); // Assuming you have a modal with id 'myInquiryErrorModal'
                    }
                });
            });
        });
    </script>





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
                        $('#myInquirySuccessModall').modal('show');
                    } else {
                        // Show error modal
                        $('#myInquiryErrorModall').modal('show');
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