@extends('admin.layouts.app')

@section('title', 'Product Management')

@section('styles')
<style>
    .product-thumb {
        width: 65px;
        height: 65px;
        border-radius: 8px;
        object-fit: cover;
        border: 1px solid #e2e8f0;
    }

    .action-btn {
        width: 32px;
        height: 32px;
        border-radius: 6px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.15s;
    }

    .action-btn:hover {
        transform: scale(1.1);
    }
</style>
@endsection

@section('content')
<!-- Page Header -->
<div class="row mb-4">
    <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
        <div>
            <h3 class="font-weight-bold mb-1" style="color: #111111;">Product Catalogue Management</h3>
            <p class="text-muted mb-0" style="font-size: 14px;">Add, edit, or manage products across aluminium & UPVC architectural systems.</p>
        </div>
        <div class="mt-2 mt-sm-0">
            <button class="btn btn-primary dozo-btn font-weight-bold px-3 py-2" data-toggle="modal" data-target="#addProductModal">
                <i class="fa-solid fa-plus mr-1"></i> Add New Product
            </button>
        </div>
    </div>
</div>

<!-- Main Products Table Card -->
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card" style="border-radius: 12px; border: 1px solid #e2e8f0;">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="font-weight-bold mb-0" style="color: #111111;">
                        <i class="fa-solid fa-boxes-stacked text-primary mr-2"></i> All Registered Products ({{ count($products) }})
                    </h5>
                    <span class="text-muted" style="font-size: 13px;">Image Recommended: 370x394 (PNG / JPG / WEBP)</span>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover dataTable-modern" id="productsTable">
                        <thead>
                            <tr>
                                <th style="width: 70px;">Image</th>
                                <th>Title</th>
                                <th>Main Category</th>
                                <th>Sub Category</th>
                                <th>Description</th>
                                <th style="width: 100px; text-align: center;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>
                                    @if($product->pr_image)
                                        <img src="{{ asset('storage/' . $product->pr_image) }}" alt="Product" class="product-thumb">
                                    @else
                                        <div class="product-thumb bg-light d-flex align-items-center justify-content-center text-muted">
                                            <i class="fa-regular fa-image"></i>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <strong class="text-dark" style="font-size: 14px;">{{ $product->pr_title }}</strong>
                                </td>
                                <td>
                                    <span class="badge badge-dozo px-2 py-1">
                                        {{ $product->mainCategory->main_category ?? 'Unassigned' }}
                                    </span>
                                </td>
                                <td>
                                    @if($product->subCategory)
                                        <span class="badge badge-light border text-secondary px-2 py-1">
                                            {{ $product->subCategory->sub_category }}
                                        </span>
                                    @else
                                        <span class="text-muted" style="font-size: 12.5px;"><em>None (Optional)</em></span>
                                    @endif
                                </td>
                                <td>
                                    <span class="text-muted" title="{{ $product->pr_desc }}" style="font-size: 13px;">
                                        {{ Str::limit($product->pr_desc, 60) }}
                                    </span>
                                </td>
                                <td style="text-align: center;">
                                    <div class="d-flex justify-content-center gap-1">
                                        <!-- Edit Trigger -->
                                        <button type="button" class="btn btn-sm btn-outline-primary action-btn mr-1" data-toggle="modal" data-target="#editProductModal{{ $product->id }}" title="Edit Product">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>

                                        <!-- Delete Trigger -->
                                        <button type="button" class="btn btn-sm btn-outline-danger action-btn" onclick="confirmDelete('deleteProductForm{{ $product->id }}', '{{ addslashes($product->pr_title) }}')" title="Delete Product">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                        <form id="deleteProductForm{{ $product->id }}" action="{{ route('deleteProduct', $product->id) }}" method="POST" style="display: none;">
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

<!-- Floating Quick Add Button -->
<div class="floating-btn-div" data-toggle="modal" data-target="#addProductModal" title="Add New Product">
    <button class="floating-btn">
        <i class="fa-solid fa-plus"></i>
    </button>
</div>

