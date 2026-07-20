@extends('admin.master')
@section('title')
    {{ isset($editItem) ? 'Edit' : 'Add' }} Blog Post | {{env('APP_NAME')}}
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <form class="d-flex">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-light" id="dash-daterange">
                            <span class="input-group-text bg-primary border-primary text-white"><i class="mdi mdi-calendar-range font-13"></i></span>
                        </div>
                        <a href="javascript: void(0);" class="btn btn-primary ms-2"><i class="mdi mdi-autorenew"></i></a>
                        <a href="javascript: void(0);" class="btn btn-primary ms-1"><i class="mdi mdi-filter-variant"></i></a>
                    </form>
                </div>
                <h4 class="page-title">{{ isset($editItem) ? 'Edit' : 'Add' }} Blog Post</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane show active" id="basic-form-preview">
                            <form action="{{ isset($editItem) ? route('blog-post.update', $editItem->id) : route('blog-post.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-2 col-form-label">Title</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control" name="title" value="{{ $editItem->title ?? '' }}" placeholder="Post title">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-2 col-form-label">Category</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control" name="category" value="{{ $editItem->category ?? '' }}" placeholder="e.g. AC Tips, Fridge Care">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-2 col-form-label">Author</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control" name="author" value="{{ $editItem->author ?? '' }}" placeholder="Author name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-2 col-form-label">Published Date</label>
                                    <div class="col-10">
                                        <input type="date" class="form-control" name="published_date" value="{{ $editItem->published_date ?? '' }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-2 col-form-label">Content</label>
                                    <div class="col-10">
                                        <textarea name="content" id="summernote" class="form-control" rows="8">{{ $editItem->content ?? '' }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-2 col-form-label">Image</label>
                                    <div class="col-10">
                                        <input type="file" name="image" class="form-control">
                                        @if(isset($editItem) && $editItem->image)
                                            <img src="{{ asset($editItem->image) }}" style="height: 80px; margin-top: 10px;">
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-2 col-form-label">Meta Title</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control" name="meta_title" value="{{ $editItem->meta_title ?? '' }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-2 col-form-label">Meta Description</label>
                                    <div class="col-10">
                                        <textarea name="meta_description" class="form-control" rows="2">{{ $editItem->meta_description ?? '' }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-2 col-form-label">Status</label>
                                    <div class="col-10">
                                        <input type="checkbox" id="switch1" value="1" class="form-control" name="status" data-switch="bool" {{ isset($editItem) && $editItem->status == 1 ? 'checked' : '' }}>
                                        <label for="switch1" data-on-label="On" data-off-label="Off"></label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-2 col-form-label"></label>
                                    <div class="col-10">
                                        <button type="submit" class="btn btn-primary">{{ isset($editItem) ? 'Update' : 'Submit' }}</button>
                                        @if(isset($editItem))
                                            <a href="{{ route('blog-post.index') }}" class="btn btn-secondary">Cancel</a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr><th>S.N</th><th>Title</th><th>Category</th><th>Image</th><th>Date</th><th>Status</th><th>Action</th></tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->category }}</td>
                                <td>
                                    @if($post->image)
                                        <img src="{{ asset($post->image) }}" style="height: 50px;">
                                    @endif
                                </td>
                                <td>{{ $post->published_date }}</td>
                                <td>
                                    @if($post->status == 1)
                                        <span class="badge badge-success-lighten">Active</span>
                                    @else
                                        <span class="badge badge-danger-lighten">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('blog-post.edit', $post->id) }}" class="btn btn-success btn-sm"><i class="uil-edit-alt"></i></a>
                                    <button type="button" class="btn btn-danger btn-sm delete-btn" data-url="{{ route('blog-post.destroy', $post->id) }}"><i class="uil-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#summernote').summernote({ tabsize: 2, height: 300 });
    </script>
@endsection

@push('head')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush
@section('scripts')
<script>
$(document).ready(function() {
    $('.delete-btn').on('click', function(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = $(this).data('url');
            }
        });
    });
});
</script>
@endsection
