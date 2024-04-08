@extends('admin.components.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12 ">
            <div class="card-header">
                {{-- <h4> Add Product
                    <a href="{{ route('product') }}" class="btn btn-primary btn-sm float-right">Back</a>

                </h4> --}}
            </div>
            {{-- <style>
                .card-body {
                    border: 1px solid #ccc;
                    /* Add a border around the div */
                    padding: 20px;
                    /* Add space inside the div */
                    border-radius: 5px;
                    /* Add rounded corners for a box-like appearance */
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    /* Add a shadow to give it depth */
                }
            </style> --}}
            <div class="card-body container ">
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md mb-3">
                            <label>Name
                            </label>
                            <input type="text" name="name" class="form-control" />
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md mb-3">
                            <label for="category">Category</label>
                            <select class="form-control" id="category" name="category">
                                <option value="">Select Category</option>
                                @foreach ($category as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                                step="1" />
                            @error('quantity')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-6">
                            <label>Price
                            </label>
                            <input type="number" name="price" class="form-control" />
                            @error('price')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>

                    <div class="row">
                        <div class="container ">
                            <div class="row">
                                <div class="container-fluid col-6">
                                    <label>Available Sizes</label>
                                    <div class="row enableInput" style="max-width: 300px;">
                                        <div class="col-sm">
                                            <label>Small :</label>
                                            <input type="checkbox" name="size[]" value="small" id="enableInput"
                                                onchange="toggleInputFields('enableInput','small')" />
                                        </div>
                                        <div class="col-sm  d-flex justify-content-">
                                            <label for="small">Small:</label><br>
                                            <input type="number" name="small" id="small" class="form-control"
                                                style="width: 100px;" oninput="validateTotal()" min="1"
                                                step="1" readonly />
                                        </div>

                                    </div>

                                    <div class="row enablemedium" style="max-width: 300px;">
                                        <div class="col-6 ">
                                            <label>Medium :</label>
                                            <input type="checkbox" name="size[]" value="medium" id="enablemedium"
                                                onchange="toggleInputFields('enablemedium','medium')" />
                                        </div>
                                        <div class="col-6 d-flex justify-content-">
                                            <label for="medium">Medium:</label><br>
                                            <input type="number" name="medium" id="medium" class="form-control"
                                                style="width: 100px;" oninput="validateTotal()" min="1"
                                                step="1" readonly />
                                        </div>
                                    </div>

                                    <div class="row enablelarge" style="max-width: 300px;">
                                        <div class="col-6 ">
                                            <label>Large :</label>
                                            <input type="checkbox" name="size[]" value="large" id="enablelarge"
                                                onchange="toggleInputFields('enablelarge','large')" />
                                        </div>
                                        <div class="col-6 d-flex justify-content-">
                                            <label for="large">Large:</label><br>
                                            <input type="number" name="large" id="large" class="form-control"
                                                style="width: 100px;" oninput="validateTotal()" min="1"
                                                step="1" readonly />
                                        </div>
                                    </div>

                                    <div class="row enableXL" style="max-width: 300px;">
                                        <div class="col-6 ">
                                            <label>XL :</label>
                                            <input type="checkbox" name="size[]" value="xl" id="enableXL"
                                                onchange="toggleInputFields('enableXL','xl')" />
                                        </div>
                                        <div class="col-6 d-flex justify-content-">
                                            <label for="xl">XL:</label><br>
                                            <input type="number" name="xl" id="xl" class="form-control"
                                                style="width: 100px;"oninput="validateTotal()" min="1"
                                                step="1" readonly />
                                        </div>
                                    </div>

                                    <div class="row enableXXL" style="max-width: 300px;">
                                        <div class="col-6 ">
                                            <label>XXL :</label>
                                            <input type="checkbox" name="size[]" value="xxl" id="enableXXL"
                                                onchange="toggleInputFields('enableXXL','xxl')" />
                                        </div>
                                        <div class="col-6 d-flex justify-content-">
                                            <label for="xxl">XXL:</label><br>
                                            <input type="number" name="xxl" id="xxl" class="form-control"
                                                style="width: 100px;" oninput="validateTotal()" min="1"
                                                step="1" readonly />
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid col-6 color">
                                    <div class="row">
                                        <label>Color
                                        </label>
                                        <input type="text" id="inputColor" name="inputColor" class="form-control" />
                                        @error('color')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        <button type="button" onclick="addcolor();">add color</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                            </div>
                        </div>
                    </div>


                    {{-- category --}}
                    <div class="row">
                        <div class="col-md-6">

                        </div>

                        {{-- <div class="col-md mb-3">
                            <label>Color
                            </label>
                            <input type="text" name="inputcolor" class="form-control" />
                            @error('color')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div> --}}
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
    <script>
        function toggleInputFields(idSize, InputSize) {
            let enableInputCheckbox = document.getElementById(idSize)
            let inputFields = document.querySelectorAll("#" + InputSize);
            let rowSize = document.querySelectorAll("." + idSize)[0];
            console.log(rowSize);

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
            const input1 = parseInt(document.getElementById("small").value) || 0;
            const input2 = parseInt(document.getElementById("medium").value) || 0;
            const input3 = parseInt(document.getElementById("large").value) || 0;
            const input4 = parseInt(document.getElementById("xl").value) || 0;
            const input5 = parseInt(document.getElementById("xxl").value) || 0;
            const total = parseInt(document.getElementById("quantity").value) || 0;

            if (input1 + input2 + input3 + input4 + input5 !== total) {
                document.getElementById("error-message").textContent = "Error: Please verify the quantity!";
            } else {
                document.getElementById("error-message").textContent = "";
            }
        }

        function validateTotal() {
            // Get values from the "Small," "Medium," "Large," "XL," and "XXL" input fields
            var smallValue = parseInt(document.getElementById("small").value) || 0;
            var mediumValue = parseInt(document.getElementById("medium").value) || 0;
            var largeValue = parseInt(document.getElementById("large").value) || 0;
            var xlValue = parseInt(document.getElementById("xl").value) || 0;
            var xxlValue = parseInt(document.getElementById("xxl").value) || 0;

            // Calculate the total
            var total = smallValue + mediumValue + largeValue + xlValue + xxlValue;

            // Update the "quantity" input field with the total value
            document.getElementById("quantity").value = total;
        }

        function addcolor() {
            let rowColor = document.querySelectorAll(".color")[0];
            let Inputcolor = document.getElementById('inputColor');

            let newDiv = document.createElement('div');
            newDiv.className = "row";
            newDiv.innerHTML = `<input type="text" class="form-control" name="color[]" value="${Inputcolor.value}">`;
            rowColor.prepend(newDiv);
            Inputcolor.value = "";
            Inputcolor.focus();
        }
    </script>
@endsection
