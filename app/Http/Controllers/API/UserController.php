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



class UserController extends Controller
{
	public function login(Request $request){
		$v = Validator::make($request->all(),[
			'email' => 'required',
			'password' => 'required',
		]);
		if($v->fails()){
			return response()->json(['status'=>false,'errors'=>$v->errors()->all()],400);
		}

		$user = User::where(['email'=>$request->email,'password'=>$request->password])->first();
		if(empty($user)){
			return response()->json(['status'=>'false','msg'=>'Invalid account'],400);
		}
		if($request->password != $user->password){
			return response()->json(['status'=>'false','msg'=>'Password not match'],401);
		}
		$token = $user->createToken('Personal Access Token')->accessToken;
		$user->token = $token;
		return response()->json(['status'=>'true','msg'=>'login successfully','data'=>$user],200);
	}

	public function invalidToken(){
		return response()->json(['status'=>'false','msg'=>'Invalid token'],401);
	}

}
