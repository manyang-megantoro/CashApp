<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id('form_id');
            $table->unsignedBigInteger('store_id');
            $table->string('pic_user_email');
            $table->tinyText('form_type');
            $table->unsignedBigInteger('trx_id');
            $table->string('notes')->nullable();
            $table->tinyText('status')->default('pending');
            $table->foreign('store_id')->references('store_id')->on('stores');
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
        Schema::dropIfExists('forms');
    }
}
