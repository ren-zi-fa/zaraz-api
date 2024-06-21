<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders_detail', function (Blueprint $table) {
            $table->bigIncrements('order_detail_id');
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');
            $table->bigInteger('quantity');
            $table->unsignedDecimal('price',10,2);
            $table->timestamps();

            $table->foreign('order_id')->references('order_id')->on('orders')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('product_id')->references('product_id')->on('products')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders_detail');
    }
};
