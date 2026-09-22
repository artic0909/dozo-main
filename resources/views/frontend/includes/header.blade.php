<header style="z-index: 11111;">
    <!-- Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header">
            <div class="header-top d-none d-lg-block" style="background-color: rgb(17, 17, 17)">
                <div class="container-fluid">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                @if(isset($aboutDetails) && count($aboutDetails) > 0)
                                    @foreach($aboutDetails as $abItem)
                                    <ul>
                                        <li><a href="tel:{{$abItem->ab_num}}" style="color:white">+(91)-{{$abItem->ab_num}}</a></li>
                                        <li><a href="mailto:{{$abItem->ab_email}}" style="color:white">{{$abItem->ab_email}}</a></li>
                                        <li>Mon - Sat 9:00 - 19:30, Sunday - CLOSED</li>
                                    </ul>
                                    @endforeach
                                @else
                                    <ul>
                                        <li><a href="tel:8981444141" style="color:white">+(91)-8981444141</a></li>
                                        <li><a href="mailto:info@dozowindows.com" style="color:white">info@dozowindows.com</a></li>
                                        <li>Mon - Sat 9:00 - 19:30, Sunday - CLOSED</li>
                                    </ul>
                                @endif
                            </div>
                            <div class="header-info-right">
                                <ul class="header-social">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
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
                                <a href="/" class="big-logo">
                                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="DOZO Logo" style="filter: drop-shadow(3px 3px 2px rgba(15, 15, 15, 0.616));" />
                                </a>
                                <!-- logo-2 -->
                                <a href="/" class="small-logo">
                                    <img src="{{ asset('assets/img/logo/l.png') }}" alt="DOZO" style="filter: drop-shadow(3px 3px 2px rgba(15, 15, 15, 0.616));" />
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        @if(isset($maincategories) && count($maincategories) > 0)
                                            @foreach($maincategories as $maincategory)
                                            <li><a href="{{ route('category.products', $maincategory->slug ?? $maincategory->id) }}">{{$maincategory->main_category}}</a></li>
                                            @endforeach
                                        @else
                                            <li><a href="/">Home</a></li>
                                            <li><a href="/about">About</a></li>
                                            <li><a href="/service">Services</a></li>
                                        @endif
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="header-right-btn f-right d-none d-lg-flex align-items-center" style="gap: 14px;">
                                <a href="{{ asset('catelogue.pdf') }}" target="_blank" class="header-cat-btn" title="Download Catalogue"><i class="fa-solid fa-file-pdf"></i> Catalogue</a>
                                <a href="/amc" class="header-amc-btn">Window AMC</a>
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
