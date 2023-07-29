<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'category_id' => 1,
            'name' => 'Harry Potter',
            'author' => 'Jk Rowling',
            'available' =>1,
            'released_date' => now(),
            'price' => 450
        ]);
        Book::create([
            'category_id' => 1,
            'name' => 'To Kill A Mocking Bird',
            'author' => 'Harper Lee',
            'available' =>1,
            'released_date' => now(),
            'price' => 550
        ]);
        Book::create([
            'category_id' => 2,
            'name' => 'Beyond the Black Door',
            'author' => 'Am Strick Land',
            'available' =>1,
            'released_date' => now(),
            'price' => 500
        ]);
        Book::create([
            'category_id' => 2,
            'name' => 'Black Howl',
            'author' => 'Christina Henry',
            'available' =>1,
            'released_date' => now(),
            'price' => 600
        ]);
        Book::create([
            'category_id' => 3,
            'name' => 'The Paradox of Choice',
            'author' => 'Barry Schwarltz',
            'available' =>1,
            'released_date' => now(),
            'price' => 300
        ]);
        Book::create([
            'category_id' => 3,
            'name' => 'The bussiness of expertise',
            'author' => 'David Seal',
            'available' =>1,
            'released_date' => now(),
            'price' => 350
        ]);
        Book::create([
            'category_id' => 4,
            'name' => 'Man search for meaning',
            'author' => 'Victor E Frankly',
            'available' =>1,
            'released_date' => now(),
            'price' => 500
        ]);
        Book::create([
            'category_id' => 4,
            'name' => 'The Champions Mind',
            'author' => 'Jean Arefmow',
            'available' =>1,
            'released_date' => now(),
            'price' => 600
        ]);
        Book::create([
            'category_id' => 5,
            'name' => 'Ego is the Enemy',
            'author' => 'Ryan Holiday',
            'available' =>1,
            'released_date' => now(),
            'price' => 300
        ]);
        Book::create([
            'category_id' => 5,
            'name' => 'The Mirror Mind ',
            'author' => 'Lars Kepler',
            'available' =>1,
            'released_date' => now(),
            'price' => 450
        ]);
    }
}
