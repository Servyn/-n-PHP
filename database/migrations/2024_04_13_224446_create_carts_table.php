<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // Nếu bạn muốn liên kết với người dùng
            $table->unsignedBigInteger('product_id');
            $table->integer('quantity')->default(1); // Số lượng sản phẩm mặc định là 1
            $table->decimal('price', 10, 2); // Giá của sản phẩm trong giỏ hàng
            $table->timestamps();

            // Liên kết với bảng người dùng (nếu có)
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // Liên kết với bảng sản phẩm
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('carts');
    }
}