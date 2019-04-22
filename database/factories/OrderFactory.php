<?php

use App\User;
use Faker\Generator as Faker;

$factory->define(App\Order::class, function (Faker $faker) {

    $user = User::find(env('ORDER_USER_ID', 1));

    return [

        'user_id' => $user->id,
        'delivery_date' => date('Y-m-d', strtotime('+10days')),
        'address' => $faker->address,
        'district' => 'Chittagong',

    ];
});
