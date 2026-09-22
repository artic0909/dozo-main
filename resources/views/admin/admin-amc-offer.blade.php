@extends('admin.layouts.app')

@section('title', 'AMC Offers & Packages')

@section('content')
<!-- Page Header -->
<div class="row mb-4">
    <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
        <div>
            <h3 class="font-weight-bold mb-1" style="color: #111111;">Annual Maintenance Contract Offers & Packages</h3>
            <p class="text-muted mb-0" style="font-size: 14px;">Manage highlighted AMC package bullets and service guarantees shown across AMC pages.</p>
        </div>
        <div class="mt-2 mt-sm-0">
            <button class="btn btn-primary dozo-btn font-weight-bold px-3 py-2" data-toggle="modal" data-target="#addOfferModal">
                <i class="fa-solid fa-plus mr-1"></i> Add AMC Package/Offer
            </button>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card" style="border-radius: 12px; border: 1px solid #e2e8f0;">
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover dataTable-modern" id="offersTable">
                        <thead>
                            <tr>
                                <th style="width: 80px;">ID</th>
                                <th>Offer / Package Description</th>
                                <th>Created Date</th>
                                <th style="width: 120px; text-align: center;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($offers as $offer)
                            <tr>
                                <td class="font-weight-bold">#{{ $offer->id }}</td>
                                <td>
                                    <strong class="text-dark" style="font-size: 14.5px;">{{ $offer->offer }}</strong>
                                </td>
                                <td>
                                    <span class="text-muted" style="font-size: 12.5px;">
                                        {{ $offer->created_at ? $offer->created_at->format('d M Y') : '—' }}
                                    </span>
                                </td>
                                <td style="text-align: center;">
                                    <div class="d-flex justify-content-center gap-1">
                                        <button type="button" class="btn btn-sm btn-outline-primary mr-1" data-toggle="modal" data-target="#editOfferModal{{ $offer->id }}" title="Edit Offer" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>

                                        <button type="button" class="btn btn-sm btn-outline-danger" onclick="confirmDelete('deleteOfferForm{{ $offer->id }}', '{{ addslashes($offer->offer) }}')" title="Delete Offer" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                        <form id="deleteOfferForm{{ $offer->id }}" action="{{ route('deleteoffer', $offer->id) }}" method="POST" style="display: none;">
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
<div class="floating-btn-div" data-toggle="modal" data-target="#addOfferModal" title="Add AMC Offer">
    <button class="floating-btn">
        <i class="fa-solid fa-plus"></i>
    </button>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addOfferModal" tabindex="-1" role="dialog" aria-labelledby="addOfferModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="addOfferModalLabel" style="color: #111111;">
                    <i class="fa-solid fa-plus text-primary mr-2"></i> Add AMC Package / Bullet
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('addoffer') }}" method="POST">
                @csrf
                <div class="modal-body p-4">
                    <div class="form-group">
                        <label for="offer" class="font-weight-bold">Package Text / Guarantee <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="offer" id="offer" rows="3" placeholder="e.g. Free Semi-Annual Track Alignment & Roller Lubrication" required></textarea>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary dozo-btn font-weight-bold px-4">Save Offer</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modals -->
@foreach($offers as $offer)
<div class="modal fade" id="editOfferModal{{ $offer->id }}" tabindex="-1" role="dialog" aria-labelledby="editOfferModalLabel{{ $offer->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="editOfferModalLabel{{ $offer->id }}" style="color: #111111;">
                    <i class="fa-solid fa-pen-to-square text-primary mr-2"></i> Edit AMC Package
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('editoffer', $offer->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body p-4">
                    <div class="form-group">
                        <label class="font-weight-bold">Package Text / Guarantee <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="offer" rows="3" required>{{ $offer->offer }}</textarea>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary dozo-btn font-weight-bold px-4">Update Offer</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection