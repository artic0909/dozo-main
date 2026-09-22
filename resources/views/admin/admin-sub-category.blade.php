@extends('admin.layouts.app')

@section('title', 'Sub Categories')

@php
    $subCategories = $subCategories ?? $subcategories ?? [];
@endphp

@section('content')
<!-- Page Header -->
<div class="row mb-4">
    <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
        <div>
            <h3 class="font-weight-bold mb-1" style="color: #111111;">Product Subcategories</h3>
            <p class="text-muted mb-0" style="font-size: 14px;">Manage sub-classifications and system types nested under main categories.</p>
        </div>
        <div class="mt-2 mt-sm-0">
            <button class="btn btn-primary dozo-btn font-weight-bold px-3 py-2" data-toggle="modal" data-target="#addSubCategoryModal">
                <i class="fa-solid fa-plus mr-1"></i> Add Sub Category
            </button>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card" style="border-radius: 12px; border: 1px solid #e2e8f0;">
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover dataTable-modern" id="subCatTable">
                        <thead>
                            <tr>
                                <th style="width: 80px;">ID</th>
                                <th>Subcategory Name</th>
                                <th>Parent Main Category</th>
                                <th>Associated Products</th>
                                <th style="width: 120px; text-align: center;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subCategories as $subCat)
                            <tr>
                                <td class="font-weight-bold">#{{ $subCat->id }}</td>
                                <td>
                                    <strong class="text-dark" style="font-size: 14.5px;">{{ $subCat->sub_category }}</strong>
                                </td>
                                <td>
                                    <span class="badge badge-dozo">
                                        {{ $subCat->mainCategory->main_category ?? 'Unassigned' }}
                                    </span>
                                </td>
                                <td>
                                    <span class="badge badge-light border text-muted">
                                        {{ $subCat->products ? count($subCat->products) : 0 }} Products
                                    </span>
                                </td>
                                <td style="text-align: center;">
                                    <div class="d-flex justify-content-center gap-1">
                                        <button type="button" class="btn btn-sm btn-outline-primary mr-1" data-toggle="modal" data-target="#editSubCategoryModal{{ $subCat->id }}" title="Edit Subcategory" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>

                                        <button type="button" class="btn btn-sm btn-outline-danger" onclick="confirmDelete('deleteSubCatForm{{ $subCat->id }}', '{{ addslashes($subCat->sub_category) }}')" title="Delete Subcategory" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                        <form id="deleteSubCatForm{{ $subCat->id }}" action="{{ route('deleteSubC', $subCat->id) }}" method="POST" style="display: none;">
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
<div class="floating-btn-div" data-toggle="modal" data-target="#addSubCategoryModal" title="Add Sub Category">
    <button class="floating-btn">
        <i class="fa-solid fa-plus"></i>
    </button>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addSubCategoryModal" tabindex="-1" role="dialog" aria-labelledby="addSubCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="addSubCategoryModalLabel" style="color: #111111;">
                    <i class="fa-solid fa-plus text-primary mr-2"></i> Add Sub Category
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('addSubC') }}" method="POST">
                @csrf
                <div class="modal-body p-4">
                    <div class="form-group">
                        <label for="main_category_id" class="font-weight-bold">Parent Main Category <span class="text-danger">*</span></label>
                        <select class="form-control" name="main_category_id" id="main_category_id" required>
                            <option value="">Select Main Category</option>
                            @foreach($mainCategories as $mainCat)
                                <option value="{{ $mainCat->id }}">{{ $mainCat->main_category }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="sub_category" class="font-weight-bold">Sub Category Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="sub_category" id="sub_category" placeholder="e.g. Sliding Windows, Casement, Tilt & Turn" required>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary dozo-btn font-weight-bold px-4">Save Subcategory</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modals -->
@foreach($subCategories as $subCat)
<div class="modal fade" id="editSubCategoryModal{{ $subCat->id }}" tabindex="-1" role="dialog" aria-labelledby="editSubCategoryModalLabel{{ $subCat->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="editSubCategoryModalLabel{{ $subCat->id }}" style="color: #111111;">
                    <i class="fa-solid fa-pen-to-square text-primary mr-2"></i> Edit Sub Category
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('editSubC', $subCat->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body p-4">
                    <div class="form-group">
                        <label class="font-weight-bold">Parent Main Category <span class="text-danger">*</span></label>
                        <select class="form-control" name="main_category_id" required>
                            @foreach($mainCategories as $mainCat)
                                <option value="{{ $mainCat->id }}" {{ $subCat->main_category_id == $mainCat->id ? 'selected' : '' }}>
                                    {{ $mainCat->main_category }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Sub Category Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="sub_category" value="{{ $subCat->sub_category }}" required>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary dozo-btn font-weight-bold px-4">Update Subcategory</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection