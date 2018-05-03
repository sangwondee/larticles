<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->text(20),
        'lname' => $faker->text(20)
    ];
});
