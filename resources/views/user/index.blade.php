@extends('admin.master')

@section('title')Add User | {{env('APP_NAME')}}@endsection

@section('body')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <a href="{{ route('user.manage') }}" class="btn btn-secondary"><i class="fas fa-arrow-left me-1"></i>Back to Users</a>
            </div>
            <h4 class="page-title">Add User</h4>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <form action="{{route('user.new')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label">Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name" placeholder="User name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label">Email</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" name="email" placeholder="User email" autocomplete="new email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label">Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password" placeholder="User password" autocomplete="new password">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label">Mobile</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="mobile" placeholder="User mobile">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label">Image</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control" name="image" accept="image/*" onchange="previewUserImage(this)">
                            <div class="mt-2">
                                <img id="userImagePreview" src="" style="max-height:80px;border-radius:6px;display:none;">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label">User Type</label>
                        <div class="col-md-9 d-flex align-items-center gap-3">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="user_type" value="1" id="utAdmin" checked>
                                <label class="form-check-label" for="utAdmin">Admin</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="user_type" value="2" id="utReporter">
                                <label class="form-check-label" for="utReporter">Reporter</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label">Roles</label>
                        <div class="col-md-9">
                            <div class="d-flex flex-wrap gap-3">
                                @foreach($roles as $key => $role)
                                <div class="form-check">
                                    <input type="checkbox" value="{{ $role->id }}" name="role[]" class="form-check-input" id="role{{$key}}">
                                    <label class="form-check-label" for="role{{$key}}">{{ $role->name }}</label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-9 offset-md-3">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save me-1"></i>Create User</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function previewUserImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            var img = document.getElementById('userImagePreview');
            img.src = e.target.result;
            img.style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection
