<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Serve extends Model
{
    use HasFactory;
  
    public static function insertcustomerData($arrayData){
        $data = DB::table('customer')
              ->insert($arrayData);
        if($data){
            return true;
        }else{
            return false;
        }
    }
    //public static function getCheckEmailVerify($emailId){
      // $data = DB::table('customer')
        //        ->where('email_id',$emailId)
          //      ->select('email_id')
            //    ->first();
        //return $data;

    //}
   // public  static function getdataById(){
     //   $data = DB::table('customer')
       //        ->select('email_id')
         //      ->get();
        //return $data;
    //}
}
