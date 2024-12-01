<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create roles
        $role = Role::create(['name' => 'super', 'guard_name' => 'sanctum']);
        $role = Role::create(['name' => 'admin', 'guard_name' => 'sanctum']);
        $role = Role::create(['name' => 'manager', 'guard_name' => 'sanctum']);
        $role = Role::create(['name' => 'sales', 'guard_name' => 'sanctum']);
    }
}
