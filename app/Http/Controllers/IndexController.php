<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $latestRecipes = Recipe::latest()->take(5)->get();
        return view('home.index', compact('latestRecipes'));
    }
}
