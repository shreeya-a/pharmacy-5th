<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\MailContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;
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

        FacadesMail::to('testd2258@gmail.com')->send(new MailContact($details));
        return back()->with('success', 'Your message has been sent successfully.');
    }
}
