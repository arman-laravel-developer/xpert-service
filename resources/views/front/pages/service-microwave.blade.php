@extends('front.master')

@section('title', 'মাইক্রোওয়েভ রিপেয়ার | Microwave Oven Repair | Xpert Service BD')
@section('meta_description', 'মিরপুরে পেশাদার মাইক্রোওয়েভ ওভেন রিপেয়ার সেবা - হিটিং, টার্নটেবল, ডোর স্যুইচ, প্যানেল বোর্ড, ম্যাগনেট্রন সমস্যার সমাধান।')

@push('head')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Service","name":"Microwave Oven Repair","provider":{"@type":"LocalBusiness","name":"Xpert Service BD","telephone":"+8801723456789"},"areaServed":"Mirpur, Dhaka","description":"পেশাদার মাইক্রোওয়েভ ওভেন রিপেয়ার সেবা।"}</script>
@endpush

@section('content')

<section class="page-header" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));padding:120px 0 50px;text-align:center;">
  <div class="container">
    <h1 style="color:#fff;font-size:2rem;font-weight:700;" data-aos="fade-up">মাইক্রোওয়েভ ওভেন রিপেয়ার সেবা</h1>
    <nav aria-label="breadcrumb" data-aos="fade-up" style="margin-top:15px;">
      <ol class="breadcrumb justify-content-center" style="background:none;padding:0;margin:0;">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color:rgba(255,255,255,0.7);">হোম</a></li>
        <li class="breadcrumb-item"><a href="{{ route('services') }}" style="color:rgba(255,255,255,0.7);">সেবাসমূহ</a></li>
        <li class="breadcrumb-item active" style="color:var(--accent);">মাইক্রোওয়েভ রিপেয়ার</li>
      </ol>
    </nav>
  </div>
</section>

<section class="section py-5">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-lg-6" data-aos="fade-right">
        <img src="{{ asset('front/images/services/microwave.jpg') }}" alt="মাইক্রোওয়েভ রিপেয়ার" class="img-fluid rounded" style="border-radius:var(--radius);">
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <span class="badge bg-primary mb-3 px-3 py-2"><i class="fas fa-microchip me-1"></i> মাইক্রোওয়েভ রিপেয়ার</span>
        <h2>পেশাদার মাইক্রোওয়েভ রিপেয়ার সেবা</h2>
        <p>আপনার মাইক্রোওয়েভ ওভেন ঠিকমতো কাজ করছে না? হিট করছে না, টার্নটেবল ঘুরছে না, ডোর ঠিকমতো খুলছে না? Xpert Service BD মাইক্রোওয়েভ ওভেনের সব সমস্যার সমাধান করে।</p>
        <p>আমরা সকল ব্র্যান্ডের মাইক্রোওয়েভ ওভেন রিপেয়ার করি। ম্যাগনেট্রন, হাই ভোল্টেজ ডায়োড, ক্যাপাসিটর, প্যানেল বোর্ড সহ সব ধরনের যন্ত্রাংশ মেরামত ও পরিবর্তনে আমরা দক্ষ।</p>
      </div>
    </div>
  </div>
</section>

<section class="section py-5" style="background:#f8f9fa;">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>আমাদের মাইক্রোওয়েভ সেবার উপকারিতা</h2>
    </div>
    <div class="row g-4">
      @php $benefits = [['দ্রুত রিপেয়ার','fas fa-clock','কল করার পর দ্রুত সার্ভিস।'],['অভিজ্ঞ টেকনিশিয়ান','fas fa-user-tie','দক্ষ টেকনিশিয়ান।'],['গ্যারান্টি','fas fa-shield-alt','মেরামতকৃত অংশে ওয়ারেন্টি।'],['মূল অংশ','fas fa-cog','অরিজিনাল যন্ত্রাংশ।'],['বাসায় সেবা','fas fa-home','বাসায় এসে সার্ভিস।'],['স্বচ্ছ মূল্য','fas fa-hand-holding-usd','কোনো লুকানো চার্জ নেই।']]; @endphp
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
      @php $steps = [['যোগাযোগ','fas fa-phone-alt','কল বা WhatsApp-এ জানান।'],['চেকআপ','fas fa-search','মাইক্রোওয়েভ পরীক্ষা।'],['মূল্য নির্ধারণ','fas fa-calculator','আগে মূল্য জানানো হয়।'],['রিপেয়ার','fas fa-tools','দ্রুত মেরামত সম্পন্ন।']]; @endphp
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
        <h2>কেন আমাদের বেছে নেবেন?</h2>
        <ul class="list-unstyled">
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> সকল ধরনের মাইক্রোওয়েভ রিপেয়ার</li>
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> ম্যাগনেট্রন রিপেয়ার</li>
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> বাসায় সেবা</li>
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> মূল অংশ ব্যবহার</li>
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> স্বচ্ছ মূল্য</li>
        </ul>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <img src="{{ asset('front/images/services/microwave.jpg') }}" alt="কেন আমাদের বাছাই করবেন" class="img-fluid rounded">
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
          <ul class="list-unstyled mt-3">
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> হিটিং সমস্যা</li>
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> টার্নটেবল সমস্যা</li>
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> ডোর স্যুইচ সমস্যা</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="p-4 rounded" style="background:#f8f9fa;height:100%;">
          <ul class="list-unstyled mt-3">
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> প্যানেল বোর্ড সমস্যা</li>
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> ম্যাগনেট্রন সমস্যা</li>
            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> অতিরিক্ত শব্দ</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section py-5" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));text-align:center;">
  <div class="container">
    <h2 style="color:#fff;font-weight:700;">এখনই কল করুন!</h2>
    <p style="color:rgba(255,255,255,0.8);">মাইক্রোওয়েভের সমস্যা সমাধানে আজই যোগাযোগ করুন।</p>
    <div class="d-flex justify-content-center gap-3 flex-wrap">
      <a href="tel:+8801723456789" class="btn btn-light btn-lg px-4"><i class="fas fa-phone-alt me-2"></i> কল করুন</a>
      <a href="https://wa.me/8801723456789?text=Hi!%20I%20need%20microwave%20repair." target="_blank" rel="noopener" class="btn btn-success btn-lg px-4"><i class="fab fa-whatsapp me-2"></i> WhatsApp</a>
    </div>
  </div>
</section>

<section class="section py-5">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>অন্যান্য সেবা</h2>
    </div>
    <div class="row g-4">
      @php $others = [['ac-repair','এসি রিপেয়ার','fas fa-snowflake','images/services/ac-repair.jpg'],['refrigerator','ফ্রিজ রিপেয়ার','fas fa-icicles','images/services/refrigerator.jpg'],['dishwasher','ডিশওয়াশার','fas fa-utensils','images/services/dishwasher.jpg'],['washing-machine','ওয়াশিং মেশিন','fas fa-soap','images/services/washing-machine.jpg']]; @endphp
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
