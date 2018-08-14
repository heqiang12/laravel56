<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function __construct(){
        $this->middleware('tocken');//验证登录信息
    }

    public function index(Request $request)
    {
    	
    	return view('index.index');
    	
    }

}
