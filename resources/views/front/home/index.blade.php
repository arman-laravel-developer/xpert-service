@extends('front.master')

@section('title', ($generalSettingView->site_name ?? 'Xpert Service BD') . ' | AC Service & Repair in Mirpur | Home Appliance Repair')
@section('meta_description', ($generalSettingView->site_name ?? '') . ' – পেশাদার AC সার্ভিস, রিপেয়ার ও হোম অ্যাপ্লায়েন্স মেরামত সেবা মিরপুরে।')
@section('meta_keywords', 'AC Service Mirpur, AC Repair Mirpur, AC Servicing, Washing Machine Repair, Refrigerator Repair')

@section('content')

@php $waNum = preg_replace('/[^0-9]/', '', $generalSettingView->pinterest_url ?? ''); $ph = $generalSettingView->mobile ?? ''; @endphp

<section id="home" class="hero-section">
  <div class="hero-overlay"></div>
  <div class="container hero-content">
    <div class="row align-items-center">
      <div class="col-lg-7" data-aos="fade-right">
        <h1 class="hero-title">বিশ্বস্ত হোম অ্যাপ্লায়েন্স<br>রিপেয়ার ও সার্ভিস সেবা মিরপুরে</h1>
        <p class="hero-subtitle">AC Repair, Servicing, Installation, Gas Refill – Washing Machine, Refrigerator, Microwave, Dishwasher, Geyser সহ সব ধরনের ইলেকট্রিক ও ইলেকট্রনিক হোম অ্যাপ্লায়েন্স মেরামত সেবা।</p>
        <div class="hero-cta d-flex flex-wrap gap-3 mt-4">
                    <a href="tel:{{ $ph }}" class="btn btn-hero-call"><i class="fas fa-phone-alt me-2"></i> কল করুন এখনই</a>
          @if($waNum)<a href="https://wa.me/{{ $waNum }}?text=Hi!%20I%20need%20a%20service." target="_blank" rel="noopener" class="btn btn-hero-whatsapp"><i class="fab fa-whatsapp me-2"></i><span class="d-none d-sm-inline">WhatsApp এ মেসেজ দিন</span><span class="d-sm-none">WhatsApp</span></a>@endif
        </div>
        <div class="hero-badges mt-4 d-flex flex-wrap gap-3">
          <span><i class="fas fa-check-circle text-success me-1"></i> ১০+ বছর অভিজ্ঞতা</span>
          <span><i class="fas fa-check-circle text-success me-1"></i> ওয়ারেন্টি সহ সেবা</span>
          <span><i class="fas fa-check-circle text-success me-1"></i> ফাস্ট সার্ভিস</span>
        </div>
      </div>
      <div class="col-lg-5 d-none d-lg-block" data-aos="fade-left">
        <img src="{{ asset('front/images/hero-img.png') }}" alt="{{ $generalSettingView->site_name ?? '' }}" class="img-fluid hero-img">
      </div>
    </div>
  </div>
</section>

