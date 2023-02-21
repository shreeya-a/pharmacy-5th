<?php

namespace App\Http\Controllers;

use App\Models\Cart;
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

}
