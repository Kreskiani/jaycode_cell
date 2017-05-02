<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer_mdl extends Model
{
    public function customer_save($custName, $custNumber)
    {
    	DB::table('customer')->insert(
		    [
		    	'CUST_Name' 		=> $custName, 
		    	'CUST_PhoneNumber' 	=> $custNumber,
		    	'created_at' 		=> date('Y-m-d H:i:s')
		    ]
		);
    }
}
