<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Contact;
use App\Models\Organization;
class AdminController extends Controller
{
   public function dashboard(){
   		$AuthId = Session::get('id');
     	$totalContact = Contact::count();
        $totalOrganization = Organization::count();
   		return view('admin/dashboard',compact(['totalContact','totalOrganization']));
   	}



   public function logout()
   	{
   		 Session::forget('AdminloggedIn');
   		 return redirect('/')->with(['result'=>'alert-success','message'=>'Logout Successfully']);

   	}
}
