<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id('category_id');
            $table->unsignedBigInteger('store_id');
            $table->unsignedBigInteger('parent_id');
            $table->string('name');
            $table->longText('description');
            $table->foreign('store_id')->references('store_id')->on('stores');
            $table->foreign('parent_id')->references('category_id')->on('categories')->nullable();
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
        Schema::dropIfExists('categories');
    }
}
