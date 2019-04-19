<?php

use Faker\Generator as Faker;

$factory->define(App\Author::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'tag_line' => $faker->sentence(3),
        'short_bio' => $faker->sentence,
    ];
});
