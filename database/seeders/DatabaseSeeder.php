<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //execute users/formats/roles/permissions seeders 
        $this->call(RoleSeeder::class); //create roles (admin, manager, sales, super)
        $this->call(PermissionSeeder::class); //create permissions
        $this->call(UserSeeder::class); //create 10k users and super user (1)
        $this->call(FormatSeeder::class); //create formats from a array of extensions and mime types
    }
}
