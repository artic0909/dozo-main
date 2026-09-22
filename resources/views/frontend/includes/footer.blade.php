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
                                <a href="/"><img src="{{ asset('assets/img/logo/logo.png') }}" alt="DOZO Logo" /></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p class="info1" style="text-align: justify; color: #a5a5a5;">
                                        DOZO by Ranihati Construction is India's leading manufacturer of high-performance architectural Aluminium System Windows, Sliding Doors, Casement Glazing, and Structural Facades.
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
                                    <li><a href="/">Information</a></li>
                                    <li><a href="/amc">Window AMC</a></li>
                                    <!-- <li><a href="/about">About DOZO</a></li> -->
                                    <!-- <li><a href="/service">Our Services</a></li> -->
                                    <li><a href="{{ asset('catelogue.pdf') }}" target="_blank"><i class="fa-solid fa-file-pdf text-danger"></i> Download Catalogue</a></li>
                                    <!-- <li><a href="/inquiry">Inquiry Now</a></li> -->
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
                                        <a href="https://maps.app.goo.gl/2MkcA6S1yNQJqRgv7" target="_blank" style="color: #a5a5a5;">
                                            <i class="fa-solid fa-location-dot" style="color: #ff5f13;"></i> Poly Park, Dhulagori, Howrah, West Bengal - 711302
                                        </a>
                                    </p>
                                </div>
                                <ul>
                                    @if(isset($aboutDetails) && count($aboutDetails) > 0)
                                        @foreach($aboutDetails as $abItem)
                                        <li><a href="tel:{{$abItem->ab_num}}">+91 {{$abItem->ab_num}}</a></li>
                                        <li><a href="mailto:{{$abItem->ab_email}}">{{$abItem->ab_email}}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <!-- Map -->
                            <a href="https://maps.app.goo.gl/2MkcA6S1yNQJqRgv7" target="_blank" class="map-footer" title="Open Google Maps Location">
                                <img src="{{ asset('assets/img/gallery/map.png') }}" alt="Location Map" style="filter: drop-shadow(-5px 5px 0.3px rgba(161, 160, 160, 0.74)); max-width: 100%; border-radius: 8px;" />
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Copy-Right -->
                <div class="row align-items-center">
                    <div class="col-xl-12">
                        <div class="footer-copy-right">
                            <p>
                                Copyright &copy; {{ date('Y') }} <a href="/" target="_blank" style="color: #ff5f13; font-weight: 700;">DOZO | Façade & Fenestration Aluminum System Windows</a> A brand of rconpl.in
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
