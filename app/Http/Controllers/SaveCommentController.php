<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaveCommentController extends Controller
{
    public function __invoke(Request $request)
    {
        if(Auth::check()){
            if($request->method() == 'POST'){
                $comment = new Comment();
                $comment->post_id = $request->input('post_id');
                $comment->author = $request->input('author');
                $comment->message = $request->input('message');
                $comment->save();

                return redirect()->route('single_post', $comment->post_id);
            }
        }

    }
}
