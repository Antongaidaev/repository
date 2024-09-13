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

    <div class="main-content" style="margin-left: 0;">
        <div class="page-content">
            <div class="container-fluid">
                <div class="container">

                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card mt-4 card-bg-fill">

                                <div class="card-body p-4">
                                    <div class="text-center mt-2">
                                        <h5 class="text-primary">@yield('name')</h5>
                                    </div>
                                    <div class="p-2 mt-4">

                                        @yield('content')

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end row -->
                </div>
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
