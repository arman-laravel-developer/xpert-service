@extends('front.master')

@section('title', 'ব্লগ | Xpert Service BD - হোম অ্যাপ্লায়েন্স টিপস')
@section('meta_description', 'Xpert Service BD ব্লগ – AC সার্ভিসিং, ওয়াশিং মেশিন, ফ্রিজ ও হোম অ্যাপ্লায়েন্স রক্ষণাবেক্ষণের টিপস, ট্রিকস ও পরামর্শ।')
@section('meta_keywords', 'AC Service Tips, Washing Machine Tips, Fridge Care Tips, Home Appliance Blog')

@section('content')

<section class="page-header" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));padding:120px 0 50px;text-align:center;">
  <div class="container">
    <h1 style="color:#fff;font-size:2rem;font-weight:700;" data-aos="fade-up">আমাদের ব্লগ</h1>
    <nav aria-label="breadcrumb" data-aos="fade-up" style="margin-top:15px;">
      <ol class="breadcrumb justify-content-center" style="background:none;padding:0;margin:0;">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color:rgba(255,255,255,0.7);">হোম</a></li>
        <li class="breadcrumb-item active" style="color:var(--accent);">ব্লগ</li>
      </ol>
    </nav>
  </div>
</section>

<section class="section blog-section">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>হোম অ্যাপ্লায়েন্স টিপস ও রক্ষণাবেক্ষণ</h2>
      <p>আপনার হোম অ্যাপ্লায়েন্সকে দীর্ঘদিন ভালো রাখার টিপস, ট্রিকস ও পরামর্শ</p>
    </div>
    <div class="row g-4">
      @foreach($posts as $post)
      <div class="col-md-6 col-lg-4" data-aos="fade-up">
        <div class="blog-card">
          @if($post->image)
          <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="blog-img">
          @endif
          <div class="blog-body">
            @if($post->published_date)
            <span class="blog-date"><i class="far fa-calendar-alt me-1"></i> {{ \Carbon\Carbon::parse($post->published_date)->format('j F Y') }}</span>
            @endif
            <h3>{{ $post->title }}</h3>
            <p>{{ Str::limit(strip_tags($post->content), 100) }}</p>
            <a href="{{ route('blog.detail', $post->slug) }}" class="blog-read-more">আরও পড়ুন <i class="fas fa-arrow-right ms-1"></i></a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="d-flex justify-content-center mt-4">
      {{ $posts->links() }}
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
              <h2 class="emergency-title">সমস্যা হলে কি করবেন?</h2>
              <p class="emergency-text mb-0">এখনই কল করুন বা WhatsApp এ মেসেজ দিন – আমরা দ্রুত সমাধান দেব।</p>
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
