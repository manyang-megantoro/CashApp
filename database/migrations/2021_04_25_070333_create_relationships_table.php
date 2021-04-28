<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relationships', function (Blueprint $table) {
            $table->id('rs_id');
            $table->string('name');
            $table->string('table_0');
            $table->unsignedBigInteger('row_0');
            $table->string('table_1');
            $table->unsignedBigInteger('row_1');
            $table->string('table_2')->nullable();
            $table->unsignedBigInteger('row_2')->nullable();
            $table->string('table_3')->nullable();
            $table->unsignedBigInteger('row_3')->nullable();
            $table->string('table_4')->nullable();
            $table->unsignedBigInteger('row_4')->nullable();
            $table->unique(['name','row_0', 'row_1', 'row_2','row_3','row_4']);
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
        Schema::dropIfExists('relationships');
    }
}
