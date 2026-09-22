<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.includes.seo')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/gijgo.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/amc.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/function.css') }}" />

    <style>
        .inquiry-img {
            animation: scale1 1s ease-in-out infinite;
            transition: transform 120ms ease-in;
        }

        .inquiry-img:nth-child(1) {
            animation-delay: 0s;
        }

        .inquiry-img:nth-child(2) {
            animation-delay: 0.3s;
        }

        .inquiry-img:nth-child(3) {
            animation-delay: 0.6s;
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

        /* for multisteps button ============================================================================================*/
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

        /* ==========================================================================
           GLOBAL ARCHITECTURAL WATERMARK BACKGROUND ELEMENTS (SMALL / FADED OPACITY)
           ========================================================================== */
        .bg-watermark-thermal {
            position: relative;
            overflow: hidden;
        }

        .bg-watermark-thermal::before {
            content: "";
            position: absolute;
            top: 50%;
            right: -15px;
            transform: translateY(-50%);
            width: 360px;
            height: 360px;
            background-image: url("{{ asset('products/enhunce-thermal-noise-insulation.png') }}");
            background-repeat: no-repeat;
            background-position: center right;
            background-size: contain;
            opacity: 0.045;
            pointer-events: none;
            z-index: 1;
            filter: grayscale(100%) contrast(110%);
        }

        .bg-watermark-subframe {
            position: relative;
            overflow: hidden;
        }

        .bg-watermark-subframe::before {
            content: "";
            position: absolute;
            top: 50%;
            left: -15px;
            transform: translateY(-50%);
            width: 340px;
            height: 340px;
            background-image: url("{{ asset('products/subframe-ins.png') }}");
            background-repeat: no-repeat;
            background-position: center left;
            background-size: contain;
            opacity: 0.045;
            pointer-events: none;
            z-index: 1;
            filter: grayscale(100%) contrast(110%);
        }

        .bg-watermark-thermal > .container,
        .bg-watermark-subframe > .container,
        .bg-watermark-thermal > div,
        .bg-watermark-subframe > div {
            position: relative;
            z-index: 2;
        }

        @media (max-width: 768px) {
            .bg-watermark-thermal::before,
            .bg-watermark-subframe::before {
                width: 220px;
                height: 220px;
                opacity: 0.03;
            }
        }
    </style>

    @stack('styles')
    @yield('styles')
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('assets/img/logo/logo-loader33.png') }}" alt="Loading..." />
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header Include -->
    @include('frontend.includes.header')

    <!-- Main Content Area -->
    <main>
        @yield('content')
    </main>

    <!-- Contact Us Modal Start -->
    <div class="modal fade" id="myInquiryModal" tabindex="-1" aria-labelledby="myInquiryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section-tittle section-tittle7">
                                <div class="front-text">
                                    <h2 class="">Need Assistance?</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <form id="supportContactForm" action="{{ route('support') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="support_email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="support_email" required>
                            <div class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="support_subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" name="subject" id="support_subject" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-check-label" for="support_inquiry">Message</label>
                            <textarea name="inquiry" id="support_inquiry" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn22 w-100">Submit Ticket</button>

                        <div class="modal-footer1 mt-3">
                            <div class="modal-footer-inner" style="display:flex; justify-content: space-evenly; align-items: center; gap: 3px;">
                                <a href="https://maps.app.goo.gl/2MkcA6S1yNQJqRgv7" target="_blank" class="find-icons" title="Location">
                                    <img class="inquiry-img" src="{{ asset('assets/img/icon/location-pin.gif') }}" width="60" alt="Location">
                                </a>
                                @if(isset($aboutDetails) && count($aboutDetails) > 0)
                                    @foreach($aboutDetails as $abItem)
                                    <a href="https://wa.me/{{$abItem->ab_num}}" class="find-icons" title="WhatsApp">
                                        <img class="inquiry-img" src="{{ asset('assets/img/icon/chat.gif') }}" width="60" alt="WhatsApp">
                                    </a>
                                    <a href="tel:{{$abItem->ab_num}}" class="find-icons" title="Call Us">
                                        <img class="inquiry-img" src="{{ asset('assets/img/icon/incoming-call.gif') }}" width="60" alt="Call">
                                    </a>
                                    @endforeach
                                @else
                                    <a href="https://wa.me/8981444141" class="find-icons" title="WhatsApp">
                                        <img class="inquiry-img" src="{{ asset('assets/img/icon/chat.gif') }}" width="60" alt="WhatsApp">
                                    </a>
                                    <a href="tel:8981444141" class="find-icons" title="Call Us">
                                        <img class="inquiry-img" src="{{ asset('assets/img/icon/incoming-call.gif') }}" width="60" alt="Call">
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Us Modal End -->


    <!-- Global Success Modal -->
    <div class="modal fade" id="myInquirySuccessModal" tabindex="-1" role="dialog" aria-labelledby="myInquirySuccessModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body" style="display: flex; flex-direction: column; align-items: center;">
                    <img src="{{ asset('assets/img/icon/upp.gif') }}" width="180" alt="Success">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section-tittle section-tittle7">
                                <div class="front-text">
                                    <h2 style="text-align: center;">Submitted Successfully!</h2>
                                    <p style="text-align: right; font-weight: 700;">We will contact you shortly &rarr;</p>
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

    <!-- Global Error Modal -->
    <div class="modal fade" id="myInquiryErrorModal" tabindex="-1" role="dialog" aria-labelledby="myInquiryErrorModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body" style="display: flex; flex-direction: column; align-items: center;">
                    <img src="{{ asset('assets/img/icon/unn.gif') }}" width="180" alt="Error">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section-tittle section-tittle7">
                                <div class="front-text">
                                    <h2 style="text-align: center;">Submission Failed!</h2>
                                    <p style="text-align: right; font-weight: 700;">Please verify the fields and try again &rarr;</p>
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

    <!-- Footer Include -->
    @include('frontend.includes.footer')

    <!-- Script Include -->
    @include('frontend.includes.script')

    @stack('scripts')
    @yield('scripts')
</body>

</html>
