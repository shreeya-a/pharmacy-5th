<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //
    public function addProduct(Request $req)
    {
        $product_id = $req->input('product_id');
        $product_qty = $req->input('product_qty');

        if (Auth::check()) {
            $prod_check = Product::where('id', $product_id)->first();

            if ($prod_check) {
                if (Cart::where('prod_id', $product_id)->where('user_id', Auth::id())->exists()) {
                    return response()->json(['status' => $prod_check->product . " Already Added to Cart"]);
                }
                $cartItem = new Cart();
                $cartItem->user_id = Auth::id();
                $cartItem->prod_id = $product_id;
                $cartItem->prod_qty = $product_qty;
                $cartItem->save();
                return response()->json(['status' => $prod_check->product . " Added to Cart"]);;
            }
        } else {
            return response()->json(['status' =>  "Login to Continue"]);
        }
    }
    public function deleteProduct(Request $req)
    {
        if (Auth::check()) {
            $prod_id = $req->input('prod_id');
            if (Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists()) {
                $cartItem = Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->first();
                $cartItem->delete();
                return response()->json(['status' =>  "Product Deleted successfully"]);
            }
        }
    }
    public function viewCart()
    {
        $cartItem = Cart::where('user_id', Auth::id())->get();
        return view('cart', compact('cartItem'));
    }
}
