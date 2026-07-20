@extends('admin.master')
@section('title')
    General Settings | {{env('APP_NAME')}}
@endsection

@section('body')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <a href="{{route('dashboard')}}" class="btn btn-primary ms-2"><i class="mdi mdi-autorenew"></i></a>
            </div>
            <h4 class="page-title">General Settings</h4>
        </div>
    </div>
</div>

<form action="{{route('setting.update')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0"><i class="fas fa-info-circle me-2"></i>Basic Info</h5></div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Site Name</label>
                        <input type="text" class="form-control" name="site_name" value="{{optional($generalSetting)->site_name}}" placeholder="Site name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mobile</label>
                        <input type="text" class="form-control" name="mobile" value="{{optional($generalSetting)->mobile}}" placeholder="Site mobile">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{optional($generalSetting)->email}}" placeholder="Site email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <textarea class="form-control" name="address" rows="2" placeholder="Site address">{{optional($generalSetting)->address}}</textarea>
                    </div>
                    <div class="mb-0">
                        <label class="form-label">About Us (Footer)</label>
                        <textarea class="form-control" name="about_us_short" rows="3" placeholder="Short description for footer">{{optional($generalSetting)->about_us_short}}</textarea>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0"><i class="fas fa-share-alt me-2"></i>Social Links</h5></div>
                <div class="card-body">
                    <div class="mb-2">
                        <label class="form-label"><i class="fab fa-facebook text-primary me-1"></i>Facebook</label>
                        <input type="text" class="form-control" name="facebook_url" value="{{optional($generalSetting)->facebook_url}}" placeholder="https://facebook.com/...">
                    </div>
                    <div class="mb-2">
                        <label class="form-label"><i class="fab fa-instagram text-danger me-1"></i>Instagram</label>
                        <input type="text" class="form-control" name="instagram_url" value="{{optional($generalSetting)->instagram_url}}" placeholder="https://instagram.com/...">
                    </div>
                    <div class="mb-2">
                        <label class="form-label"><i class="fab fa-youtube text-danger me-1"></i>YouTube</label>
                        <input type="text" class="form-control" name="youtube_url" value="{{optional($generalSetting)->youtube_url}}" placeholder="https://youtube.com/...">
                    </div>
                    <div class="mb-2">
                        <label class="form-label"><i class="fab fa-twitter text-info me-1"></i>Twitter</label>
                        <input type="text" class="form-control" name="twitter_url" value="{{optional($generalSetting)->twitter_url}}" placeholder="https://twitter.com/...">
                    </div>
                    <div class="mb-2">
                        <label class="form-label"><i class="fab fa-linkedin text-primary me-1"></i>LinkedIn</label>
                        <input type="text" class="form-control" name="linkedin_url" value="{{optional($generalSetting)->linkedin_url}}" placeholder="https://linkedin.com/...">
                    </div>
                    <div class="mb-0">
                        <label class="form-label"><i class="fab fa-whatsapp text-success me-1"></i>WhatsApp Number</label>
                        <input type="text" class="form-control" name="pinterest_url" value="{{optional($generalSetting)->pinterest_url}}" placeholder="+8801xxxxxxxxx">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header"><h5 class="card-title mb-0"><i class="fas fa-image me-2"></i>Logos & Favicon</h5></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Header Logo</label>
                            <div class="upload-preview mb-2">
                                <img id="headerLogoPreview" src="{{asset(optional($generalSetting)->header_logo)}}" style="max-width:100%;height:60px;object-fit:contain;">
                            </div>
                            <input type="file" class="form-control form-control-sm" name="header_logo" accept="image/*" onchange="previewFile(this, 'headerLogoPreview')">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Footer Logo</label>
                            <div class="upload-preview mb-2">
                                <img id="footerLogoPreview" src="{{asset(optional($generalSetting)->footer_logo)}}" style="max-width:100%;height:60px;object-fit:contain;">
                            </div>
                            <input type="file" class="form-control form-control-sm" name="footer_logo" accept="image/*" onchange="previewFile(this, 'footerLogoPreview')">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Favicon</label>
                            <div class="upload-preview mb-2">
                                <img id="faviconPreview" src="{{asset(optional($generalSetting)->favicon)}}" style="max-width:100%;height:60px;object-fit:contain;">
                            </div>
                            <input type="file" class="form-control form-control-sm" name="favicon" accept=".ico,.png,.jpg,.jpeg,.gif" onchange="previewFile(this, 'faviconPreview')">
                        </div>
                        <div class="col-md-6 mb-0">
                            <label class="form-label">Payment Method Image</label>
                            <div class="upload-preview mb-2">
                                <img id="paymentPreview" src="{{asset(optional($generalSetting)->payment_method_image)}}" style="max-width:100%;height:60px;object-fit:contain;">
                            </div>
                            <input type="file" class="form-control form-control-sm" name="payment_method_image" accept="image/*" onchange="previewFile(this, 'paymentPreview')">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save me-1"></i>Save Settings</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@push('head')
<script>
function previewFile(input, imgId) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById(imgId).src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endpush



