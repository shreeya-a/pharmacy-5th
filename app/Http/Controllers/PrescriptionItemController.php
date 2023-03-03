<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\PrescriptionItems;
use App\Models\Product;
use Illuminate\Http\Request;

class PrescriptionItemController extends Controller
{
    //
    public function addPresItem(Request $req){
        $presItem = new PrescriptionItems();
        $presItem->pres_id = $req->pres_id;
        $presItem->prod_id = $req->prod_id;
       $itemprice = Product::where('id',$req->prod_id)->get();
       foreach($itemprice as $iprice){

           $presItem->price = $iprice->price;
       }
        $presItem->qty = $req->prod_qty;
        $presItem->message = $req->message;
        $presItem->save();

        return redirect()->route('viewPrescription',$req->pres_id)->with('success',"Product added successfully");
    }

    public function updatePresOrder(Request $req , $id)
    {
        $order= Image::find($id);
        $order->status = $req->input('order_status');
        $order->update();
        return redirect()->route('prescription')-> with('status', "Prescription Order updated successfully");

    }
    public function deletePresItem($id , $pid)
    {
        // dd("hello");s
        $item = PrescriptionItems::find($id);
        $item->delete();
        return redirect()->route('viewPrescription',$pid)->with('success',"Product added successfully");


    }
}
