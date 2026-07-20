@extends('front.master')

@section('title', 'সার্ভিস এলাকা | Xpert Service BD - মিরপুর ও আশেপাশে')
@section('meta_description', 'Xpert Service BD সার্ভিস এলাকা – মিরপুর-১, ২, ৬, ৭, ১০, ১১, ১২, ১৩, ১৪, ১৫, ৬০, ৬২, পল্লবী, রূপনগর, কাজীপাড়া, শেওড়াপাড়া, মনিপুর, দুয়ারীপাড়া, বাউনিয়াবাদ, কাফরুল।')
@section('meta_keywords', 'AC Service Mirpur, Service Area Mirpur, Home Appliance Repair Mirpur')

@section('content')

<section class="page-header" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));padding:120px 0 50px;text-align:center;">
  <div class="container">
    <h1 style="color:#fff;font-size:2rem;font-weight:700;" data-aos="fade-up">আমাদের সার্ভিস এলাকা</h1>
    <nav aria-label="breadcrumb" data-aos="fade-up" style="margin-top:15px;">
      <ol class="breadcrumb justify-content-center" style="background:none;padding:0;margin:0;">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color:rgba(255,255,255,0.7);">হোম</a></li>
        <li class="breadcrumb-item active" style="color:var(--accent);">সার্ভিস এলাকা</li>
      </ol>
    </nav>
  </div>
</section>

<section class="section areas-section">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>মিরপুরের সর্বত্র আমরা পৌঁছে যাই</h2>
      <p>আপনার দরজায় আমাদের সেবা – মিরপুর ও আশেপাশের সব এলাকায়</p>
    </div>
    <div class="row g-3" data-aos="fade-up">
      @foreach($areas as $area)
      <div class="col-6 col-md-4 col-lg-2"><div class="area-item"><i class="fas fa-map-marker-alt"></i> {{ $area->name }}</div></div>
      @endforeach
    </div>
  </div>
</section>

<section class="section" style="background:var(--light-bg);">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>কিভাবে সেবা পাবেন?</h2>
      <p>মাত্র ৩টি সহজ ধাপে আমাদের সেবা পান</p>
    </div>
    <div class="row g-4">
      <div class="col-md-4" data-aos="fade-up">
        <div class="process-card">
          <div class="process-step">1</div>
          <div class="process-icon"><i class="fas fa-phone-alt"></i></div>
          <h3>কল / WhatsApp করুন</h3>
          <p>আপনার এলাকা ও সমস্যা জানিয়ে আমাদের কল বা WhatsApp এ মেসেজ দিন।</p>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up">
        <div class="process-card">
          <div class="process-step">2</div>
          <div class="process-icon"><i class="fas fa-calendar-check"></i></div>
          <h3>অ্যাপয়েন্টমেন্ট</h3>
          <p>আমরা আপনার সুবিধামতো সময় নির্ধারণ করি এবং টেকনিশিয়ান পাঠাই।</p>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up">
        <div class="process-card">
          <div class="process-step">3</div>
          <div class="process-icon"><i class="fas fa-smile"></i></div>
          <h3>সার্ভিস ও সন্তুষ্টি</h3>
          <p>পেশাদার সার্ভিস সম্পন্ন হলে টেস্টিং ও সন্তুষ্টি নিশ্চিত করুন।</p>
        </div>
      </div>
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
              <h2 class="emergency-title">আপনার এলাকায় সার্ভিস প্রয়োজন?</h2>
              <p class="emergency-text mb-0">এখনই কল করুন – মিরপুরের যেকোন প্রান্তে ৩০ মিনিটের মধ্যে পৌঁছে যাব।</p>
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

<section class="map-section" data-aos="fade-up">
  <div class="container-fluid p-0">
    <div class="map-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.831!2d90.365!3d23.806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDQ4JzIxLjYiTiA5MMKwMjEnNDUuMCJF!5e0!3m2!1sen!2sbd!4v1" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade" title="Xpert Service BD Service Area - Mirpur, Dhaka"></iframe>
    </div>
  </div>
</section>

@endsection
