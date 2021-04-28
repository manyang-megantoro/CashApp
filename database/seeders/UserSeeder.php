<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u0 = User::firstOrCreate([
            "name" => "admin",
            "email" => "admin@atapx.com",
            "password" => bcrypt("admin"),
        ]);
        $u0->assignRole('Admin');

        $u1 = User::firstOrCreate([
            "name" => "owner",
            "email" => "owner@atapx.com",
            "password" => bcrypt("owner"),
        ]);
        $u1->assignRole('User', 'Owner');

        $u1->update(['store_ids'=>\json_encode([1])]);


        $u2 = User::firstOrCreate([
            "name" => "manager",
            "email" => "manager@atapx.com",
            "password" => bcrypt("manager"),
        ]);
        $u2->assignRole('User', 'Manager');
        $u2->update(['store_ids'=>\json_encode([1])]);

        $u3 = User::firstOrCreate([
            "name" => "cashier",
            "email" => "cashier@atapx.com",
            "password" => bcrypt("cashier"),
        ]);
        $u3->assignRole('User', 'Cashier');
        $u3->update(['store_ids'=>\json_encode([1])]);

        $u4 = User::firstOrCreate([
            "name" => "user",
            "email" => "user@atapx.com",
            "password" => bcrypt("user"),
        ]);
        $u4->assignRole('User');
    }
}
