<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hate extends Model
{
    
    public static function hateData(){

        $data=DB::table('new_table')
             ->insert($data);
        if($data){
            return true;
        }else{
            return false;
        }
    }
}
