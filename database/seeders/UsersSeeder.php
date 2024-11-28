<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create user super admin and give him super role
        $superUser = User::create(['name' => 'GOD', 'email' => 'god@adssive.com', 'password' => Hash::make('admin123'), 'remember_token' => Str::random(10), 'email_verified_at' => now(),]);
        $superUser->assignRole('super');
        //create 10k users
        $users = User::factory(10000)->create();
        //assign sales role to 10k users
        foreach ($users as $user) {
            $user->assignRole('sales');
        }
    }
}
