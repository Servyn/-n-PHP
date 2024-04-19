<!-- resources/views/products/show.blade.php -->

<head>
    <!-- Các thẻ meta và các liên kết khác -->
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
</head>
@extends('layouts.app')

@section('content')
    <div>
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->description }}</p>
        <p>Price: ${{ $product->price }}</p>
    </div>
    <form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Xóa sản phẩm</button>
    </form>
    <a href="{{ route('products.edit', ['id' => $product->id]) }}" class="btn btn-primary">Sửa sản phẩm</a>
    <form action="{{ route('cart.add', ['id' => $product->id]) }}" method="POST">
        @csrf
        <button type="submit">Thêm vào giỏ hàng</button>
    </form>
@endsection
