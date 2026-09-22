<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Admin Dashboard') | DOZO</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('Admin/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/vendors/css/vendor.bundle.base.css') }}">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="{{ asset('Admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap4.min.css">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('Admin/css/vertical-layout-light/style.css') }}">
    <link rel="icon" href="{{ asset('assets/img/logo/dlogo.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        :root {
            --dozo-primary: #ff5f13;
            --dozo-dark: #111111;
        }

        .navbar .navbar-brand-wrapper {
            background: #111111 !important;
        }

        .sidebar .nav .nav-item.active > .nav-link {
            background: rgba(255, 95, 19, 0.1);
            color: #ff5f13;
        }

        .sidebar .nav .nav-item.active > .nav-link i,
        .sidebar .nav .nav-item.active > .nav-link .menu-title {
            color: #ff5f13;
        }

        .sidebar .nav .nav-item .nav-link:hover {
            color: #ff5f13;
        }

        .btn-primary, .btn-success.dozo-btn {
            background-color: #ff5f13 !important;
            border-color: #ff5f13 !important;
            color: #ffffff !important;
        }

        .btn-primary:hover, .btn-success.dozo-btn:hover {
            background-color: #e04e0a !important;
            border-color: #e04e0a !important;
        }

        .badge-dozo {
            background: rgba(255, 95, 19, 0.15);
            color: #ff5f13;
            border: 1px solid rgba(255, 95, 19, 0.3);
            font-weight: 700;
        }

        /* Modern Table Styles */
        .table thead th {
            background-color: #f8fafc;
            color: #1e293b;
            font-weight: 700;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-top: none;
            border-bottom: 2px solid #e2e8f0;
            padding: 12px 14px;
        }

        .table td {
            vertical-align: middle;
            font-size: 13.5px;
            color: #334155;
            padding: 12px 14px;
            border-bottom: 1px solid #f1f5f9;
        }

        .table-hover tbody tr:hover {
            background-color: #f8fafc;
        }

        .dataTables_wrapper .dataTables_filter input {
            border: 1.5px solid #cbd5e1;
            border-radius: 6px;
            padding: 6px 12px;
            margin-left: 8px;
            outline: none;
        }

        .dataTables_wrapper .dataTables_filter input:focus {
            border-color: #ff5f13;
            box-shadow: 0 0 0 2px rgba(255, 95, 19, 0.15);
        }

        .dataTables_wrapper .dataTables_length select {
            border: 1.5px solid #cbd5e1;
            border-radius: 6px;
            padding: 4px 8px;
            outline: none;
        }

        .page-item.active .page-link {
            background-color: #ff5f13;
            border-color: #ff5f13;
        }

        /* Floating Add Button */
        .floating-btn-div {
            position: fixed;
            bottom: 70px;
            right: 25px;
            z-index: 1000;
        }

        .floating-btn {
            color: #ffffff !important;
            background-color: #ff5f13;
            border: none;
            border-radius: 50%;
            width: 54px;
            height: 54px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 6px 16px rgba(255, 95, 19, 0.35);
            cursor: pointer;
            font-size: 1.4rem;
            transition: transform 0.2s, background-color 0.2s;
        }

        .floating-btn:hover {
            transform: scale(1.08);
            background-color: #e04e0a;
        }
    </style>

    @yield('styles')
</head>

