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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('cart_id');
            $table->foreignId('user_id')->constrained();
            $table->date('order_date');
            $table->string('status');
            $table->string('payment_method');
            $table->string('amount');
            $table->string('shipping_address');
            $table->string('phone');
            $table->string('person_name');
            $table->timestamps();
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
