@extends('admin.components.dashboard')

@section('content')
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
                    <div class="row">
                        <div class="col-md mb-3">
                            <label>Name
                            </label>
                            <input type="text" name="name" class="form-control" value="{{ $product->name }}" />
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md mb-3">
                            <label for="category">Category</label>
                            <select class="form-control" id="category" name="category">
                                <option value="">Select Category</option>
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
                            <label>Quantity
                            </label><br>
                            <input type="number" name="quantity" id="quantity" class="form-control" min="1"
                                step="1" value="{{ $product->stock }}" />
                            @error('quantity')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-6">
                            <label>Price
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
                                    @php
                                        $displayedSizes = [];
                                    @endphp
                                    @foreach ($product->productDetail as $key => $item)
                                        @if (!in_array($item->size, $displayedSizes))
                                            @php
                                                $displayedSizes[] = $item->size; // Thêm kích thước vào mảng đã hiển thị
                                            @endphp
                                            <div class="row mt-3  enable{{ $item->size }}" style="max-width: 300px;">
                                                <div class="col-sm">
                                                    <label>{{ $item->size }} :</label>
                                                    <input type="checkbox" name="size[]" value="{{ $item->size }}"
                                                        id="enable{{ $item->size }}" checked
                                                        onchange="toggleInputFields('enable{{ $item->size }}','{{ $item->size }}')" />
                                                </div>
                                                {{-- <div class="col-sm d-flex justify-content-">
                                                    <label for="{{ $item->size }}">{{ $item->size }}:</label><br>
                                                    <input type="number" name="{{ $item->size }}"
                                                        id="{{ $item->size }}" class="form-control" style="width: 100px;"
                                                        oninput="validateTotal()" min="1" step="1"
                                                        value="{{ $item->quantity }}" />
                                                </div> --}}
                                            </div>
                                        @endif
                                        <div class="row mt-2">
                                            <label for="">{{ $item->color }}</label>
                                            <input type="text" class="form-control" name="color[]" readonly
                                                value="{{ $item->quantity }}">
                                        </div>
                                    @endforeach
                                </div>
                                <div class="container-fluid col-6 color">
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Image</label>
                            <input type="file" name="image[]" multiple class="form-control" />
                            @error('image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md mb-3">
                            <label>Description
                            </label>
                            <textarea style="height:90px; width:543px" name="description" class="form-control"></textarea>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary text-white float-end">Save</button>
                    </div>

                </form>

            </div>

        </div>
    </div>
@endsection
@section('script')
    <script>
        function toggleInputFields(idSize, InputSize) {
            let enableInputCheckbox = document.getElementById(idSize)
            let inputFields = document.querySelectorAll("#" + InputSize);
            let rowSize = document.querySelectorAll("." + idSize)[0];
            // console.log(rowSize);

            for (var i = 0; i < inputFields.length; i++) {
                inputFields[i].readOnly = !enableInputCheckbox.checked;
                // if not checked  clear fields
                if (!enableInputCheckbox.checked) {
                    inputFields[i].value = '';
                    console.log('oke');
                }
                //  
            }
        }

        function validateTotal() {
            // Get values from the "Small," "Medium," "Large," "XL," and "XXL" input fields
            var smallValue = parseInt(document.getElementById("small")?.value) || 0;
            var mediumValue = parseInt(document.getElementById("medium")?.value) || 0;
            var largeValue = parseInt(document.getElementById("large")?.value) || 0;
            var xlValue = parseInt(document.getElementById("xl")?.value) || 0;
            var xxlValue = parseInt(document.getElementById("xxl")?.value) || 0;

            // Calculate the total
            var total = smallValue + mediumValue + largeValue + xlValue + xxlValue;

            // Update the "quantity" input field with the total value
            document.getElementById("quantity").value = total;
        }

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
