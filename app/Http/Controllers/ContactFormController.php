<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    //


    // public function index(){
    //     return view('contact');
    // }

    public function index()
    {
        //
        $forms=ContactForm::all();
        return view('contact',['forms'=>$forms]);
    }

    public function contactForm(Request $request){
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['subject']=$request->subject;
        $data['message']=$request->message;

        $savedata = ContactForm::insertContact($data);
      
           return 'contact save successfully';
 

    }
}