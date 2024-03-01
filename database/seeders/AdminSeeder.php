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
            'email' => 'admin@test.com',
            'password' => Hash::make('password'),
            'isAdmin' => 1,
        ]);
        User::create([
            'name' => 'user',
            'college_id' => 102,
            'phone' => 9800000001,
            'address' => 'kathmandu',
            'email' => 'photosonly6374@gmail.com',
            'password' => Hash::make('password'),
            'isAdmin' => 0,
        ]);

        User::create([
            'name' => 'user1',
            'college_id' => 103,
            'phone' => 9800000045,
            'address' => 'kathmandu',
            'email' => 'user1@test.com',
            'password' => Hash::make('password'),
            'isAdmin' => 0,
        ]);

        User::create([
            'name' => 'user2',
            'college_id' => 104,
            'phone' => 9800000054,
            'address' => 'kathmandu',
            'email' => 'user2@test.com',
            'password' => Hash::make('password'),
            'isAdmin' => 0,
        ]);
    }
}
