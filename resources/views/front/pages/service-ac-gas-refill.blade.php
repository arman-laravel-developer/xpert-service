@extends('front.master')

@section('title', 'এসি গ্যাস রিফিল | AC Gas Refill | Xpert Service BD')
@section('meta_description', 'মিরপুরে পেশাদার এসি গ্যাস রিফিল সেবা - R32, R410A, R22 গ্যাস রিফিল। গ্যাস লিকেজ ডিটেকশন, প্রেশার চেক।')

@push('head')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","name":"AC Gas Refill","provider":{"@type":"LocalBusiness","name":"Xpert Service BD","telephone":"+8801723456789"},"areaServed":"Mirpur, Dhaka","description":"পেশাদার এসি গ্যাস রিফিল সেবা - R32, R410A, R22 গ্যাস রিফিল।"}</script>
@endpush

@section('content')

<section class="page-header" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));padding:120px 0 50px;text-align:center;">
  <div class="container">
    <h1 style="color:#fff;font-size:2rem;font-weight:700;" data-aos="fade-up">এসি গ্যাস রিফিল সেবা</h1>
    <nav aria-label="breadcrumb" data-aos="fade-up" style="margin-top:15px;">
      <ol class="breadcrumb justify-content-center" style="background:none;padding:0;margin:0;">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color:rgba(255,255,255,0.7);">হোম</a></li>
        <li class="breadcrumb-item"><a href="{{ route('services') }}" style="color:rgba(255,255,255,0.7);">সেবাসমূহ</a></li>
        <li class="breadcrumb-item active" style="color:var(--accent);">এসি গ্যাস রিফিল</li>
      </ol>
    </nav>
  </div>
</section>

<section class="section py-5">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-lg-6" data-aos="fade-right">
        <img src="{{ asset('front/images/services/ac-gas-refill.jpg') }}" alt="এসি গ্যাস রিফিল" class="img-fluid rounded" style="border-radius:var(--radius);">
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <span class="badge bg-primary mb-3 px-3 py-2"><i class="fas fa-temperature-low me-1"></i> এসি গ্যাস রিফিল</span>
        <h2>পেশাদার এসি গ্যাস রিফিল সেবা</h2>
        <p>আপনার এসি ঠান্ডা করছে না? সম্ভবত গ্যাস কমে গেছে। সময়মতো গ্যাস রিফিল না করালে কম্প্রেসরের ওপর চাপ পড়ে এবং বড় ধরনের ক্ষতি হতে পারে। Xpert Service BD পেশাদার এসি গ্যাস রিফিল সেবা প্রদান করে, যা আপনার এসিকে পুনরায় ঠান্ডা করতে সাহায্য করে।</p>
        <p>আমরা সকল ধরনের এসি গ্যাস - R32, R410A, R22 - রিফিল করি। আমাদের টেকনিশিয়ানরা প্রথমে গ্যাস লিকেজ চেক করেন, তারপর প্রয়োজনীয় প্রেশারে গ্যাস রিফিল করেন এবং শেষে টেস্ট রান নিশ্চিত করেন।</p>
      </div>
    </div>
  </div>
</section>

