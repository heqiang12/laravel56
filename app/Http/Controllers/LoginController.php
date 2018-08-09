<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function login(Request $request)
    {
    	
    	if($request->username){
    		$account = $request->username;
    		$password = $request->password;
    		$result = DB::table('account')->where(['account'=>$account,'password'=>$password])->get();
    		// 不为空
    		// !$result->isEmpty();
    		// $result->count();
    		// $result->first();
    		if($result->first()){
    			return "success";
    		}else{
    			return "error";
    		}
    	}else{
    		return view('login.login');	
    	}
    	
    }

}
