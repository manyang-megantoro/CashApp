<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMutationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutations', function (Blueprint $table) {
            $table->id('mutation_id');
            $table->unsignedBigInteger('store_id');
            $table->tinyText('unique_id');
            $table->string('user_email');
            $table->smallInteger('total_item');
            $table->integer('total_quantity');
            $table->tinyText('type');
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
        Schema::dropIfExists('mutations');
    }
}
