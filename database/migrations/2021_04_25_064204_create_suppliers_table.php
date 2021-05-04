<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id('supplier_id');
            $table->unsignedBigInteger('store_id');
            $table->string('name');
            $table->longText('description')->nullable();
            $table->string('country')->nullable();
            $table->string('provinces')->nullable();
            $table->string('regencies')->nullable();
            $table->string('districts')->nullable();
            $table->string('villages')->nullable();
            $table->longText('address')->nullable();
            $table->string('telephone')->nullable();
            $table->string('email')->nullable();
            $table->text('logo_photo_path')->nullable();
            $table->foreign('store_id')->references('store_id')->on('stores');
            $table->unique(['store_id','name']);
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
        Schema::dropIfExists('suppliers');
    }
}
