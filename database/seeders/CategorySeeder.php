<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'category' => 'Novel',
            'shelf_name' =>'N1'
        ]);
        Category::create([
            'category' => 'Horror',
            'shelf_name' =>'H1'
        ]);
        Category::create([
            'category' => 'Marketing',
            'shelf_name' =>'M1'
        ]);
        Category::create([
            'category' => 'Motivational',
            'shelf_name' =>'M1'
        ]);
        Category::create([
            'category' => 'Crime',
            'shelf_name' =>'C1'
        ]);
    }
}
