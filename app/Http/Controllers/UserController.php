<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function registerUser(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' =>  'required|unique:users',
            'password' => 'required|min:4',
            'confirm-password' => 'required|same:password',

        ]);

        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);

        return redirect()->route('login');
    }

    public function loginUser(Request $req)
    {


        $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($req->only(['email', 'password']), $req->remember)) {
            // dd('you are Logged In');

            // remember me cookie setting
            if ($req->remember === null) {
                setcookie(
                    'login_email',
                    $req->email,
                    10
                );
                setcookie(
                    'login_pass',
                    $req->email,
                    10
                );
            } else {
                setcookie(
                    'login_email',
                    $req->email,
                    time() + 60 * 60 * 24 * 20
                );
                setcookie(
                    'login_pass',
                    $req->password,
                    time() + 60 * 60 * 24 * 20
                );
            }

            // remember me cookie setting ends
            if (Auth::attempt($req->only('email', 'password'))) {
                // dd('log in');
                if(Auth::user()->role == '1' ){
                    return redirect()->route('dashboard');
                }else{
                    return redirect()->route('home.index');
                }
            }
    
        } else {
            return back()->with('fail', 'User not found');
        }
    }
    public function logout()
    {

        auth()->logout();

        return redirect()->route('homepage');
    }
}