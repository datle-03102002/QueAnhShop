@extends('admin.components.dashboard')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .success-icon {
            color: green;
        }
    </style>
    <div class="row">
        <div class="col-md-12 ">
            <div class="card-header bg-transparent border-0 ">
                <h4>
                    <a href="{{ route('product.index') }}" class="btn btn-primary btn-sm float-right">Back</a>
                </h4>
            </div>
            <div class="card-body container ">
                <form action="{{ route('product.update', ['product' => $product->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md mb-3">
                            <label>Tên sản phẩm
                            </label>
                            <input type="text" name="name" class="form-control" value="{{ $product->name }}" />
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md mb-3">
                            <label for="category">Danh mục</label>
                            <select class="form-select" id="category" name="category">
                                <option value="">Chọn danh mục</option>
                                @foreach ($category as $category)
                                    <option value="{{ $category->id }}"
                                        selected="{{ $category->id == $product->category_id ? 'true' : 'false' }}">
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                            {{-- @if ($errors->has('category'))
                                <x-validation-errors>
                                    {{ $errors->first('category') }}
                                </x-validation-errors>
                            @endif --}}

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <label>Số lượng
                            </label><br>
                            <input type="number" name="quantity" id="quantity" class="form-control" min="1"
                                step="1" value="{{ $product->stock }}" />
                            @error('quantity')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-6">
                            <label>Giá tiền:
                            </label>
                            <input type="number" name="price" class="form-control" value="{{ $product->price }}" />
                            @error('price')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>

                    <div class="row">
                        <div class="container ">
                            <div class="row">
                                <div class="container-fluid col-6">
                                    <label>Available Sizes: Small, Medium, Large, XL, XXL</label>
                                    <table class="table text-center table-bordered ">
                                        <tr>
                                            <th>Kích thước</th>
                                            <th>Màu sắc</th>
                                            <th>Số lượng trong kho</th>
                                            <th>Thao tác</th>
                                        </tr>
                                        @foreach ($product->productDetail as $key => $item)
                                            <tr>
                                                <td>{{ $item->size }}
                                                </td>
                                                <td>{{ $item->color }}</td>
                                                <td class="single-quantity">{{ $item->quantity }}</td>
                                                <td>
                                                    <button class="edit" data-id="{{ $item->id }}" type="button"
                                                        onclick="editRow(this)">Sửa</button>
                                                    <button type="button"
                                                        onclick="deleteItem('{{ $item->id }}',this)">Xóa</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                {{-- <div class="container-fluid col-6 color">
                                    <div class="row">
                                        @php
                                            $displayedColors = [];
                                        @endphp
                                        @foreach ($product->productDetail as $key => $item)
                                            @if (!in_array($item->color, $displayedColors))
                                                @php
                                                    $displayedColors[] = $item->color; // Thêm kích thước vào mảng đã hiển thị
                                                @endphp
                                                <div class="row">
                                                    <input type="text" class="form-control" name="color[]" readonly
                                                        value="{{ $item->color }}">
                                                </div>
                                            @endif
                                        @endforeach
                                        <div class="row">
                                            <div class="col-6">
                                                <label>Màu sắc
                                                </label>
                                                <input type="text" id="inputColor" name="inputColor"
                                                    class="form-control" />
                                            </div>
                                            <div class="col-6">
                                                <label for="">Số lượng</label>
                                                <input type="text" id="inputNewQuantity" name="inputNewQuantity"
                                                    class="form-control" />
                                            </div>
                                        </div>
                                        <button type="button" onclick="addcolor();">Thêm màu</button>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($product->images as $item)
                            <div class="col-3">
                                <img src="{{ $item->url }}" alt="">
                            </div>
                        @endforeach
                        <div class="col-md-6 mb-3">
                            <label>Image</label>
                            <input type="file" name="image[]" multiple class="form-control" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md mb-3">
                            <label>Description
                            </label>
                            <textarea style="max-height:90px; max-width:543px" name="description" class="form-control"></textarea>
                        </div>

                    </div>
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary text-white">Save</button>
                    </div>

                </form>

            </div>

        </div>
    </div>
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        // $(document).ready(function() {
        const token = document.querySelector('input[name="_token"]').value;
        // console.log(token);
        // })
        function deleteItem(id, button) {

            // console.log(button);
            swal({
                    title: 'Bạn muốn xóa size và màu này?',
                    buttons: {
                        cancel: true,
                        confirm: "Confirm",
                    }
                })
                .then((confirmed) => {
                    if (confirmed) {
                        // console.log('xoa');
                        executeDelete(id, button);
                    }
                })
        }

        function executeDelete(id, button) {
            $.ajax({
                url: '/admin/deleteItemProductDetail',
                type: 'post',
                headers: {
                    'X-CSRF-TOKEN': token
                },
                data: {
                    id: id
                },
                success: function(data) {
                    button.parentNode.parentNode.remove();
                    swal("Thông báo", "Xóa thành công", "success");

                },
                error: function(error) {
                    swal('Có lỗi khi xóa');
                }

            })
        }

        function editRow(button) {
            var row = button.parentNode.parentNode;
            var cells = row.getElementsByTagName("td");

            for (var i = 0; i < cells.length - 1; i++) {
                var cell = cells[i];
                var text = cell.textContent || cell.innerText;
                if (i == cells.length - 2) {
                    cell.innerHTML = '<input type="number" value="' + text.trim() + '" min="1" step="1">';
                } else {
                    cell.innerHTML = '<input type="text" value="' + text.trim() + '">';
                }
            }

            var editButton = row.querySelector('button[onclick="editRow(this)"]');
            editButton.setAttribute("onclick", "saveRow(this)");
            editButton.textContent = "Lưu";
        }

        function saveRow(button) {
            // console.log(token);
            const ArraySize = ['small', 'mediun', 'large', 'xl', 'xxl'];
            var row = button.parentNode.parentNode;
            var inputs = row.querySelectorAll("td input");
            const id = $(button).data('id');

            var data = {};
            data.id = id;
            console.log(data.id);
            data.size = inputs[0].value;
            data.color = inputs[1].value;
            data.quantity = inputs[2].value;
            if (!ArraySize.includes(data.size)) {
                swal("Lỗi", "Kích thước có sẵn: small, medium, large, xl, xxl", "warning");
                return;
            }
            if (parseInt(data.quantity) < 0) {
                swal("Lỗi", "Số lượng không được bé hơn 0", "warning");
                return;
            }
            $.ajax({
                url: '/admin/updateProductDetail',
                type: 'post',
                headers: {
                    'X-CSRF-TOKEN': token
                },
                data: {
                    data: data
                },
                success: function(data) {
                    document.querySelector("#quantity").value = data.mes;
                    swal("Thông báo", "Cập nhật thành công", "success");

                }

            })
            for (var i = 0; i < inputs.length; i++) {
                var input = inputs[i];
                var value = input.value;
                row.cells[i].textContent = value;
            }

            var saveButton = row.querySelector('button[onclick="saveRow(this)"]');
            saveButton.setAttribute("onclick", "editRow(this)");
            saveButton.textContent = "Sửa";




        }

        // function validateTotal() {
        //     // Get values from the "Small," "Medium," "Large," "XL," and "XXL" input fields
        //     var smallValue = parseInt(document.getElementById("small")?.value) || 0;
        //     var mediumValue = parseInt(document.getElementById("medium")?.value) || 0;
        //     var largeValue = parseInt(document.getElementById("large")?.value) || 0;
        //     var xlValue = parseInt(document.getElementById("xl")?.value) || 0;
        //     var xxlValue = parseInt(document.getElementById("xxl")?.value) || 0;

        //     // Calculate the total
        //     var total = smallValue + mediumValue + largeValue + xlValue + xxlValue;

        //     // Update the "quantity" input field with the total value
        //     document.getElementById("quantity").value = total;
        // }

        function addcolor() {
            let rowColor = document.querySelectorAll(".color")[0];
            let Inputcolor = document.getElementById('inputColor');
            let inputQuantity = document.getElementById('inputNewQuantity');
            if (inputQuantity.value == "") {

                let newDiv = document.createElement('div');
                newDiv.className = "row";
                newDiv.innerHTML =
                    `
                <input type="text" class="form-control" name="newcolor[]" value="${Inputcolor.value}">
                `;
                rowColor.prepend(newDiv);
                Inputcolor.value = "";
                // inputQuantity.value = '';
                Inputcolor.focus();
            } else {
                let newDiv = document.createElement('div');
                newDiv.className = "row";
                newDiv.innerHTML =
                    `<div class="col-6 ">
                <input type="text" class="form-control" name="newcolor[]" value="${Inputcolor.value}">
                </div>
                <div class="col-6 ">
                    <input type="text" class="form-control" name="newquantitycolor[]" value="${inputQuantity.value}">
                </div>`;
                rowColor.prepend(newDiv);
                Inputcolor.value = "";
                inputQuantity.value = '';
                Inputcolor.focus();
            }

        }
    </script>
@endsection
