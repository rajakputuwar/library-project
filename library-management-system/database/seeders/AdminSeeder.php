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
            'email' => 'admin@test.com',
            'password' => Hash::make('password'),
            'isAdmin' => 1,
        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@test.com',
            'password' => Hash::make('password'),
            'isAdmin' => 0,
        ]);
    }
}
