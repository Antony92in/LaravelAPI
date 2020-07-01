<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Customevent;
use Faker\Generator as Faker;

$factory->define(Customevent::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'city' => $faker->city,
        'date' => $faker->dateTimeBetween('now', '31-12-2020',null),
    ];
});
