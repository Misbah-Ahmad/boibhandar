<?php

use Faker\Generator as Faker;
use App\BookDetail;

$factory->define(App\OrderDetail::class, function (Faker $faker) {

    $price = $faker->numberBetween(150, 500);

    $randomId = rand(BookDetail::where('is_available', 0)->min('id'), BookDetail::where('is_available', 0)->max('id'));

    $bookDetail = BookDetail::find($randomId);
    $bookDetail->is_available = 1;
    $bookDetail->save();
    
    return [

        'book_detail_id' => $randomId,

        'price' => $price,

        'buying_price' => $price - $faker->numberBetween(20, 50),        

    ];
});
