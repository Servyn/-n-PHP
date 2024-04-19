<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Thêm import cho model Product
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    // Hiển thị giỏ hàng
    public function index()
    {
        // Lấy thông tin sản phẩm từ session giỏ hàng
        $cartItems = Session::get('cart');

        return view('cart.index', compact('cartItems'));
    }

    // Thêm sản phẩm vào giỏ hàng
    public function add(Request $request, $id)
    {
        // Lấy thông tin sản phẩm từ cơ sở dữ liệu
        $product = Product::findOrFail($id);

        // Lấy giỏ hàng từ session, nếu chưa có thì tạo mới
        $cart = Session::get('cart', []);

        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
        if (array_key_exists($id, $cart)) {
            // Nếu sản phẩm đã tồn tại, tăng số lượng lên 1
            $cart[$id]['quantity'] += 1;
        } else {
            // Nếu sản phẩm chưa tồn tại, thêm vào giỏ hàng với số lượng là 1
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1
            ];

            // Lưu thông tin chi tiết sản phẩm vào session
            Session::put('products.' . $id, $product);
        }

        // Lưu giỏ hàng vào session
        Session::put('cart', $cart);

        return redirect()->route('home')->with('success', 'Đã thêm sản phẩm vào giỏ hàng.');
    }

    // Xóa sản phẩm khỏi giỏ hàng
    public function remove($id)
    {
        // Lấy giỏ hàng từ session
        $cart = Session::get('cart', []);

        // Xóa sản phẩm khỏi giỏ hàng nếu tồn tại
        if (array_key_exists($id, $cart)) {
            unset($cart[$id]);
        }

        // Lưu giỏ hàng mới vào session
        Session::put('cart', $cart);

        return redirect()->back()->with('success', 'Đã xóa sản phẩm khỏi giỏ hàng.');
    }

    // Xóa toàn bộ sản phẩm khỏi giỏ hàng
    public function clear()
    {
        // Xóa toàn bộ giỏ hàng từ session
        Session::forget('cart');

        return redirect()->back()->with('success', 'Đã xóa toàn bộ sản phẩm khỏi giỏ hàng.');
    }
}