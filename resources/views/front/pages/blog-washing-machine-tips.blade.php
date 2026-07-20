@extends('front.master')

@section('title', 'ওয়াশিং মেশিনের সাধারণ সমস্যা ও সমাধান | Xpert Service BD')
@section('meta_description', 'ওয়াশিং মেশিনের সাধারণ সমস্যা ও সমাধান। Xpert Service BD থেকে পেশাদার ওয়াশিং মেশিন রিপেয়ার সেবা নিন মিরপুর, ঢাকা।')

@section('content')

<section class="page-header" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));padding:120px 0 50px;text-align:center;">
  <div class="container">
    <h1 style="color:#fff;font-size:2rem;font-weight:700;" data-aos="fade-up">ওয়াশিং মেশিনের সাধারণ সমস্যা ও সমাধান</h1>
    <nav aria-label="breadcrumb" data-aos="fade-up" style="margin-top:15px;">
      <ol class="breadcrumb justify-content-center" style="background:none;padding:0;margin:0;">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color:rgba(255,255,255,0.7);">হোম</a></li>
        <li class="breadcrumb-item"><a href="{{ route('blog') }}" style="color:rgba(255,255,255,0.7);">ব্লগ</a></li>
        <li class="breadcrumb-item active" style="color:var(--accent);">ওয়াশিং মেশিন টিপস</li>
      </ol>
    </nav>
  </div>
</section>

