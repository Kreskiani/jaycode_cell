<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class admin_provider_ctrl extends Controller
{
    public function url()
	{
		$url = '/admin/provider';
		return $url;
	}
    public function index()
    {	    
    	$query = DB::table('provider')
            ->select('*')
			->orderBy('created_at', 'desc')
			->get();
    	$data = array(
    		'view' 	      => 'admin/admin_provider_view' ,
    		'url'	      => $this->url(),
    		'query'	      => $query, 
            'title'       => 'Provider',
            'provider'    => 'active'
    		);
    	return view('layout/render', $data);
    }

    public function provider_save()
    {
    	if (empty($_POST['provSubmit'])) {
    		return redirect()->route('admin-provider');
    	}
    	$provName 	= $_POST['provName'];
    	$provNominal	= $_POST['provNominal'];
    	$provHarga	= $_POST['provHarga'];

    	DB::table('provider')->insert(
		    [
		    	'PROV_Name' 	=> $provName, 
		    	'PROV_Nominal' 	=> $provNominal,
		    	'PROV_Harga' 	=> $provHarga,
		    	'created_at' 	=> date('Y-m-d H:i:s')
		    ]
		);
    	return redirect()->route('admin-provider');

    }
}
