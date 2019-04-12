<?php

use Faker\Generator as Faker;

$factory->define(App\BookDetail::class, function (Faker $faker) {
    return [
        
        'book_id' => function() {
            return factory(App\Book::class)->create()->id;
        },

        'bb_code' => $faker->ean8,
        'book_price' => $faker->numberBetween($min = 100, $max = 500),
        'buying_price' => $faker->numberBetween($min = 100, $max = 500),
        'is_available' => $faker->boolean($chanceOfGettingTrue = 50),


    ];
});
