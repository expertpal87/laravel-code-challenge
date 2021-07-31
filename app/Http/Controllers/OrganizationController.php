<?php

namespace App\Http\Controllers;


use DB;
use Illuminate\Http\Request;
use Validator;
use App\Models\Organization;
use Illuminate\Support\Facades\Storage;
use Session;

class OrganizationController extends Controller
    {
    public function index(){
        $organization = DB::table('organizations')->get();
        return view('organization.index',compact('organization'));
    }

    public function create(){
        return view('organization.add');
    }

    function store(Request $request){
        $Validator = $request->validate([    		
            'name' =>'required|unique:organizations',
            'category' =>'required',
            'trade_license' =>'required',
            'licensed_date' =>'required|max:11',
        ]);
        $organization = new Organization();
        $organization->name = $request->name;
        $organization->category = $request->category;
        $organization->trade_license = $request->trade_license;
        $organization->licensed_date = $request->licensed_date;
        if($request->logo){
            $path = Storage::disk('public')->put('/organization', $request->logo);
            $organization->logo = $path;
        }else{
             $organization->logo='';
        }
        $status = $organization->save();
        if($status){
            return redirect('admin/create-organization')->with('success','New Organization Added');
        }
    }

    function edit(Request $request,$organization){
        $organization = Organization::where('id',decrypt($organization))->first();
        return view('organization.edit',compact('organization'));
    }

    function update(Request $request){
        $Validator = $request->validate([
            'name' =>'required',
            'category' =>'required',
            'trade_license' =>'required',
        ]);
        $organizationId = decrypt($request->organizationId);
        $organization = Organization::where('id',$organizationId)->first();
        $organization->name = $request->name;
        $organization->category = $request->category;
        $organization->trade_license = $request->trade_license;
        if($request->logo){
            $path = Storage::disk('public')->put('/organization', $request->logo);
             $organization->logo = $path;
        }

        $status = $organization->save();
        if($status){
            return redirect('admin/edit-organization/'.$request->organizationId)->with('success','Organization updated successfully ');
        }
    }

    public function deleteOrganization(Request $request,$OrganizationId)
    {
        $status = Organization::where('id',decrypt($OrganizationId))->delete();
        return redirect('admin/organization')->with('success','Organization deleted successfully ');
    }
}
