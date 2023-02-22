<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    //
    public function sendEmail(request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->msg
        ];

        Mail::to('testd2258@gmail.com')->send(new ContactMail($details));
        return back()->with('success', 'Your message has been sent successfully.');
    }
}
