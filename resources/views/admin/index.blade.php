@extends('admin.layouts.app')

@section('title', 'Admin Dashboard')

@section('styles')
<style>
    .stat-card {
        border-radius: 12px;
        border: none;
        transition: transform 0.2s, box-shadow 0.2s;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
        overflow: hidden;
    }

    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    }

    .stat-icon-wrapper {
        width: 48px;
        height: 48px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }

    .quick-action-btn {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        padding: 14px 18px;
        display: flex;
        align-items: center;
        gap: 12px;
        color: #1e293b;
        font-weight: 700;
        font-size: 14px;
        transition: all 0.2s;
        text-decoration: none !important;
    }

    .quick-action-btn:hover {
        background: #fff8f5;
        border-color: #ff5f13;
        color: #ff5f13;
        transform: translateY(-2px);
    }

    .chart-container-card {
        background: #ffffff;
        border-radius: 12px;
        border: 1px solid #e2e8f0;
        padding: 22px 20px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
        height: 100%;
    }
</style>
@endsection

@section('content')
<!-- Page Header -->
<div class="row mb-4">
    <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
        <div>
            <h3 class="font-weight-bold mb-1" style="color: #111111;">DOZO Control Centre</h3>
            <p class="text-muted mb-0" style="font-size: 14px;">Welcome back to your administration dashboard and analytics overview.</p>
        </div>
        <div class="mt-2 mt-sm-0">
            <span class="badge badge-dozo p-2 px-3">
                <i class="fa-solid fa-calendar-days mr-1"></i> {{ date('l, d F Y') }}
            </span>
        </div>
    </div>
</div>

<!-- Core Metric Stats Row -->
<div class="row">
    <!-- Total Window Inquiries -->
    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
        <div class="card stat-card" style="border-left: 4px solid #ff5f13;">
            <div class="card-body p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1 text-uppercase font-weight-bold" style="font-size: 12px; letter-spacing: 0.5px;">Window Inquiries</p>
                        <h3 class="font-weight-bold mb-0" style="color: #111111;">{{ $totalInquiries ?? 0 }}</h3>
                    </div>
                    <div class="stat-icon-wrapper" style="background: rgba(255, 95, 19, 0.12); color: #ff5f13;">
                        <i class="fa-solid fa-window-restore"></i>
                    </div>
                </div>
                <div class="mt-3 pt-2 border-top d-flex justify-content-between align-items-center">
                    <a href="/window-inquiry" class="text-primary font-weight-bold" style="font-size: 12px;">View All &rarr;</a>
                    <span class="text-muted" style="font-size: 11.5px;">Active Leads</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Total AMC Requests -->
    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
        <div class="card stat-card" style="border-left: 4px solid #3b82f6;">
            <div class="card-body p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1 text-uppercase font-weight-bold" style="font-size: 12px; letter-spacing: 0.5px;">AMC Requests</p>
                        <h3 class="font-weight-bold mb-0" style="color: #111111;">{{ $totalAMC ?? 0 }}</h3>
                    </div>
                    <div class="stat-icon-wrapper" style="background: rgba(59, 130, 246, 0.12); color: #3b82f6;">
                        <i class="fa-solid fa-file-shield"></i>
                    </div>
                </div>
                <div class="mt-3 pt-2 border-top d-flex justify-content-between align-items-center">
                    <a href="/amc-request" class="text-primary font-weight-bold" style="font-size: 12px;">View All &rarr;</a>
                    <span class="text-muted" style="font-size: 11.5px;">Contracts</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Products -->
    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
        <div class="card stat-card" style="border-left: 4px solid #10b981;">
            <div class="card-body p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1 text-uppercase font-weight-bold" style="font-size: 12px; letter-spacing: 0.5px;">Products</p>
                        <h3 class="font-weight-bold mb-0" style="color: #111111;">{{ $totalProducts ?? 0 }}</h3>
                    </div>
                    <div class="stat-icon-wrapper" style="background: rgba(16, 185, 129, 0.12); color: #10b981;">
                        <i class="fa-solid fa-boxes-stacked"></i>
                    </div>
                </div>
                <div class="mt-3 pt-2 border-top d-flex justify-content-between align-items-center">
                    <a href="/product-details" class="text-primary font-weight-bold" style="font-size: 12px;">Manage &rarr;</a>
                    <span class="text-muted" style="font-size: 11.5px;">In {{ $totalMainCategories ?? 0 }} Categories</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Support Tickets -->
    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
        <div class="card stat-card" style="border-left: 4px solid #8b5cf6;">
            <div class="card-body p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1 text-uppercase font-weight-bold" style="font-size: 12px; letter-spacing: 0.5px;">Support Tickets</p>
                        <h3 class="font-weight-bold mb-0" style="color: #111111;">{{ $totalSupport ?? 0 }}</h3>
                    </div>
                    <div class="stat-icon-wrapper" style="background: rgba(139, 92, 246, 0.12); color: #8b5cf6;">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                </div>
                <div class="mt-3 pt-2 border-top d-flex justify-content-between align-items-center">
                    <a href="/customer-support" class="text-primary font-weight-bold" style="font-size: 12px;">Tickets &rarr;</a>
                    <span class="text-muted" style="font-size: 11.5px;">Queries</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quick Action Shortcuts -->
