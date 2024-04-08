@extends('admin.components.dashboard')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-end ">
            <div class="col-3 ">
                <a href="{{ route('category.create') }}">
                    <button>
                        ADD Category
                    </button>
                </a>
            </div>
        </div>
        @foreach ($category as $key => $item)
            <div class="row">
                <div class="col-md-3">{{ $item->name }}</div>
                <div class="col-md-3 ">{!! $item->description !!}</div>
                <div class="col-md-3 ">
                    <a href="{{ route('category.edit', ['category' => $item]) }}">
                        <button>Edit</button>
                    </a>
                    <form action="{{ route('category.destroy', ['category' => $item]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('category.destroy', ['category' => $item]) }}"
                            onclick="return confirm('Bạn muốn xóa danh mục này?')">
                            <button>Delete</button>
                        </a>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
