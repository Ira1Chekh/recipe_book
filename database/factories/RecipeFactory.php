<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Recipe;
use Faker\Generator as Faker;

$factory->define(Recipe::class, function (Faker $faker) {
    return [
        'author_id' => $faker->numberBetween(1,10),
        'name' => $faker->unique()->word,
        'description' => $faker->text(500)
    ];
});