<section class="section py-5" style="background:#f8f9fa;">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>গ্যাস রিফিল সেবার উপকারিতা</h2>
    </div>
    <div class="row g-4">
      @php $benefits = [['ভালো ঠান্ডা','fas fa-snowflake','গ্যাস রিফিলে এসি আগের মতো ঠান্ডা হয়।'],['বিদ্যুৎ সাশ্রয়','fas fa-bolt','সঠিক গ্যাস প্রেশারে বিদ্যুৎ খরচ কমে।'],['কম্প্রেসর সুরক্ষা','fas fa-shield-alt','গ্যাসের অভাবে কম্প্রেসর নষ্ট হওয়া থেকে রক্ষা।'],['দ্রুত সেবা','fas fa-clock','কল করার ৩০ মিনিটের মধ্যে সার্ভিস।'],['লিকেজ ডিটেকশন','fas fa-search','গ্যাস লিকেজের উৎস শনাক্ত করে সমাধান।'],['ন্যায্য মূল্য','fas fa-hand-holding-usd','কোনো লুকানো চার্জ ছাড়া সাশ্রয়ী মূল্য।']]; @endphp
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
      <h2>আমাদের গ্যাস রিফিল প্রক্রিয়া</h2>
    </div>
    <div class="row g-4">
      @php $steps = [['চেকআপ','fas fa-search','এসির গ্যাস প্রেশার ও কুলিং কার্যক্ষমতা পরীক্ষা।'],['লিকেজ চেক','fas fa-tint','গ্যাস লিকেজের উৎস শনাক্ত করতে স্পেশাল ডিটেক্টর ব্যবহার।'],['রিফিল','fas fa-fill','প্রয়োজনীয় গ্যাস সঠিক প্রেশারে রিফিল করা।'],['টেস্ট','fas fa-play-circle','এসি চালিয়ে ঠান্ডা ও কার্যক্ষমতা যাচাই।']]; @endphp
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
        <h2>আমরা যে ধরনের গ্যাস রিফিল করি</h2>
        <ul class="list-unstyled">
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> সকল ধরনের গ্যাস রিফিল</li>
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> অরিজিনাল গ্যাস ব্যবহার</li>
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> লিকেজ ডিটেকশন সার্ভিস</li>
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> সঠিক প্রেশার চেক</li>
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> ন্যায্য মূল্য</li>
        </ul>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <div class="row g-3">
          <div class="col-md-6"><div class="p-3 text-center rounded" style="background:var(--white);border:2px solid var(--primary);"><h5 style="font-weight:700;color:var(--primary);">R32</h5><p class="small mb-0">আধুনিক ইনভার্টার এসি-তে ব্যবহৃত পরিবেশবান্ধব গ্যাস।</p></div></div>
          <div class="col-md-6"><div class="p-3 text-center rounded" style="background:var(--white);border:2px solid var(--accent);"><h5 style="font-weight:700;color:var(--accent);">R410A</h5><p class="small mb-0">উচ্চ কার্যক্ষমতাসম্পন্ন আধুনিক এসি-তে ব্যবহৃত গ্যাস।</p></div></div>
          <div class="col-md-6 mx-auto mt-3"><div class="p-3 text-center rounded" style="background:var(--white);border:2px solid var(--secondary);"><h5 style="font-weight:700;color:var(--secondary);">R22</h5><p class="small mb-0">পুরোনো মডেলের এসি-তে ব্যবহৃত ঐতিহ্যবাহী গ্যাস।</p></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section py-5" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));text-align:center;">
  <div class="container">
    <h2 style="color:#fff;font-weight:700;">এখনই গ্যাস রিফিল বুক করুন!</h2>
    <p style="color:rgba(255,255,255,0.8);">আপনার এসি ঠান্ডা না করলে আজই কল করুন।</p>
    <div class="d-flex justify-content-center gap-3 flex-wrap">
      <a href="tel:+8801723456789" class="btn btn-light btn-lg px-4"><i class="fas fa-phone-alt me-2"></i> কল করুন</a>
      <a href="https://wa.me/8801723456789?text=Hi!%20I%20need%20AC%20gas%20refill." target="_blank" rel="noopener" class="btn btn-success btn-lg px-4"><i class="fab fa-whatsapp me-2"></i> WhatsApp</a>
    </div>
  </div>
</section>

<section class="section py-5">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>অন্যান্য সেবা</h2>
    </div>
    <div class="row g-4">
      @php $others = [['ac-repair','এসি রিপেয়ার','fas fa-snowflake','images/services/ac-repair.jpg'],['ac-servicing','এসি সার্ভিসিং','fas fa-wind','images/services/ac-servicing.jpg'],['ac-installation','এসি ইনস্টলেশন','fas fa-tools','images/services/ac-installation.jpg'],['refrigerator','ফ্রিজ রিপেয়ার','fas fa-icicles','images/services/refrigerator.jpg']]; @endphp
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
