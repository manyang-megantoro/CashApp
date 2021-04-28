<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u3 = Store::firstOrCreate([
            'name'=> 'New Store',
            'country'=> 'Indonesia',
            'provinces'=> 'Jawa Tengah',
            'regencies'=> 'Temanggung',
            'districts'=> 'Kedu',
            'villages'=> 'Candimulyo',
            'address'=> 'Perum Candi Asri',
            'telephone'=> '0823023132',
            'email'=> 'manyang@atapx.com',
            'logo_photo_path'=> '',
            'currency_id'=> 1,
            'language'=> 'id',
        ]);
    }
}
