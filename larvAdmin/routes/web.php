<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController; 
//use App\Http\Controllers\ContactusController; 
use Illuminate\Http\Request;
use App\Http\Controllers\ContactusController;

use App\Http\Controllers\MyController;
use App\Http\Controllers\IhateController;

use App\Http\Controllers\Admin\DashboardController;


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

//Route::get('/about', function () {
   //return view('PAGE1');
 // });

  //Route::get('/user', function () {
    //return view('page2');
   //});
   //Route::get('/data', function () {
    //return view('contact_data');
  // });
 // Route::get('/mangodb',function(){
   //return "winter season";
  //});
//Route::get('sweet/{$name}',[ContactusController::class,'chocoklate']);
   // Route::get('/a', [AboutController::class, 'show']);
  //Route::get('/contact', [AboutController::class, 'contactus']);

 Route::Prefix('admin')->middleware(['auth','isAdmin'])-> group (function(){
 Route::get('/dashboard',[DashboardController::class,'index']);

   });
Route::get('/dashboard',[DashboardController::class,'index']);
  
Route::get('/login',[DashboardController::class,'serve']);
Route::get('/doLogin' ,[DashboardController::class,'doLogin']);

Route::get('/display-contact-data',[DashboardController::class,'showContactData']);

Route::get('/register',[DashboardController::class,'registration']);
Route::post('/register-log-in' ,[DashboardController::class,'registraterLogIn']);



Route::get('/Delete_row/{id}',[IhateController::class,'deleteRow']);
  Route::get('/display-contact-data',[IhateController::class,'showContactData']);
  Route::get('/view-contact/{id}',[IhateController::class,'showContactDetail']);

  Route::get('/editpage-contact/{id}',[IhateController::class,'showeditDetail']);
  Route::post('/update-editpage-contact',[IhateController::class,'updateEditPage']);
  Route::get('chess',[ContactusController::class,'please']);

  Route::get('games',[ContactusController::class,'carrum']);
  
  Route::post('games',[ContactusController::class,'saveCarrum']);
  Route::get('contact',[ContactusController::class,'showContactPage']);

    Route::get('about',[ContactusController::class,'showAboutPage']);
  
    Route::get('home',[ContactusController::class,'showhomepage']);
  
    Route::get('services',[ContactusController::class,'showservicespage']);
  
    Route::get('team',[ContactusController::class,'showteampage']);
  
    Route::get('blog',[ContactusController::class,'showblogpage']);

    Route::get('blog-single',[ContactusController::class,'showblogsinglepage']);
  
    Route::get('index',[ContactusController::class,'showindexpage']);
  
    Route::get('index2',[ContactusController::class,'showindex2page']);
  
    Route::get('portfoliodeails',[ContactusController::class,'showportfoliodetails']);
  
    Route::get('portfolio',[ContactusController::class,'showportfoliopage']);

    
  
    
    
    Route::get('about',[MyController::class,'showaboutPage']);
    
    Route::get('blogdetails',[MyController::class,'blogdetails']);
    
    Route::get('blog',[MyController::class,'showblogpage']);
    
    Route::get('contact',[MyController::class,'showcontactpage']);
    
    Route::get('element',[MyController::class,'showelementpage']);
    
    Route::get('index',[MyController::class,'showindex']);
    
    Route::get('industries',[MyController::class,'industriespage']);
    
    Route::get('index',[MyController::class,'showindexpage']);
    
    Route::get('menu',[MyController::class,'showmenupage']);
    
    Route::get('site',[MyController::class,'showsitepage']);

    Route::get('save-contact-data',[MyController::class,'saveContactData']);
    
    Route::get('show-add',[IhateController::class,'add']);
    
    Route::post('/save-store',[IhateController::class,'store']);



   Route::get('folder',[MyController::class,'slow']);

     Route::get('/team',function(){
        return view('home_page');
     });
     Route::get('/forms',[ContactusController::class,'pairs']);
        






  
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

//Route::get('homepage',[DashboardController::class,'homepage']);
