<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        
        'title' => $faker->name,
        'isbn' => $faker->isbn10,
        'author_id' => function(){
            return factory(App\Author::class)->create()->id;
        },
        'publisher_id' => function(){
            return factory(App\Publisher::class)->create()->id;
        }



    ];
});
