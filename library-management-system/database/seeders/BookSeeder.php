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
            'total' =>1,
            'available' =>1,
            'released_date' => now(),
            'price' => 450
        ]);
        Book::create([
            'category_id' => 1,
            'name' => 'To Kill A Mocking Bird',
            'author' => 'Harper Lee',
            'total' =>1,
            'available' =>1,
            'released_date' => now(),
            'price' => 550
        ]);
        Book::create([
            'category_id' => 2,
            'name' => 'Beyond the Black Door',
            'author' => 'Am Strick Land',
            'total' =>1,
            'available' =>1,
            'released_date' => now(),
            'price' => 500
        ]);
        Book::create([
            'category_id' => 2,
            'name' => 'Black Howl',
            'author' => 'Christina Henry',
            'total' =>1,
            'available' =>1,
            'released_date' => now(),
            'price' => 600
        ]);
        Book::create([
            'category_id' => 3,
            'name' => 'The Paradox of Choice',
            'author' => 'Barry Schwarltz',
            'total' =>1,
            'available' =>1,
            'released_date' => now(),
            'price' => 300
        ]);
        Book::create([
            'category_id' => 3,
            'name' => 'The bussiness of expertise',
            'author' => 'David Seal',
            'total' =>1,
            'available' =>1,
            'released_date' => now(),
            'price' => 350
        ]);
        Book::create([
            'category_id' => 4,
            'name' => 'Man search for meaning',
            'author' => 'Victor E Frankly',
            'total' =>1,
            'available' =>1,
            'released_date' => now(),
            'price' => 500
        ]);
        Book::create([
            'category_id' => 4,
            'name' => 'The Champions Mind',
            'author' => 'Jean Arefmow',
            'total' =>1,
            'available' =>1,
            'released_date' => now(),
            'price' => 600
        ]);
        Book::create([
            'category_id' => 5,
            'name' => 'Ego is the Enemy',
            'author' => 'Ryan Holiday',
            'total' =>1,
            'available' =>1,
            'released_date' => now(),
            'price' => 300
        ]);
        Book::create([
            'category_id' => 5,
            'name' => 'The Mirror Mind ',
            'author' => 'Lars Kepler',
            'total' =>1,
            'available' =>1,
            'released_date' => now(),
            'price' => 450
        ]);
    }
}
