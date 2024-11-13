<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print AMC Request | DOZO</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
    <!-- icon -->
    <link rel="icon" href="{{asset('assets/img/logo/dlogo.ico')}}" type="image/png">
    <style>
        @import url("https://fonts.googleapis.com/css?family=Barlow:200,300,400,500,600,700,800,900|Teko:300,400,500,600,700&display=swap");

        .white-bg {
            background: #ffffff;
        }

        .gray-bg {
            background: #f5f5f5;
        }

        .gray-bg {
            background: #f7f7fd;
        }

        .white-bg {
            background: #fff;
        }

        .black-bg {
            background: #16161a;
        }

        .theme-bg {
            background: #ff5f13;
        }

        .brand-bg {
            background: #f1f4fa;
        }

        .testimonial-bg {
            background: #f9fafc;
        }

        .white-color {
            color: #fff;
        }

        .black-color {
            color: #16161a;
        }

        .theme-color {
            color: #ff5f13;
        }

        .txt-org {
            color: #ff5f13;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .boxed-btn {
            background: #fff;
            color: #ff5f13 !important;
            display: inline-block;
            padding: 18px 44px;
            font-family: "Barlow", sans-serif;
            font-size: 14px;
            font-weight: 400;
            border: 0;
            border: 1px solid #ff5f13;
            letter-spacing: 3px;
            text-align: center;
            color: #ff5f13;
            text-transform: uppercase;
            cursor: pointer;
        }

        .boxed-btn:hover {
            background: #ff5f13;
            color: #fff !important;
            border: 1px solid #ff5f13;
        }

        .boxed-btn:focus {
            outline: none;
        }

        .boxed-btn.large-width {
            width: 220px;
        }

        [data-overlay] {
            position: relative;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }

        [data-overlay]::before {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            content: "";
        }

        [data-opacity="1"]::before {
            opacity: 0.1;
        }

        [data-opacity="2"]::before {
            opacity: 0.2;
        }

        [data-opacity="3"]::before {
            opacity: 0.3;
        }

        [data-opacity="4"]::before {
            opacity: 0.4;
        }

        [data-opacity="5"]::before {
            opacity: 0.5;
        }

        [data-opacity="6"]::before {
            opacity: 0.6;
        }

        [data-opacity="7"]::before {
            opacity: 0.7;
        }

        [data-opacity="8"]::before {
            opacity: 0.8;
        }

        [data-opacity="9"]::before {
            opacity: 0.9;
        }

        body {
            font-family: "Barlow", sans-serif;
            font-weight: normal;
            font-style: normal;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Barlow", sans-serif;
            color: #0b1c39;
            margin-top: 0px;
            font-style: normal;
            font-weight: 500;
            text-transform: normal;
        }

        p {
            font-family: "Barlow", sans-serif;
            color: "Barlow", sans-serif;
            font-size: 16px;
            line-height: 24px;
            margin-bottom: 15px;
            font-weight: normal;
        }

        .bg-img-1 {
            background-image: url(../img/slider/slider-img-1.jpg);
        }

        .bg-img-2 {
            background-image: url(../img/background-img/bg-img-2.jpg);
        }

        .cta-bg-1 {
            background-image: url(../img/background-img/bg-img-3.jpg);
        }

        .img {
            max-width: 100%;
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
        }

        .f-left {
            float: left;
        }

        .f-right {
            float: right;
        }

        .fix {
            overflow: hidden;
        }

        .clear {
            clear: both;
        }

        a,
        .button {
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
        }

        a:focus,
        .button:focus {
            text-decoration: none;
            outline: none;
        }

        a {
            color: #635c5c;
        }

        a:hover {
            color: #fff;
        }

        a:focus,
        a:hover,
        .portfolio-cat a:hover,
        .footer -menu li a:hover {
            text-decoration: none;
        }

        a,
        button {
            color: #fff;
            outline: medium none;
        }

        a,
        button {
            color: #1696e7;
            outline: medium none;
        }

        button:focus,
        input:focus,
        input:focus,
        textarea,
        textarea:focus {
            outline: 0;
        }

        .uppercase {
            text-transform: uppercase;
        }

        input:focus::-moz-placeholder {
            opacity: 0;
            -webkit-transition: 0.4s;
            -o-transition: 0.4s;
            transition: 0.4s;
        }

        .capitalize {
            text-transform: capitalize;
        }

        h1 a,
        h2 a,
        h3 a,
        h4 a,
        h5 a,
        h6 a {
            color: inherit;
        }

        ul {
            margin: 0px;
            padding: 0px;
        }

        li {
            list-style: none;
        }

        hr {
            border-bottom: 1px solid #eceff8;
            border-top: 0 none;
            margin: 30px 0;
            padding: 0;
        }

        .theme-overlay {
            position: relative;
        }

        .theme-overlay::before {
            background: #1696e7 none repeat scroll 0 0;
            content: "";
            height: 100%;
            left: 0;
            opacity: 0.6;
            position: absolute;
            top: 0;
            width: 100%;
        }

        .overlay {
            position: relative;
            z-index: 0;
        }

        .overlay::before {
            position: absolute;
            content: "";
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .overlay2 {
            position: relative;
            z-index: 0;
        }

        .overlay2::before {
            position: absolute;
            content: "";
            background-color: #2e2200;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.5;
        }

        .section-padding {
            padding-top: 120px;
            padding-bottom: 120px;
        }

        .separator {
            border-top: 1px solid #f2f2f2;
        }

        .mb-90 {
            margin-bottom: 90px;
        }

        @media (max-width: 767px) {
            .mb-90 {
                margin-bottom: 30px;
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .mb-90 {
                margin-bottom: 45px;
            }
        }

        .owl-carousel .owl-nav div {
            background: rgba(255, 255, 255, 0.8) none repeat scroll 0 0;
            height: 40px;
            left: 20px;
            line-height: 40px;
            font-size: 22px;
            color: #646464;
            opacity: 1;
            visibility: visible;
            position: absolute;
            text-align: center;
            top: 50%;
            transform: translateY(-50%);
            transition: all 0.3s ease 0s;
            width: 40px;
        }

        .owl-carousel .owl-nav div.owl-next {
            left: auto;
            right: -30px;
        }

        .owl-carousel .owl-nav div.owl-next i {
            position: relative;
            right: 0;
            top: 1px;
        }

        .owl-carousel .owl-nav div.owl-prev i {
            position: relative;
            right: 1px;
            top: 0px;
        }

        .owl-carousel:hover .owl-nav div {
            opacity: 1;
            visibility: visible;
        }

        .owl-carousel:hover .owl-nav div:hover {
            color: #fff;
            background: #ff3500;
        }

        .btn {
            background: #202020;
            -moz-user-select: none;
            text-transform: uppercase;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 1px;
            line-height: 0;
            margin-bottom: 0;
            padding: 25px 22px;
            margin: 10px;
            cursor: pointer;
            transition: color 0.4s linear;
            position: relative;
            z-index: 1;
            border: 0;
            overflow: hidden;
            margin: 0;
            border-radius: 5px;
        }

        .btn::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 101%;
            height: 101%;
            background: #000000;
            z-index: 1;
            transition: transform 0.5s;
            transition-timing-function: ease;
            transform-origin: 0 0;
            transition-timing-function: cubic-bezier(0.5, 1.6, 0.4, 0.7);
            transform: scaleX(0);
            border-radius: 0px;
        }

        .btn:hover::before {
            transform: scaleX(1);
            color: #fff !important;
            z-index: -1;
        }

        .btn.focus,
        .btn:focus {
            outline: 0;
            box-shadow: none;
        }

        /* btn2 */
        .btn22 {
            /* background: #202020; */
            background: #ff5f13;
            -moz-user-select: none;
            text-transform: uppercase;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 1px;
            line-height: 0;
            margin-bottom: 0;
            padding: 25px 22px;
            margin: 10px;
            cursor: pointer;
            transition: color 0.4s linear;
            position: relative;
            z-index: 1;
            border: 0;
            overflow: hidden;
            margin: 0;
            border-radius: 5px;
        }

        .btn22::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 101%;
            height: 101%;
            background: #fa6f2e;
            z-index: 1;
            transition: transform 0.5s;
            transition-timing-function: ease;
            transform-origin: 0 0;
            transition-timing-function: cubic-bezier(0.5, 1.6, 0.4, 0.7);
            transform: scaleX(0);
            border-radius: 0px;
        }

        .btn22:hover::before {
            transform: scaleX(1);
            color: #fff !important;
            z-index: -1;
        }

        .btn22.focus,
        .btn22:focus {
            outline: 0;
            box-shadow: none;
        }

        .red-btn2 {
            text-transform: uppercase;
            font-family: "Teko", sans-serif;
            padding: 30px 51px;
            font-size: 16px;
        }

        .white-btn {
            background: #fff;
            -moz-user-select: none;
            text-transform: uppercase;
            color: #000000;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 1px;
            line-height: 0;
            margin-bottom: 0;
            padding: 25px 22px;
            margin: 10px;
            cursor: pointer;
            transition: color 0.4s linear;
            position: relative;
            z-index: 1;
            border: 0;
            overflow: hidden;
            margin: 0;
            border-radius: 0px;
        }

        .white-btn::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 101%;
            height: 101%;
            background: #131313;
            z-index: 1;
            transition: transform 0.5s;
            transition-timing-function: ease;
            transform-origin: 0 0;
            transition-timing-function: cubic-bezier(0.5, 1.6, 0.4, 0.7);
            transform: scaleY(0);
            border-radius: 0px;
        }

        .white-btn:hover::before {
            transform: scaleY(1);
            color: #161e46 !important;
            z-index: -1;
        }

        .btn.hero-btn {
            position: relative;
            box-shadow: -8px 8px 0 #ca611b;
        }

        .btn.hero-btn:hover {
            box-shadow: 8px 8px 0 #ca611b;
        }

        .arrow-btn {
            background: #f27420;
            padding: 19px 15px;
            display: inline-block;
            line-height: 0;
            position: absolute;
            right: 0;
            bottom: 0;
        }

        .btn.focus,
        .btn:focus {
            outline: 0;
            box-shadow: none;
        }

        .breadcrumb>.active {
            color: #888;
        }

        #scrollUp {
            background: #ff5f13;
            height: 50px;
            width: 50px;
            right: 31px;
            bottom: 40px;
            color: #fff;
            font-size: 20px;
            text-align: center;
            border-radius: 50%;
            line-height: 48px;
            border: 2px solid transparent;
        }

        @media (max-width: 575px) {
            #scrollUp {
                right: 16px;
            }
        }

        #scrollUp:hover {
            color: #fff;
        }

        .sticky-bar {
            left: 0;
            margin: auto;
            position: fixed;
            top: 0;
            width: 100%;
            -webkit-box-shadow: 0 0 60px 0 rgba(0, 0, 0, 0.07);
            box-shadow: 0 0 60px 0 rgba(0, 0, 0, 0.07);
            z-index: 9999;
            -webkit-animation: 300ms ease-in-out 0s normal none 1 running fadeInDown;
            animation: 300ms ease-in-out 0s normal none 1 running fadeInDown;
            -webkit-box-shadow: 0 10px 15px rgba(25, 25, 25, 0.1);
            background: #fff;
        }

        .mt-5 {
            margin-top: 5px;
        }

        .mt-10 {
            margin-top: 10px;
        }

        .mt-15 {
            margin-top: 15px;
        }

        .mt-20 {
            margin-top: 20px;
        }

        .mt-25 {
            margin-top: 25px;
        }

        .mt-30 {
            margin-top: 30px;
        }

        .mt-35 {
            margin-top: 35px;
        }

        .mt-40 {
            margin-top: 40px;
        }

        .mt-45 {
            margin-top: 45px;
        }

        .mt-50 {
            margin-top: 50px;
        }

        .mt-55 {
            margin-top: 55px;
        }

        .mt-60 {
            margin-top: 60px;
        }

        .mt-65 {
            margin-top: 65px;
        }

        .mt-70 {
            margin-top: 70px;
        }

        .mt-75 {
            margin-top: 75px;
        }

        .mt-80 {
            margin-top: 80px;
        }

        .mt-85 {
            margin-top: 85px;
        }

        .mt-90 {
            margin-top: 90px;
        }

        .mt-95 {
            margin-top: 95px;
        }

        .mt-100 {
            margin-top: 100px;
        }

        .mt-105 {
            margin-top: 105px;
        }

        .mt-110 {
            margin-top: 110px;
        }

        .mt-115 {
            margin-top: 115px;
        }

        .mt-120 {
            margin-top: 120px;
        }

        .mt-125 {
            margin-top: 125px;
        }

        .mt-130 {
            margin-top: 130px;
        }

        .mt-135 {
            margin-top: 135px;
        }

        .mt-140 {
            margin-top: 140px;
        }

        .mt-145 {
            margin-top: 145px;
        }

        .mt-150 {
            margin-top: 150px;
        }

        .mt-155 {
            margin-top: 155px;
        }

        .mt-160 {
            margin-top: 160px;
        }

        .mt-165 {
            margin-top: 165px;
        }

        .mt-170 {
            margin-top: 170px;
        }

        .mt-175 {
            margin-top: 175px;
        }

        .mt-180 {
            margin-top: 180px;
        }

        .mt-185 {
            margin-top: 185px;
        }

        .mt-190 {
            margin-top: 190px;
        }

        .mt-195 {
            margin-top: 195px;
        }

        .mt-200 {
            margin-top: 200px;
        }

        .mb-5 {
            margin-bottom: 5px;
        }

        .mb-10 {
            margin-bottom: 10px;
        }

        .mb-15 {
            margin-bottom: 15px;
        }

        .mb-20 {
            margin-bottom: 20px;
        }

        .mb-25 {
            margin-bottom: 25px;
        }

        .mb-30 {
            margin-bottom: 30px;
        }

        .mb-35 {
            margin-bottom: 35px;
        }

        .mb-40 {
            margin-bottom: 40px;
        }

        .mb-45 {
            margin-bottom: 45px;
        }

        .mb-50 {
            margin-bottom: 50px;
        }

        .mb-55 {
            margin-bottom: 55px;
        }

        .mb-60 {
            margin-bottom: 60px;
        }

        .mb-65 {
            margin-bottom: 65px;
        }

        .mb-70 {
            margin-bottom: 70px;
        }

        .mb-75 {
            margin-bottom: 75px;
        }

        .mb-80 {
            margin-bottom: 80px;
        }

        .mb-85 {
            margin-bottom: 85px;
        }

        .mb-90 {
            margin-bottom: 90px;
        }

        .mb-95 {
            margin-bottom: 95px;
        }

        .mb-100 {
            margin-bottom: 100px;
        }

        .mb-105 {
            margin-bottom: 105px;
        }

        .mb-110 {
            margin-bottom: 110px;
        }

        .mb-115 {
            margin-bottom: 115px;
        }

        .mb-120 {
            margin-bottom: 120px;
        }

        .mb-125 {
            margin-bottom: 125px;
        }

        .mb-130 {
            margin-bottom: 130px;
        }

        .mb-135 {
            margin-bottom: 135px;
        }

        .mb-140 {
            margin-bottom: 140px;
        }

        .mb-145 {
            margin-bottom: 145px;
        }

        .mb-150 {
            margin-bottom: 150px;
        }

        .mb-155 {
            margin-bottom: 155px;
        }

        .mb-160 {
            margin-bottom: 160px;
        }

        .mb-165 {
            margin-bottom: 165px;
        }

        .mb-170 {
            margin-bottom: 170px;
        }

        .mb-175 {
            margin-bottom: 175px;
        }

        .mb-180 {
            margin-bottom: 180px;
        }

        .mb-185 {
            margin-bottom: 185px;
        }

        .mb-190 {
            margin-bottom: 190px;
        }

        .mb-195 {
            margin-bottom: 195px;
        }

        .mb-200 {
            margin-bottom: 200px;
        }

        .ml-5 {
            margin-left: 5px;
        }

        .ml-10 {
            margin-left: 10px;
        }

        .ml-15 {
            margin-left: 15px;
        }

        .ml-20 {
            margin-left: 20px;
        }

        .ml-25 {
            margin-left: 25px;
        }

        .ml-30 {
            margin-left: 30px;
        }

        .ml-35 {
            margin-left: 35px;
        }

        .ml-40 {
            margin-left: 40px;
        }

        .ml-45 {
            margin-left: 45px;
        }

        .ml-50 {
            margin-left: 50px;
        }

        .ml-55 {
            margin-left: 55px;
        }

        .ml-60 {
            margin-left: 60px;
        }

        .ml-65 {
            margin-left: 65px;
        }

        .ml-70 {
            margin-left: 70px;
        }

        .ml-75 {
            margin-left: 75px;
        }

        .ml-80 {
            margin-left: 80px;
        }

        .ml-85 {
            margin-left: 85px;
        }

        .ml-90 {
            margin-left: 90px;
        }

        .ml-95 {
            margin-left: 95px;
        }

        .ml-100 {
            margin-left: 100px;
        }

        .ml-105 {
            margin-left: 105px;
        }

        .ml-110 {
            margin-left: 110px;
        }

        .ml-115 {
            margin-left: 115px;
        }

        .ml-120 {
            margin-left: 120px;
        }

        .ml-125 {
            margin-left: 125px;
        }

        .ml-130 {
            margin-left: 130px;
        }

        .ml-135 {
            margin-left: 135px;
        }

        .ml-140 {
            margin-left: 140px;
        }

        .ml-145 {
            margin-left: 145px;
        }

        .ml-150 {
            margin-left: 150px;
        }

        .ml-155 {
            margin-left: 155px;
        }

        .ml-160 {
            margin-left: 160px;
        }

        .ml-165 {
            margin-left: 165px;
        }

        .ml-170 {
            margin-left: 170px;
        }

        .ml-175 {
            margin-left: 175px;
        }

        .ml-180 {
            margin-left: 180px;
        }

        .ml-185 {
            margin-left: 185px;
        }

        .ml-190 {
            margin-left: 190px;
        }

        .ml-195 {
            margin-left: 195px;
        }

        .ml-200 {
            margin-left: 200px;
        }

        .mr-5 {
            margin-right: 5px;
        }

        .mr-10 {
            margin-right: 10px;
        }

        .mr-15 {
            margin-right: 15px;
        }

        .mr-20 {
            margin-right: 20px;
        }

        .mr-25 {
            margin-right: 25px;
        }

        .mr-30 {
            margin-right: 30px;
        }

        .mr-35 {
            margin-right: 35px;
        }

        .mr-40 {
            margin-right: 40px;
        }

        .mr-45 {
            margin-right: 45px;
        }

        .mr-50 {
            margin-right: 50px;
        }

        .mr-55 {
            margin-right: 55px;
        }

        .mr-60 {
            margin-right: 60px;
        }

        .mr-65 {
            margin-right: 65px;
        }

        .mr-70 {
            margin-right: 70px;
        }

        .mr-75 {
            margin-right: 75px;
        }

        .mr-80 {
            margin-right: 80px;
        }

        .mr-85 {
            margin-right: 85px;
        }

        .mr-90 {
            margin-right: 90px;
        }

        .mr-95 {
            margin-right: 95px;
        }

        .mr-100 {
            margin-right: 100px;
        }

        .mr-105 {
            margin-right: 105px;
        }

        .mr-110 {
            margin-right: 110px;
        }

        .mr-115 {
            margin-right: 115px;
        }

        .mr-120 {
            margin-right: 120px;
        }

        .mr-125 {
            margin-right: 125px;
        }

        .mr-130 {
            margin-right: 130px;
        }

        .mr-135 {
            margin-right: 135px;
        }

        .mr-140 {
            margin-right: 140px;
        }

        .mr-145 {
            margin-right: 145px;
        }

        .mr-150 {
            margin-right: 150px;
        }

        .mr-155 {
            margin-right: 155px;
        }

        .mr-160 {
            margin-right: 160px;
        }

        .mr-165 {
            margin-right: 165px;
        }

        .mr-170 {
            margin-right: 170px;
        }

        .mr-175 {
            margin-right: 175px;
        }

        .mr-180 {
            margin-right: 180px;
        }

        .mr-185 {
            margin-right: 185px;
        }

        .mr-190 {
            margin-right: 190px;
        }

        .mr-195 {
            margin-right: 195px;
        }

        .mr-200 {
            margin-right: 200px;
        }

        .pt-5 {
            padding-top: 5px;
        }

        .pt-10 {
            padding-top: 10px;
        }

        .pt-15 {
            padding-top: 15px;
        }

        .pt-20 {
            padding-top: 20px;
        }

        .pt-25 {
            padding-top: 25px;
        }

        .pt-30 {
            padding-top: 30px;
        }

        .pt-35 {
            padding-top: 35px;
        }

        .pt-40 {
            padding-top: 40px;
        }

        .pt-45 {
            padding-top: 45px;
        }

        .pt-50 {
            padding-top: 50px;
        }

        .pt-55 {
            padding-top: 55px;
        }

        .pt-60 {
            padding-top: 60px;
        }

        .pt-65 {
            padding-top: 65px;
        }

        .pt-70 {
            padding-top: 70px;
        }

        .pt-75 {
            padding-top: 75px;
        }

        .pt-80 {
            padding-top: 80px;
        }

        .pt-85 {
            padding-top: 85px;
        }

        .pt-90 {
            padding-top: 90px;
        }

        .pt-95 {
            padding-top: 95px;
        }

        .pt-100 {
            padding-top: 100px;
        }

        .pt-105 {
            padding-top: 105px;
        }

        .pt-110 {
            padding-top: 110px;
        }

        .pt-115 {
            padding-top: 115px;
        }

        .pt-120 {
            padding-top: 120px;
        }

        .pt-125 {
            padding-top: 125px;
        }

        .pt-130 {
            padding-top: 130px;
        }

        .pt-135 {
            padding-top: 135px;
        }

        .pt-140 {
            padding-top: 140px;
        }

        .pt-145 {
            padding-top: 145px;
        }

        .pt-150 {
            padding-top: 150px;
        }

        .pt-155 {
            padding-top: 155px;
        }

        .pt-160 {
            padding-top: 160px;
        }

        .pt-165 {
            padding-top: 165px;
        }

        .pt-170 {
            padding-top: 170px;
        }

        .pt-175 {
            padding-top: 175px;
        }

        .pt-180 {
            padding-top: 180px;
        }

        .pt-185 {
            padding-top: 185px;
        }

        .pt-190 {
            padding-top: 190px;
        }

        .pt-195 {
            padding-top: 195px;
        }

        .pt-200 {
            padding-top: 200px;
        }

        .pt-260 {
            padding-top: 260px;
        }

        .pb-5 {
            padding-bottom: 5px;
        }

        .pb-10 {
            padding-bottom: 10px;
        }

        .pb-15 {
            padding-bottom: 15px;
        }

        .pb-20 {
            padding-bottom: 20px;
        }

        .pb-25 {
            padding-bottom: 25px;
        }

        .pb-30 {
            padding-bottom: 30px;
        }

        .pb-35 {
            padding-bottom: 35px;
        }

        .pb-40 {
            padding-bottom: 40px;
        }

        .pb-45 {
            padding-bottom: 45px;
        }

        .pb-50 {
            padding-bottom: 50px;
        }

        .pb-55 {
            padding-bottom: 55px;
        }

        .pb-60 {
            padding-bottom: 60px;
        }

        .pb-65 {
            padding-bottom: 65px;
        }

        .pb-70 {
            padding-bottom: 70px;
        }

        .pb-75 {
            padding-bottom: 75px;
        }

        .pb-80 {
            padding-bottom: 80px;
        }

        .pb-85 {
            padding-bottom: 85px;
        }

        .pb-90 {
            padding-bottom: 90px;
        }

        .pb-95 {
            padding-bottom: 95px;
        }

        .pb-100 {
            padding-bottom: 100px;
        }

        .pb-105 {
            padding-bottom: 105px;
        }

        .pb-110 {
            padding-bottom: 110px;
        }

        .pb-115 {
            padding-bottom: 115px;
        }

        .pb-120 {
            padding-bottom: 120px;
        }

        .pb-125 {
            padding-bottom: 125px;
        }

        .pb-130 {
            padding-bottom: 130px;
        }

        .pb-135 {
            padding-bottom: 135px;
        }

        .pb-140 {
            padding-bottom: 140px;
        }

        .pb-145 {
            padding-bottom: 145px;
        }

        .pb-150 {
            padding-bottom: 150px;
        }

        .pb-155 {
            padding-bottom: 155px;
        }

        .pb-160 {
            padding-bottom: 160px;
        }

        .pb-165 {
            padding-bottom: 165px;
        }

        .pb-170 {
            padding-bottom: 170px;
        }

        .pb-175 {
            padding-bottom: 175px;
        }

        .pb-180 {
            padding-bottom: 180px;
        }

        .pb-185 {
            padding-bottom: 185px;
        }

        .pb-190 {
            padding-bottom: 190px;
        }

        .pb-195 {
            padding-bottom: 195px;
        }

        .pb-200 {
            padding-bottom: 200px;
        }

        .pl-5 {
            padding-left: 5px;
        }

        .pl-10 {
            padding-left: 10px;
        }

        .pl-15 {
            padding-left: 15px;
        }

        .pl-20 {
            padding-left: 20px;
        }

        .pl-25 {
            padding-left: 25px;
        }

        .pl-30 {
            padding-left: 30px;
        }

        .pl-35 {
            padding-left: 35px;
        }

        .pl-40 {
            padding-left: 40px;
        }

        .pl-45 {
            padding-left: 45px;
        }

        .pl-50 {
            padding-left: 50px;
        }

        .pl-55 {
            padding-left: 55px;
        }

        .pl-60 {
            padding-left: 60px;
        }

        .pl-65 {
            padding-left: 65px;
        }

        .pl-70 {
            padding-left: 70px;
        }

        .pl-75 {
            padding-left: 75px;
        }

        .pl-80 {
            padding-left: 80px;
        }

        .pl-85 {
            padding-left: 85px;
        }

        .pl-90 {
            padding-left: 90px;
        }

        .pl-95 {
            padding-left: 95px;
        }

        .pl-100 {
            padding-left: 100px;
        }

        .pl-105 {
            padding-left: 105px;
        }

        .pl-110 {
            padding-left: 110px;
        }

        .pl-115 {
            padding-left: 115px;
        }

        .pl-120 {
            padding-left: 120px;
        }

        .pl-125 {
            padding-left: 125px;
        }

        .pl-130 {
            padding-left: 130px;
        }

        .pl-135 {
            padding-left: 135px;
        }

        .pl-140 {
            padding-left: 140px;
        }

        .pl-145 {
            padding-left: 145px;
        }

        .pl-150 {
            padding-left: 150px;
        }

        .pl-155 {
            padding-left: 155px;
        }

        .pl-160 {
            padding-left: 160px;
        }

        .pl-165 {
            padding-left: 165px;
        }

        .pl-170 {
            padding-left: 170px;
        }

        .pl-175 {
            padding-left: 175px;
        }

        .pl-180 {
            padding-left: 180px;
        }

        .pl-185 {
            padding-left: 185px;
        }

        .pl-190 {
            padding-left: 190px;
        }

        .pl-195 {
            padding-left: 195px;
        }

        .pl-200 {
            padding-left: 200px;
        }

        .pr-5 {
            padding-right: 5px;
        }

        .pr-10 {
            padding-right: 10px;
        }

        .pr-15 {
            padding-right: 15px;
        }

        .pr-20 {
            padding-right: 20px;
        }

        .pr-25 {
            padding-right: 25px;
        }

        .pr-30 {
            padding-right: 30px;
        }

        .pr-35 {
            padding-right: 35px;
        }

        .pr-40 {
            padding-right: 40px;
        }

        .pr-45 {
            padding-right: 45px;
        }

        .pr-50 {
            padding-right: 50px;
        }

        .pr-55 {
            padding-right: 55px;
        }

        .pr-60 {
            padding-right: 60px;
        }

        .pr-65 {
            padding-right: 65px;
        }

        .pr-70 {
            padding-right: 70px;
        }

        .pr-75 {
            padding-right: 75px;
        }

        .pr-80 {
            padding-right: 80px;
        }

        .pr-85 {
            padding-right: 85px;
        }

        .pr-90 {
            padding-right: 90px;
        }

        .pr-95 {
            padding-right: 95px;
        }

        .pr-100 {
            padding-right: 100px;
        }

        .pr-105 {
            padding-right: 105px;
        }

        .pr-110 {
            padding-right: 110px;
        }

        .pr-115 {
            padding-right: 115px;
        }

        .pr-120 {
            padding-right: 120px;
        }

        .pr-125 {
            padding-right: 125px;
        }

        .pr-130 {
            padding-right: 130px;
        }

        .pr-135 {
            padding-right: 135px;
        }

        .pr-140 {
            padding-right: 140px;
        }

        .pr-145 {
            padding-right: 145px;
        }

        .pr-150 {
            padding-right: 150px;
        }

        .pr-155 {
            padding-right: 155px;
        }

        .pr-160 {
            padding-right: 160px;
        }

        .pr-165 {
            padding-right: 165px;
        }

        .pr-170 {
            padding-right: 170px;
        }

        .pr-175 {
            padding-right: 175px;
        }

        .pr-180 {
            padding-right: 180px;
        }

        .pr-185 {
            padding-right: 185px;
        }

        .pr-190 {
            padding-right: 190px;
        }

        .pr-195 {
            padding-right: 195px;
        }

        .pr-200 {
            padding-right: 200px;
        }

        .bounce-animate {
            animation-name: float-bob;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            -moz-animation-name: float-bob;
            -moz-animation-duration: 2s;
            -moz-animation-iteration-count: infinite;
            -moz-animation-timing-function: linear;
            -ms-animation-name: float-bob;
            -ms-animation-duration: 2s;
            -ms-animation-iteration-count: infinite;
            -ms-animation-timing-function: linear;
            -o-animation-name: float-bob;
            -o-animation-duration: 2s;
            -o-animation-iteration-count: infinite;
            -o-animation-timing-function: linear;
        }

        @-webkit-keyframes float-bob {
            0% {
                -webkit-transform: translateY(-20px);
                transform: translateY(-20px);
            }

            50% {
                -webkit-transform: translateY(-10px);
                transform: translateY(-10px);
            }

            100% {
                -webkit-transform: translateY(-20px);
                transform: translateY(-20px);
            }
        }

        .heartbeat {
            animation: heartbeat 1s infinite alternate;
        }

        @-webkit-keyframes heartbeat {
            to {
                -webkit-transform: scale(1.03);
                transform: scale(1.03);
            }
        }

        .rotateme {
            -webkit-animation-name: rotateme;
            animation-name: rotateme;
            -webkit-animation-duration: 30s;
            animation-duration: 30s;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
        }

        @keyframes rotateme {
            from {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @-webkit-keyframes rotateme {
            from {
                -webkit-transform: rotate(0deg);
            }

            to {
                -webkit-transform: rotate(360deg);
            }
        }

        .preloader {
            background-color: #f7f7f7;
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 999999;
            -webkit-transition: 0.6s;
            -o-transition: 0.6s;
            transition: 0.6s;
            margin: 0 auto;
        }

        .preloader .preloader-circle {
            width: 100px;
            height: 100px;
            position: relative;
            border-style: solid;
            border-width: 2px;
            border-top-color: #ff5f13;
            border-bottom-color: transparent;
            border-left-color: transparent;
            border-right-color: transparent;
            z-index: 10;
            border-radius: 50%;
            -webkit-box-shadow: 0 1px 5px 0 rgba(35, 181, 185, 0.15);
            box-shadow: 0 1px 5px 0 rgba(35, 181, 185, 0.15);
            background-color: #ffffff;
            -webkit-animation: zoom 2000ms infinite ease;
            animation: zoom 2000ms infinite ease;
            -webkit-transition: 0.6s;
            -o-transition: 0.6s;
            transition: 0.6s;
        }

        .preloader .preloader-circle2 {
            border-top-color: #0078ff;
        }

        .preloader .preloader-img {
            position: absolute;
            top: 50%;
            z-index: 200;
            left: 0;
            right: 0;
            margin: 0 auto;
            text-align: center;
            display: inline-block;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            padding-top: 6px;
            -webkit-transition: 0.6s;
            -o-transition: 0.6s;
            transition: 0.6s;
        }

        .preloader .preloader-img img {
            max-width: 55px;
        }

        .preloader .pere-text strong {
            font-weight: 800;
            color: #dca73a;
            text-transform: uppercase;
        }

        @-webkit-keyframes zoom {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                -webkit-transition: 0.6s;
                -o-transition: 0.6s;
                transition: 0.6s;
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                -webkit-transition: 0.6s;
                -o-transition: 0.6s;
                transition: 0.6s;
            }
        }

        @keyframes zoom {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                -webkit-transition: 0.6s;
                -o-transition: 0.6s;
                transition: 0.6s;
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                -webkit-transition: 0.6s;
                -o-transition: 0.6s;
                transition: 0.6s;
            }
        }

        .section-padding2 {
            padding-top: 200px;
            padding-bottom: 200px;
        }

        @media only screen and (min-width: 1200px) and (max-width: 1600px) {
            .section-padding2 {
                padding-top: 200px;
                padding-bottom: 200px;
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .section-padding2 {
                padding-top: 200px;
                padding-bottom: 200px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .section-padding2 {
                padding-top: 100px;
                padding-bottom: 100px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .section-padding2 {
                padding-top: 50px;
                padding-bottom: 50px;
            }
        }

        @media (max-width: 575px) {
            .section-padding2 {
                padding-top: 35px;
                padding-bottom: 50px;
            }
        }

        .section-padding30 {
            padding-top: 183px;
            padding-bottom: 170px;
        }

        @media only screen and (min-width: 1200px) and (max-width: 1600px) {
            .section-padding30 {
                padding-top: 183px;
                padding-bottom: 170px;
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .section-padding30 {
                padding-top: 150px;
                padding-bottom: 120px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .section-padding30 {
                padding-top: 100px;
                padding-bottom: 70px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .section-padding30 {
                padding-top: 70px;
                padding-bottom: 20px;
            }
        }

        @media (max-width: 575px) {
            .section-padding30 {
                padding-top: 70px;
                padding-bottom: 20px;
            }
        }

        .testimonial-padding {
            padding-top: 157px;
            padding-bottom: 157px;
        }

        @media only screen and (min-width: 1200px) and (max-width: 1600px) {
            .testimonial-padding {
                padding-top: 157px;
                padding-bottom: 157px;
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .testimonial-padding {
                padding-top: 120px;
                padding-bottom: 120px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .testimonial-padding {
                padding-top: 100px;
                padding-bottom: 100px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .testimonial-padding {
                padding-top: 80px;
                padding-bottom: 60px;
            }
        }

        @media (max-width: 575px) {
            .testimonial-padding {
                padding-top: 80px;
                padding-bottom: 60px;
            }
        }

        .footer-padding {
            padding-top: 130px;
            padding-bottom: 100px;
        }

        @media only screen and (min-width: 1200px) and (max-width: 1600px) {
            .footer-padding {
                padding-top: 130px;
                padding-bottom: 100px;
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .footer-padding {
                padding-top: 100px;
                padding-bottom: 50px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .footer-padding {
                padding-top: 100px;
                padding-bottom: 0px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .footer-padding {
                padding-top: 50px;
                padding-bottom: 0px;
            }
        }

        @media (max-width: 575px) {
            .footer-padding {
                padding-top: 50px;
                padding-bottom: 0px;
            }
        }

        .section-tittle {
            position: relative;
        }

        @media (max-width: 575px) {
            .section-tittle {
                margin-bottom: 0px;
            }
        }

        .section-tittle .front-text {
            position: relative;
            z-index: 2;
        }

        .section-tittle .front-text h2 {
            color: #0e132a;
            font-size: 45px;
            font-weight: 700;
            line-height: 1.2;
            text-transform: uppercase;
            font-family: "Teko", sans-serif;
        }

        @media (max-width: 575px) {
            .section-tittle .front-text h2 {
                font-size: 40px;
                line-height: 1.4;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .section-tittle .front-text h2 {
                font-size: 40px;
                line-height: 1.4;
            }
        }

        .section-tittle span.back-text {
            font-size: 110px;
            font-weight: 800;
            text-transform: uppercase;
            -webkit-text-stroke: 1px #e4e6e7;
            -webkit-text-fill-color: transparent;
            margin: 0;
            line-height: 1;
            position: absolute;
            transform: translateY(-114%);
            right: 0;
            left: 12px;
        }

        @media (max-width: 575px) {
            .section-tittle span.back-text {
                font-size: 56px;
                transform: translateY(-136%);
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .section-tittle span.back-text {
                font-size: 56px;
                transform: translateY(-136%);
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .section-tittle span.back-text {
                font-size: 127px;
            }
        }

        .section-tittle.section-tittle2 .front-text h2 {
            font-size: 100px;
        }

        @media (max-width: 575px) {
            .section-tittle.section-tittle2 .front-text h2 {
                font-size: 40px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .section-tittle.section-tittle2 .front-text h2 {
                font-size: 40px;
            }
        }

        .section-tittle.section-tittle2 span.back-text {
            transform: translateY(-123%);
        }

        @media only screen and (min-width: 1200px) and (max-width: 1600px) {
            .section-tittle.section-tittle2 span.back-text {
                font-size: 119px;
            }
        }

        @media only screen and (min-width: 1200px) and (max-width: 1440px) {
            .section-tittle.section-tittle2 span.back-text {
                font-size: 119px;
            }
        }

        @media only screen and (min-width: 1441px) and (max-width: 1800px) {
            .section-tittle.section-tittle2 span.back-text {
                font-size: 112px;
            }
        }

        @media (max-width: 575px) {
            .section-tittle.section-tittle2 span.back-text {
                font-size: 56px;
                transform: translateY(-136%);
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .section-tittle.section-tittle2 span.back-text {
                font-size: 56px;
                transform: translateY(-136%);
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .section-tittle.section-tittle2 span.back-text {
                font-size: 117px;
                transform: translateY(-128%);
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .section-tittle.section-tittle2 span.back-text {
                font-size: 117px;
                transform: translateY(-118%);
            }
        }

        .section-tittle.section-tittle3 .front-text h2 {
            font-size: 70px;
        }

        @media (max-width: 575px) {
            .section-tittle.section-tittle3 .front-text h2 {
                font-size: 40px;
            }
        }

        .section-tittle.section-tittle3 span.back-text {
            transform: translateY(-114%);
        }

        @media (max-width: 575px) {
            .section-tittle.section-tittle3 span.back-text {
                font-size: 56px;
                transform: translateY(-136%);
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .section-tittle.section-tittle3 span.back-text {
                font-size: 98px;
                transform: translateY(-131%);
            }
        }

        .section-tittle.section-tittle4 .front-text h2 {
            font-size: 70px;
            color: #fff;
        }

        @media (max-width: 575px) {
            .section-tittle.section-tittle4 .front-text h2 {
                font-size: 35px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .section-tittle.section-tittle4 .front-text h2 {
                font-size: 40px;
            }
        }

        .section-tittle.section-tittle4 span.back-text {
            -webkit-text-stroke: 1px rgba(255, 255, 255, 0.2);
            transform: translateY(-113%);
        }

        @media (max-width: 575px) {
            .section-tittle.section-tittle4 span.back-text {
                font-size: 56px;
                transform: translateY(-129%);
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .section-tittle.section-tittle4 span.back-text {
                font-size: 56px;
                transform: translateY(-130%);
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .section-tittle.section-tittle4 span.back-text {
                font-size: 117px;
                transform: translateY(-118%);
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .section-tittle.section-tittle4 span.back-text {
                font-size: 100px;
                transform: translateY(-113%);
            }
        }

        .section-tittle.section-tittle6 .front-text h2 {
            font-size: 50px;
            color: #fff;
        }

        @media (max-width: 575px) {
            .section-tittle.section-tittle6 .front-text h2 {
                font-size: 20px;
            }
        }

        .section-tittle.section-tittle6 span.back-text {
            -webkit-text-stroke: 1px rgba(255, 255, 255, 0.2);
            transform: translateY(-113%);
        }

        @media (max-width: 575px) {
            .section-tittle.section-tittle6 span.back-text {
                font-size: 56px;
                transform: translateY(-136%);
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .section-tittle.section-tittle6 span.back-text {
                font-size: 83px;
                transform: translateY(-137%);
            }
        }

        .small-section-tittle h4 {
            color: #0e132a;
            font-size: 18px;
            font-weight: 600;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .white-bg {
            background: #ffffff;
        }

        .gray-bg {
            background: #f5f5f5;
        }

        .gray-bg {
            background: #f7f7fd;
        }

        .white-bg {
            background: #fff;
        }

        .black-bg {
            background: #16161a;
        }

        .theme-bg {
            background: #ff5f13;
        }

        .brand-bg {
            background: #f1f4fa;
        }

        .testimonial-bg {
            background: #f9fafc;
        }

        .white-color {
            color: #fff;
        }

        .black-color {
            color: #16161a;
        }

        .theme-color {
            color: #ff5f13;
        }

        .header-area .header-top {
            padding: 13px 100px;
        }

        @media only screen and (min-width: 1200px) and (max-width: 1600px) {
            .header-area .header-top {
                padding: 13px 80px;
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .header-area .header-top {
                padding: 13px 15px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .header-area .header-top {
                padding: 13px 50px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .header-area .header-top {
                padding: 13px 20px;
            }
        }

        @media (max-width: 575px) {
            .header-area .header-top {
                padding: 13px 20px;
            }
        }

        .header-area .header-bottom {
            padding: 0px 100px;
        }

        @media only screen and (min-width: 1200px) and (max-width: 1600px) {
            .header-area .header-bottom {
                padding: 0px 80px;
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .header-area .header-bottom {
                padding: 0px 15px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .header-area .header-bottom {
                padding: 10px 50px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .header-area .header-bottom {
                padding: 10px 20px;
            }
        }

        @media (max-width: 575px) {
            .header-area .header-bottom {
                padding: 10px 20px;
            }
        }

        .header-area {
            background: rgba(25, 26, 51, 0.7);
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .header-area {
                box-shadow: 0 10px 15px rgba(25, 25, 25, 0.1);
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .header-area {
                box-shadow: 0 10px 15px rgba(25, 25, 25, 0.1);
            }
        }

        @media (max-width: 575px) {
            .header-area {
                box-shadow: 0 10px 15px rgba(25, 25, 25, 0.1);
            }
        }

        .header-area .header-top {
            border-bottom: 1px solid #3e4160;
        }

        .header-area .header-top .header-info-left ul li {
            color: #fff;
            display: inline-block;
            margin-right: 45px;
            font-family: "Barlow", sans-serif;
            font-size: 14px;
        }

        .header-area .header-top .header-info-left ul li:last-child {
            margin-right: 0px;
        }

        .header-area .header-top .header-info-left ul li i {
            margin-right: 8px;
        }

        .header-area .header-top .header-info-right .header-social li {
            display: inline-block;
        }

        .header-area .header-top .header-info-right .header-social li a {
            color: #fff;
            font-size: 14px;
            padding-left: 25px;
        }

        .header-area .header-top .header-info-right .header-social li a:hover {
            color: #ff5f13;
        }

        .main-header {
            position: relative;
            z-index: 3;
        }

        @media only screen and (min-width: 1200px) and (max-width: 1600px) {
            .main-header .main-menu {
                margin-right: 30px;
            }
        }

        .main-header .main-menu ul li {
            display: inline-block;
            position: relative;
            z-index: 1111111111 !important;
        }

        .main-header .main-menu ul li a {
            color: #ffffff;
            font-weight: 500;
            padding: 39px 19px;
            display: block;
            font-size: 16px;
            font-weight: 600;
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
            text-transform: capitalize;
        }

        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .main-header .main-menu ul li a {
                padding: 39px 14px;
            }
        }

        .main-header .main-menu ul li:hover>a {
            color: #000000;
        }

        .main-header .main-menu ul ul.submenu {
            position: absolute;
            width: 170px;
            background: #fff;
            left: 0;
            top: 90%;
            visibility: hidden;
            opacity: 0;
            box-shadow: 0 0 10px 3px rgba(0, 0, 0, 0.05);
            padding: 17px 0;
            border-top: 5px solid #ff5f13;
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
        }

        .main-header .main-menu ul ul.submenu>li {
            margin-left: 7px;
            display: block;
        }

        .main-header .main-menu ul ul.submenu>li>a {
            padding: 6px 10px !important;
            font-size: 14px;
            color: #0b1c39;
        }

        .main-header .main-menu ul ul.submenu>li>a:hover {
            color: #ff5f13;
            background: none;
        }

        .main-header .logo .small-logo {
            display: none;
        }

        @media (max-width: 575px) {
            .main-header .logo .small-logo {
                display: unset;
            }
        }

        @media (max-width: 575px) {
            .main-header .logo .big-logo {
                display: none;
            }
        }

        .main-header ul>li:hover>ul.submenu {
            visibility: visible;
            opacity: 1;
            top: 100%;
        }

        .header-transparent {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            z-index: 9;
        }

        .header-area .header-top .header-info-right .header-social a i {
            -webkit-transition: all 0.4s ease-out 0s;
            -moz-transition: all 0.4s ease-out 0s;
            -ms-transition: all 0.4s ease-out 0s;
            -o-transition: all 0.4s ease-out 0s;
            transition: all 0.4s ease-out 0s;
            transform: rotateY(0deg);
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            -ms-transform: rotateY(0deg);
            -o-transform: rotateY(0deg);
        }

        .header-area .header-top .header-info-right .header-social a:hover i {
            transform: rotateY(180deg);
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            -ms-transform: rotateY(180deg);
            -o-transform: rotateY(180deg);
        }

        .header-sticky.sticky-bar.sticky {
            background: #191a33;
        }

        .header-sticky ul li a {
            padding: 10px 19px;
        }

        .header-sticky.sticky-bar.sticky .main-menu ul>li>a {
            padding: 26px 20px;
        }

        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .header-sticky.sticky-bar.sticky .main-menu ul>li>a {
                padding: 39px 14px;
            }
        }

        .slicknav_menu .slicknav_icon-bar {
            background-color: #ffffff !important;
        }

        .slicknav_nav {
            margin-top: 0px;
        }

        .header-area .slicknav_btn {
            top: -45px;
        }

        .slicknav_menu .slicknav_nav a:hover {
            background: transparent;
            color: #ff5f13;
        }

        .slicknav_menu {
            background: transparent;
            margin-top: 4px !important;
        }

        .mobile_menu {
            position: absolute;
            right: 0px;
            width: 100%;
            z-index: 99;
        }

        .slider-height {
            min-height: 900px;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .slider-height {
                min-height: 620px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .slider-height {
                min-height: 600px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .slider-height {
                min-height: 600px;
            }
        }

        @media (max-width: 575px) {
            .slider-height {
                min-height: 400px;
            }
        }

        .slider-height2 {
            min-height: 590px;
            background-repeat: no-repeat;
            background-position: center center;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .slider-height2 {
                min-height: 500px;
            }
        }

        @media (max-width: 575px) {
            .slider-height2 {
                min-height: 350px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .slider-height2 {
                min-height: 350px;
            }
        }

        .btn1 {
            padding: 25px 0px;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .btn1 {
                padding: 25px 0;
            }
        }

        .slider-area {
            margin-top: -1px;
        }

        .slider-area .hero__caption {
            margin-left: 27px;
            padding-top: 150px;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .slider-area .hero__caption {
                padding-top: 70px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .slider-area .hero__caption {
                padding-top: 70px;
            }
        }

        @media (max-width: 575px) {
            .slider-area .hero__caption {
                padding-top: 70px;
            }
        }

        .slider-area .hero__caption h1 {
            font-size: 140px;
            font-weight: 900;
            color: #ffffff;
            font-family: "Barlow", sans-serif;
            line-height: 1;
            text-transform: uppercase;
            color: #ff5f13;
            margin: 0;
            padding: 0;
        }

        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .slider-area .hero__caption h1 {
                font-size: 135px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .slider-area .hero__caption h1 {
                font-size: 110px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .slider-area .hero__caption h1 {
                font-size: 72px;
            }
        }

        @media (max-width: 575px) {
            .slider-area .hero__caption h1 {
                font-size: 42px;
            }
        }

        .slider-area .hero__caption .stock-text {
            position: relative;
            left: 119px;
            top: -38px;
        }

        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .slider-area .hero__caption .stock-text {
                top: -29px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .slider-area .hero__caption .stock-text {
                top: -19px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .slider-area .hero__caption .stock-text {
                top: -12px;
                left: 40px;
            }
        }

        @media (max-width: 575px) {
            .slider-area .hero__caption .stock-text {
                top: -12px;
                left: 40px;
                top: 0;
                left: 0;
            }
        }

        .slider-area .hero__caption .stock-text h2 {
            font-size: 140px;
            font-weight: 800;
            margin: 0;
            line-height: 1;
            text-transform: uppercase;
            position: absolute;
            color: #fff;
        }

        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .slider-area .hero__caption .stock-text h2 {
                font-size: 110px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .slider-area .hero__caption .stock-text h2 {
                font-size: 60px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .slider-area .hero__caption .stock-text h2 {
                font-size: 52px;
            }
        }

        @media (max-width: 575px) {
            .slider-area .hero__caption .stock-text h2 {
                font-size: 27px;
                margin-bottom: 25px;
            }
        }

        .slider-area .hero__caption .stock-text h2:nth-child(1) {
            color: transparent;
            -webkit-text-stroke: 1px #fff;
            -webkit-text-fill-color: transparent;
        }

        .slider-area .hero__caption .stock-text h2:nth-child(2) {
            color: #ff5f13;
            -webkit-animation: animate 4s ease-in-out infinite;
            animation: animate 4s ease-in-out infinite;
        }

        @keyframes animate {

            0%,
            100% {
                clip-path: polygon(0% 45%,
                        15% 44%,
                        32% 50%,
                        54% 60%,
                        70% 61%,
                        84% 69%,
                        100% 52%,
                        100% 100%,
                        0% 100%);
            }

            50% {
                clip-path: polygon(0% 60%,
                        16% 65%,
                        34% 66%,
                        51% 62%,
                        67% 50%,
                        84% 45%,
                        100% 46%,
                        100% 100%,
                        0% 100%);
            }
        }

        .slider-area .hero__caption .hero-text1 span,
        .slider-area .hero__caption .hero-text1 a,
        .slider-area .hero__caption .hero-text2 span,
        .slider-area .hero__caption .hero-text2 a {
            position: relative;
            color: #fff;
            font-size: 18px;
            text-transform: uppercase;
            font-family: "Teko", sans-serif;
            font-weight: 400;
            letter-spacing: 0.03em;
            display: block;
        }

        .slider-area .hero__caption .hero-text1 span::before,
        .slider-area .hero__caption .hero-text1 a::before,
        .slider-area .hero__caption .hero-text2 span::before,
        .slider-area .hero__caption .hero-text2 a::before {
            position: absolute;
            content: "";
            width: 25px;
            height: 2px;
            top: 0;
            left: -30px;
            top: 50%;
            transform: translateY(-50%);
            background: #ff5f13;
        }

        @media (max-width: 575px) {

            .slider-area .hero__caption .hero-text1 span,
            .slider-area .hero__caption .hero-text1 a,
            .slider-area .hero__caption .hero-text2 span,
            .slider-area .hero__caption .hero-text2 a {
                margin-bottom: 20px;
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .slider-area .hero__caption .hero-text2 {
                margin-top: 100px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .slider-area .hero__caption .hero-text2 {
                margin-top: 56px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .slider-area .hero__caption .hero-text2 {
                margin-top: 50px;
            }
        }

        @media (max-width: 575px) {
            .slider-area .hero__caption .hero-text2 {
                margin-top: 50px;
            }
        }

        .hero-overly {
            position: relative;
            z-index: 1;
        }

        .hero-overly::before {
            position: absolute;
            content: "";
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            z-index: 0;
            background-repeat: no-repeat;
        }

        .slider-area .hero-cap h2 {
            color: #fff;
            font-size: 70px;
            font-weight: 900;
            text-transform: uppercase;
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .slider-area .hero-cap h2 {
                font-size: 50px;
            }
        }

        @media (max-width: 575px) {
            .slider-area .hero-cap h2 {
                font-size: 50px;
            }
        }

        .slider-area .hero-cap nav {
            margin: 7px 0;
            padding-left: 95px;
            position: relative;
        }

        .slider-area .hero-cap nav::before {
            position: absolute;
            content: "";
            width: 75px;
            height: 1px;
            background: #ff5f13;
            left: 0;
            top: 52%;
            transform: translateY(-50%);
        }

        .slider-area .hero-cap .breadcrumb {
            background: none;
            padding: 0;
            margin: 0;
        }

        .slider-area .hero-cap .breadcrumb a {
            color: #ff5f13;
            font-size: 17px;
            text-transform: uppercase;
        }

        .slider-area .hero-cap .breadcrumb-item+.breadcrumb-item::before {
            color: #ff5f13;
        }

        @media (max-width: 575px) {
            .slider-area .hero-cap.hero-cap2 {
                padding-top: 50px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .slider-area .hero-cap.hero-cap2 {
                padding-top: 50px;
            }
        }

        .slider-area .hero-cap.hero-cap2 h2 {
            font-size: 60px;
            font-weight: 700;
            text-transform: capitalize;
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .slider-area .hero-cap.hero-cap2 h2 {
                font-size: 37px;
            }
        }

        @media (max-width: 575px) {
            .slider-area .hero-cap.hero-cap2 h2 {
                font-size: 26px;
            }
        }

        .services-area1 .single-service-cap {
            overflow: hidden;
        }

        .services-area1 .single-service-cap .service-img {
            overflow: hidden;
        }

        .services-area1 .single-service-cap .service-img img {
            width: 100%;
            transform: scale(1);
            -webkit-transition: all 0.5s ease-out 0s;
            -moz-transition: all 0.5s ease-out 0s;
            -ms-transition: all 0.5s ease-out 0s;
            -o-transition: all 0.5s ease-out 0s;
            transition: all 0.5s ease-out 0s;
        }

        .services-area1 .single-service-cap .service-cap {
            padding: 20px 30px 20px 30px;
            background: #fcfdff;
        }

        .services-area1 .single-service-cap .service-cap h4 {
            margin-bottom: 35px;
        }

        .services-area1 .single-service-cap .service-cap h4 a {
            color: #0e132a;
            font-size: 24px;
            font-weight: 700;
        }

        @media (max-width: 575px) {
            .services-area1 .single-service-cap .service-cap h4 a {
                font-size: 18px;
            }
        }

        .services-area1 .single-service-cap .service-cap h4 a:hover {
            color: #ff5f13;
        }

        .services-area1 .single-service-cap .service-icon img {
            width: 100%;
        }

        .single-service-cap:hover .service-img img {
            transform: scale(1.1);
        }

        .single-service-cap:hover .more-btn i {
            color: #fff;
            background: #ff5f13;
        }

        .more-btn {
            color: #161e46;
            font-size: 14px;
            font-weight: 500;
            display: block;
            margin-bottom: 10px;
        }

        .more-btn i {
            color: #161e46;
            background: transparent;
            width: 38px;
            height: 38px;
            display: inline-block;
            line-height: 38px;
            text-align: center;
            font-size: 15px;
            margin-left: 10px;
            -webkit-transition: all 0.4s ease-out 0s;
            -moz-transition: all 0.4s ease-out 0s;
            -ms-transition: all 0.4s ease-out 0s;
            -o-transition: all 0.4s ease-out 0s;
            transition: all 0.4s ease-out 0s;
        }

        .more-btn:hover {
            color: #161e46;
        }

        .more-btn:hover i {
            color: #fff;
            background: #ff5f13;
        }

        .support-company-area .support-wrapper {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .support-company-area .support-wrapper {
                display: block;
            }
        }

        .support-company-area .support-wrapper .left-content {
            width: 54%;
            padding-left: 366px;
        }

        @media only screen and (min-width: 1200px) and (max-width: 1600px) {
            .support-company-area .support-wrapper .left-content {
                width: 49%;
            }
        }

        @media only screen and (min-width: 1200px) and (max-width: 1440px) {
            .support-company-area .support-wrapper .left-content {
                padding-left: 30px;
                width: 49%;
            }
        }

        @media only screen and (min-width: 1441px) and (max-width: 1800px) {
            .support-company-area .support-wrapper .left-content {
                padding-left: 200px;
                width: 49%;
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .support-company-area .support-wrapper .left-content {
                width: 100%;
                padding-left: 120px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .support-company-area .support-wrapper .left-content {
                width: 100%;
                padding-left: 30px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .support-company-area .support-wrapper .left-content {
                width: 100%;
                padding-left: 30px;
            }
        }

        @media (max-width: 575px) {
            .support-company-area .support-wrapper .left-content {
                width: 100%;
                padding-left: 30px;
            }
        }

        .support-company-area .support-wrapper .left-content .support-caption {
            padding-right: 144px;
        }

        @media (max-width: 575px) {
            .support-company-area .support-wrapper .left-content .support-caption {
                padding-right: 0px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .support-company-area .support-wrapper .left-content .support-caption {
                padding-right: 0px;
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .support-company-area .support-wrapper .left-content .support-caption {
                padding-right: 70px;
            }
        }

        .support-company-area .support-wrapper .left-content .support-caption p {
            margin-bottom: 46px;
            font-size: 15px;
        }

        .support-company-area .support-wrapper .left-content .support-caption p.pera-top {
            font-size: 17px;
            font-weight: 700;
            color: #0b0b2b;
        }

        .support-company-area .support-wrapper .right-content {
            width: 40%;
            position: relative;
        }

        @media only screen and (min-width: 1200px) and (max-width: 1600px) {
            .support-company-area .support-wrapper .right-content {
                width: 49%;
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .support-company-area .support-wrapper .right-content {
                width: 80%;
                margin-left: 119px;
                padding-top: 50px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .support-company-area .support-wrapper .right-content {
                width: 80%;
                padding-top: 50px;
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .support-company-area .support-wrapper .right-content {
                width: 100%;
                padding-top: 50px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .support-company-area .support-wrapper .right-content {
                width: 100%;
                padding-top: 50px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .support-company-area .support-wrapper .right-content {
                width: 100%;
                padding-top: 50px;
            }
        }

        @media (max-width: 575px) {
            .support-company-area .support-wrapper .right-content {
                width: 100%;
                padding-top: 50px;
            }
        }

        .support-company-area .support-wrapper .right-content .right-img img {
            width: 100%;
        }

        .support-company-area .support-wrapper .right-content .support-img-cap {
            position: absolute;
            bottom: 0px;
            background: #ff5f13;
            padding: 59px 28px;
            border-radius: 0 15px 15px 0;
        }

        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .support-company-area .support-wrapper .right-content .support-img-cap {
                padding: 27px 18px;
            }
        }

        @media (max-width: 575px) {
            .support-company-area .support-wrapper .right-content .support-img-cap {
                padding: 35px 0px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .support-company-area .support-wrapper .right-content .support-img-cap {
                padding: 35px 18px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .support-company-area .support-wrapper .right-content .support-img-cap {
                padding: 35px 18px;
            }
        }

        .support-company-area .support-wrapper .right-content .support-img-cap span {
            font-size: 60px;
            color: #fff;
            text-transform: uppercase;
            font-weight: 700;
            font-family: "Barlow", sans-serif;
            line-height: 1.2;
        }

        @media (max-width: 575px) {
            .support-company-area .support-wrapper .right-content .support-img-cap span {
                padding: 6px 40px;
                font-size: 38px;
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .support-company-area .support-wrapper .right-content .support-img-cap span {
                font-size: 35px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .support-company-area .support-wrapper .right-content .support-img-cap span {
                font-size: 35px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .support-company-area .support-wrapper .right-content .support-img-cap span {
                font-size: 35px;
            }
        }

        .support-company-area .support-wrapper .right-content .support-img-cap P {
            color: #fff;
            line-height: 1;
            margin: 0;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 0.5em;
        }

        .count-area {
            margin-top: -134px;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {

            .count-area .col-lg-4:nth-child(1) .count-clients .single-counter,
            .count-area .col-lg-4:nth-child(2) .count-clients .single-counter {
                padding-bottom: 0px;
                text-align: center;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {

            .count-area .col-lg-4:nth-child(1) .count-clients .single-counter,
            .count-area .col-lg-4:nth-child(2) .count-clients .single-counter {
                padding-bottom: 0px;
                text-align: center;
            }
        }

        @media (max-width: 575px) {

            .count-area .col-lg-4:nth-child(1) .count-clients .single-counter,
            .count-area .col-lg-4:nth-child(2) .count-clients .single-counter {
                padding-bottom: 0px;
                text-align: center;
            }
        }

        .count-area .count-clients {
            display: flex;
            justify-content: center;
        }

        .count-area .count-clients .single-counter {
            padding: 60px 0;
            display: flex;
        }

        .count-area .count-clients .single-counter:last-child {
            margin-right: 0px;
        }

        .count-area .count-clients .single-counter .count-number span {
            color: #fff;
            font-size: 55px;
            font-weight: 700;
            margin-bottom: 0;
            display: block;
        }

        .count-area .count-clients .single-counter p {
            font-size: 14px;
            font-weight: 300;
            line-height: 1;
            margin: 0;
            padding: 0;
        }

        .count-area .count-clients .single-counter .count-text {
            padding-left: 20px;
        }

        .count-area .count-clients .single-counter .count-text p {
            color: #fff;
            font-size: 16px;
            text-transform: uppercase;
            margin-bottom: 10px;
            display: block;
        }

        .count-area .count-clients .single-counter .count-text h5 {
            color: #fff;
            font-size: 36px;
            text-transform: capitalize;
            margin-bottom: 0px;
            display: block;
        }

        .count-bg {
            background-size: cover;
            background-repeat: no-repeat;
        }

        .single-team .team-img {
            overflow: hidden;
            margin-bottom: 19px;
        }

        .single-team .team-img img {
            width: 100%;
            transform: scale(1);
            transition: all 0.6s ease-out 0s;
        }

        .single-team .team-caption span {
            color: #ff5f13;
            font-size: 14px;
            font-weight: 500;
            font-family: "Teko", sans-serif;
            display: block;
            position: relative;
            margin-left: 30px;
            margin-bottom: 10px;
        }

        .single-team .team-caption span::before {
            position: absolute;
            content: "";
            width: 25px;
            height: 2px;
            top: 0;
            left: -30px;
            top: 50%;
            transform: translateY(-50%);
            background: #ff5f13;
        }

        .single-team .team-caption h3 {
            color: #0e132a;
            font-weight: 700;
            font-size: 25px;
            font-family: "Teko", sans-serif;
        }

        .single-team:hover .team-img img {
            transform: scale(1.1);
        }

        .latest-news-area .single-news {
            background: #131212;
        }

        .latest-news-area .single-news .news-img {
            position: relative;
            overflow: hidden;
        }

        .latest-news-area .single-news .news-img img {
            width: 100%;
            -webkit-transform: scale 1;
            -ms-transform: scale 1;
            transform: scale 1;
            transition: all 0.5s ease-out 0s;
            -webkit-transition: all 0.7s ease-out 0s;
            -moz-transition: all 0.7s ease-out 0s;
            -ms-transition: all 0.7s ease-out 0s;
            -o-transition: all 0.7s ease-out 0s;
            transition: all 0.7s ease-out 0s;
        }

        .latest-news-area .single-news .news-img .news-date {
            background: #ff5f13;
            padding: 15px 34px;
            display: inline-block;
            position: absolute;
            top: 0;
            left: 0;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .latest-news-area .single-news .news-img .news-date {
                padding: 8px 20px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .latest-news-area .single-news .news-img .news-date {
                padding: 8px 20px;
            }
        }

        @media (max-width: 575px) {
            .latest-news-area .single-news .news-img .news-date {
                padding: 8px 20px;
            }
        }

        .latest-news-area .single-news .news-img .news-date span {
            color: #fff;
            font-size: 25px;
            font-weight: 600;
            line-height: 1;
            margin: 0;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .latest-news-area .single-news .news-img .news-date span {
                font-size: 22px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .latest-news-area .single-news .news-img .news-date span {
                font-size: 22px;
            }
        }

        @media (max-width: 575px) {
            .latest-news-area .single-news .news-img .news-date span {
                font-size: 22px;
            }
        }

        .latest-news-area .single-news .news-img .news-date p {
            color: #fff;
            margin: 0;
        }

        .latest-news-area .single-news .news-caption {
            padding: 40px 57px 40px 60px;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .latest-news-area .single-news .news-caption {
                padding: 10px 10px 10px 10px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .latest-news-area .single-news .news-caption {
                padding: 10px 10px 10px 10px;
            }
        }

        @media (max-width: 575px) {
            .latest-news-area .single-news .news-caption {
                padding: 10px 10px 10px 10px;
            }
        }

        .latest-news-area .single-news .news-caption .david-info li {
            display: inline-block;
            margin-right: 14px;
            padding-right: 14px;
            line-height: 1;
            margin-bottom: 16px;
            color: #a4acc3;
        }

        @media (max-width: 575px) {
            .latest-news-area .single-news .news-caption .david-info li {
                margin-right: 1px;
                padding-right: 5px;
                padding-right: 12px;
            }
        }

        .latest-news-area .single-news .news-caption .david-info li:last-child {
            margin-right: 0px;
            padding-right: 0px;
            border-right: 0;
        }

        .latest-news-area .single-news .news-caption h2 a {
            color: #fff;
            font-weight: 700;
            font-size: 25px;
            line-height: 1.5;
            padding-right: 56px;
            margin-bottom: 17px;
            text-decoration: none;
            display: block;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .latest-news-area .single-news .news-caption h2 a {
                padding-right: 6px;
            }
        }

        @media (max-width: 575px) {
            .latest-news-area .single-news .news-caption h2 a {
                padding-right: 0px;
            }
        }

        .latest-news-area .single-news .news-caption a {
            color: #ff5f13;
            font-size: 16px;
        }

        .latest-news-area .single-news .news-caption a:hover {
            color: #ff5f13;
        }

        .latest-news-area .single-news .news-caption a.d-btn {
            position: relative;
            text-transform: uppercase;
        }

        .latest-news-area .single-news .news-caption a.d-btn::before {
            content: "";
            position: absolute;
            background: #282828;
            width: 100%;
            height: 1px;
            bottom: -1px;
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
        }

        .latest-news-area .single-news .news-caption a:hover::before {
            background: #ff5f13;
        }

        .news-img:hover .news-img img {
            transform: scale(1.1);
        }

        .project-area .project-caption .single-project,
        .about-area .project-caption .single-project,
        .contact-section .project-caption .single-project {
            position: relative;
        }

        .project-area .project-caption .single-project .project-img img,
        .about-area .project-caption .single-project .project-img img,
        .contact-section .project-caption .single-project .project-img img {
            width: 100%;
        }

        .project-area .project-caption .single-project .project-cap,
        .about-area .project-caption .single-project .project-cap,
        .contact-section .project-caption .single-project .project-cap {
            padding: 20px 20px;
            background: #dddcdc52;
            -webkit-transition: all 0.4s ease-out 0s;
            -moz-transition: all 0.4s ease-out 0s;
            -ms-transition: all 0.4s ease-out 0s;
            -o-transition: all 0.4s ease-out 0s;
            transition: all 0.4s ease-out 0s;
            position: relative;
        }

        .project-area .project-caption .single-project .project-cap h4,
        .about-area .project-caption .single-project .project-cap h4,
        .contact-section .project-caption .single-project .project-cap h4 {
            margin: 0;
            line-height: 1.2;
            font-size: 25px;
            font-weight: 700;
        }

        .project-area .project-caption .single-project .project-cap h4 a,
        .about-area .project-caption .single-project .project-cap h4 a,
        .contact-section .project-caption .single-project .project-cap h4 a {
            color: #0e132a;
        }

        .project-area .project-caption .single-project .project-cap h4 a:hover,
        .about-area .project-caption .single-project .project-cap h4 a:hover,
        .contact-section .project-caption .single-project .project-cap h4 a:hover {
            color: #ff5f13;
        }

        .project-area .project-caption .single-project .plus-btn,
        .about-area .project-caption .single-project .plus-btn,
        .contact-section .project-caption .single-project .plus-btn {
            position: absolute;
            right: 16px;
            top: -22px;
            display: inline-block;
            opacity: 0;
            visibility: hidden;
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
        }

        .project-area .project-caption .single-project .plus-btn i,
        .about-area .project-caption .single-project .plus-btn i,
        .contact-section .project-caption .single-project .plus-btn i {
            color: #161e46;
            background: transparent;
            width: 38px;
            height: 38px;
            display: inline-block;
            line-height: 38px;
            text-align: center;
            font-size: 15px;
            margin-left: 10px;
            -webkit-transition: all 0.4s ease-out 0s;
            -moz-transition: all 0.4s ease-out 0s;
            -ms-transition: all 0.4s ease-out 0s;
            -o-transition: all 0.4s ease-out 0s;
            transition: all 0.4s ease-out 0s;
        }

        .project-area .project-caption .single-project:hover .project-cap,
        .about-area .project-caption .single-project:hover .project-cap,
        .contact-section .project-caption .single-project:hover .project-cap {
            background: #141414;
        }

        .project-area .project-caption .single-project:hover .project-cap h4 a,
        .about-area .project-caption .single-project:hover .project-cap h4 a,
        .contact-section .project-caption .single-project:hover .project-cap h4 a {
            color: #fff;
        }

        .project-area .project-caption .single-project:hover .plus-btn,
        .about-area .project-caption .single-project:hover .plus-btn,
        .contact-section .project-caption .single-project:hover .plus-btn {
            opacity: 1;
            visibility: visible;
        }

        .project-area .project-caption .single-project:hover .plus-btn i,
        .about-area .project-caption .single-project:hover .plus-btn i,
        .contact-section .project-caption .single-project:hover .plus-btn i {
            color: #fff;
            background: #ff5f13;
        }

        .project-area .properties__button,
        .about-area .properties__button,
        .contact-section .properties__button {
            float: right;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {

            .project-area .properties__button,
            .about-area .properties__button,
            .contact-section .properties__button {
                float: left;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {

            .project-area .properties__button,
            .about-area .properties__button,
            .contact-section .properties__button {
                float: left;
            }
        }

        @media (max-width: 575px) {

            .project-area .properties__button,
            .about-area .properties__button,
            .contact-section .properties__button {
                float: left;
            }
        }

        .project-area .nav-tabs .nav-link,
        .about-area .nav-tabs .nav-link,
        .contact-section .nav-tabs .nav-link {
            border: 0;
            border-bottom: 2px solid transparent;
            padding: 10px 20px;
        }

        @media only screen and (min-width: 992px) and (max-width: 1200px) {

            .project-area .nav-tabs .nav-link,
            .about-area .nav-tabs .nav-link,
            .contact-section .nav-tabs .nav-link {
                padding: 10px 10px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {

            .project-area .nav-tabs .nav-link,
            .about-area .nav-tabs .nav-link,
            .contact-section .nav-tabs .nav-link {
                padding: 10px 15px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {

            .project-area .nav-tabs .nav-link,
            .about-area .nav-tabs .nav-link,
            .contact-section .nav-tabs .nav-link {
                padding: 10px 15px;
            }
        }

        @media (max-width: 575px) {

            .project-area .nav-tabs .nav-link,
            .about-area .nav-tabs .nav-link,
            .contact-section .nav-tabs .nav-link {
                padding: 10px 15px;
            }
        }

        .project-area .nav-tabs .nav-item.show .nav-link,
        .project-area .nav-tabs .nav-link.active,
        .about-area .nav-tabs .nav-item.show .nav-link,
        .about-area .nav-tabs .nav-link.active,
        .contact-section .nav-tabs .nav-item.show .nav-link,
        .contact-section .nav-tabs .nav-link.active {
            color: #ff5f13;
            background: none;
        }

        .project-area .nav-tabs .nav-item,
        .about-area .nav-tabs .nav-item,
        .contact-section .nav-tabs .nav-item {
            display: block;
            color: #161e46;
            font-weight: 500;
            text-transform: capitalize;
            font-size: 16px;
        }

        .project-area .nav-tabs,
        .about-area .nav-tabs,
        .contact-section .nav-tabs {
            margin-bottom: 9px;
            padding-bottom: 0px;
            position: relative;
            border: 0;
            display: flex;
            justify-content: center;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {

            .project-area .nav-tabs,
            .about-area .nav-tabs,
            .contact-section .nav-tabs {
                justify-content: start;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {

            .project-area .nav-tabs,
            .about-area .nav-tabs,
            .contact-section .nav-tabs {
                justify-content: start;
            }
        }

        @media (max-width: 575px) {

            .project-area .nav-tabs,
            .about-area .nav-tabs,
            .contact-section .nav-tabs {
                justify-content: start;
            }
        }

        .tab-pane {
            -webkit-transition: all 0.6s ease-out 0s;
            -moz-transition: all 0.6s ease-out 0s;
            -ms-transition: all 0.6s ease-out 0s;
            -o-transition: all 0.6s ease-out 0s;
            transition: all 0.6s ease-out 0s;
        }

        .contact-with-area {
            padding-top: 150px;
            padding-bottom: 250px;
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .contact-with-area {
                padding-top: 70px;
                padding-bottom: 180px;
            }
        }

        @media (max-width: 575px) {
            .contact-with-area {
                padding-top: 70px;
                padding-bottom: 180px;
            }
        }

        .contact-with-area .contact-us-caption p {
            color: #fff;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .testimonial-area {
            position: relative;
            overflow: hidden;
        }

        .testimonial-area::after {
            position: absolute;
            content: "";
            background-image: url(../img/gallery/arrow_testimonial.png);
            left: 0;
            right: 0;
            bottom: 0;
            height: 28px;
            background-repeat: no-repeat;
            background-size: cover;
            margin-left: 0px;
            animation: slide1 1s ease-in-out infinite;
        }

        .testimonial-area::before {
            position: absolute;
            content: "";
            background-image: url(../img/gallery/arrow_testimonial.png);
            left: 0;
            right: 0;
            top: 0;
            height: 28px;
            background-repeat: no-repeat;
            background-size: cover;
            margin-left: 0px;
            animation: slide2 1s ease-in-out infinite;
        }

        @keyframes slide1 {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(5px, 0);
                -webkit-transform: translate(5px, 0);
                -moz-transform: translate(5px, 0);
                -ms-transform: translate(5px, 0);
                -o-transform: translate(5px, 0);
            }
        }

        @keyframes slide2 {

            0%,
            100% {
                transform: translate(5px, 0);
                -webkit-transform: translate(5px, 0);
                -moz-transform: translate(5px, 0);
                -ms-transform: translate(5px, 0);
                -o-transform: translate(5px, 0);
            }

            50% {
                transform: translate(0, 0);
            }
        }

        .testimonial-area .testimonial-caption .testimonial-top-cap svg {
            margin-bottom: 17px;
        }

        .testimonial-area .testimonial-caption .testimonial-top-cap p {
            color: #a4acc3;
            font-weight: 500;
            line-height: 1.5;
            padding: 0 3px;
            margin-bottom: 50px;
            font-size: 16px;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .testimonial-area .testimonial-caption .testimonial-top-cap p {
                margin-bottom: 30px;
            }
        }

        @media (max-width: 575px) {
            .testimonial-area .testimonial-caption .testimonial-top-cap p {
                margin-bottom: 30px;
            }
        }

        .testimonial-area .testimonial-caption .testimonial-founder .founder-text {
            padding-left: 20px;
            border-left: 2px solid #ff5f13;
        }

        .testimonial-area .testimonial-caption .testimonial-founder .founder-text span {
            color: #fff;
        }

        .testimonial-area .testimonial-caption .testimonial-founder .founder-text p {
            color: #677294;
            font-weight: 500;
            line-height: 1.5;
            margin-bottom: 5px;
        }

        .h1-testimonial-active button.slick-arrow {
            position: absolute;
            right: 0;
            border: 0;
            padding: 0;
            z-index: 2;
            height: 30px;
            width: 30px;
            line-height: 30px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 20px;
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
            color: #616373;
            background: none;
            margin: 0 auto;
            bottom: 0;
            border: 1px solid #616373;
        }

        .h1-testimonial-active button.slick-next {
            right: -40px;
            color: #fff;
            border: 1px solid #fff;
        }

        .h1-testimonial-active button i {
            font-size: 13px;
            position: relative;
            top: -3px;
        }

        .t-bg {
            background: #0f0f0f;
            /*-------------------------------------------------------------------------------------------------> */
        }

        .slick-initialized .slick-slide {
            outline: 0;
        }

        .blog-area .single-blog {
            box-shadow: 1.395px 19.951px 38px 0px rgba(0, 0, 0, 0.05);
            transition: 0.4s;
        }

        .blog-area .single-blog:hover .blog-img img {
            transform: rotate(1deg) scale(1.1);
        }

        .blog-area .single-blog .blog-img {
            overflow: hidden;
        }

        .blog-area .single-blog .blog-img img {
            width: 100%;
            transform: rotate(0deg) scale(1);
            -webkit-transition: all 0.4s ease-out 0s;
            -moz-transition: all 0.4s ease-out 0s;
            -ms-transition: all 0.4s ease-out 0s;
            -o-transition: all 0.4s ease-out 0s;
            transition: all 0.4s ease-out 0s;
        }

        .blog-area .single-blog .blog-caption {
            padding: 22px 40px 20px 40px;
        }

        @media (max-width: 575px) {
            .blog-area .single-blog .blog-caption {
                padding: 22px 22px 20px 20px;
            }
        }

        .blog-area .single-blog .blog-caption .blog-cap-top span {
            color: #fff;
            background: #ff5f13;
            padding: 4px 13px;
            text-transform: uppercase;
            font-size: 14px;
            font-weight: 300;
            border-radius: 5px;
        }

        .blog-area .single-blog .blog-caption .blog-cap-top ul li {
            color: #c7c7c7;
            font-size: 14px;
            font-family: "Lato", sans-serif;
        }

        .blog-area .single-blog .blog-caption .blog-cap-top ul li a {
            color: #ff5f13;
            font-size: 14px;
        }

        .blog-area .single-blog .blog-caption .blog-cap-mid p a {
            color: #444444;
            font-size: 18px;
            font-family: "Lato", sans-serif;
            line-height: 28px;
            margin-bottom: 30px;
        }

        @media (max-width: 575px) {
            .blog-area .single-blog .blog-caption .blog-cap-mid p a {
                font-size: 14px;
            }
        }

        .blog-area .single-blog .blog-caption .blog-cap-mid p a:hover {
            color: #ff5f13;
        }

        .blog-area .single-blog .blog-caption .blog-cap-bottom {
            padding-top: 20px;
            border-top: 1px solid #f9f9f9;
        }

        .blog-area .single-blog .blog-caption .blog-cap-bottom span {
            color: #adadad;
            font-size: 14px;
        }

        .blog-area .single-blog .blog-caption .blog-cap-bottom span img {
            margin-right: 5px;
        }

        .pb-168 {
            padding-bottom: 168px;
        }

        .footer-area {
            background: #0c0c0c;
            position: relative;
            overflow: hidden;
        }

        .footer-area::after {
            position: absolute;
            content: "";
            background-image: url(../img/gallery/arrow_testimonial.png);
            left: 0;
            right: 0;
            top: 0;
            height: 60px;
            background-repeat: no-repeat;
            background-size: cover;
            margin-left: 0px;
            animation: slide1 1s ease-in-out infinite;
        }

        @keyframes slide1 {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(5px, 0);
                -webkit-transform: translate(5px, 0);
                -moz-transform: translate(5px, 0);
                -ms-transform: translate(5px, 0);
                -o-transform: translate(5px, 0);
            }
        }

        .footer-area .footer-logo {
            margin-bottom: 30px;
            background-color: #ff5f13;
            padding: 3px;

            img {
                filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, 0.76));
            }
        }

        .footer-area .footer-pera .info1 {
            margin-bottom: 10px;
            line-height: 1.8;
            padding-right: 40px;
        }

        @media only screen and (min-width: 1200px) and (max-width: 1600px) {
            .footer-area .footer-pera .info1 {
                padding-right: 0px;
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .footer-area .footer-pera .info1 {
                padding-right: 0px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .footer-area .footer-pera .info1 {
                padding-right: 0px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .footer-area .footer-pera .info1 {
                padding-right: 0px;
            }
        }

        @media (max-width: 575px) {
            .footer-area .footer-pera .info1 {
                padding-right: 0px;
            }
        }

        .footer-area .footer-pera .info2 {
            margin-bottom: 50px;
            line-height: 1.8;
        }

        .footer-area .footer-pera.footer-pera2 p {
            padding: 0;
        }

        .footer-area .footer-tittle h4 {
            color: #fff;
            font-size: 35px;
            margin-bottom: 29px;
            font-weight: 500;
            font-family: "Teko", sans-serif;
        }

        .footer-area .footer-tittle ul li {
            color: #9fa6bd;
            margin-bottom: 15px;
        }

        .footer-area .footer-tittle ul li a {
            color: #868c98;
            font-weight: 300;
        }

        .footer-area .footer-tittle ul li a:hover {
            color: #ff5f13;
            padding-left: 5px;
        }

        .footer-area .footer-tittle p {
            color: #9fa6bd;
        }

        .footer-area .footer-form {
            margin-bottom: 30px;
        }

        .footer-area .footer-form form {
            position: relative;
        }

        .footer-area .footer-form form input {
            width: 100%;
            height: 43px;
            padding: 10px 20px;
            border: 0;
            background: #1e293a;
            color: #fff;
        }

        .footer-area .footer-form form input::placeholder {
            color: #9fa6bd;
        }

        .footer-area .footer-form form .form-icon button {
            position: absolute;
            top: 0px;
            right: 0;
            background: none;
            border: 0;
            cursor: pointer;
            padding: 14px 22px;
            background: #0a0f17;
            line-height: 1;
            color: #fff;
        }

        .footer-area .info.error {
            color: #ff5f13;
        }

        .footer-area .footer-social a {
            width: 40px;
            height: 40px;
            font-size: 14px;
            border: 1px solid #fafafa;
            background: #fafafa;
            display: inline-block;
            line-height: 40px;
            text-align: center;
            color: #949eb2;
            margin-right: 5px;
            -webkit-transition: all 0.4s ease-out 0s;
            -moz-transition: all 0.4s ease-out 0s;
            -ms-transition: all 0.4s ease-out 0s;
            -o-transition: all 0.4s ease-out 0s;
            transition: all 0.4s ease-out 0s;
        }

        .footer-area .footer-copy-right {
            padding-top: 20px;
        }

        @media (max-width: 575px) {
            .footer-area .footer-copy-right {
                padding-top: 0px;
            }
        }

        .footer-area .footer-copy-right p {
            color: #9fa6bd;
            font-weight: 300;
            font-size: 16px;
            line-height: 2;
            margin-bottom: 12px;
        }

        .footer-area .footer-copy-right p i {
            color: #ff5f13;
        }

        .footer-area .footer-copy-right p a {
            color: #ff5f13;
        }

        .footer-area .footer-copy-right p a:hover {
            color: #ff5f13;
        }

        .footer-social a:hover {
            background: #ff5f13;
        }

        .footer-social a:hover i {
            color: #fff;
            -webkit-transition: all 0.4s ease-out 0s;
            -moz-transition: all 0.4s ease-out 0s;
            -ms-transition: all 0.4s ease-out 0s;
            -o-transition: all 0.4s ease-out 0s;
            transition: all 0.4s ease-out 0s;
        }

        .map-footer img {
            width: 100%;
        }

        .hero-caption span {
            color: #fff;
            font-size: 16px;
            display: block;
            margin-bottom: 24px;
            font-weight: 600;
            padding-left: 95px;
            position: relative;
        }

        .hero-caption span::before {
            position: absolute;
            content: "";
            width: 75px;
            height: 3px;
            background: #ff5f13;
            left: 0;
            top: 52%;
            transform: translateY(-50%);
        }

        .hero-caption h2 {
            color: #fff;
            font-size: 50px;
            font-weight: 700;
        }

        .single-services .details-img img {
            width: 100%;
        }

        .single-services .details-caption h3 {
            font-size: 36px;
            font-weight: 700;
            line-height: 1.2;
            font-family: "Teko", sans-serif;
        }

        .latest-blog-area .area-heading {
            margin-bottom: 70px;
        }

        .blog_area a {
            color: "Barlow", sans-serif !important;
            text-decoration: none;
            transition: 0.4s;
        }

        .blog_area a:hover,
        .blog_area a :hover {
            background: -webkit-linear-gradient(131deg, #ff5f13 0%, #ff5f13 99%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-decoration: none;
            transition: 0.4s;
        }

        .single-blog {
            overflow: hidden;
            margin-bottom: 30px;
        }

        .single-blog:hover {
            box-shadow: 0px 10px 20px 0px rgba(42, 34, 123, 0.1);
        }

        .single-blog .thumb {
            overflow: hidden;
            position: relative;
        }

        .single-blog .thumb:after {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: #000;
            opacity: 0;
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
        }

        .single-blog h4 {
            border-bottom: 1px solid #dfdfdf;
            padding-bottom: 34px;
            margin-bottom: 25px;
        }

        .single-blog a {
            font-size: 20px;
            font-weight: 600;
        }

        .single-blog .date {
            color: #666666;
            text-align: left;
            display: inline-block;
            font-size: 13px;
            font-weight: 300;
        }

        .single-blog .tag {
            text-align: left;
            display: inline-block;
            float: left;
            font-size: 13px;
            font-weight: 300;
            margin-right: 22px;
            position: relative;
        }

        .single-blog .tag:after {
            content: "";
            position: absolute;
            width: 1px;
            height: 10px;
            background: #acacac;
            right: -12px;
            top: 7px;
        }

        @media (max-width: 1199px) {
            .single-blog .tag {
                margin-right: 8px;
            }

            .single-blog .tag:after {
                display: none;
            }
        }

        .single-blog .likes {
            margin-right: 16px;
        }

        @media (max-width: 800px) {
            .single-blog {
                margin-bottom: 30px;
            }
        }

        .single-blog .single-blog-content {
            padding: 30px;
        }

        .single-blog .single-blog-content .meta-bottom p {
            font-size: 13px;
            font-weight: 300;
        }

        .single-blog .single-blog-content .meta-bottom i {
            color: #fdcb9e;
            font-size: 13px;
            margin-right: 7px;
        }

        @media (max-width: 1199px) {
            .single-blog .single-blog-content {
                padding: 15px;
            }
        }

        .single-blog:hover .thumb:after {
            opacity: 0.7;
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
        }

        @media (max-width: 1199px) {
            .single-blog h4 {
                transition: all 300ms linear 0s;
                border-bottom: 1px solid #dfdfdf;
                padding-bottom: 14px;
                margin-bottom: 12px;
            }

            .single-blog h4 a {
                font-size: 18px;
            }
        }

        .full_image.single-blog {
            position: relative;
        }

        .full_image.single-blog .single-blog-content {
            position: absolute;
            left: 35px;
            bottom: 0;
            opacity: 0;
            visibility: hidden;
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
        }

        @media (min-width: 992px) {
            .full_image.single-blog .single-blog-content {
                bottom: 100px;
            }
        }

        .full_image.single-blog h4 {
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
            border-bottom: none;
            padding-bottom: 5px;
        }

        .full_image.single-blog a {
            font-size: 20px;
            font-weight: 600;
        }

        .full_image.single-blog .date {
            color: #fff;
        }

        .full_image.single-blog:hover .single-blog-content {
            opacity: 1;
            visibility: visible;
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
        }

        .l_blog_item .l_blog_text .date {
            margin-top: 24px;
            margin-bottom: 15px;
        }

        .l_blog_item .l_blog_text .date a {
            font-size: 12px;
        }

        .l_blog_item .l_blog_text h4 {
            font-size: 18px;
            border-bottom: 1px solid #eeeeee;
            margin-bottom: 0px;
            padding-bottom: 20px;
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
        }

        .l_blog_item .l_blog_text p {
            margin-bottom: 0px;
            padding-top: 20px;
        }

        .causes_slider .owl-dots {
            text-align: center;
            margin-top: 80px;
        }

        .causes_slider .owl-dots .owl-dot {
            height: 14px;
            width: 14px;
            background: #eeeeee;
            display: inline-block;
            margin-right: 7px;
        }

        .causes_slider .owl-dots .owl-dot:last-child {
            margin-right: 0px;
        }

        .causes_item {
            background: #fff;
        }

        .causes_item .causes_img {
            position: relative;
        }

        .causes_item .causes_img .c_parcent {
            position: absolute;
            bottom: 0px;
            width: 100%;
            left: 0px;
            height: 3px;
            background: rgba(255, 255, 255, 0.5);
        }

        .causes_item .causes_img .c_parcent span {
            width: 70%;
            height: 3px;
            position: absolute;
            left: 0px;
            bottom: 0px;
        }

        .causes_item .causes_img .c_parcent span:before {
            content: "75%";
            position: absolute;
            right: -10px;
            bottom: 0px;
            color: #fff;
            padding: 0px 5px;
        }

        .causes_item .causes_text {
            padding: 30px 35px 40px 30px;
        }

        .causes_item .causes_text h4 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
            cursor: pointer;
        }

        .causes_item .causes_text p {
            font-size: 14px;
            line-height: 24px;
            font-weight: 300;
            margin-bottom: 0px;
        }

        .causes_item .causes_bottom a {
            width: 50%;
            border: 1px solid;
            text-align: center;
            float: left;
            line-height: 50px;
            color: #fff;
            font-size: 14px;
            font-weight: 500;
        }

        .causes_item .causes_bottom a+a {
            border-color: #eeeeee;
            background: #fff;
            font-size: 14px;
        }

        .latest_blog_area {
            background: #f9f9ff;
        }

        .single-recent-blog-post {
            margin-bottom: 30px;
        }

        .single-recent-blog-post .thumb {
            overflow: hidden;
        }

        .single-recent-blog-post .thumb img {
            transition: all 0.7s linear;
        }

        .single-recent-blog-post .details {
            padding-top: 30px;
        }

        .single-recent-blog-post .details .sec_h4 {
            line-height: 24px;
            padding: 10px 0px 13px;
            transition: all 0.3s linear;
        }

        .single-recent-blog-post .date {
            font-size: 14px;
            line-height: 24px;
            font-weight: 400;
        }

        .single-recent-blog-post:hover img {
            transform: scale(1.23) rotate(10deg);
        }

        .tags .tag_btn {
            font-size: 12px;
            font-weight: 500;
            line-height: 20px;
            border: 1px solid #eeeeee;
            display: inline-block;
            padding: 1px 18px;
            text-align: center;
        }

        .tags .tag_btn+.tag_btn {
            margin-left: 2px;
        }

        .blog_categorie_area {
            padding-top: 30px;
            padding-bottom: 30px;
        }

        @media (min-width: 900px) {
            .blog_categorie_area {
                padding-top: 80px;
                padding-bottom: 80px;
            }
        }

        @media (min-width: 1100px) {
            .blog_categorie_area {
                padding-top: 120px;
                padding-bottom: 120px;
            }
        }

        .categories_post {
            position: relative;
            text-align: center;
            cursor: pointer;
        }

        .categories_post img {
            max-width: 100%;
        }

        .categories_post .categories_details {
            position: absolute;
            top: 20px;
            left: 20px;
            right: 20px;
            bottom: 20px;
            background: rgba(34, 34, 34, 0.75);
            color: #fff;
            transition: all 0.3s linear;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .categories_post .categories_details h5 {
            margin-bottom: 0px;
            font-size: 18px;
            line-height: 26px;
            text-transform: uppercase;
            color: #fff;
            position: relative;
        }

        .categories_post .categories_details p {
            font-weight: 300;
            font-size: 14px;
            line-height: 26px;
            margin-bottom: 0px;
        }

        .categories_post .categories_details .border_line {
            margin: 10px 0px;
            background: #fff;
            width: 100%;
            height: 1px;
        }

        .categories_post:hover .categories_details {
            background: rgba(222, 99, 32, 0.85);
        }

        .blog_item {
            margin-bottom: 50px;
        }

        .blog_details {
            padding: 30px 0 20px 10px;
            box-shadow: 0px 10px 20px 0px rgba(221, 221, 221, 0.3);
        }

        @media (min-width: 768px) {
            .blog_details {
                padding: 60px 30px 35px 35px;
            }
        }

        .blog_details p {
            margin-bottom: 30px;
        }

        .blog_details a {
            color: #242b5e;
        }

        .blog_details a:hover {
            color: #ff5f13;
        }

        .blog_details h2 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        @media (min-width: 768px) {
            .blog_details h2 {
                font-size: 24px;
                margin-bottom: 15px;
            }
        }

        .blog-info-link li {
            float: left;
            font-size: 14px;
        }

        .blog-info-link li a {
            color: #999999;
        }

        .blog-info-link li i,
        .blog-info-link li span {
            font-size: 13px;
            margin-right: 5px;
        }

        .blog-info-link li::after {
            content: "|";
            padding-left: 10px;
            padding-right: 10px;
        }

        .blog-info-link li:last-child::after {
            display: none;
        }

        .blog-info-link::after {
            content: "";
            display: block;
            clear: both;
            display: table;
        }

        .blog_item_img {
            position: relative;
        }

        .blog_item_img .blog_item_date {
            position: absolute;
            bottom: -10px;
            left: 10px;
            display: block;
            color: #fff;
            background-color: #080808;
            padding: 8px 15px;
            border-radius: 5px;
        }

        @media (min-width: 768px) {
            .blog_item_img .blog_item_date {
                bottom: -20px;
                left: 40px;
                padding: 13px 30px;
            }
        }

        .blog_item_img .blog_item_date h3 {
            font-size: 22px;
            font-weight: 600;
            color: #ff5f13;
            margin-bottom: 0;
            line-height: 1.2;
        }

        @media (min-width: 768px) {
            .blog_item_img .blog_item_date h3 {
                font-size: 30px;
            }
        }

        .blog_item_img .blog_item_date p {
            font-size: 18px;
            margin-bottom: 0;
            color: #fff;
        }

        @media (min-width: 768px) {
            .blog_item_img .blog_item_date p {
                font-size: 18px;
            }
        }

        .blog_right_sidebar .widget_title {
            font-size: 20px;
            margin-bottom: 40px;
        }

        .blog_right_sidebar .widget_title::after {
            content: "";
            display: block;
            padding-top: 15px;
            border-bottom: 1px solid #f0e9ff;
        }

        .blog_right_sidebar .single_sidebar_widget {
            background: #fbf9ff;
            padding: 30px;
            margin-bottom: 30px;
        }

        .blog_right_sidebar .single_sidebar_widget .btn_1 {
            margin-top: 0px;
        }

        .blog_right_sidebar .search_widget .form-control {
            height: 50px;
            border-color: #f0e9ff;
            font-size: 13px;
            color: #999999;
            padding-left: 20px;
            border-radius: 0;
            border-right: 0;
        }

        .blog_right_sidebar .search_widget .form-control::placeholder {
            color: #999999;
        }

        .blog_right_sidebar .search_widget .form-control:focus {
            border-color: #f0e9ff;
            outline: 0;
            box-shadow: none;
        }

        .blog_right_sidebar .search_widget .input-group button {
            background: #ff5f13;
            border-left: 0;
            border: 1px solid #f0e9ff;
            padding: 4px 15px;
            border-left: 0;
            cursor: pointer;
        }

        .blog_right_sidebar .search_widget .input-group button i {
            color: #fff;
        }

        .blog_right_sidebar .search_widget .input-group button span {
            font-size: 14px;
            color: #999999;
        }

        .blog_right_sidebar .newsletter_widget .form-control {
            height: 50px;
            border-color: #f0e9ff;
            font-size: 13px;
            color: #999999;
            padding-left: 20px;
            border-radius: 0;
        }

        .blog_right_sidebar .newsletter_widget .form-control::placeholder {
            color: #999999;
        }

        .blog_right_sidebar .newsletter_widget .form-control:focus {
            border-color: #f0e9ff;
            outline: 0;
            box-shadow: none;
        }

        .blog_right_sidebar .newsletter_widget .input-group button {
            background: #fff;
            border-left: 0;
            border: 1px solid #f0e9ff;
            padding: 4px 15px;
            border-left: 0;
        }

        .blog_right_sidebar .newsletter_widget .input-group button i,
        .blog_right_sidebar .newsletter_widget .input-group button span {
            font-size: 14px;
            color: #fff;
        }

        .blog_right_sidebar .post_category_widget .cat-list li {
            border-bottom: 1px solid #f0e9ff;
            transition: all 0.3s ease 0s;
            padding-bottom: 12px;
        }

        .blog_right_sidebar .post_category_widget .cat-list li:last-child {
            border-bottom: 0;
        }

        .blog_right_sidebar .post_category_widget .cat-list li a {
            font-size: 14px;
            line-height: 20px;
            color: #888888;
        }

        .blog_right_sidebar .post_category_widget .cat-list li a p {
            margin-bottom: 0px;
        }

        .blog_right_sidebar .post_category_widget .cat-list li+li {
            padding-top: 15px;
        }

        .blog_right_sidebar .popular_post_widget .post_item .media-body {
            justify-content: center;
            align-self: center;
            padding-left: 20px;
        }

        .blog_right_sidebar .popular_post_widget .post_item .media-body h3 {
            font-size: 16px;
            line-height: 20px;
            margin-bottom: 6px;
            transition: all 0.3s linear;
        }

        .blog_right_sidebar .popular_post_widget .post_item .media-body a:hover {
            color: #fff;
        }

        .blog_right_sidebar .popular_post_widget .post_item .media-body p {
            font-size: 14px;
            line-height: 21px;
            margin-bottom: 0px;
        }

        .blog_right_sidebar .popular_post_widget .post_item+.post_item {
            margin-top: 20px;
        }

        .blog_right_sidebar .tag_cloud_widget ul li {
            display: inline-block;
            cursor: pointer;
        }

        .blog_right_sidebar .tag_cloud_widget ul li a {
            display: inline-block;
            border: 1px solid #eeeeee;
            background: #fff;
            padding: 4px 20px;
            margin-bottom: 8px;
            margin-right: 3px;
            transition: all 0.3s ease 0s;
            color: #888888;
            font-size: 13px;
        }

        .blog_right_sidebar .tag_cloud_widget ul li a:hover {
            background: #0f0f0f;
            color: #ff5f13 !important;
            -webkit-text-fill-color: #ff5f13;
            text-decoration: none;
            -webkit-transition: 0.5s;
            transition: 0.5s;
        }

        .blog_right_sidebar .instagram_feeds .instagram_row {
            display: flex;
            margin-right: -6px;
            margin-left: -6px;
        }

        .blog_right_sidebar .instagram_feeds .instagram_row li {
            width: 33.33%;
            float: left;
            padding-right: 6px;
            padding-left: 6px;
            margin-bottom: 15px;
        }

        .blog_right_sidebar .br {
            width: 100%;
            height: 1px;
            background: #eee;
            margin: 30px 0px;
        }

        .blog-pagination {
            margin-top: 80px;
        }

        .blog-pagination .page-link {
            font-size: 14px;
            position: relative;
            display: block;
            padding: 0;
            text-align: center;
            margin-left: -1px;
            line-height: 45px;
            width: 45px;
            height: 45px;
            border-radius: 0 !important;
            color: #8a8a8a;
            border: 1px solid #f0e9ff;
            margin-right: 10px;
        }

        .blog-pagination .page-link i,
        .blog-pagination .page-link span {
            font-size: 13px;
        }

        .blog-pagination .page-item.active .page-link {
            background-color: #fbf9ff;
            border-color: #f0e9ff;
            color: #888888;
        }

        .blog-pagination .page-item:last-child .page-link {
            margin-right: 0;
        }

        .single-post-area .blog_details {
            box-shadow: none;
            padding: 0;
        }

        .single-post-area .social-links {
            padding-top: 10px;
        }

        .single-post-area .social-links li {
            display: inline-block;
            margin-bottom: 10px;
        }

        .single-post-area .social-links li a {
            color: #cccccc;
            padding: 7px;
            font-size: 14px;
            transition: all 0.2s linear;
        }

        .single-post-area .blog_details {
            padding-top: 26px;
        }

        .single-post-area .blog_details p {
            margin-bottom: 20px;
            font-size: 15px;
        }

        .single-post-area .quote-wrapper {
            background: rgba(130, 139, 178, 0.1);
            padding: 15px;
            line-height: 1.733;
            color: #888888;
            font-style: italic;
            margin-top: 25px;
            margin-bottom: 25px;
        }

        @media (min-width: 768px) {
            .single-post-area .quote-wrapper {
                padding: 30px;
            }
        }

        .single-post-area .quotes {
            background: #fff;
            padding: 15px 15px 15px 20px;
            border-left: 2px solid;
        }

        @media (min-width: 768px) {
            .single-post-area .quotes {
                padding: 25px 25px 25px 30px;
            }
        }

        .single-post-area .arrow {
            position: absolute;
        }

        .single-post-area .arrow .lnr {
            font-size: 20px;
            font-weight: 600;
        }

        .single-post-area .thumb .overlay-bg {
            background: rgba(0, 0, 0, 0.8);
        }

        .single-post-area .navigation-top {
            padding-top: 15px;
            border-top: 1px solid #f0e9ff;
        }

        .single-post-area .navigation-top p {
            margin-bottom: 0;
        }

        .single-post-area .navigation-top .like-info {
            font-size: 14px;
        }

        .single-post-area .navigation-top .like-info i,
        .single-post-area .navigation-top .like-info span {
            font-size: 16px;
            margin-right: 5px;
        }

        .single-post-area .navigation-top .comment-count {
            font-size: 14px;
        }

        .single-post-area .navigation-top .comment-count i,
        .single-post-area .navigation-top .comment-count span {
            font-size: 16px;
            margin-right: 5px;
        }

        .single-post-area .navigation-top .social-icons li {
            display: inline-block;
            margin-right: 15px;
        }

        .single-post-area .navigation-top .social-icons li:last-child {
            margin: 0;
        }

        .single-post-area .navigation-top .social-icons li i,
        .single-post-area .navigation-top .social-icons li span {
            font-size: 14px;
            color: #999999;
        }

        .single-post-area .blog-author {
            padding: 40px 30px;
            background: #fbf9ff;
            margin-top: 50px;
        }

        @media (max-width: 600px) {
            .single-post-area .blog-author {
                padding: 20px 8px;
            }
        }

        .single-post-area .blog-author img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            margin-right: 30px;
        }

        @media (max-width: 600px) {
            .single-post-area .blog-author img {
                margin-right: 15px;
                width: 45px;
                height: 45px;
            }
        }

        .single-post-area .blog-author a {
            display: inline-block;
        }

        .single-post-area .blog-author a:hover {
            color: #ff5f13;
        }

        .single-post-area .blog-author p {
            margin-bottom: 0;
            font-size: 15px;
        }

        .single-post-area .blog-author h4 {
            font-size: 16px;
        }

        .single-post-area .navigation-area {
            border-bottom: 1px solid #eee;
            padding-bottom: 30px;
            margin-top: 55px;
        }

        .single-post-area .navigation-area p {
            margin-bottom: 0px;
        }

        .single-post-area .navigation-area h4 {
            font-size: 18px;
            line-height: 25px;
        }

        .single-post-area .navigation-area .nav-left {
            text-align: left;
        }

        .single-post-area .navigation-area .nav-left .thumb {
            margin-right: 20px;
            background: #000;
        }

        .single-post-area .navigation-area .nav-left .thumb img {
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
        }

        .single-post-area .navigation-area .nav-left .lnr {
            margin-left: 20px;
            opacity: 0;
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
        }

        .single-post-area .navigation-area .nav-left:hover .lnr {
            opacity: 1;
        }

        .single-post-area .navigation-area .nav-left:hover .thumb img {
            opacity: 0.5;
        }

        @media (max-width: 767px) {
            .single-post-area .navigation-area .nav-left {
                margin-bottom: 30px;
            }
        }

        .single-post-area .navigation-area .nav-right {
            text-align: right;
        }

        .single-post-area .navigation-area .nav-right .thumb {
            margin-left: 20px;
            background: #000;
        }

        .single-post-area .navigation-area .nav-right .thumb img {
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
        }

        .single-post-area .navigation-area .nav-right .lnr {
            margin-right: 20px;
            opacity: 0;
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
        }

        .single-post-area .navigation-area .nav-right:hover .lnr {
            opacity: 1;
        }

        .single-post-area .navigation-area .nav-right:hover .thumb img {
            opacity: 0.5;
        }

        @media (max-width: 991px) {
            .single-post-area .sidebar-widgets {
                padding-bottom: 0px;
            }
        }

        .comments-area {
            background: transparent;
            border-top: 1px solid #eee;
            padding: 45px 0;
            margin-top: 50px;
        }

        @media (max-width: 414px) {
            .comments-area {
                padding: 50px 8px;
            }
        }

        .comments-area h4 {
            margin-bottom: 35px;
            font-size: 18px;
        }

        .comments-area h5 {
            font-size: 16px;
            margin-bottom: 0px;
        }

        .comments-area .comment-list {
            padding-bottom: 48px;
        }

        .comments-area .comment-list:last-child {
            padding-bottom: 0px;
        }

        .comments-area .comment-list.left-padding {
            padding-left: 25px;
        }

        @media (max-width: 413px) {
            .comments-area .comment-list .single-comment h5 {
                font-size: 12px;
            }

            .comments-area .comment-list .single-comment .date {
                font-size: 11px;
            }

            .comments-area .comment-list .single-comment .comment {
                font-size: 10px;
            }
        }

        .comments-area .thumb {
            margin-right: 20px;
        }

        .comments-area .thumb img {
            width: 70px;
            border-radius: 50%;
        }

        .comments-area .date {
            font-size: 14px;
            color: #999999;
            margin-bottom: 0;
            margin-left: 20px;
        }

        .comments-area .comment {
            margin-bottom: 10px;
            color: #777777;
            font-size: 15px;
        }

        .comments-area .btn-reply {
            background-color: transparent;
            color: #888888;
            padding: 5px 18px;
            font-size: 14px;
            display: block;
            font-weight: 400;
        }

        .comment-form {
            border-top: 1px solid #eee;
            padding-top: 45px;
            margin-top: 50px;
            margin-bottom: 20px;
        }

        .comment-form .form-group {
            margin-bottom: 30px;
        }

        .comment-form h4 {
            margin-bottom: 40px;
            font-size: 18px;
            line-height: 22px;
        }

        .comment-form .name {
            padding-left: 0px;
        }

        @media (max-width: 767px) {
            .comment-form .name {
                padding-right: 0px;
                margin-bottom: 1rem;
            }
        }

        .comment-form .email {
            padding-right: 0px;
        }

        @media (max-width: 991px) {
            .comment-form .email {
                padding-left: 0px;
            }
        }

        .comment-form .form-control {
            border: 1px solid #f0e9ff;
            border-radius: 5px;
            height: 48px;
            padding-left: 18px;
            font-size: 13px;
            background: transparent;
        }

        .comment-form .form-control:focus {
            outline: 0;
            box-shadow: none;
        }

        .comment-form .form-control::placeholder {
            font-weight: 300;
            color: #999999;
        }

        .comment-form .form-control::placeholder {
            color: #777777;
        }

        .comment-form textarea {
            padding-top: 18px;
            border-radius: 12px;
            height: 100% !important;
        }

        .comment-form ::-webkit-input-placeholder {
            font-size: 13px;
            color: #777;
        }

        .comment-form ::-moz-placeholder {
            font-size: 13px;
            color: #777;
        }

        .comment-form :-ms-input-placeholder {
            font-size: 13px;
            color: #777;
        }

        .comment-form :-moz-placeholder {
            font-size: 13px;
            color: #777;
        }

        .dropdown .dropdown-menu {
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -ms-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
        }

        .contact-info {
            margin-bottom: 25px;
        }

        .contact-info__icon {
            margin-right: 20px;
        }

        .contact-info__icon i,
        .contact-info__icon span {
            color: #8f9195;
            font-size: 27px;
        }

        .contact-info .media-body h3 {
            font-size: 16px;
            margin-bottom: 0;
            font-size: 16px;
            color: #2a2a2a;
        }

        .contact-info .media-body h3 a:hover {
            color: #1f2b7b;
        }

        .contact-info .media-body p {
            color: #8a8a8a;
        }

        .contact-title {
            font-size: 27px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .form-contact label {
            font-size: 14px;
        }

        .form-contact .form-group {
            margin-bottom: 30px;
        }

        .form-contact .form-control {
            border: 1px solid #e5e6e9;
            border-radius: 0px;
            height: 48px;
            padding-left: 18px;
            font-size: 13px;
            background: transparent;
        }

        .form-contact .form-control:focus {
            outline: 0;
            box-shadow: none;
        }

        .form-contact .form-control::placeholder {
            font-weight: 300;
            color: #999999;
        }

        .form-contact textarea {
            border-radius: 0px;
            height: 100% !important;
        }

        .modal-message .modal-dialog {
            position: absolute;
            top: 36%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%) !important;
            margin: 0px;
            max-width: 500px;
            width: 100%;
        }

        .modal-message .modal-dialog .modal-content .modal-header {
            text-align: center;
            display: block;
            border-bottom: none;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .modal-message .modal-dialog .modal-content .modal-header .close {
            position: absolute;
            right: -15px;
            top: -15px;
            padding: 0px;
            color: #fff;
            opacity: 1;
            cursor: pointer;
        }

        .modal-message .modal-dialog .modal-content .modal-header h2 {
            display: block;
            text-align: center;
            padding-bottom: 10px;
        }

        .modal-message .modal-dialog .modal-content .modal-header p {
            display: block;
        }

        .contact-section {
            padding: 130px 0 100px;
        }

        @media (max-width: 991px) {
            .contact-section {
                padding: 70px 0 40px;
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .contact-section {
                padding: 80px 0 50px;
            }
        }

        .contact-section .btn_2 {
            background-color: #191d34;
            padding: 18px 60px;
            border-radius: 50px;
            margin-top: 0;
        }

        .contact-section .btn_2:hover {
            background-color: #1f2b7b;
        }

        .breadcam_bg {
            background-image: url(../img/banner/bradcam.png);
        }

        .breadcam_bg_1 {
            background-image: url(../img/banner/bradcam2.png);
        }

        .breadcam_bg_2 {
            background-image: url(../img/banner/bradcam3.png);
        }

        .bradcam_area {
            background-size: cover;
            background-position: center center;
            padding: 160px 0;
            background-position: bottom;
            background-repeat: no-repeat;
        }

        @media (max-width: 767px) {
            .bradcam_area {
                padding: 150px 0;
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .bradcam_area {
                padding: 150px 0;
            }
        }

        .bradcam_area h3 {
            font-size: 50px;
            color: #fff;
            font-weight: 900;
            margin-bottom: 0;
            font-family: "Barlow", sans-serif;
            text-transform: capitalize;
        }

        @media (max-width: 767px) {
            .bradcam_area h3 {
                font-size: 30px;
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .bradcam_area h3 {
                font-size: 40px;
            }
        }

        .popup_box {
            background: #fff;
            display: inline-block;
            z-index: 9;
            width: 681px;
            padding: 60px 40px;
        }

        @media (max-width: 767px) {
            .popup_box {
                width: 320px;
                padding: 45px 30px;
            }
        }

        @media only screen and (min-width: 480px) and (max-width: 767px) {
            .popup_box {
                width: 420px !important;
                padding: 45px 30px;
            }
        }

        .popup_box h3 {
            text-align: center;
            font-size: 22px;
            color: #1f1f1f;
            margin-bottom: 46px;
        }

        .popup_box .boxed-btn3 {
            width: 100%;
            text-transform: capitalize;
        }

        .popup_box .nice-select {
            -webkit-tap-highlight-color: transparent;
            background-color: #fff;
            border: solid 1px #e2e2e2;
            box-sizing: border-box;
            clear: both;
            cursor: pointer;
            display: block;
            float: left;
            font-family: "Barlow", sans-serif;
            font-weight: normal;
            width: 100% !important;
            line-height: 50px;
            outline: none;
            padding-left: 18px;
            padding-right: 30px;
            position: relative;
            text-align: left !important;
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            white-space: nowrap;
            width: auto;
            border-radius: 0;
            margin-bottom: 30px;
            height: 50px !important;
            font-size: 16px;
            font-weight: 400;
            color: #919191;
        }

        .popup_box .nice-select::after {
            content: "\f0d7";
            display: block;
            height: 5px;
            margin-top: -5px;
            pointer-events: none;
            position: absolute;
            right: 17px;
            top: 3px;
            transition: all 0.15s ease-in-out;
            width: 5px;
            font-family: fontawesome;
            color: #919191;
            font-size: 15px;
        }

        .popup_box .nice-select.open .list {
            opacity: 1;
            pointer-events: auto;
            -webkit-transform: scale(1) translateY(0);
            -ms-transform: scale(1) translateY(0);
            transform: scale(1) translateY(0);
            height: 200px;
            overflow-y: scroll;
        }

        .popup_box .nice-select.list {
            height: 200px;
            overflow-y: scroll;
        }

        #test-form {
            display: inline-block;
            margin: auto;
            text-align: center;
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        @media (max-width: 767px) {
            #test-form {
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                -webkit-transform: none;
                -ms-transform: none;
                transform: none;
            }
        }

        #test-form .mfp-close-btn-in .mfp-close {
            color: #333;
            display: none !important;
        }

        #test-form button.mfp-close {
            display: none !important;
        }

        @media (max-width: 767px) {
            #test-form button.mfp-close {
                display: block !important;
                position: absolute;
                left: 0;
                right: 0;
                margin: auto;
            }
        }

        #test-form button.mfp-close {
            overflow: visible;
            cursor: pointer;
            background: transparent;
            border: 0;
            -webkit-appearance: none;
            display: block;
            outline: none;
            padding: 0;
            z-index: 1046;
            box-shadow: none;
            touch-action: manipulation;
            width: 40px;
            height: 40px;
            background: #4a3600;
            text-align: center;
            line-height: 20px;
            position: absolute;
            right: 0;
            border-bottom-right-radius: 20px;
            border-bottom-left-radius: 20px;
            position: absolute;
            right: -6px;
            color: #fff !important;
        }

        .mfp-bg {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1042;
            overflow: hidden;
            position: fixed;
            background: #4a3600;
            opacity: 0.6;
        }

        @media (max-width: 767px) {
            .gj-picker.gj-picker-md.timepicker {
                width: 310px;
                left: 6px !important;
            }
        }

        @media (max-width: 767px) {
            .gj-picker.gj-picker-md.datepicker.gj-unselectable {
                width: 320px;
                left: 0 !important;
            }
        }

        .flex-center-start {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: start;
        }

        .overlay::before {
            background-image: -moz-linear-gradient(170deg,
                    rgba(34, 34, 34, 0) 0%,
                    #000 100%);
            background-image: -webkit-linear-gradient(170deg,
                    rgba(34, 34, 34, 0) 0%,
                    #000 100%);
            background-image: -ms-linear-gradient(170deg,
                    rgba(34, 34, 34, 0) 0%,
                    #000 100%);
        }

        .hero-overly::before {
            background-image: -moz-linear-gradient(0deg,
                    rgba(0, 0, 0, 0.749) 0%,
                    rgba(0, 0, 0, 0.581) 100%);
            background-image: -webkit-linear-gradient(0deg,
                    rgba(0, 0, 0, 0.749) 0%,
                    rgba(0, 0, 0, 0.581) 100%);
            background-image: -ms-linear-gradient(0deg,
                    rgba(0, 0, 0, 0.749) 0%,
                    rgba(0, 0, 0, 0.581) 100%);
        }

        .sample-text-area {
            background: #fff;
            padding: 100px 0 70px 0;
        }

        .text-heading {
            margin-bottom: 30px;
            font-size: 24px;
        }

        b,
        sup,
        sub,
        u,
        del {
            color: #1f2b7b;
        }

        .typography h1,
        .typography h2,
        .typography h3,
        .typography h4,
        .typography h5,
        .typography h6 {
            color: #828bb2;
        }

        .button-area {
            background: #fff;
        }

        .button-area .border-top-generic {
            padding: 70px 15px;
            border-top: 1px dotted #eee;
        }

        .button-group-area .genric-btn {
            margin-right: 10px;
            margin-top: 10px;
        }

        .button-group-area .genric-btn:last-child {
            margin-right: 0;
        }

        .genric-btn {
            display: inline-block;
            outline: none;
            line-height: 40px;
            padding: 0 30px;
            font-size: 0.8em;
            text-align: center;
            text-decoration: none;
            font-weight: 500;
            cursor: pointer;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }

        .genric-btn:focus {
            outline: none;
        }

        .genric-btn.e-large {
            padding: 0 40px;
            line-height: 50px;
        }

        .genric-btn.large {
            line-height: 45px;
        }

        .genric-btn.medium {
            line-height: 30px;
        }

        .genric-btn.small {
            line-height: 25px;
        }

        .genric-btn.radius {
            border-radius: 3px;
        }

        .genric-btn.circle {
            border-radius: 20px;
        }

        .genric-btn.arrow {
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .genric-btn.arrow span {
            margin-left: 10px;
        }

        .genric-btn.default {
            color: #415094;
            background: #f9f9ff;
            border: 1px solid transparent;
        }

        .genric-btn.default:hover {
            border: 1px solid #f9f9ff;
            background: #fff;
        }

        .genric-btn.default-border {
            border: 1px solid #f9f9ff;
            background: #fff;
        }

        .genric-btn.default-border:hover {
            color: #415094;
            background: #f9f9ff;
            border: 1px solid transparent;
        }

        .genric-btn.primary {
            color: #fff;
            background: #1f2b7b;
            border: 1px solid transparent;
        }

        .genric-btn.primary:hover {
            color: #1f2b7b;
            border: 1px solid #1f2b7b;
            background: #fff;
        }

        .genric-btn.primary-border {
            color: #1f2b7b;
            border: 1px solid #1f2b7b;
            background: #fff;
        }

        .genric-btn.primary-border:hover {
            color: #fff;
            background: #1f2b7b;
            border: 1px solid transparent;
        }

        .genric-btn.success {
            color: #fff;
            background: #4cd3e3;
            border: 1px solid transparent;
        }

        .genric-btn.success:hover {
            color: #4cd3e3;
            border: 1px solid #4cd3e3;
            background: #fff;
        }

        .genric-btn.success-border {
            color: #4cd3e3;
            border: 1px solid #4cd3e3;
            background: #fff;
        }

        .genric-btn.success-border:hover {
            color: #fff;
            background: #4cd3e3;
            border: 1px solid transparent;
        }

        .genric-btn.info {
            color: #fff;
            background: #38a4ff;
            border: 1px solid transparent;
        }

        .genric-btn.info:hover {
            color: #38a4ff;
            border: 1px solid #38a4ff;
            background: #fff;
        }

        .genric-btn.info-border {
            color: #38a4ff;
            border: 1px solid #38a4ff;
            background: #fff;
        }

        .genric-btn.info-border:hover {
            color: #fff;
            background: #38a4ff;
            border: 1px solid transparent;
        }

        .genric-btn.warning {
            color: #fff;
            background: #f4e700;
            border: 1px solid transparent;
        }

        .genric-btn.warning:hover {
            color: #f4e700;
            border: 1px solid #f4e700;
            background: #fff;
        }

        .genric-btn.warning-border {
            color: #f4e700;
            border: 1px solid #f4e700;
            background: #fff;
        }

        .genric-btn.warning-border:hover {
            color: #fff;
            background: #f4e700;
            border: 1px solid transparent;
        }

        .genric-btn.danger {
            color: #fff;
            background: #f44a40;
            border: 1px solid transparent;
        }

        .genric-btn.danger:hover {
            color: #f44a40;
            border: 1px solid #f44a40;
            background: #fff;
        }

        .genric-btn.danger-border {
            color: #f44a40;
            border: 1px solid #f44a40;
            background: #fff;
        }

        .genric-btn.danger-border:hover {
            color: #fff;
            background: #f44a40;
            border: 1px solid transparent;
        }

        .genric-btn.link {
            color: #415094;
            background: #f9f9ff;
            text-decoration: underline;
            border: 1px solid transparent;
        }

        .genric-btn.link:hover {
            color: #415094;
            border: 1px solid #f9f9ff;
            background: #fff;
        }

        .genric-btn.link-border {
            color: #415094;
            border: 1px solid #f9f9ff;
            background: #fff;
            text-decoration: underline;
        }

        .genric-btn.link-border:hover {
            color: #415094;
            background: #f9f9ff;
            border: 1px solid transparent;
        }

        .genric-btn.disable {
            color: #222, 0.3;
            background: #f9f9ff;
            border: 1px solid transparent;
            cursor: not-allowed;
        }

        .generic-blockquote {
            padding: 30px 50px 30px 30px;
            background: #f9f9ff;
            border-left: 2px solid #1f2b7b;
        }

        .progress-table-wrap {
            overflow-x: scroll;
        }

        .progress-table {
            background: #f9f9ff;
            padding: 15px 0px 30px 0px;
            min-width: 800px;
        }

        .progress-table .serial {
            width: 11.83%;
            padding-left: 30px;
        }

        .progress-table .country {
            width: 28.07%;
        }

        .progress-table .visit {
            width: 19.74%;
        }

        .progress-table .percentage {
            width: 40.36%;
            padding-right: 50px;
        }

        .progress-table .table-head {
            display: flex;
        }

        .progress-table .table-head .serial,
        .progress-table .table-head .country,
        .progress-table .table-head .visit,
        .progress-table .table-head .percentage {
            color: #415094;
            line-height: 40px;
            text-transform: uppercase;
            font-weight: 500;
        }

        .progress-table .table-row {
            padding: 15px 0;
            border-top: 1px solid #edf3fd;
            display: flex;
        }

        .progress-table .table-row .serial,
        .progress-table .table-row .country,
        .progress-table .table-row .visit,
        .progress-table .table-row .percentage {
            display: flex;
            align-items: center;
        }

        .progress-table .table-row .country img {
            margin-right: 15px;
        }

        .progress-table .table-row .percentage .progress {
            width: 80%;
            border-radius: 0px;
            background: transparent;
        }

        .progress-table .table-row .percentage .progress .progress-bar {
            height: 5px;
            line-height: 5px;
        }

        .progress-table .table-row .percentage .progress .progress-bar.color-1 {
            background-color: #6382e6;
        }

        .progress-table .table-row .percentage .progress .progress-bar.color-2 {
            background-color: #e66686;
        }

        .progress-table .table-row .percentage .progress .progress-bar.color-3 {
            background-color: #f09359;
        }

        .progress-table .table-row .percentage .progress .progress-bar.color-4 {
            background-color: #73fbaf;
        }

        .progress-table .table-row .percentage .progress .progress-bar.color-5 {
            background-color: #73fbaf;
        }

        .progress-table .table-row .percentage .progress .progress-bar.color-6 {
            background-color: #6382e6;
        }

        .progress-table .table-row .percentage .progress .progress-bar.color-7 {
            background-color: #a367e7;
        }

        .progress-table .table-row .percentage .progress .progress-bar.color-8 {
            background-color: #e66686;
        }

        .single-gallery-image {
            margin-top: 30px;
            background-repeat: no-repeat !important;
            background-position: center center !important;
            background-size: cover !important;
            height: 200px;
        }

        .list-style {
            width: 14px;
            height: 14px;
        }

        .unordered-list li {
            position: relative;
            padding-left: 30px;
            line-height: 1.82em !important;
        }

        .unordered-list li:before {
            content: "";
            position: absolute;
            width: 14px;
            height: 14px;
            border: 3px solid #1f2b7b;
            background: #fff;
            top: 4px;
            left: 0;
            border-radius: 50%;
        }

        .ordered-list {
            margin-left: 30px;
        }

        .ordered-list li {
            list-style-type: decimal-leading-zero;
            color: #1f2b7b;
            font-weight: 500;
            line-height: 1.82em !important;
        }

        .ordered-list li span {
            font-weight: 300;
            color: #828bb2;
        }

        .ordered-list-alpha li {
            margin-left: 30px;
            list-style-type: lower-alpha;
            color: #1f2b7b;
            font-weight: 500;
            line-height: 1.82em !important;
        }

        .ordered-list-alpha li span {
            font-weight: 300;
            color: #828bb2;
        }

        .ordered-list-roman li {
            margin-left: 30px;
            list-style-type: lower-roman;
            color: #1f2b7b;
            font-weight: 500;
            line-height: 1.82em !important;
        }

        .ordered-list-roman li span {
            font-weight: 300;
            color: #828bb2;
        }

        .single-input {
            display: block;
            width: 100%;
            line-height: 40px;
            border: none;
            outline: none;
            background: #f9f9ff;
            padding: 0 20px;
        }

        .single-input:focus {
            outline: none;
        }

        .input-group-icon {
            position: relative;
        }

        .input-group-icon .icon {
            position: absolute;
            left: 20px;
            top: 0;
            line-height: 40px;
            z-index: 3;
        }

        .input-group-icon .icon i {
            color: #797979;
        }

        .input-group-icon .single-input {
            padding-left: 45px;
        }

        .single-textarea {
            display: block;
            width: 100%;
            line-height: 40px;
            border: none;
            outline: none;
            background: #f9f9ff;
            padding: 0 20px;
            height: 100px;
            resize: none;
        }

        .single-textarea:focus {
            outline: none;
        }

        .single-input-primary {
            display: block;
            width: 100%;
            line-height: 40px;
            border: 1px solid transparent;
            outline: none;
            background: #f9f9ff;
            padding: 0 20px;
        }

        .single-input-primary:focus {
            outline: none;
            border: 1px solid #1f2b7b;
        }

        .single-input-accent {
            display: block;
            width: 100%;
            line-height: 40px;
            border: 1px solid transparent;
            outline: none;
            background: #f9f9ff;
            padding: 0 20px;
        }

        .single-input-accent:focus {
            outline: none;
            border: 1px solid #eb6b55;
        }

        .single-input-secondary {
            display: block;
            width: 100%;
            line-height: 40px;
            border: 1px solid transparent;
            outline: none;
            background: #f9f9ff;
            padding: 0 20px;
        }

        .single-input-secondary:focus {
            outline: none;
            border: 1px solid #f09359;
        }

        .default-switch {
            width: 35px;
            height: 17px;
            border-radius: 8.5px;
            background: #f9f9ff;
            position: relative;
            cursor: pointer;
        }

        .default-switch input {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        .default-switch input+label {
            position: absolute;
            top: 1px;
            left: 1px;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background: #1f2b7b;
            -webkit-transition: all 0.2s;
            -moz-transition: all 0.2s;
            -o-transition: all 0.2s;
            transition: all 0.2s;
            box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }

        .default-switch input:checked+label {
            left: 19px;
        }

        .primary-switch {
            width: 35px;
            height: 17px;
            border-radius: 8.5px;
            background: #f9f9ff;
            position: relative;
            cursor: pointer;
        }

        .primary-switch input {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
        }

        .primary-switch input+label {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
        }

        .primary-switch input+label:before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            background: transparent;
            border-radius: 8.5px;
            cursor: pointer;
            -webkit-transition: all 0.2s;
            -moz-transition: all 0.2s;
            -o-transition: all 0.2s;
            transition: all 0.2s;
        }

        .primary-switch input+label:after {
            content: "";
            position: absolute;
            top: 1px;
            left: 1px;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background: #fff;
            -webkit-transition: all 0.2s;
            -moz-transition: all 0.2s;
            -o-transition: all 0.2s;
            transition: all 0.2s;
            box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }

        .primary-switch input:checked+label:after {
            left: 19px;
        }

        .primary-switch input:checked+label:before {
            background: #1f2b7b;
        }

        .confirm-switch {
            width: 35px;
            height: 17px;
            border-radius: 8.5px;
            background: #f9f9ff;
            position: relative;
            cursor: pointer;
        }

        .confirm-switch input {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
        }

        .confirm-switch input+label {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
        }

        .confirm-switch input+label:before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            background: transparent;
            border-radius: 8.5px;
            -webkit-transition: all 0.2s;
            -moz-transition: all 0.2s;
            -o-transition: all 0.2s;
            transition: all 0.2s;
            cursor: pointer;
        }

        .confirm-switch input+label:after {
            content: "";
            position: absolute;
            top: 1px;
            left: 1px;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background: #fff;
            -webkit-transition: all 0.2s;
            -moz-transition: all 0.2s;
            -o-transition: all 0.2s;
            transition: all 0.2s;
            box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }

        .confirm-switch input:checked+label:after {
            left: 19px;
        }

        .confirm-switch input:checked+label:before {
            background: #4cd3e3;
        }

        .primary-checkbox {
            width: 16px;
            height: 16px;
            border-radius: 3px;
            background: #f9f9ff;
            position: relative;
            cursor: pointer;
        }

        .primary-checkbox input {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
        }

        .primary-checkbox input+label {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            border-radius: 3px;
            cursor: pointer;
            border: 1px solid #f1f1f1;
        }

        .primary-checkbox input:checked+label {
            background: url(../img/elements/primary-check.png) no-repeat center center/cover;
            border: none;
        }

        .confirm-checkbox {
            width: 16px;
            height: 16px;
            border-radius: 3px;
            background: #f9f9ff;
            position: relative;
            cursor: pointer;
        }

        .confirm-checkbox input {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
        }

        .confirm-checkbox input+label {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            border-radius: 3px;
            cursor: pointer;
            border: 1px solid #f1f1f1;
        }

        .confirm-checkbox input:checked+label {
            background: url(../img/elements/success-check.png) no-repeat center center/cover;
            border: none;
        }

        .disabled-checkbox {
            width: 16px;
            height: 16px;
            border-radius: 3px;
            background: #f9f9ff;
            position: relative;
            cursor: pointer;
        }

        .disabled-checkbox input {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
        }

        .disabled-checkbox input+label {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            border-radius: 3px;
            cursor: pointer;
            border: 1px solid #f1f1f1;
        }

        .disabled-checkbox input:disabled {
            cursor: not-allowed;
            z-index: 3;
        }

        .disabled-checkbox input:checked+label {
            background: url(../img/elements/disabled-check.png) no-repeat center center/cover;
            border: none;
        }

        .primary-radio {
            width: 16px;
            height: 16px;
            border-radius: 8px;
            background: #f9f9ff;
            position: relative;
            cursor: pointer;
        }

        .primary-radio input {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
        }

        .primary-radio input+label {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            border-radius: 8px;
            cursor: pointer;
            border: 1px solid #f1f1f1;
        }

        .primary-radio input:checked+label {
            background: url(../img/elements/primary-radio.png) no-repeat center center/cover;
            border: none;
        }

        .confirm-radio {
            width: 16px;
            height: 16px;
            border-radius: 8px;
            background: #f9f9ff;
            position: relative;
            cursor: pointer;
        }

        .confirm-radio input {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
        }

        .confirm-radio input+label {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            border-radius: 8px;
            cursor: pointer;
            border: 1px solid #f1f1f1;
        }

        .confirm-radio input:checked+label {
            background: url(../img/elements/success-radio.png) no-repeat center center/cover;
            border: none;
        }

        .disabled-radio {
            width: 16px;
            height: 16px;
            border-radius: 8px;
            background: #f9f9ff;
            position: relative;
            cursor: pointer;
        }

        .disabled-radio input {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
        }

        .disabled-radio input+label {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            border-radius: 8px;
            cursor: pointer;
            border: 1px solid #f1f1f1;
        }

        .disabled-radio input:disabled {
            cursor: not-allowed;
            z-index: 3;
        }

        .disabled-radio input:checked+label {
            background: url(../img/elements/disabled-radio.png) no-repeat center center/cover;
            border: none;
        }

        .default-select {
            height: 40px;
        }

        .default-select .nice-select {
            border: none;
            border-radius: 0px;
            height: 40px;
            background: #f9f9ff;
            padding-left: 20px;
            padding-right: 40px;
        }

        .default-select .nice-select .list {
            margin-top: 0;
            border: none;
            border-radius: 0px;
            box-shadow: none;
            width: 100%;
            padding: 10px 0 10px 0px;
        }

        .default-select .nice-select .list .option {
            font-weight: 300;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            line-height: 28px;
            min-height: 28px;
            font-size: 12px;
            padding-left: 20px;
        }

        .default-select .nice-select .list .option.selected {
            color: #1f2b7b;
            background: transparent;
        }

        .default-select .nice-select .list .option:hover {
            color: #1f2b7b;
            background: transparent;
        }

        .default-select .current {
            margin-right: 50px;
            font-weight: 300;
        }

        .default-select .nice-select::after {
            right: 20px;
        }

        .form-select {
            height: 40px;
            width: 100%;
        }

        .form-select .nice-select {
            border: none;
            border-radius: 0px;
            height: 40px;
            background: #f9f9ff;
            padding-left: 45px;
            padding-right: 40px;
            width: 100%;
        }

        .form-select .nice-select .list {
            margin-top: 0;
            border: none;
            border-radius: 0px;
            box-shadow: none;
            width: 100%;
            padding: 10px 0 10px 0px;
        }

        .form-select .nice-select .list .option {
            font-weight: 300;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            line-height: 28px;
            min-height: 28px;
            font-size: 12px;
            padding-left: 45px;
        }

        .form-select .nice-select .list .option.selected {
            color: #1f2b7b;
            background: transparent;
        }

        .form-select .nice-select .list .option:hover {
            color: #1f2b7b;
            background: transparent;
        }

        .form-select .current {
            margin-right: 50px;
            font-weight: 300;
        }

        .form-select .nice-select::after {
            right: 20px;
        }

        .mt-10 {
            margin-top: 10px;
        }

        .section-top-border {
            padding: 50px 0;
            border-top: 1px dotted #eee;
        }

        .mb-30 {
            margin-bottom: 30px;
        }

        .mt-30 {
            margin-top: 30px;
        }

        .switch-wrap {
            margin-bottom: 10px;
        }

        p {
            margin: 0;
            padding: 0;
        }

        #printButton {
            position: fixed;
            right: 20px;
            bottom: 20px;
            cursor: pointer;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.377);
        }
    </style>
</head>

<body style="margin: 2%; margin-top: 0.1%;">



    <div class="row">
        <div class="col-xl-12">
            <!-- Section Tittle -->
            <div class="section-tittle section-tittle7 mt-50">
                <div class="front-text">
                    <h2 class="">Annual Maintenance Contract</h2>
                </div>
                <span class="back-text">Annual</span>
            </div>
        </div>
    </div>




    <div class="maiin" style="display: flex; justify-content: space-between;">
        <!-- logo -->

        <img src="{{ asset('assets/img/logo/logo.png') }}" alt="" width="200" height="50">



        <!-- Customer Details -->
        <div class="cst_details">
            <div class="cst_inner"
                style="margin-right: 40px; display: flex; justify-content: right; flex-direction: column; align-items: end; margin-top: 30px;">
                <p style="text-transform: uppercase;">NAME- <strong>{{$amc->fname}}</strong></p>
                <p>ID- <strong>{{$amc->email}}</strong></p>
                <p>MOB- <strong>+91-{{$amc->mob}}</strong></p>
                <p>ADD- <strong>{{$amc->add}}</strong></p>
            </div>
        </div>
    </div>




    <!-- Window Info -->
    <div class="row">
        <div class="col-xl-12">
            <!-- Section Tittle -->
            <div class="section-tittle section-tittle7 mt-10">
                <div class="front-text">
                    <h2 class="" style="font-size: 2rem;"><i class="fa-solid fa-circle-info"></i>&nbsp;Window Info
                    </h2>
                </div>
            </div>
        </div>
    </div>


    <table class="table" style="margin-top: 15px;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Window</th>
                <th scope="col">Length</th>
                <th scope="col">Breadth</th>
                <th scope="col">Window Type</th>
                <th scope="col">Unit</th>
            </tr>
        </thead>
        <tbody>



            @if(is_array($amc->window_info))
            @foreach($amc->window_info as $window)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{ $window['window_name'] }}</td>
                <td>{{ $window['w_length'] }}</td>
                <td>{{ $window['w_breadth'] }}</td>
                <td>{{ $window['w_type'] }}</td>
                <td>{{ $window['w_unit'] }}</td>
            </tr>
            @endforeach
            @endif


        </tbody>
    </table>





    <!-- Customer Requirements -->
    <div class="row">
        <div class="col-xl-12">
            <!-- Section Tittle -->
            <div class="section-tittle section-tittle7 mt-10">
                <div class="front-text">
                    <h2 class="" style="font-size: 2rem;"><i class="fa-solid fa-user"></i>&nbsp;Customer Requirements
                    </h2>
                </div>
            </div>
        </div>
    </div>


    <div class="customer-say" style="font-size: 1.05rem; font-weight: 500; text-align: justify;">
        {{$amc->d_op}}
    </div>





    <!-- Signature & Date -->
    <div class="sig">
        <div class="sig_inner" style="position: fixed; bottom: 0px; width: 100%;">
            <div class="sigg" style="display: grid; grid-template-columns: 1fr 1fr;">
                <p style="font-size: 1.2rem;"><strong>DATE:</strong> ______/_______/____________</p>
                <p style="display: flex; justify-content: right; font-size: 1.2rem;"><strong>SIGNATURE:</strong>&nbsp;
                    ____________________________________</p>
            </div>
        </div>
    </div>







    <!-- Floating Print btn -->
    <button id="printButton" class="btn22" onclick="printPage()">PRINT NOW</button>







    <script>
        function printPage() {
            document.getElementById('printButton').style.display = 'none';
            window.print();
            setTimeout(() => {
                document.getElementById('printButton').style.display = 'block';
            }, 1000);
        }
    </script>

</body>

</html>