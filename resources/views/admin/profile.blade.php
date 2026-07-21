@extends('admin.master')
@section('title')My Account | {{env('APP_NAME')}}@endsection

@section('body')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <a href="{{ route('dashboard') }}" class="btn btn-secondary"><i class="fas fa-arrow-left me-1"></i>Back to Dashboard</a>
            </div>
            <h4 class="page-title">My Account</h4>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label">Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}" placeholder="Your name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label">Email</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" name="email" value="{{ auth()->user()->email }}" placeholder="Your email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label">Mobile</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="mobile" value="{{ auth()->user()->mobile }}" placeholder="Your mobile">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label">Profile Image</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control" name="image" accept="image/*" onchange="previewAdminProfileImage(this)">
                            <div class="mt-2">
                                <img id="adminProfilePreview" src="{{ asset(auth()->user()->image) }}" style="max-height:80px;border-radius:6px;">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h5 class="mb-3">Change Password</h5>
                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label">New Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password" placeholder="Leave blank to keep current" autocomplete="new-password">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label">Confirm Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm new password" autocomplete="new-password">
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-9 offset-md-3">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save me-1"></i>Update Profile</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function previewAdminProfileImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('adminProfilePreview').src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection