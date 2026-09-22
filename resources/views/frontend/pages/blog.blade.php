@extends('frontend.layouts.app')

@section('title', 'Latest News & Architectural Insights | DOZO Windows')

@section('styles')
<style>
    /* Modern Blog Breadcrumb Header (No BG Image) */
    .blog-header-banner {
        background: linear-gradient(135deg, #111111 0%, #1a1a1a 50%, #242424 100%);
        padding: 55px 0 45px 0;
        position: relative;
        border-bottom: 3px solid #ff5f13;
    }

    .blog-header-banner .breadcrumb-nav {
        margin-bottom: 12px;
    }

    .blog-header-banner .breadcrumb-nav ol {
        background: transparent;
        padding: 0;
        margin: 0;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 8px;
    }

    .blog-header-banner .breadcrumb-nav li {
        font-size: 14px;
        color: #a5a5a5;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
    }

    .blog-header-banner .breadcrumb-nav li a {
        color: #ff5f13;
        transition: color 0.2s;
    }

    .blog-header-banner .breadcrumb-nav li a:hover {
        color: #ffffff;
    }

    .blog-header-banner .breadcrumb-nav li::after {
        content: "/";
        margin-left: 8px;
        color: #666666;
    }

    .blog-header-banner .breadcrumb-nav li:last-child::after {
        content: "";
    }

    .blog-header-banner .breadcrumb-nav li.active {
        color: #ffffff;
        font-weight: 600;
    }

    .blog-header-banner h1 {
        color: #ffffff;
        font-size: 32px;
        font-weight: 800;
        line-height: 1.3;
        margin-bottom: 10px;
    }

    .blog-header-banner p {
        color: #bbbbbb;
        font-size: 15px;
        margin: 0;
    }

    /* Blog Card Item */
    .blog_item {
        background: #ffffff;
        border-radius: 10px;
        border: 1px solid #eef0f3;
        overflow: hidden;
        margin-bottom: 30px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.03);
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .blog_item:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.07);
    }

    .blog_item_img {
        position: relative;
        overflow: hidden;
        max-height: 380px;
    }

    .blog_item_img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s;
    }

    .blog_item:hover .blog_item_img img {
        transform: scale(1.03);
    }

    .blog_item_date {
        position: absolute;
        bottom: 15px;
        left: 15px;
        background: #ff5f13;
        color: #ffffff !important;
        padding: 8px 16px;
        border-radius: 6px;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    .blog_item_date h3 {
        color: #ffffff;
        font-size: 20px;
        font-weight: 800;
        margin: 0;
        line-height: 1;
    }

    .blog_item_date p {
        color: #ffffff;
        font-size: 11px;
        text-transform: uppercase;
        margin: 0;
        font-weight: 700;
    }

    .blog_details {
        padding: 25px;
    }

    .blog_details h2 {
        font-size: 22px;
        font-weight: 800;
        color: #111111;
        line-height: 1.4;
        margin-bottom: 12px;
        transition: color 0.2s;
    }

    .blog_details h2:hover {
        color: #ff5f13;
    }

    .blog_details p {
        color: #555555;
        font-size: 15px;
        line-height: 1.7;
        margin-bottom: 15px;
    }

    .blog-info-link {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        padding-top: 15px;
        border-top: 1px solid #f0f0f0;
        margin: 0;
        list-style: none;
    }

    .blog-info-link li a {
        font-size: 13px;
        color: #777777;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .blog-info-link li a i {
        color: #ff5f13;
    }

    .blog-info-link li a:hover {
        color: #ff5f13;
    }

    /* Sidebar Styling */
    .blog-sidebar-card {
        background: #ffffff;
        border: 1px solid #eef0f3;
        border-radius: 10px;
        padding: 25px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
        margin-bottom: 25px;
    }

    .blog-sidebar-title {
        font-size: 18px;
        font-weight: 800;
        color: #111111;
        margin-bottom: 18px;
        padding-bottom: 10px;
        border-bottom: 2px solid #ff5f13;
        display: inline-block;
    }

    .recent-post-row {
        display: flex;
        gap: 15px;
        align-items: center;
        margin-bottom: 18px;
        padding-bottom: 14px;
        border-bottom: 1px solid #f2f2f2;
    }

    .recent-post-row:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: none;
    }

    .recent-post-row img {
        width: 75px;
        height: 65px;
        object-fit: cover;
        border-radius: 6px;
        flex-shrink: 0;
    }

    .recent-post-info h4 {
        font-size: 14px;
        font-weight: 700;
        line-height: 1.4;
        margin-bottom: 5px;
    }

    .recent-post-info h4 a {
        color: #111111;
        transition: color 0.2s;
    }

    .recent-post-info h4 a:hover {
        color: #ff5f13;
    }

    .recent-post-info span {
        font-size: 12px;
        color: #888888;
        display: inline-flex;
        align-items: center;
        gap: 4px;
    }

    /* Sidebar Download Banner */
    .sidebar-catalogue-box {
        background: linear-gradient(135deg, #111111, #222222);
        color: #ffffff;
        border-radius: 10px;
        padding: 25px 20px;
        text-align: center;
        border: 1px solid #333333;
    }

    .sidebar-catalogue-box i {
        font-size: 38px;
        color: #ff5f13;
        margin-bottom: 12px;
    }

    .sidebar-catalogue-box h4 {
        color: #ffffff;
        font-size: 17px;
        font-weight: 800;
        margin-bottom: 8px;
    }

    .sidebar-catalogue-box p {
        color: #a5a5a5;
        font-size: 13px;
        margin-bottom: 15px;
    }

    .sidebar-catalogue-box a {
        background: #ff5f13;
        color: #ffffff;
        font-weight: 700;
        font-size: 13px;
        padding: 9px 18px;
        border-radius: 5px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: opacity 0.2s;
    }

    .sidebar-catalogue-box a:hover {
        opacity: 0.9;
        color: #ffffff;
    }

    /* Tag Cloud */
    .sidebar-tag-cloud {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .sidebar-tag-item {
        background: #f4f6f8;
        color: #333333;
        font-size: 12px;
        font-weight: 600;
        padding: 5px 12px;
        border-radius: 4px;
        border: 1px solid #e2e6ea;
        transition: all 0.2s;
    }

    .sidebar-tag-item:hover {
        background: #ff5f13;
        color: #ffffff;
        border-color: #ff5f13;
    }
</style>
@endsection

@section('content')
<!-- Modern Breadcrumb Header (No BG Image) -->
<section class="blog-header-banner">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 col-lg-11">
                <nav class="breadcrumb-nav" aria-label="breadcrumb">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li class="active" aria-current="page">Blogs</li>
                    </ol>
                </nav>

                <h1>Latest News & Architectural Insights</h1>
                <p>Stay updated with the latest advancements in Aluminium Fenestration, Acoustic Insulation, and Facade Design.</p>
            </div>
        </div>
    </div>
</section>

<!-- Blog List Area -->
<section class="blog_area section-padding" style="padding: 45px 0 55px 0; background: #fafbfc;">
    <div class="container">
        <div class="row">
            <!-- Left Blog List -->
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    @if(isset($blogs) && count($blogs) > 0)
                        @foreach($blogs as $blog)
                        <article class="blog_item">
                            @if(!empty($blog->b_img))
                            <div class="blog_item_img">
                                <a href="{{ url('/blog-details/' . $blog->id) }}">
                                    <img class="card-img rounded-0" src="{{ asset('storage/' . $blog->b_img) }}" alt="{{ $blog->b_title }}">
                                </a>
                                <div class="blog_item_date">
                                    <h3>{{ $blog->created_at ? $blog->created_at->format('d') : '01' }}</h3>
                                    <p>{{ $blog->created_at ? $blog->created_at->format('M') : 'JAN' }}</p>
                                </div>
                            </div>
                            @endif

                            <div class="blog_details">
                                <a class="d-inline-block" href="{{ url('/blog-details/' . $blog->id) }}">
                                    <h2>{{ $blog->b_title }}</h2>
                                </a>
                                <p>{{ Str::limit($blog->b_desc ?? $blog->b_qt, 160) }}</p>
                                <ul class="blog-info-link">
                                    @if(!empty($blog->b_tag))
                                        <li><a href="#"><i class="fa fa-tag"></i> {{ $blog->b_tag }}</a></li>
                                    @endif
                                    @if(!empty($blog->b_qt))
                                        <li><a href="#"><i class="fa fa-quote-left"></i> {{ Str::limit($blog->b_qt, 35) }}</a></li>
                                    @endif
                                </ul>
                            </div>
                        </article>
                        @endforeach

                        <!-- Pagination -->
                        @if($blogs->hasPages())
                        <nav class="blog-pagination justify-content-center d-flex mt-4">
                            {{ $blogs->links() }}
                        </nav>
                        @endif
                    @else
                        <div class="alert alert-info">No blog articles published yet.</div>
                    @endif
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="col-lg-4">
                <!-- Recent Posts Widget -->
                <div class="blog-sidebar-card">
                    <h3 class="blog-sidebar-title">Recent Articles</h3>

                    @if(isset($blogData) && count($blogData) > 0)
                        @foreach($blogData as $b)
                        <div class="recent-post-row">
                            @if(!empty($b->b_img))
                                <img src="{{ asset('storage/' . $b->b_img) }}" alt="{{ $b->b_title }}">
                            @else
                                <img src="{{ asset('assets/img/blog/single_blog_1.png') }}" alt="Post thumbnail">
                            @endif
                            <div class="recent-post-info">
                                <h4>
                                    <a href="{{ url('/blog-details/' . $b->id) }}">{{ Str::limit($b->b_title ?? $b->b_qt, 55) }}</a>
                                </h4>
                                <span><i class="fa-regular fa-calendar-days"></i> {{ $b->b_date ?? ($b->created_at ? $b->created_at->format('d M, Y') : '') }}</span>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>

                <!-- Download Catalogue Sidebar Banner -->
                <div class="blog-sidebar-card sidebar-catalogue-box">
                    <i class="fa-solid fa-file-pdf"></i>
                    <h4>DOZO Product Catalogue</h4>
                    <p>Explore our complete range of High-Performance Aluminium Windows & Facade Systems.</p>
                    <a href="{{ asset('catelogue.pdf') }}" target="_blank">
                        <i class="fa-solid fa-download"></i> Download Catalogue (PDF)
                    </a>
                </div>

                <!-- Industry Tags Widget -->
                <div class="blog-sidebar-card">
                    <h3 class="blog-sidebar-title">Popular Tags</h3>
                    <div class="sidebar-tag-cloud">
                        <span class="sidebar-tag-item">#AluminiumWindows</span>
                        <span class="sidebar-tag-item">#FacadeEngineering</span>
                        <span class="sidebar-tag-item">#ThermalBreak</span>
                        <span class="sidebar-tag-item">#SoundproofGlass</span>
                        <span class="sidebar-tag-item">#SlidingDoors</span>
                        <span class="sidebar-tag-item">#CasementWindows</span>
                        <span class="sidebar-tag-item">#Architecture</span>
                        <span class="sidebar-tag-item">#DOZO</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
