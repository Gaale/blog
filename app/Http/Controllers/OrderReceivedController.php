<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderReceivedController extends Controller
{
    public function __invoke($id)
    {
        try {
            $order = Order::findOrFail($id);
        } catch (\Exception $exception) {
            return view('404');
        }

        $total = 0;
        $cart = json_decode($order->cart, true);
        foreach($cart as $item){
            $subtotal = $item['price'] * $item['quantity'];
            $total += $subtotal;
        }

        if (Auth::check() && Auth::user()->email == $order->email) {
            return view('order', ['order' => $order, 'total' => $total]);
        } else {
            return view('404');
        }
    }
}
