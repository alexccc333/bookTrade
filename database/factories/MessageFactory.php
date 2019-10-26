<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\SocialLite\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'send_user_id'=>rand(1,5),
        'user_id'=>rand(1,5),
        'message'=>$faker->text(100)
    ];
});
