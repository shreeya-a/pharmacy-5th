<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    //

    public  function index()
    {
        $cartItem = Cart::where('user_id', Auth::id())->get();
        return view('checkout', compact('cartItem'));
    }
    public function placeOrder(Request $req)
    {
        $req->validate([
            'phone' => 'required|min:10|max:10',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
        ]);
        $order = new Order();
        $order->user_id = Auth::id();
        $order->fname = $req->input('fname');
        $order->email = $req->input('email');
        $order->phone = $req->input('phone');
        $order->address = $req->input('address');
        $order->city = $req->input('city');
        $order->country = $req->input('country');
        $date = date('Ymd');
        $order->tracking_no =$date. rand(1111, 9999);
        // dd($order->tracking_no);

        //to claculate total price
        $total = 0;
        $cartItem_total = Cart::where('user_id', Auth::id())->get();
        foreach ($cartItem_total as $prod) {
            $total += $prod->product->price * $prod->prod_qty;
        }
        $order->total_price = $total;
        $order->save();

        // order->id; is taken as id for order placement in order_items table
        $cartItem = Cart::where('user_id', Auth::id())->get();
        foreach ($cartItem as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'prod_id' => $item->prod_id,
                'qty' => $item->prod_qty,
                'price' => $item->product->price,
            ]);
        }

        if (Auth::user()->address == Null) {
            $user = User::where('id', Auth::id())->first();
            $user->phone = $req->input('phone');
            $user->address = $req->input('address');
            $user->city = $req->input('city');
            $user->country = $req->input('country');
            $user->update();
        }
        $cartItem = Cart::where('user_id', Auth::id())->get();
        Cart::destroy($cartItem);

        return redirect('/')->with('status', "Order placed successfully.");
    }
}
