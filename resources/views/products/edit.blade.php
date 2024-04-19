<!-- resources/views/products/edit.blade.php -->

<head>
    <!-- Các thẻ meta và các liên kết khác -->
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Sửa sản phẩm</h1>
        <form action="{{ route('products.update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
            </div>

            <div class="form-group">
                <label for="price">Giá sản phẩm</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
            </div>

            <div class="form-group">
                <label for="description">Mô tả sản phẩm</label>
                <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Ảnh sản phẩm</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>


            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
@endsection
