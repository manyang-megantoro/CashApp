<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id('stock_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('depot_id');
            $table->unsignedBigInteger('rack_id');
            $table->unsignedBigInteger('supplier_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('coupon_id');
            $table->string('sku');
            $table->integer('quantity');
            $table->double('price', 18, 4);
            $table->double('purchase price', 18, 4);
            $table->string('variant_name');
            $table->foreign('product_id')->references('product_id')->on('products');
            $table->foreign('depot_id')->references('depot_id')->on('depots');
            $table->foreign('rack_id')->references('rack_id')->on('racks');
            $table->foreign('supplier_id')->references('supplier_id')->on('suppliers');
            $table->foreign('category_id')->references('category_id')->on('categories');
            $table->foreign('coupon_id')->references('coupon_id')->on('coupons');
            $table->unique(['product_id','depot_id', 'rack_id', 'variant_name']);
            $table->unique(['product_id','variant_name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
