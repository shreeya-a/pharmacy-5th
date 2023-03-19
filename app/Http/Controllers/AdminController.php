<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    // add a role field in migration table of User 
    //models ko user.php ma add role inside fillable wala part
    //follow the video i sent you 
    // try whatever you can
    // then in case of error we'll see what we can do together
    // i'm there through and through but I can't take this opportunity out of your hands
    // you got this
    // i have faith in you
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
            return redirect()->route('admin.dashboard');
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
