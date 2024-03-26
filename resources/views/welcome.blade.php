<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>KidolShop</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="csrf-token" content="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E"> -->
    <!-- Favicon -->

    <!-- CSS
 ============================================ -->

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="http://kidolshop.click/public/kidolshop/css/vendor/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="http://kidolshop.click/public/kidolshop/css/vendor/plazaicon.css">
    <link rel="stylesheet" href="http://kidolshop.click/public/kidolshop/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="http://kidolshop.click/public/kidolshop/css/vendor/font-awesome.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="http://kidolshop.click/public/kidolshop/css/plugins/animate.css">
    <link rel="stylesheet" href="http://kidolshop.click/public/kidolshop/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="http://kidolshop.click/public/kidolshop/css/plugins/select2.min.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="http://kidolshop.click/public/kidolshop/css/helper.css">
    <link rel="stylesheet" href="http://kidolshop.click/public/kidolshop/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="http://kidolshop.click/public/kidolshop/css/responsive.bootstrap.min.css"> --}}

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Coiny&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/products.css') }}">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    @yield('style')
    <!-- Modernizer JS -->
    {{-- <script src="http://kidolshop.click/public/kidolshop/js/vendor/modernizr-3.6.0.min.js"></script> --}}
    <!-- jQuery JS -->
    {{-- <script src="http://kidolshop.click/public/kidolshop/js/vendor/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
        crossorigin="anonymous">
    </script> --}}
    {{-- <script src="http://kidolshop.click/public/kidolshop/js/jquery.preloadinator.min.js"></script> --}}


