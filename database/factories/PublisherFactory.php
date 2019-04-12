<?php

use Faker\Generator as Faker;

$factory->define(App\Publisher::class, function (Faker $faker) {
    return [
        
        'name' => $faker->name,
        'location' => $faker->address,
        'contact' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,

    ];
});
