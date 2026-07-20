@extends('front.master')

@section('title', 'সেবাসমূহ | Xpert Service BD - AC Service & Repair in Mirpur')
@section('meta_description', 'Xpert Service BD-এর সব ধরনের সেবা – AC Repair, AC Servicing, AC Installation, AC Gas Refill, Washing Machine Repair, Refrigerator Repair, Microwave, Dishwasher, Geyser রিপেয়ার ও ইনস্টলেশন।')
@section('meta_keywords', 'AC Service Mirpur, AC Repair, Washing Machine Repair, Refrigerator Repair, Microwave Repair')

@section('content')

<section class="page-header" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));padding:120px 0 50px;text-align:center;">
  <div class="container">
    <h1 style="color:#fff;font-size:2rem;font-weight:700;" data-aos="fade-up">আমাদের সেবাসমূহ</h1>
    <nav aria-label="breadcrumb" data-aos="fade-up" style="margin-top:15px;">
      <ol class="breadcrumb justify-content-center" style="background:none;padding:0;margin:0;">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color:rgba(255,255,255,0.7);">হোম</a></li>
        <li class="breadcrumb-item active" style="color:var(--accent);">সেবাসমূহ</li>
      </ol>
    </nav>
  </div>
</section>

<section class="section services-section">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>পেশাদার হোম অ্যাপ্লায়েন্স সেবা</h2>
      <p>সব ধরনের ইলেকট্রিক ও ইলেকট্রনিক হোম অ্যাপ্লায়েন্স মেরামত ও সার্ভিস – মিরপুর, ঢাকা</p>
    </div>
    <div class="row g-4">
      @foreach($services as $service)
      <div class="col-md-6 col-lg-4" data-aos="fade-up">
        <div class="service-card">
          <div class="service-img"><img src="{{ asset($service->image ?? 'front/images/services/default.jpg') }}" alt="{{ $service->title }}"></div>
          <div class="service-info">
            <div class="service-icon"><i class="{{ $service->icon }}"></i></div>
            <h3>{{ $service->title }}</h3>
            <p>{{ Str::limit($service->description, 80) }}</p>
            <a href="{{ route('service.detail', $service->slug) }}" class="blog-read-more mt-2 d-inline-block">বিস্তারিত দেখুন <i class="fas fa-arrow-right ms-1"></i></a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section class="section emergency-section" style="padding-top:0;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="emergency-box">
          <div class="row align-items-center">
            <div class="col-md-8 text-center text-md-start mb-3 mb-md-0">
              <h2 class="emergency-title">জরুরি সার্ভিস প্রয়োজন?</h2>
              <p class="emergency-text mb-0">আমরা ২৪/৭ ইমার্জেন্সি কল সার্ভিস প্রদান করি। এখনই কল করুন, আমরা ৩০ মিনিটের মধ্যে পৌঁছে যাব।</p>
            </div>
            <div class="col-md-4 text-center text-md-end">
              <a href="tel:+8801723456789" class="btn btn-emergency"><i class="fas fa-phone-alt me-2"></i> +880 1723-456789</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
