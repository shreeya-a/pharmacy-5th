<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class OrderController extends Controller
{
    //
    public function index()
    {
        $orders = Order::orderBy('id','desc')->paginate(10);
        return view('order.index', compact('orders'));
    }
    public function orderHistory()
    {
        $orders = Order::where('status','1')->orWhere('status','2')->orderBy('id','desc')->paginate(10);

        return view('order.history', compact('orders'));
    }
    public function viewOrder($id)
    {
        $order= Order::where('id',$id)->first();
        // dd($order);
        $orderItem = OrderItem::where('order_id', $id)->paginate(5);

        return view('order.viewOrder', compact('order','orderItem'));
        
    }
    public function updateOrder(Request $req, $id)
    {
        $order= Order::find($id);
        $order->status = $req->input('order_status');
        $msg = $req->input('order_status');
        if($msg == 1){
            $order->message = "Your order has been processed. Thank you for shopping with us.";
        }
        if($msg == 2){
            $order->message = "Sorry, your order has been cancelled. Contact us for more details.";
        }

        $order->update();
        return redirect('order')-> with('status', "Order updated successfully");

    }
    public function invoice ($oid)
    {
       
        $order =  Order::where('id', $oid)->get();
   
        $orderItem = OrderItem::where('order_id', $oid)->get();
        return view('order.invoice', compact('order','orderItem'));
    }
    public function print_invoice($oid)
    {
        $order =  Order::where('id', $oid)->get();
   
        $orderItem = OrderItem::where('order_id', $oid)->get();
        return view('order.print-invoice', compact('order','orderItem'));
    }

    
}
