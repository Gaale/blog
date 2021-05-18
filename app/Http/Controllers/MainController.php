<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class MainController extends Controller
{
    public function __invoke()
    {
        $posts = Post::all();
        return view('main', ['posts' => $posts]);
    }
}
