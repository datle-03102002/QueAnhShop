<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="content">
        <h2>Thông báo đặt hàng</h2>
        <h3>Mã đơn hàng: {{ $bill->id }}</h3>
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

                    @foreach ($cart as $item)
                        <tr class="product-item id-{{ $item->id }}">
                            <td class="image">

                                <img src="{{ asset('assets/uploads/' . $item->product->images[0]->url) }}"
                                    alt="">
                            </td>
                            <td class="product">

                                {{ $item->product->name }}

                                <span>Mã sản phẩm: {{ $item->product->id }}</span>
                                <span>Loại: {{ $item->color }}-{{ $item->size }}</span>
                                <span class="text-primary">Còn Lại: {{ $item->stock }}</span>
                                {{-- <input type="hidden" class="Quantity" id="Quantity-56-Size8-9Y" value="42"> --}}
                            </td>
                            <td class="price">
                                <span class="amount">{{ number_format($item->product->price, 0, '.', ',') }}</span>
                            </td>
                            <td class="quantity">
                                <div class="quantity d-inline-flex align-items-center border-0 ">
                                    <span>{{ $item->quantity }}</span>

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
    </div>
</body>

</html>
