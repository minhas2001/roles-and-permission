<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;          // ← ADD THIS
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder         // ← ADD "extends Seeder"
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name'       => 'superadmin',
                'email'      => 'superadmin@gmail.com',
                'user_type'  => '0',              // or 0 without quotes if it's integer
                'password'   => 'superadmin123'
            ],
            [
                'name'       => 'admin',
                'email'      => 'admin@gmail.com',
                'user_type'  => '1',              // or 1
                'password'   => 'admin123'
            ],
        ];

        foreach ($users as $userData) {
            User::create([
                'name'      => $userData['name'],
                'email'     => $userData['email'],
                'user_type' => $userData['user_type'],
                'password'  => Hash::make($userData['password']),
            ]);
        }
    }
}
