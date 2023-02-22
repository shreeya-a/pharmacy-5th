<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index()
    {
        $orders = Order::where('status','0')->get();
        return view('order.index', compact('orders'));
    }
    public function viewOrder($id)
    {
        $order= Order::where('id',$id)->first();
        return view('order.viewOrder', compact('order'));
        
    }
    public function updateOrder(Request $req, $id)
    {
        $order= Order::find($id);
        $order->status = $req->input('order_status');
        $order->update();
        return redirect('order')-> with('status', "Order updated successfully");

    }
}