<!-- ==========================================================================
     ADD PRODUCT MODAL
     ========================================================================== -->
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="addProductModalLabel" style="color: #111111;">
                    <i class="fa-solid fa-plus text-primary mr-2"></i> Add New Product
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('addProduct') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4">
                    <div class="row">
                        <!-- Main Category -->
                        <div class="col-md-6 form-group">
                            <label for="add_main_cat" class="font-weight-bold">Main Category <span class="text-danger">*</span></label>
                            <select class="form-control" name="main_cat" id="add_main_cat" required>
                                <option value="">Select Main Category</option>
                                @foreach($mainCategories as $mainCat)
                                    <option value="{{ $mainCat->id }}">{{ $mainCat->main_category }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Sub Category (OPTIONAL) -->
                        <div class="col-md-6 form-group">
                            <label for="add_sub_cat" class="font-weight-bold">
                                Sub Category <span class="badge badge-light border text-muted ml-1" style="font-size: 11px;">Optional</span>
                            </label>
                            <select class="form-control" name="sub_cat" id="add_sub_cat">
                                <option value="">None / Optional</option>
                            </select>
                            <small class="form-text text-muted">Leave blank if this product has no specific subcategory.</small>
                        </div>

                        <!-- Product Title -->
                        <div class="col-12 form-group">
                            <label for="add_pr_title" class="font-weight-bold">Product Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="pr_title" id="add_pr_title" placeholder="e.g. Minimalist Slim-Line Sliding Window" required>
                        </div>

                        <!-- Product Image -->
                        <div class="col-12 form-group">
                            <label for="add_pr_image" class="font-weight-bold">Product Image <span class="text-danger">*</span></label>
                            <input type="file" class="form-control-file border p-2 rounded w-100" name="pr_image" id="add_pr_image" accept="image/*" required>
                            <small class="form-text text-muted">Recommended resolution: 370x394px or 800x600px. Formats: WEBP, PNG, JPG.</small>
                        </div>

                        <!-- Product Description -->
                        <div class="col-12 form-group">
                            <label for="add_pr_desc" class="font-weight-bold">Description / Technical Specifications</label>
                            <textarea class="form-control" name="pr_desc" id="add_pr_desc" rows="5" placeholder="Enter product details, acoustic ratings, glazing thickness, etc..."></textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary dozo-btn font-weight-bold px-4">
                        <i class="fa-solid fa-check mr-1"></i> Save Product
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ==========================================================================
     EDIT PRODUCT MODALS (FOREACH)
     ========================================================================== -->
@foreach($products as $product)
<div class="modal fade" id="editProductModal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="editProductModalLabel{{ $product->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="editProductModalLabel{{ $product->id }}" style="color: #111111;">
                    <i class="fa-solid fa-pen-to-square text-primary mr-2"></i> Edit Product: {{ $product->pr_title }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('editProduct', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body p-4">
                    <div class="row">
                        <!-- Current Image Preview & Replacement -->
                        <div class="col-12 mb-3 text-center">
                            @if($product->pr_image)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $product->pr_image) }}" alt="Current Image" style="max-height: 120px; border-radius: 8px; border: 1px solid #e2e8f0;">
                                </div>
                            @endif
                            <label class="font-weight-bold d-block text-left">Update Image (Leave empty to keep current)</label>
                            <input type="file" class="form-control-file border p-2 rounded w-100" name="pr_image" accept="image/*">
                        </div>

                        <!-- Main Category -->
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Main Category <span class="text-danger">*</span></label>
                            <select class="form-control edit-main-cat" name="main_cat" data-product-id="{{ $product->id }}" required>
                                <option value="">Select Main Category</option>
                                @foreach($mainCategories as $mainCat)
                                    <option value="{{ $mainCat->id }}" {{ $product->main_cat == $mainCat->id ? 'selected' : '' }}>
                                        {{ $mainCat->main_category }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Sub Category (OPTIONAL) -->
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">
                                Sub Category <span class="badge badge-light border text-muted ml-1" style="font-size: 11px;">Optional</span>
                            </label>
                            <select class="form-control edit-sub-cat" name="sub_cat" id="edit_sub_cat_{{ $product->id }}">
                                <option value="">None / Optional</option>
                                @if($product->mainCategory && $product->mainCategory->subCategories)
                                    @foreach($product->mainCategory->subCategories as $subCat)
                                        <option value="{{ $subCat->id }}" {{ $product->sub_cat == $subCat->id ? 'selected' : '' }}>
                                            {{ $subCat->sub_category }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                            <small class="form-text text-muted">Optional. Leave as "None / Optional" if not applicable.</small>
                        </div>

                        <!-- Product Title -->
                        <div class="col-12 form-group">
                            <label class="font-weight-bold">Product Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="pr_title" value="{{ $product->pr_title }}" required>
                        </div>

                        <!-- Product Description -->
                        <div class="col-12 form-group">
                            <label class="font-weight-bold">Description / Technical Specifications</label>
                            <textarea class="form-control" name="pr_desc" rows="5">{{ $product->pr_desc }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary dozo-btn font-weight-bold px-4">
                        <i class="fa-solid fa-check mr-1"></i> Update Product
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // Dynamic Subcategory for Add Modal
        $('#add_main_cat').change(function() {
            var mainCategoryId = $(this).val();
            var $subCat = $('#add_sub_cat');

            $subCat.empty().append('<option value="">None / Optional</option>');

            if (mainCategoryId) {
                $.ajax({
                    url: '/get-subcategories/' + mainCategoryId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        if (response.length > 0) {
                            $.each(response, function(index, subCategory) {
                                $subCat.append('<option value="' + subCategory.id + '">' + subCategory.sub_category + '</option>');
                            });
                        }
                    }
                });
            }
        });

        // Dynamic Subcategory for Edit Modals
        $('.edit-main-cat').change(function() {
            var mainCategoryId = $(this).val();
            var productId = $(this).data('product-id');
            var $subCat = $('#edit_sub_cat_' + productId);

            $subCat.empty().append('<option value="">None / Optional</option>');

            if (mainCategoryId) {
                $.ajax({
                    url: '/get-subcategories/' + mainCategoryId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        if (response.length > 0) {
                            $.each(response, function(index, subCategory) {
                                $subCat.append('<option value="' + subCategory.id + '">' + subCategory.sub_category + '</option>');
                            });
                        }
                    }
                });
            }
        });
    });
</script>
@endpush