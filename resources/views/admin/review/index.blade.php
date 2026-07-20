@extends('admin.master')
@section('title')
    {{ isset($editItem) ? 'Edit' : 'Add' }} Review | {{env('APP_NAME')}}
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
                <h4 class="page-title">{{ isset($editItem) ? 'Edit' : 'Add' }} Review</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane show active" id="basic-form-preview">
                            <form action="{{ isset($editItem) ? route('review.update', $editItem->id) : route('review.store') }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-2 col-form-label">Name</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control" name="name" value="{{ $editItem->name ?? '' }}" placeholder="Customer name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-2 col-form-label">Location</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control" name="location" value="{{ $editItem->location ?? '' }}" placeholder="e.g. Mirpur-1, Dhaka">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-2 col-form-label">Rating</label>
                                    <div class="col-10">
                                        <select name="rating" class="form-control">
                                            @for($i = 1; $i <= 5; $i++)
                                                <option value="{{ $i }}" {{ isset($editItem) && $editItem->rating == $i ? 'selected' : '' }}>{{ $i }} Star{{ $i > 1 ? 's' : '' }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-2 col-form-label">Review</label>
                                    <div class="col-10">
                                        <textarea name="content" class="form-control" rows="4" placeholder="Write review...">{{ $editItem->content ?? '' }}</textarea>
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
                                            <a href="{{ route('review.index') }}" class="btn btn-secondary">Cancel</a>
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
                            <tr><th>S.N</th><th>Name</th><th>Location</th><th>Rating</th><th>Review</th><th>Status</th><th>Action</th></tr>
                        </thead>
                        <tbody>
                            @foreach($reviews as $review)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $review->name }}</td>
                                <td>{{ $review->location }}</td>
                                <td>
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $review->rating)
                                            <i class="fas fa-star text-warning"></i>
                                        @else
                                            <i class="far fa-star"></i>
                                        @endif
                                    @endfor
                                </td>
                                <td>{{ Str::limit($review->content, 50) }}</td>
                                <td>
                                    @if($review->status == 1)
                                        <span class="badge badge-success-lighten">Active</span>
                                    @else
                                        <span class="badge badge-danger-lighten">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('review.edit', $review->id) }}" class="btn btn-success btn-sm"><i class="uil-edit-alt"></i></a>
                                    <button type="button" class="btn btn-danger btn-sm delete-btn" data-url="{{ route('review.destroy', $review->id) }}"><i class="uil-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
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
