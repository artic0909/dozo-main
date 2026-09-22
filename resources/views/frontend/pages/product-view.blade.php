@extends('frontend.layouts.app')

@section('title', $product->pr_title . ' | DOZO Architectural Systems')

@section('styles')
<style>
    /* Modern Product Breadcrumb Header */
    .product-view-banner {
        background: linear-gradient(135deg, #111111 0%, #1a1a1a 50%, #242424 100%);
        padding: 175px 0 45px 0;
        position: relative;
        border-bottom: 3px solid #ff5f13;
    }

    @media (max-width: 991px) {
        .product-view-banner {
            padding: 130px 0 35px 0;
        }
    }

    .product-view-banner .breadcrumb-nav {
        margin-bottom: 12px;
    }

    .product-view-banner .breadcrumb-nav ol {
        background: transparent;
        padding: 0;
        margin: 0;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 8px;
    }

    .product-view-banner .breadcrumb-nav li {
        font-size: 14px;
        color: #a5a5a5;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
    }

    .product-view-banner .breadcrumb-nav li a {
        color: #ff5f13;
        transition: color 0.2s;
    }

    .product-view-banner .breadcrumb-nav li a:hover {
        color: #ffffff;
    }

    .product-view-banner .breadcrumb-nav li::after {
        content: "/";
        margin-left: 8px;
        color: #666666;
    }

    .product-view-banner .breadcrumb-nav li:last-child::after {
        content: "";
    }

    .product-view-banner .breadcrumb-nav li.active {
        color: #ffffff;
        font-weight: 600;
        max-width: 320px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .product-view-banner h1 {
        color: #ffffff;
        font-size: 32px;
        font-weight: 800;
        line-height: 1.3;
        margin-bottom: 10px;
    }

    .product-view-banner .category-badges {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        align-items: center;
    }

    .product-view-banner .cat-badge {
        background: rgba(255, 95, 19, 0.15);
        border: 1px solid #ff5f13;
        color: #ffffff;
        font-size: 13px;
        font-weight: 700;
        padding: 4px 12px;
        border-radius: 4px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .product-view-banner .cat-badge i {
        color: #ff5f13;
    }

    /* Main Showcase Area */
    .product-details-section {
        padding: 50px 0 70px 0;
        background: #f8f9fb;
    }

    /* Elevation Gallery Showcase */
    .gallery-showcase-box {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.04);
        margin-bottom: 30px;
    }

    .main-view-container {
        position: relative;
        background: #ffffff;
        border: 1px solid #edf2f7;
        border-radius: 8px;
        overflow: hidden;
        text-align: center;
        min-height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 15px;
    }

    .main-view-container img {
        max-width: 100%;
        max-height: 520px;
        object-fit: contain;
        transition: transform 0.3s ease;
    }

    .main-view-container:hover img {
        transform: scale(1.02);
    }

    .blueprint-watermark {
        position: absolute;
        bottom: 12px;
        right: 15px;
        font-size: 11px;
        color: #999;
        font-weight: 600;
        background: rgba(255, 255, 255, 0.85);
        padding: 2px 8px;
        border-radius: 4px;
        border: 1px solid #eee;
    }

    /* Thumbnails Row */
    .thumbnail-gallery-row {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 16px;
    }

    .thumb-btn {
        width: 82px;
        height: 72px;
        border: 2px solid #e2e8f0;
        border-radius: 6px;
        overflow: hidden;
        cursor: pointer;
        background: #ffffff;
        padding: 4px;
        transition: all 0.2s;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .thumb-btn img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .thumb-btn:hover {
        border-color: #ff5f13;
    }

    .thumb-btn.active {
        border-color: #ff5f13;
        box-shadow: 0 0 0 3px rgba(255, 95, 19, 0.2);
    }

    /* Specification Matrix Table */
    .specs-matrix-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0,0,0,0.04);
        margin-bottom: 30px;
    }

    .specs-header-title {
        background: #111111;
        color: #ffffff;
        padding: 16px 20px;
        font-size: 16px;
        font-weight: 800;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .specs-header-title i {
        color: #ff5f13;
    }

    .specs-table {
        width: 100%;
        margin: 0;
        border-collapse: collapse;
    }

    .specs-table tr {
        border-bottom: 1px solid #edf2f7;
    }

    .specs-table tr:last-child {
        border-bottom: none;
    }

    .specs-table th {
        width: 38%;
        background: #f8fafc;
        color: #334155;
        font-size: 13px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 14px 18px;
        vertical-align: middle;
        border-right: 1px solid #edf2f7;
    }

    .specs-table td {
        color: #0f172a;
        font-size: 14px;
        font-weight: 600;
        padding: 14px 18px;
        vertical-align: middle;
    }

    .specs-table .rate-highlight {
        font-size: 18px;
        font-weight: 800;
        color: #ff5f13;
    }

    .specs-terms-note {
        padding: 12px 18px;
        background: #fafafa;
        border-top: 1px solid #edf2f7;
        font-size: 11px;
        color: #718096;
        font-style: italic;
    }

    /* Action CTA Box */
    .product-cta-box {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 22px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.04);
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .btn-quotation-cta {
        background: #ff5f13;
        color: #ffffff !important;
        font-weight: 800;
        font-size: 15px;
        padding: 14px 24px;
        border-radius: 8px;
        text-align: center;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        transition: all 0.2s;
        box-shadow: 0 4px 14px rgba(255, 95, 19, 0.3);
        text-decoration: none;
    }

    .btn-quotation-cta:hover {
        background: #e04e0a;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(255, 95, 19, 0.45);
    }

    .btn-download-cad {
        background: #111111;
        color: #ffffff !important;
        font-weight: 700;
        font-size: 14px;
        padding: 12px 20px;
        border-radius: 8px;
        text-align: center;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        transition: all 0.2s;
        text-decoration: none;
    }

    .btn-download-cad:hover {
        background: #2a2a2a;
        transform: translateY(-1px);
    }

    /* Description and Feature Tabs */
    .product-narrative-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.04);
        margin-top: 30px;
    }

    .narrative-title {
        font-size: 20px;
        font-weight: 800;
        color: #111111;
        margin-bottom: 16px;
        padding-bottom: 10px;
        border-bottom: 2px solid #ff5f13;
        display: inline-block;
    }

    .narrative-body {
        font-size: 15px;
        line-height: 1.8;
        color: #444444;
        white-space: pre-line;
    }

    /* Related Products */
    .related-products-section {
        padding: 50px 0 80px 0;
        background: #ffffff;
        border-top: 1px solid #eef2f6;
    }
