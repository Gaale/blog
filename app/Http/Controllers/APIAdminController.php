<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

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

        $log = new Logger('added_post');
        $log->pushHandler(new StreamHandler(__DIR__ . '/../../Logs/logs.log', Logger::INFO));
        $log->info('User by API have added new post # ' . $post->id);

        return response()->json($post, 201);
    }

    public function update(Request $request, $id)
    {
        try {
            $post = \App\Post::findOrFail($id);
        } catch (Exception $exception) {
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

        $log = new Logger('updated_post');
        $log->pushHandler(new StreamHandler(__DIR__ . '/../../Logs/logs.log', Logger::INFO));
        $log->info('User by API have updated post # ' . $post->id);

        return response()->json($post, 200);
    }

    public function delete($id)
    {
        try {
            $post = \App\Post::findOrFail($id);
        } catch (Exception $exception) {
            return response()->json(['Message' => "Such post haven't been found"], 404);
        }
        $post->delete();

        $log = new Logger('deleted_post');
        $log->pushHandler(new StreamHandler(__DIR__ . '/../../Logs/logs.log', Logger::WARNING));
        $log->warning('User by API have deleted post # ' . $post->id);

        return response()->json(['Message' => "Post " . $post->id . " successfully deleted"], 200);
    }
}
