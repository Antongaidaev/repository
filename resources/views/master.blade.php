<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
      data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>

    <meta charset="utf-8"/>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css"/>
    <script src="/js/layout.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="/css/app.min.css" rel="stylesheet" type="text/css"/>
    <link href="/css/custom.min.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="/libs/gridjs/theme/mermaid.min.css">

</head>
<body>
<div id="layout-wrapper">
    <header id="page-topbar">
        <div class="layout-width">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box horizontal-logo">
                        <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                            <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="17">
                        </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                            <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="17">
                        </span>
                        </a>
                    </div>
                    <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger material-shadow-none"
                            id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    </button>


                </div>

                <div class="d-flex align-items-center">


                    <div class="dropdown ms-sm-3 header-item topbar-user">
                        <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">

                            <span class="text-start ms-xl-2">
                                <span
                                    class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ auth()->user()->name }}</span>
                                <span
                                    class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">{{ auth()->user()->email }}</span>
                            </span>
                        </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <h6 class="dropdown-header">Добро пожаловать!</h6>

                            <div class="dropdown-divider"></div>
                            @guest
                                <a class="dropdown-item" href="login"><i
                                        class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle" data-key="t-logout">Вход</span></a>
                                <a class="dropdown-item" href="register"><i
                                        class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle" data-key="t-logout">Регистрация</span></a>

                            @endguest

                            @auth
                                <a class="dropdown-item" href="logout"><i
                                        class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle" data-key="t-logout">Выход</span></a>

                            @endauth

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="NotificationModalbtn-close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                   colors="primary:#f7b84b,secondary:#f06548"
                                   style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h4>Are you sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <!-- Dark Logo-->
            <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="17">
                    </span>
            </a>
            <!-- Light Logo-->
            <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="17">
                    </span>
            </a>
            <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                <i class="ri-record-circle-line"></i>
            </button>
        </div>

        <div class="dropdown sidebar-user m-1 rounded">

        </div>
        <div id="scrollbar">
            <div class="container-fluid">


                <div id="two-column-menu">
                </div>
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="menu-title"><span data-key="t-menu">Меню</span></li>
                    <li class="nav-item">
                        <a href="index.html" class="nav-link" data-key="t-ecommerce"> Дашборд </a>
                    </li>
                    <li class="nav-item">
                        <a href="#sidebarEcommerce" class="nav-link" data-bs-toggle="collapse" role="button"
                           aria-expanded="false" aria-controls="sidebarEcommerce" data-key="t-ecommerce">
                            Ecommerce
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarEcommerce">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('products') }}" class="nav-link" data-key="t-products">
                                        Товары </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('categories') }}" class="nav-link"
                                       data-key="t-product-Details">Категории</a>
                                </li>
                                <li class="nav-item">
                                    <a href="apps-ecommerce-add-product.html" class="nav-link"
                                       data-key="t-create-product">Подкатегории</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link" data-key="t-orders">
                                        Заказы</a>
                                </li>
                                <li class="nav-item">
                                    <a href="apps-ecommerce-order-details.html" class="nav-link"
                                       data-key="t-order-details"> Order Details </a>
                                </li>
                                <li class="nav-item">
                                    <a href="apps-ecommerce-customers.html" class="nav-link" data-key="t-customers">
                                        Customers </a>
                                </li>
                                <li class="nav-item">
                                    <a href="apps-ecommerce-cart.html" class="nav-link" data-key="t-shopping-cart">
                                        Shopping Cart </a>
                                </li>
                                <li class="nav-item">
                                    <a href="apps-ecommerce-checkout.html" class="nav-link" data-key="t-checkout">
                                        Checkout </a>
                                </li>
                                <li class="nav-item">
                                    <a href="apps-ecommerce-sellers.html" class="nav-link" data-key="t-sellers">
                                        Sellers </a>
                                </li>
                                <li class="nav-item">
                                    <a href="apps-ecommerce-seller-details.html" class="nav-link"
                                       data-key="t-sellers-details"> Seller Details </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="#sidebarProjects" class="nav-link" data-bs-toggle="collapse" role="button"
                           aria-expanded="false" aria-controls="sidebarProjects" data-key="t-projects">
                            Записи
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarProjects">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('articles') }}" class="nav-link" data-key="t-list"> Все записи
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('articles.create') }}" class="nav-link"
                                       data-key="t-create-project">
                                        Добавить запись</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button"
                           aria-expanded="false" aria-controls="sidebarAuth">
                            <i class="ri-account-circle-line"></i> <span
                                data-key="t-authentication">Authentication</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarAuth">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="#sidebarSignIn" class="nav-link" data-bs-toggle="collapse" role="button"
                                       aria-expanded="false" aria-controls="sidebarSignIn" data-key="t-signin"> Sign In
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarSignIn">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-signin-basic.html" class="nav-link" data-key="t-basic">
                                                    Basic
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-signin-cover.html" class="nav-link" data-key="t-cover">
                                                    Cover
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarSignUp" class="nav-link" data-bs-toggle="collapse" role="button"
                                       aria-expanded="false" aria-controls="sidebarSignUp" data-key="t-signup"> Sign Up
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarSignUp">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-signup-basic.html" class="nav-link" data-key="t-basic">
                                                    Basic
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-signup-cover.html" class="nav-link" data-key="t-cover">
                                                    Cover
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a href="#sidebarResetPass" class="nav-link" data-bs-toggle="collapse" role="button"
                                       aria-expanded="false" aria-controls="sidebarResetPass"
                                       data-key="t-password-reset">
                                        Password Reset
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarResetPass">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-pass-reset-basic.html" class="nav-link"
                                                   data-key="t-basic">
                                                    Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-pass-reset-cover.html" class="nav-link"
                                                   data-key="t-cover">
                                                    Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a href="#sidebarchangePass" class="nav-link" data-bs-toggle="collapse"
                                       role="button" aria-expanded="false" aria-controls="sidebarchangePass"
                                       data-key="t-password-create">
                                        Password Create
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarchangePass">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-pass-change-basic.html" class="nav-link"
                                                   data-key="t-basic">
                                                    Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-pass-change-cover.html" class="nav-link"
                                                   data-key="t-cover">
                                                    Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a href="#sidebarLockScreen" class="nav-link" data-bs-toggle="collapse"
                                       role="button" aria-expanded="false" aria-controls="sidebarLockScreen"
                                       data-key="t-lock-screen">
                                        Lock Screen
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarLockScreen">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-lockscreen-basic.html" class="nav-link"
                                                   data-key="t-basic">
                                                    Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-lockscreen-cover.html" class="nav-link"
                                                   data-key="t-cover">
                                                    Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a href="#sidebarLogout" class="nav-link" data-bs-toggle="collapse" role="button"
                                       aria-expanded="false" aria-controls="sidebarLogout" data-key="t-logout"> Logout
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarLogout">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-logout-basic.html" class="nav-link" data-key="t-basic">
                                                    Basic
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-logout-cover.html" class="nav-link" data-key="t-cover">
                                                    Cover
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarSuccessMsg" class="nav-link" data-bs-toggle="collapse"
                                       role="button" aria-expanded="false" aria-controls="sidebarSuccessMsg"
                                       data-key="t-success-message"> Success Message
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarSuccessMsg">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-success-msg-basic.html" class="nav-link"
                                                   data-key="t-basic">
                                                    Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-success-msg-cover.html" class="nav-link"
                                                   data-key="t-cover">
                                                    Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarTwoStep" class="nav-link" data-bs-toggle="collapse" role="button"
                                       aria-expanded="false" aria-controls="sidebarTwoStep"
                                       data-key="t-two-step-verification"> Two Step Verification
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarTwoStep">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-twostep-basic.html" class="nav-link" data-key="t-basic">
                                                    Basic
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-twostep-cover.html" class="nav-link" data-key="t-cover">
                                                    Cover
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarErrors" class="nav-link" data-bs-toggle="collapse" role="button"
                                       aria-expanded="false" aria-controls="sidebarErrors" data-key="t-errors"> Errors
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarErrors">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-404-basic.html" class="nav-link" data-key="t-404-basic">
                                                    404
                                                    Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-404-cover.html" class="nav-link" data-key="t-404-cover">
                                                    404
                                                    Cover </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-404-alt.html" class="nav-link" data-key="t-404-alt"> 404
                                                    Alt
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-500.html" class="nav-link" data-key="t-500"> 500 </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-offline.html" class="nav-link" data-key="t-offline-page">
                                                    Offline Page </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>


                </ul>
            </div>
            <!-- Sidebar -->
        </div>

        <div class="sidebar-background"></div>
    </div>
    <div class="vertical-overlay"></div>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script>
                        © Бюро.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Административная панель компании Бюро
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
</button>
<div id="preloader">
    <div id="status">
        <div class="spinner-border text-primary avatar-sm" role="status">
            <span class="visually-hidden">Загрузка...</span>
        </div>
    </div>
</div>

<script src="/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/libs/simplebar/simplebar.min.js"></script>
<script src="/libs/node-waves/waves.min.js"></script>
<script src="/libs/feather-icons/feather.min.js"></script>
<script src="/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="/js/plugins.js"></script>
<script src="/libs/apexcharts/apexcharts.min.js"></script>
<script src="/libs/jsvectormap/js/jsvectormap.min.js"></script>
<script src="/libs/jsvectormap/maps/world-merc.js"></script>
<script src="/libs/swiper/swiper-bundle.min.js"></script>
<script src="/js/pages/dashboard-ecommerce.init.js"></script>
<script src="/js/app.js"></script>


<!-- ckeditor -->
<script src="/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

<!-- dropzone js -->
<script src="/libs/dropzone/dropzone-min.js"></script>

<script src="/js/pages/ecommerce-product-create.init.js"></script>

<!-- App js -->
<script src="/js/app.js"></script>


</body>
</html>
