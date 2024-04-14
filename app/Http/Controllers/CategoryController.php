<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Logic lấy danh sách danh mục sản phẩm và trả về view
        return view('categories.index');
    }
}