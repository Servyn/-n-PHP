<!-- resources/views/products/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div>
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->description }}</p>
        <p>Price: ${{ $product->price }}</p>
    </div>
@endsection
