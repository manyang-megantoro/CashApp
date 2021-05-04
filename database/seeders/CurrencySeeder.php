<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $c0 = Currency::firstOrCreate([
            'name'=> 'Rupiah',
            'code'=> 'IDR',
            'symbol_left'=> 'Rp. ',
            'symbol_right'=> '',
            'decimal_separator'=> ',',
            'thousands_separator'=> '.',
            'decimal_place'=> 2,
        ]);
    }
}
