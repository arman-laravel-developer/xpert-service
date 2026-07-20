@extends('admin.master')
@section('title')
    {{ isset($editItem) ? 'Edit' : 'Add' }} FAQ | {{env('APP_NAME')}}
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
                <h4 class="page-title">{{ isset($editItem) ? 'Edit' : 'Add' }} FAQ</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane show active" id="basic-form-preview">
                            <form action="{{ isset($editItem) ? route('faq.update', $editItem->id) : route('faq.store') }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-2 col-form-label">Question</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control" name="question" value="{{ $editItem->question ?? '' }}" placeholder="FAQ question">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-2 col-form-label">Answer</label>
                                    <div class="col-10">
                                        <textarea name="answer" class="form-control" rows="4" placeholder="FAQ answer">{{ $editItem->answer ?? '' }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-2 col-form-label">Sort Order</label>
                                    <div class="col-10">
                                        <input type="number" class="form-control" name="sort_order" value="{{ $editItem->sort_order ?? 0 }}" min="0">
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
                                            <a href="{{ route('faq.index') }}" class="btn btn-secondary">Cancel</a>
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
                            <tr><th>S.N</th><th>Question</th><th>Sort Order</th><th>Status</th><th>Action</th></tr>
                        </thead>
                        <tbody>
                            @foreach($faqs as $faq)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $faq->question }}</td>
                                <td>{{ $faq->sort_order }}</td>
                                <td>
                                    @if($faq->status == 1)
                                        <span class="badge badge-success-lighten">Active</span>
                                    @else
                                        <span class="badge badge-danger-lighten">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('faq.edit', $faq->id) }}" class="btn btn-success btn-sm"><i class="uil-edit-alt"></i></a>
                                    <button type="button" class="btn btn-danger btn-sm delete-btn" data-url="{{ route('faq.destroy', $faq->id) }}"><i class="uil-trash"></i></button>
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
