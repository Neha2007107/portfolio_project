<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class blog extends Model
{
    use HasFactory;
    public static function saveContactUsData($inputArray){
        $save = DB::table('users')
               ->insert($data);
               
             }
             public static function getContactData(){
              $data  = DB::table('users')
             ->get();
             return $data;
            }

    public static function getUserData($email){
      $data = DB::table('users')
             ->where('email', $email)
             ->select('email','password')
             ->first();
      return $data;
    }
}
