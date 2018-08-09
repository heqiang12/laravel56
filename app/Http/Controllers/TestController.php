<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TestController extends Controller
{

    public function index($id)
    {
    	$data['id'] = $id;
        return view('test.index',$data);
    }

}
