<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ContactUs extends Model
{
    public static function saveContactUsData($inputArray){
        $save = DB::table('contact_us')
               ->insert($inputArray);
               
             }

    public static function getContactData(){
    $data  = DB::table('contact_us')
            ->orderBy('contact_id','desc')
            ->get();
            return $data;

    }            
     public static function getContactDataById ($id) {
        $user = DB::table('contact_us')->where('contact_id', $id)->first();
        return $user;
    }
    public static function updateContactData($data , $id){
        $update = DB::table('contact_us')
                 ->where('contact_id' , $id)
                 ->update($data);

        if($update){
            return true;
        }else{
            return false;
        }
    }
    public static function deleteData($id){
        $delete = DB::table('contact_us')
                ->where('contact_id' , $id)
                ->delete();
        if($delete){
            return true;
        }else{
            return false;
        }
    }
        public static function shows($status){
        $class = DB::table('contact_us')
                ->where('contact_id' , $status)
                ->update([]);
        if($status){
            return true;
        }else{
            return false;
        }
    }
     //  public static function changeStatus(Request $request){
     //  $status =DB:: table('contact_us')
     //  ->where('contact_id',$status)
     //  ->update();

           // }
    
        }
    
    
              
              
            