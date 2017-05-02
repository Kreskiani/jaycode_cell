<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use App\admin_mdl;

class admi_home_ctrl extends Controller
{
    public function index()
    {
    	$datas = DB::table('transaksi')
            ->join('customer', 'transaksi.CUST_Id', '=', 'customer.CUST_Id')
            ->join('provider', 'transaksi.PROV_Id', '=', 'provider.PROV_Id')
            ->select('*')
            ->get();
        $data = array(
            'data' => $datas ,
            'view' => 'admin/admi_home_view' ,
            'title' => 'Dashboard' ,
            'dashboard' => 'active', 
            );
    	return view('layout/render', $data);
    }

    public function join()
    {
    	$datas = DB::table('transaksi')
            ->join('customer', 'transaksi.CUST_Id', '=', 'customer.CUST_Id')
            ->join('provider', 'transaksi.PROV_Id', '=', 'provider.PROV_Id')
            ->select('*')
            ->get();
    }
}
