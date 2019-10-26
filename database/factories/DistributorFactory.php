<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use App\Model\BookLanguage;
use Faker\Generator as Faker;

$factory->define(App\Model\Distributor::class, function (Faker $faker) {
    return [
        'name'=>$faker->name(),
        'description'=>$faker->text(100),
    ];
});