<div class="row mb-4">
    <div class="col-12">
        <div class="card" style="border-radius: 12px; border: 1px solid #e2e8f0;">
            <div class="card-body p-3">
                <h6 class="font-weight-bold mb-3 text-muted text-uppercase" style="font-size: 12px; letter-spacing: 0.5px;">
                    <i class="fa-solid fa-bolt text-warning mr-1"></i> Quick Management Shortcuts
                </h6>
                <div class="row g-2">
                    <div class="col-md-3 col-sm-6 mb-2">
                        <a href="/product-details" class="quick-action-btn">
                            <i class="fa-solid fa-circle-plus text-primary font-size-lg"></i>
                            <span>Add / Edit Products</span>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-2">
                        <a href="/window-inquiry" class="quick-action-btn">
                            <i class="fa-solid fa-list-check text-info font-size-lg"></i>
                            <span>View Inquiries</span>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-2">
                        <a href="/amc-request" class="quick-action-btn">
                            <i class="fa-solid fa-shield-halved text-success font-size-lg"></i>
                            <span>AMC Requests</span>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-2">
                        <a href="/admin-blogs" class="quick-action-btn">
                            <i class="fa-solid fa-pen-nib text-secondary font-size-lg"></i>
                            <span>Publish Blog</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Analytics Charts & Graphs Row -->
<div class="row mb-4">
    <!-- Chart 1: Monthly Trends (Window Inquiries vs AMC Requests) -->
    <div class="col-lg-8 grid-margin stretch-card">
        <div class="chart-container-card w-100">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h5 class="font-weight-bold mb-1" style="color: #111111;">Inquiry & AMC Volume Trends ({{ date('Y') }})</h5>
                    <p class="text-muted mb-0" style="font-size: 13px;">Month-by-month volume comparison of client inquiries and AMC bookings</p>
                </div>
                <div>
                    <span class="badge badge-light border p-2"><i class="fa-solid fa-chart-line text-primary mr-1"></i> Live Analytics</span>
                </div>
            </div>
            <div style="height: 290px;">
                <canvas id="inquiryTrendsChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Chart 2: Product Breakdown By Category -->
    <div class="col-lg-4 grid-margin stretch-card">
        <div class="chart-container-card w-100">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h5 class="font-weight-bold mb-1" style="color: #111111;">Product Distribution</h5>
                    <p class="text-muted mb-0" style="font-size: 13px;">Products per category</p>
                </div>
            </div>
            <div style="height: 220px; position: relative;">
                <canvas id="categoryDoughnutChart"></canvas>
            </div>
            <div class="mt-3 pt-2 border-top text-center">
                <a href="/product-main-category" class="text-primary font-weight-bold" style="font-size: 13px;">Manage Categories &rarr;</a>
            </div>
        </div>
    </div>
</div>

