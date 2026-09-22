@extends('frontend.layouts.app')

@section('title', ($blog->b_title ?? 'Blog Details') . ' | DOZO Windows')

@section('styles')
<style>
    /* Modern Blog Breadcrumb Header (No BG Image) */
    .blog-header-banner {
        background: linear-gradient(135deg, #111111 0%, #1a1a1a 50%, #242424 100%);
        padding: 175px 0 50px 0;
        position: relative;
        border-bottom: 3px solid #ff5f13;
    }

    @media (max-width: 991px) {
        .blog-header-banner {
            padding: 130px 0 40px 0;
        }
    }

    .blog-header-banner .breadcrumb-nav {
        margin-bottom: 15px;
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
        color: #e0e0e0;
        max-width: 320px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .blog-header-banner h1 {
        color: #ffffff;
        font-size: 32px;
        font-weight: 800;
        line-height: 1.3;
        margin-bottom: 15px;
    }

    .blog-meta-bar {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 15px;
        color: #bbbbbb;
        font-size: 14px;
    }

    .blog-meta-bar .badge-tag {
        background: #ff5f13;
        color: #ffffff;
        font-size: 12px;
        font-weight: 700;
        padding: 4px 12px;
        border-radius: 4px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .blog-meta-bar span i {
        color: #ff5f13;
        margin-right: 5px;
    }

    /* Single Post Styling */
    .single-post-card {
        background: #ffffff;
        border-radius: 12px;
        border: 1px solid #eef0f3;
        padding: 30px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        margin-bottom: 30px;
    }

    .single-post-img-wrapper {
        border-radius: 10px;
        overflow: hidden;
        margin-bottom: 25px;
        background: #f8f9fa;
        text-align: center;
    }

    .single-post-img-wrapper img {
        width: 100%;
        max-height: 480px;
        object-fit: cover;
        border-radius: 10px;
    }

    .single-post-title {
        font-size: 26px;
        font-weight: 800;
        color: #111111;
        margin-bottom: 20px;
        line-height: 1.35;
    }

    .single-post-quote-box {
        background: rgba(255, 95, 19, 0.06);
        border-left: 4px solid #ff5f13;
        padding: 20px 25px;
        border-radius: 0 8px 8px 0;
        margin: 25px 0;
        position: relative;
    }

    .single-post-quote-box i.quote-icon {
        color: #ff5f13;
        font-size: 24px;
        margin-bottom: 8px;
        display: block;
        opacity: 0.8;
    }

    .single-post-quote-box p {
        font-size: 17px;
        font-style: italic;
        font-weight: 600;
        color: #222222;
        margin: 0;
        line-height: 1.6;
    }

    .single-post-body {
        font-size: 16px;
        line-height: 1.8;
        color: #444444;
        margin-bottom: 30px;
        white-space: pre-line;
    }

    /* Share & Back Section */
    .post-footer-action {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 15px;
        border-top: 1px solid #eeeeee;
        padding-top: 20px;
        margin-top: 25px;
    }

    .post-share-buttons {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .post-share-buttons span {
        font-weight: 700;
        color: #111111;
        font-size: 14px;
    }

    .post-share-btn {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #ffffff;
        font-size: 14px;
        transition: transform 0.2s;
    }

    .post-share-btn:hover {
        transform: translateY(-2px);
        color: #ffffff;
    }

    .share-wa { background: #25d366; }
    .share-li { background: #0077b5; }
    .share-fb { background: #1877f2; }
    .share-tw { background: #1da1f2; }

    .btn-back-blogs {
        background: #111111;
        color: #ffffff;
        font-weight: 700;
        padding: 10px 22px;
        border-radius: 6px;
        font-size: 14px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: background 0.2s;
    }

    .btn-back-blogs:hover {
        background: #ff5f13;
        color: #ffffff;
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
        background: linear-gradient(135deg, #111111, #1e1e1e);
        color: #ffffff;
        border-radius: 10px;
        padding: 25px 20px;
        text-align: center;
        border: 1px solid #2d2d2d;
    }

    .sidebar-catalogue-box i.pdf-icon {
        font-size: 42px;
        color: #ff5f13;
        margin-bottom: 12px;
        display: inline-block;
    }

    .sidebar-catalogue-box h4 {
        color: #ffffff;
        font-size: 18px;
        font-weight: 800;
        margin-bottom: 8px;
    }

    .sidebar-catalogue-box p {
        color: #a5a5a5;
        font-size: 13px;
        line-height: 1.5;
        margin-bottom: 18px;
    }

    .sidebar-download-btn {
        background: #ff5f13;
        color: #ffffff !important;
        font-weight: 700;
        font-size: 14px;
        padding: 12px 24px;
        border-radius: 6px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        transition: all 0.2s ease-in-out;
        width: 100%;
        text-decoration: none;
        box-shadow: 0 4px 12px rgba(255, 95, 19, 0.25);
    }

    .sidebar-download-btn:hover {
        background: #e04e0a;
        color: #ffffff !important;
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(255, 95, 19, 0.4);
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

    @media (max-width: 768px) {
        .blog-header-banner h1 {
            font-size: 24px;
        }
        .single-post-card {
            padding: 20px 15px;
        }
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
                        <li><a href="/blog">Blogs</a></li>
                        <li class="active" aria-current="page">{{ $blog->b_title ?? 'Article' }}</li>
                    </ol>
                </nav>

                <h1>{{ $blog->b_title }}</h1>

                <div class="blog-meta-bar">
                    @if(!empty($blog->b_tag))
                        <span class="badge-tag">{{ $blog->b_tag }}</span>
                    @endif
                    <span><i class="fa-regular fa-calendar-days"></i> {{ $blog->b_date ?? $blog->created_at->format('d M, Y') }}</span>
                    <span><i class="fa-regular fa-clock"></i> 3 Min Read</span>
                    <span><i class="fa-solid fa-building"></i> DOZO House of Windows</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Details Area -->
<section class="section-padding bg-watermark-thermal" style="padding: 45px 0 55px 0; background: #fafbfc;">
    <div class="container">
        <div class="row">
            <!-- Main Post Content -->
            <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="single-post-card">
                    <!-- Featured Image -->
                    @if(!empty($blog->b_img))
                    <div class="single-post-img-wrapper">
                        <img src="{{ asset('storage/' . $blog->b_img) }}" alt="{{ $blog->b_title }}" />
                    </div>
                    @endif

                    <h2 class="single-post-title">{{ $blog->b_title }}</h2>

                    <!-- Quote Highlight Box -->
                    @if(!empty($blog->b_qt))
                    <div class="single-post-quote-box">
                        <i class="fa-solid fa-quote-left quote-icon"></i>
                        <p>{{ $blog->b_qt }}</p>
                    </div>
                    @endif

                    <!-- Article Body Content -->
                    <div class="single-post-body">
                        {{ $blog->b_desc }}
                    </div>

                    <!-- Post Footer & Share -->
                    <div class="post-footer-action">
                        <div class="post-share-buttons">
                            <span>Share this article:</span>
                            <a href="https://api.whatsapp.com/send?text={{ urlencode($blog->b_title . ' ' . url()->current()) }}" target="_blank" class="post-share-btn share-wa" title="Share on WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" target="_blank" class="post-share-btn share-li" title="Share on LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" class="post-share-btn share-fb" title="Share on Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://twitter.com/intent/tweet?text={{ urlencode($blog->b_title) }}&url={{ urlencode(url()->current()) }}" target="_blank" class="post-share-btn share-tw" title="Share on Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                        </div>

                        <a href="/blog" class="btn-back-blogs">
                            <i class="fa-solid fa-arrow-left"></i> Back to All Blogs
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="col-lg-4">
                <!-- Recent Posts Widget -->
                <div class="blog-sidebar-card">
                    <h3 class="blog-sidebar-title">Recent Articles</h3>

                    @if(isset($blogs) && count($blogs) > 0)
                        @foreach($blogs as $recentBlog)
                        <div class="recent-post-row">
                            @if(!empty($recentBlog->b_img))
                                <img src="{{ asset('storage/' . $recentBlog->b_img) }}" alt="{{ $recentBlog->b_title }}">
                            @else
                                <img src="{{ asset('assets/img/blog/single_blog_1.png') }}" alt="Post thumbnail">
                            @endif
                            <div class="recent-post-info">
                                <h4>
                                    <a href="{{ url('/blog/' . ($recentBlog->slug ?? $recentBlog->id)) }}">{{ Str::limit($recentBlog->b_title ?? $recentBlog->b_qt, 55) }}</a>
                                </h4>
                                <span><i class="fa-regular fa-calendar-days"></i> {{ $recentBlog->b_date ?? $recentBlog->created_at->format('d M, Y') }}</span>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <p style="color: #777; font-size: 13px;">No recent articles available.</p>
                    @endif
                </div>

                <!-- Download Catalogue Sidebar Banner -->
                <div class="blog-sidebar-card sidebar-catalogue-box">
                    <i class="fa-solid fa-file-pdf pdf-icon"></i>
                    <h4>DOZO Product Catalogue</h4>
                    <p>Explore our complete range of High-Performance Aluminium Windows & Facade Systems.</p>
                    <a href="{{ asset('catelogue.pdf') }}" target="_blank" class="sidebar-download-btn">
                        <i class="fa-solid fa-file-pdf"></i> Download Catalogue (PDF)
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
