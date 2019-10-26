<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\AuthorBook::class, function (Faker $faker) {
    return [
        'book_id'=>rand(1,100),
        'author_id'=>rand(1,50),
    ];
});
