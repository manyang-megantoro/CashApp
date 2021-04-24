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
        $u1 = User::firstOrCreate([
            "name" => "superadmin",
            "email" => "superadmin@atapx.com",
            "password" => bcrypt("superadmin"),
        ]);
        $u1->assignRole('Superadmin');

        $u2 = User::firstOrCreate([
            "name" => "admin",
            "email" => "admin@atapx.com",
            "password" => bcrypt("admin"),
        ]);
        $u2->assignRole('Admin');

        $u3 = User::firstOrCreate([
            "name" => "user",
            "email" => "user@atapx.com",
            "password" => bcrypt("user"),
        ]);
        $u3->assignRole('User');
    }
}
