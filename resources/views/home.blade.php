<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./public/css/view.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
    @include('partials.header')

    <div class="container">
        <!-- Hiển thị thông báo nếu có -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Hiển thị sản phẩm vừa thêm -->
        @if (session('product'))
            <div class="container mt-5">
                <div class="card">
                    <div class="card-header">
                        {{ session('product')->name }}
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('storage/' . session('product')->image) }}" alt="Product Image">
                        {{-- <p>Description: {{ session('product')->description }}</p> --}}
                        <p>Price: {{ session('product')->price }}</p>
                        <!-- Liên kết đến trang chi tiết sản phẩm -->
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

        <!-- Nút để chuyển hướng đến trang tạo sản phẩm -->
        <div class="text-center mt-3">
            <a href="{{ route('products.create') }}" class="btn btn-primary">Thêm sản phẩm</a>
        </div>
    </div>
</body>

</html>
