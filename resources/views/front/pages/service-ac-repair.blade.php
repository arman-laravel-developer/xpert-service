@extends('front.master')

@section('title', 'এসি রিপেয়ার | AC Repair Service | Xpert Service BD')
@section('meta_description', 'মিরপুরে পেশাদার এসি রিপেয়ার সেবা – ওয়াল এসি, স্প্লিট এসি, সেন্ট্রাল এসি, উইন্ডো এসি রিপেয়ার।')

@push('head')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","name":"AC Repair Service","provider":{"@type":"LocalBusiness","name":"Xpert Service BD","telephone":"+8801723456789"},"areaServed":"Mirpur, Dhaka","description":"পেশাদার এসি রিপেয়ার সেবা – ওয়াল এসি, স্প্লিট এসি, সেন্ট্রাল এসি, উইন্ডো এসি রিপেয়ার।"}</script>
@endpush

@section('content')

<section class="page-header" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));padding:120px 0 50px;text-align:center;">
  <div class="container">
    <h1 style="color:#fff;font-size:2rem;font-weight:700;" data-aos="fade-up">এসি রিপেয়ার সার্ভিস</h1>
    <nav aria-label="breadcrumb" data-aos="fade-up" style="margin-top:15px;">
      <ol class="breadcrumb justify-content-center" style="background:none;padding:0;margin:0;">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color:rgba(255,255,255,0.7);">হোম</a></li>
        <li class="breadcrumb-item"><a href="{{ route('services') }}" style="color:rgba(255,255,255,0.7);">সেবাসমূহ</a></li>
        <li class="breadcrumb-item active" style="color:var(--accent);">এসি রিপেয়ার</li>
      </ol>
    </nav>
  </div>
</section>

<section class="section py-5">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-lg-6" data-aos="fade-right">
        <img src="{{ asset('front/images/services/ac-repair.jpg') }}" alt="এসি রিপেয়ার" class="img-fluid rounded" style="border-radius:var(--radius);">
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <span class="badge bg-primary mb-3 px-3 py-2"><i class="fas fa-snowflake me-1"></i> এসি রিপেয়ার</span>
        <h2>পেশাদার এসি রিপেয়ার সেবা</h2>
        <p>আপনার এসি ঠিকমতো কাজ করছে না? ঠান্ডা বাতাস আসছে না, শব্দ করছে, না গলাচ্ছে? Xpert Service BD আপনার সকল ধরনের এসি সমস্যার দ্রুত ও নির্ভরযোগ্য সমাধান নিশ্চিত করে। আমাদের অভিজ্ঞ প্রশিক্ষিত প্রযুক্তিবিদরা সকল ধরনের এসি – ওয়াল এসি, স্প্লিট এসি, সেন্ট্রাল এসি এবং উইন্ডো এসি – রিপেয়ার করে থাকেন।</p>
        <p>আমরা বুঝি যে গরমের সময়ে এসি না চলা কতটা সমস্যাজনক। তাই আমরা সরাসরি আপনার বাসায় এসে সমস্যা শনাক্ত করি এবং দ্রুত সমাধান করি। আমাদের সেবায় আমরা মূল্যবান অংশের গ্যারান্টি এবং স্বচ্ছ মূল্য নির্ধারণ প্রতিশ্রুতি দিই।</p>
      </div>
    </div>
  </div>
</section>

