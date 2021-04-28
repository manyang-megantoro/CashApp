<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id('store_id');
            $table->string('name');
            $table->string('country')->nullable();
            $table->string('provinces')->nullable();
            $table->string('regencies')->nullable();
            $table->string('districts')->nullable();
            $table->string('villages')->nullable();
            $table->longText('address')->nullable();
            $table->string('telephone')->nullable();
            $table->string('email')->nullable();
            $table->text('logo_photo_path')->nullable();
            $table->unsignedBigInteger('currency_id')->nullable();
            $table->unsignedBigInteger('default_depot_id')->nullable();
            $table->string('language')->nullable();
            $table->foreign('currency_id')->references('currency_id')->on('currencies');
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
        Schema::dropIfExists('stores');
    }
}
