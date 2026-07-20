<!DOCTYPE html>
<html lang="bn" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', $generalSettingView->site_name ?? 'Xpert Service BD')</title>
  <meta name="description" content="@yield('meta_description', ($generalSettingView->site_name ?? '') . ' – পেশাদার হোম অ্যাপ্লায়েন্স সার্ভিস')">
  <meta name="keywords" content="@yield('meta_keywords', 'AC Service, AC Repair, Home Appliance Repair, ' . ($generalSettingView->site_name ?? ''))">
  <meta name="robots" content="index, follow">
  <meta name="author" content="{{ $generalSettingView->site_name ?? '' }}">
  <meta property="og:title" content="@yield('og_title', $generalSettingView->site_name ?? '')">
  <meta property="og:description" content="@yield('og_description', ($generalSettingView->site_name ?? '') . ' – পেশাদার হোম অ্যাপ্লায়েন্স সার্ভিস')">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset($generalSettingView->header_logo ?? 'front/images/logo.png') }}">
  <link rel="canonical" href="{{ url()->current() }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('front/css/styles.css') }}">
  @stack('head')
  <link rel="icon" type="image/png" href="{{ asset($generalSettingView->favicon ?? 'front/images/favicon.png') }}">
</head>
<body>

@php
    $whatsapp = preg_replace('/[^0-9]/', '', $generalSettingView->pinterest_url ?? '');
    $phone = $generalSettingView->mobile ?? '';
    $siteName = $generalSettingView->site_name ?? 'Xpert Service BD';
    $headerLogo = $generalSettingView->header_logo ?? 'front/images/logo.png';
    $footerLogo = $generalSettingView->footer_logo ?? 'front/images/logo.png';
@endphp

<div class="sticky-buttons">
  <a href="tel:{{ $phone }}" class="sticky-call" aria-label="Call Now"><i class="fas fa-phone-alt"></i></a>
  @if($whatsapp)
  <a href="https://wa.me/{{ $whatsapp }}?text=Hi!%20I%20need%20a%20service." target="_blank" rel="noopener" class="sticky-whatsapp" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
  @endif
</div>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset($headerLogo) }}" alt="{{ $siteName }} Logo" height="45" class="d-inline-block align-top me-2">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">হোম</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">সেবাসমূহ</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->routeIs('service-areas') ? 'active' : '' }}" href="{{ route('service-areas') }}">সার্ভিস এলাকা</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->routeIs('brands') ? 'active' : '' }}" href="{{ route('brands') }}">ব্র্যান্ড</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->routeIs('blog*') ? 'active' : '' }}" href="{{ route('blog') }}">ব্লগ</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">যোগাযোগ</a></li>
        </ul>
        <div class="nav-buttons ms-lg-3 d-flex gap-2">
          @if($phone)
          <a href="tel:{{ $phone }}" class="btn btn-call-nav"><i class="fas fa-phone-alt me-1"></i> কল করুন</a>
          @endif
          @if($whatsapp)
          <a href="https://wa.me/{{ $whatsapp }}?text=Hi!%20I%20need%20a%20service." target="_blank" rel="noopener" class="btn btn-whatsapp-nav"><i class="fab fa-whatsapp me-1"></i> WhatsApp<span class="d-none d-sm-inline"> এ মেসেজ দিন</span></a>
          @endif
        </div>
      </div>
    </div>
  </nav>
</header>

<main>
  @yield('content')
</main>

<footer class="footer-section">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <div class="footer-brand">
          <img src="{{ asset($footerLogo) }}" alt="{{ $siteName }}" height="40" class="me-2">
          <span class="footer-brand-text">{{ $siteName }}</span>
        </div>
        <p class="footer-desc mt-3">{{ $generalSettingView->about_us_short ?? '' }}</p>
        <div class="footer-social d-flex gap-3">
          @if($generalSettingView->facebook_url)<a href="{{ $generalSettingView->facebook_url }}" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>@endif
          @if($generalSettingView->instagram_url)<a href="{{ $generalSettingView->instagram_url }}" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>@endif
          @if($generalSettingView->youtube_url)<a href="{{ $generalSettingView->youtube_url }}" target="_blank" rel="noopener" aria-label="YouTube"><i class="fab fa-youtube"></i></a>@endif
          @if($generalSettingView->twitter_url)<a href="{{ $generalSettingView->twitter_url }}" target="_blank" rel="noopener" aria-label="Twitter"><i class="fab fa-twitter"></i></a>@endif
          @if($generalSettingView->linkedin_url)<a href="{{ $generalSettingView->linkedin_url }}" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>@endif
          @if($whatsapp)<a href="https://wa.me/{{ $whatsapp }}" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>@endif
        </div>
      </div>
      <div class="col-md-6 col-lg-2">
        <h4>দ্রুত লিংক</h4>
        <ul class="footer-links">
          <li><a href="{{ route('home') }}">হোম</a></li>
          <li><a href="{{ route('services') }}">সেবাসমূহ</a></li>
          <li><a href="{{ route('service-areas') }}">সার্ভিস এলাকা</a></li>
          <li><a href="{{ route('brands') }}">ব্র্যান্ড</a></li>
          <li><a href="{{ route('blog') }}">ব্লগ</a></li>
          <li><a href="{{ route('contact') }}">যোগাযোগ</a></li>
        </ul>
      </div>
      <div class="col-md-6 col-lg-3">
        <h4>আমাদের সেবা</h4>
        <ul class="footer-links">
          <li><a href="{{ route('service.detail', 'ac-repair') }}">AC Repair &amp; Servicing</a></li>
          <li><a href="{{ route('service.detail', 'ac-installation') }}">AC Installation &amp; Gas Refill</a></li>
          <li><a href="{{ route('service.detail', 'washing-machine') }}">Washing Machine Repair</a></li>
          <li><a href="{{ route('service.detail', 'refrigerator') }}">Refrigerator Repair</a></li>
          <li><a href="{{ route('service.detail', 'microwave') }}">Microwave &amp; Dishwasher</a></li>
          <li><a href="{{ route('service.detail', 'geyser') }}">Geyser &amp; Installation</a></li>
        </ul>
      </div>
      <div class="col-md-6 col-lg-3">
        <h4>যোগাযোগ</h4>
        <ul class="footer-contact">
          @if($phone)<li><i class="fas fa-phone-alt me-2"></i> <a href="tel:{{ $phone }}">{{ $phone }}</a></li>@endif
          @if($whatsapp)<li><i class="fab fa-whatsapp me-2"></i> <a href="https://wa.me/{{ $whatsapp }}">WhatsApp</a></li>@endif
          @if($generalSettingView->email)<li><i class="fas fa-envelope me-2"></i> <a href="mailto:{{ $generalSettingView->email }}">{{ $generalSettingView->email }}</a></li>@endif
          @if($generalSettingView->address)<li><i class="fas fa-map-marker-alt me-2"></i> {{ $generalSettingView->address }}</li>@endif
        </ul>
      </div>
    </div>
    <hr class="footer-divider">
    <div class="row">
      <div class="col-md-6 text-center text-md-start">
        <p class="footer-copyright mb-0">&copy; {{ date('Y') }} {{ $siteName }}. All rights reserved.</p>
      </div>
      <div class="col-md-6 text-center text-md-end">
        <p class="footer-tagline mb-0">{{ $generalSettingView->site_name ?? '' }} – পেশাদার হোম অ্যাপ্লায়েন্স সার্ভিস</p>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{ asset('front/js/script.js') }}"></script>
</body>
</html>
