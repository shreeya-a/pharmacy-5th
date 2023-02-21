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
        $cartItem = Cart::where('user_id',Auth::id())->get();
        return view('checkout', compact('cartItem'));
    }
    public function placeOrder(Request $req)
    {
     $order = new Order();
     $order->user_id = Auth::id();
     $order->fname = $req->input('fname');
     $order->lname = $req->input('lname');
     $order->email = $req->input('email');
     $order->phone = $req->input('phone');
     $order->address = $req->input('address');
     $order->city = $req->input('city');
     $order->state = $req->input('state');
     $order->country = $req->input('country');
     $order->tracking_no = rand(1111,9999);
     $order->save();

     $cartItem = Cart::where('user_id',Auth::id())->get();
        foreach($cartItem as $item)
        {
            OrderItem::create([
                'order_id' => $item->id,
                'prod_id' => $item->prod_id,
                'qty' => $item->prod_qty,
                'price' => $item->product->price,
            ]);
        }

        if(Auth::user()->address == Null){
            $user = User::where('id',Auth::id())->first();
            $user->name = $req->input('fname');
            $user->lname = $req->input('lname');
            $user->phone = $req->input('phone');
            $user->address = $req->input('address');
            $user->city = $req->input('city');
            $user->state = $req->input('state');
            $user->country = $req->input('country');
            $user->update();
            
        }
     $cartItem = Cart::where('user_id',Auth::id())->get();
     Cart::destroy($cartItem);

        return redirect('/');

    }
}
