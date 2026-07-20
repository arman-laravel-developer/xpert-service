@extends('front.master')

@section('title', 'যোগাযোগ | Xpert Service BD - AC Service & Repair Mirpur')
@section('meta_description', 'Xpert Service BD-এর সাথে যোগাযোগ করুন। ফোন, WhatsApp, ইমেইলে সরাসরি যোগাযোগ করুন। মিরপুর, ঢাকা।')
@section('meta_keywords', 'Xpert Service BD Contact, AC Service Mirpur Contact, Home Appliance Repair Contact')

@section('content')

<section class="page-header" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));padding:120px 0 50px;text-align:center;">
  <div class="container">
    <h1 style="color:#fff;font-size:2rem;font-weight:700;" data-aos="fade-up">যোগাযোগ করুন</h1>
    <nav aria-label="breadcrumb" data-aos="fade-up" style="margin-top:15px;">
      <ol class="breadcrumb justify-content-center" style="background:none;padding:0;margin:0;">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color:rgba(255,255,255,0.7);">হোম</a></li>
        <li class="breadcrumb-item active" style="color:var(--accent);">যোগাযোগ</li>
      </ol>
    </nav>
  </div>
</section>

<section class="section contact-section">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>আমাদের সাথে যোগাযোগ করুন</h2>
      <p>আপনার সমস্যা জানান – আমরা সমাধান নিয়ে আসছি</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-5" data-aos="fade-right">
        <div class="contact-info-box">
          <h3>যোগাযোগের তথ্য</h3>
          <div class="contact-detail">
            <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
            <div><strong>ফোন</strong><p><a href="tel:+8801723456789">+880 1723-456789</a></p></div>
          </div>
          <div class="contact-detail">
            <div class="contact-icon"><i class="fab fa-whatsapp"></i></div>
            <div><strong>WhatsApp</strong><p><a href="https://wa.me/8801723456789" target="_blank" rel="noopener">+880 1723-456789</a></p></div>
          </div>
          <div class="contact-detail">
            <div class="contact-icon"><i class="fas fa-envelope"></i></div>
            <div><strong>ইমেইল</strong><p><a href="mailto:info@xpertservicebd.com">info@xpertservicebd.com</a></p></div>
          </div>
          <div class="contact-detail">
            <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div><strong>ঠিকানা</strong><p>মিরপুর-১, রোড-৫, ঢাকা</p></div>
          </div>
          <div class="contact-detail">
            <div class="contact-icon"><i class="fas fa-clock"></i></div>
            <div><strong>সার্ভিস সময়</strong><p>সকাল ৮:০০ থেকে রাত ১০:০০ (সপ্তাহে ৭ দিন)</p></div>
          </div>
          <div class="contact-social mt-4 d-flex gap-3">
            <a href="https://facebook.com/xpertservicebd" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://wa.me/8801723456789" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-7" data-aos="fade-left">
        <div class="contact-form-box">
          <h3>একটি বার্তা পাঠান</h3>
          <form id="contactForm" novalidate>
            <div class="row g-3">
              <div class="col-md-6"><input type="text" class="form-control" id="name" placeholder="আপনার নাম" required></div>
              <div class="col-md-6"><input type="tel" class="form-control" id="phone" placeholder="মোবাইল নাম্বার" required></div>
              <div class="col-md-12">
                <select class="form-select" id="serviceType">
                  <option value="">কোন সার্ভিস প্রয়োজন?</option>
                  <option>AC Repair</option>
                  <option>AC Servicing</option>
                  <option>AC Installation</option>
                  <option>AC Gas Refill</option>
                  <option>Washing Machine Repair</option>
                  <option>Refrigerator Repair</option>
                  <option>Microwave Repair</option>
                  <option>Dishwasher Repair &amp; Installation</option>
                  <option>Geyser Repair</option>
                  <option>Home Appliance Installation</option>
                  <option>Other</option>
                </select>
              </div>
              <div class="col-md-12"><textarea class="form-control" id="message" rows="4" placeholder="বিস্তারিত জানান..."></textarea></div>
              <div class="col-md-12">
                <button type="submit" class="btn btn-submit w-100"><i class="fab fa-whatsapp me-2"></i> WhatsApp-এ পাঠান</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="map-section" data-aos="fade-up">
  <div class="container-fluid p-0">
    <div class="map-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.831!2d90.365!3d23.806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDQ4JzIxLjYiTiA5MMKwMjEnNDUuMCJF!5e0!3m2!1sen!2sbd!4v1" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade" title="Xpert Service BD Location - Mirpur, Dhaka"></iframe>
    </div>
  </div>
</section>

@endsection
