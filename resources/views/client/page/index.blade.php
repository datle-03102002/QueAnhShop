@extends('client.layout')
@section('content')
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
                    @foreach ($product as $key => $item)
                        <div class="swiper-slide">
                            <div class="single-product">
                                <div class="product-image">
                                    <a href="">
                                        <img src="{{ asset('assets/uploads/' . $item->images[1]->url) }}" alt="">
                                    </a>
                                    <div class="action-links">
                                        <ul>
                                            <li>
                                                <a class="product-detail" href=""><i class="fa fa-eye"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a class="add-to-cart" href=""><i class="fa fa-cart-plus"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4 class="product-name">
                                        {{ $item->name }}
                                    </h4>
                                    <div class="price-box">
                                        <span class="current-price">{{ $item->price }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


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
            <div class="list-group d-flex container flex-row justify-content-center" style="min-width:450px;" id="myList"
                role="tablist">
                <a class="list-group-item title list-group-item-action active" style="border:none;" data-bs-toggle="list"
                    href="#banchay" role="tab">Bán chạy</a>
                <a class="list-group-item title list-group-item-action" style="border:none;" data-bs-toggle="list"
                    href="#noibat" role="tab">Nổi bật</a>
                <a class="list-group-item title list-group-item-action" style="border:none;" data-bs-toggle="list"
                    href="#dangsale" role="tab">Đang sale</a>
            </div>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="banchay" role="tabpanel">
                    <div class="container ">

                        <div class="swiper newProduct">
                            <div class="swiper-wrapper">
                                @foreach ($product as $key => $item)
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="">
                                                    <img src="{{ asset('assets/uploads/' . $item->images[1]->url) }}"
                                                        alt="">
                                                </a>
                                                <div class="action-links">
                                                    <ul>
                                                        <li>
                                                            <a class="product-detail" href=""><i class="fa fa-eye"
                                                                    aria-hidden="true"></i></a>
                                                        </li>
                                                        <li>
                                                            <a class="add-to-cart" href=""><i
                                                                    class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h4 class="product-name">
                                                    {{ $item->name }}
                                                </h4>
                                                <div class="price-box">
                                                    <span class="current-price">{{ $item->price }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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
@endsection
