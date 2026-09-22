@extends('admin.layouts.app')

@section('title', 'Counter Numbers & Statistics')

@section('content')
<!-- Page Header -->
<div class="row mb-4">
    <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
        <div>
            <h3 class="font-weight-bold mb-1" style="color: #111111;">Brand Trust Counter Numbers</h3>
            <p class="text-muted mb-0" style="font-size: 14px;">Manage animated counter stats (Projects Completed, Factory Area, Happy Clients, Warranty Years) shown on the homepage and about page.</p>
        </div>
        <div class="mt-2 mt-sm-0">
            <button class="btn btn-primary dozo-btn font-weight-bold px-3 py-2" data-toggle="modal" data-target="#addNumberModal">
                <i class="fa-solid fa-plus mr-1"></i> Add Counter Stat
            </button>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card" style="border-radius: 12px; border: 1px solid #e2e8f0;">
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover dataTable-modern" id="numbersTable">
                        <thead>
                            <tr>
                                <th style="width: 80px;">ID</th>
                                <th>Count / Number</th>
                                <th>Metric Title</th>
                                <th>Created Date</th>
                                <th style="width: 120px; text-align: center;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($numbers as $number)
                            <tr>
                                <td class="font-weight-bold">#{{ $number->id }}</td>
                                <td>
                                    <span class="badge badge-dozo p-2 px-3" style="font-size: 15px;">
                                        {{ $number->num }}
                                    </span>
                                </td>
                                <td>
                                    <strong class="text-dark" style="font-size: 14.5px;">{{ $number->title }}</strong>
                                </td>
                                <td>
                                    <span class="text-muted" style="font-size: 12.5px;">
                                        {{ $number->created_at ? $number->created_at->format('d M Y') : '—' }}
                                    </span>
                                </td>
                                <td style="text-align: center;">
                                    <div class="d-flex justify-content-center gap-1">
                                        <button type="button" class="btn btn-sm btn-outline-primary mr-1" data-toggle="modal" data-target="#editNumberModal{{ $number->id }}" title="Edit Stat" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>

                                        <button type="button" class="btn btn-sm btn-outline-danger" onclick="confirmDelete('deleteNumberForm{{ $number->id }}', '{{ addslashes($number->title) }}')" title="Delete Stat" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                        <form id="deleteNumberForm{{ $number->id }}" action="{{ route('deleteAboutNumbers', $number->id) }}" method="POST" style="display: none;">
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
<div class="floating-btn-div" data-toggle="modal" data-target="#addNumberModal" title="Add Counter Stat">
    <button class="floating-btn">
        <i class="fa-solid fa-plus"></i>
    </button>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addNumberModal" tabindex="-1" role="dialog" aria-labelledby="addNumberModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="addNumberModalLabel" style="color: #111111;">
                    <i class="fa-solid fa-plus text-primary mr-2"></i> Add Counter Stat
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('addAboutNumbers') }}" method="POST">
                @csrf
                <div class="modal-body p-4">
                    <div class="form-group">
                        <label for="num" class="font-weight-bold">Number / Count <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="num" id="num" placeholder="e.g. 500+, 25+, 100K" required>
                    </div>

                    <div class="form-group">
                        <label for="title" class="font-weight-bold">Metric Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="e.g. Completed Projects, Happy Architects" required>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary dozo-btn font-weight-bold px-4">Save Stat</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modals -->
@foreach($numbers as $number)
<div class="modal fade" id="editNumberModal{{ $number->id }}" tabindex="-1" role="dialog" aria-labelledby="editNumberModalLabel{{ $number->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="editNumberModalLabel{{ $number->id }}" style="color: #111111;">
                    <i class="fa-solid fa-pen-to-square text-primary mr-2"></i> Edit Counter Stat
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('editAboutNumbers', $number->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body p-4">
                    <div class="form-group">
                        <label class="font-weight-bold">Number / Count <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="num" value="{{ $number->num }}" required>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Metric Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="title" value="{{ $number->title }}" required>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary dozo-btn font-weight-bold px-4">Update Stat</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection