<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_metas', function (Blueprint $table) {
            $table->id('sm_id');
            $table->unsignedBigInteger('stock_id');
            $table->string('meta_key');
            $table->longText('meta_value');
            $table->foreign('stock_id')->references('stock_id')->on('stocks');
            $table->unique(['stock_id','meta_key']);
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
        Schema::dropIfExists('stock_metas');
    }
}
