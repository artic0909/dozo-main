@extends('frontend.layouts.app')

@section('title', 'Annual Maintenance Contract (AMC) | DOZO Windows')

@section('content')
<!-- slider Area Start-->
<div class="slider-area ">
    <div class="single-slider hero-overly slider-height2 d-flex align-items-center"
        data-background="{{ asset('assets/img/hero/about.jpg') }}">
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
                        <h2 class="">AMC Inquiry</h2>
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
                                                <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">User Info</button>
                                                <button class="multisteps-form__progress-btn" type="button" title="Address">Address</button>
                                                <button class="multisteps-form__progress-btn" type="button" title="Order Info">AMC</button>
                                                <button class="multisteps-form__progress-btn" type="button" title="Message">Opinion</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-8 m-auto">
                                            <form class="multisteps-form__form" action="{{ route('amc.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf

                                                <!-- 1st part User INFO -->
                                                <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="fade">
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
                                                                <label for="window_name" class="amc-label">Window 1<span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control bdrn" name="window_name[]" placeholder="Hall Room" required>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="amc-label">Length<span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control bdrn" name="w_length[]" placeholder="Window Length..." required>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="amc-label">Breadth<span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control bdrn" name="w_breadth[]" placeholder="Window Breadth..." required>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="amc-label">Window Type<span class="text-danger">*</span></label>
                                                                <select name="w_type[]" class="form-control bdrn" required>
                                                                    <option value="" selected>Select Type</option>
                                                                    <option value="Sliding Window">Sliding Window</option>
                                                                    <option value="Casement Window">Casement Window</option>
                                                                    <option value="Tilt & Turn">Tilt & Turn</option>
                                                                    <option value="Fixed Glazing">Fixed Glazing</option>
                                                                    <option value="Aluminium Door">Aluminium Door</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="amc-label">Unit<span class="text-danger">*</span></label>
                                                                <input type="number" class="form-control bdrn" name="w_unit[]" placeholder="1" required>
                                                            </div>
                                                        </div>

                                                        <div class="add-button">
                                                            <a href="#" class="org-btn" id="addButton">ADD MORE WINDOW</a>
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
                                                        <button class="btn bttt2 ml-auto" type="submit" title="Submit">SUBMIT INQUIRY</button>
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

        <!-- We Offer AMC -->
        <div class="row" style="z-index: -1;">
            <div class="col-xl-12 row-innerr">
                <div class="we-offer">
                    <div class="amc_title" style="margin-top: 40px;">
                        <img src="{{ asset('assets/img/icon/contract.png') }}" width="60" alt="AMC">
                        <h3 class="offer-text">We Offer Annual Maintenance Contract</h3>
                    </div>

                    <div class="row-inner-main">
                        <!-- Offers -->
                        <ul class="amc_ul">
                            @if(isset($offers) && count($offers) > 0)
                                @foreach($offers as $offer)
                                <li class="amc_li">
                                    <p class="amc_p">
                                        <span style="color: #ff5f13; font-weight: 600; font-size: 1.1rem;">✔&nbsp;</span>
                                        <strong>{{$offer->offer}}</strong>
                                    </p>
                                </li>
                                @endforeach
                            @else
                                <li class="amc_li">
                                    <p class="amc_p"><span style="color: #ff5f13; font-weight: 600;">✔&nbsp;</span> Complete Hardware & Roller Lubrication</p>
                                </li>
                                <li class="amc_li">
                                    <p class="amc_p"><span style="color: #ff5f13; font-weight: 600;">✔&nbsp;</span> EPDM Weather Gasket Inspection & Replacement</p>
                                </li>
                                <li class="amc_li">
                                    <p class="amc_p"><span style="color: #ff5f13; font-weight: 600;">✔&nbsp;</span> Realignment and Locking Adjustment</p>
                                </li>
                            @endif
                        </ul>

                        <!-- amc_bg -->
                        <div class="amc_bg">
                            <img src="{{ asset('assets/img/gallery/amc.png') }}" alt="AMC Service">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- AMC Section End -->
@endsection

@push('scripts')
<script src="{{ asset('assets/js/function.js') }}"></script>
<script src="{{ asset('assets/js/amc.js') }}"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const steps = document.querySelectorAll(".multisteps-form__panel");
        const nextButtons = document.querySelectorAll(".js-btn-next");
        const prevButtons = document.querySelectorAll(".js-btn-prev");

        function validateForm(stepIndex) {
            let isValid = true;
            const fields = steps[stepIndex].querySelectorAll("input, textarea, select");

            fields.forEach((field) => {
                const errorMsg = field.parentElement.querySelector(".error-message");
                if (errorMsg) errorMsg.remove();

                if (field.hasAttribute("required") && !field.value) {
                    isValid = false;
                    showError(field, "This field is required");
                }

                if (field.type === "email" && field.value) {
                    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                    if (!emailPattern.test(field.value)) {
                        isValid = false;
                        showError(field, "Please enter a valid email address");
                    }
                }

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

        function showError(field, message) {
            const errorMsg = document.createElement("div");
            errorMsg.className = "error-message text-danger";
            errorMsg.style.fontSize = "0.9rem";
            errorMsg.style.marginTop = "0.25rem";
            errorMsg.textContent = message;
            field.parentElement.appendChild(errorMsg);
        }

        nextButtons.forEach((button, index) => {
            button.addEventListener("click", () => {
                if (validateForm(index)) {
                    steps[index].classList.remove("js-active");
                    steps[index + 1].classList.add("js-active");
                }
            });
        });

        prevButtons.forEach((button, index) => {
            button.addEventListener("click", () => {
                steps[index + 1].classList.remove("js-active");
                steps[index].classList.add("js-active");
            });
        });
    });

    $(document).ready(function() {
        $(".multisteps-form__form").submit(function(event) {
            event.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                url: "{{ route('amc.store') }}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    $('#myInquirySuccessModal').modal('show');
                },
                error: function(xhr, status, error) {
                    $('#myInquiryErrorModal').modal('show');
                }
            });
        });
    });
</script>
@endpush
