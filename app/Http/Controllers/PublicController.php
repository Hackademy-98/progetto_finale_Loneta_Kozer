<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Mail\ConfirmationEmail;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    // public function home(){
    //     return view("home");
    // }
    public function home(){
        
        $products = Product::orderBy('created_at','desc')->take(6)->get();
        // dd($product);
        return view('home',compact('products'));
        
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
