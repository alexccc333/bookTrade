<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model\BookGenres::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'parent_id'=>rand(1,100),
    ];
});
