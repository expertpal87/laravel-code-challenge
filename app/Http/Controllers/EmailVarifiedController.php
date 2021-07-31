<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class EmailVarifiedController extends Controller
{
    public function EmailVarifiedController(Request $request,$email){
    	$email = decrypt($email);

    	$contact = Contact::where('email',$email)->first();

    	$contact->email_varified = 1;
    	$status = $contact->save();
    	if($status){
    		return redirect('/')->with('success','Email Varified Success');
    	}
    }
}
