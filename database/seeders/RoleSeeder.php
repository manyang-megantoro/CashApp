<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r0 = Role::firstOrCreate(["name" => "Admin"]);
        $r1 = Role::firstOrCreate(["name" => "Owner"]);
        $r2 = Role::firstOrCreate(["name" => "Manager"]);
        $r3 = Role::firstOrCreate(["name" => "Cashier"]);
        $r4 = Role::firstOrCreate(["name" => "User"]);

        $p1 = Permission::firstOrCreate(['name' => 'manage users']);

        $r0->givePermissionTo('manage users');
    }
}
