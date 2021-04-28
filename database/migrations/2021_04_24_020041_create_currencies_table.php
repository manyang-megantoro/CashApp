<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->id('currency_id');
            $table->string('name', 32)->unique();
            $table->string('code', 3)->unique();
            $table->string('symbol_left', 12);
            $table->string('symbol_right', 12);
            $table->string('decimal_separator', 1);
            $table->string('thousands_separator', 1);
            $table->tinyInteger('decimal_place');
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
        Schema::dropIfExists('currencies');
    }
}
