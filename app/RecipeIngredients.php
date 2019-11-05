<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeIngredients extends Model
{
    protected $fillable = ['recipe_id', 'ingredient_id'];
}
