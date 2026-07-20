@extends('front.master')

@section('title', 'ফ্রিজের যত্ন – দীর্ঘদিন ভালো রাখার উপায় | Xpert Service BD')
@section('meta_description', 'ফ্রিজের যত্ন – দীর্ঘদিন ভালো রাখার উপায়। Xpert Service BD থেকে পেশাদার ফ্রিজ রিপেয়ার সেবা নিন মিরপুর, ঢাকা।')

@section('content')

<section class="page-header" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));padding:120px 0 50px;text-align:center;">
  <div class="container">
    <h1 style="color:#fff;font-size:2rem;font-weight:700;" data-aos="fade-up">ফ্রিজের যত্ন – দীর্ঘদিন ভালো রাখার উপায়</h1>
    <nav aria-label="breadcrumb" data-aos="fade-up" style="margin-top:15px;">
      <ol class="breadcrumb justify-content-center" style="background:none;padding:0;margin:0;">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color:rgba(255,255,255,0.7);">হোম</a></li>
        <li class="breadcrumb-item"><a href="{{ route('blog') }}" style="color:rgba(255,255,255,0.7);">ব্লগ</a></li>
        <li class="breadcrumb-item active" style="color:var(--accent);">ফ্রিজ টিপস</li>
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
            <span class="badge bg-primary px-3 py-2"><i class="fas fa-icicles me-1"></i> ফ্রিজ টিপস</span>
            <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> ৫ জুন ২০২৬</small>
            <small class="text-muted"><i class="far fa-user me-1"></i> Xpert Service BD</small>
            <small class="text-muted"><i class="far fa-clock me-1"></i> ৫ মিনিট পড়ুন</small>
          </div>

          <img src="{{ asset('front/images/blog/blog-3.jpg') }}" alt="ফ্রিজের যত্ন – দীর্ঘদিন ভালো রাখার উপায়" class="img-fluid rounded mb-4" style="width:100%;">

          <div class="blog-content" style="font-size:1.05rem;line-height:1.9;">
            <p>ফ্রিজ আমাদের রান্নাঘরের একটি অপরিহার্য যন্ত্র। খাবার সংরক্ষণ থেকে শুরু করে ঠান্ডা পানীয় – ফ্রিজের ব্যবহার প্রতিদিনই। কিন্তু সঠিক যত্নের অভাবে অনেক ফ্রিজ অকালেই নষ্ট হয়ে যায়। আজ আমরা জানব ফ্রিজকে দীর্ঘদিন ভালো রাখার ৭টি কার্যকরী উপায়।</p>

            <h4 class="mt-5">১. নিয়মিত পরিষ্কার করুন</h4>
            <p>মাসে অন্তত একবার ফ্রিজের ভেতরটা ভালোভাবে পরিষ্কার করুন। সব খাবার বের করে নিন এবং গরম পানি ও হালকা ডিটারজেন্ট দিয়ে ভেতর মুছুন। কনডেনসার কয়েলও পরিষ্কার রাখা জরুরি। কয়েলে ধুলো জমলে ফ্রিজের কার্যক্ষমতা কমে যায় এবং বিদ্যুৎ খরচ বাড়ে।</p>

            <h4 class="mt-5">২. তাপমাত্রা সঠিক রাখুন</h4>
            <p>ফ্রিজের সঠিক তাপমাত্রা ৩-৫° সেলসিয়াস এবং ফ্রিজারের তাপমাত্রা -১৮° সেলসিয়াস হওয়া উচিত। অতিরিক্ত ঠান্ডা বিদ্যুৎ খরচ বাড়ায় এবং খুব কম ঠান্ডা খাবার নষ্ট করতে পারে। একটি থার্মোমিটার দিয়ে তাপমাত্রা নিয়মিত চেক করুন।</p>

            <h4 class="mt-5">৩. গ্যাস লিকেজ চেক করুন</h4>
            <p>ফ্রিজ ঠান্ডা না করলে গ্যাস লিকেজ হতে পারে। নিচের লক্ষণগুলো দেখুন:
            <ul>
              <li>ফ্রিজের পেছনে তেলের দাগ</li>
              <li>কম্প্রেসর সব সময় চালু থাকা কিন্তু ঠান্ডা না হওয়া</li>
              <li>অস্বাভাবিক শব্দ</li>
            </ul>
            গ্যাস লিকেজ হলে দ্রুত টেকনিশিয়ানের সাহায্য নিন। গ্যাস লিকেজ ফ্রিজের কম্প্রেসরের জন্য ক্ষতিকর হতে পারে।</p>

            <h4 class="mt-5">৪. খাবার সঠিকভাবে রাখুন</h4>
            <p>গরম খাবার ফ্রিজে না রেখে আগে ঠান্ডা করে নিন। খাবার এয়ারটাইট কন্টেইনারে রাখুন। ফ্রিজ খুব বেশি ভর্তি করবেন না – বাতাস চলাচলের জন্য যথেষ্ট জায়গা রাখুন। সবজি ও ফল আলাদা ড্রয়ারে রাখুন।</p>

            <h4 class="mt-5">৫. ডোর সিল চেক করুন</h4>
            <p>ফ্রিজের ডোরের রাবারের সিল ঠিকমতো কাজ করছে কিনা পরীক্ষা করুন। ডোর বন্ধ করে একটি কাগজ রাখুন – কাগজটি যদি সহজে বেরিয়ে আসে তবে সিল ঠিকমতো কাজ করছে না। নষ্ট সিল পরিবর্তন করান। এছাড়া ডোরের সিল পরিষ্কার রাখুন।</p>

            <h4 class="mt-5">৬. ফ্রিজের চারপাশে জায়গা রাখুন</h4>
            <p>ফ্রিজের পেছনে ও দুই পাশে কমপক্ষে ১০-১৫ সেমি ফাঁকা জায়গা রাখুন। এটি তাপ নিঃসরণে সাহায্য করে এবং ফ্রিজের কার্যক্ষমতা বাড়ায়। ফ্রিজ সরাসরি সূর্যের আলো বা চুলার পাশে রাখবেন না।</p>

            <h4 class="mt-5">৭. নিয়মিত সার্ভিসিং করান</h4>
            <p>প্রতি ৬ মাস অন্তর পেশাদার টেকনিশিয়ান দিয়ে ফ্রিজ সার্ভিসিং করানো ভালো। সার্ভিসিংয়ের সময় গ্যাস চেক, কম্প্রেসর চেক, কনডেনসার কয়েল পরিষ্কার সহ প্রয়োজনীয় কাজ করা হয়। এতে ফ্রিজের আয়ু বাড়ে এবং অপ্রত্যাশিত ব্রেকডাউন এড়ানো যায়।</p>

            <h4 class="mt-5">উপসংহার</h4>
            <p>ফ্রিজের সঠিক যত্ন নিলে এটি দীর্ঘদিন ভালো থাকে এবং আপনার টাকা বাঁচায়। উপরের টিপসগুলো অনুসরণ করে আপনি আপনার ফ্রিজের আয়ু বাড়াতে পারেন। যদি ফ্রিজে বড় কোনো সমস্যা হয়, তাহলে Xpert Service BD-র পেশাদার টেকনিশিয়ানের সাহায্য নিন। আমরা মিরপুর এলাকায় ফ্রিজ রিপেয়ার ও সার্ভিসিং সেবা প্রদান করি।</p>
          </div>

          <div class="d-flex gap-3 mt-4 pt-4 border-top">
            <span class="fw-bold">শেয়ার করুন:</span>
            <a href="https://facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" rel="noopener" class="text-primary"><i class="fab fa-facebook fa-lg"></i></a>
            <a href="https://wa.me/8801723456789?text={{ urlencode('ফ্রিজের যত্ন – দীর্ঘদিন ভালো রাখার উপায় - ' . url()->current()) }}" target="_blank" rel="noopener" class="text-success"><i class="fab fa-whatsapp fa-lg"></i></a>
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
                <img src="{{ asset('front/images/blog/blog-2.jpg') }}" alt="Washing Machine Tips" class="blog-img">
                <div class="blog-body">
                  <h5>ওয়াশিং মেশিনের সাধারণ সমস্যা ও সমাধান</h5>
                  <a href="{{ route('blog.detail', 'washing-machine-tips') }}" class="blog-read-more">আরও পড়ুন <i class="fas fa-arrow-right ms-1"></i></a>
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
            <li class="d-flex gap-3">
              <img src="{{ asset('front/images/blog/blog-2.jpg') }}" alt="Washing Machine Tips" style="width:60px;height:60px;object-fit:cover;border-radius:8px;">
              <div><a href="{{ route('blog.detail', 'washing-machine-tips') }}" class="text-decoration-none" style="font-size:0.9rem;font-weight:600;">ওয়াশিং মেশিনের সাধারণ সমস্যা</a><small class="d-block text-muted">১০ জুন ২০২৬</small></div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section py-4" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));text-align:center;">
  <div class="container">
    <h3 style="color:#fff;font-weight:700;">আপনার ফ্রিজের সার্ভিসিংয়ের প্রয়োজন আছে?</h3>
    <p style="color:rgba(255,255,255,0.8);">এখনই কল বা WhatsApp করুন – আমরা দ্রুত সেবা দিতে প্রস্তুত</p>
    <div class="d-flex justify-content-center gap-3 flex-wrap">
      <a href="tel:+8801723456789" class="btn btn-light btn-lg px-4"><i class="fas fa-phone-alt me-2"></i> কল করুন</a>
      <a href="https://wa.me/8801723456789?text=Hi!%20I%20need%20fridge%20repair." target="_blank" rel="noopener" class="btn btn-success btn-lg px-4"><i class="fab fa-whatsapp me-2"></i> WhatsApp</a>
    </div>
  </div>
</section>

@endsection