<section class="emergency-section" data-aos="fade-up">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="emergency-box">
          <div class="row align-items-center">
            <div class="col-md-8 text-center text-md-start mb-3 mb-md-0">
              <h2 class="emergency-title">জরুরি সার্ভিস প্রয়োজন?</h2>
              <p class="emergency-text mb-0">আমরা ২৪/৭ ইমার্জেন্সি কল সার্ভিস প্রদান করি। এখনই কল করুন, আমরা ৩০ মিনিটের মধ্যে পৌঁছে যাব।</p>
            </div>
            <div class="col-md-4 text-center text-md-end">
              <a href="tel:{{ $ph }}" class="btn btn-emergency"><i class="fas fa-phone-alt me-2"></i> {{ $ph }}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section why-section">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>কেন আমাদের বেছে নেবেন?</h2>
      <p>আমরা কেন সেরা – জেনে নিন আমাদের বিশেষত্ব</p>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3" data-aos="fade-up">
        <div class="why-card">
          <div class="why-icon"><i class="fas fa-user-tie"></i></div>
          <h3>অভিজ্ঞ টেকনিশিয়ান</h3>
          <p>১০+ বছর অভিজ্ঞতা সম্পন্ন পেশাদার টেকনিশিয়ান যারা সব ধরনের ব্র্যান্ডের কাজ করতে দক্ষ।</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="fade-up">
        <div class="why-card">
          <div class="why-icon"><i class="fas fa-shield-alt"></i></div>
          <h3>সার্ভিস ওয়ারেন্টি</h3>
          <p>আমাদের প্রতিটি সার্ভিসে ওয়ারেন্টি প্রদান করা হয়। সেবা নিয়ে থাকলে নিশ্চিন্ত থাকুন।</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="fade-up">
        <div class="why-card">
          <div class="why-icon"><i class="fas fa-clock"></i></div>
          <h3>দ্রুত সেবা</h3>
          <p>কল পাওয়ার ৩০ মিনিটের মধ্যে সার্ভিস পয়েন্টে পৌঁছে যাই। সময়মতো সেবা নিশ্চিত করি।</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="fade-up">
        <div class="why-card">
          <div class="why-icon"><i class="fas fa-hand-holding-usd"></i></div>
          <h3>সাশ্রয়ী মূল্য</h3>
          <p>গুণগত মান বজায় রেখে সাশ্রয়ী মূল্যে সার্ভিস প্রদান করি। কোনরকম লুকানো চার্জ নেই।</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="services" class="section services-section bg-light">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>আমাদের সেবাসমূহ</h2>
      <p>পেশাদার মানের সব ধরনের হোম অ্যাপ্লায়েন্স সার্ভিস</p>
    </div>
    <div class="row g-4">
      @foreach($services as $service)
      <div class="col-md-6 col-lg-4" data-aos="fade-up">
        <div class="service-card">
          <div class="service-img"><img src="{{ asset($service->image ?? 'front/images/services/default.jpg') }}" alt="{{ $service->title }}"></div>
          <div class="service-info">
            <div class="service-icon"><i class="{{ $service->icon }}"></i></div>
            <h3>{{ $service->title }}</h3>
            <p>{{ Str::limit($service->description, 80) }}</p>
            <a href="{{ route('service.detail', $service->slug) }}" class="blog-read-more mt-2 d-inline-block">বিস্তারিত দেখুন <i class="fas fa-arrow-right ms-1"></i></a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section id="brands" class="section brands-section">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>আমরা যে ব্র্যান্ডগুলোর সেবা দেই</h2>
      <p>দেশী-বিদেশী সব নামকরা ব্র্যান্ডের ইলেকট্রিক ও ইলেকট্রনিক পণ্য মেরামত</p>
    </div>
    <div class="brand-slider" data-aos="fade-up">
      <div class="brand-track">
        @foreach($brands as $brand)
        <div class="brand-item"><img src="{{ asset($brand->image ?? 'front/images/brands/default.png') }}" alt="{{ $brand->name }}"><span>{{ $brand->name }}</span></div>
        @endforeach
        @foreach($brands as $brand)
        <div class="brand-item"><img src="{{ asset($brand->image ?? 'front/images/brands/default.png') }}" alt="{{ $brand->name }}"><span>{{ $brand->name }}</span></div>
        @endforeach
      </div>
    </div>
  </div>
</section>

<section class="section process-section bg-light">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>আমরা যেভাবে কাজ করি</h2>
      <p>সহজ ও স্বচ্ছ প্রক্রিয়ায় আমরা পৌঁছে দেই সেরা সার্ভিস</p>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3" data-aos="fade-up">
        <div class="process-card">
          <div class="process-step">1</div>
          <div class="process-icon"><i class="fas fa-phone-alt"></i></div>
          <h3>কল / WhatsApp করুন</h3>
          <p>আপনার সমস্যা জানিয়ে আমাদের কল বা WhatsApp এ মেসেজ দিন।</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="fade-up">
        <div class="process-card">
          <div class="process-step">2</div>
          <div class="process-icon"><i class="fas fa-calendar-check"></i></div>
          <h3>অ্যাপয়েন্টমেন্ট</h3>
          <p>আমরা আপনার সুবিধামতো সময় নির্ধারণ করি এবং টেকনিশিয়ান পাঠাই।</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="fade-up">
        <div class="process-card">
          <div class="process-step">3</div>
          <div class="process-icon"><i class="fas fa-tools"></i></div>
          <h3>সার্ভিস ও ডায়াগনোসিস</h3>
          <p>পেশাদার টেকনিশিয়ান পণ্য পরীক্ষা করে সমস্যা নির্ণয় ও মেরামত করে।</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="fade-up">
        <div class="process-card">
          <div class="process-step">4</div>
          <div class="process-icon"><i class="fas fa-smile"></i></div>
          <h3>সন্তুষ্টি নিশ্চিত</h3>
          <p>সার্ভিস শেষে টেস্টিং ও গ্রাহকের সন্তুষ্টি নিশ্চিত করে আমরা ফিরে আসি।</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section gallery-section">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>আমাদের কাজের নমুনা</h2>
      <p>Before &amp; After – নিজের চোখে দেখুন আমাদের কাজের মান</p>
    </div>
    <div class="row g-3" data-aos="fade-up">
      @foreach($items as $item)
      <div class="col-6 col-md-4 col-lg-3">
        <a href="{{ asset($item->image) }}" class="gallery-item" data-lightbox="work-gallery">
          <img src="{{ asset($item->image) }}" alt="{{ $item->alt_text ?? 'Gallery Image' }}">
          <div class="gallery-overlay"><span><i class="fas fa-search-plus"></i></span></div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section class="section reviews-section bg-light">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>গ্রাহকরা কী বলছেন</h2>
      <p>আমাদের সেবায় সন্তুষ্ট গ্রাহকদের মতামত</p>
    </div>
    <div class="row g-4">
      @foreach($reviews as $review)
      <div class="col-md-6 col-lg-4" data-aos="fade-up">
        <div class="review-card">
          <div class="review-stars">
            @for($i = 1; $i <= 5; $i++)
              @if($i <= $review->rating)
                <i class="fas fa-star"></i>
              @else
                <i class="far fa-star"></i>
              @endif
            @endfor
          </div>
          <p class="review-text">"{{ $review->content }}"</p>
          <div class="review-author">
            <div class="review-avatar"><i class="fas fa-user-circle"></i></div>
            <div><strong>{{ $review->name }}</strong><small>{{ $review->location }}</small></div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="text-center mt-5" data-aos="fade-up">
      <p class="mb-3">Google-এ আমাদের ৪.৮★ রেটিং! আপনিও আপনার মতামত জানান।</p>
      <a href="https://search.google.com/local/reviews?placeid=PLACE_ID" target="_blank" rel="noopener" class="btn btn-google-review"><i class="fab fa-google me-2"></i> Google Review দিন</a>
    </div>
  </div>
