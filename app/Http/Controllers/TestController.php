<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{

    public function index($id)
    {
    	$data['id'] = $id;
    	// var_dump($data);die();
    	$user = DB::update('update account set password=321');
    	$data['user'] = $user;
        return view('test.index',$data);
    }

}
