<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmationEmail;

class PublicController extends Controller
{
    public function home(){
        return view("home");
    }
    public function form(){
        return view('form');
    }
    public function sendEmail(Request $request){
        $email = $request->email;
        $username = $request->username;
        $message = $request->message;

        Mail::to('amministrazione@strumentimusicale.com')->send(new ConfirmationEmail($email,$username,$message));

        return redirect()->route('home')->with('success', 'Email inviata con successo!');
    }

}
