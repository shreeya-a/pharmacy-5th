<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Section;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //


    public  function homepage()
    {
        $featured_products = Product::where('featured', '1')->take(5)->get();
        $popular_products = Product::where('popular', '1')->take(5)->get();

        return view('user.index', compact('featured_products', 'popular_products'));
    }
    // $section = Section::all();
    // return view('product.editProduct', ['product' => $product,'category' => $category,'section' => $section]);

    public function about()
    {
        return view('about-page');
    }

    public  function login()
    {
        return view('login');
    }

    public function contact()
    {
        return view('contact');
    }



    public  function register()
    {
        return view('register');
    }
    public  function section($section)
    {
        // $section = Product::where();
        $section_product = Product::where('section_id', $section)->get();

        return view('section', ['section_product' => $section_product]);
    }

    // return redirect()->route('login');

    public function productDetails($section_name, $product_name, $id)
    {
        $product_details = Product::where('id', $id)->get();
        return view('product-details', ['product_details' => $product_details, 'product_name' => $product_name, 'section_name' => $section_name]);
    }

     public function myOrder()
    {
        $orders = Order::where('user_id',Auth::id())->get();
        return view('user.order.index', compact('orders'));
    }
     public function viewmyOrder($id)
    {
        $orders = Order::where('id',$id)->where('user_id',Auth::id())->first();
        return view('user.order.view', compact('orders'));
    }
}
