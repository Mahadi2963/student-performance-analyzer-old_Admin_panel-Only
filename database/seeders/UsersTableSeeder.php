<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'username' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'type' => 1, // Super Admin
                'status' => 1, // Active
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Admin User 1',
                'username' => 'admin1',
                'email' => 'admin1@example.com',
                'password' => Hash::make('password'),
                'type' => 2, // Super Admin
                'status' => 1, // Active
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Teacher',
                'username' => 'teacher',
                'email' => 'mhasan201431@bscse.uiu.ac.bd',
                'password' => Hash::make('password'),
                'type' => 3, // Super Admin
                'status' => 1, // Active
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Father',
                'username' => 'father',
                'email' => 'father@example.com',
                'password' => Hash::make('password'),
                'type' => 4, // Super Admin
                'status' => 1, // Active
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mahadi Hasan',
                'username' => 'mahadi',
                'email' => 'mdmehedihasan2963@gmail.com',
                'password' => Hash::make('password'),
                'type' => 5, // Super Admin
                'status' => 1, // Active
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more users here
        ]);
    }
}
