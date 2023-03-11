<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\PrescriptionItems;
use App\Models\Product;
use App\Models\Section;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    //
    // public function upload()
    // {
    //     return view('create');
    // }

    //user uploads prescription
    public function create()
    {
        if(Auth::check()){

            return view('user.prescription.create');
        }
        else {
            return response()->json(['status' =>  "Login to Continue"]);
        }
    }

    //user's prescription is saved with  shipping sdetails
    public function store(Request $request)
    {
        // dd("working");

        // Validate the input
        $request->validate([
            // 'email' => 'required',
            'phone' => 'required|min:10|max:10',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'image' => 'required|image|max:2048',
        ]);
        // dd("working");
        

        // Store the image in the database
        $image = new Image;
        $image->user_id = Auth::id();
        $image->fname = Auth::user()->name;
        // $image->lname = Auth::user()->lname;
        // $image->lname = Auth::user()->lname;
        $image->email = Auth::user()->email;
        $image->lname = $request->input('lname');
        $image->phone = $request->input('phone');
        $image->address = $request->input('address');
        $image->city = $request->input('city');
        $image->country = $request->input('address');
        $image->image = $request->file('image')->store('prescription', 'public');
        // $image->tracking_no = rand(1111, 9999);

        $image->save();

        if (Auth::user()->address == Null) {
            $user = User::where('id', Auth::id())->first();
            $user->phone = $request->input('phone');
            $user->address = $request->input('address');
            $user->city = $request->input('city');
            $user->state = $request->input('state');
            $user->country = $request->input('country');
            $user->update();
        }

        return redirect('/')->with('success', 'Prescription has been uploaded successfully.');
    }

    // for admin section
    public function prescription(){
        $prescription = Image::orderBy('id','desc')->paginate(10);
        //yo garna chai ali mildaina
    //    $name= Auth::user()->name;
        return view('admin.prescription.index', compact('prescription'));  
    }

    public function viewPrescription($presId){
        $prescription= Image::where('id',$presId)->first();
        // dd($prescription);
        $prod_section = Section::where('section', 'Medicine')->get('id');
        // dd($prod_section);
        // $product = Product::where('section_id', $prod_section)->get();
        // dd($product);
        $product = Product::all();
        // dd($product);

        $presItem = PrescriptionItems::where('pres_id',$presId)->get();
        // $art = Product::with('product')->get();
        // dd($art);
        // dd($presItem);
        // $produ= PrescriptionItems::all();
        // dd($produ);

        return view('admin.prescription.viewPrescription', compact('prescription','product','presItem'));
    }
}
