<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi_mdl extends Model
{
    protected 	$table 		="transaksi";
    public 		$fileable	=['id','ADMI_Username','CUST_Id','PROV_Id','TRANS_HargaJual','TRANS_Dibayar','TRANS_Hutang','TRANS_Tanggal'];
    public 		$timestamp 	= true;
}
