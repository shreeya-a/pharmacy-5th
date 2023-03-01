<?php

namespace App\Http\Controllers;

use App\Models\PrescriptionItems;
use Illuminate\Http\Request;

class PrescriptionItemController extends Controller
{
    //
    public function addPresItem(Request $req){
        $presItem = new PrescriptionItems();
        $presItem->pres_id = $req->pres_id;
        $presItem->prod_id = $req->prod_id;
        $presItem->qty = $req->prod_qty;
        $presItem->price = $req->price;
        $presItem->save();

        return redirect()->route('viewPrescription',$req->pres_id)->with('success',"Product added successfully");

     
       
        
    }
}
