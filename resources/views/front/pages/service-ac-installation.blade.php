@extends('front.master')

@section('title', 'এসি ইনস্টলেশন | AC Installation | Xpert Service BD')
@section('meta_description', 'মিরপুরে পেশাদার এসি ইনস্টলেশন সেবা – নতুন এসি ইনস্টলেশন, মাউন্টিং, পাইপ লাইন, ইলেকট্রিক্যাল সংযোগ, ভ্যাকুয়াম।')

@push('head')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","name":"AC Installation","provider":{"@type":"LocalBusiness","name":"Xpert Service BD","telephone":"+8801723456789"},"areaServed":"Mirpur, Dhaka","description":"পেশাদার এসি ইনস্টলেশন সেবা – নতুন এসি ইনস্টলেশন, মাউন্টিং, পাইপ লাইন।"}</script>
@endpush

@section('content')

<section class="page-header" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));padding:120px 0 50px;text-align:center;">
  <div class="container">
    <h1 style="color:#fff;font-size:2rem;font-weight:700;" data-aos="fade-up">এসি ইনস্টলেশন সেবা</h1>
    <nav aria-label="breadcrumb" data-aos="fade-up" style="margin-top:15px;">
      <ol class="breadcrumb justify-content-center" style="background:none;padding:0;margin:0;">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color:rgba(255,255,255,0.7);">হোম</a></li>
        <li class="breadcrumb-item"><a href="{{ route('services') }}" style="color:rgba(255,255,255,0.7);">সেবাসমূহ</a></li>
        <li class="breadcrumb-item active" style="color:var(--accent);">এসি ইনস্টলেশন</li>
      </ol>
    </nav>
  </div>
</section>

<section class="section py-5">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-lg-6" data-aos="fade-right">
        <img src="{{ asset('front/images/services/ac-installation.jpg') }}" alt="এসি ইনস্টলেশন" class="img-fluid rounded" style="border-radius:var(--radius);">
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <span class="badge bg-primary mb-3 px-3 py-2"><i class="fas fa-tools me-1"></i> এসি ইনস্টলেশন</span>
        <h2>পেশাদার এসি ইনস্টলেশন সেবা</h2>
        <p>নতুন এসি কেনার পর সঠিক ইনস্টলেশন অত্যন্ত গুরুত্বপূর্ণ। ভুল ইনস্টলেশনের কারণে এসির কার্যক্ষমতা কমে যায়, বিদ্যুৎ খরচ বাড়ে এবং এসি দ্রুত নষ্ট হতে পারে। Xpert Service BD পেশাদার এসি ইনস্টলেশন সেবা প্রদান করে, যা আপনার এসির সর্বোচ্চ পারফরম্যান্স নিশ্চিত করে।</p>
        <p>আমাদের দক্ষ টেকনিশিয়ানরা সকল ধরনের এসি – ওয়াল এসি, স্প্লিট এসি, সেন্ট্রাল এসি এবং উইন্ডো এসি – সঠিকভাবে ইনস্টল করেন। আমরা ইনস্টলেশনের সময় মানসম্মত উপকরণ ব্যবহার করি এবং ইনস্টলেশন পরবর্তী সাপোর্ট প্রদান করি।</p>
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
      @php $benefits = [['সঠিক কার্যক্ষমতা','fas fa-check-circle','সঠিক ইনস্টলেশন এসির পূর্ণ কার্যক্ষমতা নিশ্চিত করে।'],['বিদ্যুৎ সাশ্রয়','fas fa-bolt','সঠিক ইনস্টলেশনে বিদ্যুৎ খরচ ১০-১৫% কমে।'],['নিরাপত্তা','fas fa-shield-alt','ইলেকট্রিক্যাল সংযোগ নিরাপদ ও মানসম্মত হয়।'],['দীর্ঘ আয়ুষ্কাল','fas fa-clock','সঠিক ইনস্টলেশন এসির আয়ু বাড়ায়।'],['ওয়ারেন্টি সংরক্ষণ','fas fa-file-contract','পেশাদার ইনস্টলেশন ওয়ারেন্টি বৈধ রাখে।'],['পরবর্তী সাপোর্ট','fas fa-headset','ইনস্টলেশন পরবর্তী ফ্রি সাপোর্ট ও পরামর্শ।']]; @endphp
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
      @php $steps = [['সাইট সার্ভে','fas fa-search-location','ঘরের সাইজ ও প্রয়োজন অনুযায়ী সঠিক জায়গা নির্ধারণ।'],['মাউন্টিং','fas fa-tools','ইনডোর ও আউটডোর ইউনিট সঠিকভাবে মাউন্ট করা।'],['পাইপ ও ওয়ায়ারিং','fas fa-plug','পাইপ লাইন ও ইলেকট্রিক্যাল সংযোগ সম্পন্ন করা।'],['ভ্যাকুয়াম ও টেস্ট','fas fa-vial','ভ্যাকুয়াম করে গ্যাস চার্জ ও টেস্ট রান নিশ্চিত করা।']]; @endphp
      @foreach($steps as $i=>$s)
      <div class="col-md-3" data-aos="fade-up">
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
        <h2>কেন আমাদের ইনস্টলেশন সেবা বেছে নেবেন?</h2>
        <ul class="list-unstyled">
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> সকল ব্র্যান্ডের ইনস্টলেশন</li>
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> মানসম্মত উপকরণ ব্যবহার</li>
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> দ্রুত ও নিরাপদ ইনস্টলেশন</li>
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> পরবর্তী সাপোর্ট</li>
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> স্বচ্ছ মূল্য নির্ধারণ</li>
        </ul>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <img src="{{ asset('front/images/services/ac-installation.jpg') }}" alt="কেন আমাদের বাছাই করবেন" class="img-fluid rounded">
      </div>
    </div>
  </div>
</section>

<section class="section py-5">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>আমরা যে ধরনের এসি ইনস্টল করি</h2>
    </div>
    <div class="row g-4" data-aos="fade-up">
      <div class="col-md-6">
        <div class="p-4 rounded" style="background:#f8f9fa;height:100%;">
          <ul class="list-unstyled mt-3">
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> ওয়াল এসি ইনস্টলেশন</li>
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> স্প্লিট এসি ইনস্টলেশন</li>
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> সেন্ট্রাল এসি ইনস্টলেশন</li>
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> উইন্ডো এসি ইনস্টলেশন</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="p-4 rounded" style="background:#f8f9fa;height:100%;">
          <ul class="list-unstyled mt-3">
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> এসি শিফটিং</li>
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> এসি রি-ইনস্টলেশন</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section py-5" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));text-align:center;">
  <div class="container">
    <h2 style="color:#fff;font-weight:700;">এখনই ইনস্টলেশন বুক করুন!</h2>
    <p style="color:rgba(255,255,255,0.8);">পেশাদার এসি ইনস্টলেশনের জন্য আজই কল করুন।</p>
    <div class="d-flex justify-content-center gap-3 flex-wrap">
      <a href="tel:+8801723456789" class="btn btn-light btn-lg px-4"><i class="fas fa-phone-alt me-2"></i> কল করুন</a>
      <a href="https://wa.me/8801723456789?text=Hi!%20I%20need%20AC%20installation." target="_blank" rel="noopener" class="btn btn-success btn-lg px-4"><i class="fab fa-whatsapp me-2"></i> WhatsApp</a>
    </div>
  </div>
</section>

<section class="section py-5">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>অন্যান্য সেবা</h2>
    </div>
    <div class="row g-4">
      @php $others = [['ac-repair','এসি রিপেয়ার','fas fa-snowflake','images/services/ac-repair.jpg'],['ac-servicing','এসি সার্ভিসিং','fas fa-wind','images/services/ac-servicing.jpg'],['ac-gas-refill','এসি গ্যাস রিফিল','fas fa-temperature-low','images/services/ac-gas-refill.jpg'],['home-appliance','হোম অ্যাপ্লায়েন্স','fas fa-plug','images/services/installation.jpg']]; @endphp
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
