@extends('front.master')

@section('title', 'হোম অ্যাপ্লায়েন্স ইনস্টলেশন | Home Appliance Installation | Xpert Service BD')
@section('meta_description', 'মিরপুরে পেশাদার হোম অ্যাপ্লায়েন্স ইনস্টলেশন সেবা - ওভেন, হুড, ওয়াটার পিউরিফায়ার, এক্সজস্ট ফ্যান, ফ্যান, লাইট ইনস্টলেশন।')

@push('head')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","name":"Home Appliance Installation","provider":{"@type":"LocalBusiness","name":"Xpert Service BD","telephone":"+8801723456789"},"areaServed":"Mirpur, Dhaka","description":"পেশাদার হোম অ্যাপ্লায়েন্স ইনস্টলেশন সেবা।"}</script>
@endpush

@section('content')

<section class="page-header" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));padding:120px 0 50px;text-align:center;">
  <div class="container">
    <h1 style="color:#fff;font-size:2rem;font-weight:700;" data-aos="fade-up">হোম অ্যাপ্লায়েন্স ইনস্টলেশন সেবা</h1>
    <nav aria-label="breadcrumb" data-aos="fade-up" style="margin-top:15px;">
      <ol class="breadcrumb justify-content-center" style="background:none;padding:0;margin:0;">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color:rgba(255,255,255,0.7);">হোম</a></li>
        <li class="breadcrumb-item"><a href="{{ route('services') }}" style="color:rgba(255,255,255,0.7);">সেবাসমূহ</a></li>
        <li class="breadcrumb-item active" style="color:var(--accent);">হোম অ্যাপ্লায়েন্স ইনস্টলেশন</li>
      </ol>
    </nav>
  </div>
</section>

<section class="section py-5">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-lg-6" data-aos="fade-right">
        <img src="{{ asset('front/images/services/installation.jpg') }}" alt="হোম অ্যাপ্লায়েন্স ইনস্টলেশন" class="img-fluid rounded" style="border-radius:var(--radius);">
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <span class="badge bg-primary mb-3 px-3 py-2"><i class="fas fa-plug me-1"></i> হোম অ্যাপ্লায়েন্স</span>
        <h2>পেশাদার হোম অ্যাপ্লায়েন্স ইনস্টলেশন</h2>
        <p>নতুন হোম অ্যাপ্লায়েন্স কেনার পর সঠিক ইনস্টলেশন অত্যন্ত গুরুত্বপূর্ণ। ভুল ইনস্টলেশনের কারণে যন্ত্রের কার্যক্ষমতা কমে যায় এবং নিরাপত্তার ঝুঁকি তৈরি হয়। Xpert Service BD পেশাদার হোম অ্যাপ্লায়েন্স ইনস্টলেশন সেবা প্রদান করে।</p>
        <p>আমরা ওভেন, হুড, ওয়াটার পিউরিফায়ার, এক্সজস্ট ফ্যান, সিলিং ফ্যান, লাইট - সকল ধরনের হোম অ্যাপ্লায়েন্স ইনস্টল করি। আমাদের টেকনিশিয়ানরা নিরাপদ ও মানসম্মত পদ্ধতিতে ইনস্টলেশন সম্পন্ন করেন।</p>
      </div>
    </div>
  </div>
</section>

