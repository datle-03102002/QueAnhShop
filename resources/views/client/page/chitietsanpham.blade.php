@extends('client.layout')
@section('style')
    <style>
        .slide-image {
            position: relative;
            overflow: hidden;
        }

        .list-image {
            position: absolute;
            display: flex;
            overflow: hidden;
            flex-wrap: nowrap;

            gap: 10px;
        }

        .image-item {
            flex: 1 0 auto;
            max-width: calc(33.333% - 10px);
            border: 1px solid grey;
        }

        .image-item.active {
            border: 1px solid red;
        }

        .box-size,
        .box-color {
            display: flex;
            min-width: 60px;
            max-height: 40px;
            max-width: 120px;
            margin: 10px;
        }

        .box-color input[type=radio],
        .box-size input[type=radio] {
            display: none
        }

        .box-color label,
        .box-size label {
            height: 40px;
            text-align: center;
            width: 100%;
            padding: 10px;
            background-color: grey;
            color: black;
            cursor: pointer;

        }

        .box-color input[type=radio]:checked+label,
        .box-size input[type=radio]:checked+label {
            background-color: var(--primary-color);
            color: white;
        }


        .quantity-item.active {
            display: block;
        }

        .quantity-item {
            display: none;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-image">
                    <div class="preview-image">
                        <img src="{{ asset('assets/uploads/' . $product->images[0]->url) }}" alt="">
                    </div>
                    <div class="slide-image">
                        <div class="list-image mt-2">
                            @foreach ($product->images as $key => $item)
                                @if ($key == 0)
                                    <div class="image-item active ">
                                        <img src="{{ asset('assets/uploads/' . $item->url) }}" alt="">
                                    </div>
                                @else
                                    <div class="image-item ">
                                        <img src="{{ asset('assets/uploads/' . $item->url) }}" alt="">
                                    </div>
                                    <div class="image-item ">
                                        <img src="{{ asset('assets/uploads/' . $item->url) }}" alt="">
                                    </div>
                                    <div class="image-item ">
                                        <img src="{{ asset('assets/uploads/' . $item->url) }}" alt="">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h3>{{ $product->name }}</h3>
                <h5>Mã sản phẩm: {{ $product->id }}</h5>
                <div class="product-info">
                    <div>
                        Còn lại: {{ $product->stock }} sản phẩm
                    </div>
                    <div class="fw-bold ">
                        {{ $product->price }}
                    </div>
                </div>
                <div class="product-color d-flex ">
                    @php
                        $arrayColor = [];
                    @endphp
                    @foreach ($product->productDetail as $key => $item)
                        @if (!in_array($item->color, $arrayColor))
                            @php
                                $arrayColor[] = $item->color;
                            @endphp
                            @if ($key == 0)
                                <div class="box-color">
                                    <input type="radio" name="color" id="{{ $item->color }}"
                                        onclick="toggleSizeAndColor()" checked data-color="{{ $item->color }}">
                                    <label for="{{ $item->color }}" class="color-item">
                                        {{ $item->color }}
                                    </label>
                                </div>
                            @else
                                <div class="box-color">
                                    <input type="radio" name="color" id="{{ $item->color }}"
                                        onclick="toggleSizeAndColor()" data-color="{{ $item->color }}">
                                    <label for="{{ $item->color }}" class="color-item">
                                        {{ $item->color }}
                                    </label>
                                </div>
                            @endif
                        @endif
                    @endforeach

                </div>
                <div class="product-size d-flex">
                    @php
                        $arraysize = [];
                    @endphp
                    @foreach ($product->productDetail as $key => $item)
                        @if (!in_array($item->size, $arraysize))
                            @php
                                $arraysize[] = $item->size;
                            @endphp
                            @if ($key == 0)
                                <div class="box-size">
                                    <input type="radio" name="size" id="{{ $item->size }}"
                                        onclick="toggleSizeAndColor()" checked data-size="{{ $item->size }}">
                                    <label for="{{ $item->size }}" class="size-item">
                                        {{ $item->size }}
                                    </label>
                                </div>
                            @else
                                <div class="box-size">
                                    <input type="radio" name="size" id="{{ $item->size }}"
                                        onclick="toggleSizeAndColor()" data-size="{{ $item->size }}">
                                    <label for="{{ $item->size }}" class="size-item">
                                        {{ $item->size }}
                                    </label>
                                </div>
                            @endif
                        @endif
                    @endforeach
                </div>
                <div class="quantityInStock">
                    @php
                        $arrayQuantity = [];
                    @endphp
                    @foreach ($product->productDetail as $key => $item)
                        {{-- @php
                            // dd($item->color . $item->size);
                            
                        @endphp --}}
                        @if ($key == 0)
                            <div class="quantity-item active" data-sizecolor="{{ $item->size }}{{ $item->color }}">
                                Còn lại: <span>{{ $item->quantity }}</span>
                            </div>
                        @else
                            <div class="quantity-item " data-sizecolor="{{ $item->size }}{{ $item->color }}">
                                Còn lại: <span>{{ $item->quantity }}</span>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="quantity-buy">
                    <button type="button"></button>
                    <input type="number" name="" id="" min="1" step="1" value="1">
                    <button type="button"></button>
                </div>
                <div>
                    <button class="btn btn-primary btnAddToCart">
                        Thêm vào giỏ hàng
                    </button>
                </div>
                <div>
                    <button class="btn btn-primary ">
                        Mua ngay
                    </button>
                </div>
                <div>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="chitiet-tab" data-bs-toggle="pill" data-bs-target="#chitiet"
                                type="button" role="tab" aria-controls="chitiet" aria-selected="true">Chi tiết sản
                                phẩm</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="danhgia-tab" data-bs-toggle="pill" data-bs-target="#danhgia"
                                type="button" role="tab" aria-controls="danhgia" aria-selected="false">Đánh
                                giá</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="chitiet" role="tabpanel"
                            aria-labelledby="chitiet-tab">
                            <div class="product-description">
                                <h4 class="title">
                                    Mô tả sản phẩm
                                </h4>
                                <div class="body">
                                    {!! $product->description !!}
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="danhgia" role="tabpanel" aria-labelledby="danhgia-tab">...
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
