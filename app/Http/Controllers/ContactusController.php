<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request as input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
class ContactusController extends Controller
{

  function please(){
    return view('old.profile');
  }

  function carrum(){
  return view('old.home');
 }

 function saveCarrum(Request $request){
  dd($request->all());
  //echo $first_name= $request->first_name;
 }
function showaboutpage(){

  return view('old.about');
}
function showblogpage(){

  return view('old.blog');
}

function showblogsinglepage(){

  return view('blog-single');
}



function showcontactpage(){

  return view('old.contact');
  
}
function showindexpage(){

  return view('old.index');
  
}

function showindex2page(){

  return view('old.index-2');
  
}
function showportfoliopage(){

  return view('old.portfolio');
  
}
function showportfoliodetails(){
  return view('old.portfolio-details');
  
}

function showservicespage(){

  return view('old.services');
  
}
function showteampage(){

  return view('old.team');
  
}
function pageone(){

return('jfgfgje');


}

function pairs(){

  return('form1');
}







}