<!-- Recent Inquiries Table & Recent AMC Requests -->
<div class="row">
    <!-- Recent Inquiries -->
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card" style="border-radius: 12px; border: 1px solid #e2e8f0;">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="font-weight-bold mb-0" style="color: #111111;">
                        <i class="fa-solid fa-clock-rotate-left text-warning mr-1"></i> Recent Window Inquiries
                    </h5>
                    <a href="/window-inquiry" class="btn btn-sm btn-outline-primary" style="border-radius: 6px;">View All</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Client Name</th>
                                <th>Phone</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recentInquiries as $inquiry)
                            <tr>
                                <td class="font-weight-bold text-dark">{{ $inquiry->fname ?? 'N/A' }}</td>
                                <td>{{ $inquiry->mob ?? 'N/A' }}</td>
                                <td>
                                    <span class="badge badge-light border text-muted">
                                        {{ $inquiry->created_at ? $inquiry->created_at->format('d M, Y') : 'Recent' }}
                                    </span>
                                </td>
                                <td>
                                    <a href="/download-inquiry/{{ $inquiry->id }}" target="_blank" class="btn btn-sm btn-outline-danger" title="Print Invoice / Sheet" style="padding: 4px 8px;">
                                        <i class="fa-solid fa-print"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted py-3">No inquiries recorded yet.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent AMC Requests -->
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card" style="border-radius: 12px; border: 1px solid #e2e8f0;">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="font-weight-bold mb-0" style="color: #111111;">
                        <i class="fa-solid fa-file-contract text-primary mr-1"></i> Recent AMC Requests
                    </h5>
                    <a href="/amc-request" class="btn btn-sm btn-outline-primary" style="border-radius: 6px;">View All</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Client Name</th>
                                <th>Phone</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recentAMC as $amc)
                            <tr>
                                <td class="font-weight-bold text-dark">{{ $amc->fname ?? 'N/A' }}</td>
                                <td>{{ $amc->mob ?? 'N/A' }}</td>
                                <td>
                                    <span class="badge badge-light border text-muted">
                                        {{ $amc->created_at ? $amc->created_at->format('d M, Y') : 'Recent' }}
                                    </span>
                                </td>
                                <td>
                                    <a href="/download-pdf/{{ $amc->id }}" target="_blank" class="btn btn-sm btn-outline-danger" title="Print AMC Sheet" style="padding: 4px 8px;">
                                        <i class="fa-solid fa-print"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted py-3">No AMC requests recorded yet.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Line Chart: Inquiries vs AMC Requests
        const ctxTrends = document.getElementById('inquiryTrendsChart').getContext('2d');
        const months = {!! json_encode($months ?? ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec']) !!};
        const inquiryCounts = {!! json_encode($monthlyInquiries ?? [0,0,0,0,0,0,0,0,0,0,0,0]) !!};
        const amcCounts = {!! json_encode($monthlyAMC ?? [0,0,0,0,0,0,0,0,0,0,0,0]) !!};

        new Chart(ctxTrends, {
            type: 'line',
            data: {
                labels: months,
                datasets: [
                    {
                        label: 'Window Inquiries',
                        data: inquiryCounts,
                        borderColor: '#ff5f13',
                        backgroundColor: 'rgba(255, 95, 19, 0.1)',
                        borderWidth: 2.5,
                        fill: true,
                        tension: 0.35,
                        pointBackgroundColor: '#ff5f13',
                        pointRadius: 4
                    },
                    {
                        label: 'AMC Requests',
                        data: amcCounts,
                        borderColor: '#3b82f6',
                        backgroundColor: 'rgba(59, 130, 246, 0.08)',
                        borderWidth: 2.5,
                        fill: true,
                        tension: 0.35,
                        pointBackgroundColor: '#3b82f6',
                        pointRadius: 4
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            precision: 0
                        },
                        gridLines: {
                            color: '#f1f5f9'
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            display: false
                        }
                    }]
                },
                legend: {
                    position: 'top',
                    labels: {
                        boxWidth: 12,
                        fontFamily: "'Segoe UI', 'Helvetica Neue', Arial",
                        fontSize: 12
                    }
                }
            }
        });

        // Doughnut Chart: Category Product Distribution
        const ctxCategory = document.getElementById('categoryDoughnutChart').getContext('2d');
        const catLabels = {!! json_encode(!empty($categoryLabels) ? $categoryLabels : ['Aluminium System', 'UPVC Windows']) !!};
        const catCounts = {!! json_encode(!empty($categoryProductCounts) ? $categoryProductCounts : [1, 1]) !!};

        new Chart(ctxCategory, {
            type: 'doughnut',
            data: {
                labels: catLabels,
                datasets: [{
                    data: catCounts,
                    backgroundColor: ['#ff5f13', '#3b82f6', '#10b981', '#8b5cf6', '#f59e0b'],
                    borderWidth: 2,
                    borderColor: '#ffffff'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutoutPercentage: 65,
                legend: {
                    position: 'bottom',
                    labels: {
                        boxWidth: 10,
                        fontSize: 11
                    }
                }
            }
        });
    });
</script>
@endpush