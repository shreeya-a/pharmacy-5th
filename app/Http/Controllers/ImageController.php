<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    //
    // public function upload()
    // {
    //     return view('create');
    // }

    public function create()
    {
        if(Auth::check()){

            return view('image.create');
        }
        else {
            return response()->json(['status' =>  "Login to Continue"]);
        }
    }

    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            // 'email' => 'required',
            'image' => 'required|image|max:2048',
        ]);

        // Store the image in the database
        $image = new Image;
        $image->user_id = Auth::id();
        $image->image = $request->file('image')->store('prescription', 'public');
        $image->save();

        return redirect('/image')->with('success', 'Image has been uploaded successfully.');
    }

    // for admin section
    public function prescription(){
        $prescription = Image::all();
        return view('admin.prescription.index', compact('prescription'));

        
    }
}
