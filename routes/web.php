<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController; 
//use App\Http\Controllers\ContactusController; 
use Illuminate\Http\Request;
use App\Http\Controllers\ContactusController;

use App\Http\Controllers\MyController;
use App\Http\Controllers\IhateController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ContactFormController;

//--------------------------------------------------------------------------
 //Web Routes
//-----------------------------------------------------------------------

 //Here is where you can register web routes for your application. These
 //routes are loaded by the RouteServiceProvider within a group which
 //contains the "web" middleware group. Now create something great!

//*/

Route::get('/', function () {
   return view('welcome');
});
Route::get('/about', function () {
  return view('about');
});

Route::get('/blog', function () {
  return view('blog');
});
Route::get('/contactprocess', function () {
  return view('contact_process');
});
Route::get('/contact', function () {
  return view('contact');
});
Route::post('/contact',[ContactFormController::class,'contactForm'])->name('contactForm');
Route::get('/elements', function () {
  return view('elements');
});
Route::get('/index', function () {
  return view('index');
});
Route::get('/portfoliodetails', function () {
  return view('portfolio-details');
});
Route::get('/portfolio', function () {
  return view('portfolio');
});
Route::get('/services', function () {
  return view('services');
});
Route::get('/blogdetails', function () {
  return view('single-blog');
});


  
   








































//Route::get('portfolio',[MyController::clrass,'showportfoliopage']);
  
  
  
  
  



























  
    //Route::get('grip/{name}',[ContactusController::class,'human']);



  

  //Route::get('user/{u_id}',function($id){
    //return $id;
   //} );
   //Route::get('post/{postid}/comment/{comment_id}',function($post_id,$comment_id){
    //return  "POST ID " . $post_id. "COMMENT ID " . $comment_id;
   //} );



  /*Route::get('ARMY/{NAME?}',function($NAME=NULL){
    return "hello".$NAME;
   } );

   Route::get('ARMY/{NAME?}',function($NAME='BIGBOSS'){
    return "hello".$NAME;
   } );*/




   //Route::get('ARMY/{ARMY_ID}',function($ARMY_ID){
    //return "hello".$ARMY_ID;
   //} )->whereIn('ARMY_ID', ['movie', 'song', 'painting']);
// Auth::routes();/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
