<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use Faker\Generator as Faker;

$factory->define(\App\Model\Author::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'biography'=>$faker->text(300),
        'img'=> $faker->image('storage/app/public/image/book',400,300, 'people', false),
    ];
});
