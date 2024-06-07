<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('shop_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // To keep track of the user who placed the order
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('country');
            $table->string('phone');
            $table->string('email');
            $table->string('payment_method');
            $table->json('cart_items'); // To store the cart items as JSON
            $table->decimal('total', 8, 2); // To store the total amount
            $table->string('status')->default('pending'); // To store the status of the order
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('shop_orders');
    }
}
