@extends('client.layout')
@section('content')
    <div class="cart-page section-padding-5">
        <div class="container ">
            <div class="cart-table table-responsive ">
                @csrf
                <table class="table ">
                    <thead>
                        <tr>
                            <th class="image">Hình Ảnh</th>
                            <th class="product">Sản Phẩm</th>
                            <th class="price">Giá</th>
                            <th class="quantity">Số Lượng</th>
                            <th class="total">Tổng</th>
                            <th class="remove">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                        @endphp
                        @foreach ($cart as $item)
                            @php
                                $total += $item->quantity * $item->product->price;
                            @endphp
                            <tr class="product-item id-{{ $item->id }}">
                                <td class="image">
                                    <a href="{{ route('chitietsanpham', ['name' => $item->product->slug]) }}">
                                        <img src="{{ asset('assets/uploads/' . $item->product->images[0]->url) }}"
                                            alt=""></a>
                                </td>
                                <td class="product">
                                    <a href="{{ route('chitietsanpham', ['name' => $item->product->slug]) }}">
                                        {{ $item->product->name }}
                                    </a>
                                    <span>Mã sản phẩm: {{ $item->product->id }}</span>
                                    <span>Loại: {{ $item->color }}-{{ $item->size }}</span>
                                    <span class="text-primary">Còn Lại: {{ $item->stock }}</span>
                                    {{-- <input type="hidden" class="Quantity" id="Quantity-56-Size8-9Y" value="42"> --}}
                                </td>
                                <td class="price">
                                    <span class="amount">{{ number_format($item->product->price, 0, '.', ',') }}</span>
                                </td>
                                <td class="quantity">
                                    <div class="quantity d-inline-flex align-items-center ">
                                        <i class="fa fa-minus-square"></i>
                                        <input type="number" class="QuantityBuy" id="QuantityBuy-56"
                                            value="{{ $item->quantity }}" min="1"
                                            oninput="validity.valid||(value='1');">
                                        <i class="fa fa-plus-square"></i>
                                        <div class="alert-qty-input"><span class="message-qty-input">Mua tối đa
                                                {{ $item->stock }} sản
                                                phẩm!</span></div>
                                        {{-- <input type="hidden" value="35">
                                    <input type="hidden" value="175000">
                                    <input type="hidden" value="42"> --}}
                                    </div>
                                </td>
                                <td class="total">
                                    <span
                                        class="total-amount">{{ number_format($item->product->price * $item->quantity, 0, '.', ',') }}</span>
                                </td>
                                <td class="remove">
                                    <button class="view-hover delete-pd-cart bg-transparent border-0 "
                                        data-id="{{ $item->id }}"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="cart-btn">
                <div class="cart-btn-left">
                    <a href="http://kidolshop.click/store" class="btn btn-primary">Tiếp tục mua sắm</a>
                </div>
                <div class="cart-btn-right">
                    <a href="http://kidolshop.click/delete-cart" class="btn">Xóa giỏ hàng</a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-totals">
                        <div class="cart-title">
                            <h4 class="title">Tổng giỏ hàng</h4>
                        </div>
                        <div class="cart-total-table mt-25">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="value">Thành Tiền</p>
                                        </td>
                                        <td>
                                            <p class="price">{{ number_format($total, 0, '.', ',') }}</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-total-btn">
                            <a href="{{ route('thanhtoan') }}" class="btn btn-primary btn-block btn-payment">Thanh
                                toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        const token = $('input[name="_token"]').val();
        $('.delete-pd-cart').click(function() {
            const idCart = $(this).data('id');
            // console.log(token);
            $.ajax({
                url: '/deleteCartItem',
                type: 'POST',
                data: {
                    _token: token,
                    id: idCart
                },
                success: function(data) {
                    // console.log(data);
                    if (data.status == true) {
                        // console.log(data.status);
                        $(`.id-${idCart}`).remove();
                    } else {
                        console.log(data.message);
                    }
                }
            })
        })
    </script>
@endsection
