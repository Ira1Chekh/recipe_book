<?php

use Illuminate\Database\Seeder;

class RecipeIngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\RecipeIngredients::class,20)->create();
    }
}
