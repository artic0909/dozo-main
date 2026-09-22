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

    <!-- Blog Create Modal Start -->
    <div class="modal fade" id="myBlogCreateModal" tabindex="-1" aria-labelledby="myBlogCreateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myBlogCreateModalLabel" style="font-weight: 700;">Share Your Project / Story</h3>
                </div>
                <div class="modal-body">
                    <form id="blogForm" action="{{ route('addBlog') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3" style="display: flex; flex-direction: column; align-items: center;">
                            <label for="b_img" class="form-label">
                                <img src="{{ asset('assets/img/blog/add-image.png') }}" style="width: 80px; cursor: pointer;" alt="Upload">
                                <span id="requiredMark" style="color: red; font-size: 2rem;">*</span>
                                <span id="checkMark" style="color: rgb(28, 121, 5); font-size: 2rem; display: none;">✔</span>
                            </label>
                            <input type="file" name="b_img" class="form-control" id="b_img" style="display: none;" onchange="toggleMarks()">
                            <small id="b_img_error" class="txt-org" style="display: none;">Please upload an image under 2MB.</small>
                        </div>

                        <div class="mb-3">
                            <label for="b_title" class="form-label">Post Title<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="b_title" id="b_title" required>
                            <small id="b_title_error" class="txt-org" style="display: none;">Post title is required.</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-check-label" for="b_qt">Short Quote / Tagline<span style="color: red;">*</span></label>
                            <textarea name="b_qt" id="b_qt" class="form-control" required></textarea>
                            <small id="b_qt_error" class="txt-org" style="display: none;">Quote field is required.</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-check-label" for="b_desc">Post Description<span style="color: red;">*</span></label>
                            <textarea name="b_desc" id="b_desc" class="form-control" rows="4" required></textarea>
                            <small id="b_desc_error" class="txt-org" style="display: none;">Post description is required.</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-check-label" for="b_tag">Tags (e.g. #Aluminium #Architecture)<span style="color: red;">*</span></label>
                            <textarea name="b_tag" id="b_tag" class="form-control" required></textarea>
                            <small id="b_tag_error" class="txt-org" style="display: none;">Post tags are required.</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-check-label" for="b_date">Post Date<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="b_date" id="b_date" value="{{ date('d M Y') }}" required>
                        </div>

                        <button type="submit" class="btn w-100">Submit Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Create Modal End -->

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
