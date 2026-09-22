@extends('admin.layouts.app')

@section('title', 'Window Service Details')

@section('styles')
<style>
    .service-thumb {
        width: 70px;
        height: 60px;
        border-radius: 8px;
        object-fit: cover;
        border: 1px solid #e2e8f0;
    }
</style>
@endsection

@section('content')
<!-- Page Header -->
<div class="row mb-4">
    <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
        <div>
            <h3 class="font-weight-bold mb-1" style="color: #111111;">Window Services & Maintenance Care</h3>
            <p class="text-muted mb-0" style="font-size: 14px;">Manage repair, restoration, hardware replacement, and AMC service cards.</p>
        </div>
        <div class="mt-2 mt-sm-0">
            <button class="btn btn-primary dozo-btn font-weight-bold px-3 py-2" data-toggle="modal" data-target="#addServiceModal">
                <i class="fa-solid fa-plus mr-1"></i> Add New Service
            </button>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card" style="border-radius: 12px; border: 1px solid #e2e8f0;">
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover dataTable-modern" id="serviceTable">
                        <thead>
                            <tr>
                                <th style="width: 80px;">Cover</th>
                                <th>Service Title</th>
                                <th>Description Snippet</th>
                                <th>Date Added</th>
                                <th style="width: 120px; text-align: center;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $service)
                            <tr>
                                <td>
                                    @if($service->srv_img)
                                        <img src="{{ asset('storage/' . $service->srv_img) }}" alt="Service" class="service-thumb">
                                    @else
                                        <div class="service-thumb bg-light d-flex align-items-center justify-content-center text-muted">
                                            <i class="fa-solid fa-screwdriver-wrench"></i>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <strong class="text-dark" style="font-size: 14px;">{{ $service->srv_title }}</strong>
                                </td>
                                <td>
                                    <span class="text-muted" style="font-size: 13px;">
                                        {{ Str::limit($service->srv_desc, 60) }}
                                    </span>
                                </td>
                                <td>
                                    <span class="text-muted" style="font-size: 12.5px;">
                                        {{ $service->created_at ? $service->created_at->format('d M Y') : '—' }}
                                    </span>
                                </td>
                                <td style="text-align: center;">
                                    <div class="d-flex justify-content-center gap-1">
                                        <button type="button" class="btn btn-sm btn-outline-primary mr-1" data-toggle="modal" data-target="#editServiceModal{{ $service->id }}" title="Edit Service" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>

                                        <button type="button" class="btn btn-sm btn-outline-danger" onclick="confirmDelete('deleteServiceForm{{ $service->id }}', '{{ addslashes($service->srv_title) }}')" title="Delete Service" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                        <form id="deleteServiceForm{{ $service->id }}" action="{{ route('deleteService', $service->id) }}" method="POST" style="display: none;">
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
<div class="floating-btn-div" data-toggle="modal" data-target="#addServiceModal" title="Add Service">
    <button class="floating-btn">
        <i class="fa-solid fa-plus"></i>
    </button>
</div>

<!-- Add Service Modal -->
<div class="modal fade" id="addServiceModal" tabindex="-1" role="dialog" aria-labelledby="addServiceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="addServiceModalLabel" style="color: #111111;">
                    <i class="fa-solid fa-plus text-primary mr-2"></i> Add New Service
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('addService') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4">
                    <div class="form-group">
                        <label for="srv_title" class="font-weight-bold">Service Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="srv_title" id="srv_title" placeholder="e.g. Acoustic & Thermal Glazing Audit" required>
                    </div>

                    <div class="form-group">
                        <label for="srv_img" class="font-weight-bold">Cover Image <span class="text-danger">*</span></label>
                        <input type="file" class="form-control-file border p-2 rounded w-100" name="srv_img" id="srv_img" accept="image/*" required>
                    </div>

                    <div class="form-group">
                        <label for="srv_desc" class="font-weight-bold">Service Description <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="srv_desc" id="srv_desc" rows="8" placeholder="Detailed service description..." required></textarea>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary dozo-btn font-weight-bold px-4">Save Service</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Service Modals -->
@foreach($services as $service)
<div class="modal fade" id="editServiceModal{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="editServiceModalLabel{{ $service->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="editServiceModalLabel{{ $service->id }}" style="color: #111111;">
                    <i class="fa-solid fa-pen-to-square text-primary mr-2"></i> Edit Service
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('editService', $service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body p-4">
                    <div class="form-group text-center mb-3">
                        @if($service->srv_img)
                            <img src="{{ asset('storage/' . $service->srv_img) }}" style="max-height: 140px; border-radius: 8px; border: 1px solid #e2e8f0;" alt="Service">
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Service Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="srv_title" value="{{ $service->srv_title }}" required>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Update Cover Image (Optional)</label>
                        <input type="file" class="form-control-file border p-2 rounded w-100" name="srv_img" accept="image/*">
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Service Description <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="srv_desc" rows="8" required>{{ $service->srv_desc }}</textarea>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary dozo-btn font-weight-bold px-4">Update Service</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection