<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Crypt;
use Hash;
use Auth;
use App\Models\Contact;
use App\Models\User;
use App\Models\Organization;

class MainController extends Controller
{
     public function contact(){
    	
    	$contact = Contact::get();
    	 return response()->json(['status'=>'true','msg'=>'Contact list','data'=>$contact],200);
    	
    }

    public function organization(){
    	$organization = Organization::get();
    	 return response()->json(['status'=>'true','msg'=>'Organization list','data'=>$organization],200);
    	
    }

    public function  get_filter_organization(Request $request){
      $organization =  $request->name;

      $contact = Contact::where('organization_id' , $organization)->get();

       return response()->json(['status'=>'true','msg'=>'Contact list','data'=>$contact],200);
    	
    }

     public function  get_filter_email(Request $request){
      $email =  $request->email;

      $contact = Contact::where('email' , $email)->get();

       return response()->json(['status'=>'true','msg'=>'Contact list','data'=>$contact],200);
    	
    }


}
