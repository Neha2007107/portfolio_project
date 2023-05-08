<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use DB;
use Redirect;
use Illuminate\View\View;
use Illuminate\Http\Request;
// use Illuminate\Routing\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request as input;
use Illuminate\Support\Facades\Validator;
use App\Models\ContactUs;
use Illuminate\Http\Response;

 
class IhateController extends Controller{

    public function add(){
    return view('form');

    }

//public function new(){
  //  return ('edit_page');
//}

    public function store(Request $request){
        $data= ARRAY(
        'first_name'=> $request->first_name,
        'last_name'=> $request-> last_name,
        'email'=>$request->email,
        'adderess'=>$request->city,
        'phone_no'=>$request->phone_no,
        'gender'=>$request->gender,
        'course'=>$request->course,
        'status'=>$request->status,
        );
       
        // print_r(DB::table('new_table')
        //     ->get());die;
        $result= DB::table('contact_us')
            ->insert($data);

        if($result){
            return redirect()->action([IhateController::class, 'showContactData']);
        }else{
            return back();
        }

        return redirect()->back();
    }

//    function showContactData(Request $request){

//         $getData = ContactUs::getContactData();
//         // dd($getData);die;
//         return view('contact_data');
       
//     }

  //  return redirect()->back();

public function showStatusData(Request $request,$status){
    $showData=ContactUs::getContactData();
    $statue= ContactUs::shows($status);
    if($status){
      return  1;
    }else{
      return 0;
   }
   
}
  public function showContactData(Request $request){
     $getData = ContactUs::getContactData();
    $count=ContactUs::count();
    return view('contact_data')
      ->with('getData',$getData)
      ->with('count' , $count);
    //    return view('contact_data');
    }
      public function showContactDetails(Request $request, $id){
            $contactObj = new ContactUs();
            $getData = $contactObj->getContactDataById($id);
            //$status = ContactUs::changeStatus($id);
             return view('view_page')
                   ->with('getData',$getData);
                }
      public function showeditDetail(Request $request, $id){
        
            $contactObj = new ContactUs();
            $getData = $contactObj->getContactDataById($id);
        
            // dd($getData);
                    return view('edit_page')
                   ->with('getData',$getData);
        }  
        public function deleteRow(Request $request , $id){
            $delete= contactUs::deleteData($id);
             if($delete){
             return 1;
           }else{
            return 0;
           }
         }







        public function updateEditPage(Request $request){
            $data =Array(
                'first_name'=> $request->first_name,
                'last_name'=> $request-> last_name,
                'email'=>$request->email_id,
                'adderess'=>$request->address,
                'phone_no'=>$request->phone_no,
                'gender'=>$request->gender,
                'course'=>$request->course,
                'status'=>$request->status,
            );
            // dd($data);
            $contactId = $request->contact_id;

            $save = ContactUs::updateContactData($data , $contactId);
            if($save){
                return redirect()->action([IhateController::class ,'showContactData']);
            }else{
                return 0;
            }
            
        }

       public function server(){
         return "hello";
      }
    }
