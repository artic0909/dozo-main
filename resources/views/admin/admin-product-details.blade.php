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

    .gallery-preview-card {
        position: relative;
        display: inline-block;
        margin: 5px;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        overflow: hidden;
        background: #f8fafc;
    }

    .gallery-preview-img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        display: block;
    }

    .gallery-delete-btn {
        position: absolute;
        top: 2px;
        right: 2px;
        background: rgba(239, 68, 68, 0.9);
        color: #ffffff !important;
        border: none;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        font-size: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: background 0.2s;
    }

    .gallery-delete-btn:hover {
        background: #dc2626;
    }
</style>
@endsection

@section('content')
<!-- Page Header -->
<div class="row mb-4">
    <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
        <div>
            <h3 class="font-weight-bold mb-1" style="color: #111111;">Product Catalogue & Technical Specifications</h3>
            <p class="text-muted mb-0" style="font-size: 14px;">Manage architectural windows, casement systems, doors, multi-image technical elevations, and rate cards.</p>
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
                    <span class="text-muted" style="font-size: 13px;">Supports Multi-Image Elevations & Blueprint Section Plans</span>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover dataTable-modern" id="productsTable">
                        <thead>
                            <tr>
                                <th style="width: 70px;">Cover</th>
                                <th>Product Title & Slug</th>
                                <th>Category / Type</th>
                                <th>Rate / Sq.M</th>
                                <th>Glass Spec / Size</th>
                                <th>Drawings</th>
                                <th style="width: 110px; text-align: center;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            @php
                                $galleryCount = is_array($product->gallery_images) ? count($product->gallery_images) : 0;
                            @endphp
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
                                    <strong class="text-dark d-block" style="font-size: 14.5px;">{{ $product->pr_title }}</strong>
                                    <span class="text-muted" style="font-size: 12px;">
                                        <i class="fa-solid fa-link text-primary mr-1"></i>
                                        <a href="{{ url('/product/' . ($product->slug ?? $product->id)) }}" target="_blank" class="text-primary font-weight-500">
                                            /product/{{ $product->slug ?? $product->id }}
                                        </a>
                                    </span>
                                </td>
                                <td>
                                    <div class="mb-1">
                                        <span class="badge badge-dozo px-2 py-1">
                                            {{ $product->mainCategory->main_category ?? 'Unassigned' }}
                                        </span>
                                    </div>
                                    @if($product->subCategory)
                                        <span class="badge badge-light border text-secondary px-2 py-1">
                                            {{ $product->subCategory->sub_category }}
                                        </span>
                                    @else
                                        <span class="text-muted" style="font-size: 11.5px;"><em>Optional (None)</em></span>
                                    @endif
                                </td>
                                <td>
                                    @if($product->rate_sqm)
                                        <strong class="text-success" style="font-size: 13.5px;">₹ {{ $product->rate_sqm }}</strong>
                                    @else
                                        <span class="text-muted" style="font-size: 12.5px;">On Request</span>
                                    @endif
                                </td>
                                <td>
                                    @if($product->glass_spec)
                                        <span class="d-block text-dark font-weight-500" style="font-size: 13px;">
                                            <i class="fa-solid fa-shield text-info mr-1"></i> {{ $product->glass_spec }}
                                        </span>
                                    @endif
                                    @if($product->dimensions)
                                        <span class="text-muted" style="font-size: 12px;">
                                            <i class="fa-solid fa-ruler-combined mr-1"></i> {{ $product->dimensions }}
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    <span class="badge badge-light border text-dark font-weight-bold">
                                        <i class="fa-solid fa-images text-primary mr-1"></i> {{ $galleryCount + ($product->pr_image ? 1 : 0) }} Photos
                                    </span>
                                </td>
                                <td style="text-align: center;">
                                    <div class="d-flex justify-content-center gap-1">
                                        <!-- View on Live Site -->
                                        <a href="{{ url('/product/' . ($product->slug ?? $product->id)) }}" target="_blank" class="btn btn-sm btn-outline-info action-btn mr-1" title="View Product Page">
                                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                        </a>

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
                    <i class="fa-solid fa-plus text-primary mr-2"></i> Add New Product & Technical Specs
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('addProduct') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4">
                    <div class="row">
                        <!-- Product Title -->
                        <div class="col-md-8 form-group">
                            <label for="add_pr_title" class="font-weight-bold">Product Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="pr_title" id="add_pr_title" placeholder="e.g. Casement Window System 1200 x 1200" required>
                        </div>

                        <!-- Custom Slug (Optional) -->
                        <div class="col-md-4 form-group">
                            <label for="add_slug" class="font-weight-bold">Custom Slug (Optional)</label>
                            <input type="text" class="form-control" name="slug" id="add_slug" placeholder="Auto-generated if blank">
                        </div>

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

                        <!-- Architectural Specs: Rate / SQM -->
                        <div class="col-md-4 form-group">
                            <label for="add_rate_sqm" class="font-weight-bold">Rate / Sq.M (Price)</label>
                            <input type="text" class="form-control" name="rate_sqm" id="add_rate_sqm" placeholder="e.g. 6399/-">
                        </div>

                        <!-- Glass Specification -->
                        <div class="col-md-4 form-group">
                            <label for="add_glass_spec" class="font-weight-bold">Glass Specification</label>
                            <input type="text" class="form-control" name="glass_spec" id="add_glass_spec" placeholder="e.g. 5mm Clear Toughened Glass">
                        </div>

                        <!-- Standard Dimensions -->
                        <div class="col-md-4 form-group">
                            <label for="add_dimensions" class="font-weight-bold">Standard Dimensions</label>
                            <input type="text" class="form-control" name="dimensions" id="add_dimensions" placeholder="e.g. 1200 x 1200 mm">
                        </div>

                        <!-- Profile Type -->
                        <div class="col-md-6 form-group">
                            <label for="add_profile_type" class="font-weight-bold">Profile System Type</label>
                            <input type="text" class="form-control" name="profile_type" id="add_profile_type" placeholder="e.g. Casement Window / Sliding Door Section">
                        </div>

                        <!-- Hardware Specification -->
                        <div class="col-md-6 form-group">
                            <label for="add_hardware_spec" class="font-weight-bold">Hardware / Fittings</label>
                            <input type="text" class="form-control" name="hardware_spec" id="add_hardware_spec" placeholder="e.g. Aluminium Tower Bolt, Door Closer, EPDM Gasket">
                        </div>

                        <!-- Primary Product Cover Image -->
                        <div class="col-md-6 form-group">
                            <label for="add_pr_image" class="font-weight-bold">Primary Cover Image <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" name="pr_image" id="add_pr_image" accept="image/*" required>
                            <small class="form-text text-muted">Featured product photograph (WEBP, PNG, JPG).</small>
                        </div>

                        <!-- Multi-Image Gallery & Elevation Blueprints -->
                        <div class="col-md-6 form-group">
                            <label for="add_gallery_images" class="font-weight-bold">
                                Gallery & Technical Drawings / Section Elevations
                            </label>
                            <input type="file" class="form-control" name="gallery_images[]" id="add_gallery_images" accept="image/*" multiple>
                            <small class="form-text text-muted">Select multiple architectural elevation drawings, cross-sections, and detail views.</small>
                        </div>

                        <!-- Product Description -->
                        <div class="col-12 form-group">
                            <label for="add_pr_desc" class="font-weight-bold">Technical Description / Key Features</label>
                            <textarea class="form-control" name="pr_desc" id="add_pr_desc" rows="5" placeholder="Enter engineering details, wind-load capacity, acoustic ratings, weatherproofing features..."></textarea>
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
                        <!-- Product Title -->
                        <div class="col-md-8 form-group">
                            <label class="font-weight-bold">Product Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="pr_title" value="{{ $product->pr_title }}" required>
                        </div>

                        <!-- Slug -->
                        <div class="col-md-4 form-group">
                            <label class="font-weight-bold">Product URL Slug</label>
                            <input type="text" class="form-control" name="slug" value="{{ $product->slug }}">
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
                        </div>

                        <!-- Architectural Specs: Rate / SQM -->
                        <div class="col-md-4 form-group">
                            <label class="font-weight-bold">Rate / Sq.M (Price)</label>
                            <input type="text" class="form-control" name="rate_sqm" value="{{ $product->rate_sqm }}" placeholder="e.g. 6399/-">
                        </div>

                        <!-- Glass Specification -->
                        <div class="col-md-4 form-group">
                            <label class="font-weight-bold">Glass Specification</label>
                            <input type="text" class="form-control" name="glass_spec" value="{{ $product->glass_spec }}" placeholder="e.g. 5mm Clear Toughened Glass">
                        </div>

                        <!-- Standard Dimensions -->
                        <div class="col-md-4 form-group">
                            <label class="font-weight-bold">Standard Dimensions</label>
                            <input type="text" class="form-control" name="dimensions" value="{{ $product->dimensions }}" placeholder="e.g. 1200 x 1200 mm">
                        </div>

                        <!-- Profile Type -->
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Profile System Type</label>
                            <input type="text" class="form-control" name="profile_type" value="{{ $product->profile_type }}" placeholder="e.g. Casement Window / Section Elevation">
                        </div>

                        <!-- Hardware Specification -->
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Hardware / Fittings</label>
                            <input type="text" class="form-control" name="hardware_spec" value="{{ $product->hardware_spec }}" placeholder="e.g. Aluminium Tower Bolt, Door Closer, EPDM Gasket">
                        </div>

                        <!-- Current Primary Image -->
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Replace Primary Cover Image</label>
                            @if($product->pr_image)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $product->pr_image) }}" alt="Current Image" style="max-height: 80px; border-radius: 6px; border: 1px solid #e2e8f0;">
                                </div>
                            @endif
                            <input type="file" class="form-control" name="pr_image" accept="image/*">
                            <small class="form-text text-muted">Leave blank to retain current cover image.</small>
                        </div>

                        <!-- Upload Additional Gallery Images -->
                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Add More Drawings / Elevation Photos</label>
                            <input type="file" class="form-control" name="gallery_images[]" accept="image/*" multiple>
                            <small class="form-text text-muted">Upload additional technical diagrams or gallery images.</small>
                        </div>

                        <!-- Existing Gallery Images Gallery Management -->
                        @if(is_array($product->gallery_images) && count($product->gallery_images) > 0)
                        <div class="col-12 form-group">
                            <label class="font-weight-bold d-block">Existing Technical Elevation Drawings & Gallery Photos ({{ count($product->gallery_images) }})</label>
                            <div class="d-flex flex-wrap p-2 bg-light rounded border">
                                @foreach($product->gallery_images as $galleryImg)
                                <div class="gallery-preview-card" id="galleryCard_{{ $loop->index }}_{{ $product->id }}">
                                    <img src="{{ asset('storage/' . $galleryImg) }}" alt="Drawing" class="gallery-preview-img">
                                    <button type="button" class="gallery-delete-btn" onclick="removeGalleryImage('{{ $product->id }}', '{{ $galleryImg }}', 'galleryCard_{{ $loop->index }}_{{ $product->id }}')" title="Delete Drawing">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <!-- Product Description -->
                        <div class="col-12 form-group">
                            <label class="font-weight-bold">Technical Description / Specifications</label>
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
        // Auto-generate slug preview on add title change
        $('#add_pr_title').on('input', function() {
            var title = $(this).val();
            var slug = title.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, '');
            $('#add_slug').attr('placeholder', slug || 'Auto-generated');
        });

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

    // Remove single gallery image via AJAX
    function removeGalleryImage(productId, imagePath, cardElementId) {
        Swal.fire({
            title: 'Delete this drawing?',
            text: 'Are you sure you want to remove this elevation/gallery image?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#ef4444',
            cancelButtonColor: '#64748b',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '/product-details/delete-gallery-image/' + productId,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        image_path: imagePath
                    },
                    success: function(res) {
                        $('#' + cardElementId).fadeOut(300, function() { $(this).remove(); });
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            icon: 'success',
                            title: 'Drawing removed successfully',
                            showConfirmButton: false,
                            timer: 2500
                        });
                    },
                    error: function() {
                        Swal.fire('Error', 'Failed to delete image.', 'error');
                    }
                });
            }
        });
    }
</script>
@endpush