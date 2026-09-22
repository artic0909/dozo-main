@extends('frontend.layouts.app')

@section('title', 'DOZO | House of Aluminium Windows & Facade')

@section('styles')
<style>
    /* ==========================================================================
       ARCHITECTURAL BLUEPRINT BACKGROUND ELEMENTS (FADED OPACITY WATERMARKS)
       You can adjust the opacity anytime via the CSS variables below:
       ========================================================================== */
    :root {
        --watermark-thermal-opacity: 0.08; /* Adjust faded opacity for thermal insulation blueprint (e.g. 0.04 - 0.12) */
        --watermark-subframe-opacity: 0.08; /* Adjust faded opacity for subframe engineering blueprint (e.g. 0.04 - 0.12) */
    }

    /* 1. Enhanced Thermal & Noise Insulation Blueprint Watermark */
    .catalogue-why-section {
        position: relative;
        overflow: hidden;
    }

    .catalogue-why-section::before {
        content: "";
        position: absolute;
        top: 50%;
        right: -3%;
        transform: translateY(-50%);
        width: 720px;
        height: 720px;
        background-image: url("{{ asset('products/enhunce-thermal-noise-insulation.png') }}");
        background-repeat: no-repeat;
        background-position: center right;
        background-size: contain;
        opacity: var(--watermark-thermal-opacity);
        pointer-events: none;
        z-index: 1;
        filter: grayscale(100%) contrast(115%);
        transition: opacity 0.3s ease;
    }

    @media (max-width: 991px) {
        .catalogue-why-section::before {
            width: 440px;
            height: 440px;
            right: -8%;
            opacity: calc(var(--watermark-thermal-opacity) * 0.7);
        }
    }

    /* 2. DOZO Sub Frame Amended Installation Blueprint Watermark */
    .catalogue-subframe-section {
        position: relative;
        overflow: hidden;
    }

    .catalogue-subframe-section::before {
        content: "";
        position: absolute;
        top: 50%;
        left: -3%;
        transform: translateY(-50%);
        width: 680px;
        height: 680px;
        background-image: url("{{ asset('products/subframe-ins.png') }}");
        background-repeat: no-repeat;
        background-position: center left;
        background-size: contain;
        opacity: var(--watermark-subframe-opacity);
        pointer-events: none;
        z-index: 1;
        filter: grayscale(100%) contrast(115%);
        transition: opacity 0.3s ease;
    }

    @media (max-width: 991px) {
        .catalogue-subframe-section::before {
            width: 400px;
            height: 400px;
            left: -8%;
            opacity: calc(var(--watermark-subframe-opacity) * 0.7);
        }
    }

    /* Ensure content stays firmly above background watermarks */
    .catalogue-why-section .container,
    .catalogue-subframe-section .container {
        position: relative;
        z-index: 2;
    }
</style>
@endsection