<section class="section py-5" style="background:#f8f9fa;">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>আমাদের এসি রিপেয়ার সেবার উপকারিতা</h2>
    </div>
    <div class="row g-4">
      @php $benefits = [['দ্রুত সেবা','fas fa-clock','কল করার পর দ্রুত আপনার বাসায় এসে সমস্যা শনাক্ত ও সমাধান করি।'],['অভিজ্ঞ টেকনিশিয়ান','fas fa-user-tie','আমাদের সকল টেকনিশিয়ান প্রশিক্ষিত এবং বহু বছরের অভিজ্ঞতাসম্পন্ন।'],['গ্যারান্টি','fas fa-shield-alt','রিপেয়ারের পর মূল্যবান অংশে গ্যারান্টি প্রদান করি।'],['স্বচ্ছ মূল্য','fas fa-hand-holding-usd','কোনো লুকানো খরচ নেই। রিপেয়ারের আগে মূল্য নির্ধারণ।'],['মূল অংশ ব্যবহার','fas fa-cog','শুধুমাত্র অরিজিনাল ও মানসম্মত অংশ ব্যবহার করি।'],['২৪/৭ সাপোর্ট','fas fa-headset','যেকোনো সময় ফোন বা WhatsApp-এ যোগাযোগ করুন।']]; @endphp
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
      <h2>আমাদের রিপেয়ার প্রক্রিয়া</h2>
    </div>
    <div class="row g-4">
      @php $steps = [['যোগাযোগ','fas fa-phone-alt','ফোন বা WhatsApp-এ আমাদের সাথে যোগাযোগ করুন।'],['চেকআপ','fas fa-search','টেকনিশিয়ান আপনার বাসায় এসে এসি চেক করবেন।'],['সমস্যা শনাক্ত','fas fa-stethoscope','সমস্যা চিহ্নিত করে আপনাকে জানানো হবে।'],['রিপেয়ার','fas fa-tools','আপনার সম্মতিতে দ্রুত রিপেয়ার সম্পন্ন করা হবে।']]; @endphp
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
        <h2>কেন আমাদের বাছাই করবেন?</h2>
        <p>Xpert Service BD মিরপুরের অন্যতম বিশ্বস্ত এসি রিপেয়ার সেবা প্রদানকারী। আমরা প্রতিটি কাজকে গুরুত্ব দিই এবং নিশ্চিত করি যে আপনার এসি আবারও পূর্ণক্ষমতায় কাজ করে।</p>
        <ul class="list-unstyled">
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> সকল ধরনের এসি রিপেয়ারে দক্ষ</li>
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> মূল্যবান অংশে গ্যারান্টি</li>
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> দ্রুত সেবা প্রদান</li>
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> স্বচ্ছ ও ন্যায্য মূল্য</li>
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> অভিজ্ঞ ও প্রশিক্ষিত টেকনিশিয়ান</li>
        </ul>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <img src="{{ asset('front/images/services/ac-repair.jpg') }}" alt="কেন আমাদের বাছাই করবেন" class="img-fluid rounded">
      </div>
    </div>
  </div>
</section>

<section class="section py-5">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>আমরা যেসব সমস্যা সমাধান করি</h2>
    </div>
    <div class="row g-4" data-aos="fade-up">
      <div class="col-md-6">
        <div class="p-4 rounded" style="background:#f8f9fa;height:100%;">
          <h5 style="font-weight:700;color:var(--primary);"><i class="fas fa-snowflake me-2"></i> এসির ধরন অনুযায়ী</h5>
          <ul class="list-unstyled mt-3">
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> ওয়াল এসি রিপেয়ার</li>
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> স্প্লিট এসি রিপেয়ার</li>
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> সেন্ট্রাল এসি রিপেয়ার</li>
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> উইন্ডো এসি রিপেয়ার</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="p-4 rounded" style="background:#f8f9fa;height:100%;">
          <h5 style="font-weight:700;color:var(--primary);"><i class="fas fa-tools me-2"></i> সমস্যার ধরন অনুযায়ী</h5>
          <ul class="list-unstyled mt-3">
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> কম্প্রেসর সমস্যা</li>
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> ফ্যান মোটর সমস্যা</li>
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> থার্মোস্ট্যাট সমস্যা</li>
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> ইলেকট্রিক্যাল সমস্যা</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section py-5" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));text-align:center;">
  <div class="container">
    <h2 style="color:#fff;font-weight:700;">এখনই কল করুন!</h2>
    <p style="color:rgba(255,255,255,0.8);">আপনার এসি সমস্যার জন্য আমাদের সাথে যোগাযোগ করুন। আমরা দ্রুত সমাধান নিশ্চিত করব।</p>
    <div class="d-flex justify-content-center gap-3 flex-wrap">
      <a href="tel:+8801723456789" class="btn btn-light btn-lg px-4"><i class="fas fa-phone-alt me-2"></i> কল করুন</a>
      <a href="https://wa.me/8801723456789?text=Hi!%20I%20need%20AC%20repair%20service." target="_blank" rel="noopener" class="btn btn-success btn-lg px-4"><i class="fab fa-whatsapp me-2"></i> WhatsApp</a>
    </div>
  </div>
</section>

<section class="section py-5">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>অন্যান্য সেবা</h2>
    </div>
    <div class="row g-4">
      @php $others = [['ac-servicing','এসি সার্ভিসিং','fas fa-wind','images/services/ac-servicing.jpg'],['ac-gas-refill','এসি গ্যাস রিফিল','fas fa-temperature-low','images/services/ac-gas-refill.jpg'],['ac-installation','এসি ইনস্টলেশন','fas fa-tools','images/services/ac-installation.jpg'],['washing-machine','ওয়াশিং মেশিন','fas fa-soap','images/services/washing-machine.jpg']]; @endphp
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
