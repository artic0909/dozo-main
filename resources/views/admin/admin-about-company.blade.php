@extends('admin.layouts.app')

@section('title', 'About Company Details')

@section('styles')
<style>
    .about-thumb {
        width: 80px;
        height: 60px;
        border-radius: 6px;
        object-fit: cover;
        border: 1px solid #e2e8f0;
    }
</style>
@endsection

@php
    $abouts = $abouts ?? $aboutcompanies ?? [];
@endphp

@section('content')
<!-- Page Header -->
<div class="row mb-4">
    <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
        <div>
            <h3 class="font-weight-bold mb-1" style="color: #111111;">Company Profile & Contact Information</h3>
            <p class="text-muted mb-0" style="font-size: 14px;">Manage company telephone numbers, email addresses, and overview descriptions.</p>
        </div>
        <div class="mt-2 mt-sm-0">
            <button class="btn btn-primary dozo-btn font-weight-bold px-3 py-2" data-toggle="modal" data-target="#addAboutModal">
                <i class="fa-solid fa-plus mr-1"></i> Add Company Info
            </button>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card" style="border-radius: 12px; border: 1px solid #e2e8f0;">
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover dataTable-modern" id="aboutCompanyTable">
                        <thead>
                            <tr>
                                <th style="width: 100px;">Image</th>
                                <th>Phone Number</th>
                                <th>Official Email</th>
                                <th>Company Overview</th>
                                <th style="width: 120px; text-align: center;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($abouts as $about)
                            <tr>
                                <td>
                                    @if($about->ab_image)
                                        <img src="{{ asset('storage/' . $about->ab_image) }}" alt="About" class="about-thumb">
                                    @else
                                        <span class="text-muted">No Image</span>
                                    @endif
                                </td>
                                <td>
                                    <strong class="text-dark">{{ $about->ab_num }}</strong>
                                </td>
                                <td>
                                    <a href="mailto:{{ $about->ab_email }}" class="text-primary font-weight-bold">
                                        {{ $about->ab_email }}
                                    </a>
                                </td>
                                <td>
                                    <span class="text-muted" title="{{ $about->ab_desc }}" style="font-size: 13px;">
                                        {{ Str::limit($about->ab_desc, 60) }}
                                    </span>
                                </td>
                                <td style="text-align: center;">
                                    <div class="d-flex justify-content-center gap-1">
                                        <button type="button" class="btn btn-sm btn-outline-primary mr-1" data-toggle="modal" data-target="#editAboutModal{{ $about->id }}" title="Edit Info" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>

                                        <button type="button" class="btn btn-sm btn-outline-danger" onclick="confirmDelete('deleteAboutForm{{ $about->id }}', 'Company Contact Info')" title="Delete Info" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                        <form id="deleteAboutForm{{ $about->id }}" action="{{ route('deleteAboutCompany', $about->id) }}" method="POST" style="display: none;">
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
<div class="floating-btn-div" data-toggle="modal" data-target="#addAboutModal" title="Add Company Info">
    <button class="floating-btn">
        <i class="fa-solid fa-plus"></i>
    </button>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addAboutModal" tabindex="-1" role="dialog" aria-labelledby="addAboutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="addAboutModalLabel" style="color: #111111;">
                    <i class="fa-solid fa-plus text-primary mr-2"></i> Add Company Details
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('addAboutCompany') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="ab_num" class="font-weight-bold">Contact Number <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="ab_num" id="ab_num" placeholder="e.g. 9831103565" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="ab_email" class="font-weight-bold">Official Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="ab_email" id="ab_email" placeholder="e.g. info@dozo.in" required>
                        </div>

                        <div class="col-12 form-group">
                            <label for="ab_image" class="font-weight-bold">Company Showcase Image <span class="text-danger">*</span></label>
                            <input type="file" class="form-control-file border p-2 rounded w-100" name="ab_image" id="ab_image" accept="image/*" required>
                        </div>

                        <div class="col-12 form-group">
                            <label for="ab_desc" class="font-weight-bold">Company Description <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="ab_desc" id="ab_desc" rows="6" placeholder="About the company, vision, brand heritage..." required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary dozo-btn font-weight-bold px-4">Save Details</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modals -->
@foreach($abouts as $about)
<div class="modal fade" id="editAboutModal{{ $about->id }}" tabindex="-1" role="dialog" aria-labelledby="editAboutModalLabel{{ $about->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="editAboutModalLabel{{ $about->id }}" style="color: #111111;">
                    <i class="fa-solid fa-pen-to-square text-primary mr-2"></i> Edit Company Details
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('editAboutCompany', $about->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body p-4">
                    <div class="row">
                        <div class="col-12 text-center mb-3">
                            @if($about->ab_image)
                                <img src="{{ asset('storage/' . $about->ab_image) }}" style="max-height: 120px; border-radius: 6px; border: 1px solid #e2e8f0;" alt="Current Image">
                            @endif
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Contact Number <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="ab_num" value="{{ $about->ab_num }}" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Official Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="ab_email" value="{{ $about->ab_email }}" required>
                        </div>

                        <div class="col-12 form-group">
                            <label class="font-weight-bold">Update Image (Optional)</label>
                            <input type="file" class="form-control-file border p-2 rounded w-100" name="ab_image" accept="image/*">
                        </div>

                        <div class="col-12 form-group">
                            <label class="font-weight-bold">Company Description <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="ab_desc" rows="6" required>{{ $about->ab_desc }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary dozo-btn font-weight-bold px-4">Update Details</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection