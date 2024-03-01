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
            'total' =>5,
            'available' =>5,
            'released_date' => now(),
            'price' => 450
        ]);
        Book::create([
            'category_id' => 1,
            'name' => 'To Kill A Mocking Bird',
            'author' => 'Harper Lee',
            'total' =>7,
            'available' =>7,
            'released_date' => now(),
            'price' => 550
        ]);
        Book::create([
            'category_id' => 2,
            'name' => 'Beyond the Black Door',
            'author' => 'Am Strick Land',
            'total' =>3,
            'available' =>3,
            'released_date' => now(),
            'price' => 500
        ]);
        Book::create([
            'category_id' => 2,
            'name' => 'Black Howl',
            'author' => 'Christina Henry',
            'total' =>9,
            'available' =>9,
            'released_date' => now(),
            'price' => 600
        ]);
        Book::create([
            'category_id' => 3,
            'name' => 'The Paradox of Choice',
            'author' => 'Barry Schwarltz',
            'total' =>11,
            'available' =>11,
            'released_date' => now(),
            'price' => 300
        ]);
        Book::create([
            'category_id' => 3,
            'name' => 'The bussiness of expertise',
            'author' => 'David Seal',
            'total' =>16,
            'available' =>16,
            'released_date' => now(),
            'price' => 350
        ]);
        Book::create([
            'category_id' => 4,
            'name' => 'Man search for meaning',
            'author' => 'Victor E Frankly',
            'total' =>18,
            'available' =>18,
            'released_date' => now(),
            'price' => 500
        ]);
        Book::create([
            'category_id' => 4,
            'name' => 'The Champions Mind',
            'author' => 'Jean Arefmow',
            'total' =>41,
            'available' =>41,
            'released_date' => now(),
            'price' => 600
        ]);
        Book::create([
            'category_id' => 5,
            'name' => 'Ego is the Enemy',
            'author' => 'Ryan Holiday',
            'total' =>11,
            'available' =>11,
            'released_date' => now(),
            'price' => 300
        ]);
        Book::create([
            'category_id' => 5,
            'name' => 'The Mirror Mind ',
            'author' => 'Lars Kepler',
            'total' =>21,
            'available' =>21,
            'released_date' => now(),
            'price' => 450
        ]);
    }
}
