<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Query;

class AdminController extends Controller
{

    public function __construct(){
        $this->middleware('tocken');//验证登录信息
    }

    public function index(Request $request)
    {
    	
    	return view('admin.admin');
    	
    }

    // 管理用户添加/修改
    public function save(Request $request){
    	if($request->username){
    		$account = trim($request->username);
    		$password = $request->password;
    		if(empty($account) || empty($password)){
    			return array('info'=>"账户名/密码不能为空！",'status'=>0);
    		}
    		$data = [
    			'account' => $account,
    			'password' => $password,
    			'mobile' => trim($request->mobile),
    			'email' => trim($request->email),
    			'address' => trim($request->address),
    		];
    		$data = array_filter($data);
    		$request = DB::table('account')->insertGetId($data);
    		if($request){
    			return array('info'=>"添加成功！",'status'=>1);
    		}else{
    			return array('info'=>"添加失败！",'status'=>0);
    		}
    	}else{
    		return view('admin.save');
    	}
    	
    }

}
