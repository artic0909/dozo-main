@extends('admin.layouts.app')

@section('title', 'Blog Management')

@section('styles')
<style>
    .blog-thumb {
        width: 70px;
        height: 60px;
        border-radius: 8px;
        object-fit: cover;
        border: 1px solid #e2e8f0;
    }
</style>
@endsection

@section('content')
<!-- Page Header -->
<div class="row mb-4">
    <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
        <div>
            <h3 class="font-weight-bold mb-1" style="color: #111111;">Blog Posts & Articles</h3>
            <p class="text-muted mb-0" style="font-size: 14px;">Publish architectural insights, fenestration guides, and company news.</p>
        </div>
        <div class="mt-2 mt-sm-0">
            <button class="btn btn-primary dozo-btn font-weight-bold px-3 py-2" data-toggle="modal" data-target="#addBlogModal">
                <i class="fa-solid fa-plus mr-1"></i> Add New Blog
            </button>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card" style="border-radius: 12px; border: 1px solid #e2e8f0;">
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover dataTable-modern" id="blogTable">
                        <thead>
                            <tr>
                                <th style="width: 80px;">Cover</th>
                                <th>Blog Title</th>
                                <th>Tag / Category</th>
                                <th>Content Snippet</th>
                                <th>Date</th>
                                <th style="width: 120px; text-align: center;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $blog)
                            <tr>
                                <td>
                                    @if($blog->b_img)
                                        <img src="{{ asset('storage/' . $blog->b_img) }}" alt="Blog" class="blog-thumb">
                                    @else
                                        <div class="blog-thumb bg-light d-flex align-items-center justify-content-center text-muted">
                                            <i class="fa-regular fa-image"></i>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <strong class="text-dark" style="font-size: 14px;">{{ $blog->b_title }}</strong>
                                </td>
                                <td>
                                    <span class="badge badge-dozo">{{ $blog->b_tag ?? 'Architecture' }}</span>
                                </td>
                                <td>
                                    <span class="text-muted" style="font-size: 13px;">
                                        {{ Str::limit($blog->b_desc, 60) }}
                                    </span>
                                </td>
                                <td>
                                    <span class="text-muted" style="font-size: 12.5px;">
                                        {{ $blog->b_date ? $blog->b_date : ($blog->created_at ? $blog->created_at->format('d M Y') : '—') }}
                                    </span>
                                </td>
                                <td style="text-align: center;">
                                    <div class="d-flex justify-content-center gap-1">
                                        <button type="button" class="btn btn-sm btn-outline-primary mr-1" data-toggle="modal" data-target="#editBlogModal{{ $blog->id }}" title="Edit Blog" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>

                                        <button type="button" class="btn btn-sm btn-outline-danger" onclick="confirmDelete('deleteBlogForm{{ $blog->id }}', '{{ addslashes($blog->b_title) }}')" title="Delete Blog" style="padding: 5px 9px; border-radius: 6px;">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                        <form id="deleteBlogForm{{ $blog->id }}" action="{{ route('deleteblog', $blog->id) }}" method="POST" style="display: none;">
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
<div class="floating-btn-div" data-toggle="modal" data-target="#addBlogModal" title="Add Blog">
    <button class="floating-btn">
        <i class="fa-solid fa-plus"></i>
    </button>
</div>

<!-- Add Blog Modal -->
<div class="modal fade" id="addBlogModal" tabindex="-1" role="dialog" aria-labelledby="addBlogModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="addBlogModalLabel" style="color: #111111;">
                    <i class="fa-solid fa-plus text-primary mr-2"></i> Add New Blog Post
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('addblog') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4">
                    <div class="row">
                        <div class="col-12 form-group">
                            <label for="b_title" class="font-weight-bold">Blog Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="b_title" id="b_title" placeholder="Enter article title" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="b_tag" class="font-weight-bold">Category Tag</label>
                            <input type="text" class="form-control" name="b_tag" id="b_tag" placeholder="e.g. Architecture, Fenestration">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="b_date" class="font-weight-bold">Publish Date</label>
                            <input type="date" class="form-control" name="b_date" id="b_date" value="{{ date('Y-m-d') }}">
                        </div>

                        <div class="col-12 form-group">
                            <label for="b_qt" class="font-weight-bold">Short Quote / Excerpt</label>
                            <input type="text" class="form-control" name="b_qt" id="b_qt" placeholder="Key summary sentence or architect quote">
                        </div>

                        <div class="col-12 form-group">
                            <label for="b_img" class="font-weight-bold">Cover Image <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" name="b_img" id="b_img" accept="image/*" required>
                            <small class="form-text text-muted">Recommended resolution: 800x500px.</small>
                        </div>

                        <div class="col-12 form-group">
                            <label for="b_desc" class="font-weight-bold">Article Content <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="b_desc" id="b_desc" rows="8" placeholder="Write the complete blog article text..." required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary dozo-btn font-weight-bold px-4">Publish Article</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Blog Modals -->
@foreach($blogs as $blog)
<div class="modal fade" id="editBlogModal{{ $blog->id }}" tabindex="-1" role="dialog" aria-labelledby="editBlogModalLabel{{ $blog->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 12px; border: none;">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-bold" id="editBlogModalLabel{{ $blog->id }}" style="color: #111111;">
                    <i class="fa-solid fa-pen-to-square text-primary mr-2"></i> Edit Blog Post
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('editblog', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body p-4">
                    <div class="row">
                        <div class="col-12 form-group">
                            <label class="font-weight-bold">Blog Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="b_title" value="{{ $blog->b_title }}" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Category Tag</label>
                            <input type="text" class="form-control" name="b_tag" value="{{ $blog->b_tag }}">
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="font-weight-bold">Publish Date</label>
                            <input type="date" class="form-control" name="b_date" value="{{ $blog->b_date }}">
                        </div>

                        <div class="col-12 form-group">
                            <label class="font-weight-bold">Short Quote / Excerpt</label>
                            <input type="text" class="form-control" name="b_qt" value="{{ $blog->b_qt }}">
                        </div>

                        <div class="col-12 form-group">
                            <label class="font-weight-bold">Cover Image</label>
                            @if($blog->b_img)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $blog->b_img) }}" alt="Current Blog Cover" class="blog-thumb">
                                </div>
                            @endif
                            <input type="file" class="form-control" name="b_img" accept="image/*">
                            <small class="form-text text-muted">Leave blank to retain current image.</small>
                        </div>

                        <div class="col-12 form-group">
                            <label class="font-weight-bold">Article Content <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="b_desc" rows="8" required>{{ $blog->b_desc }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary dozo-btn font-weight-bold px-4">Update Article</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection