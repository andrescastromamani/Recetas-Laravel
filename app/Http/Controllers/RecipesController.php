<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function index() {
        $user = User::all();
        return view('recipes', compact('user'));
    }
}
