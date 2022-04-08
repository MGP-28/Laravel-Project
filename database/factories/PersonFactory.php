<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'birthdate' => $faker->date($format = 'Y-m-d', $max = now()),
        'address_id' => rand(1, 150)
    ];
});
