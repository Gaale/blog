<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class  APIAdminController extends Controller
{
    public function create(Request $request)
    {
        $post = new Post;
        $post->author_id = $request->post('author_id');
        $post->title = $request->post('title');
        $post->body = $request->post('body');
        $post->img295_250 = $request->post('img295_250');
        $post->img780_520 = $request->post('img780_520');
        $post->img100_100 = $request->post('img100_100');
        $post->save();

        return response()->json($post, 201);
    }

    public function update(Request $request, $id)
    {
        try {
            $post = \App\Post::findOrFail($id);
        } catch (Exception $exception){
            return response()->json(['Message' => "Such post haven't been found"], 404);
        }
        $post = Post::find($id);
        $post->author_id = $request->post('author_id');
        $post->title = $request->post('title');
        $post->body = $request->post('body');
        $post->img295_250 = $request->post('img295_250');
        $post->img780_520 = $request->post('img780_520');
        $post->img100_100 = $request->post('img100_100');
        $post->save();

        return response()->json($post, 200);
    }
}
