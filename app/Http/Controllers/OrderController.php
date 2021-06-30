<?php

namespace App\Http\Controllers;

use App\Order;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use function MongoDB\BSON\toJSON;
use Darryldecode\Cart\Facades\CartFacade;

class OrderController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required | string | max:50',
            'last_name' => 'required | string | max:50',
            'phone' => 'required | size:13',
            'address' => 'required | string | max:200',
            'comment' => 'string | max:300'
        ]);

        $order = new Order();
        $order->first_name = $request->post('first_name');
        $order->last_name = $request->post('last_name');
        $order->phone = $request->post('phone');
        $order->email = Auth::user()->email;
        $order->address = $request->post('address');
        $order->comment = $request->post('comment');
        $order->cart = (\Cart::getContent()->toJson());

        try {
            $order->save();
        } catch (\Exception $exception) {
            return back()->withErrors('errors', $exception->getMessage());
        }
        return redirect()->route('order', ['id' => $order->id]);
    }

}
