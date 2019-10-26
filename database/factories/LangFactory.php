<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use App\Model\BookLanguage;
use Faker\Generator as Faker;

$factory->define(App\Model\BookLanguage::class, function (Faker $faker) {
    return [
        'name' =>'Rus',
        'app_name'=>'Russian',
        'native'=>'Русский',
    ];
});
