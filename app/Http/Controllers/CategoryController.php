<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $recipes = Recipe::where('category_id', $category->id)->paginate(6);
        return view('categories.show', compact('recipes', 'category'));
    }
}
