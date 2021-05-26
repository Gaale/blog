<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class PostByCategoryController extends Controller
{
    public function __invoke($key)
    {
        $category = Category::where('key', '=', $key)->first();

        $categories = Category::All();

        return view('category', ['category' => $category, 'categories' => $categories]);
    }
}
