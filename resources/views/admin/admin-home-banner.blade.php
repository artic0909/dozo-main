@extends('admin.layouts.app')

@section('title', 'Home Banners')

@section('styles')
<style>
    .banner-thumb {
        width: 120px;
        height: 60px;
        border-radius: 6px;
        object-fit: cover;
        border: 1px solid #e2e8f0;
    }
</style>
@endsection

@php
    $banners = $banners ?? $homebanners ?? [];
@endphp

@section('content')
<!-- Page Header -->
<div class="row mb-4">
    <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
        <div>
            <h3 class="font-weight-bold mb-1" style="color: #111111;">Homepage Hero Slider Banners</h3>
            <p class="text-muted mb-0" style="font-size: 14px;">Manage high-resolution background slider images and headline banners.</p>
        </div>
        <div class="mt-2 mt-sm-0">
            <button class="btn btn-primary dozo-btn font-weight-bold px-3 py-2" data-toggle="modal" data-target="#addBannerModal">
                <i class="fa-solid fa-plus mr-1"></i> Add Home Banner
            </button>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card" style="border-radius: 12px; border: 1px solid #e2e8f0;">
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover dataTable-modern" id="homeBannerTable">
                        <thead>
                            <tr>
                                <th style="width: 140px;">Banner Image</th>
                                <th>Sub Heading</th>
                                <th>Main Heading</th>
                                <th>Stroke / Alt Text</th>
                                <th>Button Label</th>
                                <th>Target URL</th>
                                <th style="width: 120px; text-align: center;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($banners as $banner)
                            <tr>
                                <td>
                                    @if($banner->home_banner)
                                        <img src="{{ asset('storage/' . $banner->home_banner) }}" alt="Banner" class="banner-thumb">
                                    @else
                                        <span class="text-muted">No Image</span>
                                    @endif
                                </td>
                                <td>
                                    <span class="badge badge-dozo">{{ $banner->h_s_desc }}</span>
                                </td>
                                <td>
                                    <strong class="text-dark">{{ $banner->h_title }}</strong>
                                </td>
                                <td>
                                    <span class="text-muted font-italic" style="font-size: 13px;">
                                        {{ $banner->h_a_title ?? '—' }}
                                    </span>
                                </td>
                                <td>
                                    <span class="badge badge-light border text-dark font-weight-bold" style="font-size: 12px;">
                                        {{ $banner->h_p_name ?? 'Explore' }}
                                    </span>
                                </td>
                                <td>
                                    @if($banner->h_p_url)
                                        <a href="{{ $banner->h_p_url }}" target="_blank" class="text-primary font-weight-bold">
                                            <i class="fa-solid fa-arrow-up-right-from-square mr-1"></i> Link
                                        </a>
                                    @else
                                        <span class="text-muted">—</span>
                                    @endif
                                </td>
                                <td style="text-align: center;">
                                    <div class="d-flex justify-content-center gap-1">
                                        <button type="button" class="btn btn-sm btn-outline-primary mr-1" data-toggle="modal" data-target="#editBannerModal{{ $banner->id }}" title="Edit Banner" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>

                                        <button type="button" class="btn btn-sm btn-outline-danger" onclick="confirmDelete('deleteBannerForm{{ $banner->id }}', 'Banner #{{ $banner->id }}')" title="Delete Banner" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                        <form id="deleteBannerForm{{ $banner->id }}" action="{{ route('deleteHomeBanner', $banner->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Floating Add Button -->
<div class="floating-btn-div" data-toggle="modal" data-target="#addBannerModal" title="Add Home Banner">
    <button class="floating-btn">
        <i class="fa-solid fa-plus"></i>
    </button>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addBannerModal" tabindex="-1" role="dialog" aria-labelledby="addBannerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="addBannerModalLabel" style="color: #111111;">
                    <i class="fa-solid fa-plus text-primary mr-2"></i> Add Home Banner
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('addHomeBanner') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="h_s_desc" class="font-weight-bold">Sub-Heading / Tagline <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="h_s_desc" id="h_s_desc" placeholder="e.g. ULTRA-LUXURY SLIM SYSTEM WINDOWS" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="h_title" class="font-weight-bold">Main Heading / Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="h_title" id="h_title" placeholder="e.g. Engineered For High-Rise Storms" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="h_a_title" class="font-weight-bold">Stroke / Animated Secondary Title</label>
                            <input type="text" class="form-control" name="h_a_title" id="h_a_title" placeholder="e.g. ALUMINIUM SYSTEMS">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="h_p_name" class="font-weight-bold">Action Button Label</label>
                            <input type="text" class="form-control" name="h_p_name" id="h_p_name" placeholder="e.g. Explore Systems">
                        </div>

                        <div class="col-12 form-group">
                            <label for="h_p_url" class="font-weight-bold">Button / Target URL</label>
                            <input type="text" class="form-control" name="h_p_url" id="h_p_url" placeholder="e.g. https://dozo.co.in/product-details or /inquiry">
                        </div>

                        <div class="col-12 form-group">
                            <label for="home_banner" class="font-weight-bold">Banner Image <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" name="home_banner" id="home_banner" accept="image/*" required>
                            <small class="form-text text-muted">Recommended: 1920x800px high-resolution landscape.</small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary dozo-btn font-weight-bold px-4">Save Banner</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modals -->
@foreach($banners as $banner)
<div class="modal fade" id="editBannerModal{{ $banner->id }}" tabindex="-1" role="dialog" aria-labelledby="editBannerModalLabel{{ $banner->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="editBannerModalLabel{{ $banner->id }}" style="color: #111111;">
                    <i class="fa-solid fa-pen-to-square text-primary mr-2"></i> Edit Home Banner
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('editHomeBanner', $banner->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body p-4">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Sub-Heading / Tagline <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="h_s_desc" value="{{ $banner->h_s_desc }}" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Main Heading / Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="h_title" value="{{ $banner->h_title }}" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Stroke / Animated Secondary Title</label>
                            <input type="text" class="form-control" name="h_a_title" value="{{ $banner->h_a_title }}">
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Action Button Label</label>
                            <input type="text" class="form-control" name="h_p_name" value="{{ $banner->h_p_name }}">
                        </div>

                        <div class="col-12 form-group">
                            <label class="font-weight-bold">Button / Target URL</label>
                            <input type="text" class="form-control" name="h_p_url" value="{{ $banner->h_p_url }}">
                        </div>

                        <div class="col-12 form-group">
                            <label class="font-weight-bold">Banner Image</label>
                            @if($banner->home_banner)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $banner->home_banner) }}" alt="Current Banner" class="banner-thumb">
                                </div>
                            @endif
                            <input type="file" class="form-control" name="home_banner" accept="image/*">
                            <small class="form-text text-muted">Leave blank to retain current image.</small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary dozo-btn font-weight-bold px-4">Update Banner</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection