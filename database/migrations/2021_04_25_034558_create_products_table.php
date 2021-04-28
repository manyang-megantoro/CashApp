<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id');
            $table->unsignedBigInteger('store_id');
            $table->unsignedBigInteger('brand_id');
            $table->string('name');
            $table->string('barcode');
            $table->string('unit');
            $table->text('product_photo_path')->nullable();
            $table->foreign('store_id')->references('store_id')->on('stores');
            $table->foreign('brand_id')->references('brand_id')->on('brands');
            $table->unique(['store_id', 'name']);
            $table->unique(['store_id', 'barcode']);
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
        Schema::dropIfExists('products');
    }
}
