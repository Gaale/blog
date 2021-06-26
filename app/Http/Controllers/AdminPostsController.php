<?php

namespace App\Http\Controllers;

use App\Post;
use App\Author;
use App\Category;
use Illuminate\Http\Request;
use Auth;
use Validator;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class AdminPostsController extends Controller
{
    public function add()
    {
        if (\Auth::check()) {
            $authors = Author::all();
            $categories = Category::all();

            return view('add_post',
                [
                    'authors' => $authors,
                    'categories' => $categories
                ]
            );
        } else {
            return redirect()->route('login');
        }

    }

    public function save_post(Request $request)
    {
        if (\Auth::check()) {
            if ($request->method() == 'POST') {
                $this->validate($request, [
                    'author_id' => 'required',
                    'category_id' => 'required',
                    'title' => 'required | min:5 | max:100',
                    'body' => 'required | min:100',
                    'img295_250' => 'required | image',
                    'img780_520' => 'required | image',
                    'img100_100' => 'required | image'
                ]);
                $post = new Post();
                $post->author_id = $request->input('author_id');
                $post->title = $request->input('title');
                $post->body = $request->input('body');

                $img295_250 = $request->img295_250;
                if ($img295_250) {
                    $imageName295_250 = $img295_250->getClientOriginalName();
                    $img295_250->move('images', $imageName295_250);
                    $post->img295_250 = 'http://127.0.0.1:8000/images/' . $imageName295_250;
                }
                $img780_520 = $request->img780_520;
                if ($img780_520) {
                    $imageName780_520 = $img780_520->getClientOriginalName();
                    $img780_520->move('images', $imageName780_520);
                    $post->img780_520 = 'http://127.0.0.1:8000/images/' . $imageName780_520;
                }
                $img100_100 = $request->img100_100;
                if ($img100_100) {
                    $imageName100_100 = $img100_100->getClientOriginalName();
                    $img100_100->move('images', $imageName100_100);
                    $post->img100_100 = 'http://127.0.0.1:8000/images/' . $imageName100_100;
                }
                $post->save();

                $post->category()->attach($request->input('category_id'));
                $post->category()->getRelated();

                $log = new Logger('added_post');
                $log->pushHandler(new StreamHandler(__DIR__ . '/../../Logs/logs.log', Logger::INFO));
                $log->info('User ' . Auth::user()->name . ' have added new post # ' . $post->id);

                return redirect()->route('admin')->with('message', 'Post successfully created');
            } else {
                return redirect()->route('404');
            }
        } else {
            return redirect()->route('login');
        }
    }


    public function edit($id)
    {
        if (\Auth::check()) {
            $post = Post::where('id', '=', $id)->first();
            $authors = Author::all();
            $categories = Category::all();

            return view('edit_post', [
                'post' => $post,
                'authors' => $authors,
                'categories' => $categories
            ]);

        } else {
            return redirect('login');
        }

    }

    public function save_edited_post(Request $request)
    {
        $pathToImage = 'http://127.0.0.1:8000/images/';

        if (\Auth::check()) {
            if ($request->method() == 'POST') {
                $this->validate($request, [
                    'author_id' => 'required',
                    'title' => 'required | min:5 | max:100',
                    'body' => 'required | min:100',
                    'img295_250' => 'required | image',
                    'img780_520' => 'required | image',
                    'img100_100' => 'required | image'
                ]);

                $post = Post::where('id', '=', $request->input('id'))->first();
                $post->author_id = $request->input('author_id');
                $post->title = $request->input('title');
                $post->body = $request->input('body');

                $img295_250 = $request->img295_250;
                if ($img295_250) {
                    $imageName295_250 = $img295_250->getClientOriginalName();
                    $img295_250->move('images', $imageName295_250);
                    $post->img295_250 = $pathToImage . $imageName295_250;
                }
                $img780_520 = $request->img780_520;
                if ($img780_520) {
                    $imageName780_520 = $img780_520->getClientOriginalName();
                    $img780_520->move('images', $imageName780_520);
                    $post->img780_520 = $pathToImage . $imageName780_520;
                }
                $img100_100 = $request->img100_100;
                if ($img100_100) {
                    $imageName100_100 = $img100_100->getClientOriginalName();
                    $img100_100->move('images', $imageName100_100);
                    $post->img100_100 = $pathToImage . $imageName100_100;
                }
                $post->save();

                $post->category()->getRelated();
                $post->category()->sync($request->input('category_id'));
                $post->category()->getRelated();

                $log = new Logger('updated_post');
                $log->pushHandler(new StreamHandler(__DIR__ . '/../../Logs/logs.log', Logger::INFO));
                $log->info('User ' . Auth::user()->name . ' have updated post # ' . $post->id);

                return redirect()->route('admin')->with('message', 'Post successfully updated');
            } else {
                return redirect()->route('404');
            }
        } else {
            return redirect()->route('login');
        }
    }

    public function delete_post(Request $request)
    {
        if ($request->method() == 'DELETE') {
            $post = Post::find($request->input('id'));
            $post->delete();

            $log = new Logger('deleted_post');
            $log->pushHandler(new StreamHandler(__DIR__ . '/../../Logs/logs.log', Logger::WARNING));
            $log->warning('User ' . Auth::user()->name . ' have deleted post # ' . $post->id);

            return back()->with('message', 'Post successfully deleted');

        } else {

            return view('admin', ['posts' => Post::orderBy('created_at', 'DESC')->paginate(10)]);
        }
    }
}

