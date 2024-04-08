<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quế Anh Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/products.css') }}">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('style')
</head>

<body>
    <div class="main-wrapper">
        <div class="header-section d-lg-block my-2 ">
            <div class="main-header">
                <div class="container position-relative ">
                    <div class="row align-items-center ">
                        <div class="col-lg-2 ">
                            <div class="header-logo">
                                <a href="">
                                    LOGO
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 position-static d-flex justify-content-around">
                            <div class="site-main-nav d-flex justify-content-around w-100 ">
                                <div class="site-nav d-flex justify-content-around w-100">
                                    <ul class="nav d-flex justify-content-around w-100 ">
                                        <li class="nav-item mx-2">
                                            <a href="">
                                                Trang chủ
                                            </a>
                                        </li>
                                        <li class="nav-item mx-2 " class="menu-item-has-children position-static ">
                                            <a href="">
                                                Cửa hàng
                                            </a>
                                            <ul class="mega-sub-menu d-none ">
                                                <li
                                                    class="mega-dropdown menu-item-has-children nav-item position-absolute ">
                                                    <a href="">Danh Mục</a>
                                                    <ul class="nav navbar-nav  ">
                                                        <li class="nav-item">Danh mục 1</li>
                                                        <li class="nav-item">Danh mục 2</li>
                                                        <li class="nav-item">Danh mục 3</li>
                                                        <li class="nav-item">Danh mục 4</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item mx-2 ">
                                            <a href="">Tin tức</a>
                                        </li>
                                        <li class="nav-item mx-2 ">
                                            <a href="">Về chúng tôi</a>
                                        </li>
                                        <li class="nav-item mx-2 ">
                                            <a href="">Liên hệ</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="header-meta-info d-lg-flex ">
                                <div class="header-search">
                                    <form action="" method="get">
                                        <input type="text" name="keyword" placeholder="Tìm kiếm sản phẩm"
                                            autocomplete="off" class=""
                                            style="border:none;background: transparent">
                                        <button class="bg-transparent " style="border:none">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="header-account d-flex ">
                                    <div class="header-user">
                                        @if (1 > 2)
                                            <a href="" class="link-underline link-underline-opacity-0 col-6">Đăng
                                                nhập
                                            </a>
                                            <span>/ </span>
                                            <a href="" class="link-underline link-underline-opacity-0 col-6">Đăng
                                                ký
                                            </a>
                                        @else
                                            <div class="dropdown">
                                                <button class="btn noborder dropdown-toggle text-primary" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="">Hồ
                                                            sơ của tôi</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="">Đăng
                                                            xuất</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="cart-block">
                                        <i class="fa-solid fa-cart-shopping w-100 fs-4"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-main">
            <div class="slider-area position-relative ">
                <div class="swiper-container slider-active">
                    <div class="swiper-wrapper">
                        <!--Single Slider Start-->
                        <div class="single-slider swiper-slide animation-style-01"
                            style="background-image: url('{{ asset('assets/imgs/KIDOLBanner.png') }}');">
                            <div class="container">
                                <div class="slider-content">
                                    <h5 class="sub-title">Nhập: <span class="text-primary">SALE100K</span> <br> Giảm
                                        100K
                                        cho mọi đơn hàng</h5>
                                    <h2 class="main-title">Ngày đặc biệt!</h2>
                                    <p>Nhập: <span class="text-primary">SALE10</span> để được giảm 10%, số lượng có hạn!
                                    </p>

                                    <ul class="slider-btn">
                                        <li><a href="http://kidolshop.click/store"
                                                class="btn btn-round btn-primary">Bắt
                                                đầu mua sắm</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Single Slider End-->

                        <!--Single Slider Start-->
                        <div class="single-slider swiper-slide animation-style-01"
                            style="background-image: url('{{ asset('assets/imgs/KIDOLBanner2.png') }}');">
                            <div class="container" style="text-align:right;">
                                <div class="slider-content">
                                    <h5 class="sub-title sub-title-right">Nhập: <span
                                            class="text-info">SALE100K</span>
                                        <br> Giảm 100K cho mọi đơn hàng
                                    </h5>
                                    <h2 class="main-title">Ngày đặc biệt!</h2>
                                    <p>Nhập: <span class="text-info">SALE10</span> để được giảm 10%, số lượng có hạn!
                                    </p>

                                    <ul class="slider-btn">
                                        <li><a href="http://kidolshop.click/store"
                                                class="btn btn-round btn-primary">Bắt
                                                đầu mua sắm</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Single Slider End-->
                    </div>
                    <!--Swiper Wrapper End-->

                    <!-- Add Arrows -->
                    <div class=" swiper-next"><i class="fa fa-angle-right"></i></div>
                    <div class=" swiper-prev"><i class="fa fa-angle-left"></i></div>

                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>

                </div>
                <!--Swiper Container End-->
            </div>
            {{-- <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                    <div class="swiper-slide">Slide 4</div>
                    <div class="swiper-slide">Slide 5</div>
                    <div class="swiper-slide">Slide 6</div>
                    <div class="swiper-slide">Slide 7</div>
                    <div class="swiper-slide">Slide 8</div>
                    <div class="swiper-slide">Slide 9</div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div> --}}
        </div>

        {{-- shipping area --}}
        <div class="shipping-area  " style="padding: 90px;">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-3  col-sm-6">
                        <div class="single-shipping d-flex ">
                            <div class="shipping-icon">
                                <img src="{{ asset('assets/imgs/Free-Delivery.png') }}" alt="">
                            </div>
                            <div class="shipping-content" style="margin-left:20px;">
                                <h5 class="title">
                                    Miễn phí vận chuyển
                                </h5>
                                <p>Giao hàng miễn phí cho tất cả các đơn đặt hàng trên 1.000.000đ</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3  col-sm-6">
                        <div class="single-shipping d-flex ">
                            <div class="shipping-icon">
                                <img src="{{ asset('assets/imgs/Online-Order.png') }}" alt="">
                            </div>
                            <div class="shipping-content" style="margin-left:20px;">
                                <h5 class="title">
                                    Đặt hàng online
                                </h5>
                                <p>Đừng lo lắng, bạn có thể đặt hàng Trực tuyến trên Trang web của chúng tôi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3  col-sm-6">
                        <div class="single-shipping d-flex ">
                            <div class="shipping-icon">
                                <img src="{{ asset('assets/imgs/Freshness.png') }}" alt="">
                            </div>
                            <div class="shipping-content" style="margin-left:20px;">
                                <h5 class="title">
                                    Hiện đại
                                </h5>
                                <p>Cập nhật những sản phẩm mới nhất</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3  col-sm-6">
                        <div class="single-shipping d-flex ">
                            <div class="shipping-icon">
                                <img src="{{ asset('assets/imgs/Made-By-Artists.png') }}" alt="">
                            </div>
                            <div class="shipping-content" style="margin-left:20px;">
                                <h5 class="title">
                                    Hỗ trợ 24\7
                                </h5>
                                <p>Đội ngũ hỗ trợ trưc tuyến chuyên nghiệp</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- product-recommend --}}
        <div class="new-product-area " style="padding: 90px;">
            <div class="container ">
                <div class="row d-flex justify-content-center ">
                    <div class="col-6 ">
                        <div class="section-title text-center ">
                            <h2>Gợi Ý Cho Bạn</h2>
                            <p>A perfect blend of creativity, energy, communication, happiness and love. Let us arrange
                                a smile for you.</p>
                        </div>
                    </div>
                </div>

                {{-- san pham moi slide --}}
                <div class="swiper newProduct mt-5 ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="single-product">
                                <div class="product-image">
                                    <a href="">
                                        <img src="{{ asset('assets/imgs/Made-By-Artists.png') }}" alt="">
                                    </a>
                                    <div class="action-links">
                                        <ul>
                                            <li>
                                                <a class="product-detail" href="">Xem chi tiết</a>
                                            </li>
                                            <li>
                                                <a class="add-to-cart" href="">Thêm giỏ hàng</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4 class="product-name">

                                    </h4>
                                    <div class="price-box">
                                        <span class="current-price">25000000đ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-product">
                                <div class="product-image">
                                    <a href="">
                                        <img src="{{ asset('assets/imgs/Made-By-Artists.png') }}" alt="">
                                    </a>
                                    <div class="action-links">
                                        <ul>
                                            <li>
                                                <a class="product-detail" href="">Xem chi tiết</a>
                                            </li>
                                            <li>
                                                <a class="add-to-cart" href="">Thêm giỏ hàng</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4 class="product-name">

                                    </h4>
                                    <div class="price-box">
                                        <span class="current-price">25000000đ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-product">
                                <div class="product-image">
                                    <a href="">
                                        <img src="{{ asset('assets/imgs/Made-By-Artists.png') }}" alt="">
                                    </a>
                                    <div class="action-links">
                                        <ul>
                                            <li>
                                                <a class="product-detail" href="">Xem chi tiết</a>
                                            </li>
                                            <li>
                                                <a class="add-to-cart" href="">Thêm giỏ hàng</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4 class="product-name">

                                    </h4>
                                    <div class="price-box">
                                        <span class="current-price">25000000đ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- San pham moi --}}
        <div class="container" style="padding: 90px;">
            <div class="row d-flex justify-content-center ">
                <div class="col-6 ">
                    <div class="section-title text-center ">
                        <h2>Sản phẩm mới</h2>
                        <p>A perfect blend of creativity, energy, communication, happiness and love. Let us arrange
                            a smile for you.</p>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="mt-4">
                <!-- List group -->
                <div class="list-group d-flex container flex-row justify-content-center" style="min-width:450px;"
                    id="myList" role="tablist">
                    <a class="list-group-item title list-group-item-action active" style="border:none;"
                        data-bs-toggle="list" href="#banchay" role="tab">Bán chạy</a>
                    <a class="list-group-item title list-group-item-action" style="border:none;"
                        data-bs-toggle="list" href="#noibat" role="tab">Nổi bật</a>
                    <a class="list-group-item title list-group-item-action" style="border:none;"
                        data-bs-toggle="list" href="#dangsale" role="tab">Đang sale</a>
                </div>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="banchay" role="tabpanel">
                        <div class="container ">
                            <div class="swiper newProduct">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="">
                                                    <img src="{{ asset('assets/imgs/Made-By-Artists.png') }}"
                                                        alt="">
                                                </a>
                                                <div class="action-links">
                                                    <ul>
                                                        <li>
                                                            <a class="product-detail" href="">Xem chi tiết</a>
                                                        </li>
                                                        <li>
                                                            <a class="add-to-cart" href="">Thêm giỏ hàng</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h4 class="product-name">

                                                </h4>
                                                <div class="price-box">
                                                    <span class="current-price">25000000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="">
                                                    <img src="{{ asset('assets/imgs/Made-By-Artists.png') }}"
                                                        alt="">
                                                </a>
                                                <div class="action-links">
                                                    <ul>
                                                        <li>
                                                            <a class="product-detail" href="">Xem chi tiết</a>
                                                        </li>
                                                        <li>
                                                            <a class="add-to-cart" href="">Thêm giỏ hàng</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h4 class="product-name">

                                                </h4>
                                                <div class="price-box">
                                                    <span class="current-price">25000000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="">
                                                    <img src="{{ asset('assets/imgs/anh-gai-dep-nhat_025059644.jpg') }}"
                                                        alt="">
                                                </a>
                                                <div class="action-links">
                                                    <ul>
                                                        <li>
                                                            <a class="product-detail" href="">Xem chi tiết</a>
                                                        </li>
                                                        <li>
                                                            <a class="add-to-cart" href="">Thêm giỏ hàng</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h4 class="product-name">

                                                </h4>
                                                <div class="price-box">
                                                    <span class="current-price">25000000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="noibat" role="tabpanel">...</div>
                    <div class="tab-pane" id="dangsale" role="tabpanel">...</div>
                </div>
            </div>
        </div>

        {{-- baiviet --}}
        <div class="container " style="padding: 90px;">
            <div class="row d-flex justify-content-center ">
                <div class="col-6 ">
                    <div class="section-title text-center ">
                        <h2>Bài viết của chúng tôi</h2>
                        <p>A perfect blend of creativity, energy, communication, happiness and love. Let us arrange
                            a smile for you.</p>
                    </div>
                </div>
            </div>
            <div class="swiper mySwiper mt-5 ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                    <div class="swiper-slide">Slide 4</div>
                    <div class="swiper-slide">Slide 5</div>
                    <div class="swiper-slide">Slide 6</div>
                    <div class="swiper-slide">Slide 7</div>
                    <div class="swiper-slide">Slide 8</div>
                    <div class="swiper-slide">Slide 9</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script> --}}
{{-- <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script> --}}
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    // var swiper = new Swiper(".mySwiper", {
    //     slidesPerView: 1,
    //     spaceBetween: 30,
    //     loop: true,
    //     pagination: {
    //         el: ".swiper-pagination",
    //         clickable: true,
    //     },
    //     navigation: {
    //         nextEl: ".swiper-button-next",
    //         prevEl: ".swiper-button-prev",
    //     },
    // });
    const swiperNewProduct = new Swiper(".newProduct", {
        watchSlidesProgress: true,
        slidesPerView: 4,
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    var swiperBanner = new Swiper('.slider-active', {
        speed: 800,
        loop: true,
        slidesPerView: 1,
        // autoplay: {
        //     delay: 2500,
        //     disableOnInteraction: false,
        // },
        navigation: {
            nextEl: ".swiper-next",
            prevEl: ".swiper-prev",
        },
        // navigation: {
        //     nextEl: ".swiper-button-next",
        //     prevEl: ".swiper-button-prev",
        // },
        effect: "fade",
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
    var swiper = new Swiper(".mySwiper", {
        watchSlidesProgress: true,
        slidesPerView: 3,
    });
</script>
