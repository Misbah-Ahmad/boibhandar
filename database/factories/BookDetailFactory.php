<?php

use Faker\Generator as Faker;
use App\Book;

$factory->define(App\BookDetail::class, function (Faker $faker) {
    
//    $book = Book::find(rand(Book::all()->min('id'), Book::all()->max('id')));

    return [
        
        // 'book_id' => $book->id,
        'bb_code' => $faker->ean8,
        'price' => $faker->numberBetween(100, 500),
        'buying_price' => $faker->numberBetween(100, 500),
        'is_available' => $faker->boolean(70),


    ];
});
