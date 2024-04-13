<!-- Trong file auth/login.blade.php -->
<form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Hiển thị thông báo lỗi -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Các trường đăng nhập -->
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>

    <!-- Nút đăng nhập -->
    <button type="submit" class="btn btn-primary">Đăng nhập</button>

    <!-- Liên kết đăng ký -->
    <p>Bạn chưa có tài khoản? <a href="{{ route('register') }}">Đăng ký ngay!</a></p>
</form>