<section class="section py-5" style="background:#f8f9fa;">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>পেশাদার ইনস্টলেশনের উপকারিতা</h2>
    </div>
    <div class="row g-4">
      @php $benefits = [['নিরাপত্তা','fas fa-shield-alt','নিরাপদ ইলেকট্রিক্যাল সংযোগ নিশ্চিত।'],['সঠিক কার্যক্ষমতা','fas fa-check-circle','যন্ত্রের পূর্ণ কার্যক্ষমতা নিশ্চিত।'],['ওয়ারেন্টি','fas fa-file-contract','পেশাদার ইনস্টলেশনে ওয়ারেন্টি বৈধ থাকে।'],['দীর্ঘ আয়ুষ্কাল','fas fa-clock','সঠিক ইনস্টলেশনে যন্ত্রের আয়ু বাড়ে।'],['বিদ্যুৎ সাশ্রয়','fas fa-bolt','সঠিক সংযোগে বিদ্যুৎ খরচ কমে।'],['পরবর্তী সাপোর্ট','fas fa-headset','ইনস্টলেশন পরবর্তী সাপোর্ট।']]; @endphp
      @foreach($benefits as $b)
      <div class="col-md-6 col-lg-4" data-aos="fade-up">
        <div class="d-flex gap-3 p-3 rounded" style="background:var(--white);border:1px solid var(--border);height:100%;">
          <div><i class="{{ $b[1] }}" style="font-size:2rem;color:var(--accent);"></i></div>
          <div><h5 style="font-weight:700;color:var(--primary);">{{ $b[0] }}</h5><p class="mb-0 small">{{ $b[2] }}</p></div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section class="section py-5">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>আমাদের ইনস্টলেশন প্রক্রিয়া</h2>
    </div>
    <div class="row g-4">
      @php $steps = [['সাইট সার্ভে','fas fa-search-location','ইনস্টলেশনের স্থান ও প্রয়োজনীয়তা মূল্যায়ন।'],['ইনস্টলেশন','fas fa-tools','যন্ত্র সঠিকভাবে ইনস্টল ও সংযোগ করা।'],['টেস্টিং','fas fa-play-circle','ইনস্টলেশন পর যন্ত্রের কার্যক্ষমতা যাচাই।']]; @endphp
      @foreach($steps as $i=>$s)
      <div class="col-md-4" data-aos="fade-up">
        <div class="text-center p-4" style="background:var(--white);border-radius:var(--radius);box-shadow:var(--shadow);height:100%;">
          <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-3" style="width:50px;height:50px;background:var(--primary);color:#fff;font-weight:700;">{{ $i+1 }}</div>
          <div class="mb-2"><i class="{{ $s[1] }}" style="font-size:2rem;color:var(--accent);"></i></div>
          <h5 style="font-weight:700;">{{ $s[0] }}</h5>
          <p class="small mb-0">{{ $s[2] }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section class="section py-5" style="background:#f8f9fa;">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-lg-6" data-aos="fade-right">
        <h2>আমরা যে ধরনের অ্যাপ্লায়েন্স ইনস্টল করি</h2>
        <div class="row g-3">
          <div class="col-md-6">
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> ওভেন ইনস্টলেশন</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> হুড ইনস্টলেশন</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> ওয়াটার পিউরিফায়ার</li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> এক্সজস্ট ফ্যান</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> সিলিং ফ্যান</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> লাইট ইনস্টলেশন</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <div class="p-4 rounded" style="background:var(--primary);color:#fff;">
          <h5 style="font-weight:700;color:var(--accent);">কেন আমাদের বেছে নেবেন?</h5>
          <ul class="list-unstyled mt-3">
            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> সকল ধরনের হোম অ্যাপ্লায়েন্স</li>
            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> নিরাপদ ইনস্টলেশন</li>
            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> দ্রুত সেবা</li>
            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> পরবর্তী সাপোর্ট</li>
            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> স্বচ্ছ মূল্য</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section py-5" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));text-align:center;">
  <div class="container">
    <h2 style="color:#fff;font-weight:700;">এখনই ইনস্টলেশন বুক করুন!</h2>
    <p style="color:rgba(255,255,255,0.8);">হোম অ্যাপ্লায়েন্স ইনস্টলেশনের জন্য আজই কল করুন।</p>
    <div class="d-flex justify-content-center gap-3 flex-wrap">
      <a href="tel:+8801723456789" class="btn btn-light btn-lg px-4"><i class="fas fa-phone-alt me-2"></i> কল করুন</a>
      <a href="https://wa.me/8801723456789?text=Hi!%20I%20need%20appliance%20installation." target="_blank" rel="noopener" class="btn btn-success btn-lg px-4"><i class="fab fa-whatsapp me-2"></i> WhatsApp</a>
    </div>
  </div>
</section>

<section class="section py-5">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>অন্যান্য সেবা</h2>
    </div>
    <div class="row g-4">
      @php $others = [['ac-repair','এসি রিপেয়ার','fas fa-snowflake','images/services/ac-repair.jpg'],['ac-installation','এসি ইনস্টলেশন','fas fa-tools','images/services/ac-installation.jpg'],['geyser','গিজার','fas fa-water','images/services/geyser.jpg'],['dishwasher','ডিশওয়াশার','fas fa-utensils','images/services/dishwasher.jpg']]; @endphp
      @foreach($others as $o)
      <div class="col-md-6 col-lg-3" data-aos="fade-up">
        <div class="service-card">
          <div class="service-img"><img src="{{ asset('front/' . $o[3]) }}" alt="{{ $o[1] }}"></div>
          <div class="service-info text-center">
            <div class="service-icon"><i class="{{ $o[2] }}"></i></div>
            <h5>{{ $o[1] }}</h5>
            <a href="{{ route('service.detail', $o[0]) }}" class="blog-read-more">বিস্তারিত <i class="fas fa-arrow-right ms-1"></i></a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@endsection
