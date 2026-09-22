@extends('admin.layouts.app')

@section('title', 'Main Categories')

@php
    $mainCategories = $mainCategories ?? $maincategories ?? [];
@endphp

@section('content')
<!-- Page Header -->
<div class="row mb-4">
    <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
        <div>
            <h3 class="font-weight-bold mb-1" style="color: #111111;">Product Main Categories</h3>
            <p class="text-muted mb-0" style="font-size: 14px;">Manage primary categories displayed on the navigation bar and catalogue.</p>
        </div>
        <div class="mt-2 mt-sm-0">
            <button class="btn btn-primary dozo-btn font-weight-bold px-3 py-2" data-toggle="modal" data-target="#addMainCategoryModal">
                <i class="fa-solid fa-plus mr-1"></i> Add Main Category
            </button>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card" style="border-radius: 12px; border: 1px solid #e2e8f0;">
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover dataTable-modern" id="mainCatTable">
                        <thead>
                            <tr>
                                <th style="width: 70px;">ID</th>
                                <th>Main Category Name</th>
                                <th>URL Slug</th>
                                <th>Subcategories</th>
                                <th>Products</th>
                                <th style="width: 130px; text-align: center;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mainCategories as $mainCat)
                            <tr>
                                <td class="font-weight-bold">#{{ $mainCat->id }}</td>
                                <td>
                                    <strong class="text-dark" style="font-size: 14.5px;">{{ $mainCat->main_category }}</strong>
                                </td>
                                <td>
                                    <a href="{{ route('category.products', $mainCat->slug ?? $mainCat->id) }}" target="_blank" class="badge badge-light border text-primary font-weight-bold" title="View Category Page" style="font-size: 12px; font-family: monospace;">
                                        /category/{{ $mainCat->slug ?? $mainCat->id }} <i class="fa-solid fa-arrow-up-right-from-square ml-1" style="font-size: 10px;"></i>
                                    </a>
                                </td>
                                <td>
                                    <span class="badge badge-light border text-muted">
                                        {{ $mainCat->subCategories ? count($mainCat->subCategories) : 0 }} Subcategories
                                    </span>
                                </td>
                                <td>
                                    <span class="badge badge-dozo">
                                        {{ $mainCat->products ? count($mainCat->products) : 0 }} Products
                                    </span>
                                </td>
                                <td style="text-align: center;">
                                    <div class="d-flex justify-content-center gap-1">
                                        <a href="{{ route('category.products', $mainCat->slug ?? $mainCat->id) }}" target="_blank" class="btn btn-sm btn-outline-info mr-1" title="View Public Page" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>

                                        <button type="button" class="btn btn-sm btn-outline-primary mr-1" data-toggle="modal" data-target="#editMainCategoryModal{{ $mainCat->id }}" title="Edit Category" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>

                                        <button type="button" class="btn btn-sm btn-outline-danger" onclick="confirmDelete('deleteMainCatForm{{ $mainCat->id }}', '{{ addslashes($mainCat->main_category) }}')" title="Delete Category" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                        <form id="deleteMainCatForm{{ $mainCat->id }}" action="{{ route('deleteMainC', $mainCat->id) }}" method="POST" style="display: none;">
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
<div class="floating-btn-div" data-toggle="modal" data-target="#addMainCategoryModal" title="Add Main Category">
    <button class="floating-btn">
        <i class="fa-solid fa-plus"></i>
    </button>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addMainCategoryModal" tabindex="-1" role="dialog" aria-labelledby="addMainCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="addMainCategoryModalLabel" style="color: #111111;">
                    <i class="fa-solid fa-plus text-primary mr-2"></i> Add Main Category
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('addMainC') }}" method="POST">
                @csrf
                <div class="modal-body p-4">
                    <div class="form-group mb-3">
                        <label for="main_category" class="font-weight-bold">Category Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="main_category" id="main_category" placeholder="e.g. Aluminium System Windows" required>
                    </div>

                    <div class="form-group">
                        <label for="slug" class="font-weight-bold">URL Slug <small class="text-muted">(Optional, auto-generated)</small></label>
                        <input type="text" class="form-control" name="slug" id="slug" placeholder="e.g. aluminium-system-windows">
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary dozo-btn font-weight-bold px-4">Save Category</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modals -->
@foreach($mainCategories as $mainCat)
<div class="modal fade" id="editMainCategoryModal{{ $mainCat->id }}" tabindex="-1" role="dialog" aria-labelledby="editMainCategoryModalLabel{{ $mainCat->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="editMainCategoryModalLabel{{ $mainCat->id }}" style="color: #111111;">
                    <i class="fa-solid fa-pen-to-square text-primary mr-2"></i> Edit Main Category
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('editMainC', $mainCat->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body p-4">
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">Category Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="main_category" value="{{ $mainCat->main_category }}" required>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">URL Slug <small class="text-muted">(Leave as-is or customize)</small></label>
                        <input type="text" class="form-control" name="slug" value="{{ $mainCat->slug }}" placeholder="e.g. aluminium-system-windows">
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary dozo-btn font-weight-bold px-4">Update Category</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection