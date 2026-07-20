@extends('front.master')

@section('title', 'এসি সার্ভিসিং | AC Servicing | Xpert Service BD')
@section('meta_description', 'মিরপুরে পেশাদার এসি সার্ভিসিং সেবা – ফিল্টার ক্লিনিং, কয়েল ক্লিনিং, গ্যাস চেক, ড্রেন ক্লিনিং, কেমিক্যাল ওয়াশ।')

@push('head')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","name":"AC Servicing","provider":{"@type":"LocalBusiness","name":"Xpert Service BD","telephone":"+8801723456789"},"areaServed":"Mirpur, Dhaka","description":"পেশাদার এসি সার্ভিসিং সেবা - ফিল্টার ক্লিনিং, কয়েল ক্লিনিং, গ্যাস চেক।"}</script>
@endpush

@section('content')

<section class="page-header" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));padding:120px 0 50px;text-align:center;">
  <div class="container">
    <h1 style="color:#fff;font-size:2rem;font-weight:700;" data-aos="fade-up">এসি সার্ভিসিং সেবা</h1>
    <nav aria-label="breadcrumb" data-aos="fade-up" style="margin-top:15px;">
      <ol class="breadcrumb justify-content-center" style="background:none;padding:0;margin:0;">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color:rgba(255,255,255,0.7);">হোম</a></li>
        <li class="breadcrumb-item"><a href="{{ route('services') }}" style="color:rgba(255,255,255,0.7);">সেবাসমূহ</a></li>
        <li class="breadcrumb-item active" style="color:var(--accent);">এসি সার্ভিসিং</li>
      </ol>
    </nav>
  </div>
</section>

<section class="section py-5">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-lg-6" data-aos="fade-right">
        <img src="{{ asset('front/images/services/ac-servicing.jpg') }}" alt="এসি সার্ভিসিং" class="img-fluid rounded" style="border-radius:var(--radius);">
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <span class="badge bg-primary mb-3 px-3 py-2"><i class="fas fa-wind me-1"></i> এসি সার্ভিসিং</span>
        <h2>পেশাদার এসি সার্ভিসিং সেবা</h2>
        <p>নিয়মিত এসি সার্ভিসিং আপনার এসির কার্যক্ষমতা বজায় রাখতে এবং বিদ্যুৎ খরচ কমাতে সাহায্য করে। Xpert Service BD আপনার এসির সম্পূর্ণ সার্ভিসিং করে থাকে – ফিল্টার ক্লিনিং, কয়েল ক্লিনিং, গ্যাস চেক, ড্রেন ক্লিনিং এবং কেমিক্যাল ওয়াশ অন্তর্ভুক্ত।</p>
        <p>প্রতি বছর কমপক্ষে দুইবার এসি সার্ভিসিং করানো উচিত। নিয়মিত সার্ভিসিং না করলে এসির কম্প্রেসরের ওপর অতিরিক্ত চাপ পড়ে, বিদ্যুৎ খরচ বাড়ে এবং এসির আয়ুষ্কাল কমে যায়। আমাদের সেবায় আমরা অরিজিনাল কেমিক্যাল এবং মানসম্মত পদ্ধতি ব্যবহার করি।</p>
      </div>
    </div>
  </div>
</section>

<section class="section py-5" style="background:#f8f9fa;">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>নিয়মিত সার্ভিসিংয়ের উপকারিতা</h2>
    </div>
    <div class="row g-4">
      @php $benefits = [['বিদ্যুৎ সাশ্রয়','fas fa-bolt','নিয়মিত সার্ভিসিং বিদ্যুৎ খরচ ১৫-২৫% কমায়।'],['ভালো ঠান্ডা','fas fa-snowflake','পরিষ্কার ফিল্টার ও কয়েল সর্বোচ্চ ঠান্ডা নিশ্চিত করে।'],['স্বাস্থ্যকর বাতাস','fas fa-lungs','পরিষ্কার ফিল্টার ব্যাকটেরিয়া ও অ্যালার্জি দূর করে।'],['দীর্ঘ আয়ুষ্কাল','fas fa-clock','নিয়মিত যত্নে এসির আয়ু ১০-১৫ বছর বাড়ে।'],['কম শব্দ','fas fa-volume-down','পরিষ্কার যন্ত্রাংশে কম্পন ও শব্দ কম হয়।'],['ব্রেকডাউন প্রতিরোধ','fas fa-shield-virus','ছোট সমস্যা বড় হওয়ার আগেই ধরা পড়ে।']]; @endphp
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
      <h2>আমাদের সার্ভিসিং প্রক্রিয়া</h2>
    </div>
    <div class="row g-4">
      @php $steps = [['চেকআপ','fas fa-search','এসির ফিল্টার, কয়েল, গ্যাস ও ড্রেন পরীক্ষা করা হয়।'],['ক্লিনিং','fas fa-broom','ফিল্টার, কয়েল ও ড্রেন ভালোভাবে পরিষ্কার করা হয়।'],['গ্যাস চেক','fas fa-tachometer-alt','গ্যাসের প্রেশার চেক করে প্রয়োজনীয় গ্যাস রিফিল করা হয়।'],['টেস্ট রান','fas fa-play-circle','সবকিছু পরীক্ষা করে নিশ্চিত করা হয় এসি ঠিকমতো কাজ করছে।']]; @endphp
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
        <h2>কেন আমাদের সার্ভিসিং সেবা বেছে নেবেন?</h2>
        <p>আমরা শুধুমাত্র অরিজিনাল ও মানসম্মত কেমিক্যাল ব্যবহার করি। আমাদের টেকনিশিয়ানরা প্রতিটি এসির ব্র্যান্ড ও মডেল অনুযায়ী সঠিক পদ্ধতিতে সার্ভিসিং করেন।</p>
        <ul class="list-unstyled">
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> অরিজিনাল কেমিক্যাল ব্যবহার</li>
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> সকল ব্র্যান্ডের এসি সার্ভিসিং</li>
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> দ্রুত সেবা প্রদান</li>
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> স্বচ্ছ মূল্য নির্ধারণ</li>
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> পরিষ্কার ও পরিচ্ছন্ন কাজ</li>
        </ul>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <img src="{{ asset('front/images/services/ac-servicing.jpg') }}" alt="কেন আমাদের বাছাই করবেন" class="img-fluid rounded">
      </div>
    </div>
  </div>
</section>

<section class="section py-5">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>আমাদের সার্ভিসিং সেবাসমূহ</h2>
    </div>
    <div class="row g-4" data-aos="fade-up">
      <div class="col-md-6">
        <div class="p-4 rounded" style="background:#f8f9fa;height:100%;">
          <ul class="list-unstyled mt-3">
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> ফিল্টার ক্লিনিং</li>
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> কয়েল ক্লিনিং</li>
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> ড্রেন ক্লিনিং</li>
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> কেমিক্যাল ওয়াশ</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="p-4 rounded" style="background:#f8f9fa;height:100%;">
          <ul class="list-unstyled mt-3">
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> গ্যাস চেক ও টপ-আপ</li>
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> ফ্যান ক্লিনিং</li>
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> ইলেকট্রিক্যাল চেক</li>
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> থার্মোস্ট্যাট চেক</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section py-5" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));text-align:center;">
  <div class="container">
    <h2 style="color:#fff;font-weight:700;">এখনই সার্ভিসিং বুক করুন!</h2>
    <p style="color:rgba(255,255,255,0.8);">নিয়মিত এসি সার্ভিসিংয়ে আপনার এসি নতুনের মতো কাজ করবে।</p>
    <div class="d-flex justify-content-center gap-3 flex-wrap">
      <a href="tel:+8801723456789" class="btn btn-light btn-lg px-4"><i class="fas fa-phone-alt me-2"></i> কল করুন</a>
      <a href="https://wa.me/8801723456789?text=Hi!%20I%20need%20AC%20servicing." target="_blank" rel="noopener" class="btn btn-success btn-lg px-4"><i class="fab fa-whatsapp me-2"></i> WhatsApp</a>
    </div>
  </div>
</section>

<section class="section py-5">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>অন্যান্য সেবা</h2>
    </div>
    <div class="row g-4">
      @php $others = [['ac-repair','এসি রিপেয়ার','fas fa-snowflake','images/services/ac-repair.jpg'],['ac-gas-refill','এসি গ্যাস রিফিল','fas fa-temperature-low','images/services/ac-gas-refill.jpg'],['ac-installation','এসি ইনস্টলেশন','fas fa-tools','images/services/ac-installation.jpg'],['refrigerator','ফ্রিজ রিপেয়ার','fas fa-icicles','images/services/refrigerator.jpg']]; @endphp
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