@section('content')



        <!-- slider Area Start-->
        <div class="slider-area">

            <div class="slider-active">

                @foreach($homeBannners as $banner)
                <div class="single-slider hero-overly slider-height d-flex align-items-center"
                    style="background-image: url('{{ asset('storage/' . $banner->home_banner) }}'); background-size: cover; background-position: center center; background-repeat: no-repeat;"
                    data-background="{{ asset('storage/' . $banner->home_banner) }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="hero__caption">
                                    <div class="hero-text1">
                                        <span data-animation="fadeInUp" data-delay=".3s">{{$banner->h_s_desc}}</span>
                                    </div>
                                    <h1 data-animation="fadeInUp" data-delay=".5s">{{$banner->h_title}}</h1>
                                    <div class="stock-text" data-animation="fadeInUp" data-delay=".8s">
                                        <h2>{{$banner->h_a_title}}</h2>
                                        <h2>{{$banner->h_a_title}}</h2>
                                    </div>
                                    <div class="hero-text2 mt-110" data-animation="fadeInUp" data-delay=".9s">
                                        <span><a href="{{$banner->h_p_url}}">{{$banner->h_p_name}}</a></span>
                                    </div>
                                    <div class="hero-btns-wrapper" data-animation="fadeInUp" data-delay="1.0s">
                                        <a href="{{ asset('catelogue.pdf') }}" target="_blank" class="hero-catalogue-btn"><i class="fa-solid fa-file-pdf"></i> View Catalogue</a>
                                        <a href="/inquiry" class="hero-inquiry-btn">Send Inquiry <i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <!-- slider Area End-->










        <!-- Why Choose DOZO System Windows Section (Catalogue Info) Start -->
        <div class="catalogue-why-section services-area1 section-padding30" id="why-dozo">
            <div class="container">
                <!-- Section Title -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-50 text-center">
                            <div class="front-text">
                                <h2 class="">Why Choose DOZO System Windows?</h2>
                            </div>
                            <span class="back-text">WHY DOZO</span>
                            <p style="color: #ff5f13; font-weight: 700; font-size: 17px; margin-top: 10px; letter-spacing: 0.5px;">
                                <i class="fa-solid fa-circle-check"></i> Basic Windows Requirements Are Fulfilled By DOZO Windows
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 4 Performance Pillars Grid -->
                <div class="row mb-40">
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                        <div class="catalogue-pillar-card">
                            <div class="catalogue-pillar-icon">
                                <i class="fa-solid fa-wind"></i>
                            </div>
                            <h3 class="catalogue-pillar-title">AIR</h3>
                            <span class="catalogue-pillar-badge">Tested by 3.0 kPa</span>
                            <p class="catalogue-pillar-desc">Superior wind pressure resistance tested rigorously up to 3.0 kPa for ultimate high-rise safety and structural stability.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                        <div class="catalogue-pillar-card">
                            <div class="catalogue-pillar-icon">
                                <i class="fa-solid fa-droplet"></i>
                            </div>
                            <h3 class="catalogue-pillar-title">WATER</h3>
                            <span class="catalogue-pillar-badge">Tested by 0.30 kPa</span>
                            <p class="catalogue-pillar-desc">Advanced watertight sealing tested up to 0.30 kPa preventing water ingress during extreme monsoon weather.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                        <div class="catalogue-pillar-card">
                            <div class="catalogue-pillar-icon">
                                <i class="fa-solid fa-volume-xmark"></i>
                            </div>
                            <h3 class="catalogue-pillar-title">SOUND</h3>
                            <span class="catalogue-pillar-badge">20 - 45 dB Cutoff</span>
                            <p class="catalogue-pillar-desc">High acoustic insulation reducing outside urban noise by 20 to 45 dB depending on glass configuration for peaceful interiors.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                        <div class="catalogue-pillar-card">
                            <div class="catalogue-pillar-icon">
                                <i class="fa-solid fa-temperature-arrow-down"></i>
                            </div>
                            <h3 class="catalogue-pillar-title">THERMAL</h3>
                            <span class="catalogue-pillar-badge">10 - 12°C Reduction</span>
                            <p class="catalogue-pillar-desc">Exceptional thermal barrier reducing indoor temperature by 10 to 12°C depending on glass, maximizing energy savings.</p>
                        </div>
                    </div>
                </div>

                <!-- Warranty Cards & Manufacturing Checklist -->
                <div class="row align-items-stretch">
                    <!-- Left: 3 Warranty Cards -->
                    <div class="col-lg-5 col-md-12 mb-30">
                        <div class="row h-100">
                            <div class="col-12 mb-20">
                                <div class="catalogue-warranty-card">
                                    <div class="catalogue-warranty-number">25 YEARS</div>
                                    <h4 class="catalogue-warranty-title">Warranty on Aluminium Material</h4>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-20">
                                <div class="catalogue-warranty-card">
                                    <div class="catalogue-warranty-number">15 YEARS</div>
                                    <h4 class="catalogue-warranty-title">Powder Coating Warranty</h4>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-20">
                                <div class="catalogue-warranty-card">
                                    <div class="catalogue-warranty-number">5 YEARS</div>
                                    <h4 class="catalogue-warranty-title">Hardware Warranty</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Manufacturing Excellence Checklist -->
                    <div class="col-lg-7 col-md-12 mb-30">
                        <div class="catalogue-feature-box h-100">
                            <h4 style="font-size: 20px; font-weight: 800; color: #111111; margin-bottom: 20px; text-transform: uppercase;">
                                <i class="fa-solid fa-award" style="color: #ff5f13; margin-right: 8px;"></i> Manufacturing & Quality Standards
                            </h4>
                            <ul class="catalogue-feature-list">
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span><strong>Fully Factory Made:</strong> Precision manufactured with advanced automatic CNC machines.</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span><strong>Certified Raw Materials:</strong> 100% quality tested raw materials adhering to global benchmarks.</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span><strong>Versatile Glass Fitting:</strong> 4mm to 24mm glass fitted seamlessly in our windows & doors.</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span><strong>Direct Factory Value:</strong> Transparent, reasonable pricing directly from the manufacturer.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Callout Quality Statement -->
                <div class="catalogue-callout-banner">
                    <p>
                        <i class="fa-solid fa-shield-halved" style="color: #ff5f13; font-size: 22px; margin-right: 10px; vertical-align: middle;"></i>
                        To ensure the quality, durability, and performance of our Aluminium Windows with Thermal & Noise Insulation, we comply with industry standards and conduct rigorous testing.
                    </p>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="{{ asset('catelogue.pdf') }}" target="_blank" class="btn header-btn" style="background: #ff5f13; color: #ffffff; padding: 12px 24px; font-size: 14px; font-weight: 700; border-radius: 6px; display: inline-flex; align-items: center; gap: 8px;">
                            <i class="fa-solid fa-file-pdf"></i> View Catalogue
                        </a>
                        <a href="{{ url('/contact') }}" class="btn header-btn" style="background: #333333; color: #ffffff; padding: 12px 24px; font-size: 14px; font-weight: 700; border-radius: 6px; display: inline-flex; align-items: center; gap: 8px;">
                            <i class="fa-solid fa-envelope"></i> Quick Inquiry
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Why Choose DOZO System Windows Section End -->





        <!-- Shaping Modern Architecture & Envelope Solution Section Start -->
        <section class="catalogue-architecture-section section-padding30" id="architectural-solutions">
            <div class="container">
                <!-- Section Header -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-50">
                            <div class="front-text">
                                <h2 class="">Shaping Modern Architecture</h2>
                            </div>
                            <span class="back-text">SOLUTIONS</span>
                            <p style="font-size: 18px; color: #666; font-weight: 600; margin-top: 8px;">Architecture with Performance and Elegance</p>
                        </div>
                    </div>
                </div>

                <!-- Luxury Living Banner -->
                <div class="catalogue-luxury-banner">
                    <div class="row g-0 align-items-center">
                        <div class="col-lg-12">
                            <div class="catalogue-luxury-content">
                                <span class="catalogue-luxury-badge">Designed for Luxury Living</span>
                                <h3 class="catalogue-luxury-title">At DOZO Windows & Façade, We Deliver Exactly That.</h3>
                                <p class="catalogue-luxury-desc">
                                    In today's architectural landscape, buildings are no longer judged solely by their structure. They are defined by their façade, natural light, energy efficiency, sustainability, and the experience they create for occupants. As India's premium real estate market continues to evolve, developers, architects, and luxury homeowners are seeking solutions that combine aesthetics, innovation, and long-term performance.
                                </p>
                                <ul class="catalogue-luxury-points">
                                    <li>
                                        <i class="fa-solid fa-circle-dot"></i>
                                        <span><strong>Beyond Products, Complete Architectural Solutions:</strong> A window is more than an opening. A façade is more than an exterior surface. Together, they define a building's identity, efficiency, and value.</span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-circle-dot"></i>
                                        <span><strong>Integrated Façade & Fenestration:</strong> We provide solutions that combine design expertise, engineering precision, premium materials, fabrication excellence, professional installation, and dedicated after-sales support.</span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-circle-dot"></i>
                                        <span><strong>Timeless Living:</strong> Modern homeowners expect more than beautiful homes — they seek comfort, security, energy efficiency, and timeless elegance.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Envelope Solutions, Applications & Technical Specifications -->
                <div class="row">
                    <!-- Left: Complete Building Envelope Solution & Applications -->
                    <div class="col-lg-6 mb-30">
                        <div class="catalogue-specs-card h-100">
                            <h3 style="font-size: 24px; font-weight: 900; color: #111111; margin-bottom: 20px; font-family: 'Barlow', sans-serif; text-transform: uppercase;">
                                <i class="fa-solid fa-building" style="color: #ff5f13; margin-right: 10px;"></i> Complete Building Envelope Solution
                            </h3>
                            <ul class="catalogue-feature-list mb-35">
                                <li>
                                    <i class="fa-solid fa-check-circle"></i>
                                    <span><strong>Wind Load Capacity:</strong> Engineered up to 3.0 kPa for ultimate resistance.</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check-circle"></i>
                                    <span><strong>Premium 6063-T6 Aluminum:</strong> Architectural grade alloy for maximum structural strength.</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check-circle"></i>
                                    <span><strong>Super Durable Powder Coating:</strong> Weather-resistant Qualicoat approved finishing.</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check-circle"></i>
                                    <span><strong>Thermal Efficiency & Acoustic Comfort:</strong> Superior multi-chamber insulation.</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check-circle"></i>
                                    <span><strong>Luxury Appearance:</strong> Sleek minimalist profiles with expansive glass views.</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-check-circle"></i>
                                    <span><strong>Sustainable & Recyclable:</strong> 100% eco-friendly and energy-saving fenestration.</span>
                                </li>
                            </ul>

                            <h4 style="font-size: 18px; font-weight: 800; color: #111111; text-transform: uppercase; margin-bottom: 15px;">
                                <i class="fa-solid fa-city" style="color: #ff5f13; margin-right: 8px;"></i> Applications
                            </h4>
                            <div class="catalogue-app-grid">
                                <span class="catalogue-app-item"><i class="fa-solid fa-building-flag"></i> High-rise Buildings</span>
                                <span class="catalogue-app-item"><i class="fa-solid fa-house-chimney-window"></i> Luxury Apartments</span>
                                <span class="catalogue-app-item"><i class="fa-solid fa-hotel"></i> Hotels & Resorts</span>
                                <span class="catalogue-app-item"><i class="fa-solid fa-store"></i> Commercial Complexes</span>
                                <span class="catalogue-app-item"><i class="fa-solid fa-landmark"></i> Institutional Buildings</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Aluminium Alloy Technical Specifications -->
                    <div class="col-lg-6 mb-30">
                        <div class="catalogue-specs-card h-100">
                            <div class="catalogue-alloy-header-badge">
                                <i class="fa-solid fa-flask"></i> Aluminium Alloy Used in DOZO Systems
                            </div>

                            <h5 style="font-size: 16px; font-weight: 800; color: #111111; margin-bottom: 12px;">
                                A. 6063-T6 Architectural Grade Chemical Properties
                            </h5>
                            <table class="catalogue-table">
                                <thead>
                                    <tr>
                                        <th>Element</th>
                                        <th>Percentage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Aluminum (Al)</strong></td>
                                        <td>97 – 99%</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Magnesium (Mg)</strong></td>
                                        <td>0.45 – 0.90%</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Silicon (Si)</strong></td>
                                        <td>0.20 – 0.60%</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Iron (Fe)</strong></td>
                                        <td>Controlled</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Trace Elements</strong></td>
                                        <td>Cu, Mn, Cr, Zn, Ti</td>
                                    </tr>
                                </tbody>
                            </table>

                            <h5 style="font-size: 16px; font-weight: 800; color: #111111; margin-top: 25px; margin-bottom: 12px;">
                                B. 6063-T6 Alloy Physical & Mechanical Properties
                            </h5>
                            <table class="catalogue-table">
                                <thead>
                                    <tr>
                                        <th>Properties</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Tensile Strength</strong></td>
                                        <td>110 – 120 MPa</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Yield Strength</strong></td>
                                        <td>160 – 240 MPa</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Shaping Modern Architecture & Envelope Solution Section End -->




        <!-- DOZO Sub Frame Amended System Section Start -->
        <section class="catalogue-subframe-section section-padding30" id="sub-frame-system">
            <div class="container">
                <!-- Section Header -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-45">
                            <div class="front-text">
                                <h2 class="">Introduced DOZO Sub Frame System</h2>
                            </div>
                            <span class="back-text">SUB FRAME</span>
                            <p style="font-size: 18px; color: #ff5f13; font-weight: 700; margin-top: 8px;">
                                <i class="fa-solid fa-layer-group"></i> Advanced Sub Frame Amended Engineering
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Sub Frame Banner -->
                <div class="catalogue-subframe-banner">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <span class="catalogue-coating-badge">Engineering Innovation</span>
                            <h3>Sub Frame Installation Before Window Fixing</h3>
                            <p>
                                By installing our specialized precision sub frame before masonry and plaster finishing, DOZO ensures flawless alignment, lifetime leak protection, and zero construction damage to finished aluminium frames and glass.
                            </p>
                        </div>
                        <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                            <a href="{{ asset('catelogue.pdf') }}" target="_blank" class="btn header-btn" style="background: #ff5f13; color: #ffffff; padding: 14px 28px; font-weight: 700; border-radius: 6px; display: inline-flex; align-items: center; gap: 8px;">
                                <i class="fa-solid fa-file-pdf"></i> Download Specs PDF
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 9 Sub Frame Advantages Grid -->
                <div class="row">
                    <!-- 1. Faster Installation -->
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="catalogue-benefit-card">
                            <div class="catalogue-benefit-header">
                                <div class="catalogue-benefit-num">01</div>
                                <h4 class="catalogue-benefit-title">Faster Installation</h4>
                            </div>
                            <ul class="catalogue-benefit-list">
                                <li><i class="fa-solid fa-circle-check"></i> <span>Sub frame is fixed <strong>before</strong> masonry/plaster work.</span></li>
                                <li><i class="fa-solid fa-circle-check"></i> <span>Main window frame installed later without disturbing finishes.</span></li>
                                <li><i class="fa-solid fa-circle-check"></i> <span>Significantly reduces total site installation time.</span></li>
                            </ul>
                        </div>
                    </div>

                    <!-- 2. Better Alignment & Leveling -->
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="catalogue-benefit-card">
                            <div class="catalogue-benefit-header">
                                <div class="catalogue-benefit-num">02</div>
                                <h4 class="catalogue-benefit-title">Better Alignment & Leveling</h4>
                            </div>
                            <ul class="catalogue-benefit-list">
                                <li><i class="fa-solid fa-circle-check"></i> <span>Provides a precise reference frame for masonry openings.</span></li>
                                <li><i class="fa-solid fa-circle-check"></i> <span>Maintains exact verticality, level, and squareness.</span></li>
                                <li><i class="fa-solid fa-circle-check"></i> <span>Essential for ultra-smooth sliding shutters & rollers.</span></li>
                            </ul>
                        </div>
                    </div>

                    <!-- 3. Lifetime Leak Proof Window Solution -->
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="catalogue-benefit-card">
                            <div class="catalogue-benefit-header">
                                <div class="catalogue-benefit-num">03</div>
                                <h4 class="catalogue-benefit-title">Lifetime Leak Proof Solution</h4>
                            </div>
                            <ul class="catalogue-benefit-list">
                                <li><i class="fa-solid fa-circle-check"></i> <span>Prevents rainwater seepage at the wall-window junction.</span></li>
                                <li><i class="fa-solid fa-circle-check"></i> <span>Minimizes water infiltration throughout the building's life.</span></li>
                                <li><i class="fa-solid fa-circle-check"></i> <span>Total protection against heavy monsoon seepage.</span></li>
                            </ul>
                        </div>
                    </div>

                    <!-- 4. Protection During Construction -->
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="catalogue-benefit-card">
                            <div class="catalogue-benefit-header">
                                <div class="catalogue-benefit-num">04</div>
                                <h4 class="catalogue-benefit-title">Protection During Construction</h4>
                            </div>
                            <ul class="catalogue-benefit-list">
                                <li><i class="fa-solid fa-circle-check"></i> <span>Main window frame installed after major civil activities.</span></li>
                                <li><i class="fa-solid fa-circle-check"></i> <span>Prevents scratches/dents on finished aluminium profiles.</span></li>
                                <li><i class="fa-solid fa-circle-check"></i> <span>Keeps luxury hardware and glass pristine.</span></li>
                            </ul>
                        </div>
                    </div>

                    <!-- 5. Improved Waterproofing -->
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="catalogue-benefit-card">
                            <div class="catalogue-benefit-header">
                                <div class="catalogue-benefit-num">05</div>
                                <h4 class="catalogue-benefit-title">Improved Waterproofing</h4>
                            </div>
                            <ul class="catalogue-benefit-list">
                                <li><i class="fa-solid fa-circle-check"></i> <span>Creates a controlled interface between wall and window.</span></li>
                                <li><i class="fa-solid fa-circle-check"></i> <span>Allows proper sealing with silicone, PU sealant & membranes.</span></li>
                                <li><i class="fa-solid fa-circle-check"></i> <span>Eliminates water leakage through perimeter joints.</span></li>
                            </ul>
                        </div>
                    </div>

                    <!-- 6. Enhanced Structural Stability -->
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="catalogue-benefit-card">
                            <div class="catalogue-benefit-header">
                                <div class="catalogue-benefit-num">06</div>
                                <h4 class="catalogue-benefit-title">Enhanced Structural Stability</h4>
                            </div>
                            <ul class="catalogue-benefit-list">
                                <li><i class="fa-solid fa-circle-check"></i> <span>Transfers high wind loads directly to the building structure.</span></li>
                                <li><i class="fa-solid fa-circle-check"></i> <span>Engineered for high-rise buildings (wind load up to 3.0 kPa / 3000 Pa).</span></li>
                                <li><i class="fa-solid fa-circle-check"></i> <span>Rock-solid anchor integrity under storm conditions.</span></li>
                            </ul>
                        </div>
                    </div>

                    <!-- 7. Better Acoustic Performance -->
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="catalogue-benefit-card">
                            <div class="catalogue-benefit-header">
                                <div class="catalogue-benefit-num">07</div>
                                <h4 class="catalogue-benefit-title">Better Acoustic Performance</h4>
                            </div>
                            <ul class="catalogue-benefit-list">
                                <li><i class="fa-solid fa-circle-check"></i> <span>Provides an additional barrier between wall and window.</span></li>
                                <li><i class="fa-solid fa-circle-check"></i> <span>Drastically reduces sound transmission through perimeter gaps.</span></li>
                                <li><i class="fa-solid fa-circle-check"></i> <span>Works seamlessly with EPDM gaskets and wool pile seals.</span></li>
                            </ul>
                        </div>
                    </div>

                    <!-- 8. Reduced Site Tolerances -->
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="catalogue-benefit-card">
                            <div class="catalogue-benefit-header">
                                <div class="catalogue-benefit-num">08</div>
                                <h4 class="catalogue-benefit-title">Reduced Site Tolerances</h4>
                            </div>
                            <ul class="catalogue-benefit-list">
                                <li><i class="fa-solid fa-circle-check"></i> <span>Accommodates construction variations in RCC & masonry openings.</span></li>
                                <li><i class="fa-solid fa-circle-check"></i> <span>Allows micro-adjustment during precision installation.</span></li>
                                <li><i class="fa-solid fa-circle-check"></i> <span>Ensures uniform window performance throughout the project.</span></li>
                            </ul>
                        </div>
                    </div>

                    <!-- 9. Easier Maintenance & Replacement -->
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="catalogue-benefit-card">
                            <div class="catalogue-benefit-header">
                                <div class="catalogue-benefit-num">09</div>
                                <h4 class="catalogue-benefit-title">Easier Maintenance & Replacement</h4>
                            </div>
                            <ul class="catalogue-benefit-list">
                                <li><i class="fa-solid fa-circle-check"></i> <span>Window frames can be replaced while retaining the sub frame.</span></li>
                                <li><i class="fa-solid fa-circle-check"></i> <span>Prevents plaster or finished wall damage during upgrades.</span></li>
                                <li><i class="fa-solid fa-circle-check"></i> <span>Reduces long-term lifecycle maintenance costs.</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- DOZO Sub Frame Amended System Section End -->




        <!-- DURACOAT & Foam-Filled Insulation Profiles Section Start -->
        <section class="catalogue-coating-section section-padding30" id="coating-and-insulation">
            <div class="container">
                <div class="row">
                    <!-- Left: DURACOAT Super Durable Powder Coating -->
                    <div class="col-lg-6 mb-30">
                        <div class="catalogue-coating-card">
                            <span class="catalogue-coating-badge">Surface Treatment</span>
                            <h3 class="catalogue-coating-title">DURACOAT Powder Coating</h3>
                            <div class="catalogue-coating-subtitle">Super Durable In-house Manufactured Coating System</div>
                            
                            <div class="catalogue-spec-pill-box">
                                <p><i class="fa-solid fa-layer-group" style="color: #ff5f13; margin-right: 8px;"></i> Coating Thickness: <strong>65 – 80 Microns</strong></p>
                            </div>

                            <ul class="catalogue-feature-list" style="background: transparent;">
                                <li style="color: #dddddd; border-bottom: 1px solid rgba(255,255,255,0.08);">
                                    <i class="fa-solid fa-shield-halved"></i>
                                    <span><strong>Super Durable Architectural Grade:</strong> Formulated to withstand severe UV exposure and harsh atmospheric conditions.</span>
                                </li>
                                <li style="color: #dddddd; border-bottom: 1px solid rgba(255,255,255,0.08);">
                                    <i class="fa-solid fa-award"></i>
                                    <span><strong>15 Years Finish Warranty:</strong> Long-lasting color retention and gloss protection without fading or chalking.</span>
                                </li>
                                <li style="color: #dddddd; border-bottom: none;">
                                    <i class="fa-solid fa-palette"></i>
                                    <span><strong>Custom Architectural Finishes:</strong> Available in a wide variety of RAL shades, textures, and anodized looks.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Right: Foam Filled Window Profiles -->
                    <div class="col-lg-6 mb-30">
                        <div class="catalogue-coating-card">
                            <span class="catalogue-coating-badge">Thermal Insulation</span>
                            <h3 class="catalogue-coating-title">Foam Filled Window Profiles</h3>
                            <div class="catalogue-coating-subtitle">Thermal Insulation in Shutter Windows & Doors</div>
                            
                            <div class="catalogue-spec-pill-box">
                                <p><i class="fa-solid fa-temperature-arrow-down" style="color: #ff5f13; margin-right: 8px;"></i> Maximum Energy Efficiency & U-Value Optimization</p>
                            </div>

                            <ul class="catalogue-feature-list" style="background: transparent;">
                                <li style="color: #dddddd; border-bottom: 1px solid rgba(255,255,255,0.08);">
                                    <i class="fa-solid fa-snowflake"></i>
                                    <span><strong>Reduces Internal Convection:</strong> Foam core stops air movement inside multi-chamber aluminium cavities.</span>
                                </li>
                                <li style="color: #dddddd; border-bottom: 1px solid rgba(255,255,255,0.08);">
                                    <i class="fa-solid fa-chart-line"></i>
                                    <span><strong>Improves U-Value:</strong> Significantly lower heat transfer rates, cutting air conditioning electrical bills.</span>
                                </li>
                                <li style="color: #dddddd; border-bottom: 1px solid rgba(255,255,255,0.08);">
                                    <i class="fa-solid fa-house-chimney"></i>
                                    <span><strong>Superior Thermal Comfort:</strong> Keeps indoor environments consistently cool in summer and cozy in winter.</span>
                                </li>
                                <li style="color: #dddddd; border-bottom: none;">
                                    <i class="fa-solid fa-droplet-slash"></i>
                                    <span><strong>Reduces Condensation Risk:</strong> Prevents interior surface moisture and mildew buildup.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- DURACOAT & Foam-Filled Insulation Profiles Section End -->




        <!-- Window Façade & Glass Performance Matrix Section Start -->
        <section class="catalogue-facade-section section-padding30" id="facade-performance">
            <div class="container">
                <!-- Section Header -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-45">
                            <div class="front-text">
                                <h2 class="">Window Façade Engineering</h2>
                            </div>
                            <span class="back-text">GLAZING</span>
                            <p style="font-size: 18px; color: #ff5f13; font-weight: 700; margin-top: 8px;">
                                <i class="fa-solid fa-sun"></i> Beyond Structural Strength – Daylight, Thermal & Acoustic Performance
                            </p>
                            <p style="font-size: 15px; color: #555555; max-width: 900px; margin-top: 10px; line-height: 1.6;">
                                Beyond structural strength and wind-load resistance, modern window façade design plays a critical role in enhancing occupant comfort, energy efficiency, and indoor environmental quality.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 4 Façade Performance Pillars -->
                <div class="row mb-35">
                    <!-- 1. Daylight Optimization -->
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-25">
                        <div class="catalogue-benefit-card">
                            <div class="catalogue-benefit-header">
                                <div class="catalogue-benefit-num"><i class="fa-solid fa-sun" style="font-size: 16px;"></i></div>
                                <h4 class="catalogue-benefit-title">Daylight Optimization</h4>
                            </div>
                            <ul class="catalogue-benefit-list">
                                <li><i class="fa-solid fa-circle-check"></i> <span>Maximizes natural daylight penetration.</span></li>
                                <li><i class="fa-solid fa-circle-check"></i> <span>Reduces artificial lighting & saves power.</span></li>
                                <li><i class="fa-solid fa-circle-check"></i> <span>Tailored Visible Light Transmittance (VLT).</span></li>
                            </ul>
                        </div>
                    </div>

                    <!-- 2. Solar Heat Control -->
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-25">
                        <div class="catalogue-benefit-card">
                            <div class="catalogue-benefit-header">
                                <div class="catalogue-benefit-num"><i class="fa-solid fa-temperature-half" style="font-size: 16px;"></i></div>
                                <h4 class="catalogue-benefit-title">Solar Heat Control</h4>
                            </div>
                            <ul class="catalogue-benefit-list">
                                <li><i class="fa-solid fa-circle-check"></i> <span>Reduces solar heat gain while keeping daylight.</span></li>
                                <li><i class="fa-solid fa-circle-check"></i> <span>Low-E glass blocks solar radiation ingress.</span></li>
                                <li><i class="fa-solid fa-circle-check"></i> <span>Lowers air-conditioning energy loads.</span></li>
                            </ul>
                        </div>
                    </div>

                    <!-- 3. Occupant Comfort & Sustainability -->
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-25">
                        <div class="catalogue-benefit-card">
                            <div class="catalogue-benefit-header">
                                <div class="catalogue-benefit-num"><i class="fa-solid fa-leaf" style="font-size: 16px;"></i></div>
                                <h4 class="catalogue-benefit-title">Comfort & Eco-Living</h4>
                            </div>
                            <ul class="catalogue-benefit-list">
                                <li><i class="fa-solid fa-circle-check"></i> <span>Balanced light, heat, and sound control.</span></li>
                                <li><i class="fa-solid fa-circle-check"></i> <span>Cuts lifetime building operating costs.</span></li>
                                <li><i class="fa-solid fa-circle-check"></i> <span>Harmonious architectural aesthetics.</span></li>
                            </ul>
                        </div>
                    </div>

                    <!-- 4. Acoustic Performance -->
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-25">
                        <div class="catalogue-benefit-card">
                            <div class="catalogue-benefit-header">
                                <div class="catalogue-benefit-num"><i class="fa-solid fa-volume-low" style="font-size: 16px;"></i></div>
                                <h4 class="catalogue-benefit-title">Acoustic Shield</h4>
                            </div>
                            <ul class="catalogue-benefit-list">
                                <li><i class="fa-solid fa-circle-check"></i> <span>Effective insulation from outside noise.</span></li>
                                <li><i class="fa-solid fa-circle-check"></i> <span>Double & laminated glass cuts urban noise.</span></li>
                                <li><i class="fa-solid fa-circle-check"></i> <span>Creates a tranquil, healthy indoor space.</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Glass Performance Matrix Section -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-25">
                            <div class="front-text">
                                <h3 style="font-size: 24px; font-weight: 800; color: #111111; text-transform: uppercase;">
                                    <i class="fa-solid fa-table-cells" style="color: #ff5f13; margin-right: 8px;"></i> Glass Performance Specifications & Ranges
                                </h3>
                            </div>
                        </div>
                    </div>

                    <!-- Glass A: 20 MM DGU -->
                    <div class="col-lg-6 mb-30">
                        <div class="catalogue-glass-matrix-card">
                            <div class="catalogue-glass-header-badge">
                                <i class="fa-solid fa-layer-group"></i> A. 20 MM DGU (5mm Low E + 10A + 5mm Clear)
                            </div>
                            <div class="table-responsive">
                                <table class="catalogue-glass-table">
                                    <thead>
                                        <tr>
                                            <th>Metric</th>
                                            <th>Typical Value</th>
                                            <th>Ideal Scenario</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>VLT (Visible Light)</strong></td>
                                            <td><span class="metric-val">~70% – 75%</span></td>
                                            <td>High natural daylighting; interior stays bright & vibrant.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>SHGC (Solar Heat Gain)</strong></td>
                                            <td><span class="metric-val">~0.35 – 0.42</span></td>
                                            <td>Ideal for warm/mixed climates; Low E reflects sun heat.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>R-Factor (Insulation)</strong></td>
                                            <td><span class="metric-val">~R 3.5 – R 3.8</span></td>
                                            <td>10 mm air gap delivers optimal thermal resistance.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>U-Factor (Heat Loss)</strong></td>
                                            <td><span class="metric-val">~1.5 – 1.6 W/m²K</span></td>
                                            <td>Low conductive heat transfer across glass.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Sound Reduction</strong></td>
                                            <td><span class="metric-val">~30 – 32 dB</span></td>
                                            <td>Cuts ~50% of external noise.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Glass B: 22 MM DGU -->
                    <div class="col-lg-6 mb-30">
                        <div class="catalogue-glass-matrix-card">
                            <div class="catalogue-glass-header-badge">
                                <i class="fa-solid fa-layer-group"></i> B. 22 MM DGU (5mm Low E + 12A + 5mm Clear)
                            </div>
                            <div class="table-responsive">
                                <table class="catalogue-glass-table">
                                    <thead>
                                        <tr>
                                            <th>Metric</th>
                                            <th>Typical Value</th>
                                            <th>Ideal Scenario</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>VLT (Visible Light)</strong></td>
                                            <td><span class="metric-val">~70% – 75%</span></td>
                                            <td>High natural daylighting with clear crisp views.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>SHGC (Solar Heat Gain)</strong></td>
                                            <td><span class="metric-val">~0.35 – 0.42</span></td>
                                            <td>Warm or mixed climates; superior solar protection.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>R-Factor (Insulation)</strong></td>
                                            <td><span class="metric-val">~R 3.9 – R 4.2</span></td>
                                            <td>Wider 12 mm air gap provides enhanced insulation.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>U-Factor (Heat Loss)</strong></td>
                                            <td><span class="metric-val">~1.3 – 1.4 W/m²K</span></td>
                                            <td>Lower heat transmission for high energy savings.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Sound Reduction</strong></td>
                                            <td><span class="metric-val">~32 – 34 dB</span></td>
                                            <td>Cuts ~50% of external urban noise.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Glass C: 13.52 MM Laminated Glass -->
                    <div class="col-lg-6 mb-30">
                        <div class="catalogue-glass-matrix-card">
                            <div class="catalogue-glass-header-badge">
                                <i class="fa-solid fa-shield-halved"></i> C. 13.52 MM Laminated (6mm Low-E + 1.52 PVB + 6mm Clear)
                            </div>
                            <div class="table-responsive">
                                <table class="catalogue-glass-table">
                                    <thead>
                                        <tr>
                                            <th>Metric</th>
                                            <th>Typical Value</th>
                                            <th>Ideal Scenario</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>U-Value</strong></td>
                                            <td><span class="metric-val">~5.5 – 5.7 W/m²K</span></td>
                                            <td>Standard monolithic laminated safety glass value.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>SHGC</strong></td>
                                            <td><span class="metric-val">~0.50 – 0.70</span></td>
                                            <td>Fraction of incident solar radiation admitted.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>VLT (Visible Light)</strong></td>
                                            <td><span class="metric-val">~65% – 78%</span></td>
                                            <td>Percentage of visible light passing through.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Light-to-Solar Gain (LSG)</strong></td>
                                            <td><span class="metric-val">~1.15 – 1.35</span></td>
                                            <td>Higher ratio provides more light with less heat.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Sound Reduction</strong></td>
                                            <td><span class="metric-val">~37 – 38 dB</span></td>
                                            <td>Acoustic PVB cuts ~60% of external noise.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Glass D: DGU Laminated (12mm Gap) -->
                    <div class="col-lg-6 mb-30">
                        <div class="catalogue-glass-matrix-card">
                            <div class="catalogue-glass-header-badge">
                                <i class="fa-solid fa-shield-halved"></i> D. DGU Laminated (6mm Low-E+1.52 PVB+6mm | 12A | 6mm)
                            </div>
                            <div class="table-responsive">
                                <table class="catalogue-glass-table">
                                    <thead>
                                        <tr>
                                            <th>Metric</th>
                                            <th>Typical Value</th>
                                            <th>Ideal Scenario</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>U-Value</strong></td>
                                            <td><span class="metric-val">~1.4 – 1.8 W/m²K</span></td>
                                            <td>Superior insulation for ultra-stable indoor climate.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>SHGC</strong></td>
                                            <td><span class="metric-val">~0.30 – 0.45</span></td>
                                            <td>High solar control; perfect for hot sunny climates.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>VLT (Visible Light)</strong></td>
                                            <td><span class="metric-val">~50% – 65%</span></td>
                                            <td>Balanced daylighting with neutral aesthetic tint.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Shading Coeff (SC)</strong></td>
                                            <td><span class="metric-val">~0.35 – 0.50</span></td>
                                            <td>Strong shading against severe direct sun glare.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Sound Reduction</strong></td>
                                            <td><span class="metric-val">~41 – 44 dB</span></td>
                                            <td>Premium cutoff: blocks ~65% of exterior noise.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Glass E & F: 6MM Clear & 6MM Low-E Glass -->
                    <div class="col-lg-6 mb-30">
                        <div class="catalogue-glass-matrix-card">
                            <div class="catalogue-glass-header-badge">
                                <i class="fa-solid fa-window-maximize"></i> E. 6 MM Clear Glass Performance
                            </div>
                            <div class="table-responsive">
                                <table class="catalogue-glass-table">
                                    <thead>
                                        <tr>
                                            <th>Metric</th>
                                            <th>Typical Value</th>
                                            <th>Ideal Scenario</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>U-Value</strong></td>
                                            <td><span class="metric-val">~1.40 – 1.80 W/m²K</span></td>
                                            <td>Standard thermal conductive insulation.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>R-Factor</strong></td>
                                            <td><span class="metric-val">~0.55 – 0.71 m²K/W</span></td>
                                            <td>Thermal insulation resistance.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>SHGC</strong></td>
                                            <td><span class="metric-val">~0.25 – 0.45</span></td>
                                            <td>Effective solar control blocking summer heat.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>VLT</strong></td>
                                            <td><span class="metric-val">~50% – 72%</span></td>
                                            <td>Offices & North façades (bright, naturally lit).</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Sound Reduction</strong></td>
                                            <td><span class="metric-val">~26 dB</span></td>
                                            <td>Standard acoustic cutoff (40% external noise).</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-30">
                        <div class="catalogue-glass-matrix-card">
                            <div class="catalogue-glass-header-badge">
                                <i class="fa-solid fa-window-maximize"></i> F. 6 MM Low-E Glass Performance
                            </div>
                            <div class="table-responsive">
                                <table class="catalogue-glass-table">
                                    <thead>
                                        <tr>
                                            <th>Metric</th>
                                            <th>Typical Value</th>
                                            <th>Ideal Scenario</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>U-Value</strong></td>
                                            <td><span class="metric-val">~1.40 – 1.80 W/m²K</span></td>
                                            <td>Keeps heat inside during winter / cool in summer.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>R-Factor</strong></td>
                                            <td><span class="metric-val">~0.55 – 0.71 m²K/W</span></td>
                                            <td>Thermal barrier efficiency.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>SHGC</strong></td>
                                            <td><span class="metric-val">~0.25 – 0.45</span></td>
                                            <td>Hot/Tropical climates (blocks summer solar heat).</td>
                                        </tr>
                                        <tr>
                                            <td><strong>VLT</strong></td>
                                            <td><span class="metric-val">~50% – 72%</span></td>
                                            <td>Bright, naturally lit spaces with Low-E protection.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Sound Reduction</strong></td>
                                            <td><span class="metric-val">~26 dB</span></td>
                                            <td>Acoustic insulation (40% external noise).</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Window Façade & Glass Performance Matrix Section End -->




        <!-- DOZO Aluminium System vs uPVC Comparison Section Start -->
        <section class="catalogue-comparison-section section-padding30" id="aluminium-vs-upvc">
            <div class="container">
                <!-- Section Header -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-45">
                            <div class="front-text">
                                <h2 class="">Advantage & Comparison</h2>
                            </div>
                            <span class="back-text">DOZO vs uPVC</span>
                            <p style="font-size: 18px; color: #ff5f13; font-weight: 700; margin-top: 8px;">
                                <i class="fa-solid fa-code-compare"></i> DOZO Aluminium System (with Insulated Core) vs uPVC Windows
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Comparison Table -->
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="catalogue-comp-table">
                                <thead>
                                    <tr>
                                        <th class="th-feature">Feature</th>
                                        <th class="th-dozo"><i class="fa-solid fa-trophy" style="margin-right: 6px;"></i> Our Aluminium Windows (with Insulated Core)</th>
                                        <th class="th-upvc">uPVC Windows</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="td-feature">Strength & Durability</td>
                                        <td class="td-dozo"><i class="fa-solid fa-circle-check"></i> High durability, effortlessly supports large glass panels & slim profiles</td>
                                        <td class="td-upvc"><i class="fa-solid fa-triangle-exclamation"></i> Less strong, prone to sagging and warping over time</td>
                                    </tr>
                                    <tr>
                                        <td class="td-feature">Fire Resistance</td>
                                        <td class="td-dozo"><i class="fa-solid fa-circle-check"></i> Non-combustible, fire-resistant, does not release toxic fumes</td>
                                        <td class="td-upvc"><i class="fa-solid fa-triangle-exclamation"></i> Can melt under heat and release hazardous toxic gases</td>
                                    </tr>
                                    <tr>
                                        <td class="td-feature">Thermal Insulation</td>
                                        <td class="td-dozo"><i class="fa-solid fa-circle-check"></i> Advanced thermal barrier inside hollow multi-cavity sections</td>
                                        <td class="td-upvc"><i class="fa-solid fa-circle-dot"></i> Decent insulation but lower overall structural efficiency</td>
                                    </tr>
                                    <tr>
                                        <td class="td-feature">Noise Reduction</td>
                                        <td class="td-dozo"><i class="fa-solid fa-circle-check"></i> Excellent acoustic soundproofing with insulated core (up to 45 dB)</td>
                                        <td class="td-upvc"><i class="fa-solid fa-circle-dot"></i> Moderate to good soundproofing depending on sealing</td>
                                    </tr>
                                    <tr>
                                        <td class="td-feature">Maintenance</td>
                                        <td class="td-dozo"><i class="fa-solid fa-circle-check"></i> Ultra-low maintenance, weatherproof, zero rot or discoloration</td>
                                        <td class="td-upvc"><i class="fa-solid fa-triangle-exclamation"></i> Requires constant care to prevent yellowing & UV discoloration</td>
                                    </tr>
                                    <tr>
                                        <td class="td-feature">Eco-Friendliness</td>
                                        <td class="td-dozo"><i class="fa-solid fa-circle-check"></i> 100% infinitely recyclable, highly sustainable green building choice</td>
                                        <td class="td-upvc"><i class="fa-solid fa-triangle-exclamation"></i> Non-biodegradable polymer with limited recycling cycles</td>
                                    </tr>
                                    <tr>
                                        <td class="td-feature">Customization</td>
                                        <td class="td-dozo"><i class="fa-solid fa-circle-check"></i> Available in unlimited RAL colors, textures, wood grains & anodized looks</td>
                                        <td class="td-upvc"><i class="fa-solid fa-triangle-exclamation"></i> Limited color and laminate foil options</td>
                                    </tr>
                                    <tr>
                                        <td class="td-feature">Health & Safety</td>
                                        <td class="td-dozo"><i class="fa-solid fa-circle-check"></i> Lead-free, non-toxic materials (IS 16610:2017), prevents mold growth</td>
                                        <td class="td-upvc"><i class="fa-solid fa-triangle-exclamation"></i> May contain toxic lead/cadmium stabilizers, prone to mold</td>
                                    </tr>
                                    <tr>
                                        <td class="td-feature">Indoor Air Quality</td>
                                        <td class="td-dozo"><i class="fa-solid fa-circle-check"></i> Low VOC emissions (IS 4833:1993), ensures pure & healthy indoor air</td>
                                        <td class="td-upvc"><i class="fa-solid fa-triangle-exclamation"></i> Some polymers release volatile VOCs affecting air quality</td>
                                    </tr>
                                    <tr>
                                        <td class="td-feature">Hygiene & Allergen Prevention</td>
                                        <td class="td-dozo"><i class="fa-solid fa-circle-check"></i> Non-porous hygienic surface prevents bacteria, dust and mold buildup</td>
                                        <td class="td-upvc"><i class="fa-solid fa-triangle-exclamation"></i> Can trap static dust and allergens causing respiratory issues</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- DOZO Aluminium System vs uPVC Comparison Section End -->




        <!-- Tested Parameters & Global Standards Section Start -->
        <section class="catalogue-testing-section section-padding30" id="tested-parameters">
            <div class="container">
                <!-- Section Header -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-45">
                            <div class="front-text">
                                <h2 class="">Tested Parameters</h2>
                            </div>
                            <span class="back-text">STANDARDS</span>
                            <p style="font-size: 18px; color: #ff5f13; font-weight: 700; margin-top: 8px;">
                                <i class="fa-solid fa-certificate"></i> Tested Parameters & Compliance of DOZO System Windows
                            </p>
                            <p style="font-size: 15px; color: #555555; max-width: 900px; margin-top: 10px; line-height: 1.6;">
                                Every DOZO aluminium system window is rigorously tested against Indian (IS), European (EN), and International (ISO, ASTM) standards for maximum structural reliability and lifespan.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Testing Standards Table -->
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="catalogue-test-table">
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Testing Standard / Method</th>
                                        <th>Performance Benchmark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="td-param"><i class="fa-solid fa-wind" style="color: #ff5f13; margin-right: 8px;"></i> Wind Load Resistance</td>
                                        <td class="td-standard">IS 875 (Part 3):2015</td>
                                        <td class="td-benchmark">Designed to withstand high wind pressures (up to 3.0 kPa), ensuring complete structural integrity in high-rises.</td>
                                    </tr>
                                    <tr>
                                        <td class="td-param"><i class="fa-solid fa-temperature-arrow-down" style="color: #ff5f13; margin-right: 8px;"></i> Thermal Insulation (U-value)</td>
                                        <td class="td-standard">ISO 10077-2</td>
                                        <td class="td-benchmark">Low U-value for superior indoor heat retention in winter and exceptional cooling efficiency in summer.</td>
                                    </tr>
                                    <tr>
                                        <td class="td-param"><i class="fa-solid fa-volume-xmark" style="color: #ff5f13; margin-right: 8px;"></i> Sound Insulation</td>
                                        <td class="td-standard">ISO 10140 / ASTM E90</td>
                                        <td class="td-benchmark">Up to 45 dB noise reduction for an ultra-peaceful, quiet indoor living environment.</td>
                                    </tr>
                                    <tr>
                                        <td class="td-param"><i class="fa-solid fa-droplet" style="color: #ff5f13; margin-right: 8px;"></i> Water Tightness</td>
                                        <td class="td-standard">EN 1027 / IS 4021</td>
                                        <td class="td-benchmark">Prevents water infiltration during extreme heavy rainfall and monsoons, ensuring 100% leak-proof performance.</td>
                                    </tr>
                                    <tr>
                                        <td class="td-param"><i class="fa-solid fa-shield-halved" style="color: #ff5f13; margin-right: 8px;"></i> Air Permeability</td>
                                        <td class="td-standard">EN 1026 / ASTM E283</td>
                                        <td class="td-benchmark">High airtightness, eliminating drafts, preventing energy loss, and keeping external dust and pollution out.</td>
                                    </tr>
                                    <tr>
                                        <td class="td-param"><i class="fa-solid fa-hammer" style="color: #ff5f13; margin-right: 8px;"></i> Impact Resistance</td>
                                        <td class="td-standard">IS 2380 / EN 12600</td>
                                        <td class="td-benchmark">Tested for severe impact strength to prevent profile deformation and breakage under external forces.</td>
                                    </tr>
                                    <tr>
                                        <td class="td-param"><i class="fa-solid fa-fire-extinguisher" style="color: #ff5f13; margin-right: 8px;"></i> Fire Resistance</td>
                                        <td class="td-standard">IS 3809 / EN 13501-1</td>
                                        <td class="td-benchmark">Non-combustible architectural aluminium with class-leading fire-resistant safety properties.</td>
                                    </tr>
                                    <tr>
                                        <td class="td-param"><i class="fa-solid fa-sun" style="color: #ff5f13; margin-right: 8px;"></i> Corrosion & Weather Resistance</td>
                                        <td class="td-standard">IS 5523 / ASTM B117</td>
                                        <td class="td-benchmark">Resistant to coastal humidity, salt spray, harsh UV radiation, and extreme fluctuating climate conditions.</td>
                                    </tr>
                                    <tr>
                                        <td class="td-param"><i class="fa-solid fa-arrows-rotate" style="color: #ff5f13; margin-right: 8px;"></i> Durability & Lifecycle Testing</td>
                                        <td class="td-standard">IS 12817 / EN 1191</td>
                                        <td class="td-benchmark">30,000+ open-close cycles verified to guarantee smooth and trouble-free long-term operation.</td>
                                    </tr>
                                    <tr>
                                        <td class="td-param"><i class="fa-solid fa-layer-group" style="color: #ff5f13; margin-right: 8px;"></i> Glass Strength & Safety</td>
                                        <td class="td-standard">IS 2553 / EN 12150</td>
                                        <td class="td-benchmark">Fitted with toughened and laminated safety glass for enhanced burglar resistance and occupant security.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Corporate Credentials Callout Card -->
                <div class="row">
                    <div class="col-12">
                        <div class="catalogue-corp-card">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <span class="catalogue-corp-badge">Official Brand & Engineering Credentials</span>
                                    <h3 style="font-size: 24px; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 8px; font-family: 'Barlow', sans-serif;">
                                        DOZO Façade & Fenestration System Windows
                                    </h3>
                                    <p style="color: #ff8c42; font-size: 16px; font-weight: 700; margin-bottom: 12px;">
                                        A Brand of: RANIHATI CONSTRUCTION PVT. LTD. <span style="font-size: 13px; color: #dddddd; font-weight: 400;">(Engineers cum Contractor)</span>
                                    </p>
                                    <p style="color: #cccccc; font-size: 14px; margin-bottom: 0;">
                                        <i class="fa-solid fa-location-dot" style="color: #ff5f13; margin-right: 6px;"></i> Mallick Bagan, Howrah, West Bengal, India, 711322 &nbsp;|&nbsp; 
                                        <i class="fa-solid fa-phone" style="color: #ff5f13; margin-right: 6px;"></i> +91 9831103565 / +91 90885 11511 &nbsp;|&nbsp; 
                                        <i class="fa-solid fa-envelope" style="color: #ff5f13; margin-right: 6px;"></i> info@rconpl.in / arif@rconpl.in
                                    </p>
                                </div>
                                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                                    <a href="{{ asset('catelogue.pdf') }}" target="_blank" class="btn header-btn" style="background: #ff5f13; color: #ffffff; padding: 14px 28px; font-weight: 700; border-radius: 6px; display: inline-flex; align-items: center; gap: 8px;">
                                        <i class="fa-solid fa-file-pdf"></i> Download 2026 Catalogue
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Tested Parameters & Global Standards Section End -->


















        <!-- Testimonial Start -->
        <div class="testimonial-area t-bg testimonial-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle6 mb-50">
                            <div class="front-text">
                                <h2 class="">Testimonial</h2>
                            </div>
                            <span class="back-text">Feedback</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-10 col-lg-11 col-md-10 offset-xl-1">
                        <div class="h1-testimonial-active">

                            @foreach($testimonials as $testimonial)
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption">
                                    <div class="testimonial-top-cap">
                                        <!-- SVG icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="86px"
                                            height="63px">
                                            <path fill-rule="evenodd" stroke-width="1px" stroke="rgb(255, 95, 19)" fill-opacity="0"
                                                fill="rgb(0, 0, 0)"
                                                d="M82.623,59.861 L48.661,59.861 L48.661,25.988 L59.982,3.406 L76.963,3.406 L65.642,25.988 L82.623,25.988 L82.623,59.861 ZM3.377,25.988 L14.698,3.406 L31.679,3.406 L20.358,25.988 L37.340,25.988 L37.340,59.861 L3.377,59.861 L3.377,25.988 Z" />
                                        </svg>
                                        <p>
                                            {{$testimonial->t_feedback}}
                                        </p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                        <div class="founder-text">
                                            <span>{{$testimonial->t_name}}</span>
                                            <p>{{$testimonial->t_prof}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->











        <!-- Blog latest News Area start -->
        <div class="latest-news-area section-padding30" id="blogs">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Section Title -->
                        <div class="section-tittle section-tittle7 mb-40">
                            <div class="front-text">
                                <h2 class="">Latest News & Insights</h2>
                            </div>
                            <span class="back-text">OUR BLOGS</span>
                            <p style="color: #ff8c42; font-size: 16px; font-weight: 700; margin-top: 8px;">
                                Expert Articles on Aluminium Windows, Façade Engineering & Fenestration Trends
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row latest-news-active">

                    @foreach($blogs as $blog)
                    <div class="col-xl-6 col-lg-6 col-md-6 px-3">
                        <!-- single-news -->
                        <div class="single-news mb-30">
                            <div class="news-img">
                                <img src="{{ asset('storage/' . $blog->b_img) }}" alt="{{ $blog->b_title }}" style="height: 270px; width: 100%; object-fit: cover;" />
                                <div class="news-date text-center">
                                    <span>{{$blog->b_date}}</span>
                                </div>
                            </div>
                            <div class="news-caption">
                                <ul class="david-info">
                                    <li><i class="fa-solid fa-tag" style="color: #ff5f13;"></i> &nbsp; {{$blog->b_qt}}</li>
                                </ul>
                                <h2>
                                    <a href="{{ url('/blog/' . ($blog->slug ?? $blog->id)) }}">{{$blog->b_title}}</a>
                                </h2>
                                <p style="font-size: 14px; color: #666666; line-height: 1.5; margin-bottom: 15px;">
                                    {{ Str::limit($blog->b_desc, 100) }}
                                </p>
                                <a href="{{ url('/blog/' . ($blog->slug ?? $blog->id)) }}" class="d-btn">Read more <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Blog latest News Area End -->


















@endsection
