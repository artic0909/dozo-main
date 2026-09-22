@extends('admin.layouts.app')

@section('title', 'Testimonials')

@section('content')
<!-- Page Header -->
<div class="row mb-4">
    <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
        <div>
            <h3 class="font-weight-bold mb-1" style="color: #111111;">Client Testimonials & Reviews</h3>
            <p class="text-muted mb-0" style="font-size: 14px;">Manage architect reviews, developer endorsements, and client quotes displayed on the website.</p>
        </div>
        <div class="mt-2 mt-sm-0">
            <button class="btn btn-primary dozo-btn font-weight-bold px-3 py-2" data-toggle="modal" data-target="#addTestimonialModal">
                <i class="fa-solid fa-plus mr-1"></i> Add Testimonial
            </button>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card" style="border-radius: 12px; border: 1px solid #e2e8f0;">
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover dataTable-modern" id="testimonialsTable">
                        <thead>
                            <tr>
                                <th style="width: 80px;">ID</th>
                                <th>Client Name</th>
                                <th>Designation / Firm</th>
                                <th>Review Quote</th>
                                <th style="width: 120px; text-align: center;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($testimonials as $testimonial)
                            <tr>
                                <td class="font-weight-bold">#{{ $testimonial->id }}</td>
                                <td>
                                    <strong class="text-dark" style="font-size: 14.5px;">{{ $testimonial->t_name }}</strong>
                                </td>
                                <td>
                                    <span class="badge badge-dozo">{{ $testimonial->t_prof }}</span>
                                </td>
                                <td>
                                    <span class="text-muted" title="{{ $testimonial->t_feedback }}" style="font-size: 13px;">
                                        {{ Str::limit($testimonial->t_feedback, 60) }}
                                    </span>
                                </td>
                                <td style="text-align: center;">
                                    <div class="d-flex justify-content-center gap-1">
                                        <button type="button" class="btn btn-sm btn-outline-primary mr-1" data-toggle="modal" data-target="#editTestimonialModal{{ $testimonial->id }}" title="Edit Review" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>

                                        <button type="button" class="btn btn-sm btn-outline-danger" onclick="confirmDelete('deleteTestimonialForm{{ $testimonial->id }}', 'Testimonial from {{ addslashes($testimonial->t_name) }}')" title="Delete Review" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                        <form id="deleteTestimonialForm{{ $testimonial->id }}" action="{{ route('delete', $testimonial->id) }}" method="POST" style="display: none;">
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
<div class="floating-btn-div" data-toggle="modal" data-target="#addTestimonialModal" title="Add Testimonial">
    <button class="floating-btn">
        <i class="fa-solid fa-plus"></i>
    </button>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addTestimonialModal" tabindex="-1" role="dialog" aria-labelledby="addTestimonialModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="addTestimonialModalLabel" style="color: #111111;">
                    <i class="fa-solid fa-plus text-primary mr-2"></i> Add Client Review
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('add') }}" method="POST">
                @csrf
                <div class="modal-body p-4">
                    <div class="form-group">
                        <label for="t_name" class="font-weight-bold">Client / Architect Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="t_name" id="t_name" placeholder="e.g. Ar. Rajesh Mehta" required>
                    </div>

                    <div class="form-group">
                        <label for="t_prof" class="font-weight-bold">Designation / Firm <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="t_prof" id="t_prof" placeholder="e.g. Principal Architect, Studio Enigma" required>
                    </div>

                    <div class="form-group">
                        <label for="t_feedback" class="font-weight-bold">Review / Testimonial Quote <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="t_feedback" id="t_feedback" rows="5" placeholder="Client feedback regarding DOZO windows, acoustics, and service..." required></textarea>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary dozo-btn font-weight-bold px-4">Save Review</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modals -->
@foreach($testimonials as $testimonial)
<div class="modal fade" id="editTestimonialModal{{ $testimonial->id }}" tabindex="-1" role="dialog" aria-labelledby="editTestimonialModalLabel{{ $testimonial->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="editTestimonialModalLabel{{ $testimonial->id }}" style="color: #111111;">
                    <i class="fa-solid fa-pen-to-square text-primary mr-2"></i> Edit Client Review
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('edit', $testimonial->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body p-4">
                    <div class="form-group">
                        <label class="font-weight-bold">Client / Architect Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="t_name" value="{{ $testimonial->t_name }}" required>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Designation / Firm <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="t_prof" value="{{ $testimonial->t_prof }}" required>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Review / Testimonial Quote <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="t_feedback" rows="5" required>{{ $testimonial->t_feedback }}</textarea>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary dozo-btn font-weight-bold px-4">Update Review</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection