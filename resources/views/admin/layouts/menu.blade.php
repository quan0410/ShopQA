<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('admin.home.index') }}" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img src="{{asset('front/img/QA.png')}}" height="100" alt="">
              </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1 ps ps--active-y">
        <!-- Dashboard -->
        <li class="menu-item {{ \Illuminate\Support\Facades\Request::routeIs('admin.home.*') ? 'active' : '' }}">
            <a href="{{ route('admin.home.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
        </li>
        @if(Auth::user()->permissions['super'])
            <li class="menu-item {{ \Illuminate\Support\Facades\Request::routeIs('admin.user.*') ? 'active' : '' }}">
                <a href="{{ route('admin.user.index') }}" class="menu-link">
                    <i class='menu-icon bx bx-user'></i>
                    <div data-i18n="Analytics">Users</div>
                </a>
            </li>
        @endif
{{--        <li class="menu-item">--}}
{{--            <a href="javascript:void(0);" class="menu-link menu-toggle">--}}
{{--                <i class="menu-icon tf-icons bx bx-dock-top"></i>--}}
{{--                <div data-i18n="Account Settings">Account Settings</div>--}}
{{--            </a>--}}
{{--            <ul class="menu-sub">--}}
{{--                <li class="menu-item">--}}
{{--                    <a href="pages-account-settings-account.html" class="menu-link">--}}
{{--                        <div data-i18n="Account">Account</div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="menu-item">--}}
{{--                    <a href="pages-account-settings-notifications.html" class="menu-link">--}}
{{--                        <div data-i18n="Notifications">Notifications</div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="menu-item">--}}
{{--                    <a href="pages-account-settings-connections.html" class="menu-link">--}}
{{--                        <div data-i18n="Connections">Connections</div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
        <!-- Brand -->
        @if(Auth::user()->permissions['brand'])
            <li class="menu-item">
                <a href="{{route("admin.brand.index")}}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-collection"></i>
                    <div data-i18n="Basic">Brands</div>
                </a>
            </li>
        @endif
        @if(Auth::user()->permissions['category'])
            <li class="menu-item">
                <a href="{{route("admin.category.index")}}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-category"></i>
                    <div data-i18n="Basic">Categories</div>
                </a>
            </li>
        @endif
        @if(Auth::user()->permissions['product'])
            <li class="menu-item">
                <a href="{{route("admin.product.index")}}" class="menu-link">
                    <i class="menu-icon tf-icons bx bxl-product-hunt"></i>
                    <div data-i18n="Basic">Products</div>
                </a>
            </li>
        @endif
        @if(Auth::user()->permissions['sale'])
            <li class="menu-item">
                <a href="{{route("admin.sale.index")}}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-table"></i>
                    <div data-i18n="Basic">Sales</div>
                </a>
            </li>
        @endif
        <li class="menu-item">
            <a href="{{route("admin.slider.index")}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-image"></i>
                <div data-i18n="Basic">Sliders</div>
            </a>
        </li>
        @if(Auth::user()->permissions['blog'])
            <li class="menu-item">
                <a href="{{route("admin.blog.index")}}" class="menu-link">
                    <i class="menu-icon tf-icons bx bxl-blogger"></i>
                    <div data-i18n="Basic">Blogs</div>
                </a>
            </li>
        @endif
        @if(Auth::user()->permissions['order'])
            <li class="menu-item">
                <a href="{{route("admin.order.index")}}" class="menu-link">
                    <i class="menu-icon tf-icons bx bxl-dropbox"></i>
                    <div data-i18n="Basic">Orders</div>
                </a>
            </li>
        @endif

        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 565px; right: 4px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 358px;"></div></div></ul>
</aside>
