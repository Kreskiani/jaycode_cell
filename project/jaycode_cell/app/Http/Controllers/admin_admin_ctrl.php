<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin_admin_ctrl extends Controller
{
	
    public function index()
    {
    	$data = array(
    		'view' 	=> 'admin_customer_view' , 
    		);
    	return view('include/template', $data);
    }
}
