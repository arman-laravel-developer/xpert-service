<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Lock Screen | {{ $generalSettingView->site_name ?? 'Admin' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme" name="description" />
    <meta content="Coderthemes" name="author" />
    <link rel="icon" href="{{ asset($generalSettingView->favicon) }}">
    <link href="{{asset('/')}}admin/assets/css/app-saas.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="authentication-bg d-flex align-items-center" style="min-height:100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg">
                    <div class="card-body p-5 text-center">
                        <div class="mb-4">
                            <img src="{{ asset($generalSettingView->footer_logo) }}" alt="logo" height="60">
                        </div>
                        <h4 class="mb-1">Screen Locked</h4>
                        <p class="text-muted mb-4">Enter your password to unlock.</p>
                        <div class="mb-3">
                            <img src="{{ Auth::user()->profile_photo_url ?? asset('admin/assets/images/users/avatar-1.jpg') }}" alt="user" class="rounded-circle shadow" width="80" height="80">
                            <h5 class="mt-2">{{ Auth::user()->name }}</h5>
                            <p class="text-muted small">{{ Auth::user()->email }}</p>
                        </div>
                        <form method="POST" action="{{ route('lock-screen.unlock') }}">
                            @csrf
                            <div class="mb-3 text-start">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required autofocus>
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>
                            @if(session('error'))
                                <div class="alert alert-danger py-2">{{ session('error') }}</div>
                            @endif
                            <button type="submit" class="btn btn-primary w-100">Unlock</button>
                        </form>
                        <div class="mt-3">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();" class="text-muted">
                                <i class="fas fa-sign-out-alt me-1"></i> Not {{ Auth::user()->name }}? Logout
                            </a>
                            <form action="{{ route('logout') }}" method="POST" id="logoutForm">@csrf</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>