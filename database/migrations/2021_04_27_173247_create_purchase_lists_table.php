<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_lists', function (Blueprint $table) {
            $table->id('pl_id');
            $table->unsignedBigInteger('purchase_id');
            $table->unsignedBigInteger('stock_id');
            $table->string('variant_name');
            $table->string('product_name');
            $table->string('depot_name');
            $table->string('rack_name');
            $table->string('supplier_name');
            $table->string('category_name');
            $table->string('coupon_name')->nullable();
            $table->string('sku');
            $table->string('unit');
            $table->integer('quantity');
            $table->double('price', 18, 4);
            $table->double('price_minus', 18, 4)->default(0);
            $table->double('price_plus', 18, 4)->default(0);
            $table->string('notes')->nullable();
            $table->foreign('purchase_id')->references('purchase_id')->on('purchases');
            $table->unique(['purchase_id','stock_id']);
            $table->unique(['purchase_id','variant_name']);
            $table->unique(['purchase_id','stock_id','coupon_name']);
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
        Schema::dropIfExists('purchase_lists');
    }
}
