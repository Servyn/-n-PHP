<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    @include('partials.header')

    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('product'))
            <div class="container mt-5">
                <div class="card">
                    <div class="card-header">
                        {{ session('product')->name }}
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('storage/' . session('product')->image) }}" alt="Product Image">
                        <p>Price: {{ session('product')->price }}</p>
                        <a href="{{ route('products.show', session('product')->id) }}" class="btn btn-primary">Chi tiết
                            sản phẩm</a>
                    </div>
                </div>
            </div>
        @endif

        <!-- Nội dung trang chính -->
        @include('partials.banner')
        @include('partials.product')
        @include('partials.process')
        @include('partials.footer')

        <div class="text-center mt-3">
            <a href="{{ route('products.create') }}" class="btn btn-primary">Thêm sản phẩm</a>
        </div>
        <a href="{{ route('cart.index') }}" class="btn btn-primary">Xem giỏ hàng</a>
    </div>
</body>

</html>
