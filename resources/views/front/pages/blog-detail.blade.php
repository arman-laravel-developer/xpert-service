@extends('front.master')

@section('title', ($post->meta_title ?? $post->title) . ' | ' . ($generalSettingView->site_name ?? ''))
@section('meta_description', $post->meta_description ?? Str::limit(strip_tags($post->content), 160))

@section('content')

@php $phBd = $generalSettingView->mobile ?? ''; $waBd = preg_replace('/[^0-9]/', '', $generalSettingView->pinterest_url ?? ''); @endphp

<section class="page-header" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));padding:120px 0 50px;text-align:center;">
  <div class="container">
    <h1 style="color:#fff;font-size:2rem;font-weight:700;" data-aos="fade-up">{{ $post->title }}</h1>
    <nav aria-label="breadcrumb" data-aos="fade-up" style="margin-top:15px;">
      <ol class="breadcrumb justify-content-center" style="background:none;padding:0;margin:0;">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color:rgba(255,255,255,0.7);">হোম</a></li>
        <li class="breadcrumb-item"><a href="{{ route('blog') }}" style="color:rgba(255,255,255,0.7);">ব্লগ</a></li>
        <li class="breadcrumb-item active" style="color:var(--accent);">{{ $post->title }}</li>
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
            <span class="badge bg-primary px-3 py-2">{{ $post->category ?? 'টিপস' }}</span>
            @if($post->published_date)
            <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> {{ \Carbon\Carbon::parse($post->published_date)->format('j F Y') }}</small>
            @endif
            @if($post->author)
            <small class="text-muted"><i class="far fa-user me-1"></i> {{ $post->author }}</small>
            @endif
          </div>

          @if($post->image)
          <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="img-fluid rounded mb-4" style="width:100%;">
          @endif

          <div class="blog-content" style="font-size:1.05rem;line-height:1.9;">
            {!! $post->content !!}
          </div>

          <div class="d-flex gap-3 mt-4 pt-4 border-top">
            <span class="fw-bold">শেয়ার করুন:</span>
            <a href="https://facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" rel="noopener" class="text-primary"><i class="fab fa-facebook fa-lg"></i></a>
            @if($waBd)<a href="https://wa.me/{{ $waBd }}?text={{ urlencode($post->title . ' - ' . url()->current()) }}" target="_blank" rel="noopener" class="text-success"><i class="fab fa-whatsapp fa-lg"></i></a>@endif
          </div>
        </article>

        @if($recentPosts->count() > 0)
        <div class="related-posts mt-5 pt-4 border-top">
          <h4 class="mb-4">আরও পড়ুন</h4>
          <div class="row g-4">
            @foreach($recentPosts as $rp)
            <div class="col-md-6">
              <div class="blog-card">
                @if($rp->image)
                <img src="{{ asset($rp->image) }}" alt="{{ $rp->title }}" class="blog-img">
                @endif
                <div class="blog-body">
                  <h5>{{ $rp->title }}</h5>
                  <a href="{{ route('blog.detail', $rp->slug) }}" class="blog-read-more">আরও পড়ুন <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        @endif
      </div>

      <div class="col-lg-4">
        <div class="card mb-4 p-4" style="border:1px solid var(--border);border-radius:var(--radius);">
          <h5 style="font-weight:700;color:var(--primary);">দ্রুত সার্ভিস</h5>
          <p class="text-muted small">এখনই কল করুন এবং দ্রুত সার্ভিস পান</p>
          <a href="tel:{{ $phBd }}" class="btn btn-call-nav mb-2"><i class="fas fa-phone-alt me-2"></i> কল করুন</a>
          @if($waBd)<a href="https://wa.me/{{ $waBd }}" target="_blank" rel="noopener" class="btn btn-whatsapp-nav"><i class="fab fa-whatsapp me-2"></i> WhatsApp</a>@endif
        </div>

        @if($recentPosts->count() > 0)
        <div class="card mb-4 p-4" style="border:1px solid var(--border);border-radius:var(--radius);">
          <h5 style="font-weight:700;color:var(--primary);">জনপ্রিয় ব্লগ</h5>
          <ul class="list-unstyled">
            @foreach($recentPosts as $rp)
            <li class="mb-3 pb-3 border-bottom d-flex gap-3">
              @if($rp->image)
              <img src="{{ asset($rp->image) }}" alt="{{ $rp->title }}" style="width:60px;height:60px;object-fit:cover;border-radius:8px;">
              @endif
              <div>
                <a href="{{ route('blog.detail', $rp->slug) }}" class="text-decoration-none" style="font-size:0.9rem;font-weight:600;">{{ Str::limit($rp->title, 40) }}</a>
                @if($rp->published_date)
                <small class="d-block text-muted">{{ \Carbon\Carbon::parse($rp->published_date)->format('j F Y') }}</small>
                @endif
              </div>
            </li>
            @endforeach
          </ul>
        </div>
        @endif
      </div>
    </div>
  </div>
</section>

<section class="section py-4" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));text-align:center;">
  <div class="container">
    <h3 style="color:#fff;font-weight:700;">আপনার সার্ভিসের প্রয়োজন আছে?</h3>
    <p style="color:rgba(255,255,255,0.8);">এখনই কল বা WhatsApp করুন – আমরা দ্রুত সেবা দিতে প্রস্তুত</p>
    <div class="d-flex justify-content-center gap-3 flex-wrap">
      <a href="tel:{{ $phBd }}" class="btn btn-light btn-lg px-4"><i class="fas fa-phone-alt me-2"></i> কল করুন</a>
      @if($waBd)<a href="https://wa.me/{{ $waBd }}?text=Hi!%20I%20need%20service." target="_blank" rel="noopener" class="btn btn-success btn-lg px-4"><i class="fab fa-whatsapp me-2"></i> WhatsApp</a>@endif
    </div>
  </div>
</section>

@endsection
