<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = ['name', 'quantity', 'author_id'];

    public function author(){
        return $this->belongsTo(User::class);
    }
    public function recipes(){
        return $this->belongsToMany(
            Recipe::class,
            'recipe_ingredients',
            'ingredient_id',
            'recipe_id'
        );
    }
}

