@extends('front.master')

@section('title', $service->meta_title ?? $service->title . ' | Xpert Service BD')
@section('meta_description', $service->meta_description ?? Str::limit($service->description, 160))

@push('head')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","name":"{{ $service->title }}","provider":{"@type":"LocalBusiness","name":"Xpert Service BD","telephone":"+8801723456789"},"areaServed":"Mirpur, Dhaka","description":"{{ strip_tags($service->description) }}"}</script>
@endpush

@section('content')

<section class="page-header" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));padding:120px 0 50px;text-align:center;">
  <div class="container">
    <h1 style="color:#fff;font-size:2rem;font-weight:700;" data-aos="fade-up">{{ $service->title }}</h1>
    <nav aria-label="breadcrumb" data-aos="fade-up" style="margin-top:15px;">
      <ol class="breadcrumb justify-content-center" style="background:none;padding:0;margin:0;">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color:rgba(255,255,255,0.7);">হোম</a></li>
        <li class="breadcrumb-item"><a href="{{ route('services') }}" style="color:rgba(255,255,255,0.7);">সেবাসমূহ</a></li>
        <li class="breadcrumb-item active" style="color:var(--accent);">{{ $service->title }}</li>
      </ol>
    </nav>
  </div>
</section>

<section class="section py-5">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-lg-6" data-aos="fade-right">
        <img src="{{ asset($service->image ?? 'front/images/services/default.jpg') }}" alt="{{ $service->title }}" class="img-fluid rounded" style="border-radius:var(--radius);">
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <span class="badge bg-primary mb-3 px-3 py-2"><i class="{{ $service->icon }} me-1"></i> {{ $service->title }}</span>
        <h2>{{ $service->title }}</h2>
        <p>{{ $service->description }}</p>
      </div>
    </div>
  </div>
</section>

@php $benefits = json_decode($service->benefits, true); @endphp
@if($benefits)
<section class="section py-5" style="background:#f8f9fa;">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>আমাদের {{ $service->title }} সেবার উপকারিতা</h2>
    </div>
    <div class="row g-4">
      @foreach($benefits as $b)
      <div class="col-md-6 col-lg-4" data-aos="fade-up">
        <div class="d-flex gap-3 p-3 rounded" style="background:var(--white);border:1px solid var(--border);height:100%;">
          <div><i class="{{ $loop->first ? 'fas fa-clock' : ($loop->iteration == 2 ? 'fas fa-user-tie' : ($loop->iteration == 3 ? 'fas fa-shield-alt' : ($loop->iteration == 4 ? 'fas fa-hand-holding-usd' : ($loop->iteration == 5 ? 'fas fa-cog' : 'fas fa-headset')))) }}" style="font-size:2rem;color:var(--accent);"></i></div>
          <div><h5 style="font-weight:700;color:var(--primary);">{{ $b['title'] }}</h5><p class="mb-0 small">{{ $b['description'] }}</p></div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif

@php $process = json_decode($service->process, true); @endphp
@if($process)
<section class="section py-5">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>আমাদের সার্ভিস প্রক্রিয়া</h2>
    </div>
    <div class="row g-4">
      @foreach($process as $i => $s)
      <div class="col-md-3" data-aos="fade-up">
        <div class="text-center p-4" style="background:var(--white);border-radius:var(--radius);box-shadow:var(--shadow);height:100%;">
          <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-3" style="width:50px;height:50px;background:var(--primary);color:#fff;font-weight:700;">{{ $i+1 }}</div>
          <h5 style="font-weight:700;">{{ $s['title'] }}</h5>
          <p class="small mb-0">{{ $s['description'] }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif

<section class="section py-5" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));text-align:center;">
  <div class="container">
    <h2 style="color:#fff;font-weight:700;">এখনই কল করুন!</h2>
    <p style="color:rgba(255,255,255,0.8);">আপনার সমস্যার জন্য আমাদের সাথে যোগাযোগ করুন। আমরা দ্রুত সমাধান নিশ্চিত করব।</p>
    <div class="d-flex justify-content-center gap-3 flex-wrap">
      <a href="tel:+8801723456789" class="btn btn-light btn-lg px-4"><i class="fas fa-phone-alt me-2"></i> কল করুন</a>
      <a href="https://wa.me/8801723456789?text=Hi!%20I%20need%20service." target="_blank" rel="noopener" class="btn btn-success btn-lg px-4"><i class="fab fa-whatsapp me-2"></i> WhatsApp</a>
    </div>
  </div>
</section>

@if($others->isNotEmpty())
<section class="section py-5">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>অন্যান্য সেবা</h2>
    </div>
    <div class="row g-4">
      @foreach($others as $o)
      <div class="col-md-6 col-lg-3" data-aos="fade-up">
        <div class="service-card">
          <div class="service-img"><img src="{{ asset($o->image ?? 'front/images/services/default.jpg') }}" alt="{{ $o->title }}"></div>
          <div class="service-info text-center">
            <div class="service-icon"><i class="{{ $o->icon }}"></i></div>
            <h5>{{ $o->title }}</h5>
            <a href="{{ route('service.detail', $o->slug) }}" class="blog-read-more">বিস্তারিত <i class="fas fa-arrow-right ms-1"></i></a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif

@endsection
