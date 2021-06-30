<?php

namespace App\Http\Controllers;

use App\Post;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Darryldecode\Cart\Facades\CartFacade;

class CartController extends Controller
{
    public function add_to_cart($id)
    {
        $post = Post::find($id);

        if (Auth::check()) {
            \Cart::add([
                'id' => $post->id,
                'name' => $post->title,
                'price' => $post->author_id,
                'quantity' => 1,
                'attributes' => [
                    'img' => $post->img100_100
                ]
            ]);
            Session::flash('flash', 'Post successfully added to cart');
        } else {
            Session::flash('flash', 'To use Cart user should be registered');
        }
        return back();
    }

    public function show_cart()
    {
        return view('cart');
    }

    public function delete_item($id)
    {
        \Cart::remove($id);

        return back();
    }

    public function update_cart(Request $request)
    {
        foreach ($request->post() ['items_'] as $id => $quantity){
            \Cart::update($id, [
                'quantity' => [
                    'relative' => false,
                    'value' => $quantity
                ]
            ]);
        }

        return back();
    }

    public function make_order()
    {
        return view('checkout');
    }
}
