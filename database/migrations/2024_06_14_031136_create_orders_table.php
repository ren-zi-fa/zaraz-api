<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->unsignedDecimal('total_amount',10,2);
            $table->string('status')->default('pending');
            $table->foreign('user_id')->references('user_id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();

        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
