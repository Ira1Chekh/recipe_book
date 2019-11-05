<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['name', 'description'];

    public function author(){
        return $this->belongsTo(User::class);
    }
    public function ingredients(){
        return $this->belongsToMany(
            Ingredient::class,
            'recipe_ingredients',
            'recipe_id',
            'ingredient_id'
        );
    }

    public static function add($fields){
        $recipe = new static;
        $recipe->fill($fields);
        $recipe->author_id = Auth::user()->id;
        $recipe->save();
        return $recipe;
    }
    public function edit($fields){
        $this->fill($fields);
        $this->save();
    }

    public function setIngredients($ids){
        if($ids == null){ return; }
        $this->ingredients()->sync($ids);
    }
    public function getIngredientTitles(){
        return (!$this->ingredients->isEmpty())
            ? implode(', ', $this->ingredients->pluck('name')->all())
            : 'Нет ингридиентов';
    }
}
