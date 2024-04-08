@extends('admin.components.dashboard')
@section('head')
@endsection
@section('content')
    <form action="{{ route('category.update', ['category' => $category]) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="form-group">
                <input type="text" name="name" value="{{ $category->name }}">
            </div>
        </div>
        <div class="row">
            <textarea class="ckeditor" id="editor" name="description" rows="10"> 
                {!! $category->description !!}
        </textarea>
        </div>
        <button type="submit">Edit</button>
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
