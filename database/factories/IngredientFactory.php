<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ingredient;
use Faker\Generator as Faker;

$factory->define(Ingredient::class, function (Faker $faker) {
    return [
        'author_id' => $faker->numberBetween(1,10),
        'name' => $faker->unique()->word
    ];
});
