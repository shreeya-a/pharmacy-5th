<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Order;
use App\Models\PrescriptionItems;
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
        $cats = Section::all();

        return view('user.index', compact('featured_products', 'popular_products', 'cats'));
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

public function searchAjax()
{
    $products = Product::select('product')->get();
    $data =[];
    foreach($products as $item){
        $data[] = $item['product'];
    }
    return $data;

}
public function searchProduct(Request $req)
{
   $searched_product = $req->product_name;
//    dd($searched_product);
   if($searched_product != "")
   {
        $product = Product::where("product", "LIKE", "%$searched_product%")->first();
        if($product)
        {
            return redirect('section/'.$product->section->section.'/'.$product->product.'/'.$product->id);
        }else{
            return redirect()->back()->with("fail", "No products matched your search");
        }
   }
   else{
    return redirect()->back();
   }
}

    public  function section($section, $section_id)
    {
    
        $section_product = Product::where('section_id', $section_id) ->orderBy('id','desc')->paginate(12);
        $section = Section::where('id',$section_id)->get('section');
        // dd($section);

        return view('section', compact('section_product', 'section'));
    }

    // return redirect()->route('login');

    public function productDetails($section_name, $product_name, $id)
    {
        $product_details = Product::where('id', $id)->get();
        return view('product-details', ['product_details' => $product_details, 'product_name' => $product_name, 'section_name' => $section_name]);
    }

    //order details
     public function myOrder()
    {
        $orders = Order::where('user_id',Auth::id())->orderBy('id','desc')->paginate(5);
        return view('user.order.index', compact('orders'));
    }
     public function viewmyOrder($id)
    {
        $orders = Order::where('id',$id)->where('user_id',Auth::id())->first();
        return view('user.order.view', compact('orders'));
    }
     public function cancelmyOrder($id)
    {
        $orders = Order::where('id',$id)->where('user_id',Auth::id())->first();
        $orders->status = 2;
        $orders->update();
        // return view('user.order.index', compact('orders'));
        return redirect()->route('myOrder');
        
    }

    //prescription order details
    public function myPresOrder()
    {
        $prescription = Image::where('user_id',Auth::id())->orderBy('id','desc')->paginate(5);
        return view('user.prescription.index', compact('prescription'));
    }
    public function viewmyPresOrder($id)
    {                         //prescription id
        $presorder = Image::where('id',$id)->where('user_id',Auth::id())->first();
        // dd($presorder);
        $presItem = PrescriptionItems::where('pres_id',$id)->get();
        // dd($presItem);

        return view('user.prescription.view', compact('presorder','presItem'));
    }
    public function cancelPresOrder($id)
    {
        $presorder = Image::where('id',$id)->where('user_id',Auth::id())->first();
        
        $presorder->status = 2;
        // dd($presorder);     
        
        $presorder->update();
        $prescription = Image::where('user_id',Auth::id())->get();

        return view('user.prescription.index', compact('prescription'));

        
    }
}
