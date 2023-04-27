<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    //

    public function dashboard(){
        // dd("hello??????????");
        $orders = Order::count();
        $presorders = Image::count();
        $users = User::count();
        $products = Product::count();

        $todayDate = Carbon::now()->format('d-m-Y');
        $thisMonth = Carbon::now()->format('m');

        $todayOrder = Order::whereDate('created_at',$todayDate)->count();
        $thisMonthOrder = Order::whereDate('created_at',$thisMonth)->count();

        $todayPresorder = Image::whereDate('created_at',$todayDate)->count();
        $thisMonthPresorder = Image::whereDate('created_at',$thisMonth)->count();
        
        
        $todayUsers = User::whereDate('created_at',$todayDate)->count();
        $thisMonthUsers = User::whereDate('created_at',$thisMonth)->count();

        $todayProducts = Product::whereDate('created_at',$todayDate)->count();
        $thisMonthProducts = Product::whereDate('created_at',$thisMonth)->count();

        
        return view('admin.dashboard.dashboard', compact('orders', 'presorders', 'users', 'products', 'todayOrder', 'todayPresorder','todayUsers', 'todayProducts','thisMonthOrder','thisMonthPresorder','thisMonthUsers','thisMonthProducts'));

        
    }

}
