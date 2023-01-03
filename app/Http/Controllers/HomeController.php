<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Section;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    
    
    public  function homepage()
    {
    $featured_products = Product::where('featured','1')->take(5)->get();
    $popular_products = Product::where('popular','1')->take(5)->get();

        return view('user.index', compact('featured_products', 'popular_products'));
    }
    // $section = Section::all();
    // return view('product.editProduct', ['product' => $product,'category' => $category,'section' => $section]);

    public  function login()
    {
        return view('login');
    }
    
   
    public  function register()
    {
        return view('register');

    }
    public  function section($section)
    {
        // $section = Product::where();
    $section_product = Product::where('section_id',$section)->get();

        return view('section', ['section_product' => $section_product]);

    }

    // return redirect()->route('login');

    public function productDetails($id)
    {
        $product_details = Product::where('id',$id)->get();
        return view('product-details', ['product_details' => $product_details]);


    }
}
