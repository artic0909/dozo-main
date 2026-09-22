@extends('admin.layouts.app')

@section('title', 'Other Pages Banners')

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
    $banners = $banners ?? $otherbanners ?? [];
@endphp

@section('content')
<!-- Page Header -->
<div class="row mb-4">
    <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
        <div>
            <h3 class="font-weight-bold mb-1" style="color: #111111;">Inner Pages Header Banners</h3>
            <p class="text-muted mb-0" style="font-size: 14px;">Manage promotional header and background imagery across inner sub-pages.</p>
        </div>
        <div class="mt-2 mt-sm-0">
            <button class="btn btn-primary dozo-btn font-weight-bold px-3 py-2" data-toggle="modal" data-target="#addOtherBannerModal">
                <i class="fa-solid fa-plus mr-1"></i> Add Other Banner
            </button>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card" style="border-radius: 12px; border: 1px solid #e2e8f0;">
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover dataTable-modern" id="otherBannerTable">
                        <thead>
                            <tr>
                                <th style="width: 140px;">Banner Image</th>
                                <th>Heading</th>
                                <th>Created Date</th>
                                <th style="width: 120px; text-align: center;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($banners as $banner)
                            <tr>
                                <td>
                                    @if($banner->banner_img)
                                        <img src="{{ asset('storage/' . $banner->banner_img) }}" alt="Banner" class="banner-thumb">
                                    @else
                                        <span class="text-muted">No Image</span>
                                    @endif
                                </td>
                                <td>
                                    <strong class="text-dark" style="font-size: 14.5px;">{{ $banner->banner_heading }}</strong>
                                </td>
                                <td>
                                    <span class="text-muted" style="font-size: 12.5px;">
                                        {{ $banner->created_at ? $banner->created_at->format('d M Y') : '—' }}
                                    </span>
                                </td>
                                <td style="text-align: center;">
                                    <div class="d-flex justify-content-center gap-1">
                                        <button type="button" class="btn btn-sm btn-outline-primary mr-1" data-toggle="modal" data-target="#editOtherBannerModal{{ $banner->id }}" title="Edit Banner" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>

                                        <button type="button" class="btn btn-sm btn-outline-danger" onclick="confirmDelete('deleteOtherBannerForm{{ $banner->id }}', '{{ addslashes($banner->banner_heading) }}')" title="Delete Banner" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                        <form id="deleteOtherBannerForm{{ $banner->id }}" action="{{ route('deleteOtherBanner', $banner->id) }}" method="POST" style="display: none;">
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
<div class="floating-btn-div" data-toggle="modal" data-target="#addOtherBannerModal" title="Add Banner">
    <button class="floating-btn">
        <i class="fa-solid fa-plus"></i>
    </button>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addOtherBannerModal" tabindex="-1" role="dialog" aria-labelledby="addOtherBannerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="addOtherBannerModalLabel" style="color: #111111;">
                    <i class="fa-solid fa-plus text-primary mr-2"></i> Add Page Banner
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('addOtherBanner') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4">
                    <div class="form-group">
                        <label for="banner_heading" class="font-weight-bold">Heading Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="banner_heading" id="banner_heading" placeholder="e.g. Architectural Project Showcase" required>
                    </div>

                    <div class="form-group">
                        <label for="banner_img" class="font-weight-bold">Banner Image <span class="text-danger">*</span></label>
                        <input type="file" class="form-control-file border p-2 rounded w-100" name="banner_img" id="banner_img" accept="image/*" required>
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
<div class="modal fade" id="editOtherBannerModal{{ $banner->id }}" tabindex="-1" role="dialog" aria-labelledby="editOtherBannerModalLabel{{ $banner->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="editOtherBannerModalLabel{{ $banner->id }}" style="color: #111111;">
                    <i class="fa-solid fa-pen-to-square text-primary mr-2"></i> Edit Page Banner
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('editOtherBanner', $banner->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body p-4">
                    <div class="form-group text-center mb-3">
                        @if($banner->banner_img)
                            <img src="{{ asset('storage/' . $banner->banner_img) }}" style="max-height: 120px; border-radius: 6px; border: 1px solid #e2e8f0;" alt="Current Banner">
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Heading Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="banner_heading" value="{{ $banner->banner_heading }}" required>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Update Banner Image (Optional)</label>
                        <input type="file" class="form-control-file border p-2 rounded w-100" name="banner_img" accept="image/*">
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