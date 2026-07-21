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

    @if ($userType === 1 || in_array('service.index', $roleRoutes))
    <li class="side-nav-item">
        <a href="{{ route('service.index') }}" class="side-nav-link">
            <i class="uil-wrench"></i>
            <span> Services </span>
        </a>
    </li>
    @endif
    @if ($userType === 1 || in_array('brand.index', $roleRoutes))
    <li class="side-nav-item">
        <a href="{{ route('brand.index') }}" class="side-nav-link">
            <i class="uil-tag"></i>
            <span> Brands </span>
        </a>
    </li>
    @endif
    @if ($userType === 1 || in_array('service-area.index', $roleRoutes))
    <li class="side-nav-item">
        <a href="{{ route('service-area.index') }}" class="side-nav-link">
            <i class="uil-map-marker"></i>
            <span> Service Areas </span>
        </a>
    </li>
    @endif
    @if ($userType === 1 || in_array('blog-post.index', $roleRoutes))
    <li class="side-nav-item">
        <a href="{{ route('blog-post.index') }}" class="side-nav-link">
            <i class="uil-file-alt"></i>
            <span> Blog Posts </span>
        </a>
    </li>
    @endif
    @if ($userType === 1 || in_array('gallery-item.index', $roleRoutes))
    <li class="side-nav-item">
        <a href="{{ route('gallery-item.index') }}" class="side-nav-link">
            <i class="uil-images"></i>
            <span> Gallery </span>
        </a>
    </li>
    @endif
    @if ($userType === 1 || in_array('review.index', $roleRoutes))
    <li class="side-nav-item">
        <a href="{{ route('review.index') }}" class="side-nav-link">
            <i class="uil-star"></i>
            <span> Reviews </span>
        </a>
    </li>
    @endif
    @if ($userType === 1 || in_array('faq.index', $roleRoutes))
    <li class="side-nav-item">
        <a href="{{ route('faq.index') }}" class="side-nav-link">
            <i class="uil-question-circle"></i>
            <span> FAQs </span>
        </a>
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

    @if ($userType === 1 || !empty(array_filter(['setting.add', 'setting.smtp', 'about-us.index', 'setting.backup'], fn($route) => in_array($route, $roleRoutes))))
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
                @if ($userType === 1 || in_array('about-us.index', $roleRoutes))
                    <li><a href="{{ route('about-us.index') }}">About Us</a></li>
                @endif
                @if ($userType === 1 || in_array('setting.backup', $roleRoutes))
                    <li><a href="{{ route('setting.backup') }}">Backup</a></li>
                @endif
            </ul>
        </div>
    </li>
    @endif

    @if ($userType === 1 || !empty(array_filter(['dashboard.contact-form'], fn($route) => in_array($route, $roleRoutes))))
    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="#sidebarSupport" aria-expanded="false" aria-controls="sidebarSupport" class="side-nav-link">
            <i class="uil-envelope"></i>
            <span> Support </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarSupport">
            <ul class="side-nav-second-level">
                <li><a href="{{ route('dashboard.contact-form') }}">Contact Queries</a></li>
            </ul>
        </div>
    </li>
    @endif

    <li class="side-nav-item">
        <a href="{{ route('lock-screen') }}" class="side-nav-link">
            <i class="uil-lock"></i>
            <span> Lock Screen </span>
        </a>
    </li>

    <li class="side-nav-item">
        <a href="{{ route('home') }}" target="_blank" class="side-nav-link">
            <i class="uil-external-link-alt"></i>
            <span> Visit Website </span>
        </a>
    </li>
</ul>
