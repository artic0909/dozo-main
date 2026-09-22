@extends('frontend.layouts.app')

@section('title', 'Annual Maintenance Contract (AMC) & Façade Care | DOZO')

@section('styles')
<style>
    /* ==========================================================================
       Modern AMC Breadcrumb Header (No BG Image)
       ========================================================================== */
    .amc-header-banner {
        background: linear-gradient(135deg, #0d0f12 0%, #171a1f 50%, #20242b 100%);
        padding: 175px 0 50px 0;
        position: relative;
        border-bottom: 3px solid #ff5f13;
        overflow: hidden;
    }

    .amc-header-banner::after {
        content: '';
        position: absolute;
        bottom: -60px;
        right: -60px;
        width: 320px;
        height: 320px;
        background: radial-gradient(circle, rgba(255, 95, 19, 0.12) 0%, rgba(0, 0, 0, 0) 70%);
        pointer-events: none;
    }

    @media (max-width: 991px) {
        .amc-header-banner {
            padding: 130px 0 40px 0;
        }
    }

    .amc-header-banner .breadcrumb-nav {
        margin-bottom: 12px;
    }

    .amc-header-banner .breadcrumb-nav ol {
        background: transparent;
        padding: 0;
        margin: 0;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 8px;
    }

    .amc-header-banner .breadcrumb-nav li {
        font-size: 14px;
        color: #9ea3a8;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
    }

    .amc-header-banner .breadcrumb-nav li a {
        color: #ff5f13;
        transition: color 0.2s;
    }

    .amc-header-banner .breadcrumb-nav li a:hover {
        color: #ffffff;
    }

    .amc-header-banner .breadcrumb-nav li::after {
        content: "/";
        margin-left: 8px;
        color: #555c63;
    }

    .amc-header-banner .breadcrumb-nav li:last-child::after {
        content: "";
    }

    .amc-header-banner .breadcrumb-nav li.active {
        color: #ffffff;
        font-weight: 600;
    }

    .amc-header-banner h1 {
        color: #ffffff;
        font-size: 34px;
        font-weight: 800;
        line-height: 1.3;
        margin-bottom: 12px;
        letter-spacing: -0.5px;
    }

    .amc-header-banner p {
        color: #b8bec5;
        font-size: 15px;
        max-width: 850px;
        margin-bottom: 18px;
        line-height: 1.6;
    }

    .amc-header-badges {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 15px;
    }

    .amc-badge-pill {
        background: rgba(255, 95, 19, 0.12);
        color: #ff7b39;
        border: 1px solid rgba(255, 95, 19, 0.35);
        padding: 6px 14px;
        border-radius: 20px;
        font-size: 13px;
        font-weight: 700;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    /* ==========================================================================
       Full-Width AMC Multi-Step Form Styling
       ========================================================================== */
    .amc-form-section {
        background: #f4f6f9;
        padding: 50px 0 60px 0;
    }

    .amc-form-card {
        background: #ffffff;
        border-radius: 16px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 10px 35px rgba(0, 0, 0, 0.05);
        padding: 40px 45px;
    }

    @media (max-width: 767px) {
        .amc-form-card {
            padding: 25px 20px;
        }
    }

    /* Custom Progress Steps */
    .amc-step-wizard {
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
        margin-bottom: 40px;
        padding: 0 20px;
    }

    .amc-step-wizard::before {
        content: '';
        position: absolute;
        top: 20px;
        left: 50px;
        right: 50px;
        height: 3px;
        background: #e2e8f0;
        z-index: 1;
    }

    .amc-step-item {
        position: relative;
        z-index: 2;
        text-align: center;
        background: #ffffff;
        padding: 0 10px;
        cursor: default;
    }

    .amc-step-circle {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        background: #ffffff;
        border: 2px solid #cbd5e1;
        color: #64748b;
        font-weight: 700;
        font-size: 15px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 8px;
        transition: all 0.25s ease;
    }

    .amc-step-label {
        font-size: 13.5px;
        font-weight: 700;
        color: #64748b;
        display: block;
        transition: color 0.25s ease;
    }

    .amc-step-item.active .amc-step-circle {
        background: #ff5f13;
        border-color: #ff5f13;
        color: #ffffff;
        box-shadow: 0 0 0 4px rgba(255, 95, 19, 0.2);
    }

    .amc-step-item.active .amc-step-label {
        color: #ff5f13;
        font-weight: 800;
    }

    .amc-step-item.completed .amc-step-circle {
        background: #111111;
        border-color: #111111;
        color: #ffffff;
    }

    .amc-step-item.completed .amc-step-label {
        color: #111111;
    }

    @media (max-width: 575px) {
        .amc-step-wizard {
            padding: 0;
        }
        .amc-step-label {
            font-size: 11px;
        }
        .amc-step-circle {
            width: 34px;
            height: 34px;
            font-size: 13px;
        }
        .amc-step-wizard::before {
            top: 17px;
            left: 25px;
            right: 25px;
        }
    }

    /* Panels & Inputs */
    .amc-panel {
        display: none;
        animation: amcFadeIn 0.35s ease;
    }

    .amc-panel.active {
        display: block;
    }

    @keyframes amcFadeIn {
        from {
            opacity: 0;
            transform: translateY(8px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .amc-form-card .form-label {
        font-size: 14px;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 6px;
    }

    .amc-form-card .form-control,
    .amc-form-card .form-select {
        height: 48px;
        border-radius: 8px;
        border: 1.5px solid #cbd5e1;
        font-size: 14.5px;
        color: #1e293b;
        padding: 10px 15px;
        transition: border-color 0.2s, box-shadow 0.2s;
    }

    .amc-form-card textarea.form-control {
        height: auto;
    }

    .amc-form-card .form-control:focus,
    .amc-form-card .form-select:focus {
        border-color: #ff5f13;
        box-shadow: 0 0 0 3px rgba(255, 95, 19, 0.15);
        outline: none;
    }

    .amc-form-card .form-control.is-invalid,
    .amc-form-card .form-select.is-invalid {
        border-color: #ef4444;
        background-image: none;
    }

    .amc-invalid-feedback {
        color: #ef4444;
        font-size: 12.5px;
        font-weight: 600;
        margin-top: 4px;
        display: none;
    }

    .is-invalid ~ .amc-invalid-feedback {
        display: block;
    }

    /* Window Card Container */
    .amc-window-row-card {
        background: #f8fafc;
        border: 1.5px solid #e2e8f0;
        border-radius: 12px;
        padding: 22px 20px;
        margin-bottom: 18px;
        position: relative;
        transition: border-color 0.2s;
    }

    .amc-window-row-card:hover {
        border-color: #cbd5e1;
    }

    .amc-window-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: 1px dashed #cbd5e1;
    }

    .amc-window-header h5 {
        font-size: 15px;
        font-weight: 800;
        color: #ff5f13;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .amc-remove-btn {
        background: rgba(239, 68, 68, 0.1);
        color: #ef4444;
        border: 1px solid rgba(239, 68, 68, 0.2);
        padding: 4px 10px;
        border-radius: 6px;
        font-size: 12px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.2s;
    }

    .amc-remove-btn:hover {
        background: #ef4444;
        color: #ffffff;
    }

    .amc-add-window-btn {
        background: #111111;
        color: #ffffff;
        border: 1.5px solid #111111;
        padding: 10px 22px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 700;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.2s;
    }

    .amc-add-window-btn:hover {
        background: #ff5f13;
        border-color: #ff5f13;
        color: #ffffff;
    }

    /* Buttons */
    .amc-nav-btn {
        padding: 13px 28px;
        font-size: 15px;
        font-weight: 800;
        border-radius: 8px;
        transition: all 0.2s;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        cursor: pointer;
    }

    .amc-btn-prev {
        background: #f1f5f9;
        color: #475569;
        border: 1px solid #cbd5e1;
    }

    .amc-btn-prev:hover {
        background: #e2e8f0;
        color: #1e293b;
    }

    .amc-btn-next,
    .amc-btn-submit {
        background: #ff5f13;
        color: #ffffff;
        border: 1px solid #ff5f13;
    }

    .amc-btn-next:hover,
    .amc-btn-submit:hover {
        background: #e04e0a;
        border-color: #e04e0a;
        color: #ffffff;
    }

    /* ==========================================================================
       Informative Cards & Scope Sections Below
       ========================================================================== */
    .amc-pillar-card {
        background: #ffffff;
        border-radius: 12px;
        border: 1px solid #e9edf2;
        padding: 28px 22px;
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.04);
        transition: transform 0.25s, box-shadow 0.25s, border-color 0.25s;
        height: 100%;
        position: relative;
        overflow: hidden;
    }

    .amc-pillar-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 3px;
        background: #ff5f13;
        opacity: 0;
        transition: opacity 0.25s;
    }

    .amc-pillar-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 25px rgba(255, 95, 19, 0.1);
        border-color: rgba(255, 95, 19, 0.3);
    }

    .amc-pillar-card:hover::before {
        opacity: 1;
    }

    .amc-pillar-icon {
        width: 52px;
        height: 52px;
        border-radius: 10px;
        background: rgba(255, 95, 19, 0.1);
        color: #ff5f13;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        margin-bottom: 18px;
    }

    .amc-pillar-card h4 {
        font-size: 18px;
        font-weight: 800;
        color: #111111;
        margin-bottom: 10px;
    }

    .amc-pillar-card p {
        font-size: 13.5px;
        color: #555555;
        line-height: 1.6;
        margin: 0;
    }

    .amc-process-step {
        background: #ffffff;
        border-radius: 10px;
        padding: 22px 18px;
        border: 1px solid #edf1f5;
        height: 100%;
        text-align: center;
        box-shadow: 0 3px 12px rgba(0,0,0,0.02);
    }

    .amc-step-num {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: #ff5f13;
        color: #ffffff;
        font-weight: 800;
        font-size: 15px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 12px;
    }

    .amc-process-step h5 {
        font-size: 15px;
        font-weight: 800;
        color: #111111;
        margin-bottom: 6px;
    }

    .amc-process-step p {
        font-size: 12.5px;
        color: #666666;
        line-height: 1.5;
        margin: 0;
    }

    .amc-scope-box {
        background: #ffffff;
        border-radius: 12px;
        border: 1px solid #eef0f3;
        padding: 30px 25px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        margin-bottom: 30px;
    }

    .amc-scope-item {
        display: flex;
        align-items: flex-start;
        gap: 14px;
        padding: 12px 0;
        border-bottom: 1px solid #f2f4f7;
    }

    .amc-scope-item:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    .amc-scope-item i {
        color: #ff5f13;
        font-size: 16px;
        margin-top: 3px;
        flex-shrink: 0;
    }

    .amc-scope-item strong {
        color: #111111;
        font-weight: 700;
        display: block;
        font-size: 14px;
        margin-bottom: 2px;
    }

    .amc-scope-item p {
        color: #666666;
        font-size: 13px;
        margin: 0;
        line-height: 1.5;
    }
</style>
@endsection

@section('content')
<!-- Modern AMC Breadcrumb Header (No BG Image) -->
<section class="amc-header-banner">
    <div class="container">
        <div class="row">
            <div class="col-xl-11 col-lg-12">
                <nav class="breadcrumb-nav" aria-label="breadcrumb">
                    <ol>
                        <li><a href="/"><i class="fa-solid fa-house"></i> Home</a></li>
                        <li class="active" aria-current="page">Annual Maintenance Contract (AMC)</li>
                    </ol>
                </nav>

                <h1>DOZO Window Care & Annual Maintenance Contract (AMC)</h1>
                <p>
                    Protect your architectural investment. Ensure lifelong frictionless gliding, airtight monsoon sealing, acoustic cutoff, and optimal energy efficiency for your aluminium system windows and high-rise facades with factory-certified DOZO AMC care.
                </p>

                <div class="amc-header-badges">
                    <span class="amc-badge-pill"><i class="fa-solid fa-shield-halved"></i> 100% Factory Certified Care</span>
                    <span class="amc-badge-pill"><i class="fa-solid fa-screwdriver-wrench"></i> Periodic Hardware & Roller Tuning</span>
                    <span class="amc-badge-pill"><i class="fa-solid fa-droplet-slash"></i> Monsoon Seepage Prevention</span>
                    <span class="amc-badge-pill"><i class="fa-solid fa-phone-volume"></i> 24-48h Emergency Callout</span>
                    <span class="amc-badge-pill"><i class="fa-solid fa-building"></i> Residential & Commercial Plans</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     FULL-WIDTH AMC MULTI-STEP FORM (PLACED DIRECTLY AFTER BREADCRUMB)
     ========================================================================== -->
<section class="amc-form-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-11 col-12">
                <div class="amc-form-card">
                    <!-- Form Title & Intro -->
                    <div class="text-center mb-4">
                        <span style="color: #ff5f13; font-weight: 800; font-size: 13px; text-transform: uppercase; letter-spacing: 1px;">Instant Window Care Booking</span>
                        <h2 style="font-size: 28px; font-weight: 800; color: #111111; margin-top: 4px;">Book An AMC Inspection</h2>
                        <p style="color: #64748b; font-size: 14.5px; max-width: 600px; margin: 0 auto;">
                            Fill in your site details and window configurations below for an instant inspection quote and scheduled audit visit.
                        </p>
                    </div>

                    <!-- Step Wizard Header -->
                    <div class="amc-step-wizard">
                        <div class="amc-step-item active" data-step="1">
                            <div class="amc-step-circle">1</div>
                            <span class="amc-step-label">Contact Info</span>
                        </div>
                        <div class="amc-step-item" data-step="2">
                            <div class="amc-step-circle">2</div>
                            <span class="amc-step-label">Location</span>
                        </div>
                        <div class="amc-step-item" data-step="3">
                            <div class="amc-step-circle">3</div>
                            <span class="amc-step-label">Windows</span>
                        </div>
                        <div class="amc-step-item" data-step="4">
                            <div class="amc-step-circle">4</div>
                            <span class="amc-step-label">Requirements</span>
                        </div>
                    </div>

                    <!-- Form -->
                    <form id="amcInspectionForm" action="{{ route('amc.store') }}" method="POST">
                        @csrf

                        <!-- ==================== STEP 1: CONTACT INFO ==================== -->
                        <div class="amc-panel active" id="amcStep1">
                            <h4 style="font-size: 18px; font-weight: 800; color: #111111; margin-bottom: 20px; border-bottom: 1px solid #e2e8f0; padding-bottom: 10px;">
                                <i class="fa-solid fa-user-check text-warning me-2"></i> Step 1: Customer Contact Information
                            </h4>

                            <div class="row g-3">
                                <div class="col-md-6 col-12">
                                    <label for="amc_fname" class="form-label">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" name="fname" class="form-control" id="amc_fname" placeholder="Enter your full name" required>
                                    <div class="amc-invalid-feedback">Please enter your full name.</div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <label for="amc_email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" id="amc_email" placeholder="example@domain.com" required>
                                    <div class="amc-invalid-feedback">Please enter a valid email address.</div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <label for="amc_mob" class="form-label">Mobile Number <span class="text-danger">*</span></label>
                                    <input type="tel" name="mob" class="form-control" id="amc_mob" placeholder="10-digit mobile number" maxlength="10" required>
                                    <div class="amc-invalid-feedback">Please enter a valid 10-digit mobile number.</div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <label class="form-label text-muted">Service Scope</label>
                                    <div class="p-2 px-3 rounded bg-light border text-secondary" style="font-size: 13.5px; height: 48px; display: flex; align-items: center;">
                                        <i class="fa-solid fa-shield-halved text-success me-2"></i> Standard / Commercial Façade Care
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end mt-4 pt-3 border-top">
                                <button type="button" class="amc-nav-btn amc-btn-next" onclick="goToStep(2)">
                                    Next: Site Location &nbsp;<i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>

                        <!-- ==================== STEP 2: ADDRESS & LOCATION ==================== -->
                        <div class="amc-panel" id="amcStep2">
                            <h4 style="font-size: 18px; font-weight: 800; color: #111111; margin-bottom: 20px; border-bottom: 1px solid #e2e8f0; padding-bottom: 10px;">
                                <i class="fa-solid fa-location-dot text-danger me-2"></i> Step 2: Site Location & Address
                            </h4>

                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="amc_add" class="form-label">Property / Site Address <span class="text-danger">*</span></label>
                                    <textarea name="add" class="form-control" id="amc_add" rows="4" placeholder="Enter complete site address (Building Name, Flat/Unit No, Street, Landmark, City)" required></textarea>
                                    <div class="amc-invalid-feedback">Please enter complete site address.</div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <label for="amc_pin" class="form-label">PIN Code <span class="text-danger">*</span></label>
                                    <input type="text" name="pin" class="form-control" id="amc_pin" placeholder="6-digit PIN Code" maxlength="6" required>
                                    <div class="amc-invalid-feedback">Please enter a valid 6-digit PIN code.</div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between mt-4 pt-3 border-top">
                                <button type="button" class="amc-nav-btn amc-btn-prev" onclick="goToStep(1)">
                                    <i class="fa-solid fa-arrow-left"></i> &nbsp;Previous
                                </button>
                                <button type="button" class="amc-nav-btn amc-btn-next" onclick="goToStep(3)">
                                    Next: Window Details &nbsp;<i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>

                        <!-- ==================== STEP 3: WINDOW INVENTORY ==================== -->
                        <div class="amc-panel" id="amcStep3">
                            <div class="d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom">
                                <h4 style="font-size: 18px; font-weight: 800; color: #111111; margin: 0;">
                                    <i class="fa-solid fa-border-all text-primary me-2"></i> Step 3: Window Inventory & Specifications
                                </h4>
                                <button type="button" class="amc-add-window-btn" id="amcAddWindowBtn">
                                    <i class="fa-solid fa-plus"></i> Add Another Window
                                </button>
                            </div>

                            <p style="font-size: 13.5px; color: #64748b; margin-bottom: 20px;">
                                Specify window locations, approximate dimensions, and types so our engineers arrive prepared with suitable replacement parts and tooling.
                            </p>

                            <!-- Window List Container -->
                            <div id="amcWindowsContainer">
                                <!-- Window Item 1 -->
                                <div class="amc-window-row-card" id="windowCard_1">
                                    <div class="amc-window-header">
                                        <h5><i class="fa-solid fa-cube"></i> Window #1</h5>
                                        <button type="button" class="amc-remove-btn d-none" onclick="removeWindowRow(1)">
                                            <i class="fa-solid fa-trash-can"></i> Remove
                                        </button>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <label class="form-label">Location / Tag <span class="text-danger">*</span></label>
                                            <input type="text" name="window_name[]" class="form-control" placeholder="e.g. Master Bedroom" required>
                                            <div class="amc-invalid-feedback">Location is required.</div>
                                        </div>

                                        <div class="col-lg-2 col-md-3 col-6">
                                            <label class="form-label">Length <span class="text-danger">*</span></label>
                                            <input type="text" name="w_length[]" class="form-control" placeholder="e.g. 6 ft" required>
                                            <div class="amc-invalid-feedback">Required.</div>
                                        </div>

                                        <div class="col-lg-2 col-md-3 col-6">
                                            <label class="form-label">Breadth <span class="text-danger">*</span></label>
                                            <input type="text" name="w_breadth[]" class="form-control" placeholder="e.g. 5 ft" required>
                                            <div class="amc-invalid-feedback">Required.</div>
                                        </div>

                                        <div class="col-lg-3 col-md-8 col-8">
                                            <label class="form-label">System Type <span class="text-danger">*</span></label>
                                            <select name="w_type[]" class="form-select" required>
                                                <option value="" selected>Select Window Type</option>
                                                <option value="Sliding Window (2-Track / 3-Track)">Sliding Window (2-Track / 3-Track)</option>
                                                <option value="Casement Openable Window">Casement Openable Window</option>
                                                <option value="Tilt & Turn Window">Tilt & Turn Window</option>
                                                <option value="Fixed Glass / Glazing Panel">Fixed Glass / Glazing Panel</option>
                                                <option value="Aluminium Sliding Door / Bi-Fold">Aluminium Sliding Door / Bi-Fold</option>
                                                <option value="Structural Curtain Wall Facade">Structural Curtain Wall Facade</option>
                                            </select>
                                            <div class="amc-invalid-feedback">Select window type.</div>
                                        </div>

                                        <div class="col-lg-2 col-md-4 col-4">
                                            <label class="form-label">Units <span class="text-danger">*</span></label>
                                            <input type="number" name="w_unit[]" class="form-control" placeholder="1" min="1" value="1" required>
                                            <div class="amc-invalid-feedback">Min 1.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between mt-4 pt-3 border-top">
                                <button type="button" class="amc-nav-btn amc-btn-prev" onclick="goToStep(2)">
                                    <i class="fa-solid fa-arrow-left"></i> &nbsp;Previous
                                </button>
                                <button type="button" class="amc-nav-btn amc-btn-next" onclick="goToStep(4)">
                                    Next: Requirements &nbsp;<i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>

                        <!-- ==================== STEP 4: REQUIREMENTS & SUBMISSION ==================== -->
                        <div class="amc-panel" id="amcStep4">
                            <h4 style="font-size: 18px; font-weight: 800; color: #111111; margin-bottom: 20px; border-bottom: 1px solid #e2e8f0; padding-bottom: 10px;">
                                <i class="fa-solid fa-clipboard-list text-warning me-2"></i> Step 4: Special Issues & Review
                            </h4>

                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="amc_d_op" class="form-label">Describe Any Current Issues / Special Requirements <span class="text-danger">*</span></label>
                                    <textarea name="d_op" class="form-control" id="amc_d_op" rows="5" placeholder="e.g. Window sashes are hard to slide, water seepage during rains, broken multi-point handles, or routine annual preventive maintenance preferred..." required></textarea>
                                    <div class="amc-invalid-feedback">Please provide details about your window requirements or current issues.</div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between mt-4 pt-3 border-top">
                                <button type="button" class="amc-nav-btn amc-btn-prev" onclick="goToStep(3)">
                                    <i class="fa-solid fa-arrow-left"></i> &nbsp;Previous
                                </button>
                                <button type="submit" class="amc-nav-btn amc-btn-submit" id="amcSubmitBtn">
                                    <i class="fa-solid fa-paper-plane"></i> &nbsp;SUBMIT AMC INQUIRY
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     INFORMATIVE SECTION: 4 VALUE PILLARS & SCOPE OF SERVICE
     ========================================================================== -->
<section class="section-padding" style="padding: 60px 0 45px 0; background: #ffffff;">
    <div class="container">
        <div class="row mb-35">
            <div class="col-12 text-center">
                <div class="section-tittle mb-20">
                    <div class="front-text">
                        <h2>Why Routine AMC Is Essential</h2>
                    </div>
                    <span class="back-text">PROTECTION</span>
                </div>
                <p style="max-width: 780px; margin: 0 auto; color: #555555; font-size: 15px;">
                    Modern slim-line aluminium windows and glass facades endure continuous wind loads, rain, dirt accumulation, and friction. Scheduled preventive maintenance extends hardware lifespan and prevents expensive repairs.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="amc-pillar-card">
                    <div class="amc-pillar-icon">
                        <i class="fa-solid fa-gears"></i>
                    </div>
                    <h4>Roller & Track Gliding</h4>
                    <p>Heavy duty stainless steel tandem rollers and track rails are lubricated, aligned, and calibrated to prevent friction, sash drag, and premature metal wear.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-30">
                <div class="amc-pillar-card">
                    <div class="amc-pillar-icon">
                        <i class="fa-solid fa-cloud-showers-heavy"></i>
                    </div>
                    <h4>Monsoon & Air Sealing</h4>
                    <p>Inspection, resealing, and rejuvenation of continuous EPDM weather gaskets, brush wool piles, and concealed drainage valves to eliminate water leaks.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-30">
                <div class="amc-pillar-card">
                    <div class="amc-pillar-icon">
                        <i class="fa-solid fa-volume-xmark"></i>
                    </div>
                    <h4>Acoustic & Thermal Seal</h4>
                    <p>Compression checks on multi-point lock keepers to maintain airtight insulation, preventing outside city traffic noise (up to 45 dB) and air conditioning loss.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-30">
                <div class="amc-pillar-card">
                    <div class="amc-pillar-icon">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <h4>Hardware & High-Rise Safety</h4>
                    <p>Friction stays, heavy handles, transmission gear rods, corner drives, and anchor fasteners audited for wind load security in high-rise towers.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4-Stage Process Flow -->
<section class="section-padding" style="padding: 45px 0 55px 0; background: #fafbfc; border-top: 1px solid #edf2f7; border-bottom: 1px solid #edf2f7;">
    <div class="container">
        <div class="row mb-30">
            <div class="col-12 text-center">
                <div class="section-tittle mb-15">
                    <div class="front-text">
                        <h2 style="font-size: 26px;">The DOZO 4-Stage Maintenance Cycle</h2>
                    </div>
                    <span class="back-text">PROCESS</span>
                </div>
                <p style="color: #666666; font-size: 14.5px; max-width: 700px; margin: 0 auto;">
                    Every AMC service visit follows a rigorous checklist executed by factory-trained fenestration engineers.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 mb-25">
                <div class="amc-process-step">
                    <div class="amc-step-num">1</div>
                    <h5>Diagnostic Inspection</h5>
                    <p>Digital laser spirit level check, frame squareness audit, and sliding track load analysis.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-25">
                <div class="amc-process-step">
                    <div class="amc-step-num">2</div>
                    <h5>Track & Drainage Purge</h5>
                    <p>Debris extraction from concealed sill drainage ports, anti-clogging flush, and brush seal wash.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-25">
                <div class="amc-process-step">
                    <div class="amc-step-num">3</div>
                    <h5>Hardware & Roller Tuning</h5>
                    <p>Application of silicone lube, multi-point lock keeper recalibration, and friction hinge tightening.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-25">
                <div class="amc-process-step">
                    <div class="amc-step-num">4</div>
                    <h5>Certified Audit Report</h5>
                    <p>Acoustic and weather-tightness verification, followed by a formal AMC inspection certificate.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Scope & Offers Section -->
<section class="section-padding" style="padding: 55px 0 70px 0; background: #ffffff;">
    <div class="container">
        <div class="row">
            <!-- Left: What's Covered -->
            <div class="col-lg-7 mb-40">
                <div class="amc-scope-box">
                    <h3 style="font-size: 19px; font-weight: 800; color: #111111; margin-bottom: 18px; text-transform: uppercase;">
                        <i class="fa-solid fa-clipboard-check" style="color: #ff5f13; margin-right: 6px;"></i> What's Covered In DOZO AMC
                    </h3>

                    <div class="amc-scope-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <div>
                            <strong>Bi-Annual / Quarterly Comprehensive Audit</strong>
                            <p>Full physical diagnostic testing of sliding, casement, tilt & turn sashes, and structural facade glass panels.</p>
                        </div>
                    </div>

                    <div class="amc-scope-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <div>
                            <strong>EPDM Rubber Gasket & Wool Pile Re-fitting</strong>
                            <p>Replacing deteriorated weather-strips to maintain sound insulation and wind sealing.</p>
                        </div>
                    </div>

                    <div class="amc-scope-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <div>
                            <strong>Track Cleaning & Drainage De-clogging</strong>
                            <p>Deep clearing of concealed water drainage channels to stop monsoon water buildup.</p>
                        </div>
                    </div>

                    <div class="amc-scope-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <div>
                            <strong>Multipoint Lock & Hinge Realignment</strong>
                            <p>Adjusting keeper plates, corner drives, handles, and heavy duty hinges for featherlight operation.</p>
                        </div>
                    </div>

                    <div class="amc-scope-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <div>
                            <strong>Priority On-Demand Service Visits</strong>
                            <p>Fast emergency dispatch within 24-48 hours for unexpected jamming, glass issues, or hardware damage.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Live Packages & Hotline -->
            <div class="col-lg-5 mb-40">
                <div class="we-offer p-4 rounded" style="background: #111111; color: #ffffff; border: 1px solid #282828; height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <div class="amc_title" style="margin-bottom: 15px; display: flex; align-items: center; gap: 12px;">
                            <img src="{{ asset('assets/img/icon/contract.png') }}" width="45" alt="Contract">
                            <h4 style="color: #ffffff; font-size: 18px; font-weight: 800; margin: 0;">DOZO Annual Care Packages</h4>
                        </div>

                        <ul class="amc_ul p-0 m-0" style="list-style: none;">
                            @if(isset($offers) && count($offers) > 0)
                                @foreach($offers as $offer)
                                <li class="amc_li mb-3">
                                    <p class="amc_p m-0" style="color: #e0e0e0; font-size: 14.5px;">
                                        <span style="color: #ff5f13; font-weight: 800;">✔&nbsp;</span>
                                        <strong>{{$offer->offer}}</strong>
                                    </p>
                                </li>
                                @endforeach
                            @else
                                <li class="amc_li mb-3">
                                    <p class="amc_p m-0" style="color: #e0e0e0; font-size: 14.5px;"><span style="color: #ff5f13;">✔&nbsp;</span> Residential Annual Maintenance Contract (Villa & Apartments)</p>
                                </li>
                                <li class="amc_li mb-3">
                                    <p class="amc_p m-0" style="color: #e0e0e0; font-size: 14.5px;"><span style="color: #ff5f13;">✔&nbsp;</span> Commercial High-Rise & Corporate Office Facade AMC</p>
                                </li>
                                <li class="amc_li mb-3">
                                    <p class="amc_p m-0" style="color: #e0e0e0; font-size: 14.5px;"><span style="color: #ff5f13;">✔&nbsp;</span> 100% Genuine Certified Hardware & Rollers Replacement Guarantee</p>
                                </li>
                            @endif
                        </ul>
                    </div>

                    <div class="mt-4 pt-3 text-center" style="border-top: 1px solid #333333;">
                        <a href="tel:8981444141" style="color: #ff5f13; font-weight: 800; font-size: 15px; text-decoration: none;">
                            <i class="fa-solid fa-phone"></i> Urgent Window Issue? Call: +91 8981444141
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Inquiry Success Modal -->
<div class="modal fade" id="myInquirySuccessModal" tabindex="-1" role="dialog" aria-labelledby="myInquirySuccessModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none; overflow: hidden;">
            <div class="modal-body p-4 text-center">
                <img src="{{ asset('assets/img/icon/upp.gif') }}" width="130" alt="Success" class="mb-3">
                <h3 style="font-weight: 800; color: #111111; margin-bottom: 10px;">AMC Request Submitted!</h3>
                <p style="color: #666666; font-size: 14px;">
                    Thank you! Our technical service team has received your details and will contact you shortly to schedule the inspection visit.
                </p>
            </div>
            <div class="modal-footer p-3 bg-light">
                <button type="button" class="btn w-100" style="background: #ff5f13; color: #ffffff; font-weight: 700;" onclick="window.location.reload()">Done</button>
            </div>
        </div>
    </div>
</div>

<!-- Inquiry Error Modal -->
<div class="modal fade" id="myInquiryErrorModal" tabindex="-1" role="dialog" aria-labelledby="myInquiryErrorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-body p-4 text-center">
                <img src="{{ asset('assets/img/icon/unn.gif') }}" width="130" alt="Error" class="mb-3">
                <h3 style="font-weight: 800; color: #dc3545; margin-bottom: 10px;">Submission Failed</h3>
                <p style="color: #666666; font-size: 14px;" id="amcErrorMessage">
                    Please ensure all required fields are filled correctly before submitting.
                </p>
            </div>
            <div class="modal-footer p-3 bg-light">
                <button type="button" class="btn w-100" style="background: #333333; color: #ffffff;" data-bs-dismiss="modal">Try Again</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    let currentStep = 1;
    let windowCounter = 1;

    // Multi-Step Navigation & Validation
    function validateStep(step) {
        let isValid = true;
        const panel = document.getElementById(`amcStep${step}`);
        if (!panel) return true;

        const inputs = panel.querySelectorAll('input, select, textarea');

        inputs.forEach(input => {
            input.classList.remove('is-invalid');

            // Required validation
            if (input.hasAttribute('required')) {
                if (!input.value || !input.value.trim()) {
                    input.classList.add('is-invalid');
                    isValid = false;
                }
            }

            // Email validation
            if (input.type === 'email' && input.value.trim()) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(input.value.trim())) {
                    input.classList.add('is-invalid');
                    isValid = false;
                }
            }

            // Phone validation
            if (input.name === 'mob' && input.value.trim()) {
                const cleanPhone = input.value.replace(/\D/g, '');
                if (cleanPhone.length < 10) {
                    input.classList.add('is-invalid');
                    isValid = false;
                }
            }

            // PIN validation
            if (input.name === 'pin' && input.value.trim()) {
                const cleanPin = input.value.replace(/\D/g, '');
                if (cleanPin.length !== 6) {
                    input.classList.add('is-invalid');
                    isValid = false;
                }
            }
        });

        return isValid;
    }

    function goToStep(step) {
        if (step > currentStep) {
            // Validate current step before advancing
            if (!validateStep(currentStep)) {
                // Focus first invalid input
                const firstInvalid = document.querySelector(`#amcStep${currentStep} .is-invalid`);
                if (firstInvalid) firstInvalid.focus();
                return;
            }
        }

        // Switch panels
        document.querySelectorAll('.amc-panel').forEach(p => p.classList.remove('active'));
        const targetPanel = document.getElementById(`amcStep${step}`);
        if (targetPanel) {
            targetPanel.classList.add('active');
        }

        // Update Wizard Indicators
        document.querySelectorAll('.amc-step-item').forEach(item => {
            const itemStep = parseInt(item.getAttribute('data-step'));
            item.classList.remove('active', 'completed');
            if (itemStep === step) {
                item.classList.add('active');
            } else if (itemStep < step) {
                item.classList.add('completed');
            }
        });

        currentStep = step;

        // Scroll to form smoothly
        const formTop = document.querySelector('.amc-form-card');
        if (formTop) {
            window.scrollTo({
                top: formTop.getBoundingClientRect().top + window.pageYOffset - 110,
                behavior: 'smooth'
            });
        }
    }

    // Dynamic Window Rows
    document.getElementById('amcAddWindowBtn').addEventListener('click', function() {
        windowCounter++;
        const container = document.getElementById('amcWindowsContainer');

        const newCard = document.createElement('div');
        newCard.className = 'amc-window-row-card';
        newCard.id = `windowCard_${windowCounter}`;
        newCard.innerHTML = `
            <div class="amc-window-header">
                <h5><i class="fa-solid fa-cube"></i> Window #${windowCounter}</h5>
                <button type="button" class="amc-remove-btn" onclick="removeWindowRow(${windowCounter})">
                    <i class="fa-solid fa-trash-can"></i> Remove
                </button>
            </div>

            <div class="row g-3">
                <div class="col-lg-3 col-md-6 col-12">
                    <label class="form-label">Location / Tag <span class="text-danger">*</span></label>
                    <input type="text" name="window_name[]" class="form-control" placeholder="e.g. Living Room, Balcony" required>
                    <div class="amc-invalid-feedback">Location is required.</div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <label class="form-label">Length <span class="text-danger">*</span></label>
                    <input type="text" name="w_length[]" class="form-control" placeholder="e.g. 6 ft" required>
                    <div class="amc-invalid-feedback">Required.</div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <label class="form-label">Breadth <span class="text-danger">*</span></label>
                    <input type="text" name="w_breadth[]" class="form-control" placeholder="e.g. 5 ft" required>
                    <div class="amc-invalid-feedback">Required.</div>
                </div>

                <div class="col-lg-3 col-md-8 col-8">
                    <label class="form-label">System Type <span class="text-danger">*</span></label>
                    <select name="w_type[]" class="form-select" required>
                        <option value="" selected>Select Window Type</option>
                        <option value="Sliding Window (2-Track / 3-Track)">Sliding Window (2-Track / 3-Track)</option>
                        <option value="Casement Openable Window">Casement Openable Window</option>
                        <option value="Tilt & Turn Window">Tilt & Turn Window</option>
                        <option value="Fixed Glass / Glazing Panel">Fixed Glass / Glazing Panel</option>
                        <option value="Aluminium Sliding Door / Bi-Fold">Aluminium Sliding Door / Bi-Fold</option>
                        <option value="Structural Curtain Wall Facade">Structural Curtain Wall Facade</option>
                    </select>
                    <div class="amc-invalid-feedback">Select window type.</div>
                </div>

                <div class="col-lg-2 col-md-4 col-4">
                    <label class="form-label">Units <span class="text-danger">*</span></label>
                    <input type="number" name="w_unit[]" class="form-control" placeholder="1" min="1" value="1" required>
                    <div class="amc-invalid-feedback">Min 1.</div>
                </div>
            </div>
        `;

        container.appendChild(newCard);
    });

    function removeWindowRow(id) {
        const card = document.getElementById(`windowCard_${id}`);
        if (card) {
            card.remove();
        }
    }

    // Input cleanup validation
    document.addEventListener('input', function(e) {
        if (e.target.classList.contains('is-invalid')) {
            if (e.target.value.trim()) {
                e.target.classList.remove('is-invalid');
            }
        }
    });

    // Form Submit via AJAX
    document.getElementById('amcInspectionForm').addEventListener('submit', function(e) {
        e.preventDefault();

        if (!validateStep(4)) {
            return;
        }

        const submitBtn = document.getElementById('amcSubmitBtn');
        const originalText = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Submitting...';

        const formData = new FormData(this);

        $.ajax({
            url: "{{ route('amc.store') }}",
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
                $('#myInquirySuccessModal').modal('show');
            },
            error: function(xhr, status, error) {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
                let message = 'Please ensure all required fields are filled correctly.';
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    message = xhr.responseJSON.message;
                }
                $('#amcErrorMessage').text(message);
                $('#myInquiryErrorModal').modal('show');
            }
        });
    });
</script>
@endpush