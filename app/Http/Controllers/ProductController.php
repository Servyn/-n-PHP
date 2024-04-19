<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Hiển thị form tạo sản phẩm
    public function create()
    {
        return view('products.create');
    }

    // Xử lý việc lưu sản phẩm vào cơ sở dữ liệu
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Upload image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }
    
        // Create product
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->image = $imageName;
        $product->save();
    
        return redirect()->route('home')->with('product', $product)->with('success', 'Product created successfully');
    }

   
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
    
        return redirect()->route('home')->with('success', 'Sản phẩm đã được xóa thành công.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->except('_token'));
        return redirect()->route('products.show', $id)->with('success', 'Sản phẩm đã được cập nhật thành công.');
    }
}