@extends('frontend.layouts.app')

@section('title', (isset($maincategory) ? $maincategory->main_category : 'Our Products') . ' | DOZO Architectural Windows')

@section('styles')
<style>
    /* Modern Product Header Banner (No BG Image) */
    .product-header-banner {
        background: linear-gradient(135deg, #111111 0%, #1a1a1a 50%, #242424 100%);
        padding: 175px 0 50px 0;
        position: relative;
        border-bottom: 3px solid #ff5f13;
    }

    @media (max-width: 991px) {
        .product-header-banner {
            padding: 130px 0 40px 0;
        }
    }

    .product-header-banner .breadcrumb-nav {
        margin-bottom: 12px;
    }

    .product-header-banner .breadcrumb-nav ol {
        background: transparent;
        padding: 0;
        margin: 0;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 8px;
    }

    .product-header-banner .breadcrumb-nav li {
        font-size: 14px;
        color: #a5a5a5;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
    }

    .product-header-banner .breadcrumb-nav li a {
        color: #ff5f13;
        transition: color 0.2s;
    }

    .product-header-banner .breadcrumb-nav li a:hover {
        color: #ffffff;
    }

    .product-header-banner .breadcrumb-nav li::after {
        content: "/";
        margin-left: 8px;
        color: #666666;
    }

    .product-header-banner .breadcrumb-nav li:last-child::after {
        content: "";
    }

    .product-header-banner .breadcrumb-nav li.active {
        color: #ffffff;
        font-weight: 600;
    }

    .product-header-banner h1 {
        color: #ffffff;
        font-size: 34px;
        font-weight: 800;
        line-height: 1.3;
        margin-bottom: 10px;
    }

    .product-header-banner p {
        color: #bbbbbb;
        font-size: 15px;
        margin: 0;
    }

    /* Section Styling */
    .product-showcase-section {
        padding: 55px 0 75px 0;
        background: #f8f9fb;
    }

    .product-section-title-wrap {
        margin-bottom: 40px;
        position: relative;
    }

    .product-section-title-wrap .sub-title {
        color: #ff5f13;
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        display: block;
        margin-bottom: 6px;
    }

    .product-section-title-wrap h2 {
        font-size: 32px;
        font-weight: 800;
        color: #111111;
        margin: 0;
        text-transform: uppercase;
        letter-spacing: -0.5px;
    }

    /* Modern Architectural Product Card */
    .dozo-product-card {
        background: #ffffff;
        border-radius: 12px;
        border: 1px solid #eaeef2;
        overflow: hidden;
        margin-bottom: 30px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.04);
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
        height: calc(100% - 30px);
    }

    .dozo-product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 14px 35px rgba(0, 0, 0, 0.09);
        border-color: #ffd8c7;
    }

    .dozo-card-img-wrap {
        position: relative;
        width: 100%;
        height: 240px;
        overflow: hidden;
        background: #f1f3f6;
        border-bottom: 1px solid #f0f0f0;
    }

    .dozo-card-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .dozo-product-card:hover .dozo-card-img-wrap img {
        transform: scale(1.05);
    }

    .dozo-badge-specs {
        position: absolute;
        top: 12px;
        right: 12px;
        background: rgba(17, 17, 17, 0.85);
        backdrop-filter: blur(4px);
        color: #ffffff;
        font-size: 11px;
        font-weight: 700;
        padding: 4px 10px;
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .dozo-card-content {
        padding: 22px 20px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .dozo-product-title {
        font-size: 18px;
        font-weight: 800;
        color: #111111;
        line-height: 1.35;
        margin-bottom: 14px;
        min-height: 48px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .dozo-product-title a {
        color: #111111;
        transition: color 0.2s;
    }

    .dozo-product-title a:hover {
        color: #ff5f13;
    }

    .dozo-category-list {
        margin: 0 0 16px 0;
        padding: 0;
        list-style: none;
    }

    .dozo-category-list li {
        font-size: 14px;
        font-weight: 700;
        color: #222222;
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 6px;
    }

    .dozo-category-list li i {
        color: #ff5f13;
        font-size: 13px;
        flex-shrink: 0;
    }

    .dozo-specs-strip {
        background: #fafbfc;
        border: 1px solid #edf0f3;
        border-radius: 8px;
        padding: 10px 12px;
        margin-bottom: 16px;
        font-size: 12px;
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .dozo-spec-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #555555;
    }

    .dozo-spec-item strong {
        color: #111111;
        font-weight: 700;
    }

    .dozo-card-footer {
        margin-top: auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 14px;
        border-top: 1px solid #f0f2f5;
    }

    .dozo-rate-box {
        display: flex;
        flex-direction: column;
    }

    .dozo-rate-box .label {
        font-size: 11px;
        color: #888888;
        text-transform: uppercase;
        font-weight: 600;
    }

    .dozo-rate-box .price {
        font-size: 15px;
        font-weight: 800;
        color: #ff5f13;
    }

    .dozo-btn-view-specs {
        background: #111111;
        color: #ffffff !important;
        font-size: 12px;
        font-weight: 700;
        padding: 8px 16px;
        border-radius: 6px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: all 0.2s;
        text-decoration: none;
    }

    .dozo-btn-view-specs:hover {
        background: #ff5f13;
        color: #ffffff !important;
        transform: translateY(-1px);
    }
</style>
@endsection

@section('content')

<!-- Header Banner -->
<section class="product-header-banner">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 col-lg-11">
                <nav class="breadcrumb-nav" aria-label="breadcrumb">
                    <ol>
                        <li><a href="/">Home</a></li>
                        @if(isset($maincategory))
                            <li><a href="/about">Categories</a></li>
                            <li class="active" aria-current="page">{{ $maincategory->main_category }}</li>
                        @else
                            <li class="active" aria-current="page">Products</li>
                        @endif
                    </ol>
                </nav>

                <h1>{{ isset($maincategory) ? $maincategory->main_category : 'Our Architectural Systems' }}</h1>
                <p>Engineered for unmatched acoustic attenuation, structural integrity, and architectural luxury.</p>
            </div>
        </div>
    </div>
</section>

<!-- Product Grid Section -->
<section class="product-showcase-section bg-watermark-subframe">
    <div class="container">
        <div class="product-section-title-wrap">
            <span class="sub-title">Engineered Perfection</span>
            <h2>Our Products</h2>
        </div>

        <div class="row">
            @if(isset($products) && count($products) > 0)
                @foreach($products as $product)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="dozo-product-card">
                        <!-- Product Elevation / Main Image -->
                        <div class="dozo-card-img-wrap">
                            <a href="{{ url('/product/' . ($product->slug ?? $product->id)) }}">
                                <img src="{{ !empty($product->pr_image) ? asset('storage/' . $product->pr_image) : asset('assets/img/gallery/gallery1.png') }}" 
                                     alt="{{ $product->pr_title }}"
                                     onerror="this.onerror=null;this.src='{{ asset('assets/img/gallery/gallery1.png') }}';" />
                            </a>
                            @if(!empty($product->gallery_images) && count($product->gallery_images) > 0)
                                <span class="dozo-badge-specs"><i class="fa-solid fa-layer-group"></i> {{ count($product->gallery_images) + 1 }} Views</span>
                            @endif
                        </div>

                        <!-- Card Content -->
                        <div class="dozo-card-content">
                            <h3 class="dozo-product-title">
                                <a href="{{ url('/product/' . ($product->slug ?? $product->id)) }}">
                                    {{ $product->pr_title }}
                                </a>
                            </h3>

                            <!-- Category List with Orange Bullets matching the drawing design -->
                            <ul class="dozo-category-list">
                                @if(!empty($product->mainCategory))
                                    <li>
                                        <i class="fa-solid fa-circle-dot"></i>
                                        <a href="{{ route('category.products', $product->mainCategory->slug ?? $product->mainCategory->id) }}" class="text-dark text-decoration-none">
                                            <span>{{ $product->mainCategory->main_category }}</span>
                                        </a>
                                    </li>
                                @endif
                                @if(!empty($product->subCategory))
                                    <li>
                                        <i class="fa-solid fa-circle-dot"></i>
                                        <span>{{ $product->subCategory->sub_category }}</span>
                                    </li>
                                @endif
                            </ul>

                            <!-- Technical Specs Strip if present -->
                            @if(!empty($product->dimensions) || !empty($product->glass_spec))
                            <div class="dozo-specs-strip">
                                @if(!empty($product->dimensions))
                                    <div class="dozo-spec-item">
                                        <span>Standard Size:</span>
                                        <strong>{{ $product->dimensions }}</strong>
                                    </div>
                                @endif
                                @if(!empty($product->glass_spec))
                                    <div class="dozo-spec-item">
                                        <span>Glass Spec:</span>
                                        <strong>{{ Str::limit($product->glass_spec, 24) }}</strong>
                                    </div>
                                @endif
                            </div>
                            @endif

                            <!-- Card Footer Action -->
                            <div class="dozo-card-footer">
                                <div class="dozo-rate-box">
                                    <span class="label">Estimated Rate</span>
                                    <span class="price">{{ !empty($product->rate_sqm) ? $product->rate_sqm : 'On Request' }}</span>
                                </div>
                                <a href="{{ url('/product/' . ($product->slug ?? $product->id)) }}" class="dozo-btn-view-specs">
                                    Details <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <div class="col-12">
                    <div class="alert alert-warning py-4 text-center">
                        <i class="fa-solid fa-circle-info fa-2x mb-3 text-warning"></i>
                        <h4>No Products Found</h4>
                        <p class="mb-0">There are currently no products available in this category.</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>

@endsection
