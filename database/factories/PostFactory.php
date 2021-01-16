<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Talent; //追記

$factory->define(Model::class, function (Faker $faker) {
    return [
        'post_title'   => $faker->realText(100),
        'post_desc' => $faker->realText(100),
        'user_id' => function() {
            return User::all()->random();
        }
    ];
});
