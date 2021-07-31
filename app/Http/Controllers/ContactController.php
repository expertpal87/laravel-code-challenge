<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Validator;
use App\Models\Contact;
use App\Models\Organization;
use Illuminate\Support\Facades\Storage;
use Session;
use  Mail;

class ContactController extends Controller
{
    public function index(){
        $contact = DB::table('contacts')->get();
        return view('contact.index',compact('contact'));
    }

    public function create(){
        $organization = Organization::get();
        return view('contact.add',compact('organization'));
    }

    function store(Request $request){  

         // echo '<pre>'; print_r($request->input("mobile"));
         $mobile = implode(',' ,$request->input("mobile")); 

        $Validator = $request->validate([    		
            'first_name' =>'required',
            'last_name' =>'required',
            'email' =>'required|email|unique:contacts',
            'dob' =>'required',
            'organization' =>'required',	
        ]); 

        //  $Validator = $request->validate([          
        //     'name' =>'required|unique:organizations',
        //     'category' =>'required',
        //     'trade_license' =>'required',
        //     'licensed_date' =>'required|max:11',
        // ]);

        $contact = new Contact();
        $contact->fname = $request->first_name;
        $contact->lname = $request->last_name;
        $contact->email = $request->email;
        $contact->mobile = $mobile;
        $contact->dob = $request->dob;
        $contact->organization_id = $request->organization;
        $status = $contact->save();
         echo $status; die;

        $details = [
            'title' => 'Mail from starzly.com',
            'body' => 'Please varify click below link',
            'email' => $request->email
        ];
        // \Mail::to($request->email)->send(new \App\Mail\EmailVarifiedMail($details));
        if($status){
         return redirect('admin/create-contact')->with('success','New Contact Added');
        }
    }

    function edit(Request $request,$contactId){
        $contact = Contact::where('id',decrypt($contactId))->first();
        $organization = DB::table('organizations')->get();
        return view('contact.edit',compact(['contact','organization']));
    }

    function update(Request $request){
        $Validator = $request->validate([
            'first_name' =>'required',
            'last_name' =>'required',
            'email' =>'required',
            'mobile' =>'required|max:11',
            'organization' =>'required', 
        ]);
        $contactId = decrypt($request->contactId);
        $contact = Contact::where('id',$contactId)->first();
        $contact->fname = $request->first_name;
        $contact->lname = $request->last_name;
        $contact->email = $request->email;
        $contact->mobile = $request->mobile;
        $contact->organization_id = $request->organization;
        $status = $contact->save();
        if($status){
          return redirect('admin/edit-contact/'.$request->contactId)->with('success','Contact updated successfully ');
          }
        }

        public function deleteContact(Request $request,$contactId)
        {
            $status = Contact::where('id',decrypt($contactId))->delete();
            ;
            return redirect('admin/contact')->with('success','Contact deleted successfully ');
        }
}
