<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Mail\EmailVerify;
use App\Models\VerifyUser;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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

        $user = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);

        // $verifyUser = VerifyUser::create([
        //     'token' => Str::random(60),
        //     'user_id' => $user->id,
        // ]);
        // Mail::to($user->email)->send(new EmailVerify($user));


        // return redirect()->route('login')->with('great', 'Registration complete.Please verify your Email.');
        return redirect()->route('login')->with('great', 'Registration complete. Please Login to Continue');
    }

    //email verification
    // public function verifyEmail($token)
    // {
    //     $verifiedUser = VerifyUser::where('token', $token)->first();
    //     if (isset($verifiedUser)) {
    //         $user = $verifiedUser->user;
    //         if (!$user->email_verified_at) {
    //             $user->email_verified_at = Carbon::now();
    //             $user->save();
    //             return redirect()->route('login')->with('great', 'Your Email Has been Verified');
    //         } else {
    //             return redirect()->back()->with('fail', 'Your email has already been verified');
    //         }
    //     } else {
    //         return redirect()->route('login')->with('fail', 'Something went wrong while verifying email');
    //     }
    // }

    public function loginUser(Request $req)
    {


        $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($req->only(['email', 'password']), $req->remember)) {

            //email verification logging in
            // if (Auth::user()->email_verified_at == null) {
            //     Auth::logout();
            //     return redirect()->route('login')->with('fail', 'Please verify your email to login');
            // }
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
            return redirect()->route('homepage');
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
