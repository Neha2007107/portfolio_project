<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request as input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;


class AboutController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function show(Request $request){
    
        return view('profile')->with('name', 'neha');
    
}

public function contactus(Request $request){
    
    return view('contact')->with('name', 'neha');

}
// public function color(){

// return view



// }




}