<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'lname' => $faker->lastname
    ];
});
