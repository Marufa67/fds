<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id')->constrained('customers');
            $table->string('product_id')->constrained('products');
            $table->string('delivery_man_id')->constrained('delivery_men');
            $table->date('expected_delivery_date');
            $table->double('product_price', 7, 2);
            $table->double('shipping_price', 5, 2);
            $table->double('total_price', 7, 2);
            $table->string('status')->default('pending');
            $table->time('deliveryremainingTime')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
