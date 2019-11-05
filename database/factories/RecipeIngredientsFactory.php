<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RecipeIngredients;
use Faker\Generator as Faker;

$factory->define(RecipeIngredients::class, function (Faker $faker) {
    return [
        'recipe_id' => $faker->numberBetween(1,10),
        'ingredient_id' => $faker->numberBetween(1,10)
    ];
});
