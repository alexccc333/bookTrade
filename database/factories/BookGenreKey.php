<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Model\HelpModel\BookGenreKey::class, function (Faker $faker) {
    return [
        'book_id'=>rand(1,100),
        'book_genres_id'=>rand(1,100),
    ];
});
