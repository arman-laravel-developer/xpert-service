@extends('front.master')

@section('title', 'ব্র্যান্ড | Xpert Service BD - Samsung, LG, Gree, General Repair')
@section('meta_description', 'Xpert Service BD – Samsung, LG, Gree, General, Toshiba, Panasonic, Mitsubishi, Whirlpool, Midea, Haier, Walton, Singer সহ সব ব্র্যান্ডের হোম অ্যাপ্লায়েন্স রিপেয়ার ও সার্ভিস।')
@section('meta_keywords', 'Samsung Repair Mirpur, LG Repair, Gree AC Service, General AC Repair')

@section('content')

<section class="page-header" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));padding:120px 0 50px;text-align:center;">
  <div class="container">
    <h1 style="color:#fff;font-size:2rem;font-weight:700;" data-aos="fade-up">আমরা যে ব্র্যান্ডগুলোর সেবা দেই</h1>
    <nav aria-label="breadcrumb" data-aos="fade-up" style="margin-top:15px;">
      <ol class="breadcrumb justify-content-center" style="background:none;padding:0;margin:0;">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color:rgba(255,255,255,0.7);">হোম</a></li>
        <li class="breadcrumb-item active" style="color:var(--accent);">ব্র্যান্ড</li>
      </ol>
    </nav>
  </div>
</section>

<section class="section brands-section">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>দেশী-বিদেশী সব নামকরা ব্র্যান্ড</h2>
      <p>যেকোন ব্র্যান্ডের হোম অ্যাপ্লায়েন্স – আমরা সব জানি, সব করতে পারি</p>
    </div>
    <div class="row g-4">
      @foreach($brands as $brand)
      <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">
        <div class="brand-card text-center p-4" style="background:var(--white);border-radius:var(--radius);box-shadow:var(--shadow);border:1px solid var(--border);transition:var(--transition);height:100%;">
          @if($brand->image)
          <img src="{{ asset($brand->image) }}" alt="{{ $brand->name }}" style="height:60px;width:auto;margin:0 auto 15px;filter:grayscale(0);">
          @endif
          <h4 style="font-size:1.1rem;font-weight:700;color:var(--primary);">{{ $brand->name }}</h4>
          <p style="font-size:0.85rem;color:var(--text-light);">{{ $brand->description }}</p>
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
              <h2 class="emergency-title">আপনার ব্র্যান্ডের সার্ভিস প্রয়োজন?</h2>
              <p class="emergency-text mb-0">যেকোন ব্র্যান্ডের হোম অ্যাপ্লায়েন্স – এখনই কল করুন!</p>
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
