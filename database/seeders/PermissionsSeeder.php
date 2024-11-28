<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create permissions
        $permisssion = Permission::create(['name' => 'everything']);
        $permisssion = Permission::create(['name' => 'create-documents']);
        $permisssion = Permission::create(['name' => 'read-documents']);
        $permisssion = Permission::create(['name' => 'update-documents']);
        $permisssion = Permission::create(['name' => 'delete-documents']);
        $permisssion = Permission::create(['name' => 'create-files']);
        $permisssion = Permission::create(['name' => 'read-files']);
        $permisssion = Permission::create(['name' => 'update-files']);
        $permisssion = Permission::create(['name' => 'delete-files']);
    }
}
