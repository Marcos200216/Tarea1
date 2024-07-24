<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Category;

class MovieController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('movies.index', compact('categories'));
    }

    public function showByGenre($genre)
    {
        $category = Category::where('name', $genre)->firstOrFail();
        $movies = $category->movies;
        return view('movies.show', compact('category', 'movies'));
    }
}
