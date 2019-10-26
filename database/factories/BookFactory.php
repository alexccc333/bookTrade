<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(\App\Model\Book::class, function (Faker $faker) {
    return [
        'name'=>$faker->name(),
        'description'=>$faker->text(100),
        'page_extent'=>100,
        'data_release'=>'30.09.1999',
        'pegi'=>18,
        'tags'=>'Default',
        'ISBN'=>'Default',
        //'publisher_id'=>1,
//        'distributor_id'=>1,
        'book_language_id'=>1,
    ];
});
