<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
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

    public function submit(Request $request)
    {
        $name = $request->input('username');
        $email = $request->input('email');
        $message = $request->input('message');

        Mail::to($email)->send(new ContactMail());

        return redirect(route('homepage'))->with('message', 'Mail inviata con successo!');
    }
}
