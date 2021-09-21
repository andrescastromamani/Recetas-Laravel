<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class RecipeController extends Controller
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
        $recipes = Auth::user()->recipes;
        return view('recipes.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('recipes.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recipe = $request->validate([
            'title' => 'required|min:6',
            'category' => 'required',
            'ingredients' => 'required',
            'preparation' => 'required',
            'image' => 'required',
        ]);
        $fileRoutes = $request['image']->store('uploads', 'public');
        $imageSize = Image::make(public_path("storage/{$fileRoutes}"))->fit(1000, 550);
        $imageSize->save();
        Auth::user()->recipes()->create([
            'title' => $recipe['title'],
            'ingredients' => $recipe['ingredients'],
            'preparation' => $recipe['preparation'],
            'image' => $fileRoutes,
            'category_id' => $recipe['category']
        ]);
        return redirect()->route('recipes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Recipe $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        return view('recipes.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Recipe $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        $categories = Category::all();
        return view('recipes.edit', compact('categories', 'recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Recipe $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        $this->authorize('update', $recipe);
        $data = $request->validate([
            'title' => 'required|min:6',
            'category' => 'required',
            'ingredients' => 'required',
            'preparation' => 'required',
        ]);
        $recipe->title = $data['title'];
        $recipe->ingredients = $data['ingredients'];
        $recipe->preparation = $data['preparation'];
        $recipe->category_id = $data['category'];
        if (request('image')) {
            $fileRoutes = $request['image']->store('uploads', 'public');
            $imageSize = Image::make(public_path("storage/{$fileRoutes}"))->fit(1000, 550);
            $imageSize->save();
            $recipe->image = $fileRoutes;
        }
        $recipe->save();
        return redirect()->route('recipes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Recipe $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
