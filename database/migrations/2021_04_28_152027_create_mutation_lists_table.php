<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMutationListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutation_lists', function (Blueprint $table) {
            $table->id('ml_id');
            $table->unsignedBigInteger('mutation_id');
            $table->unsignedBigInteger('stock_id');
            $table->integer('total_change_quantity');
            $table->integer('total_intial_last_quantity');
            $table->integer('total_target_last_quantity');
            $table->tinyText('type');

            $table->string('previous_variant_name')->nullable();
            $table->string('previous_product_name')->nullable();
            $table->string('previous_barcode')->nullable();
            $table->string('previous_brand_name')->nullable();
            $table->string('previous_depot_name')->nullable();
            $table->string('previous_rack_name')->nullable();
            $table->string('previous_supplier_name')->nullable();
            $table->string('previous_category_name')->nullable();
            $table->string('previous_coupon_name')->nullable();
            $table->string('previous_sku')->nullable();
            $table->string('previous_unit')->nullable();
            $table->integer('previous_quantity')->nullable();
            $table->double('previous_price', 18, 4)->nullable();
            $table->double('previous_purchase price', 18, 4)->nullable();

            $table->string('next_variant_name')->nullable();
            $table->string('next_product_name')->nullable();
            $table->string('next_barcode')->nullable();
            $table->string('next_brand_name')->nullable();
            $table->string('next_depot_name')->nullable();
            $table->string('next_rack_name')->nullable();
            $table->string('next_supplier_name')->nullable();
            $table->string('next_category_name')->nullable();
            $table->string('next_coupon_name')->nullable();
            $table->string('next_sku')->nullable();
            $table->string('next_unit')->nullable();
            $table->integer('next_quantity')->nullable();
            $table->double('next_price', 18, 4)->nullable();
            $table->double('next_purchase price', 18, 4)->nullable();

            $table->string('notes')->nullable();
            $table->foreign('mutation_id')->references('mutation_id')->on('mutations');
            $table->unique(['mutation_id','stock_id']);
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
        Schema::dropIfExists('mutation_lists');
    }
}
