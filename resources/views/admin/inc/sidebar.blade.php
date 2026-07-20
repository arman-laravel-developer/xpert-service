<!--- Sidemenu -->
<ul class="side-nav">

    <li class="side-nav-title side-nav-item">Navigation</li>
    @php
        $userType = auth()->user()->user_type;
        $roleRoutes = [];
        if ($userType !== 1) {
            $roleIds = DB::table('user_role')->where('user_id', auth()->user()->id)->pluck('role_id')->toArray();
            $roleRoutes = DB::table('role_routes')->whereIn('role_id', $roleIds)->pluck('route_name')->toArray();
        }
    @endphp
    <li class="side-nav-item">
        <a href="{{route('dashboard')}}" class="side-nav-link">
            <i class="uil-home-alt"></i>
            <span> Dashboards </span>
        </a>
    </li>

    @if ($userType === 1 || !empty(array_filter(['role.add', 'role.manage', 'user.add', 'user.manage'], fn($route) => in_array($route, $roleRoutes))))
    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false"
           aria-controls="sidebarEcommerce" class="side-nav-link">
            <i class="uil-users-alt"></i>
            <span> User Module </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarEcommerce">
            <ul class="side-nav-second-level">
                @if ($userType === 1 || in_array('role.add', $roleRoutes))
                    <li><a href="{{ route('role.add') }}">Add Role</a></li>
                @endif
                @if ($userType === 1 || in_array('role.manage', $roleRoutes))
                    <li><a href="{{ route('role.manage') }}">Manage Role</a></li>
                @endif
                @if ($userType === 1 || in_array('user.add', $roleRoutes))
                    <li><a href="{{ route('user.add') }}">Add User</a></li>
                @endif
                @if ($userType === 1 || in_array('user.manage', $roleRoutes))
                    <li><a href="{{ route('user.manage') }}">Manage User</a></li>
                @endif
            </ul>
        </div>
    </li>
    @endif

    @if ($userType === 1 || !empty(array_filter(['service.index', 'brand.index', 'service-area.index', 'blog-post.index', 'gallery-item.index', 'review.index', 'faq.index'], fn($route) => in_array($route, $roleRoutes))))
    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="#sidebarFrontend" aria-expanded="false" aria-controls="sidebarFrontend" class="side-nav-link">
            <i class="uil-store"></i>
            <span> Frontend Content </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarFrontend">
            <ul class="side-nav-second-level">
                @if ($userType === 1 || in_array('service.index', $roleRoutes))
                    <li><a href="{{ route('service.index') }}">Services</a></li>
                @endif
                @if ($userType === 1 || in_array('brand.index', $roleRoutes))
                    <li><a href="{{ route('brand.index') }}">Brands</a></li>
                @endif
                @if ($userType === 1 || in_array('service-area.index', $roleRoutes))
                    <li><a href="{{ route('service-area.index') }}">Service Areas</a></li>
                @endif
                @if ($userType === 1 || in_array('blog-post.index', $roleRoutes))
                    <li><a href="{{ route('blog-post.index') }}">Blog Posts</a></li>
                @endif
                @if ($userType === 1 || in_array('gallery-item.index', $roleRoutes))
                    <li><a href="{{ route('gallery-item.index') }}">Gallery</a></li>
                @endif
                @if ($userType === 1 || in_array('review.index', $roleRoutes))
                    <li><a href="{{ route('review.index') }}">Reviews</a></li>
                @endif
                @if ($userType === 1 || in_array('faq.index', $roleRoutes))
                    <li><a href="{{ route('faq.index') }}">FAQs</a></li>
                @endif
            </ul>
        </div>
    </li>
    @endif

    @if ($userType === 1 || !empty(array_filter(['privacy.add', 'return.manage'], fn($route) => in_array($route, $roleRoutes))))
        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarPrivacy" aria-expanded="false" aria-controls="sidebarPrivacy" class="side-nav-link">
                <i class="uil-lock"></i>
                <span> Privacy & Policy </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarPrivacy">
                <ul class="side-nav-second-level">
                    @if ($userType === 1 || in_array('privacy.add', $roleRoutes))
                        <li><a href="{{ route('privacy.add') }}">Manage Privacy</a></li>
                    @endif
                    @if ($userType === 1 || in_array('return.add', $roleRoutes))
                        <li><a href="{{ route('return.add') }}">Manage Return</a></li>
                    @endif
                </ul>
            </div>
        </li>
    @endif

    @if ($userType === 1 || !empty(array_filter(['setting.add', 'setting.smtp'], fn($route) => in_array($route, $roleRoutes))))
    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="#sidebarSetup" aria-expanded="false" aria-controls="sidebarSetup" class="side-nav-link">
            <i class="uil-wrench"></i>
            <span> Setup & Configurations </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarSetup">
            <ul class="side-nav-second-level">
                @if ($userType === 1 || in_array('setting.add', $roleRoutes))
                    <li><a href="{{ route('setting.add') }}">General Settings</a></li>
                @endif
                @if ($userType === 1 || in_array('setting.smtp', $roleRoutes))
                    <li><a href="{{ route('setting.smtp') }}">SMTP Settings</a></li>
                @endif
            </ul>
        </div>
    </li>
    @endif
</ul>
