@extends('admin.master')

@section('title')
Dashboard | {{env('APP_NAME')}}
@endsection

@section('body')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <form class="d-flex">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-light" id="dash-daterange">
                        <span class="input-group-text bg-primary border-primary text-white">
                            <i class="mdi mdi-calendar-range font-13"></i>
                        </span>
                    </div>
                    <a href="{{route('dashboard')}}" class="btn btn-primary ms-2" title="Reload">
                        <i class="mdi mdi-autorenew"></i>
                    </a>
                </form>
            </div>
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="card widget-flat">
            <div class="card-body">
                <div class="float-end"><i class="fas fa-wrench widget-icon"></i></div>
                <h5 class="text-muted fw-normal mt-0">Services</h5>
                <h3 class="mt-3 mb-3">{{ $totalServices }}</h3>
                <p class="mb-0 text-muted"><span class="text-nowrap">Total services</span></p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="card widget-flat">
            <div class="card-body">
                <div class="float-end"><i class="fas fa-tag widget-icon"></i></div>
                <h5 class="text-muted fw-normal mt-0">Brands</h5>
                <h3 class="mt-3 mb-3">{{ $totalBrands }}</h3>
                <p class="mb-0 text-muted"><span class="text-nowrap">Total brands</span></p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="card widget-flat">
            <div class="card-body">
                <div class="float-end"><i class="fas fa-map-marker-alt widget-icon"></i></div>
                <h5 class="text-muted fw-normal mt-0">Service Areas</h5>
                <h3 class="mt-3 mb-3">{{ $totalServiceAreas }}</h3>
                <p class="mb-0 text-muted"><span class="text-nowrap">Total areas</span></p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="card widget-flat">
            <div class="card-body">
                <div class="float-end"><i class="fas fa-blog widget-icon"></i></div>
                <h5 class="text-muted fw-normal mt-0">Blog Posts</h5>
                <h3 class="mt-3 mb-3">{{ $totalBlogPosts }}</h3>
                <p class="mb-0 text-muted"><span class="text-nowrap">Total posts</span></p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="card widget-flat">
            <div class="card-body">
                <div class="float-end"><i class="fas fa-images widget-icon"></i></div>
                <h5 class="text-muted fw-normal mt-0">Gallery</h5>
                <h3 class="mt-3 mb-3">{{ $totalGalleryItems }}</h3>
                <p class="mb-0 text-muted"><span class="text-nowrap">Total images</span></p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="card widget-flat">
            <div class="card-body">
                <div class="float-end"><i class="fas fa-star widget-icon"></i></div>
                <h5 class="text-muted fw-normal mt-0">Reviews</h5>
                <h3 class="mt-3 mb-3">{{ $totalReviews }}</h3>
                <p class="mb-0 text-muted"><span class="text-nowrap">Total reviews</span></p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="card widget-flat">
            <div class="card-body">
                <div class="float-end"><i class="fas fa-question-circle widget-icon"></i></div>
                <h5 class="text-muted fw-normal mt-0">FAQs</h5>
                <h3 class="mt-3 mb-3">{{ $totalFaqs }}</h3>
                <p class="mb-0 text-muted"><span class="text-nowrap">Total FAQs</span></p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="card widget-flat">
            <div class="card-body">
                <div class="float-end"><i class="fas fa-envelope widget-icon"></i></div>
                <h5 class="text-muted fw-normal mt-0">Contact Queries</h5>
                <h3 class="mt-3 mb-3">{{ $totalContactQueries }}</h3>
                <p class="mb-0 text-muted"><span class="text-nowrap">Total queries</span></p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Recent Services</h5>
                <a href="{{ route('service.index') }}" class="btn btn-sm btn-outline-primary">View All</a>
            </div>
            <div class="card-body py-2">
                @forelse($recentServices as $service)
                <div class="d-flex align-items-center py-2 border-bottom">
                    <i class="{{ $service->icon ?: 'fas fa-wrench' }} me-3" style="font-size:1.2rem;"></i>
                    <div class="flex-grow-1">
                        <h6 class="my-0">{{ $service->title }}</h6>
                        <small class="text-muted">{{ $service->created_at->format('d M Y') }}</small>
                    </div>
                    <span class="badge {{ $service->status == 1 ? 'badge-success-lighten' : 'badge-danger-lighten' }}">{{ $service->status == 1 ? 'Active' : 'Inactive' }}</span>
                </div>
                @empty
                <p class="text-muted py-3 mb-0 text-center">No services yet</p>
                @endforelse
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Recent Blog Posts</h5>
                <a href="{{ route('blog-post.index') }}" class="btn btn-sm btn-outline-primary">View All</a>
            </div>
            <div class="card-body py-2">
                @forelse($recentBlogPosts as $post)
                <div class="d-flex align-items-center py-2 border-bottom">
                    @if($post->image)
                    <img src="{{ asset($post->image) }}" style="width:40px;height:40px;object-fit:cover;border-radius:4px;" class="me-3">
                    @else
                    <i class="fas fa-file-alt me-3" style="font-size:1.2rem;"></i>
                    @endif
                    <div class="flex-grow-1">
                        <h6 class="my-0 text-truncate" style="max-width:200px;">{{ $post->title }}</h6>
                        <small class="text-muted">{{ $post->created_at->format('d M Y') }}</small>
                    </div>
                    <span class="badge {{ $post->status == 1 ? 'badge-success-lighten' : 'badge-danger-lighten' }}">{{ $post->status == 1 ? 'Active' : 'Inactive' }}</span>
                </div>
                @empty
                <p class="text-muted py-3 mb-0 text-center">No blog posts yet</p>
                @endforelse
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Recent Contact Queries</h5>
                <a href="{{ route('dashboard.contact-form') }}" class="btn btn-sm btn-outline-primary">View All</a>
            </div>
            <div class="card-body py-2">
                @forelse($recentContactQueries as $query)
                <div class="d-flex align-items-center py-2 border-bottom">
                    <i class="fas fa-user-circle me-3" style="font-size:1.5rem;color:#6c757d;"></i>
                    <div class="flex-grow-1">
                        <h6 class="my-0">{{ $query->name }}</h6>
                        <small class="text-muted">{{ $query->created_at->format('d M Y') }}</small>
                    </div>
                    <span class="badge {{ $query->read_status == 1 ? 'badge-success-lighten' : 'badge-warning-lighten' }}">{{ $query->read_status == 1 ? 'Read' : 'New' }}</span>
                </div>
                @empty
                <p class="text-muted py-3 mb-0 text-center">No contact queries yet</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
