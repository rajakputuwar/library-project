<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'college_id' => 101,
            'phone' => 9800000000,
            'address' => 'kathmandu',
            'image' => '/uploads/default_user.png',
            'email' => 'admin@test.com',
            'password' => Hash::make('password'),
            'isAdmin' => 1,
        ]);
        User::create([
            'name' => 'user',
            'college_id' => 102,
            'phone' => 9800000001,
            'address' => 'kathmandu',
            'email' => 'user@test.com',
            'password' => Hash::make('password'),
            'isAdmin' => 0,
        ]);
    }
}
