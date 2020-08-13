<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Induction;
use Faker\Generator as Faker;

$factory->define(Induction::class, function (Faker $faker) {
    return [
        'firstname'=> $faker->firstName,
        'lastname'=> $faker->lastName
    ];
});
