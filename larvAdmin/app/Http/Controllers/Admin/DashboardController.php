<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Request as input;
use App\Models\blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use auth;
class DashboardController extends Controller
{

    public function index (){
        return view('AdminPanel.dashboard');
    }
    public function serve(){
        return view('auth.login');
    }
    public function registration(){
    return view('auth.register');
    }

public function registraterLogIn(Request $request){
    $data= ARRAY(
    'name'=> $request-> name,
    'email'=> $request-> email,
    'password'=>$request->password,
     );

    // print_r(DB::table('new_table')
    //     ->get());die;
    $result= DB::table('users')
        ->insert($data);

    if($result){
        return redirect()->action([DashboardController::class, 'showContactData']);
    }else{
        return back();
    }

}

public function doLogin(Request $request){
    $email = $request->email;
    $password =  $request->password;
    //dd($email);
    //dd($password);
    // $user = blog::where('email',$request->email)->first();
    $user = blog::getUserData($email);
    
    $pass = $user->password;
     if($password==$pass){
        return view('AdminPanel.dashboard');
     }else{
        return ('wrong email or password');
    }
     
  
   // $users_id= auth::user()->id;
    //return view ('home',compact('user_id'));
}
   
public function showContactData(Request $request){
    $getData = blog::getContactData();
  // $count=ContactUs::count();
   //return view('contact_data')
     //->with('getData',$getData)
     //->with('count' , $count);
   //    return view('contact_data');
   return $result;
   }


}