</section>

<section id="service-areas" class="section areas-section">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>আমাদের সার্ভিস এলাকা</h2>
      <p>মিরপুরের সর্বত্র আমরা পৌঁছে যাই – আপনার দরজায় আমাদের সেবা</p>
    </div>
    <div class="row g-3" data-aos="fade-up">
      @foreach($areas as $area)
      <div class="col-6 col-md-4 col-lg-2"><div class="area-item"><i class="fas fa-map-marker-alt"></i> {{ $area->name }}</div></div>
      @endforeach
    </div>
  </div>
</section>

<section class="section faq-section bg-light">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>সচরাচর জিজ্ঞাসা</h2>
      <p>আপনার মনে প্রশ্ন থাকলে আগে জেনে নিন</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8" data-aos="fade-up">
        <div class="accordion" id="faqAccordion">
          @foreach($faqs as $faq)
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq{{ $faq->id }}">{{ $faq->question }}</button>
            </h3>
            <div id="faq{{ $faq->id }}" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">{{ $faq->answer }}</div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contact" class="section contact-section">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>যোগাযোগ করুন</h2>
      <p>আপনার সমস্যা জানান – আমরা সমাধান নিয়ে আসছি</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-5" data-aos="fade-right">
        <div class="contact-info-box">
          <h3>আমাদের সাথে যোগাযোগ করুন</h3>
          @if($ph)<div class="contact-detail">
            <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
            <div><strong>ফোন</strong><p><a href="tel:{{ $ph }}">{{ $ph }}</a></p></div>
          </div>@endif
          @if($waNum)<div class="contact-detail">
            <div class="contact-icon"><i class="fab fa-whatsapp"></i></div>
            <div><strong>WhatsApp</strong><p><a href="https://wa.me/{{ $waNum }}" target="_blank" rel="noopener">{{ $waNum }}</a></p></div>
          </div>@endif
          @if($generalSettingView->email)<div class="contact-detail">
            <div class="contact-icon"><i class="fas fa-envelope"></i></div>
            <div><strong>ইমেইল</strong><p><a href="mailto:{{ $generalSettingView->email }}">{{ $generalSettingView->email }}</a></p></div>
          </div>@endif
          @if($generalSettingView->address)<div class="contact-detail">
            <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div><strong>ঠিকানা</strong><p>{{ $generalSettingView->address }}</p></div>
          </div>@endif
          <div class="contact-detail">
            <div class="contact-icon"><i class="fas fa-clock"></i></div>
            <div><strong>সার্ভিস সময়</strong><p>সকাল ৮:০০ থেকে রাত ১০:০০ (সপ্তাহে ৭ দিন)</p></div>
          </div>
          <div class="contact-social mt-4 d-flex gap-3">
            @if($generalSettingView->facebook_url)<a href="{{ $generalSettingView->facebook_url }}" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>@endif
            @if($generalSettingView->instagram_url)<a href="{{ $generalSettingView->instagram_url }}" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>@endif
            @if($generalSettingView->youtube_url)<a href="{{ $generalSettingView->youtube_url }}" target="_blank" rel="noopener" aria-label="YouTube"><i class="fab fa-youtube"></i></a>@endif
            @if($waNum)<a href="https://wa.me/{{ $waNum }}" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>@endif
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

<section id="blog" class="section blog-section">
  <div class="container">
    <div class="section-header text-center" data-aos="fade-up">
      <h2>আমাদের ব্লগ</h2>
      <p>হোম অ্যাপ্লায়েন্স টিপস, ট্রিকস ও রক্ষণাবেক্ষণ সম্পর্কিত তথ্য</p>
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
  </div>
</section>

@push('head')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "{{ $generalSettingView->site_name ?? '' }}",
  "image": "{{ asset($generalSettingView->header_logo ?? 'front/images/logo.png') }}",
  "url": "{{ url('/') }}",
  "telephone": "{{ $ph }}",
  "description": "{{ $generalSettingView->about_us_short ?? '' }}",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "{{ $generalSettingView->address ?? '' }}",
    "addressLocality": "Dhaka",
    "addressCountry": "BD"
  },
  "areaServed": [@foreach($areas as $area)"{{ $area->name }}"@if(!$loop->last),@endif @endforeach],
  "priceRange": "৳৳",
  "openingHours": "Mo-Su 08:00-22:00"
}
</script>
@endpush

@endsection
