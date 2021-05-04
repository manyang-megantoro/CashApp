<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockOpnameListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_opname_lists', function (Blueprint $table) {
            $table->id('sol_id');
            $table->unsignedBigInteger('so_id');
            $table->unsignedBigInteger('stock_id');
            $table->string('stock_variant_name');
            $table->string('product_name');
            $table->string('product_barcode');
            $table->string('rack_name');
            $table->string('depot_name');
            $table->integer('quantity_exist');
            $table->integer('quantity_check');
            $table->string('status');
            $table->foreign('so_id')->references('so_id')->on('stock_opnames');
            $table->unique(['stock_id','stock_variant_name']);
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
        Schema::dropIfExists('stock_opname_lists');
    }
}
