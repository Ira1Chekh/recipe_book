<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateRecipe;
use App\Ingredient;
use App\Recipe;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = auth()->user()->recipes;
        return view('recipes.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredients = Ingredient::pluck('name', 'id')->all();
        return view('recipes.create',compact('ingredients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidateRecipe $request)
    {
        $recipe = Recipe::add($request->validated());
        $recipe->setIngredients($request->get('ingredients'));
        return redirect()->route('recipes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = Recipe::find($id);
        return view('recipes.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipe = Recipe::find($id);
        $ingredients = Ingredient::pluck('name', 'id')->all();
        $selectedIngredients = $recipe->ingredients->pluck('id')->all();
        return view('recipes.edit',compact('recipe','ingredients', 'selectedIngredients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidateRecipe $request, $id)
    {
        $recipe = Recipe::find($id);
        $recipe->edit($request->validated());
        $recipe->setIngredients($request->get('ingredients'));
        return redirect()->route('recipes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Recipe::find($id)->delete();
        return redirect()->back();
    }

}
