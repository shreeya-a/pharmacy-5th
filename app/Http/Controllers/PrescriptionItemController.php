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
        $req->validate([
            'prod_qty' => 'required',
            'message' => 'required'
        ]);
        $prod_check = Product::where('id', $req->prod_id)->first();

        if ($prod_check) {
            if (PrescriptionItems::where('prod_id',  $req->prod_id)->where('pres_id', $req->pres_id )->exists()) {
                // return response()->with(['status' => " Already Added to table"]);
        return redirect()->route('viewPrescription',$req->pres_id)->with('error',"Product already added.");

                // return response()->json(['status' => " Already Added to table"]);
            }
       
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
    }

        return redirect()->route('viewPrescription',$req->pres_id);
    }

    public function updatePresOrder(Request $req , $id)
    {
        $order= Image::find($id);
        $order->status = $req->input('order_status');
   
        // $date = date('Ymd');
        // // dd($date);
        // if($order->tracking_no == NULL){

        //     $order->tracking_no = $date . rand(11111, 99999);
        // }
 //to claculate total price
 $total = 0;
 $presItem_total = PrescriptionItems::where('pres_id', $id)->get();
 foreach ($presItem_total as $pres) {
     $total += $pres->price * $pres->qty;
 }
//  dd($presItem_total, $total);

 $order->total_price = $total;
        $order->update();
        return redirect()->route('viewPrescription',$id)->with('success',"Order status changed successully.");


    }
    public function cancelPres( $id){
        $order= Image::find($id);
        $order->status = 2;
        // dd($presorder);     
        $prescription = Image::all();
        
        $order->update();
        return view('admin.prescription.index', compact('prescription'))->with('warning',"Order Cancelled.");

     
  
  


    }
    public function deletePresItem($id , $pid)
    {
        // dd("hello");s
        $item = PrescriptionItems::find($id);
        $item->delete();
        return redirect()->route('viewPrescription',$pid)->with('success',"Item deleted successfully");


    }
    public function editPresItem($piid)
    {
        $pitem = PrescriptionItems::find($piid);
        return view('admin.prescription.editPrescriptionItem',compact('pitem'));
    }
    public function savePresItem(Request $req, $piid, $pid)
    {
        $pitem = PrescriptionItems::find($piid);
        $pitem->message=$req->input('message');
        $pitem->qty = $req->input('qty');
        $pitem->update();
        return redirect()->route('viewPrescription',$pid)->with('success',"Item updated successfully");

      
    }


    public function invoice (Request $req,$pid)
    {
        $presorder= Image::find($pid);
        $presorder->discount = $req->input('discount');
        $presorder->tax = $req->input('tax');
        $presorder->delivery = $req->input('delivery');
        $presorder->final_price = $req->input('final_price');
      $presorder->update();


        $pres =  Image::where('id', $pid)->get();
   
        $presItem = PrescriptionItems::where('pres_id', $pid)->get();
        return view('admin.prescription.invoice', compact('pres','presItem'));
    }
    public function print_invoice($pid)
    {
        $pres =  Image::where('id', $pid)->get();
   
        $presItem = PrescriptionItems::where('pres_id', $pid)->get();
        return view('admin.prescription.print-invoice', compact('pres','presItem'));
    }
}