<section class="section py-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-8">
        <article>
          <div class="d-flex flex-wrap align-items-center gap-3 mb-3">
            <span class="badge bg-primary px-3 py-2"><i class="fas fa-soap me-1"></i> ওয়াশিং মেশিন টিপস</span>
            <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> ১০ জুন ২০২৬</small>
            <small class="text-muted"><i class="far fa-user me-1"></i> Xpert Service BD</small>
            <small class="text-muted"><i class="far fa-clock me-1"></i> ৫ মিনিট পড়ুন</small>
          </div>

          <img src="{{ asset('front/images/blog/blog-2.jpg') }}" alt="ওয়াশিং মেশিনের সাধারণ সমস্যা ও সমাধান" class="img-fluid rounded mb-4" style="width:100%;">

          <div class="blog-content" style="font-size:1.05rem;line-height:1.9;">
            <p>ওয়াশিং মেশিন আধুনিক জীবনের একটি অপরিহার্য অংশ। কিন্তু মাঝেমধ্যেই বিভিন্ন সমস্যার কারণে এটি কাজ করা বন্ধ করে দেয়। আজ আমরা আলোচনা করব ওয়াশিং মেশিনের ৫টি সাধারণ সমস্যা ও তার সমাধান নিয়ে।</p>

            <h4 class="mt-5">১. পানি আসছে না</h4>
            <p><strong>কারণ:</strong> ওয়াটার সাপ্লাই বন্ধ, ইনলেট ভালভ ব্লক, বা ফিল্টার ব্লক হয়ে যাওয়া।</p>
            <p><strong>সমাধান:</strong> প্রথমে নিশ্চিত হয়ে নিন যে পানি সরবরাহ চালু আছে। তারপর মেশিনের পেছনের ইনলেট হোজ ও ফিল্টার পরীক্ষা করে পরিষ্কার করুন। ফিল্টার ব্লক থাকলে পানি প্রবেশ করতে পারে না। প্রয়োজনে ইনলেট ভালভ পরিবর্তন করতে হতে পারে।</p>

            <h4 class="mt-5">২. স্পিন হচ্ছে না</h4>
            <p><strong>কারণ:</strong> বেল্ট আলগা বা ছেঁড়া, মোটর সমস্যা, ক্লাচ সমস্যা, বা আনলোড সেন্সর সমস্যা।</p>
            <p><strong>সমাধান:</strong> মেশিন খুব বেশি কাপড় দিয়ে ভর্তি করলে স্পিন নাও হতে পারে। কিছু কাপড় বের করে নিন। বেল্ট চেক করুন – আলগা থাকলে টাইট করুন বা প্রয়োজনে নতুন বেল্ট দিন। মোটর বা ক্লাচের সমস্যা হলে টেকনিশিয়ানের সাহায্য নিন।</p>

            <h4 class="mt-5">৩. অতিরিক্ত কম্পন ও শব্দ</h4>
            <p><strong>কারণ:</strong> মেশিনের পা সমান না থাকা, বিয়ারিং নষ্ট, বা স্প্রিং/শক অ্যাবজরবার সমস্যা।</p>
            <p><strong>সমাধান:</strong> প্রথমে মেশিনের পা সমান করে নিন। মেশিনটি নাড়াচাড়া করে দেখুন – যদি নড়ে তবে পা অ্যাডজাস্ট করুন। বিয়ারিং নষ্ট হলে ঘড়ঘড় শব্দ হয়, যা পরিবর্তন করতে হবে।</p>

            <h4 class="mt-5">৪. পানি লিক হচ্ছে</h4>
            <p><strong>কারণ:</strong> হোজ ছেঁড়া বা আলগা, ড্রেন পাম্পের সমস্যা, ডোর সিল নষ্ট, বা ইনলেট ভালভ লিক।</p>
            <p><strong>সমাধান:</strong> সব হোজ ও সংযোগ পরীক্ষা করে দেখুন কোথাও লিক আছে কিনা। আলগা সংযোগ টাইট করুন। ছেঁড়া হোজ বা সিল পরিবর্তন করুন। ড্রেন পাম্প পরীক্ষা করুন।</p>

            <h4 class="mt-5">৫. গন্ধ আসছে</h4>
            <p><strong>কারণ:</strong> মেশিনের অভ্যন্তরে ময়লা জমা, সাবানের রেসিডিউ, ব্যাকটেরিয়া ও ফাঙ্গাসের বৃদ্ধি।</p>
            <p><strong>সমাধান:</strong> মাসে একবার গরম পানিতে ভিনেগার ও বেকিং সোডা দিয়ে খালি মেশিন চালান। ডিটারজেন্ট ড্রয়ার ও ডোর সিল নিয়মিত পরিষ্কার করুন। ড্রেন ফিল্টারও পরিষ্কার রাখুন। ব্যবহারের পর মেশিনের ডোর কিছুক্ষণ খোলা রাখুন যাতে ভেতর শুকিয়ে যায়।</p>

            <h4 class="mt-5">প্রতিরোধমূলক টিপস</h4>
            <ul>
              <li>প্রতি মাসে মেশিন পরিষ্কার করুন</li>
              <li>অতিরিক্ত কাপড় দিয়ে মেশিন ভর্তি করবেন না</li>
              <li>প্রতি ৩ মাস পর ড্রেন ফিল্টার পরিষ্কার করুন</li>
              <li>প্রয়োজনীয় ডিটারজেন্ট ব্যবহার করুন</li>
              <li>পকেট খালি রেখে কাপড় দিন</li>
              <li>মেশিনের লেভেল নিয়মিত চেক করুন</li>
            </ul>

            <h4 class="mt-5">উপসংহার</h4>
            <p>ওয়াশিং মেশিনের ছোটখাটো সমস্যা নিজেই সমাধান করা সম্ভব। কিন্তু বড় কোনো সমস্যা হলে পেশাদার টেকনিশিয়ানের সাহায্য নেওয়াই ভালো। Xpert Service BD মিরপুর এলাকায় ওয়াশিং মেশিন রিপেয়ার সেবা প্রদান করে। আমাদের অভিজ্ঞ টেকনিশিয়ানরা সব ধরনের ওয়াশিং মেশিনের সমস্যা সমাধান করতে দক্ষ।</p>
          </div>

          <div class="d-flex gap-3 mt-4 pt-4 border-top">
            <span class="fw-bold">শেয়ার করুন:</span>
            <a href="https://facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" rel="noopener" class="text-primary"><i class="fab fa-facebook fa-lg"></i></a>
            <a href="https://wa.me/8801723456789?text={{ urlencode('ওয়াশিং মেশিনের সাধারণ সমস্যা ও সমাধান - ' . url()->current()) }}" target="_blank" rel="noopener" class="text-success"><i class="fab fa-whatsapp fa-lg"></i></a>
          </div>
        </article>

        <div class="related-posts mt-5 pt-4 border-top">
          <h4 class="mb-4">আরও পড়ুন</h4>
          <div class="row g-4">
            <div class="col-md-6">
              <div class="blog-card">
                <img src="{{ asset('front/images/blog/blog-1.jpg') }}" alt="AC Tips" class="blog-img">
                <div class="blog-body">
                  <h5>এসি সার্ভিসিং কেন জরুরি? জেনে নিন ৫টি কারণ</h5>
                  <a href="{{ route('blog.detail', 'ac-servicing-tips') }}" class="blog-read-more">আরও পড়ুন <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="blog-card">
                <img src="{{ asset('front/images/blog/blog-3.jpg') }}" alt="Fridge Tips" class="blog-img">
                <div class="blog-body">
                  <h5>ফ্রিজের যত্ন – দীর্ঘদিন ভালো রাখার উপায়</h5>
                  <a href="{{ route('blog.detail', 'fridge-care-tips') }}" class="blog-read-more">আরও পড়ুন <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card mb-4 p-4" style="border:1px solid var(--border);border-radius:var(--radius);">
          <h5 style="font-weight:700;color:var(--primary);">দ্রুত সার্ভিস</h5>
          <a href="tel:+8801723456789" class="btn btn-call-nav mb-2 w-100"><i class="fas fa-phone-alt me-2"></i> কল করুন</a>
          <a href="https://wa.me/8801723456789" target="_blank" rel="noopener" class="btn btn-whatsapp-nav w-100"><i class="fab fa-whatsapp me-2"></i> WhatsApp</a>
        </div>

        <div class="card mb-4 p-4" style="border:1px solid var(--border);border-radius:var(--radius);">
          <h5 style="font-weight:700;color:var(--primary);">জনপ্রিয় ব্লগ</h5>
          <ul class="list-unstyled">
            <li class="mb-3 pb-3 border-bottom d-flex gap-3">
              <img src="{{ asset('front/images/blog/blog-1.jpg') }}" alt="AC Tips" style="width:60px;height:60px;object-fit:cover;border-radius:8px;">
              <div><a href="{{ route('blog.detail', 'ac-servicing-tips') }}" class="text-decoration-none" style="font-size:0.9rem;font-weight:600;">এসি সার্ভিসিং কেন জরুরি?</a><small class="d-block text-muted">১৫ জুন ২০২৬</small></div>
            </li>
            <li class="mb-3 pb-3 border-bottom d-flex gap-3">
              <img src="{{ asset('front/images/blog/blog-3.jpg') }}" alt="Fridge Tips" style="width:60px;height:60px;object-fit:cover;border-radius:8px;">
              <div><a href="{{ route('blog.detail', 'fridge-care-tips') }}" class="text-decoration-none" style="font-size:0.9rem;font-weight:600;">ফ্রিজের যত্ন</a><small class="d-block text-muted">৫ জুন ২০২৬</small></div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section py-4" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));text-align:center;">
  <div class="container">
    <h3 style="color:#fff;font-weight:700;">আপনার ওয়াশিং মেশিন সমস্যা সমাধান করতে চান?</h3>
    <p style="color:rgba(255,255,255,0.8);">এখনই কল বা WhatsApp করুন – আমরা দ্রুত সেবা দিতে প্রস্তুত</p>
    <div class="d-flex justify-content-center gap-3 flex-wrap">
      <a href="tel:+8801723456789" class="btn btn-light btn-lg px-4"><i class="fas fa-phone-alt me-2"></i> কল করুন</a>
      <a href="https://wa.me/8801723456789?text=Hi!%20I%20need%20washing%20machine%20repair." target="_blank" rel="noopener" class="btn btn-success btn-lg px-4"><i class="fab fa-whatsapp me-2"></i> WhatsApp</a>
    </div>
  </div>
</section>

@endsection
