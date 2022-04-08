<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Companion;
use Faker\Generator as Faker;

$factory->define(Companion::class, function (Faker $faker) {
    return [
        'person_id' => rand(1, 99),
        'name' => $faker->firstName,
        'color' => $faker->colorName,
        'birthdate' => $faker->date()
    ];
});
