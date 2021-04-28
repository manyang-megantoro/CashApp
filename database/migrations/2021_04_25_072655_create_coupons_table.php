<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id('coupon_id');
            $table->unsignedBigInteger('store_id');
            $table->string('name');
            $table->string('code');
            $table->string('type');
            $table->longText('description');
            $table->double('amount', 18, 4);
            $table->foreign('store_id')->references('store_id')->on('stores');
            $table->unique(['store_id','name']);
            $table->unique(['store_id','code']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
}
