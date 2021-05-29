<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Post;

class MainController extends Controller
{
    public function __invoke()
    {
        $posts = Post::orderBy('id', 'DESC')->paginate(5);

        $categories = Category::all();

        return view('main', ['posts' => $posts, 'categories' => $categories]);
    }
}
