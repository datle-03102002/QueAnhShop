@extends('admin.components.dashboard')
@section('head')
@endsection
@section('content')
    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="form-group">
                <input type="text" name="name">
            </div>
        </div>
        <div class="row">
            <textarea class="ckeditor" id="editor" name="description" rows="10">
        </textarea>
        </div>
        <button type="submit">ADD</button>
    </form>
@endsection
@section('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
    <script>
        const a = document.querySelector('#editor');
        console.log(a);
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
