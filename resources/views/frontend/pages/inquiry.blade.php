@extends('frontend.layouts.app')

@section('title', 'Send Window Inquiry | DOZO Windows')

@section('content')
<!-- slider Area Start-->
<div class="slider-area ">
    <div class="single-slider hero-overly slider-height2 d-flex align-items-center"
        data-background="{{ asset('assets/img/hero/about.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap pt-100">
                        <h2>Inquiry Now</h2>
                        <nav aria-label="breadcrumb ">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Inquiry</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!-- Inquiry Section Start -->
<section class="blog_area section-padding bg-watermark-subframe">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-tittle section-tittle7 mb-50">
                    <div class="front-text">
                        <h2 class="">Window Inquiry</h2>
                    </div>
                    <span class="back-text">For Window</span>
                </div>
            </div>
        </div>

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
                                                <button class="multisteps-form__progress-btn" type="button" title="Order Info">Window</button>
                                                <button class="multisteps-form__progress-btn" type="button" title="Message">Opinion</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-lg-8 m-auto">
                                            <form class="multisteps-form__form" action="{{ route('inquiry.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf

                                                <!-- 1st part User INFO -->
                                                <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="fade">
                                                    <div class="mb-3">
                                                        <label for="cus_name" class="form-label">Full Name<span class="text-danger">*</span></label>
                                                        <input type="text" name="cus_name" class="form-control" id="cus_name" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="cus_email" class="form-label">Email address<span class="text-danger">*</span></label>
                                                        <input type="email" name="cus_email" class="form-control" id="cus_email" required>
                                                        <div class="form-text">We'll never share your email with anyone else.</div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="cus_mob" class="form-label">Mobile No<span class="text-danger">*</span></label>
                                                        <input type="text" name="cus_mob" id="cus_mob" class="form-control" required>
                                                    </div>

                                                    <div class="button-row d-flex mt-4">
                                                        <button class="btn w-100 ml-auto js-btn-next" type="button" title="Next">Next</button>
                                                    </div>
                                                </div>

                                                <!-- 2nd part Address Info -->
                                                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="fade">
                                                    <div class="mb-3">
                                                        <label for="cus_add" class="form-check-label">Address<span class="text-danger">*</span></label>
                                                        <textarea name="cus_add" id="cus_add" class="form-control" required rows="7"></textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="cus_pin" class="form-check-label">PIN CODE<span class="text-danger">*</span></label>
                                                        <input type="text" name="cus_pin" id="cus_pin" class="form-control">
                                                    </div>

                                                    <div class="button-row d-flex mt-4 button-main-container">
                                                        <button class="btn22 bttt1 js-btn-prev" type="button" title="Prev">Prev</button>
                                                        <button class="btn bttt2 ml-auto js-btn-next" type="button" title="Next">Next</button>
                                                    </div>
                                                </div>

                                                <!-- 3rd part Window Info -->
                                                <div class="multisteps-form__panel shadow p-4 rounded bg-white" style="z-index: 1;">
                                                    <div id="amcForm">
                                                        <div class="form-inner" id="windowGroup_1">
                                                            <div class="form-group">
                                                                <label class="amc-label">Window / System Name<span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control bdrn" name="window_name[]" value="{{ request('product', '') }}" placeholder="e.g. Casement Window / Master Bedroom" required>
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
                                                                    <option value="Tilt & Turn Window">Tilt & Turn Window</option>
                                                                    <option value="Fixed Glass / Glazing">Fixed Glass / Glazing</option>
                                                                    <option value="Aluminium Sliding Door">Aluminium Sliding Door</option>
                                                                    <option value="Structural Facade">Structural Facade</option>
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

                                                <!-- 4th Opinion Info -->
                                                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn" style="z-index: 1;">
                                                    <div class="mb-3">
                                                        <label for="cus_d_op" class="form-check-label">Detail of Your Requirements<span class="text-danger">*</span></label>
                                                        <textarea name="cus_d_op" id="cus_d_op" class="form-control" required rows="7"></textarea>
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
    </div>
</section>
<!-- Inquiry Section End -->
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

                if (field.id === "cus_mob" && field.value) {
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
                url: "{{ route('inquiry.store') }}",
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
