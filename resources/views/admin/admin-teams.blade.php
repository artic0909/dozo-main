@extends('admin.layouts.app')

@section('title', 'Expert Team Management')

@section('styles')
<style>
    .team-thumb {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #ff5f13;
    }
</style>
@endsection

@section('content')
<!-- Page Header -->
<div class="row mb-4">
    <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
        <div>
            <h3 class="font-weight-bold mb-1" style="color: #111111;">Leadership & Engineering Team</h3>
            <p class="text-muted mb-0" style="font-size: 14px;">Manage engineering leaders, facade specialists, and team profiles shown on the about page.</p>
        </div>
        <div class="mt-2 mt-sm-0">
            <button class="btn btn-primary dozo-btn font-weight-bold px-3 py-2" data-toggle="modal" data-target="#addTeamModal">
                <i class="fa-solid fa-plus mr-1"></i> Add Team Member
            </button>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card" style="border-radius: 12px; border: 1px solid #e2e8f0;">
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover dataTable-modern" id="teamsTable">
                        <thead>
                            <tr>
                                <th style="width: 80px;">Photo</th>
                                <th>Member Name</th>
                                <th>Designation / Role</th>
                                <th>Date Added</th>
                                <th style="width: 120px; text-align: center;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teams as $team)
                            <tr>
                                <td>
                                    @if($team->m_img)
                                        <img src="{{ asset('storage/' . $team->m_img) }}" alt="Team" class="team-thumb">
                                    @else
                                        <div class="team-thumb bg-light d-flex align-items-center justify-content-center text-muted">
                                            <i class="fa-solid fa-user"></i>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <strong class="text-dark" style="font-size: 14.5px;">{{ $team->m_name }}</strong>
                                </td>
                                <td>
                                    <span class="badge badge-dozo">{{ $team->m_prof }}</span>
                                </td>
                                <td>
                                    <span class="text-muted" style="font-size: 12.5px;">
                                        {{ $team->created_at ? $team->created_at->format('d M Y') : '—' }}
                                    </span>
                                </td>
                                <td style="text-align: center;">
                                    <div class="d-flex justify-content-center gap-1">
                                        <button type="button" class="btn btn-sm btn-outline-primary mr-1" data-toggle="modal" data-target="#editTeamModal{{ $team->id }}" title="Edit Member" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>

                                        <button type="button" class="btn btn-sm btn-outline-danger" onclick="confirmDelete('deleteTeamForm{{ $team->id }}', '{{ addslashes($team->m_name) }}')" title="Delete Member" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                        <form id="deleteTeamForm{{ $team->id }}" action="{{ route('deletet', $team->id) }}" method="POST" style="display: none;">
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
<div class="floating-btn-div" data-toggle="modal" data-target="#addTeamModal" title="Add Team Member">
    <button class="floating-btn">
        <i class="fa-solid fa-plus"></i>
    </button>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addTeamModal" tabindex="-1" role="dialog" aria-labelledby="addTeamModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="addTeamModalLabel" style="color: #111111;">
                    <i class="fa-solid fa-plus text-primary mr-2"></i> Add Team Member
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('addt') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4">
                    <div class="form-group">
                        <label for="m_name" class="font-weight-bold">Member Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="m_name" id="m_name" placeholder="e.g. Rahul Sharma" required>
                    </div>

                    <div class="form-group">
                        <label for="m_prof" class="font-weight-bold">Position / Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="m_prof" id="m_prof" placeholder="e.g. Lead Façade Engineer" required>
                    </div>

                    <div class="form-group">
                        <label for="m_img" class="font-weight-bold">Profile Photo <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" name="m_img" id="m_img" accept="image/*" required>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary dozo-btn font-weight-bold px-4">Save Member</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modals -->
@foreach($teams as $team)
<div class="modal fade" id="editTeamModal{{ $team->id }}" tabindex="-1" role="dialog" aria-labelledby="editTeamModalLabel{{ $team->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="editTeamModalLabel{{ $team->id }}" style="color: #111111;">
                    <i class="fa-solid fa-pen-to-square text-primary mr-2"></i> Edit Team Member
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('editt', $team->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body p-4">
                    <div class="form-group">
                        <label class="font-weight-bold">Member Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="m_name" value="{{ $team->m_name }}" required>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Position / Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="m_prof" value="{{ $team->m_prof }}" required>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Profile Photo</label>
                        @if($team->m_img)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $team->m_img) }}" alt="Current Photo" class="team-thumb">
                            </div>
                        @endif
                        <input type="file" class="form-control" name="m_img" accept="image/*">
                        <small class="form-text text-muted">Leave blank to keep existing photo.</small>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary dozo-btn font-weight-bold px-4">Update Member</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection