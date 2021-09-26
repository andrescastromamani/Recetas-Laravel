<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/recetas', [RecipeController::class, 'index'])->name('recipes.index');
Route::get('/recetas/crear', [RecipeController::class, 'create'])->name('recipes.create');
Route::post('/recetas', [RecipeController::class, 'store'])->name('recipes.store');
Route::get('/recetas/{recipe}', [RecipeController::class, 'show'])->name('recipes.show');
Route::get('/recetas/{recipe}/edit', [RecipeController::class, 'edit'])->name('recipes.edit');
Route::put('/recetas/{recipe}', [RecipeController::class, 'update'])->name('recipes.update');
Route::delete('/recetas/{recipe}', [RecipeController::class, 'destroy'])->name('recipes.destroy');

//Route::resource('recetas', RecipeController::class);
Route::get('/perfiles/{profile}', [ProfileController::class, 'show'])->name('profiles.show');
Route::get('/perfiles/{profile}/edit', [ProfileController::class, 'edit'])->name('profiles.edit');
Route::put('/perfiles/{profile}', [ProfileController::class, 'update'])->name('profiles.update');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
