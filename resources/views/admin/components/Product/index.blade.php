@extends('admin.components.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12 ">
            <div class="card-header">
                <h4> Danh sách sản phẩm
                    <a href="{{ route('product.create') }}" class="btn btn-primary btn-sm float-right">Thêm sản phẩm</a>

                </h4>
            </div>
            <style>
                th,
                td {
                    text-align: center;
                }

                .status {
                    margin: 0;
                }
            </style>
            <div class="card-body container ">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Danh mục</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Tồn kho</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $key => $item)
                            <tr>
                                <th class="" scope="row">{{ $key + 1 }}</th>
                                <td class="" scope="row">{{ $item->name }}</td>
                                <td class="" scope="row">{{ $item->category->name }}</td>
                                <td class="" scope="row">{{ $item->description }}</td>
                                <td class="" scope="row">{{ $item->price }}</td>
                                <td class="" scope="row">{{ $item->stock }}</td>
                                <td class="" scope="row">
                                    <div class="form-check form-switch d-flex justify-content-center align-items-center">
                                        <input class="form-check-input status" type="checkbox" name="status"
                                            {{ $item->status == 1 ? 'checked' : '' }} data-id="{{ $item->id }}">
                                    </div>
                                </td>
                                <td class="" scope="row">
                                    <a href="{{ route('product.edit', ['product' => $item]) }}">
                                        <button class="btn-primary">Sửa</button>
                                    </a>
                                    <form class="d-inline " action="{{ route('product.destroy', ['product' => $item]) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('product.destroy', ['product' => $item]) }}">
                                            <button class="btn-primary"
                                                onclick="return confirm('Bạn muốn xóa sản phẩm này?')">Xóa</button>
                                        </a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(".status").click(function() {
                // Lấy 'id' và 'status' từ phần tử đang được click
                const id = $(this).data('id');
                const status = $(this).is(":checked");
                console.log("ID:", id, "Status:", status); // Debug log để kiểm tra giá trị id và status
                $.ajax({
                    type: "GET",
                    url: `/admin/product/changeStatus/${status}/${id}`,
                    success: function(data) {
                        console.log(data); // Debug log kết quả trả về từ server
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText); // Log lỗi nếu có
                    }
                })
            });
        });
    </script>
@endsection
