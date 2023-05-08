<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ContactForm extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'name','email','subject','message',
    ];

    public static function insertContact($data){
        $data = DB::table('contact_form')
              ->insert($data);
             // ->with('status','E-mail Subscribed');
}
}