<body>
    <div class="container-scroller">
        <!-- Navbar -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="/dashboard">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="DOZO" style="height: 36px; object-fit: contain;">
                </a>
                <a class="navbar-brand brand-logo-mini" href="/dashboard">
                    <img src="{{ asset('assets/img/logo/dlogo.ico') }}" alt="DZ">
                </a>
            </div>

            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>

                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item">
                        <a href="/" target="_blank" class="nav-link text-primary font-weight-bold" title="View Live Website">
                            <i class="fa-solid fa-arrow-up-right-from-square mr-1"></i> Live Site
                        </a>
                    </li>

                    <!-- Profile dropdown -->
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="{{ asset('assets/img/team/t1.png') }}" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="/profile">
                                <i class="ti-settings text-primary"></i> Profile
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class="ti-power-off text-primary"></i> Logout
                                </a>
                            </form>
                        </div>
                    </li>
                </ul>

                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>

        <div class="container-fluid page-body-wrapper">
            <!-- Sidebar -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <!-- Dashboard -->
                    <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
                        <a class="nav-link" href="/dashboard">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <!-- Products -->
                    <li class="nav-item {{ request()->is('product-*') ? 'active' : '' }}">
                        <a class="nav-link" data-toggle="collapse" href="#ui-products" aria-expanded="{{ request()->is('product-*') ? 'true' : 'false' }}" aria-controls="ui-products">
                            <img src="{{ asset('admin/images/window.png') }}" alt="" width="20" class="mr-2">
                            <span class="menu-title">Products</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse {{ request()->is('product-*') ? 'show' : '' }}" id="ui-products">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link {{ request()->is('product-main-category') ? 'text-primary font-weight-bold' : '' }}" href="/product-main-category">Main Category</a></li>
                                <li class="nav-item"> <a class="nav-link {{ request()->is('product-sub-category') ? 'text-primary font-weight-bold' : '' }}" href="/product-sub-category">Sub Category</a></li>
                                <li class="nav-item"> <a class="nav-link {{ request()->is('product-details') ? 'text-primary font-weight-bold' : '' }}" href="/product-details">Product Details</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Inquiries & AMC -->
                    <li class="nav-item {{ request()->is('window-inquiry') ? 'active' : '' }}">
                        <a class="nav-link" href="/window-inquiry">
                            <img src="{{ asset('admin/images/wen.png') }}" alt="" width="20" class="mr-2">
                            <span class="menu-title">Window Inquiries</span>
                        </a>
                    </li>

                    <li class="nav-item {{ request()->is('amc-*') || request()->is('window-service') ? 'active' : '' }}">
                        <a class="nav-link" data-toggle="collapse" href="#ui-services" aria-expanded="{{ request()->is('amc-*') || request()->is('window-service') ? 'true' : 'false' }}" aria-controls="ui-services">
                            <img src="{{ asset('admin/images/srv.png') }}" alt="" width="20" class="mr-2">
                            <span class="menu-title">Service & AMC</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse {{ request()->is('amc-*') || request()->is('window-service') ? 'show' : '' }}" id="ui-services">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link {{ request()->is('window-service') ? 'text-primary font-weight-bold' : '' }}" href="/window-service">Service Details</a></li>
                                <li class="nav-item"> <a class="nav-link {{ request()->is('amc-offers') ? 'text-primary font-weight-bold' : '' }}" href="/amc-offers">AMC Offers</a></li>
                                <li class="nav-item"> <a class="nav-link {{ request()->is('amc-request') ? 'text-primary font-weight-bold' : '' }}" href="/amc-request">AMC Requests</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Customer Support -->
                    <li class="nav-item {{ request()->is('customer-support') ? 'active' : '' }}">
                        <a class="nav-link" href="/customer-support">
                            <img src="{{ asset('admin/images/spt.png') }}" alt="" width="20" class="mr-2">
                            <span class="menu-title">Support Tickets</span>
                        </a>
                    </li>

                    <!-- Blogs -->
                    <li class="nav-item {{ request()->is('admin-blogs') ? 'active' : '' }}">
                        <a class="nav-link" href="/admin-blogs">
                            <img src="{{ asset('admin/images/blog.png') }}" alt="" width="20" class="mr-2">
                            <span class="menu-title">Blogs</span>
                        </a>
                    </li>

                    <!-- Banners -->
                    <li class="nav-item {{ request()->is('admin-*-banner') ? 'active' : '' }}">
                        <a class="nav-link" data-toggle="collapse" href="#ui-banners" aria-expanded="{{ request()->is('admin-*-banner') ? 'true' : 'false' }}" aria-controls="ui-banners">
                            <img src="{{ asset('admin/images/banner.png') }}" alt="" width="20" class="mr-2">
                            <span class="menu-title">Banners</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse {{ request()->is('admin-*-banner') ? 'show' : '' }}" id="ui-banners">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/admin-home-banner">Home Banner</a></li>
                                <li class="nav-item"> <a class="nav-link" href="/admin-other-banner">Other Pages Banner</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- About & Numbers -->
                    <li class="nav-item {{ request()->is('admin-about') || request()->is('admin-numbers') ? 'active' : '' }}">
                        <a class="nav-link" data-toggle="collapse" href="#ui-about" aria-expanded="{{ request()->is('admin-about') || request()->is('admin-numbers') ? 'true' : 'false' }}" aria-controls="ui-about">
                            <img src="{{ asset('admin/images/about.png') }}" alt="" width="20" class="mr-2">
                            <span class="menu-title">Company Info</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse {{ request()->is('admin-about') || request()->is('admin-numbers') ? 'show' : '' }}" id="ui-about">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/admin-about">About Company</a></li>
                                <li class="nav-item"> <a class="nav-link" href="/admin-numbers">Counter Numbers</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Testimonials -->
                    <li class="nav-item {{ request()->is('admin-testimonial') ? 'active' : '' }}">
                        <a class="nav-link" href="/admin-testimonial">
                            <img src="{{ asset('admin/images/qt.png') }}" alt="" width="20" class="mr-2">
                            <span class="menu-title">Testimonials</span>
                        </a>
                    </li>

                    <!-- Expert Team -->
                    <li class="nav-item {{ request()->is('teams') ? 'active' : '' }}">
                        <a class="nav-link" href="/teams">
                            <img src="{{ asset('admin/images/team.png') }}" alt="" width="20" class="mr-2">
                            <span class="menu-title">Expert Team</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Main Panel -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>

                <!-- Footer -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">
                            Copyright © 2026. <a href="/" target="_blank" style="color: #ff5f13; font-weight: 700;">DOZO | Façade & Fenestration System Windows</a>. All rights reserved.
                        </span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                            A brand of <a href="https://rconpl.in" target="_blank" style="color: #ff5f13;">rconpl.in</a>
                        </span>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <!-- Plugins JS -->
    <script src="{{ asset('Admin/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('Admin/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('Admin/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('Admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap4.min.js"></script>

    <!-- Skydash JS -->
    <script src="{{ asset('Admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('Admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('Admin/js/template.js') }}"></script>
    <script src="{{ asset('Admin/js/settings.js') }}"></script>

    <!-- Global SweetAlert2 Alerts Include -->
    @include('admin.includes.alerts')

    <!-- Default DataTables initializer for any table with .dataTable-modern or .table -->
    <script>
        $(document).ready(function() {
            if ($('.dataTable-modern').length > 0) {
                $('.dataTable-modern').DataTable({
                    responsive: true,
                    pageLength: 10,
                    order: [],
                    language: {
                        search: "_INPUT_",
                        searchPlaceholder: "Search records...",
                        lengthMenu: "Show _MENU_ entries"
                    }
                });
            } else if ($('.table').length > 0 && !$.fn.DataTable.isDataTable('.table')) {
                $('.table').DataTable({
                    responsive: true,
                    pageLength: 10,
                    order: [],
                    language: {
                        search: "_INPUT_",
                        searchPlaceholder: "Search records...",
                        lengthMenu: "Show _MENU_ entries"
                    }
                });
            }
        });
    </script>

    @stack('scripts')
</body>

</html>
