@extends('admin.components.dashboard')
@section('style')
    <style>
        .order-item .nosuccess {
            background-color: #FF9900;
            padding: 5px;
            border-radius: 5px;
            font-weight: 700;
        }

        .order-item .xacnhan {
            background-color: #ec240a;
            padding: 5px;
            border-radius: 5px;
            font-weight: 700;
            color: white;
        }

        .order-item .success {
            background-color: rgb(15, 215, 12);
            padding: 5px;
            border-radius: 5px;
            font-weight: 700;
        }

        .order-item .cash {
            background-color: #FF9900;

            padding: 5px;
            border-radius: 5px;
            font-weight: 700;
        }

        .order-item .vnpay {
            background-color: rgb(15, 215, 12);
            padding: 5px;
            border-radius: 5px;
            font-weight: 700;
        }
    </style>
@endsection
@section('content')
    <div class="row my-3">
        <h3 class="header">Danh sách đơn hàng
        </h3>
        <div class="row my-3 ">
            <div class="col-9 d-flex ">
                <input type="text" class="form-control rounded-2 bg-transparent border-0 " placeholder="Tìm kiếm đơn hàng">
                <button class="bg-transparent " style="border:none">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="{{ route('order.filter') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-3"><label class="form-label fs-6  " for="">Chọn trạng thái: </label></div>
                        <div class="col-4">
                            <select class="form-control-sm " name="status" id="optionstatus">
                                <option value="all">Tất cả</option>
                                <option value="choxacnhan">Chờ xác nhận</option>
                                <option value="danggiao">Đang giao</option>
                                <option value="danhanhang">Đã nhận hàng</option>
                                <option value="dahuy">Đã hủy</option>
                            </select>
                        </div>
                        <div class="col-4">

                            <select class="form-control-sm " name="Cash" id="optionCash">
                                <option value="all">Tất cả</option>
                                <option value="chuathanhtoan">Chưa thanh toán</option>
                                <option value="dathanhtoan">Đã thanh toán</option>
                            </select>
                        </div>
                        <div class="col-1">
                            <button type="submit" class="btn btn-sm btn-primary ">Lọc</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <table class="table  w-100 table-responsive text-center ">
            <thead class="">
                <tr>
                    <th>
                        Mã đơn hàng
                    </th>
                    <th>Ngày</th>
                    <th>Tình trạng đơn hàng</th>
                    <th>Tình trạng thanh toán</th>
                    <th>Khách hàng</th>
                    <th>Tổng tiền</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order as $key => $item)
                    <tr class="order-item">
                        <td>
                            <a href="{{ route('order.show', ['order' => $item->id]) }}">{{ $item->code }}</a>
                        </td>
                        <td>
                            {{-- {{ }} --}}
                            {{ date_format(date_create($item->orderDate), 'd/m/Y H:i:s A') }}
                        </td>
                        <td>
                            @if (mb_strtoupper($item->status) == 'CHỜ XÁC NHẬN')
                                <span class="xacnhan">{{ $item->status }}</span>
                            @elseif (mb_strtoupper($item->status) != 'ĐÃ NHẬN HÀNG')
                                <span class="nosuccess">{{ $item->status }}</span>
                            @else
                                <span class="success">{{ $item->status }}</span>
                            @endif
                        </td>
                        <td>
                            @if (mb_strtoupper($item->paymentMethod) == 'THANH TOÁN KHI NHẬN HÀNG')
                                @if (mb_strtoupper($item->status) == 'ĐÃ NHẬN HÀNG')
                                    <span class="vnpay">Đã thanh toán</span>
                                @else
                                    <span class="cash">Chưa thanh toán</span>
                                @endif
                            @else
                                <span class="vnpay">Đã thanh toán</span>
                            @endif

                        </td>
                        <td>
                            {{ $item->user->email }}
                        </td>
                        <td>
                            {{ number_format($item->totalMoney, 0, ',', '.') }}đ
                        </td>
                        @if (mb_strtoupper($item->status) == 'CHỜ XÁC NHẬN')
                            <td>
                                <button class="btn btn-sm btn-primary text-white "
                                    onclick="changeStatusOrder('{{ $item->id }}','{{ mb_strtoupper($item->status) }}')">
                                    Xác nhận đơn
                                </button>
                            </td>
                        @elseif (mb_strtoupper($item->status) == 'ĐANG GIAO HÀNG')
                            <td>
                                <button class="btn btn-sm btn-primary text-white"
                                    onclick="changeStatusOrder('{{ $item->id }}','{{ mb_strtoupper($item->status) }}')">
                                    Xác nhận đã giao hàng
                                </button>
                            </td>
                        @elseif (mb_strtoupper($item->status) == 'ĐÃ HỦY')
                            <td>
                                {{ $item->cancelReson }}
                            </td>
                        @else
                            <td>
                                <span class="success">{{ $item->status }}</span>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@section('script')
    <script>
        function changeStatusOrder(id, status) {
            const token = $('input[name="_token"]').val();
            $.ajax({
                url: "{{ route('order.changeStatus') }}",
                type: 'post',
                data: {
                    id: id,
                    status: status,
                    _token: token
                },
                success: function(data) {
                    if (data.data == 200) {
                        window.location.reload();
                    }
                }
            })
        }
    </script>
@endsection