</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0" class="preloader-deactive">
    <div class="main-wrapper">
        <!--Top Notification Start-->
        <div class="top-notification-bar text-center">
            <div class="container">
                <div class="notification-entry">
                    <p>Nhập: SALE10 giảm 10% cho mọi đơn hàng. <a href="http://kidolshop.click/store">Mua ngay!</a></p>
                </div>
            </div>
            <div class="notification-close">
                <button class="notification-close-btn"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <!--Top Notification End-->

        <div class="preloader js-preloader flex-center">
            <div class="dots">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>

        <!--Header Section Start-->
        <input id="quick-view-token" name="_token" type="hidden" value="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E">
        <div class="header-section d-none d-lg-block">
            <div class="main-header">
                <div class="container position-relative">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="header-logo">
                                <a href="http://kidolshop.click/home"><img
                                        src="http://kidolshop.click/public/kidolshop/images/logo/logo.png"
                                        alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-7 position-static">
                            <div class="site-main-nav">
                                <nav class="site-nav">
                                    <ul>
                                        <li><a href="http://kidolshop.click/home">Trang chủ</a></li>
                                        <li>
                                            <a href="http://kidolshop.click/store">Cửa hàng <span
                                                    class="new">Mới</span></a>

                                            <ul class="mega-sub-menu">
                                                <li class="mega-dropdown">
                                                    <a class="mega-title" href="http://kidolshop.click/store">Danh
                                                        mục</a>

                                                    <ul class="mega-item">
                                                        <li><a
                                                                href="http://kidolshop.click/store?show=all&amp;category=1&amp;sort_by=new">Quần
                                                                Áo Nam</a></li>
                                                        <li><a
                                                                href="http://kidolshop.click/store?show=all&amp;category=2&amp;sort_by=new">Quần
                                                                Áo Nữ</a></li>
                                                        <li><a
                                                                href="http://kidolshop.click/store?show=all&amp;category=3&amp;sort_by=new">Áo
                                                                Khoác</a></li>
                                                        <li><a
                                                                href="http://kidolshop.click/store?show=all&amp;category=4&amp;sort_by=new">Phụ
                                                                Kiện</a></li>
                                                        <li><a
                                                                href="http://kidolshop.click/store?show=all&amp;category=5&amp;sort_by=new">Giày
                                                                Dép Nam</a></li>
                                                        <li><a
                                                                href="http://kidolshop.click/store?show=all&amp;category=6&amp;sort_by=new">Giày
                                                                Dép Nữ</a></li>
                                                        <li><a
                                                                href="http://kidolshop.click/store?show=all&amp;category=7&amp;sort_by=new">Váy</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-dropdown">
                                                    <a class="mega-title" href="http://kidolshop.click/store">Thương
                                                        hiệu</a>

                                                    <ul class="mega-item">
                                                        <li><a
                                                                href="http://kidolshop.click/store?show=all&amp;brand=1&amp;sort_by=new">LOVEKIDS</a>
                                                        </li>
                                                        <li><a
                                                                href="http://kidolshop.click/store?show=all&amp;brand=2&amp;sort_by=new">Rabity
                                                                Kids</a></li>
                                                        <li><a
                                                                href="http://kidolshop.click/store?show=all&amp;brand=3&amp;sort_by=new">ILABY</a>
                                                        </li>
                                                        <li><a
                                                                href="http://kidolshop.click/store?show=all&amp;brand=4&amp;sort_by=new">AMILA</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-dropdown">
                                                    <a class="mega-title" href="http://kidolshop.click/store">Danh Mục
                                                        Khác</a>

                                                    <ul class="mega-item">
                                                        <li><a
                                                                href="http://kidolshop.click/store?show=all&amp;sort_by=new">Sản
                                                                phẩm mới</a></li>
                                                        <li><a
                                                                href="http://kidolshop.click/store?show=all&amp;sort_by=bestsellers">Sản
                                                                phẩm bán chạy</a></li>
                                                        <li><a
                                                                href="http://kidolshop.click/store?show=all&amp;sort_by=featured">Sản
                                                                phẩm nổi bật</a></li>
                                                        <li><a
                                                                href="http://kidolshop.click/store?show=all&amp;sort_by=sale">Sản
                                                                phẩm đang SALE</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-dropdown">
                                                    <a class="menu-banner" href="#">
                                                        <img src="http://kidolshop.click/public/kidolshop/images/banner-navbar.jpg"
                                                            alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="http://kidolshop.click/blog">Tin tức</a></li>
                                        <li><a href="http://kidolshop.click/about-us">Về chúng tôi</a></li>
                                        <li><a href="http://kidolshop.click/contact">Liên hệ</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="header-meta-info" style="position:relative;">
                                <div class="header-search">
                                    <form type="GET" action="http://kidolshop.click/search">
                                        <input type="text" name="keyword" id="search-input"
                                            placeholder="Tìm kiếm sản phẩm " autocomplete="off">
                                        <button class="search-btn"><i class="icon-search"></i></button>
                                    </form>
                                </div>
                                <ul class="search-product">

                                </ul>
                                <div class="header-account">
                                    <div class="header-account-list dropdown top-link">
                                        <a href="#" role="button" data-toggle="dropdown"><i
                                                class="icon-users"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="http://kidolshop.click/register">Đăng ký</a></li>
                                            <li><a href="http://kidolshop.click/login">Đăng nhập</a></li>
                                        </ul>
                                        <input type="hidden" id="idCustomer" value="">
                                    </div>
                                    <div class="header-account-list dropdown mini-cart">
                                        <a href="#" role="button" data-toggle="dropdown">
                                            <i class="icon-shopping-bag"></i>
                                        </a>
                                        <ul class="dropdown-menu" style="height:250px; width:250px;">
                                            <li
                                                style="height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center;">
                                                <img src="http://kidolshop.click/public/kidolshop/images/no_cart.png"
                                                    alt="" style="width: 80%;" class="product-image">
                                                <span class="mt-10 d-block text-align-center">Giỏ hàng trống</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Header Section End-->


        <!--Header Mobile Start-->
        <div class="header-mobile d-lg-none">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="header-logo">
                            <a href="http://kidolshop.click/home"><img
                                    src="http://kidolshop.click/public/kidolshop/images/logo/logo.png"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="header-meta-info">
                            <div class="header-account">
                                <div class="header-account-list dropdown top-link">
                                    <a href="#" role="button" data-toggle="dropdown"><i
                                            class="icon-users"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="http://kidolshop.click/register">Đăng ký</a></li>
                                        <li><a href="http://kidolshop.click/login">Đăng nhập</a></li>
                                    </ul>
                                    <input type="hidden" id="idCustomer" value="">
                                </div>
                                <div class="header-account-list dropdown mini-cart">
                                    <a href="#" role="button" data-toggle="dropdown">
                                        <i class="icon-shopping-bag"></i>
                                    </a>
                                    <ul class="dropdown-menu" style="height:250px; width:250px;">
                                        <li
                                            style="height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center;">
                                            <img src="http://kidolshop.click/public/kidolshop/images/no_cart.png"
                                                alt="" style="width: 80%;" class="product-image">
                                            <span class="mt-10 d-block text-align-center">Giỏ hàng trống</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-account-list mobile-menu-trigger">
                                    <button id="menu-trigger">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Header Mobile End-->

        <!--Header Mobile Menu Start-->
        <div class="header-mobile-menu d-lg-none">

            <a href="javascript:void(0)" class="mobile-menu-close">
                <span></span>
                <span></span>
            </a>

            <div class="header-meta-info">
                <div class="header-search">
                    <form type="GET" action="http://kidolshop.click/search">
                        <input type="text" name="keyword" id="search-input" placeholder="Tìm kiếm sản phẩm "
                            autocomplete="off">
                        <button class="search-btn"><i class="icon-search"></i></button>
                    </form>
                </div>
            </div>

            <div class="site-main-nav">
                <nav class="site-nav">
                    <ul class="navbar-mobile-wrapper">
                        <li><a href="http://kidolshop.click/home">Trang chủ</a></li>
                        <li><a href="http://kidolshop.click/store">Cửa hàng</a></li>
                        <li>
                            <a href="#">Sản phẩm <span class="new">Mới</span></a>

                            <ul class="mega-sub-menu">
                                <li class="mega-dropdown">
                                    <a class="mega-title" href="#">Danh mục</a>

                                    <ul class="mega-item">
                                        <li><a
                                                href="http://kidolshop.click/store?show=all&amp;category=1&amp;sort_by=new">Quần
                                                Áo Nam</a></li>
                                        <li><a
                                                href="http://kidolshop.click/store?show=all&amp;category=2&amp;sort_by=new">Quần
                                                Áo Nữ</a></li>
                                        <li><a
                                                href="http://kidolshop.click/store?show=all&amp;category=3&amp;sort_by=new">Áo
                                                Khoác</a></li>
                                        <li><a
                                                href="http://kidolshop.click/store?show=all&amp;category=4&amp;sort_by=new">Phụ
                                                Kiện</a></li>
                                        <li><a
                                                href="http://kidolshop.click/store?show=all&amp;category=5&amp;sort_by=new">Giày
                                                Dép Nam</a></li>
                                        <li><a
                                                href="http://kidolshop.click/store?show=all&amp;category=6&amp;sort_by=new">Giày
                                                Dép Nữ</a></li>
                                        <li><a
                                                href="http://kidolshop.click/store?show=all&amp;category=7&amp;sort_by=new">Váy</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mega-dropdown">
                                    <a class="mega-title" href="#">Thương hiệu</a>

                                    <ul class="mega-item">
                                        <li><a
                                                href="http://kidolshop.click/store?show=all&amp;brand=1&amp;sort_by=new">LOVEKIDS</a>
                                        </li>
                                        <li><a
                                                href="http://kidolshop.click/store?show=all&amp;brand=2&amp;sort_by=new">Rabity
                                                Kids</a></li>
                                        <li><a
                                                href="http://kidolshop.click/store?show=all&amp;brand=3&amp;sort_by=new">ILABY</a>
                                        </li>
                                        <li><a
                                                href="http://kidolshop.click/store?show=all&amp;brand=4&amp;sort_by=new">AMILA</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mega-dropdown">
                                    <a class="mega-title" href="#">Danh mục khác</a>

                                    <ul class="mega-item">
                                        <li><a href="http://kidolshop.click/store?show=all&amp;sort_by=new">Sản phẩm
                                                mới</a></li>
                                        <li><a href="http://kidolshop.click/store?show=all&amp;sort_by=bestsellers">Sản
                                                phẩm bán chạy</a></li>
                                        <li><a href="http://kidolshop.click/store?show=all&amp;sort_by=featured">Sản
                                                phẩm nổi bật</a></li>
                                        <li><a href="http://kidolshop.click/store?show=all&amp;sort_by=sale">Sản phẩm
                                                đang SALE</a></li>
                                    </ul>
                                </li>
                                <!-- <li class="mega-dropdown">
                                    <a class="menu-banner" href="#">
                                        <img src="http://kidolshop.click/public/kidolshop/images/menu-banner.jpg" alt="">
                                    </a>
                                </li> -->
                            </ul>
                        </li>
                        <li><a href="http://kidolshop.click/blog">Tin tức</a></li>
                        <li><a href="http://kidolshop.click/about-us">Về chúng tôi</a></li>
                        <li><a href="http://kidolshop.click/contact">Liên hệ</a></li>
                    </ul>
                </nav>
            </div>

            <div class="header-social">
                <ul class="social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div>

        </div>
        <!--Header Mobile Menu End-->

        <div class="overlay"></div>
        <!--Overlay-->



        <!--Slider Start-->
        <div class="slider-area">
            <div class="swiper-container slider-active">
                <div class="swiper-wrapper">
                    <!--Single Slider Start-->
                    <div class="single-slider swiper-slide animation-style-01"
                        style="background-image: url('public/kidolshop/images/slider/KIDOLBanner.png');">
                        <div class="container">
                            <div class="slider-content">
                                <h5 class="sub-title">Nhập: <span class="text-primary">SALE100K</span> <br> Giảm 100K
                                    cho mọi đơn hàng</h5>
                                <h2 class="main-title">Ngày đặc biệt!</h2>
                                <p>Nhập: <span class="text-primary">SALE10</span> để được giảm 10%, số lượng có hạn!
                                </p>

                                <ul class="slider-btn">
                                    <li><a href="http://kidolshop.click/store" class="btn btn-round btn-primary">Bắt
                                            đầu mua sắm</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Single Slider End-->

                    <!--Single Slider Start-->
                    <div class="single-slider swiper-slide animation-style-01"
                        style="background-image: url('public/kidolshop/images/slider/KIDOLBanner2.png');">
                        <div class="container" style="text-align:right;">
                            <div class="slider-content">
                                <h5 class="sub-title sub-title-right">Nhập: <span class="text-info">SALE100K</span>
                                    <br> Giảm 100K cho mọi đơn hàng
                                </h5>
                                <h2 class="main-title">Ngày đặc biệt!</h2>
                                <p>Nhập: <span class="text-info">SALE10</span> để được giảm 10%, số lượng có hạn!</p>

                                <ul class="slider-btn">
                                    <li><a href="http://kidolshop.click/store" class="btn btn-round btn-primary">Bắt
                                            đầu mua sắm</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Single Slider End-->
                </div>
                <!--Swiper Wrapper End-->

                <!-- Add Arrows -->
                <div class="swiper-next"><i class="fa fa-angle-right"></i></div>
                <div class="swiper-prev"><i class="fa fa-angle-left"></i></div>

                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>

            </div>
            <!--Swiper Container End-->
        </div>
        <!--Slider End-->



        <!--Shipping Start-->
        <div class="shipping-area section-padding-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-shipping">
                            <div class="shipping-icon">
                                <img src="public/kidolshop/images/shipping-icon/Free-Delivery.png" alt="">
                            </div>
                            <div class="shipping-content">
                                <h5 class="title">Miễn Phí Vận Chuyển</h5>
                                <p>Giao hàng miễn phí cho tất cả các đơn đặt hàng trên 1.000.000đ</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-shipping">
                            <div class="shipping-icon">
                                <img src="public/kidolshop/images/shipping-icon/Online-Order.png" alt="">
                            </div>
                            <div class="shipping-content">
                                <h5 class="title">Đặt Hàng Online</h5>
                                <p>Đừng lo lắng, bạn có thể đặt hàng Trực tuyến trên Trang web của chúng tôi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-shipping">
                            <div class="shipping-icon">
                                <img src="public/kidolshop/images/shipping-icon/Freshness.png" alt="">
                            </div>
                            <div class="shipping-content">
                                <h5 class="title">Hiện Đại</h5>
                                <p>Cập nhật những sản phẩm mới nhất</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-shipping">
                            <div class="shipping-icon">
                                <img src="public/kidolshop/images/shipping-icon/Made-By-Artists.png" alt="">
                            </div>
                            <div class="shipping-content">
                                <h5 class="title">Hỗ Trợ 24/7</h5>
                                <p>Đội ngũ hỗ trợ trưc tuyến chuyên nghiệp</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Shipping End-->


        <!--Recommend Product Start-->
        <div class="new-product-area section-padding-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-9 col-sm-11">
                        <div class="section-title text-center">
                            <h2 class="title">Gợi Ý Cho Bạn</h2>
                            <p>A perfect blend of creativity, energy, communication, happiness and love. Let us arrange
                                a smile for you.</p>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="swiper-container product-active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/ao-so-mi-coc-tay-be-trai-trang-kem-chat-lieu-cotton-thoang-mat-cho-be-tu-8-12-tuoi-lovekids">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/a627.png"
                                                alt="">
                                        </a>


                                        <div class="product-countdown">
                                            <div data-countdown="2025-12-31 20:11:00"></div>
                                        </div>
                                        <span class="sticker-new label-sale">-20%</span>

                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="1" data-PriceNew="207200" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="1" id="1"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="1" data-tooltip="tooltip"
                                                        data-placement="left" title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="1" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/ao-so-mi-coc-tay-be-trai-trang-kem-chat-lieu-cotton-thoang-mat-cho-be-tu-8-12-tuoi-lovekids">Áo
                                                sơ mi cộc tay bé trai trắng, kem chất liệu Cotton thoáng mát cho bé từ
                                                8-12 tuổi LOVEKIDS</a></h4>
                                        <div class="price-box">
                                            <span class="old-price">259.000đ</span>
                                            <span class="current-price">207.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/ao-khoac-cardigan-be-trai-lovekids">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/a2618.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="46" data-PriceNew="329000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="3" id="46"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="46" data-tooltip="tooltip"
                                                        data-placement="left" title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="46" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/ao-khoac-cardigan-be-trai-lovekids">Áo
                                                khoác cardigan bé trai - Lovekids</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">329.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/ao-khoac-nhung-tam-tui-hop-be-trai-lovekids">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/a934.png"
                                                alt="">
                                        </a>


                                        <div class="product-countdown">
                                            <div data-countdown="2025-12-31 20:11:00"></div>
                                        </div>
                                        <span class="sticker-new label-sale">-20%</span>

                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="3" data-PriceNew="356000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="3" id="3"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="3" data-tooltip="tooltip"
                                                        data-placement="left" title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="3" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/ao-khoac-nhung-tam-tui-hop-be-trai-lovekids">Áo
                                                khoác nhung tăm túi hộp bé trai - Lovekids</a></h4>
                                        <div class="price-box">
                                            <span class="old-price">445.000đ</span>
                                            <span class="current-price">356.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/ao-khoac-dang-vest-mau-tron-be-trai-lovekids">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/a1333.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="4" data-PriceNew="509000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="3" id="4"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="4" data-tooltip="tooltip"
                                                        data-placement="left" title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="4" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/ao-khoac-dang-vest-mau-tron-be-trai-lovekids">Áo
                                                khoác dạng vest màu trơn bé trai - Lovekids</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">509.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/ao-sweater-amila-ke-soc-phong-cach-han-quoc-moi-cho-be-trai">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami1437.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="30" data-PriceNew="245000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="1" id="30"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="30" data-tooltip="tooltip"
                                                        data-placement="left" title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="30" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/ao-sweater-amila-ke-soc-phong-cach-han-quoc-moi-cho-be-trai">Áo
                                                sweater AMILA kẻ sọc phong cách Hàn Quốc mới cho bé trai</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">245.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/amila-ao-khoac-bong-chay-phong-cach-duong-pho-thoi-trang-xuan-thu-cho-be-trai-ao-khoac-cho-be-trai">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami1778.png"
                                                alt="">
                                        </a>


                                        <div class="product-countdown">
                                            <div data-countdown="2025-12-31 20:11:00"></div>
                                        </div>
                                        <span class="sticker-new label-sale">-20%</span>

                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="32" data-PriceNew="274400" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="3" id="32"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="32" data-tooltip="tooltip"
                                                        data-placement="left" title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="32" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/amila-ao-khoac-bong-chay-phong-cach-duong-pho-thoi-trang-xuan-thu-cho-be-trai-ao-khoac-cho-be-trai">AMILA
                                                Áo Khoác Bóng Chày Phong Cách Đường Phố Thời Trang Xuân Thu Cho Bé Trai
                                                áo khoác cho bé trai</a></h4>
                                        <div class="price-box">
                                            <span class="old-price">343.000đ</span>
                                            <span class="current-price">274.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/chan-vay-nhung-phoi-cuc-be-gai-lovekids">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/a147.png"
                                                alt="">
                                        </a>


                                        <div class="product-countdown">
                                            <div data-countdown="2025-12-31 20:11:00"></div>
                                        </div>
                                        <span class="sticker-new label-sale">-20%</span>

                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="2" data-PriceNew="207200" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="7" id="2"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="2" data-tooltip="tooltip"
                                                        data-placement="left" title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="2" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/chan-vay-nhung-phoi-cuc-be-gai-lovekids">Chân
                                                váy nhung phối cúc bé gái - Lovekids</a></h4>
                                        <div class="price-box">
                                            <span class="old-price">259.000đ</span>
                                            <span class="current-price">207.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/cardigan-premier-fabric-ke-ngang-be-gai-lovekids">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/a1945.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="22" data-PriceNew="319000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="3" id="22"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="22" data-tooltip="tooltip"
                                                        data-placement="left" title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="22" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/cardigan-premier-fabric-ke-ngang-be-gai-lovekids">Cardigan
                                                Premier Fabric kẻ ngang bé gái - Lovekids</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">319.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/giay-the-thao-mau-trang-co-thap-chong-mon-thoi-trang-xuan-thu-cho-be-trai-va-gai">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami1889.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="34" data-PriceNew="300000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="6" id="34"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="34" data-tooltip="tooltip"
                                                        data-placement="left" title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="34" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/giay-the-thao-mau-trang-co-thap-chong-mon-thoi-trang-xuan-thu-cho-be-trai-va-gai">Giày
                                                Thể Thao Màu Trắng Cổ Thấp Chống Mòn Thời Trang Xuân Thu Cho Bé Trai Và
                                                Gái</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">300.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/giay-bot-martin-amila-co-thap-phong-cach-anh-quoc-thoi-trang-ca-tinh-danh-cho-tre-em">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami2019.png"
                                                alt="">
                                        </a>


                                        <div class="product-countdown">
                                            <div data-countdown="2025-12-31 20:11:00"></div>
                                        </div>
                                        <span class="sticker-new label-sale">-20%</span>

                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="36" data-PriceNew="326400" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="6" id="36"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="36" data-tooltip="tooltip"
                                                        data-placement="left" title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="36" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/giay-bot-martin-amila-co-thap-phong-cach-anh-quoc-thoi-trang-ca-tinh-danh-cho-tre-em">Giày
                                                bốt martin AMILA cổ thấp phong cách Anh Quốc thời trang cá tính dành cho
                                                trẻ em</a></h4>
                                        <div class="price-box">
                                            <span class="old-price">408.000đ</span>
                                            <span class="current-price">326.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/vay-theu-hoa-coc-tay-phoi-tang-lovekids">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/a2241.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="23" data-PriceNew="435000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="7" id="23"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="23" data-tooltip="tooltip"
                                                        data-placement="left" title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="23" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/vay-theu-hoa-coc-tay-phoi-tang-lovekids">Váy
                                                thêu hoa cộc tay phối tầng - Lovekids</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">435.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/ao-hoodie-amila-dang-rong-hoa-tiet-hoat-hinh-phong-cach-han-quoc-cho-be-trai">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami749.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="26" data-PriceNew="300000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="3" id="26"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="26" data-tooltip="tooltip"
                                                        data-placement="left" title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="26" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/ao-hoodie-amila-dang-rong-hoa-tiet-hoat-hinh-phong-cach-han-quoc-cho-be-trai">Áo
                                                hoodie AMILA dáng rộng họa tiết hoạt hình phong cách Hàn Quốc cho bé
                                                trai</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">300.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/amila-giay-the-thao-phoi-luoi-thoang-khi-mem-mai-thoi-trang-xuan-thu-cho-be-trai">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami1139.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="28" data-PriceNew="250000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="5" id="28"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="28" data-tooltip="tooltip"
                                                        data-placement="left" title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="28" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/amila-giay-the-thao-phoi-luoi-thoang-khi-mem-mai-thoi-trang-xuan-thu-cho-be-trai">AMILA
                                                Giày Thể Thao Phối Lưới Thoáng Khí Mềm Mại Thời Trang Xuân Thu Cho Bé
                                                Trai</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">250.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/ao-khoac-amila-co-be-lot-nhung-day-dan-am-ap-thoi-trang-mua-dong-cho-be-gai">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami1658.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="31" data-PriceNew="315000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="3" id="31"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="31"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="31" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/ao-khoac-amila-co-be-lot-nhung-day-dan-am-ap-thoi-trang-mua-dong-cho-be-gai">Áo
                                                khoác AMILA cổ bẻ lót nhung dày dặn ấm áp thời trang mùa đông cho bé
                                                gái</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">315.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/ao-phong-tay-ngan-be-trai-hinh-khung-long-nang-dong-rabity-thun-mat-ben-chat-cotton-tham-hut-mo-hoi-mac-thu-dong-91155">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/rb178.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="11" data-PriceNew="173000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="1" id="11"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="11"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="11" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/ao-phong-tay-ngan-be-trai-hinh-khung-long-nang-dong-rabity-thun-mat-ben-chat-cotton-tham-hut-mo-hoi-mac-thu-dong-91155">Áo
                                                phông tay ngắn bé trai hình khủng long năng động Rabity thun mát bền
                                                chất cotton thấm hút mồ hôi mặc thu đông 91155</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">173.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/ao-thun-be-trai-rabity-phong-cotton-hinh-sieu-anh-hung-spiderman-tham-hut-mo-hoi-5536">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/rb497.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="12" data-PriceNew="120000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="1" id="12"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="12"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="12" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/ao-thun-be-trai-rabity-phong-cotton-hinh-sieu-anh-hung-spiderman-tham-hut-mo-hoi-5536">Áo
                                                thun bé trai Rabity phông cotton hình siêu anh hùng spiderman thấm hút
                                                mồ hôi 5536</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">120.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/ao-dai-cho-be-gai-ilaby-cach-tan-hoa-tiet-hoa-sen-tay-bong-chat-to-ong-mem-mai-mau-sac-nhe-lan-da-be-gai-[14ig1666h2ft]">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i158.png"
                                                alt="">
                                        </a>


                                        <div class="product-countdown">
                                            <div data-countdown="2025-12-31 20:11:00"></div>
                                        </div>
                                        <span class="sticker-new label-sale">-20%</span>

                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="13" data-PriceNew="319200" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="2" id="13"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="13"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="13" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/ao-dai-cho-be-gai-ilaby-cach-tan-hoa-tiet-hoa-sen-tay-bong-chat-to-ong-mem-mai-mau-sac-nhe-lan-da-be-gai-[14ig1666h2ft]">Áo
                                                dài cho bé gái ILABY cách tân họa tiết hoa sen tay bồng chất tơ óng mềm
                                                mại màu sắc nhẹ làn da bé gái [14IG1666H2FT]</a></h4>
                                        <div class="price-box">
                                            <span class="old-price">399.000đ</span>
                                            <span class="current-price">319.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/set-ao-in-van-may-kem-chan-vay-cho-be-gai-ilaby-chat-lieu-lua-mem-mai">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i462.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="14" data-PriceNew="320000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="2" id="14"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="14"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="14" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/set-ao-in-van-may-kem-chan-vay-cho-be-gai-ilaby-chat-lieu-lua-mem-mai">Set
                                                áo in vân mây kèm chân váy cho bé gái ILABY chất liệu lụa mềm mại</a>
                                        </h4>
                                        <div class="price-box">
                                            <span class="current-price">320.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/mu-coi-day-hinh-bong-hoa-cho-be-gai-rabity-mua-he-tre-em-5-7-tuoi-22026">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/rb784.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="15" data-PriceNew="85000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="4" id="15"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="15"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="15" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/mu-coi-day-hinh-bong-hoa-cho-be-gai-rabity-mua-he-tre-em-5-7-tuoi-22026">Mũ
                                                cói dây hình bông hoa cho bé gái Rabity mùa hè trẻ em 5-7 tuổi 22026</a>
                                        </h4>
                                        <div class="price-box">
                                            <span class="current-price">85.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/ao-thun-be-trai-dai-tay-rabity-co-tron-hinh-nguoi-nhen-spider-man">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/rb1058.png"
                                                alt="">
                                        </a>


                                        <div class="product-countdown">
                                            <div data-countdown="2025-12-31 20:11:00"></div>
                                        </div>
                                        <span class="sticker-new label-sale">-20%</span>

                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="16" data-PriceNew="95200" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="1" id="16"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="16"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="16" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/ao-thun-be-trai-dai-tay-rabity-co-tron-hinh-nguoi-nhen-spider-man">Áo
                                                thun bé trai dài tay RABITY cổ tròn hình người nhện Spider man</a></h4>
                                        <div class="price-box">
                                            <span class="old-price">119.000đ</span>
                                            <span class="current-price">95.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/mu-cho-be-ilaby-tron-tron-chat-lieu-bo-tho">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i791.png"
                                                alt="">
                                        </a>


                                        <div class="product-countdown">
                                            <div data-countdown="2025-12-31 20:11:00"></div>
                                        </div>
                                        <span class="sticker-new label-sale">-20%</span>

                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="17" data-PriceNew="55200" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="4" id="17"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="17"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="17" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/mu-cho-be-ilaby-tron-tron-chat-lieu-bo-tho">Mũ
                                                cho bé ILABY trơn tròn chất liệu bò thô</a></h4>
                                        <div class="price-box">
                                            <span class="old-price">69.000đ</span>
                                            <span class="current-price">55.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/ao-ni-be-trai-trai-ilaby-phoi-mau-mac-da-nguc-chat-lieu-ni-day-dep">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i1032.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="18" data-PriceNew="225000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="1" id="18"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="18"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="18" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/ao-ni-be-trai-trai-ilaby-phoi-mau-mac-da-nguc-chat-lieu-ni-day-dep">Áo
                                                nỉ bé trai trai ILABY phối màu mác da ngực chất liệu nỉ dày đẹp</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">225.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/set-ao-yem-be-gai-ilaby-theu-kem-quan-organza-chat-lieu-lua-mem-mai">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i1358.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="19" data-PriceNew="349000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="2" id="19"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="19"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="19" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/set-ao-yem-be-gai-ilaby-theu-kem-quan-organza-chat-lieu-lua-mem-mai">Set
                                                áo yếm bé gái ILABY thêu kèm quần organza chất liệu lụa mềm mại</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">349.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/ao-vest-cho-be-trai-ilaby-chat-lieu-nhung-tam">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i1666.png"
                                                alt="">
                                        </a>


                                        <div class="product-countdown">
                                            <div data-countdown="2025-12-31 20:11:00"></div>
                                        </div>
                                        <span class="sticker-new label-sale">-20%</span>

                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="20" data-PriceNew="319200" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="3" id="20"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="20"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="20" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/ao-vest-cho-be-trai-ilaby-chat-lieu-nhung-tam">Áo
                                                vest cho bé trai ILABY chất liệu nhung tăm</a></h4>
                                        <div class="price-box">
                                            <span class="old-price">399.000đ</span>
                                            <span class="current-price">319.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/vay-ni-dai-tay-dang-suong-lk0283-lovekids">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/a1682.png"
                                                alt="">
                                        </a>


                                        <div class="product-countdown">
                                            <div data-countdown="2025-12-31 20:11:00"></div>
                                        </div>
                                        <span class="sticker-new label-sale">-20%</span>

                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="21" data-PriceNew="172000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="7" id="21"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="21"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="21" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/vay-ni-dai-tay-dang-suong-lk0283-lovekids">Váy
                                                nỉ dài tay dáng suông LK0283 - Lovekids</a></h4>
                                        <div class="price-box">
                                            <span class="old-price">215.000đ</span>
                                            <span class="current-price">172.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/giay-the-thao-amila-thoang-khi-thoi-trang-nang-dong-co-be">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami135.png"
                                                alt="">
                                        </a>


                                        <div class="product-countdown">
                                            <div data-countdown="2025-12-31 20:11:00"></div>
                                        </div>
                                        <span class="sticker-new label-sale">-20%</span>

                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="24" data-PriceNew="252000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="6" id="24"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="24"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="24" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/giay-the-thao-amila-thoang-khi-thoi-trang-nang-dong-co-be">Giày
                                                thể thao AMILA thoáng khí thời trang năng động co bé</a></h4>
                                        <div class="price-box">
                                            <span class="old-price">315.000đ</span>
                                            <span class="current-price">252.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/mu-trum-tai-amila-chat-lieu-day-dan-am-ap-de-thuong-cho-be-tuy-chon-mau-sac">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami46.png"
                                                alt="">
                                        </a>


                                        <div class="product-countdown">
                                            <div data-countdown="2025-12-31 20:11:00"></div>
                                        </div>
                                        <span class="sticker-new label-sale">-20%</span>

                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="25" data-PriceNew="56000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="4" id="25"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="25"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="25" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/mu-trum-tai-amila-chat-lieu-day-dan-am-ap-de-thuong-cho-be-tuy-chon-mau-sac">Mũ
                                                trùm tai AMILA chất liệu dày dặn ấm áp dễ thương cho bé tùy chọn màu
                                                sắc</a></h4>
                                        <div class="price-box">
                                            <span class="old-price">70.000đ</span>
                                            <span class="current-price">56.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/ao-kieu-tay-dai-amila-co-lo-phoi-ren-phong-cach-phuong-tay-cho-be-gai">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami1013.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="27" data-PriceNew="200000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="2" id="27"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="27"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="27" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/ao-kieu-tay-dai-amila-co-lo-phoi-ren-phong-cach-phuong-tay-cho-be-gai">Áo
                                                kiểu tay dài AMILA cổ lọ phối ren phong cách phương Tây cho bé gái</a>
                                        </h4>
                                        <div class="price-box">
                                            <span class="current-price">200.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/mu-trum-dau-amila-det-thiet-ke-tai-gau-dang-yeu-giu-am-danh-cho-be-gai">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami1284.png"
                                                alt="">
                                        </a>


                                        <div class="product-countdown">
                                            <div data-countdown="2025-12-31 20:11:00"></div>
                                        </div>
                                        <span class="sticker-new label-sale">-20%</span>

                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="29" data-PriceNew="64000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="4" id="29"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="29"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="29" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/mu-trum-dau-amila-det-thiet-ke-tai-gau-dang-yeu-giu-am-danh-cho-be-gai">Mũ
                                                trùm đầu AMILA dệt thiết kế tai gấu đáng yêu giữ ấm dành cho bé gái</a>
                                        </h4>
                                        <div class="price-box">
                                            <span class="old-price">80.000đ</span>
                                            <span class="current-price">64.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/amila-giay-the-thao-de-mem-chong-truot-thoang-khi-danh-cho-be-trai-gai">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami1846.png"
                                                alt="">
                                        </a>


                                        <div class="product-countdown">
                                            <div data-countdown="2025-12-31 20:11:00"></div>
                                        </div>
                                        <span class="sticker-new label-sale">-20%</span>

                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="33" data-PriceNew="264000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="5" id="33"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="33"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="33" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/amila-giay-the-thao-de-mem-chong-truot-thoang-khi-danh-cho-be-trai-gai">AMILA
                                                Giày Thể Thao Đế Mềm Chống Trượt Thoáng Khí Dành Cho Bé Trai Gái</a>
                                        </h4>
                                        <div class="price-box">
                                            <span class="old-price">330.000đ</span>
                                            <span class="current-price">264.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/ao-sweater-amila-thoi-trang-xuan-thu-ca-tinh-cho-be-trai">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami1997.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="35" data-PriceNew="220000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="1" id="35"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="35"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="35" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/ao-sweater-amila-thoi-trang-xuan-thu-ca-tinh-cho-be-trai">Áo
                                                sweater AMILA thời trang xuân thu cá tính cho bé trai</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">220.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/amila-giay-the-thao-phoi-luoi-thoang-khi-thoi-trang-cho-be-trai">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami2183.png"
                                                alt="">
                                        </a>


                                        <div class="product-countdown">
                                            <div data-countdown="2025-12-31 20:11:00"></div>
                                        </div>
                                        <span class="sticker-new label-sale">-20%</span>

                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="37" data-PriceNew="264000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="5" id="37"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="37"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="37" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/amila-giay-the-thao-phoi-luoi-thoang-khi-thoi-trang-cho-be-trai">AMILA
                                                Giày Thể Thao Phối Lưới Thoáng Khí Thời Trang Cho Bé Trai</a></h4>
                                        <div class="price-box">
                                            <span class="old-price">330.000đ</span>
                                            <span class="current-price">264.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/goi-nhoi-bong-giu-am-tay-hinh-meo-doodle-de-thuong">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami2280.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="38" data-PriceNew="300000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="4" id="38"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="38"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="38" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/goi-nhoi-bong-giu-am-tay-hinh-meo-doodle-de-thuong">Gối
                                                Nhồi Bông Giữ Ấm Tay Hình Mèo Doodle Dễ Thương</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">300.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/kep-toc-no-amila-de-thuong-cho-be-gai">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami234.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="39" data-PriceNew="31000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="4" id="39"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="39"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="39" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/kep-toc-no-amila-de-thuong-cho-be-gai">Kẹp
                                                tóc nơ AMILA dễ thương cho bé gái</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">31.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/mu-det-kim-day-dan-giu-am-mua-dong-danh-cho-be-trai-va-be-gai-6-thang-2-tuoi">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami2457.png"
                                                alt="">
                                        </a>


                                        <div class="product-countdown">
                                            <div data-countdown="2025-12-31 20:11:00"></div>
                                        </div>
                                        <span class="sticker-new label-sale">-20%</span>

                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="40" data-PriceNew="48000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="4" id="40"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="40"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="40" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/mu-det-kim-day-dan-giu-am-mua-dong-danh-cho-be-trai-va-be-gai-6-thang-2-tuoi">Mũ
                                                Dệt Kim Dày Dặn Giữ Ấm Mùa Đông Dành Cho Bé Trai Và Bé Gái (6 Tháng-2
                                                Tuổi)</a></h4>
                                        <div class="price-box">
                                            <span class="old-price">60.000đ</span>
                                            <span class="current-price">48.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/ao-so-mi-dai-tay-be-trai-rabity-92406">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/rb1364.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="41" data-PriceNew="249000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="1" id="41"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="41"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="41" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/ao-so-mi-dai-tay-be-trai-rabity-92406">Áo
                                                sơ mi dài tay bé trai Rabity 92406</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">249.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/dam-vay-tho-phoi-ren-cho-be-gai-rabity-vay-tre-em-hoa-tiet-elsa-de-thuong-mac-di-hoc-di-choi">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/rb1450.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="42" data-PriceNew="299000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="7" id="42"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="42"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="42" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/dam-vay-tho-phoi-ren-cho-be-gai-rabity-vay-tre-em-hoa-tiet-elsa-de-thuong-mac-di-hoc-di-choi">Đầm
                                                váy thô phối ren cho bé gái Rabity váy trẻ em họa tiết Elsa dễ thương
                                                mặc đi học đi chơi</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">299.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/quan-sooc-ngan-be-gai-chat-cotton-rabity-nang-dong-thoai-mai">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/rb1599.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="43" data-PriceNew="169000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="2" id="43"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="43"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="43" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/quan-sooc-ngan-be-gai-chat-cotton-rabity-nang-dong-thoai-mai">Quần
                                                sooc ngắn bé gái chất cotton Rabity năng động thoải mái</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">169.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/ao-so-mi-be-trai-rabity-dai-tay-chat-lieu-cotton">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/rb1672.png"
                                                alt="">
                                        </a>


                                        <div class="product-countdown">
                                            <div data-countdown="2025-12-31 20:11:00"></div>
                                        </div>
                                        <span class="sticker-new label-sale">-20%</span>

                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="44" data-PriceNew="183200" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="1" id="44"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="44"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="44" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/ao-so-mi-be-trai-rabity-dai-tay-chat-lieu-cotton">Áo
                                                sơ mi bé trai Rabity dài tay chất liệu cotton</a></h4>
                                        <div class="price-box">
                                            <span class="old-price">229.000đ</span>
                                            <span class="current-price">183.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/vay-be-gai-tay-canh-doi-mng20dr009-lovekids">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/a2517.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="45" data-PriceNew="699000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="7" id="45"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="45"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="45" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/vay-be-gai-tay-canh-doi-mng20dr009-lovekids">Váy
                                                bé gái tay cánh dơi MNG20DR009 - Lovekids</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">699.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/ao-blouse-dai-tay-hoa-nhi-lovekids">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/a2724.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="47" data-PriceNew="269000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="2" id="47"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="47"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="47" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/ao-blouse-dai-tay-hoa-nhi-lovekids">Áo
                                                blouse dài tay hoa nhí - Lovekids</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">269.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/quan-nhung-be-trai-phoi-soc-lovekids">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/a284.png"
                                                alt="">
                                        </a>


                                        <div class="product-countdown">
                                            <div data-countdown="2025-12-31 20:11:00"></div>
                                        </div>
                                        <span class="sticker-new label-sale">-20%</span>

                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="48" data-PriceNew="207200" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="1" id="48"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="48"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="48" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/quan-nhung-be-trai-phoi-soc-lovekids">Quần
                                                nhung bé trai phối sọc - Lovekids</a></h4>
                                        <div class="price-box">
                                            <span class="old-price">259.000đ</span>
                                            <span class="current-price">207.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/quan-dui-cho-be-trai-ilaby-thoang-mat-mua-he">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i1988.png"
                                                alt="">
                                        </a>


                                        <div class="product-countdown">
                                            <div data-countdown="2025-12-31 20:11:00"></div>
                                        </div>
                                        <span class="sticker-new label-sale">-20%</span>

                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="49" data-PriceNew="120000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="1" id="49"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="49"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="49" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/quan-dui-cho-be-trai-ilaby-thoang-mat-mua-he">Quần
                                                đùi cho bé trai ILABY thoáng mát mùa hè</a></h4>
                                        <div class="price-box">
                                            <span class="old-price">150.000đ</span>
                                            <span class="current-price">120.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/quan-short-be-trai-ilaby-phoi-tui-gio-chat-lieu-kaki">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i2074.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="50" data-PriceNew="179000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="1" id="50"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="50"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="50" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/quan-short-be-trai-ilaby-phoi-tui-gio-chat-lieu-kaki">Quần
                                                short bé trai ILABY phối túi gió chất liệu kaki</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">179.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/quan-dai-be-trai-ilaby-can-vai-xoay-canh-chat-nhung-tam-to">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i2122.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="51" data-PriceNew="219000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="1" id="51"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="51"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="51" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/quan-dai-be-trai-ilaby-can-vai-xoay-canh-chat-nhung-tam-to">Quần
                                                dài bé trai ILABY can vải xoay canh chất nhung tăm to</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">219.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/bom-be-gai-ilaby-chat-lieu-nhua-no-vai-gam">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i2273.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="52" data-PriceNew="29000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="4" id="52"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="52"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="52" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/bom-be-gai-ilaby-chat-lieu-nhua-no-vai-gam">Bờm
                                                bé gái ILABY chất liệu nhựa nơ vải gấm</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">29.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/vay-cong-chua-be-gai-ilaby-ba-tang-co-no-lung-chat-lieu-gam-cao-cap">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i2323.png"
                                                alt="">
                                        </a>


                                        <div class="product-countdown">
                                            <div data-countdown="2025-12-31 20:11:00"></div>
                                        </div>
                                        <span class="sticker-new label-sale">-20%</span>

                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="53" data-PriceNew="383200" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="7" id="53"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="53"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="53" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/vay-cong-chua-be-gai-ilaby-ba-tang-co-no-lung-chat-lieu-gam-cao-cap">Váy
                                                công chúa bé gái ILABY ba tầng có nơ lưng chất liệu gấm cao cấp</a></h4>
                                        <div class="price-box">
                                            <span class="old-price">479.000đ</span>
                                            <span class="current-price">383.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/vay-cong-chua-be-gai-ilaby-canh-tien-duoi-ca-hai-tang-chat-lieu-to-kem-lot-cao-cap-mem-mai-lan-da-be">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i245.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="54" data-PriceNew="379000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="7" id="54"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="54"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="54" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/vay-cong-chua-be-gai-ilaby-canh-tien-duoi-ca-hai-tang-chat-lieu-to-kem-lot-cao-cap-mem-mai-lan-da-be">Váy
                                                công chúa bé gái ILABY cánh tiên đuôi cá hai tầng chất liệu tơ kèm lót
                                                cao cấp mềm mại làn da bé</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">379.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/set-chu-cuoi-ao-co-v-co-dai-be-trai-ilaby-chat-lieu-lua-mem-mai">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i2511.png"
                                                alt="">
                                        </a>



                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="55" data-PriceNew="379000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="1" id="55"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="55"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="55" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/set-chu-cuoi-ao-co-v-co-dai-be-trai-ilaby-chat-lieu-lua-mem-mai">Set
                                                chú cuội áo cổ V có đai bé trai ILABY chất liệu lụa mềm mại</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">379.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a
                                            href="http://kidolshop.click/shop-single/quan-short-be-trai-ilaby-vien-chi-chap-doc-than-chat-lieu-bo">
                                            <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i265.png"
                                                alt="">
                                        </a>


                                        <div class="product-countdown">
                                            <div data-countdown="2025-12-31 20:11:00"></div>
                                        </div>
                                        <span class="sticker-new label-sale">-20%</span>

                                        <div class="action-links">
                                            <ul>
                                                <!-- <li><a class="AddToCart-Single" data-id="56" data-PriceNew="175200" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                <li><a class="add-to-compare" data-idcat="1" id="56"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="So sánh"><i class="icon-sliders"></i></a></li>
                                                <li><a class="add-to-wishlist" data-id="56"
                                                        data-tooltip="tooltip" data-placement="left"
                                                        title="Thêm vào danh sách yêu thích"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a class="quick-view-pd" data-id="56" data-tooltip="tooltip"
                                                        data-placement="left" title="Xem nhanh"><i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <!-- <ul class="rating">
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                    </ul> -->
                                        <h4 class="product-name"><a
                                                href="http://kidolshop.click/shop-single/quan-short-be-trai-ilaby-vien-chi-chap-doc-than-chat-lieu-bo">Quần
                                                short bé trai ILABY viền chỉ chập dọc thân chất liệu bò</a></h4>
                                        <div class="price-box">
                                            <span class="old-price">219.000đ</span>
                                            <span class="current-price">175.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add Arrows -->
                        <div class="swiper-next"><i class="fa fa-angle-right"></i></div>
                        <div class="swiper-prev"><i class="fa fa-angle-left"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!--Recommend Product End-->


        <!--New Product Start-->
        <div class="new-product-area section-padding-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-9 col-sm-11">
                        <div class="section-title text-center">
                            <h2 class="title">Sản Phẩm Mới</h2>
                            <p>A perfect blend of creativity, energy, communication, happiness and love. Let us arrange
                                a smile for you.</p>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="swiper-container product-active">
                        <div class="swiper-wrapper">
                        </div>

                        <!-- Add Arrows -->
                        <div class="swiper-next"><i class="fa fa-angle-right"></i></div>
                        <div class="swiper-prev"><i class="fa fa-angle-left"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!--New Product End-->

        <!--About Start-->
        <div class="about-area section-padding-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="public/kidolshop/images/banner/banner_home.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h2 class="title">Cùng bé đón gió mùa về với những ưu đãi hấp dẫn.</h2>
                            <p>Các mã giảm giá hiện có trên cửa hàng:</p>
                            <ul>
                                <li> SALE100K: Giảm 100K trên tổng giá trị đơn hàng. </li>
                                <li> SALE10: Giảm 10% trên tổng giá trị đơn hàng. </li>
                            </ul>
                            <div class="about-btn">
                                <a href="http://kidolshop.click/store" class="btn btn-primary btn-round">Mua
                                    Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--About End-->



        <!--New Product Start-->
        <div class="features-product-area section-padding-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-9 col-sm-11">
                        <div class="section-title text-center">
                            <h2 class="title">Sản Phẩm</h2>
                            <p>A perfect blend of creativity, energy, communication, happiness and love. Let us arrange
                                a smile for you.</p>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-tab-menu">
                        <ul class="nav justify-content-center" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#tab3" role="tab">Bán chạy</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab2" role="tab">Nổi bật</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab1" role="tab">Đang Sale</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content product-items-tab">
                        <div class="tab-pane fade show active" id="tab3" role="tabpanel">
                            <div class="swiper-container product-active">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/ao-so-mi-coc-tay-be-trai-trang-kem-chat-lieu-cotton-thoang-mat-cho-be-tu-8-12-tuoi-lovekids">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/a627.png"
                                                        alt="">
                                                </a>


                                                <div class="product-countdown">
                                                    <div data-countdown="2025-12-31 20:11:00"></div>
                                                </div>
                                                <span class="sticker-new label-sale">-20%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="1" data-PriceNew="207200" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="1"
                                                                id="1" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="1"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="1"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/ao-so-mi-coc-tay-be-trai-trang-kem-chat-lieu-cotton-thoang-mat-cho-be-tu-8-12-tuoi-lovekids">Áo
                                                        sơ mi cộc tay bé trai trắng, kem chất liệu Cotton thoáng mát cho
                                                        bé từ 8-12 tuổi LOVEKIDS</a></h4>
                                                <div class="price-box">
                                                    <span class="old-price">259.000đ</span>
                                                    <span class="current-price">207.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/ao-khoac-cardigan-be-trai-lovekids">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/a2618.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="46" data-PriceNew="329000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="3"
                                                                id="46" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="46"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="46"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/ao-khoac-cardigan-be-trai-lovekids">Áo
                                                        khoác cardigan bé trai - Lovekids</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">329.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/ao-khoac-nhung-tam-tui-hop-be-trai-lovekids">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/a934.png"
                                                        alt="">
                                                </a>


                                                <div class="product-countdown">
                                                    <div data-countdown="2025-12-31 20:11:00"></div>
                                                </div>
                                                <span class="sticker-new label-sale">-20%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="3" data-PriceNew="356000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="3"
                                                                id="3" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="3"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="3"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/ao-khoac-nhung-tam-tui-hop-be-trai-lovekids">Áo
                                                        khoác nhung tăm túi hộp bé trai - Lovekids</a></h4>
                                                <div class="price-box">
                                                    <span class="old-price">445.000đ</span>
                                                    <span class="current-price">356.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/ao-khoac-dang-vest-mau-tron-be-trai-lovekids">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/a1333.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="4" data-PriceNew="509000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="3"
                                                                id="4" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="4"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="4"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/ao-khoac-dang-vest-mau-tron-be-trai-lovekids">Áo
                                                        khoác dạng vest màu trơn bé trai - Lovekids</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">509.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/ao-sweater-amila-ke-soc-phong-cach-han-quoc-moi-cho-be-trai">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami1437.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="30" data-PriceNew="245000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="1"
                                                                id="30" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="30"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="30"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/ao-sweater-amila-ke-soc-phong-cach-han-quoc-moi-cho-be-trai">Áo
                                                        sweater AMILA kẻ sọc phong cách Hàn Quốc mới cho bé trai</a>
                                                </h4>
                                                <div class="price-box">
                                                    <span class="current-price">245.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/amila-ao-khoac-bong-chay-phong-cach-duong-pho-thoi-trang-xuan-thu-cho-be-trai-ao-khoac-cho-be-trai">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami1778.png"
                                                        alt="">
                                                </a>


                                                <div class="product-countdown">
                                                    <div data-countdown="2025-12-31 20:11:00"></div>
                                                </div>
                                                <span class="sticker-new label-sale">-20%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="32" data-PriceNew="274400" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="3"
                                                                id="32" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="32"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="32"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/amila-ao-khoac-bong-chay-phong-cach-duong-pho-thoi-trang-xuan-thu-cho-be-trai-ao-khoac-cho-be-trai">AMILA
                                                        Áo Khoác Bóng Chày Phong Cách Đường Phố Thời Trang Xuân Thu Cho
                                                        Bé Trai áo khoác cho bé trai</a></h4>
                                                <div class="price-box">
                                                    <span class="old-price">343.000đ</span>
                                                    <span class="current-price">274.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/chan-vay-nhung-phoi-cuc-be-gai-lovekids">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/a147.png"
                                                        alt="">
                                                </a>


                                                <div class="product-countdown">
                                                    <div data-countdown="2025-12-31 20:11:00"></div>
                                                </div>
                                                <span class="sticker-new label-sale">-20%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="2" data-PriceNew="207200" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="7"
                                                                id="2" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="2"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="2"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/chan-vay-nhung-phoi-cuc-be-gai-lovekids">Chân
                                                        váy nhung phối cúc bé gái - Lovekids</a></h4>
                                                <div class="price-box">
                                                    <span class="old-price">259.000đ</span>
                                                    <span class="current-price">207.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/cardigan-premier-fabric-ke-ngang-be-gai-lovekids">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/a1945.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="22" data-PriceNew="319000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="3"
                                                                id="22" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="22"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="22"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/cardigan-premier-fabric-ke-ngang-be-gai-lovekids">Cardigan
                                                        Premier Fabric kẻ ngang bé gái - Lovekids</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">319.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/giay-the-thao-mau-trang-co-thap-chong-mon-thoi-trang-xuan-thu-cho-be-trai-va-gai">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami1889.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="34" data-PriceNew="300000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="6"
                                                                id="34" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="34"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="34"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/giay-the-thao-mau-trang-co-thap-chong-mon-thoi-trang-xuan-thu-cho-be-trai-va-gai">Giày
                                                        Thể Thao Màu Trắng Cổ Thấp Chống Mòn Thời Trang Xuân Thu Cho Bé
                                                        Trai Và Gái</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">300.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/giay-bot-martin-amila-co-thap-phong-cach-anh-quoc-thoi-trang-ca-tinh-danh-cho-tre-em">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami2019.png"
                                                        alt="">
                                                </a>


                                                <div class="product-countdown">
                                                    <div data-countdown="2025-12-31 20:11:00"></div>
                                                </div>
                                                <span class="sticker-new label-sale">-20%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="36" data-PriceNew="326400" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="6"
                                                                id="36" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="36"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="36"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/giay-bot-martin-amila-co-thap-phong-cach-anh-quoc-thoi-trang-ca-tinh-danh-cho-tre-em">Giày
                                                        bốt martin AMILA cổ thấp phong cách Anh Quốc thời trang cá tính
                                                        dành cho trẻ em</a></h4>
                                                <div class="price-box">
                                                    <span class="old-price">408.000đ</span>
                                                    <span class="current-price">326.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/vay-theu-hoa-coc-tay-phoi-tang-lovekids">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/a2241.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="23" data-PriceNew="435000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="7"
                                                                id="23" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="23"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="23"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/vay-theu-hoa-coc-tay-phoi-tang-lovekids">Váy
                                                        thêu hoa cộc tay phối tầng - Lovekids</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">435.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/ao-hoodie-amila-dang-rong-hoa-tiet-hoat-hinh-phong-cach-han-quoc-cho-be-trai">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami749.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="26" data-PriceNew="300000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="3"
                                                                id="26" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="26"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="26"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/ao-hoodie-amila-dang-rong-hoa-tiet-hoat-hinh-phong-cach-han-quoc-cho-be-trai">Áo
                                                        hoodie AMILA dáng rộng họa tiết hoạt hình phong cách Hàn Quốc
                                                        cho bé trai</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">300.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/amila-giay-the-thao-phoi-luoi-thoang-khi-mem-mai-thoi-trang-xuan-thu-cho-be-trai">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami1139.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="28" data-PriceNew="250000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="5"
                                                                id="28" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="28"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="28"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/amila-giay-the-thao-phoi-luoi-thoang-khi-mem-mai-thoi-trang-xuan-thu-cho-be-trai">AMILA
                                                        Giày Thể Thao Phối Lưới Thoáng Khí Mềm Mại Thời Trang Xuân Thu
                                                        Cho Bé Trai</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">250.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/ao-khoac-amila-co-be-lot-nhung-day-dan-am-ap-thoi-trang-mua-dong-cho-be-gai">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami1658.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="31" data-PriceNew="315000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="3"
                                                                id="31" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="31"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="31"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/ao-khoac-amila-co-be-lot-nhung-day-dan-am-ap-thoi-trang-mua-dong-cho-be-gai">Áo
                                                        khoác AMILA cổ bẻ lót nhung dày dặn ấm áp thời trang mùa đông
                                                        cho bé gái</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">315.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/ao-phong-tay-ngan-be-trai-hinh-khung-long-nang-dong-rabity-thun-mat-ben-chat-cotton-tham-hut-mo-hoi-mac-thu-dong-91155">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/rb178.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="11" data-PriceNew="173000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="1"
                                                                id="11" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="11"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="11"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/ao-phong-tay-ngan-be-trai-hinh-khung-long-nang-dong-rabity-thun-mat-ben-chat-cotton-tham-hut-mo-hoi-mac-thu-dong-91155">Áo
                                                        phông tay ngắn bé trai hình khủng long năng động Rabity thun mát
                                                        bền chất cotton thấm hút mồ hôi mặc thu đông 91155</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">173.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/ao-thun-be-trai-rabity-phong-cotton-hinh-sieu-anh-hung-spiderman-tham-hut-mo-hoi-5536">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/rb497.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="12" data-PriceNew="120000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="1"
                                                                id="12" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="12"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="12"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/ao-thun-be-trai-rabity-phong-cotton-hinh-sieu-anh-hung-spiderman-tham-hut-mo-hoi-5536">Áo
                                                        thun bé trai Rabity phông cotton hình siêu anh hùng spiderman
                                                        thấm hút mồ hôi 5536</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">120.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/ao-dai-cho-be-gai-ilaby-cach-tan-hoa-tiet-hoa-sen-tay-bong-chat-to-ong-mem-mai-mau-sac-nhe-lan-da-be-gai-[14ig1666h2ft]">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i158.png"
                                                        alt="">
                                                </a>


                                                <div class="product-countdown">
                                                    <div data-countdown="2025-12-31 20:11:00"></div>
                                                </div>
                                                <span class="sticker-new label-sale">-20%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="13" data-PriceNew="319200" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="2"
                                                                id="13" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="13"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="13"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/ao-dai-cho-be-gai-ilaby-cach-tan-hoa-tiet-hoa-sen-tay-bong-chat-to-ong-mem-mai-mau-sac-nhe-lan-da-be-gai-[14ig1666h2ft]">Áo
                                                        dài cho bé gái ILABY cách tân họa tiết hoa sen tay bồng chất tơ
                                                        óng mềm mại màu sắc nhẹ làn da bé gái [14IG1666H2FT]</a></h4>
                                                <div class="price-box">
                                                    <span class="old-price">399.000đ</span>
                                                    <span class="current-price">319.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/set-ao-in-van-may-kem-chan-vay-cho-be-gai-ilaby-chat-lieu-lua-mem-mai">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i462.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="14" data-PriceNew="320000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="2"
                                                                id="14" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="14"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="14"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/set-ao-in-van-may-kem-chan-vay-cho-be-gai-ilaby-chat-lieu-lua-mem-mai">Set
                                                        áo in vân mây kèm chân váy cho bé gái ILABY chất liệu lụa mềm
                                                        mại</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">320.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/mu-coi-day-hinh-bong-hoa-cho-be-gai-rabity-mua-he-tre-em-5-7-tuoi-22026">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/rb784.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="15" data-PriceNew="85000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="4"
                                                                id="15" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="15"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="15"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/mu-coi-day-hinh-bong-hoa-cho-be-gai-rabity-mua-he-tre-em-5-7-tuoi-22026">Mũ
                                                        cói dây hình bông hoa cho bé gái Rabity mùa hè trẻ em 5-7 tuổi
                                                        22026</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">85.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/ao-thun-be-trai-dai-tay-rabity-co-tron-hinh-nguoi-nhen-spider-man">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/rb1058.png"
                                                        alt="">
                                                </a>


                                                <div class="product-countdown">
                                                    <div data-countdown="2025-12-31 20:11:00"></div>
                                                </div>
                                                <span class="sticker-new label-sale">-20%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="16" data-PriceNew="95200" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="1"
                                                                id="16" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="16"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="16"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/ao-thun-be-trai-dai-tay-rabity-co-tron-hinh-nguoi-nhen-spider-man">Áo
                                                        thun bé trai dài tay RABITY cổ tròn hình người nhện Spider
                                                        man</a></h4>
                                                <div class="price-box">
                                                    <span class="old-price">119.000đ</span>
                                                    <span class="current-price">95.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/mu-cho-be-ilaby-tron-tron-chat-lieu-bo-tho">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i791.png"
                                                        alt="">
                                                </a>


                                                <div class="product-countdown">
                                                    <div data-countdown="2025-12-31 20:11:00"></div>
                                                </div>
                                                <span class="sticker-new label-sale">-20%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="17" data-PriceNew="55200" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="4"
                                                                id="17" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="17"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="17"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/mu-cho-be-ilaby-tron-tron-chat-lieu-bo-tho">Mũ
                                                        cho bé ILABY trơn tròn chất liệu bò thô</a></h4>
                                                <div class="price-box">
                                                    <span class="old-price">69.000đ</span>
                                                    <span class="current-price">55.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/ao-ni-be-trai-trai-ilaby-phoi-mau-mac-da-nguc-chat-lieu-ni-day-dep">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i1032.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="18" data-PriceNew="225000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="1"
                                                                id="18" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="18"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="18"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/ao-ni-be-trai-trai-ilaby-phoi-mau-mac-da-nguc-chat-lieu-ni-day-dep">Áo
                                                        nỉ bé trai trai ILABY phối màu mác da ngực chất liệu nỉ dày
                                                        đẹp</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">225.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/set-ao-yem-be-gai-ilaby-theu-kem-quan-organza-chat-lieu-lua-mem-mai">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i1358.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="19" data-PriceNew="349000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="2"
                                                                id="19" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="19"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="19"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/set-ao-yem-be-gai-ilaby-theu-kem-quan-organza-chat-lieu-lua-mem-mai">Set
                                                        áo yếm bé gái ILABY thêu kèm quần organza chất liệu lụa mềm
                                                        mại</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">349.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/ao-vest-cho-be-trai-ilaby-chat-lieu-nhung-tam">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i1666.png"
                                                        alt="">
                                                </a>


                                                <div class="product-countdown">
                                                    <div data-countdown="2025-12-31 20:11:00"></div>
                                                </div>
                                                <span class="sticker-new label-sale">-20%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="20" data-PriceNew="319200" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="3"
                                                                id="20" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="20"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="20"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/ao-vest-cho-be-trai-ilaby-chat-lieu-nhung-tam">Áo
                                                        vest cho bé trai ILABY chất liệu nhung tăm</a></h4>
                                                <div class="price-box">
                                                    <span class="old-price">399.000đ</span>
                                                    <span class="current-price">319.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/vay-ni-dai-tay-dang-suong-lk0283-lovekids">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/a1682.png"
                                                        alt="">
                                                </a>


                                                <div class="product-countdown">
                                                    <div data-countdown="2025-12-31 20:11:00"></div>
                                                </div>
                                                <span class="sticker-new label-sale">-20%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="21" data-PriceNew="172000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="7"
                                                                id="21" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="21"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="21"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/vay-ni-dai-tay-dang-suong-lk0283-lovekids">Váy
                                                        nỉ dài tay dáng suông LK0283 - Lovekids</a></h4>
                                                <div class="price-box">
                                                    <span class="old-price">215.000đ</span>
                                                    <span class="current-price">172.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/giay-the-thao-amila-thoang-khi-thoi-trang-nang-dong-co-be">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami135.png"
                                                        alt="">
                                                </a>


                                                <div class="product-countdown">
                                                    <div data-countdown="2025-12-31 20:11:00"></div>
                                                </div>
                                                <span class="sticker-new label-sale">-20%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="24" data-PriceNew="252000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="6"
                                                                id="24" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="24"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="24"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/giay-the-thao-amila-thoang-khi-thoi-trang-nang-dong-co-be">Giày
                                                        thể thao AMILA thoáng khí thời trang năng động co bé</a></h4>
                                                <div class="price-box">
                                                    <span class="old-price">315.000đ</span>
                                                    <span class="current-price">252.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/mu-trum-tai-amila-chat-lieu-day-dan-am-ap-de-thuong-cho-be-tuy-chon-mau-sac">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami46.png"
                                                        alt="">
                                                </a>


                                                <div class="product-countdown">
                                                    <div data-countdown="2025-12-31 20:11:00"></div>
                                                </div>
                                                <span class="sticker-new label-sale">-20%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="25" data-PriceNew="56000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="4"
                                                                id="25" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="25"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="25"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/mu-trum-tai-amila-chat-lieu-day-dan-am-ap-de-thuong-cho-be-tuy-chon-mau-sac">Mũ
                                                        trùm tai AMILA chất liệu dày dặn ấm áp dễ thương cho bé tùy chọn
                                                        màu sắc</a></h4>
                                                <div class="price-box">
                                                    <span class="old-price">70.000đ</span>
                                                    <span class="current-price">56.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/ao-kieu-tay-dai-amila-co-lo-phoi-ren-phong-cach-phuong-tay-cho-be-gai">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami1013.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="27" data-PriceNew="200000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="2"
                                                                id="27" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="27"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="27"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/ao-kieu-tay-dai-amila-co-lo-phoi-ren-phong-cach-phuong-tay-cho-be-gai">Áo
                                                        kiểu tay dài AMILA cổ lọ phối ren phong cách phương Tây cho bé
                                                        gái</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">200.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/mu-trum-dau-amila-det-thiet-ke-tai-gau-dang-yeu-giu-am-danh-cho-be-gai">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami1284.png"
                                                        alt="">
                                                </a>


                                                <div class="product-countdown">
                                                    <div data-countdown="2025-12-31 20:11:00"></div>
                                                </div>
                                                <span class="sticker-new label-sale">-20%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="29" data-PriceNew="64000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="4"
                                                                id="29" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="29"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="29"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/mu-trum-dau-amila-det-thiet-ke-tai-gau-dang-yeu-giu-am-danh-cho-be-gai">Mũ
                                                        trùm đầu AMILA dệt thiết kế tai gấu đáng yêu giữ ấm dành cho bé
                                                        gái</a></h4>
                                                <div class="price-box">
                                                    <span class="old-price">80.000đ</span>
                                                    <span class="current-price">64.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/amila-giay-the-thao-de-mem-chong-truot-thoang-khi-danh-cho-be-trai-gai">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami1846.png"
                                                        alt="">
                                                </a>


                                                <div class="product-countdown">
                                                    <div data-countdown="2025-12-31 20:11:00"></div>
                                                </div>
                                                <span class="sticker-new label-sale">-20%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="33" data-PriceNew="264000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="5"
                                                                id="33" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="33"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="33"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/amila-giay-the-thao-de-mem-chong-truot-thoang-khi-danh-cho-be-trai-gai">AMILA
                                                        Giày Thể Thao Đế Mềm Chống Trượt Thoáng Khí Dành Cho Bé Trai
                                                        Gái</a></h4>
                                                <div class="price-box">
                                                    <span class="old-price">330.000đ</span>
                                                    <span class="current-price">264.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/ao-sweater-amila-thoi-trang-xuan-thu-ca-tinh-cho-be-trai">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami1997.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="35" data-PriceNew="220000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="1"
                                                                id="35" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="35"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="35"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/ao-sweater-amila-thoi-trang-xuan-thu-ca-tinh-cho-be-trai">Áo
                                                        sweater AMILA thời trang xuân thu cá tính cho bé trai</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">220.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/amila-giay-the-thao-phoi-luoi-thoang-khi-thoi-trang-cho-be-trai">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami2183.png"
                                                        alt="">
                                                </a>


                                                <div class="product-countdown">
                                                    <div data-countdown="2025-12-31 20:11:00"></div>
                                                </div>
                                                <span class="sticker-new label-sale">-20%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="37" data-PriceNew="264000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="5"
                                                                id="37" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="37"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="37"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/amila-giay-the-thao-phoi-luoi-thoang-khi-thoi-trang-cho-be-trai">AMILA
                                                        Giày Thể Thao Phối Lưới Thoáng Khí Thời Trang Cho Bé Trai</a>
                                                </h4>
                                                <div class="price-box">
                                                    <span class="old-price">330.000đ</span>
                                                    <span class="current-price">264.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/goi-nhoi-bong-giu-am-tay-hinh-meo-doodle-de-thuong">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami2280.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="38" data-PriceNew="300000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="4"
                                                                id="38" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="38"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="38"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/goi-nhoi-bong-giu-am-tay-hinh-meo-doodle-de-thuong">Gối
                                                        Nhồi Bông Giữ Ấm Tay Hình Mèo Doodle Dễ Thương</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">300.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/kep-toc-no-amila-de-thuong-cho-be-gai">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami234.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="39" data-PriceNew="31000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="4"
                                                                id="39" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="39"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="39"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/kep-toc-no-amila-de-thuong-cho-be-gai">Kẹp
                                                        tóc nơ AMILA dễ thương cho bé gái</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">31.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/mu-det-kim-day-dan-giu-am-mua-dong-danh-cho-be-trai-va-be-gai-6-thang-2-tuoi">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/ami2457.png"
                                                        alt="">
                                                </a>


                                                <div class="product-countdown">
                                                    <div data-countdown="2025-12-31 20:11:00"></div>
                                                </div>
                                                <span class="sticker-new label-sale">-20%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="40" data-PriceNew="48000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="4"
                                                                id="40" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="40"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="40"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/mu-det-kim-day-dan-giu-am-mua-dong-danh-cho-be-trai-va-be-gai-6-thang-2-tuoi">Mũ
                                                        Dệt Kim Dày Dặn Giữ Ấm Mùa Đông Dành Cho Bé Trai Và Bé Gái (6
                                                        Tháng-2 Tuổi)</a></h4>
                                                <div class="price-box">
                                                    <span class="old-price">60.000đ</span>
                                                    <span class="current-price">48.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/ao-so-mi-dai-tay-be-trai-rabity-92406">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/rb1364.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="41" data-PriceNew="249000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="1"
                                                                id="41" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="41"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="41"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/ao-so-mi-dai-tay-be-trai-rabity-92406">Áo
                                                        sơ mi dài tay bé trai Rabity 92406</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">249.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/dam-vay-tho-phoi-ren-cho-be-gai-rabity-vay-tre-em-hoa-tiet-elsa-de-thuong-mac-di-hoc-di-choi">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/rb1450.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="42" data-PriceNew="299000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="7"
                                                                id="42" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="42"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="42"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/dam-vay-tho-phoi-ren-cho-be-gai-rabity-vay-tre-em-hoa-tiet-elsa-de-thuong-mac-di-hoc-di-choi">Đầm
                                                        váy thô phối ren cho bé gái Rabity váy trẻ em họa tiết Elsa dễ
                                                        thương mặc đi học đi chơi</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">299.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/quan-sooc-ngan-be-gai-chat-cotton-rabity-nang-dong-thoai-mai">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/rb1599.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="43" data-PriceNew="169000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="2"
                                                                id="43" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="43"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="43"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/quan-sooc-ngan-be-gai-chat-cotton-rabity-nang-dong-thoai-mai">Quần
                                                        sooc ngắn bé gái chất cotton Rabity năng động thoải mái</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">169.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/ao-so-mi-be-trai-rabity-dai-tay-chat-lieu-cotton">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/rb1672.png"
                                                        alt="">
                                                </a>


                                                <div class="product-countdown">
                                                    <div data-countdown="2025-12-31 20:11:00"></div>
                                                </div>
                                                <span class="sticker-new label-sale">-20%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="44" data-PriceNew="183200" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="1"
                                                                id="44" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="44"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="44"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/ao-so-mi-be-trai-rabity-dai-tay-chat-lieu-cotton">Áo
                                                        sơ mi bé trai Rabity dài tay chất liệu cotton</a></h4>
                                                <div class="price-box">
                                                    <span class="old-price">229.000đ</span>
                                                    <span class="current-price">183.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/vay-be-gai-tay-canh-doi-mng20dr009-lovekids">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/a2517.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="45" data-PriceNew="699000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="7"
                                                                id="45" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="45"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="45"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/vay-be-gai-tay-canh-doi-mng20dr009-lovekids">Váy
                                                        bé gái tay cánh dơi MNG20DR009 - Lovekids</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">699.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/ao-blouse-dai-tay-hoa-nhi-lovekids">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/a2724.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="47" data-PriceNew="269000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="2"
                                                                id="47" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="47"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="47"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/ao-blouse-dai-tay-hoa-nhi-lovekids">Áo
                                                        blouse dài tay hoa nhí - Lovekids</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">269.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/quan-nhung-be-trai-phoi-soc-lovekids">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/a284.png"
                                                        alt="">
                                                </a>


                                                <div class="product-countdown">
                                                    <div data-countdown="2025-12-31 20:11:00"></div>
                                                </div>
                                                <span class="sticker-new label-sale">-20%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="48" data-PriceNew="207200" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="1"
                                                                id="48" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="48"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="48"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/quan-nhung-be-trai-phoi-soc-lovekids">Quần
                                                        nhung bé trai phối sọc - Lovekids</a></h4>
                                                <div class="price-box">
                                                    <span class="old-price">259.000đ</span>
                                                    <span class="current-price">207.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/quan-dui-cho-be-trai-ilaby-thoang-mat-mua-he">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i1988.png"
                                                        alt="">
                                                </a>


                                                <div class="product-countdown">
                                                    <div data-countdown="2025-12-31 20:11:00"></div>
                                                </div>
                                                <span class="sticker-new label-sale">-20%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="49" data-PriceNew="120000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="1"
                                                                id="49" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="49"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="49"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/quan-dui-cho-be-trai-ilaby-thoang-mat-mua-he">Quần
                                                        đùi cho bé trai ILABY thoáng mát mùa hè</a></h4>
                                                <div class="price-box">
                                                    <span class="old-price">150.000đ</span>
                                                    <span class="current-price">120.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/quan-short-be-trai-ilaby-phoi-tui-gio-chat-lieu-kaki">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i2074.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="50" data-PriceNew="179000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="1"
                                                                id="50" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="50"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="50"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/quan-short-be-trai-ilaby-phoi-tui-gio-chat-lieu-kaki">Quần
                                                        short bé trai ILABY phối túi gió chất liệu kaki</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">179.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/quan-dai-be-trai-ilaby-can-vai-xoay-canh-chat-nhung-tam-to">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i2122.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="51" data-PriceNew="219000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="1"
                                                                id="51" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="51"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="51"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/quan-dai-be-trai-ilaby-can-vai-xoay-canh-chat-nhung-tam-to">Quần
                                                        dài bé trai ILABY can vải xoay canh chất nhung tăm to</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">219.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/bom-be-gai-ilaby-chat-lieu-nhua-no-vai-gam">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i2273.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="52" data-PriceNew="29000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="4"
                                                                id="52" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="52"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="52"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/bom-be-gai-ilaby-chat-lieu-nhua-no-vai-gam">Bờm
                                                        bé gái ILABY chất liệu nhựa nơ vải gấm</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">29.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/vay-cong-chua-be-gai-ilaby-ba-tang-co-no-lung-chat-lieu-gam-cao-cap">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i2323.png"
                                                        alt="">
                                                </a>


                                                <div class="product-countdown">
                                                    <div data-countdown="2025-12-31 20:11:00"></div>
                                                </div>
                                                <span class="sticker-new label-sale">-20%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="53" data-PriceNew="383200" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="7"
                                                                id="53" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="53"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="53"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/vay-cong-chua-be-gai-ilaby-ba-tang-co-no-lung-chat-lieu-gam-cao-cap">Váy
                                                        công chúa bé gái ILABY ba tầng có nơ lưng chất liệu gấm cao
                                                        cấp</a></h4>
                                                <div class="price-box">
                                                    <span class="old-price">479.000đ</span>
                                                    <span class="current-price">383.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/vay-cong-chua-be-gai-ilaby-canh-tien-duoi-ca-hai-tang-chat-lieu-to-kem-lot-cao-cap-mem-mai-lan-da-be">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i245.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="54" data-PriceNew="379000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="7"
                                                                id="54" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="54"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="54"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/vay-cong-chua-be-gai-ilaby-canh-tien-duoi-ca-hai-tang-chat-lieu-to-kem-lot-cao-cap-mem-mai-lan-da-be">Váy
                                                        công chúa bé gái ILABY cánh tiên đuôi cá hai tầng chất liệu tơ
                                                        kèm lót cao cấp mềm mại làn da bé</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">379.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/set-chu-cuoi-ao-co-v-co-dai-be-trai-ilaby-chat-lieu-lua-mem-mai">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i2511.png"
                                                        alt="">
                                                </a>



                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="55" data-PriceNew="379000" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="1"
                                                                id="55" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="55"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="55"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/set-chu-cuoi-ao-co-v-co-dai-be-trai-ilaby-chat-lieu-lua-mem-mai">Set
                                                        chú cuội áo cổ V có đai bé trai ILABY chất liệu lụa mềm mại</a>
                                                </h4>
                                                <div class="price-box">
                                                    <span class="current-price">379.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a
                                                    href="http://kidolshop.click/shop-single/quan-short-be-trai-ilaby-vien-chi-chap-doc-than-chat-lieu-bo">
                                                    <img src="http://kidolshop.click/public/storage/kidoldash/images/product/i265.png"
                                                        alt="">
                                                </a>


                                                <div class="product-countdown">
                                                    <div data-countdown="2025-12-31 20:11:00"></div>
                                                </div>
                                                <span class="sticker-new label-sale">-20%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <!-- <li><a class="AddToCart-Single" data-id="56" data-PriceNew="175200" data-token="uxc8UL9vnY5Xn5avvWDLrECBUstzb5OGzVGjBe5E" data-tooltip="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="icon-shopping-bag"></i></a></li> -->
                                                        <li><a class="add-to-compare" data-idcat="1"
                                                                id="56" data-tooltip="tooltip"
                                                                data-placement="left" title="So sánh"><i
                                                                    class="icon-sliders"></i></a></li>
                                                        <li><a class="add-to-wishlist" data-id="56"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Thêm vào danh sách yêu thích"><i
                                                                    class="icon-heart"></i></a></li>
                                                        <li><a class="quick-view-pd" data-id="56"
                                                                data-tooltip="tooltip" data-placement="left"
                                                                title="Xem nhanh"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <!-- <ul class="rating">
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                            <li class="rating-on"><i class="fa fa-star-o"></i></li>
                                        </ul> -->
                                                <h4 class="product-name"><a
                                                        href="http://kidolshop.click/shop-single/quan-short-be-trai-ilaby-vien-chi-chap-doc-than-chat-lieu-bo">Quần
                                                        short bé trai ILABY viền chỉ chập dọc thân chất liệu bò</a></h4>
                                                <div class="price-box">
                                                    <span class="old-price">219.000đ</span>
                                                    <span class="current-price">175.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Add Arrows -->
                                <div class="swiper-next"><i class="fa fa-angle-right"></i></div>
                                <div class="swiper-prev"><i class="fa fa-angle-left"></i></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                            <div class="swiper-container product-active">
                                <div class="swiper-wrapper">
                                </div>

                                <!-- Add Arrows -->
                                <div class="swiper-next"><i class="fa fa-angle-right"></i></div>
                                <div class="swiper-prev"><i class="fa fa-angle-left"></i></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab1" role="tabpanel">
                            <div class="swiper-container product-active">
                                <div class="swiper-wrapper">
                                </div>

                                <!-- Add Arrows -->
                                <div class="swiper-next"><i class="fa fa-angle-right"></i></div>
                                <div class="swiper-prev"><i class="fa fa-angle-left"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--New Product End-->



        <!--Testimonial Start-->
        <!-- <div class="testimonial-area" style="background-image: url(public/kidolshop/images/testimonial-bg.jpg);">
    <div class="container">
        <div class="swiper-container testimonial-active">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="single-testimonial text-center">
                        <p>Felis eu pede mollis pretium. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus lingua. felis eu pede mollis pretium.</p>

                        <div class="testimonial-author">
                            <img src="public/kidolshop/images/testimonial-img-1.png" alt="">
                            <span class="author-name">Torvi / COO</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="single-testimonial text-center">
                        <p>Felis eu pede mollis pretium. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus lingua. felis eu pede mollis pretium.</p>

                        <div class="testimonial-author">
                            <img src="public/kidolshop/images/testimonial-img-2.png" alt="">
                            <span class="author-name">Shara / Founder</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Arrows -->
        <div class="swiper-next"><i class="fa fa-angle-right"></i></div>
        <div class="swiper-prev"><i class="fa fa-angle-left"></i></div>
    </div>
    </div>
    </div> -->
    <!--Testimonial End-->



    <!--Experts Start-->
    <!-- <div class="experts-area section-padding-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-9 col-sm-11">
                <div class="section-title text-center">
                    <h2 class="title">Flower Experts</h2>
                    <p>A perfect blend of creativity, energy, communication, happiness and love. Let us arrange a smile for you.</p>
                </div>
            </div>
        </div>
        <div class="expert-wrapper">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-expert text-center">
                        <div class="expert-image">
                            <img src="public/kidolshop/images/experts/team-1.jpg" alt="">
                        </div>
                        <div class="expert-content">
                            <h4 class="name">Marcos Alonso</h4>
                            <p>Biologist</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-expert text-center">
                        <div class="expert-image">
                            <img src="public/kidolshop/images/experts/team-2.jpg" alt="">
                        </div>
                        <div class="expert-content">
                            <h4 class="name">Shara friken</h4>
                            <p>Photographer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-expert text-center">
                        <div class="expert-image">
                            <img src="public/kidolshop/images/experts/team-3.jpg" alt="">
                        </div>
                        <div class="expert-content">
                            <h4 class="name">Torvi greac</h4>
                            <p>Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-expert text-center">
                        <div class="expert-image">
                            <img src="public/kidolshop/images/experts/team-4.jpg" alt="">
                        </div>
                        <div class="expert-content">
                            <h4 class="name">Alonso Gomej</h4>
                            <p>Florist</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
    <!--Experts End-->



    <!--Blog Start-->
    <div class="blog-area blog-bg section-padding-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-9 col-sm-11">
                    <div class="section-title text-center">
                        <h2 class="title">Bài Viết Của Chúng Tôi</h2>
                        <p>A perfect blend of creativity, energy, communication, happiness and love. Let us arrange a
                            smile for you.</p>
                    </div>
                </div>
            </div>
            <div class="blog-wrapper mt-30">
                <div class="swiper-container blog-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a href="http://kidolshop.click/blog/do-bo-tre-em-thoi-trang-dep-cho-be"><img
                                            src="http://kidolshop.click/public/storage/kidoldash/images/blog/blog_128.png"
                                            alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <h4 class="title"><a
                                            href="http://kidolshop.click/blog/do-bo-tre-em-thoi-trang-dep-cho-be">Đồ
                                            bộ trẻ em - thời trang đẹp cho bé</a></h4>
                                    <div class="articles-date">
                                        <p><span>2022-08-05 16:45:51</span></p>
                                    </div>
                                    <div class="four-line mb-4">
                                        <p>Đồ bộ trẻ em mặc ở nh&agrave; kh&ocirc;ng chỉ gi&uacute;p b&eacute;
                                            tr&ocirc;ng đẹp hơn m&agrave; c&ograve;n cho b&eacute; tự tin, thoải
                                            m&aacute;i khi vận động. Ng&agrave;y nay trẻ em kh&ocirc;ng chỉ c&oacute;
                                            nhu cầu mặc đủ m&agrave; c&ograve;n mặc đẹp, an to&agrave;n, thời trang,
                                            v&igrave; vậy việc chọn đồ bộ trẻ em ph&ugrave; hợp lu&ocirc;n l&agrave;
                                            điều m&agrave; c&aacute;c gia đ&igrave;nh quan t&acirc;m. H&atilde;y
                                            c&ugrave;ng Rabity t&igrave;m hiểu ngay về độ bộ để lựa chọn cho b&eacute;
                                            ngay trong b&agrave;i viết dưới đ&acirc;y nh&eacute;!</p>
                                    </div>

                                    <div class="blog-footer">
                                        <a class="more"
                                            href="http://kidolshop.click/blog/do-bo-tre-em-thoi-trang-dep-cho-be">Tìm
                                            hiểu thêm</a>
                                        <!-- <p class="comment-count"><i class="icon-message-circle"></i> 0</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a href="http://kidolshop.click/blog/tai-sao-nen-mua-ao-dai-chat-lieu-cotton"><img
                                            src="http://kidolshop.click/public/storage/kidoldash/images/blog/blog_235.png"
                                            alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <h4 class="title"><a
                                            href="http://kidolshop.click/blog/tai-sao-nen-mua-ao-dai-chat-lieu-cotton">Tại
                                            sao nên mua áo dài chất liệu cotton?</a></h4>
                                    <div class="articles-date">
                                        <p><span>2022-08-05 16:53:04</span></p>
                                    </div>
                                    <div class="four-line mb-4">
                                        <p>&Aacute;o d&agrave;i c&aacute;ch t&acirc;n lu&ocirc;n được thiết kế đa dạng
                                            với nhiều chất liệu kh&aacute;c nhau. Tuy vậy, việc mẹ lựa chọn &aacute;o
                                            d&agrave;i chất liệu tốt v&agrave; ph&ugrave; hợp sẽ gi&uacute;p cho
                                            b&eacute; cảm thấy thoải m&aacute;i v&agrave; thư th&aacute;i hơn khi mặc,
                                            c&oacute; như vậy b&eacute; mới trở n&ecirc;n tự tin v&agrave; thu
                                            h&uacute;t hơn. H&atilde;y c&ugrave;ng Rabity kh&aacute;m ph&aacute; xem lựa
                                            chọn chất vải cotton &aacute;o d&agrave;i lu&ocirc;n được tin cậy cho
                                            b&eacute; nh&eacute;!&nbsp;</p>
                                    </div>

                                    <div class="blog-footer">
                                        <a class="more"
                                            href="http://kidolshop.click/blog/tai-sao-nen-mua-ao-dai-chat-lieu-cotton">Tìm
                                            hiểu thêm</a>
                                        <!-- <p class="comment-count"><i class="icon-message-circle"></i> 0</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a
                                        href="http://kidolshop.click/blog/cach-bao-quan-ao-khoac-tre-em-vua-ben-vua-moi"><img
                                            src="http://kidolshop.click/public/storage/kidoldash/images/blog/blog_333.png"
                                            alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <h4 class="title"><a
                                            href="http://kidolshop.click/blog/cach-bao-quan-ao-khoac-tre-em-vua-ben-vua-moi">Cách
                                            bảo quản áo khoác trẻ em vừa bền vừa mới</a></h4>
                                    <div class="articles-date">
                                        <p><span>2022-08-05 16:55:09</span></p>
                                    </div>
                                    <div class="four-line mb-4">
                                        <p>C&oacute; rất nhiều loại &aacute;o kho&aacute;c trong tủ quần &aacute;o của
                                            con, v&agrave; tất nhi&ecirc;n, c&aacute;ch bảo quản ch&uacute;ng cũng
                                            kh&aacute;c nhau. Tất cả b&agrave; mẹ, ai cũng muốn &aacute;o kho&aacute;c
                                            của con m&igrave;nh lu&ocirc;n mới v&agrave; l&acirc;u phai. Nhưng
                                            kh&ocirc;ng phải ai cũng biết c&aacute;ch l&agrave;m điều đ&oacute;. Sau
                                            đ&acirc;y, Rabity sẽ m&aacute;ch mẹ c&aacute;ch bảo quản &aacute;o
                                            kho&aacute;c trẻ em, đặc biệt l&agrave;&nbsp;<strong><a
                                                    href="https://rabity.vn/collections/ao-khoac-be-trai-10-tuoi">&aacute;o
                                                    kho&aacute;c b&eacute; trai 10 tuổi</a></strong>, &aacute;o
                                            kho&aacute;c b&eacute; trai 12 tuổi, &aacute;o kho&aacute;c b&eacute;
                                            g&aacute;i 10 tuổi,<a
                                                href="https://rabity.vn/collections/ao-khoac-be-gai-12-tuoi">&nbsp;<strong>&aacute;o
                                                    kho&aacute;c b&eacute; g&aacute;i 12 tuổi</strong></a>&nbsp;vừa bền
                                            vừa mới nh&eacute;!</p>
                                    </div>

                                    <div class="blog-footer">
                                        <a class="more"
                                            href="http://kidolshop.click/blog/cach-bao-quan-ao-khoac-tre-em-vua-ben-vua-moi">Tìm
                                            hiểu thêm</a>
                                        <!-- <p class="comment-count"><i class="icon-message-circle"></i> 0</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a href="http://kidolshop.click/blog/ao-khoac-tre-em-la-gi"><img
                                            src="http://kidolshop.click/public/storage/kidoldash/images/blog/blog_440.png"
                                            alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <h4 class="title"><a
                                            href="http://kidolshop.click/blog/ao-khoac-tre-em-la-gi">Áo khoác trẻ em
                                            là gì?</a></h4>
                                    <div class="articles-date">
                                        <p><span>2022-08-05 16:58:33</span></p>
                                    </div>
                                    <div class="four-line mb-4">
                                        <p><strong>&Aacute;o kho&aacute;c trẻ em</strong>&nbsp;l&agrave; một loại trang
                                            phục mặc ngo&agrave;i rất phổ biến hiện nay. T&ugrave;y theo từng độ tuổi
                                            m&agrave; &aacute;o kho&aacute;c c&oacute; thiết kế, m&agrave;u sắc
                                            v&agrave; kiểu d&aacute;ng kh&aacute;c nhau, c&oacute; thể l&agrave;
                                            &aacute;o kho&aacute;c b&eacute; trai 10 tuổi, &aacute;o kho&aacute;c
                                            b&eacute; g&aacute;i 10 tuổi, hoặc &aacute;o kho&aacute;c b&eacute; trai 12
                                            tuổi v&agrave; &aacute;o kho&aacute;c b&eacute; g&aacute;i 12
                                            tuổi,....<strong>&nbsp;</strong>T&aacute;c dụng ch&iacute;nh của loại trang
                                            phục n&agrave;y l&agrave;&nbsp;giữ ấm cho cơ thể. Những chiếc &aacute;o
                                            kho&aacute;c thường được thiết kế với phần tay v&agrave; phần &aacute;o
                                            d&agrave;i hơn những chiếc &aacute;o sơ mi th&ocirc;ng thường. T&ugrave;y
                                            theo kiểu &aacute;o kho&aacute;c m&agrave; c&aacute;c nh&agrave; thiết
                                            kế&nbsp; sử dụng c&uacute;c, kh&oacute;a k&eacute;o, thắt lưng, đ&oacute;ng
                                            c&uacute;c, k&eacute;o kh&oacute;a ... hoặc kết hợp giữa c&aacute;c loại
                                            &aacute;o với nhau.&nbsp;</p>
                                    </div>

                                    <div class="blog-footer">
                                        <a class="more"
                                            href="http://kidolshop.click/blog/ao-khoac-tre-em-la-gi">Tìm hiểu thêm</a>
                                        <!-- <p class="comment-count"><i class="icon-message-circle"></i> 0</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add Arrows -->
                    <div class="swiper-next"><i class="fa fa-angle-right"></i></div>
                    <div class="swiper-prev"><i class="fa fa-angle-left"></i></div>
                </div>
            </div>
        </div>
    </div>
    <!--Blog End-->

    <!--Newsletter Start-->
    <!-- <div class="newsletter-area section-padding-5">
    <div class="container">
        <div class="newsletter-form">
            <div class="section-title text-center">
                <h2 class="title">Join The Colorful Bunch!</h2>
            </div>
            <div class="form-wrapper">
                <input type="text" placeholder="Your email address">
                <button>Subscribe</button>
                <i class="icon-mail"></i>
            </div>
        </div>
    </div>
</div> -->
    <!--Newsletter End-->




    <!--Footer Section Start-->
    <div class="footer-area">
        <div class="container">
            <div class="footer-widget-area section-padding-6">
                <div class="row justify-content-between">

                    <!--Footer Widget Start-->
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <a class="footer-logo" href="#"><img
                                    src="http://kidolshop.click/public/kidolshop/images/logo/logo.png"
                                    alt=""></a>
                            <div class="footer-widget-text">
                                <p>A perfect blend of creativity, energy, communication, happiness and love. Let us
                                    arrange a smile for you. </p>
                            </div>
                            <div class="widget-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Footer Widget End-->
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Information</h4>

                            <div class="footer-widget-menu">
                                <ul>
                                    <li><a href="#">Search Terms</a></li>
                                    <li><a href="#">Advanced Search</a></li>
                                    <li><a href="#">Helps & Faqs</a></li>
                                    <li><a href="#">Store Location</a></li>
                                    <li><a href="#">Orders & Returns</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">My Account</h4>

                            <div class="footer-widget-menu">
                                <ul>
                                    <li><a href="#">Delivery</a></li>
                                    <li><a href="#">Legal Notice</a></li>
                                    <li><a href="#">Secure payment</a></li>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="about.html">About us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Help</h4>

                            <div class="footer-widget-menu">
                                <ul>
                                    <li><a href="#">FAQ’s</a></li>
                                    <li><a href="#">Pricing Plans</a></li>
                                    <li><a href="#">Track</a></li>
                                    <li><a href="#">Your Order</a></li>
                                    <li><a href="#">Returns</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Customer Service</h4>

                            <div class="footer-widget-menu">
                                <ul>
                                    <li><a href="http://kidolshop.click/account">My Account</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Deliveries & Returns</a></li>
                                    <li><a href="#">Gift card</a></li>
                                    <li><a href="#">Legal Notice</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--Footer Section End-->

    <!--Copyright Section Start-->
    <div class="copyright-section">
        <div class="container">
            <div class="copyright-wrapper text-center d-lg-flex align-items-center justify-content-between">

                <!--Right Start-->
                <div class="copyright-content">
                    <p>Copyright 2020 &copy; <a href="https://hasthemes.com/">HasThemes</a> . All Rights Reserved</p>
                </div>
                <!--Right End-->

                <!--Right Start-->
                <div class="copyright-payment">
                    <img src="http://kidolshop.click/public/kidolshop/images/payment.png" alt="">
                </div>
                <!--Right End-->

            </div>
        </div>
    </div>
    <!--Copyright Section End-->


    <!--Back To Start-->
    <a href="#" class="back-to-top">
        <i class="fa fa-angle-double-up"></i>
    </a>
    <!--Back To End-->

    <!-- Quick View  Start-->
    <!-- <div class="modal fade" id="exampleModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="quick-view-image">
                                    <img src="http://kidolshop.click/public/kidolshop/images/product-single/product-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="quick-view-content">
                                    <h4 class="product-title">Sweet Alyssum</h4>
                                    <div class="thumb-price">
                                        <span class="current-price">$19.00</span>
                                        <span class="old-price">$29.00</span>
                                        <span class="discount">-34%</span>
                                    </div>
                                    <div class="product-rating">
                                        <ul class="rating-star">
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <span>No reviews</span>
                                    </div>
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will</p>

                                    <div class="quick-view-quantity-addcart d-flex flex-wrap">
                                        <form action="#">
                                            <div class="quantity d-inline-flex align-items-center">
                                                <button type="button" class="sub"><i class="ti-minus"></i></button>
                                                <input type="text" value="1" />
                                                <button type="button" class="add"><i class="ti-plus"></i></button>
                                            </div>
                                        </form>
                                        <div class="addcart-btn">
                                            <button class="btn btn-primary">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!--Quick View Tags End-->

    <!-- Modal Warning Compare -->
    <div class="modal fade bd-example-modal-sm" id="WarningModal" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Thông báo</h5>
                </div>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"
                    aria-hidden="true"></button>
                <div class="modal-body text-center p-3 h4">
                    <h2 class="title text-primary">Chỉ có thể chọn 2 sản phẩm để so sánh!</h2>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-primary btn-round" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Warning Compare -->

    <!-- Modal Add To WishList -->
    <div class="modal fade bd-example-modal-sm modal-AddToWishList" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Thông báo</h5>
                </div>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"
                    aria-hidden="true"></button>
                <div class="modal-body text-center p-3 h4">
                    <div class="mb-3">
                        <i class="fa fa-check-circle text-primary" style="font-size:50px;"></i>
                    </div>Đã thêm sản phẩm vào danh sách yêu thích
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tiếp tục mua
                        sắm</button>
                    <a href="http://kidolshop.click/wishlist" type="button" class="btn btn-primary">Xem danh
                        sách</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Add To WishList -->

    <!-- Modal Compare -->
    <!-- <div class="modal fade bd-example-modal-sm modal-test" id="select-products" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header justify-content-start">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Chọn sản phẩm</h5>
                        <input type="text" id="search-pd-compare" placeholder="Tìm kiếm sản phẩm" style="width:65%; margin-left:10%;">
                    </div>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" aria-hidden="true"></button>
                    <div class="modal-body modal-compare-body row">
                        <div class="product-item col-md-3 select-pd" id="product-item-41" data-id="41">
                            <div class="product-image mb-3" id="product-image-41">
                                <label class="abc" for="chk-pd-41"><img src="http://kidolshop.click/public/kidolshop/images/no_cart.png" class="rounded w-100 img-fluid"></label>
                                <div class="product-title">
                                    <div class="product-name" style="height:30px ;overflow:hidden;display:-webkit-box;">
                                        <input type="checkbox" class="checkstatus d-none" id="chk-pd-41" name="chk_product[]" value="41" data-id="41" data-name="Kem chống nắng có màu che phủ tự nhiên Lancome UV Expert BB COMPLETE 2 SPF 50+ PA++++ 30ml – Tone tự nhiên" data-price="1550000" data-img="lc6.png">
                                        <span>Kem chống nắng có màu che phủ tự nhiên Lancome UV Expert BB COMPLETE 2 SPF 50+ PA++++ 30ml – Tone tự nhiên</span>
                                    </div>
                                    <div style="text-align:center;">1.550.000đ</div>
                                </div>
                            </div>
                            <input type="hidden" name="selected_product[]" id="product-41" value="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-round" style="color:#000; border: 1px solid #e6e6e6;" data-dismiss="modal">Đóng</button>
                        <button type="button" id="confirm" class="btn btn-primary btn-round" data-dismiss="modal" style="pointer-events: none; background-color: rgb(108, 117, 125); border:none;">Xác nhận</button>
                    </div>
                </div>
            </div>
        </div> -->
    <div class="modal fade bd-example-modal-sm modal-Compare" id="modal-Compare" tabindex="-1" role="dialog"
        aria-hidden="true">

    </div>
    <!-- Modal Compare -->
    </div>

    <!-- JS
    ============================================ -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    {{-- <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script> --}}
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    {{-- <!-- Plugins JS -->
    <script src="http://kidolshop.click/public/kidolshop/js/plugins/swiper-bundle.min.js"></script>
    <script src="http://kidolshop.click/public/kidolshop/js/plugins/jquery.countdown.min.js"></script>
    <script src="http://kidolshop.click/public/kidolshop/js/plugins/jquery.elevateZoom.min.js"></script>
    <script src="http://kidolshop.click/public/kidolshop/js/plugins/select2.min.js"></script>
    <script src="http://kidolshop.click/public/kidolshop/js/plugins/ajax-contact.js"></script> --}}

    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "102364102626836");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v15.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Modal quick view JS -->
    <script>
        $('.js-preloader').preloadinator();
        $('.js-preloader').preloadinator({
            scroll: false
        });
        $('.js-preloader').preloadinator({
            minTime: 2000
        });
        $('.js-preloader').preloadinator({
            animation: 'fadeOut',
            animationDuration: 400
        });

        $(document).ready(function() {
            APP_URL = 'http://kidolshop.click';

            // Quick view sản phẩm
            $('.quick-view-pd').on('click', function() {
                var idProduct = $(this).data('id');
                var _token = $('input[name="_token"]').val();

                $.ajax({
                    url: 'http://kidolshop.click/quick-view-pd',
                    method: 'POST',
                    data: {
                        idProduct: idProduct,
                        _token: _token
                    },
                    success: function(data) {
                        $('.main-wrapper').append(data);
                        $('#modal-pd-' + idProduct).modal('show');
                    }
                });
            });

            // Add to WishList
            $('.add-to-wishlist').on('click', function() {
                var idProduct = $(this).data('id');
                var _token = $('input[name="_token"]').val();

                if ($('#idCustomer').val() == "") {
                    window.location.href = '../login';
                } else {
                    $.ajax({
                        url: 'http://kidolshop.click/add-to-wishlist',
                        method: 'POST',
                        data: {
                            idProduct: idProduct,
                            _token: _token
                        },
                        success: function(data) {
                            $('.modal-AddToWishList').modal('show');
                        }
                    });
                }
            });

            // Xoá 1 sp trong giỏ hàng
            $('.delete-pd-cart').on('click', function() {
                var idCart = $(this).data("id");
                var _token = $(this).data("token");

                $.ajax({
                    url: APP_URL + '/delete-pd-cart/' + idCart,
                    method: 'DELETE',
                    data: {
                        idCart: idCart,
                        _token: _token
                    },
                    success: function(data) {
                        location.reload();
                    }
                });
            });

            // So sánh sản phẩm
            $('.add-to-compare').on('click', function() {
                var idCategory = $(this).data('idcat');
                var idProduct = $(this).attr('id');
                var _token = $('input[name="_token"]').val();

                $.ajax({
                    url: 'http://kidolshop.click/modal-compare',
                    method: 'POST',
                    data: {
                        idCategory: idCategory,
                        idProduct: idProduct,
                        _token: _token
                    },
                    success: function(data) {
                        $('#modal-Compare').html(data);
                        $('#modal-Compare').modal('show');

                        $("#search-pd-compare").on("keyup", function() {
                            var value = $(this).val();

                            $.ajax({
                                url: 'http://kidolshop.click/modal-compare-search',
                                method: 'POST',
                                data: {
                                    idCategory: idCategory,
                                    idProduct: idProduct,
                                    value: value,
                                    _token: _token
                                },
                                success: function(data) {
                                    $('.modal-compare-body').html(data);
                                }
                            });
                        });

                        $(document).on("click", 'input[type=checkbox]', function() {
                            var product_id = $(this).data("id");
                            var numberOfChecked = $('input:checkbox:checked').length;

                            if (numberOfChecked > 2) {
                                $('#WarningModal').modal('show');
                                $(this).prop('checked', false);
                            } else {
                                if ($(this).is(":checked")) {
                                    $("#product-image-" + product_id).css("border",
                                        "#f379a7 3px solid");
                                    $("#product-image-" + product_id).css(
                                        "border-radius", "10px");
                                    $(".btn-compare").css("pointer-events", "auto");
                                    $(".btn-compare").css("background-color",
                                        "#f379a7");
                                    $("#product-" + product_id).val(product_id);
                                } else if ($(this).is(":not(:checked)")) {
                                    $("#product-image-" + product_id).css("border",
                                        "none");
                                    $("#product-" + product_id).val("	");
                                    $(document).ready(function() {
                                        var $fields = $(this).find(
                                            'input[name="chk_product[]"]:checked'
                                        );
                                        if (!$fields.length) {
                                            $(".btn-compare").css(
                                                "pointer-events", "none");
                                            $(".btn-compare").css(
                                                "background-color",
                                                "#b9b5b5");
                                        }
                                    });
                                }
                            }
                        });

                        $('.btn-compare').on('click', function() {
                            chk_product = $("input[name='chk_product[]']:checked").map(
                                function() {
                                    return this.value;
                                }).get();
                            var cmp_pro = '';

                            for (i = 0; i < chk_product.length; i++) {
                                cmp_pro += ',' + chk_product[i];
                            }
                            window.location.href = '../compare?product=' + idProduct +
                                cmp_pro;
                        });
                    }
                });
            });

            // Gợi ý tìm kiếm sản phẩm
            $('#search-input').on('keyup', function() {
                var value = $(this).val();
                var _token = $('input[name="_token"]').val();
                if (value != '') {
                    $.ajax({
                        url: 'http://kidolshop.click/search-suggestions',
                        method: 'POST',
                        data: {
                            value: value,
                            _token: _token
                        },
                        success: function(data) {
                            $('.search-product').fadeIn();
                            $('.search-product').html(data);

                            $('.search-product-item').on('click', function() {
                                $('#search-input').val($(this).text());
                                $('.search-product').fadeOut();
                            });
                        }
                    });
                } else $('.search-product').fadeOut();
            });

            $('#search-input').on('blur', function() {
                $('.search-product').fadeOut();
            });

            // Bộ lọc tìm kiếm
            var category = [],
                tempArrayCat = [],
                brand = [],
                tempArrayBrand = [];
            url = window.location.href;

            $(".filter-product").on("click", function() {
                var sort_by = $('.select-input__sort').data("sort");
                var min_price = $('.input-filter-price.min').val();
                var max_price = $('.input-filter-price.max').val();
                var min_price_filter = '';
                var max_price_filter = '';

                if (url.indexOf("search?keyword=") != -1) {
                    var keyword = $('#keyword-link').val();
                    page = 'search?keyword=' + keyword;
                } else page = 'store?show=all';

                $.each($("[data-filter='brand']:checked"), function() {
                    tempArrayBrand.push($(this).val());
                });
                tempArrayBrand.reverse();

                $.each($("[data-filter='category']:checked"), function() {
                    tempArrayCat.push($(this).val());
                });
                tempArrayCat.reverse();

                if (min_price != '' && max_price != '' && parseInt(min_price) > parseInt(max_price)) $(
                    '.alert-filter-price').removeClass("d-none");
                else {
                    if (min_price != '') min_price_filter = '&priceMin=' + min_price;
                    else min_price_filter = '';

                    if (max_price != '') max_price_filter = '&priceMax=' + max_price;
                    else max_price_filter = '';

                    if (tempArrayBrand.length !== 0 && tempArrayCat.length !== 0) {
                        brand += '&brand=' + tempArrayBrand.toString();
                        category += '&category=' + tempArrayCat.toString();
                        window.location.href = page + brand + category + min_price_filter +
                            max_price_filter + sort_by;
                    } else if (tempArrayCat.length !== 0) {
                        category += '&category=' + tempArrayCat.toString();
                        window.location.href = page + category + min_price_filter + max_price_filter +
                            sort_by;
                    } else if (tempArrayBrand.length !== 0) {
                        brand += '&brand=' + tempArrayBrand.toString();
                        window.location.href = page + brand + min_price_filter + max_price_filter + sort_by;
                    } else window.location.href = page + min_price_filter + max_price_filter + sort_by;
                }
            });

            $('.select-input__item').on('click', function() {
                var sort_by = $(this).data("sort");
                split_url = url.split("&sort_by");
                if (url.indexOf("?show=all") != -1 || url.indexOf("?keyword") != -1) window.location.href =
                    split_url[0] + sort_by;
                else window.location.href = url + '?show=all' + sort_by;
            });

            $('.btn-filter-price').on('click', function() {
                var min_price = $('.input-filter-price.min').val();
                var max_price = $('.input-filter-price.max').val();
                var min_price_filter = '';
                var max_price_filter = '';

                if (min_price != '' && max_price != '' && parseInt(min_price) > parseInt(max_price)) $(
                    '.alert-filter-price').removeClass("d-none");
                else {
                    if (min_price != '') min_price_filter = '&priceMin=' + min_price;
                    else min_price_filter = '';

                    if (max_price != '') max_price_filter = '&priceMax=' + max_price;
                    else max_price_filter = '';

                    if (url.indexOf("&sort_by") != -1) {
                        split_url = url.split("&sort_by");
                        if (url.indexOf("&price") != -1) {
                            split_url_price = url.split("&price");
                            window.location.href = split_url_price[0] + min_price_filter +
                                max_price_filter + "&sort_by" + split_url[1];
                        } else window.location.href = split_url[0] + min_price_filter + max_price_filter +
                            "&sort_by" + split_url[1];
                    } else {
                        split_url = url.split("&price");
                        if (url.indexOf("?show=all") != -1 || url.indexOf("?keyword") != -1)
                            window.location.href = split_url[0] + min_price_filter + max_price_filter;
                        else window.location.href = url + '?show=all' + min_price_filter + max_price_filter;
                    }
                }
            });
        });
    </script>
</body>

</html>
