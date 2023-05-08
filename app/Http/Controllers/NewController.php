<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Response;
use App\Models\Serve;
//use Illuminate\support\facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Log;
use DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Routing\Controller as BaseController;

class NewController extends Controller
{
    public function signUp(Request $request)
    {
        //print_r($request->all());die;
        $validator = Validator::make($request->all(), [
            'customer_name' => 'required',
            'email_id' => 'required|email|unique:customer',
            'phone_number' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) 
            {
                $errorArray = json_decode($validator->errors(), true);
                $error = current($errorArray);
                $message['message'] = $error[0];
                return response()->json($message, 400);
            }
        
        $profile_pic='';
        /*if($request->hasFile('profile_pic')){
            $profile_pic=$request->getSchemeAndHttpHost().'/assets/image/' .time().'.'.$request->profile_pic->extension();
            $request->profile_pic->move(public_path('/assets/image/'),$profile_pic);
        }*/
        //  dd($request->all());
       
        //$emailId = $request->email_id;
        $arrayData['customer_name']= $request->customer_name;
        $arrayData['email_id']= $request->email_id;
        $arrayData['phone_number']= $request->phone_number;
        $arrayData['password']= /*$request->password;*/Hash::make($request->password);
        $arrayData['profile_pic']= $profile_pic;
        $arrayData['auth_key']=bin2hex(random_bytes(30));
        $arrayData['created_datetime'] = gmdate('Y-m-d H:i:s');
        //$emailId = $request->email_id;
        //$checkEmail = Serve::getCheckEmailVerify($emailId);
        $customerData= DB::table('customer')
        ->insert($arrayData);
       /// $customerData = Serve::insertcustomerData($arrayData);


         if($customerData){
             return response()->json(['message' => 'Successfully registered. Please check your email for verification.'], 200);
         }else{
             return response()->json(['error' => 'Invalid credentials'], 401);
         }
         Auth::login($arrayData);

         return response()->json(['auth_key' => $arrayData], 201);
       }

       public function getCustomer_datails(Request $request){
        $auth =$request->auth_key;
        // echo($auth); die;
        // $customer_id=find('customer_id');
        $customer_id= DB::table('customer')
                    ->where('auth_key', $auth)

                    ->first();
        return response()->json($customer_id);
       }

       public function deleteCustomerDetails(Request $request){
        $auth =$request->auth_key;
        $customer_id= DB::table('customer')
           ->where('auth_key', $auth)
           ->delete();
           //return Responce()->json($customer_id);
 
              
         }

     public function signIn(Request $request){
       // return ;
     $customer=DB::table('customer')/*::*/->where(['email_id'=>$request->email_id])->first();
       // return $customer;
       
          
       if(!$customer  || !Hash::check($request->email_id,$customer->email_id)){
          if(!$customer){    
            return response()->json(['error' => 'Invalid customer'], 401);
       }
        else{
    return response()->json(['success'=>'you are loged in'], 200);
    
        //return response()->json(['success'=>$customer], 200);
        }
    }
   }

    public function request_Otp(Request $request){
    $arrayData['email_id']= $request->email_id;
    $otp = rand(1000,9999);
    $arrayData['OTP']=$otp;
    Log::info("otp = ".$otp);
   
     DB::table('customer_email_verification')
    ->insert($arrayData);
    $user = DB::table('customer') /*Serve::*/->where('email_id','=',$request->email_id)->update
    (['is_verified' => '1']);

    if($user){

        $mail_details = [
            'subject' => 'Testing Application OTP',
            'body' => 'Your OTP is : '. $otp
        ]; $user = DB::table('customer') /*Serve::*/->where('email_id','=',$request->email_id)->update
        (['is_verified' => '1']);
}
}

   public function verify_Otp(){
    $user  = Serve::where([['email','=',$request->email],['otp','=',$request->otp]])->first();
    if($user){
        DB::table('customer')
        ->where('email_id',$request->email_id)
        ->update(['verified'=>'1']);
        //Serve::where('email','=',$request->email)->update(['otp' => null]);
      
        return response()->json(["status" => 200, "message" => "Success",$customer]);
    }
    else{
        return response()->json(["status" => 401, 'message' => 'Invalid']);
    }

   }
    public function save_Adderess(Request $request){
        //return 'hello';
     $saver['customer_id']=$request->customer_id;
     $saver['receiver_name']=$request->receiver_name;
     $saver['receiver_phone_number']=$request->receiver_phone_number;
     $saver['complete_address']=$request->complete_address;
     $saver['latitude']=$request->latitude;
     $saver['longitude']=$request->longitude;
     $saver['city']=$request->city;
     $saver['state']=$request->state;
     $saver['country']=$request->country;
     $saver['pin_code']=$request->pin_code;
     $saver['landmark']=$request->landmark;

     $saverdata= DB::table('customer_address')
        ->insert($saver);
    }
    public function saved_Adderess(){ 
    $saverdata= DB::table('customer_address')
      ->get();

  $message['saved_address'] = $saverdata;
            // $message['last_message'] = $last_message;
            // $message['message_count'] = $count;
            return response()->json($message);
    //   dd($saverdata);
      
} 
  public function delete_details(Request $request){
    $saverdata= DB::table('customer_address')
        ->delete();
        //->where('address_id','=', $request-> address_id);

  }

  public function update_address(Request $request){
    
    $saverdata= DB::table('customer_address')
        ->where('address_id','=', $request->address_id)
        ->Update(['receiver_name'=> $request->receiver_name]);
        return responce()->json(['message'=>'adderess updated sucessfully'],200);

  }

  public function updateDevice_token(Request $request){
   // return 'hello';
    $device['customer_id']=$request->customer_id;
    $device['device_type']=$request->device_type;
    $device['device_token']=$request->device_token;
    $device['device_model']=$request->device_model;
    $device['device_os']=$request->device_os;
    $device['installed_app_version']=$request->installed_apps_version;
    $device['date_created']=Carbon::now();
    //$device['date_updated']=$request->date_updated;
    
     $deviceToken=DB::table('customer_devices')
        ->insert($device);
       // return Responce()->json(['message'=>'data inserted sucessfully'],200);
       
       if($deviceToken){
        return response()->json(['message' => 'Successfully registered. Please check your email for verification.'], 200);
    }else{
        return response()->json(['error' => 'Invalid credentials'], 401);
    }
  }

   public function deleteDeviecToken(Request $request){
   
    $deviceToken=DB::table('customer_devices')
       ->where('customer_id','=', $request->customer_id)
       ->delete();
     return Responce()->json(['message'=>'device deleted successfully'],200);

   }
}