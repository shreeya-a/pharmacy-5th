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
            'email' => 'required',
            'image' => 'required|image|max:2048',
        ]);

        // Store the image in the database
        $image = new Image;
        $image->email = $request->input('email');
        $image->image = $request->file('image')->store('public/prescription');
        $image->save();

        return redirect('/image')->with('success', 'Image has been uploaded successfully.');
    }
}
