@extends('admin.layouts.app')

@section('title', 'Window Inquiries')

@section('content')
<!-- Page Header -->
<div class="row mb-4">
    <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
        <div>
            <h3 class="font-weight-bold mb-1" style="color: #111111;">Window Inquiries & Lead Management</h3>
            <p class="text-muted mb-0" style="font-size: 14px;">Review inquiries submitted through website product pages and inquiry forms.</p>
        </div>
        <div class="mt-2 mt-sm-0">
            <span class="badge badge-dozo p-2 px-3">
                <i class="fa-solid fa-list-check mr-1"></i> Total: {{ count($inquiries) }} Inquiries
            </span>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card" style="border-radius: 12px; border: 1px solid #e2e8f0;">
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover dataTable-modern" id="inquiryTable">
                        <thead>
                            <tr>
                                <th>Client Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>PIN</th>
                                <th>Windows</th>
                                <th>Requirements</th>
                                <th>Date</th>
                                <th style="text-align: center;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($inquiries as $inquiry)
                            @php
                                $wInfoArr = is_array($inquiry->cus_window_info) 
                                    ? $inquiry->cus_window_info 
                                    : (is_string($inquiry->cus_window_info) ? json_decode($inquiry->cus_window_info, true) : []);
                            @endphp
                            <tr>
                                <td class="font-weight-bold text-dark">{{ $inquiry->cus_name }}</td>
                                <td>
                                    <a href="mailto:{{ $inquiry->cus_email }}" class="text-primary font-weight-bold">
                                        {{ $inquiry->cus_email }}
                                    </a>
                                </td>
                                <td>
                                    <a href="tel:{{ $inquiry->cus_mob }}" class="text-dark">
                                        <i class="fa-solid fa-phone text-success mr-1"></i> {{ $inquiry->cus_mob }}
                                    </a>
                                </td>
                                <td>
                                    <span title="{{ $inquiry->cus_add }}">{{ Str::limit($inquiry->cus_add, 25) }}</span>
                                </td>
                                <td>
                                    <span class="badge badge-light border text-muted">{{ $inquiry->cus_pin ?? '—' }}</span>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#myWindowInfoModal{{ $inquiry->id }}" title="View Window Details" style="font-weight: 700; font-size: 12px; border-radius: 6px;">
                                        <i class="fa-solid fa-cube mr-1"></i> View ({{ is_array($wInfoArr) ? count($wInfoArr) : 0 }})
                                    </button>
                                </td>
                                <td>
                                    <span title="{{ $inquiry->cus_d_op }}" class="text-muted" style="font-size: 13px;">
                                        {{ Str::limit($inquiry->cus_d_op, 30) }}
                                    </span>
                                </td>
                                <td>
                                    <span class="text-muted" style="font-size: 12.5px;">
                                        {{ $inquiry->created_at ? $inquiry->created_at->format('d M Y') : '—' }}
                                    </span>
                                </td>
                                <td style="text-align: center;">
                                    <div class="d-flex justify-content-center gap-1">
                                        <a href="{{ route('download_inquiry', ['id' => $inquiry->id]) }}" target="_blank" class="btn btn-sm btn-outline-primary mr-1" title="Print Invoice / Sheet" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-print"></i>
                                        </a>

                                        <button type="button" class="btn btn-sm btn-outline-danger" onclick="confirmDelete('deleteInquiryForm{{ $inquiry->id }}', 'Inquiry from {{ addslashes($inquiry->cus_name) }}')" title="Delete Inquiry" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                        <form id="deleteInquiryForm{{ $inquiry->id }}" action="{{ route('deleteInquiry', $inquiry->id) }}" method="POST" style="display: none;">
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

<!-- Window Info Modals -->
@foreach($inquiries as $inquiry)
@php
    $wInfoArr = is_array($inquiry->cus_window_info) 
        ? $inquiry->cus_window_info 
        : (is_string($inquiry->cus_window_info) ? json_decode($inquiry->cus_window_info, true) : []);
@endphp
<div class="modal fade" id="myWindowInfoModal{{ $inquiry->id }}" tabindex="-1" role="dialog" aria-labelledby="myWindowInfoModalLabel{{ $inquiry->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="myWindowInfoModalLabel{{ $inquiry->id }}" style="color: #111111;">
                    <i class="fa-solid fa-border-all text-primary mr-2"></i> Window Inventory - {{ $inquiry->cus_name }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-4">
                @if(is_array($wInfoArr) && count($wInfoArr) > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-light">
                                <tr>
                                    <th>#</th>
                                    <th>Window Tag / Name</th>
                                    <th>Length</th>
                                    <th>Breadth</th>
                                    <th>Window Type</th>
                                    <th>Units</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($wInfoArr as $index => $wInfo)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td class="font-weight-bold text-dark">{{ $wInfo['window_name'] ?? '—' }}</td>
                                    <td>{{ $wInfo['w_length'] ?? '—' }}</td>
                                    <td>{{ $wInfo['w_breadth'] ?? '—' }}</td>
                                    <td><span class="badge badge-dozo">{{ $wInfo['w_type'] ?? '—' }}</span></td>
                                    <td><strong>{{ $wInfo['w_unit'] ?? 1 }}</strong></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p class="text-muted mb-0">No window details array stored.</p>
                @endif
            </div>
            <div class="modal-footer bg-light">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection