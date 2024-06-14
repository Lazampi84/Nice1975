<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Requests\MailRequest;
use App\Mail\MailContact;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function contact() {
        return view('contattaci');
    }
    //     public function thankYou()
    // {
    //     return view('thankYou');
    // }

    public function submit(MailRequest $request)
    {
        $name = $request->input('username');
        $email = $request->input('email');
        $usermessage = $request->input('message');

        Mail::to($email)->send(new ContactMail($name, $email, $usermessage));

        Mail::to('info@griffegenova.com')->send(new MailContact($name, $email, $usermessage));

        return redirect(route('homepage'))->with('message', 'Mail inviata con successo!');
    }

        public function privacyepolicy() {
        return view('privacyepolicy');
    }
}
