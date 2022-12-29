<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    
    
    public  function homepage()
    {
        return view('user.index');
    }

    public  function login()
    {
        return view('login');
    }
    
   
    public  function register()
    {
        return view('register');

    }

    // return redirect()->route('login');

}
