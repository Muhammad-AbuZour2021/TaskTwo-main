<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="{{ url('/' . ($page = 'index')) }}"><img
                src="{{ URL::asset('assets/img/brand/logo.png') }}" class="main-logo" alt="logo"></a>
        <a class="desktop-logo logo-dark active" href="{{ url('/' . ($page = 'index')) }}"><img
                src="{{ URL::asset('assets/img/brand/logo-white.png') }}" class="main-logo dark-theme"
                alt="logo"></a>
        <a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . ($page = 'index')) }}"><img
                src="{{ URL::asset('assets/img/brand/favicon.png') }}" class="logo-icon" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="{{ url('/' . ($page = 'index')) }}"><img
                src="{{ URL::asset('assets/img/brand/favicon-white.png') }}" class="logo-icon dark-theme"
                alt="logo"></a>
    </div>
    <div class="main-sidemenu">
        <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body">
                <div class="">
                    <img alt="user-img" class="avatar avatar-xl brround"
                        src="{{ URL::asset('assets/img/faces/6.jpg') }}"><span
                        class="avatar-status profile-status bg-green"></span>
                </div>
                <div class="user-info">
                    <h4 class="font-weight-semibold mt-3 mb-0">
                        {{ auth()->user()->name }}
                    </h4>

                    <span class="mb-0 text-muted">
                        {{ auth()->user()->email }}
                    </span>
                </div>
            </div>
        </div>
        <ul class="side-menu">
            <li class="side-item side-item-category">عام</li>
            <li class="slide">
                <a class="side-menu__item" href="{{ url('admin/dashboard') }}"><svg xmlns="http://www.w3.org/2000/svg"
                        class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                        <path
                            d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6H5v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                    </svg><span class="side-menu__label">الرئيسية</span></a>
            </li>
            <li class="side-item side-item-category">تحكم</li>
            <li class="slide">
                <a class="side-menu__item" href="{{ url('admin/products') }}"><svg xmlns="http://www.w3.org/2000/svg"
                        class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M5 8h14v10H5z" opacity=".3" />
                        <path
                            d="M12 2C9.24 2 7 4.24 7 7H5c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2h-2c0-2.76-2.24-5-5-5zm0 2c1.66 0 3 1.34 3 3H9c0-1.66 1.34-3 3-3zm7 14H5V9h14v10z" />
                    </svg><span class="side-menu__label">المنتجات الرائدة</span></a>
            </li>
            <li class="slide">
                <a class="side-menu__item" href="{{ url('admin/scanning') }}"><svg xmlns="http://www.w3.org/2000/svg"
                        class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M5 5h14v14H5z" opacity=".3" />
                        <path
                            d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM7 10h10v2H7zm0-3h10v2H7zm0 6h7v2H7z" />
                    </svg><span class="side-menu__label">حلول المسح الضوئي</span></a>
            </li>

            <li class="slide">
                <a class="side-menu__item" href="{{ url('admin/articles') }}"><svg xmlns="http://www.w3.org/2000/svg"
                        class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M5 5v14h14V5H5zm9 12H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z" opacity=".3" />
                        <path
                            d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zm-12-2h7v-2H7v2zm0-4h10v-2H7v2zm0-4h10V7H7v2z" />
                    </svg><span class="side-menu__label">المقالات</span></a>
            </li>

            <li class="slide">
                <a class="side-menu__item" href="{{ url('admin/blogs') }}"><svg xmlns="http://www.w3.org/2000/svg"
                        class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M14 10H3v10h11v-10zm-3 7H6v-2h5v2z" opacity=".3" />
                        <path
                            d="M21.41 4.59l-2-2c-.39-.39-1.02-.39-1.41 0L16.17 4H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7.83l4.41-4.41c.39-.39.39-1.02 0-1.41zM14 20H3V6h11v4H10v10h4zm-3-3H6v-2h5v2zm7-9.17L16.17 6l1.41-1.41L19.41 6z" />
                    </svg><span class="side-menu__label">المدونات</span></a>
            </li>

            <li class="slide">
                <a class="side-menu__item" href="{{ url('admin/faqs') }}"><svg xmlns="http://www.w3.org/2000/svg"
                        class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path
                            d="M12 4c-4.41 0-8 3.59-8 8 0 1.68.52 3.24 1.41 4.54L4 20l3.54-1.41C8.83 19.48 10.37 20 12 20c4.41 0 8-3.59 8-8s-3.59-8-8-8zm1 14h-2v-2h2v2zm0-4.2c0-1.7-1.3-2.5-2.2-3.1-.9-.5-1.8-1.1-1.8-2.7h2c0 .9.5 1.3 1.3 1.8.9.5 2.7 1.4 2.7 4h-2z"
                            opacity=".3" />
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12c0 1.74.45 3.37 1.24 4.8L2 22l5.3-1.24C8.69 21.54 10.28 22 12 22c5.52 0 10-4.48 10-10S17.52 2 12 2zm0 18c-1.63 0-3.17-.52-4.46-1.41L4 20l1.42-3.54C4.52 15.17 4 13.63 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8-3.59 8-8 8zm1-4h-2v-2h2v2zm0-4.2c0-2.6-1.8-3.5-2.7-4-.8-.5-1.3-.9-1.3-1.8h-2c0 1.6.9 2.2 1.8 2.7.9.6 2.2 1.4 2.2 3.1h2z" />
                    </svg><span class="side-menu__label">الأسئلة الشائعة</span></a>
            </li>

            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path
                            d="M12 4.1L4.44 8 12 11.9l7.56-3.9L12 4.1zM4.04 12.18l7.96 4.13 7.96-4.13v-2.2L12 13.9 4.04 9.98v2.2z"
                            opacity=".3" />
                        <path
                            d="M12 2L2 7l10 5 10-5-10-5zM4.44 8L12 4.15 19.56 8 12 11.9 4.44 8zm0 4.18l7.96 4.14 7.96-4.14v-2.2L12 13.9 4.04 9.98v2.2zM12 18.5l-7.96-4.13v2.2l7.96 4.13 7.96-4.13v-2.2L12 18.5z" />
                    </svg><span class="side-menu__label">الباقات</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ url('admin/plans') }}">الباقات</a></li>
                    <li><a class="slide-item" href="{{ url('admin/features') }}">مميزات الباقات</a></li>
                </ul>
            </li>

            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M20 6H4v12h16V6zm-2 2l-6 4-6-4h12z" opacity=".3" />
                        <path
                            d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V6l8 5 8-5v12zm-8-8L4 8h16l-8 2z" />
                    </svg><span class="side-menu__label">تواصل</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ url('admin/contact') }}">رسائل</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
