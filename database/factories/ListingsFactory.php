<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Listings;
use App\Model\BookLanguage;
use Faker\Generator as Faker;



$factory->define(App\Model\Listings::class, function (Faker $faker) {
    return [
        'user_id'=>rand(1,5),
        'book_id'=>rand(1,100),
        'name'=>$faker->name(),
        'description'=>$faker->text(200),
        'price'=>1000,
        'condition'=>1,
        'digital'=>1,
        'limited_edition'=>1,
        'delivery'=>1,
        'sell_negotiate'=>1,
        'trade'=>1,
        'trade_negotiate'=>1,
        'trade_list'=>$faker->text(100),
        'sell'=>1,
        'delivery_price'=>1000,
        'payment'=>1,
        'status'=>1,
    ];
});
