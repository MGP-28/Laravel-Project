<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'player_id'   => rand(1, 20),
        'name'      => $faker->lastName,
        'color'     => $faker->colorName
    ];
});
