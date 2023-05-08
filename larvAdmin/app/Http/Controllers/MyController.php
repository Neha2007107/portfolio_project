<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request as input;
use Illuminate\Support\Facades\Validator;
use App\Http\Model\ContactUs;
use Illuminate\Http\Response;




class MyController extends Controller
{

    function showaboutpage(){
       return view('newsite.about');
}

function blogdetails(){
    return view('newsite.blog_details');
}

function showblogpage(){

    return view('newsite.blog') ;
}
function showcontactpage(){
return view('newsite.contact');
}

function showelementpage(){

    return view('newsite.element');
}
function showindexpage(){
  return view('newsite.index');
}
function industriespage(){

return view ('newsite.industries') ;   
}
function showmenupage(){
return view('newsite.menu');
}

function showsitepage(){
    return view('newsite.site');
}

function slow(){
return view('form');
}

public function saveContactData(Request $request){
    $inputData['message']=$request->message;
    $inputData['name']=$request->name;
    $inputData['email']=$request->email;
    $inputData['subject']=$request->subject;
    dd($inputData);
    $save = ContactUs::saveContactUsData($inputData);

}





}


