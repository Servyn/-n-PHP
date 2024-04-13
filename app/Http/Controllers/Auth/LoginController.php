<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Hiển thị form đăng nhập
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Xử lý đăng nhập
    public function login(Request $request)
    {
        // Validate dữ liệu đầu vào
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Thử đăng nhập với thông tin cung cấp
        if (Auth::attempt($credentials)) {
            // Nếu đăng nhập thành công, chuyển hướng đến trang chính của ứng dụng
            return redirect()->intended('/');
        }

        // Nếu đăng nhập không thành công, chuyển hướng lại và hiển thị thông báo lỗi
        return back()->withErrors([
            'email' => 'Lỗi đăng nhập',
        ]);
    }
}