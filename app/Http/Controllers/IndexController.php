<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IndexController extends Controller
{
    public function index()
    {
        $latestRecipes = Recipe::latest()->take(5)->get();
        $categories = Category::all();
        $recipes = [];
        foreach ($categories as $category) {
            $recipes[Str::slug($category->name)][] = Recipe::where('category_id', $category->id)->take(3)->get();
        }
        return view('home.index', compact('latestRecipes', 'recipes'));
    }
}
