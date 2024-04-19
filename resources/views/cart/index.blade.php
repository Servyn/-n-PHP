<!-- resources/views/cart.blade.php -->

<head>
    <!-- Các thẻ meta và các liên kết khác -->
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
</head>
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Giỏ hàng của bạn</h2>
        @if (session('cart'))
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Thành tiền</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total = 0;
                    @endphp
                    @foreach (session('cart') as $key => $cartItem)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $cartItem['name'] }}</td>
                            <td>{{ $cartItem['quantity'] }}</td>
                            <td>{{ $cartItem['price'] }}</td>
                            <td>{{ $cartItem['quantity'] * $cartItem['price'] }}</td>
                            <td>
                                <form action="{{ route('cart.remove', $key) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Xóa</button>
                                </form>
                            </td>
                        </tr>
                        @php
                            $total += $cartItem['quantity'] * $cartItem['price'];
                        @endphp
                    @endforeach
                    <tr>
                        <td colspan="4"><strong>Tổng cộng:</strong></td>
                        <td colspan="2"><strong>{{ $total }}</strong></td>
                    </tr>
                </tbody>
            </table>
            {{-- <a href="{{ route('cart.checkout') }}" class="btn btn-primary">Thanh toán</a> --}}
        @else
            <p>Giỏ hàng của bạn đang trống</p>
        @endif
    </div>
@endsection
