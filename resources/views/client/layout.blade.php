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
    <link rel="stylesheet" href="{{ asset('assets/css/products.css') }}">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('style')
    <style>
        .header-logo img {
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <div class="main-wrapper">
        <div class="header-section d-lg-block p-0">
            <div class="main-header">
                <div class="container position-relative ">
                    <div class="row align-items-center ">
                        <div class="col-lg-2 ">
                            <div class="header-logo h-100 ">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('assets/imgs/logo.jpg') }}" alt="" style="height: 100%">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 position-static d-flex justify-content-around">
                            <div class="site-main-nav d-flex justify-content-around w-100 ">
                                <div class="site-nav d-flex justify-content-around w-100">
                                    <ul class="nav d-flex justify-content-around w-100 ">
                                        <li class="nav-item mx-2">
                                            <a href="{{ url('/') }}">
                                                Trang chủ
                                            </a>
                                        </li>
                                        <li class="nav-item mx-2 " class="menu-item-has-children position-static ">
                                            <a href="{{ url('/cuahang') }}">
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
                                            <a href="{{ url('tin-tuc') }}">Tin tức</a>
                                        </li>
                                        <li class="nav-item mx-2 ">
                                            <a href="{{ url('ve-chung-toi') }}">Về chúng tôi</a>
                                        </li>
                                        <li class="nav-item mx-2 ">
                                            <a href="{{ url('lienhe') }}">Liên hệ</a>
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
                                        @if (!Auth::check() || Auth::user()->role != 'khachhang')
                                            <a href="{{ route('login') }}"
                                                class="link-underline link-underline-opacity-0 col-6">Đăng
                                                nhập
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
                                                    <li><a class="dropdown-item" href="{{ route('logout') }}">Đăng
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
                                    <p>Nhập: <span class="text-primary">SALE10</span> để được giảm 10%, số lượng có
                                        hạn!
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
                    </div>
                    <div class=" swiper-next"><i class="fa fa-angle-right"></i></div>
                    <div class=" swiper-prev"><i class="fa fa-angle-left"></i></div>

                    <div class="swiper-pagination"></div>

                </div>
            </div>
        </div>
        @yield('content')
    </div>
    <div class="model">
        <div class="model-content">

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
<script>
    let arrayQuantity = [];

    function addToCart(id, event) {
        // console.log(event);
        event.preventDefault();
        fetch(`http://127.0.0.1:8000/api/sizeandcolor/${id}`)
            .then(response => response.json())
            .then(data => {
                arrayQuantity = [];
                let arraySize = new Set();
                let arrayColor = new Set();
                arrayQuantity = data.data;
                data.data.forEach(item => {
                    arraySize.add(item['size']);
                    arrayColor.add(item['color']);
                });
                let html = '';

                html += `
                        <div class="box-color">`
                Array.from(arrayColor).forEach((item, index) => {
                    if (index == 0) {
                        html += `<div class="item">
                                <input type="radio" name="color" id="${item}" data-color="${item}" onclick="toggleSizeAndColor()"checked>
                                <label for="${item}">${item}</label>
                            </div>`
                    } else {
                        html += `<div class="item">
                                <input type="radio" name="color" id="${item}" data-color="${item}" onclick="toggleSizeAndColor()">
                                <label for="${item}">${item}</label>
                            </div>`
                    }
                })
                html += `</div><div class="box-size">`
                // console.log(typeof arrayColor);
                Array.from(arraySize).forEach((item, index) => {
                    // console.log(index);
                    if (index == 0) {
                        html += `<div class="item">
                                    <input type="radio" name="size" id="${item}"  data-size="${item}" onclick="toggleSizeAndColor()" checked>
                                    <label for="${item}">${item}</label>
                                </div>`
                    } else {
                        html += `<div class="item">
                                    <input type="radio" name="size" id="${item}" data-size="${item}" onclick="toggleSizeAndColor()">
                                    <label for="${item}">${item}</label>
                                </div>`
                    }
                })
                html += `</div>
                        `;
                arrayQuantity.forEach((item, index) => {
                    // console.log(index);
                    if (index == 0) {
                        html += `<div class="quantity-item active" data-sizecolor="${item['size']}${item['color']}" >
                                Còn lại: <span>${item['quantity']}</span>
                                </div>`;
                    } else {
                        html += `<div class="quantity-item" data-sizecolor="${item['size']}${item['color']}">
                                Còn lại: <span>${item['quantity']}</span></div>`;
                    }
                })
                html += `<div class="box-quantity">
                            <i onclick="updateQuantityModal('giam')" class="fa fa-minus-square" aria-hidden="true"></i>
                            <input type="number" step="1" min="1" value="1">  
                            <i onclick="updateQuantityModal('tang')" class="fa fa-plus-square" aria-hidden="true"></i>  
                        </div>
                        <div><button class="btn btn-primary btn-add-to-cart">
                                Thêm giỏ hàng
                            </button>
                            </div>`;
                // console.log(html);
                document.querySelector(".model-content").innerHTML += html;
                document.querySelector(".model").classList.add('active')
            });
    }

    function checkquantity() {
        let quantity = document.querySelector(".stock>span").textContent;

    }

    function toggleSizeAndColor() {
        let size;
        let color;
        console.log($('input[name="size"]'));
        console.log($('input[name="color"]'));
        $('input[name="size"]').each(function() {
            if ($(this).is(':checked') == true) {
                console.log("a");
                size = $(this).data('size');

            }
        });
        $('input[name="color"]').each(function() {
            if ($(this).is(':checked') == true) {
                color = $(this).data('color');
            }
        });
        // console.log(size + color);
        $('.quantity-item').each(function() {
            if ($(this).data('sizecolor') == size + color) {
                $(this).addClass('active');
            } else {
                $(this).removeClass('active');
            }
        })
    }

    // them gio hang
    $(".btn-add-to-cart").click(function() {
        let quantity = document.querySelector(".stock>span").textContent
        console.log(quantity);
    })

    function updateQuantityModal(action) {
        // console.log(arrayQuantity);
        let quantity = document.querySelector(".stock>span").textContent;
        console.log(quantity);
        let inputQuantity
        if (action == 'giam') {

        }
    }
</script>
@yield('script')
