<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMutationStockMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutation_stock_metas', function (Blueprint $table) {
            $table->id('msm_id');
            $table->unsignedBigInteger('ml_id');
            $table->unsignedBigInteger('stock_id');
            $table->string('variant_name');
            $table->string('previous_meta_key');
            $table->longText('previous_meta_value');
            $table->string('next_meta_key');
            $table->longText('next_meta_value');
            $table->unique(['ml_id','stock_id']);
            $table->unique(['stock_id','variant_name']);
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
        Schema::dropIfExists('mutation_stock_metas');
    }
}