</style>
@endsection

@section('content')

<!-- Banner / Breadcrumbs -->
<section class="product-view-banner">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 col-lg-11">
                <nav class="breadcrumb-nav" aria-label="breadcrumb">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">Products</a></li>
                        @if(!empty($product->mainCategory))
                            <li><a href="{{ url('/get-products/' . $product->mainCategory->id) }}">{{ $product->mainCategory->main_category }}</a></li>
                        @endif
                        <li class="active" aria-current="page">{{ $product->pr_title }}</li>
                    </ol>
                </nav>

                <h1>{{ $product->pr_title }}</h1>

                <div class="category-badges">
                    @if(!empty($product->mainCategory))
                        <span class="cat-badge"><i class="fa-solid fa-circle-dot"></i> {{ $product->mainCategory->main_category }}</span>
                    @endif
                    @if(!empty($product->subCategory))
                        <span class="cat-badge"><i class="fa-solid fa-circle-dot"></i> {{ $product->subCategory->sub_category }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Details & Elevation Drawings Showcase -->
<section class="product-details-section bg-watermark-thermal">
    <div class="container">
        <div class="row">
            <!-- Left: Interactive Technical Elevation & Drawings Viewer -->
            <div class="col-lg-7 mb-4 mb-lg-0">
                <div class="gallery-showcase-box">
                    @php
                        $mainImg = !empty($product->pr_image) ? asset('storage/' . $product->pr_image) : asset('assets/img/gallery/gallery1.png');
                        $gallery = is_array($product->gallery_images) ? $product->gallery_images : [];
                    @endphp

                    <!-- Main Drawing Viewport -->
                    <div class="main-view-container" id="mainDrawingContainer">
                        <img id="activeElevationImg" 
                             src="{{ $mainImg }}" 
                             alt="{{ $product->pr_title }}"
                             onerror="this.onerror=null;this.src='{{ asset('assets/img/gallery/gallery1.png') }}';" />
                        <span class="blueprint-watermark"><i class="fa-solid fa-vector-square"></i> DOZO Elevation Blueprint</span>
                    </div>

                    <!-- Multi-Image Elevation Gallery Thumbnails -->
                    @if(count($gallery) > 0 || !empty($product->pr_image))
                    <div class="thumbnail-gallery-row">
                        <!-- Primary Image Thumbnail -->
                        <div class="thumb-btn active" onclick="switchElevationImage('{{ $mainImg }}', this)">
                            <img src="{{ $mainImg }}" alt="Elevation View" onerror="this.onerror=null;this.src='{{ asset('assets/img/gallery/gallery1.png') }}';" />
                        </div>

                        <!-- Additional Elevation & Section Drawings -->
                        @foreach($gallery as $gIndex => $gPath)
                            @php $fullGPath = asset('storage/' . $gPath); @endphp
                            <div class="thumb-btn" onclick="switchElevationImage('{{ $fullGPath }}', this)">
                                <img src="{{ $fullGPath }}" alt="Technical Section {{ $gIndex + 1 }}" onerror="this.onerror=null;this.src='{{ asset('assets/img/gallery/gallery1.png') }}';" />
                            </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>

            <!-- Right: Architectural Specification Matrix -->
            <div class="col-lg-5">
                <div class="specs-matrix-card">
                    <div class="specs-header-title">
                        <span><i class="fa-solid fa-clipboard-list mr-2"></i> Technical Specifications</span>
                        <small style="color: #ff5f13; font-weight: 700;">DOZO-SPEC</small>
                    </div>

                    <table class="specs-table">
                        <tbody>
                            <tr>
                                <th>Type</th>
                                <td>{{ !empty($product->profile_type) ? $product->profile_type : ($product->subCategory->sub_category ?? 'Aluminium Window System') }}</td>
                            </tr>
                            <tr>
                                <th>Dimensions</th>
                                <td>{{ !empty($product->dimensions) ? $product->dimensions : '1200 x 1200 mm (Customizable)' }}</td>
                            </tr>
                            <tr>
                                <th>Glass Spec</th>
                                <td>{{ !empty($product->glass_spec) ? $product->glass_spec : 'Consider 5mm / 6mm Clear Toughened Glass' }}</td>
                            </tr>
                            <tr>
                                <th>Rate / Sq.M</th>
                                <td>
                                    <span class="rate-highlight">{{ !empty($product->rate_sqm) ? $product->rate_sqm : '6399/- ***' }}</span>
                                </td>
                            </tr>
                            @if(!empty($product->hardware_spec))
                            <tr>
                                <th>Hardware & Fittings</th>
                                <td>{{ $product->hardware_spec }}</td>
                            </tr>
                            @endif
                            <tr>
                                <th>System Series</th>
                                <td>{{ $product->mainCategory->main_category ?? 'Aluminium Architectural Series' }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="specs-terms-note">
                        *** Terms and Conditions Apply. Structural wind-load analysis and on-site acoustic calibration available on request.
                    </div>
                </div>

                <!-- Action CTA Box -->
                <div class="product-cta-box">
                    <a href="{{ url('/inquiry?product=' . urlencode($product->pr_title)) }}" class="btn-quotation-cta">
                        <i class="fa-solid fa-calculator"></i> Request System Quotation
                    </a>
                    <a href="{{ asset('catelogue.pdf') }}" target="_blank" class="btn-download-cad">
                        <i class="fa-solid fa-file-pdf text-danger"></i> Download Technical Catalogue (PDF)
                    </a>
                </div>
            </div>
        </div>

        <!-- Description & System Engineering Details -->
        <div class="row">
            <div class="col-12">
                <div class="product-narrative-card">
                    <h3 class="narrative-title">System Overview & Architectural Description</h3>
                    <div class="narrative-body">
                        {{ $product->pr_desc ?? 'Engineered using high-grade aluminium alloy 6063-T6 with precision thermal break barriers, delivering industry-leading acoustic reduction and thermal insulation.' }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Architectural Products -->
@if(isset($relatedProducts) && count($relatedProducts) > 0)
<section class="related-products-section">
    <div class="container">
        <div class="section-tittle mb-35">
            <h2>Related Window & Door Systems</h2>
            <p>Explore other precision-crafted fenestration solutions in this series.</p>
        </div>

        <div class="row">
            @foreach($relatedProducts as $relProduct)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="dozo-product-card" style="background: #f8fafc; border-radius: 10px; border: 1px solid #e2e8f0; overflow: hidden; padding: 15px; height: 100%;">
                    <div style="height: 180px; overflow: hidden; border-radius: 6px; margin-bottom: 12px; background: #fff; text-align: center;">
                        <a href="{{ url('/product/' . ($relProduct->slug ?? $relProduct->id)) }}">
                            <img src="{{ !empty($relProduct->pr_image) ? asset('storage/' . $relProduct->pr_image) : asset('assets/img/gallery/gallery1.png') }}" 
                                 alt="{{ $relProduct->pr_title }}"
                                 style="max-width: 100%; height: 100%; object-fit: contain;"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/img/gallery/gallery1.png') }}';" />
                        </a>
                    </div>
                    <h4 style="font-size: 16px; font-weight: 800; margin-bottom: 8px;">
                        <a href="{{ url('/product/' . ($relProduct->slug ?? $relProduct->id)) }}" style="color: #111;">
                            {{ $relProduct->pr_title }}
                        </a>
                    </h4>
                    <p style="font-size: 13px; color: #666; margin-bottom: 12px;">
                        <i class="fa-solid fa-circle-dot" style="color: #ff5f13;"></i> {{ $relProduct->subCategory->sub_category ?? $relProduct->mainCategory->main_category }}
                    </p>
                    <a href="{{ url('/product/' . ($relProduct->slug ?? $relProduct->id)) }}" style="font-size: 13px; font-weight: 700; color: #ff5f13;">
                        View Elevation & Specs <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection

@section('scripts')
<script>
    function switchElevationImage(src, btnElement) {
        const activeImg = document.getElementById('activeElevationImg');
        if (activeImg) {
            activeImg.style.opacity = '0.4';
            setTimeout(() => {
                activeImg.src = src;
                activeImg.style.opacity = '1';
            }, 150);
        }
        document.querySelectorAll('.thumb-btn').forEach(btn => btn.classList.remove('active'));
        if (btnElement) {
            btnElement.classList.add('active');
        }
    }
</script>
@endsection
