<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMutationProductMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutation_product_metas', function (Blueprint $table) {
            $table->id('mpm_id');
            $table->unsignedBigInteger('mutation_id');
            $table->unsignedBigInteger('product_id');
            $table->string('product_name');
            $table->string('previous_meta_key');
            $table->longText('previous_meta_value');
            $table->string('next_meta_key');
            $table->longText('next_meta_value');
            $table->unique(['mutation_id','product_id']);
            $table->unique(['product_id','product_name']);
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
        Schema::dropIfExists('mutation_product_metas');
    }
}
