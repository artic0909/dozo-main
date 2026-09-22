@extends('admin.layouts.app')

@section('title', 'Customer Support Tickets')

@section('content')
<!-- Page Header -->
<div class="row mb-4">
    <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
        <div>
            <h3 class="font-weight-bold mb-1" style="color: #111111;">Customer Support & Helpdesk Tickets</h3>
            <p class="text-muted mb-0" style="font-size: 14px;">Review messages and tickets submitted through the website help modals and contact forms.</p>
        </div>
        <div class="mt-2 mt-sm-0">
            <span class="badge badge-dozo p-2 px-3">
                <i class="fa-solid fa-headset mr-1"></i> Total: {{ count($supports) }} Tickets
            </span>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card" style="border-radius: 12px; border: 1px solid #e2e8f0;">
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover dataTable-modern" id="supportTable">
                        <thead>
                            <tr>
                                <th style="width: 80px;">Ticket #</th>
                                <th>Client Email</th>
                                <th>Subject</th>
                                <th>Message / Inquiry</th>
                                <th>Date Submitted</th>
                                <th style="width: 100px; text-align: center;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($supports as $support)
                            <tr>
                                <td class="font-weight-bold">#{{ $support->id }}</td>
                                <td>
                                    <a href="mailto:{{ $support->email }}" class="text-primary font-weight-bold">
                                        {{ $support->email }}
                                    </a>
                                </td>
                                <td>
                                    <strong class="text-dark">{{ $support->subject }}</strong>
                                </td>
                                <td>
                                    <span class="text-muted" title="{{ $support->inquiry }}" style="font-size: 13px;">
                                        {{ Str::limit($support->inquiry, 60) }}
                                    </span>
                                </td>
                                <td>
                                    <span class="text-muted" style="font-size: 12.5px;">
                                        {{ $support->created_at ? $support->created_at->format('d M Y, h:i A') : '—' }}
                                    </span>
                                </td>
                                <td style="text-align: center;">
                                    <div class="d-flex justify-content-center gap-1">
                                        <button type="button" class="btn btn-sm btn-outline-primary mr-1" data-toggle="modal" data-target="#viewSupportModal{{ $support->id }}" title="View Ticket" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-eye"></i>
                                        </button>

                                        <button type="button" class="btn btn-sm btn-outline-danger" onclick="confirmDelete('deleteSupportForm{{ $support->id }}', 'Ticket #{{ $support->id }} from {{ addslashes($support->email) }}')" title="Delete Ticket" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                        <form id="deleteSupportForm{{ $support->id }}" action="{{ route('deletesupport', $support->id) }}" method="POST" style="display: none;">
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

<!-- View Ticket Modals -->
@foreach($supports as $support)
<div class="modal fade" id="viewSupportModal{{ $support->id }}" tabindex="-1" role="dialog" aria-labelledby="viewSupportModalLabel{{ $support->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="viewSupportModalLabel{{ $support->id }}" style="color: #111111;">
                    <i class="fa-solid fa-envelope-open-text text-primary mr-2"></i> Ticket #{{ $support->id }}: {{ $support->subject }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-4">
                <div class="mb-3">
                    <label class="text-muted font-weight-bold mb-1" style="font-size: 12px;">FROM:</label>
                    <p class="font-weight-bold mb-0">
                        <a href="mailto:{{ $support->email }}">{{ $support->email }}</a>
                    </p>
                </div>

                <div class="mb-3">
                    <label class="text-muted font-weight-bold mb-1" style="font-size: 12px;">SUBJECT:</label>
                    <p class="font-weight-bold text-dark mb-0">{{ $support->subject }}</p>
                </div>

                <div class="mb-3">
                    <label class="text-muted font-weight-bold mb-1" style="font-size: 12px;">MESSAGE DETAILS:</label>
                    <div class="p-3 bg-light rounded border text-dark" style="white-space: pre-wrap; font-size: 13.5px; line-height: 1.6;">{{ $support->inquiry }}</div>
                </div>

                <div>
                    <label class="text-muted font-weight-bold mb-1" style="font-size: 12px;">RECEIVED AT:</label>
                    <p class="text-muted mb-0" style="font-size: 13px;">{{ $support->created_at ? $support->created_at->format('l, d F Y - h:i A') : '—' }}</p>
                </div>
            </div>
            <div class="modal-footer bg-light">
                <a href="mailto:{{ $support->email }}?subject=Re: {{ urlencode($support->subject) }}" class="btn btn-primary dozo-btn font-weight-bold">
                    <i class="fa-solid fa-reply mr-1"></i> Reply via Email
                </a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection