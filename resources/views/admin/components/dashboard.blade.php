<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quế Anh Shop</title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.bundle.base.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @yield('head')
    @yield('style')
    <style>
        body {
            height: 100vh;
        }
    </style>
</head>

<body class="">
    @csrf
    <div class="container-fluid" style="padding: 0 !important;">
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center text-white ">
                QUẾ ANH SHOP
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center btn-menu" type="button"
                    data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>

                <ul class="navbar-nav navbar-nav-right">


                    <li class="nav-item dropdown d-flex mr-4 ">
                        <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center"
                            id="notificationDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="icon-cog"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">

                            <a href="{{ route('admin.logout') }}" class="dropdown-item preview-item">
                                <i class="icon-inbox"></i> Logout
                            </a>
                        </div>
                    </li>

                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <div class="user-profile">
                    <div class="user-image">
                        <img src="{{ asset('assets/imgs/logo.jpg') }}">
                    </div>
                    <div class="user-name">
                        ADMIN
                    </div>
                    <div class="user-designation">
                        {{-- ADMIN --}}
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <i class="fa fa-home me-3 " aria-hidden="true"></i>
                            <span class="menu-title">Trang chủ</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="{{ route('category.index') }}"
                            aria-expanded="false" aria-controls="ui-basic">
                            <i class="icon-disc menu-icon"></i>
                            <span class="menu-title">Danh mục sản phẩm</span>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('product.index') }}">
                            <i class="icon-file menu-icon"></i>
                            <span class="menu-title">Sản phẩm</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('order.index') }}">
                            <i class="icon-pie-graph menu-icon"></i>
                            <span class="menu-title">Đơn hàng</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('post.index') }}">
                            <i class="icon-pie-graph menu-icon"></i>
                            <span class="menu-title">Bài viết</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <main class="container overflow-y-auto ">
                @yield('content')
            </main>
        </div>
    </div>

</html>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/template.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('input[name="allID"]').change(function() {
            if ($(this).is(':checked')) {
                $('input[name="id"]').prop('checked', true);
            } else {
                $('input[name="id"]').prop('checked', false);
            }
            showOption();
        })

        let checkBox = false;
        // let checkBoxes = 
        function showOption() {
            let allChecked = $('input[name="id"]:checked').length === $('input[name="id"]').length
            if (allChecked) {
                $('input[name="allID"]').prop('checked', true);
            } else {
                $('input[name="allID"]').prop('checked', false);
            }
            checkBox = $('input[name="id"]').is(':checked');
            if (checkBox) {

                $(".action").removeClass('d-none');
            } else {
                // console.log(checkBox);
                $(".action").addClass('d-none');
            }
        }
        $('input[name="id"]').on('change', showOption)
    });
</script>
@yield('script')
