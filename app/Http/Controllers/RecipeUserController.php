<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request, Recipe $recipe)
    {
        return $user = auth()->user()->likerecipe()->toggle($recipe);
    }
}
