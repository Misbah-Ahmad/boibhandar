<?php

use App\Author;
use App\Publisher;
use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {

    $publisher = Publisher::find(rand(Publisher::all()->min('id'), Publisher::all()->max('id')));
    if ($publisher == null) 
    {
            $publisher = factory(App\Publisher::class)->create();
    }

    $price = rand(100, 400);

    return [
        
        'title' => $faker->name,
        'isbn' => $faker->isbn10,
        'publisher_id' => $publisher->id,
        'price' => $price,
        'edition' => $faker->sentence,
        'language' => 'bangla',
        'pages' => rand(50, 300),
        'buying_price' => $price - rand(15, 45), 

    ];
});
