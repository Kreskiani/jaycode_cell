<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\customer_mdl;

class admin_customer_ctrl extends Controller
{
	public function url()
	{
		$url = '/admin/customer';
		return $url;
	}
    public function index()
    {	
    	$query = DB::table('customer')
            ->select('*')
			->orderBy('created_at', 'desc')
			->get();
    	$data = array(
    		'view' 	      => 'admin/admin_customer_view' ,
    		'url'         => $this->url(),
            'title'       => 'Customer',
    		'query'       => $query, 
            'customer'    => 'active'
    		);
    	return view('layout/render', $data);
    }

    public function customer_save()
    {
    	if (empty($_POST['custSubmit'])) {
    		return redirect()->route('admin-customer');
    	}
    	$custName 	= $_POST['custName'];
    	$custNumber	= $_POST['custNumber'];

    	DB::table('customer')->insert(
		    [
		    	'CUST_Name' 	=> $custName, 
		    	'CUST_PhoneNumber' 	=> $custNumber,
		    	'created_at' 	=> date('Y-m-d H:i:s')
		    ]
		);
    	return redirect()->route('admin-customer');

    }
}
