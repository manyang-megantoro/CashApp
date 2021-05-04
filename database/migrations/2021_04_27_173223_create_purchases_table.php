<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id('purchase_id');
            $table->unsignedBigInteger('store_id');
            $table->tinyText('unique_id');
            $table->string('user_email');
            $table->string('trx_coupon_name')->nullable();
            $table->double('trx_price_minus', 18, 4)->default(0);
            $table->double('trx_price_plus', 18, 4)->default(0);
            $table->double('total_price', 24, 4);
            $table->smallInteger('total_item');
            $table->integer('total_quantity');
            $table->double('total_price_minus', 18, 4)->default(0);
            $table->double('total_price_plus', 18, 4)->default(0);
            $table->string('notes')->nullable();
            $table->boolean('allowed')->default(false);
            $table->foreign('store_id')->references('store_id')->on('stores');
            $table->unique(['store_id','unique_id']);

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
        Schema::dropIfExists('purchases');
    }
}
