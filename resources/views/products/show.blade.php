<!-- resources/views/products/show.blade.php -->

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
@endsection
