<!-- JS Start From Here -->
<!-- All JS Custom Plugins Link Here -->
<script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>

<!-- Jquery Slick, Owl-Carousel Plugins -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<!-- Date Picker -->
<script src="{{ asset('assets/js/gijgo.min.js') }}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/animated.headline.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>

<!-- counter, waypoint -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>

<!-- contact js -->
<script src="{{ asset('assets/js/contact.js') }}"></script>
<script src="{{ asset('assets/js/jquery.form.js') }}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/mail-script.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

<!-- blog-validation -->
<script src="{{ asset('assets/js/blog-create.js') }}"></script>

<script>
    // Global Support Modal Submission Handler
    const supportForm = document.getElementById("supportContactForm");
    if (supportForm) {
        supportForm.addEventListener("submit", function(event) {
            event.preventDefault();
            let formData = new FormData(this);

            fetch("{{ route('support') }}", {
                method: "POST",
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                $('#myInquiryModal').modal('hide');
                if (data.success) {
                    $('#myInquirySuccessModal').modal('show');
                } else {
                    $('#myInquiryErrorModal').modal('show');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                $('#myInquiryModal').modal('hide');
                $('#myInquiryErrorModal').modal('show');
            });
        });
    }
</script>
