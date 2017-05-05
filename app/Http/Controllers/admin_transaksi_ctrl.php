<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksi_mdl;
use DB;

class admin_transaksi_ctrl extends Controller
{
    public function form_transaksi()
    {
        $query = DB::table('transaksi')
                ->join('customer', 'transaksi.CUST_Id', '=', 'customer.CUST_Id')
                ->join('provider', 'transaksi.PROV_Id', '=', 'provider.PROV_Id')
                ->select('*')
                ->get();
        $data = array(
            'view'        => 'admin.admin_transaksi_view' ,
            'query'       => $query, 
            'title'       => 'Transaksi',
            'transaksi'   => 'active'
            );
    	return view('layout.render',$data);
    }

    public function transaksi_store(Request $request)
    {
        if (empty($_POST['TRANS_Submit'])) {
            return redirect()->route('transaksi-save');
        }
        $TRANS = new transaksi_mdl();
        $TRANS->ADMI_Username       = $request['TRANS_ADMI_Username'];
        $TRANS->CUST_Id             = $request['TRANS_CUST_Id'];
        $TRANS->PROV_Id             = $request['TRANS_PROV_Id'];
        $TRANS->TRANS_HargaJual     = $request['TRANS_HargaJual'];
        $TRANS->TRANS_Dibayar       = $request['TRANS_Dibayar'];
        $TRANS->TRANS_Hutang        = $request['TRANS_Hutang'];
        $TRANS->TRANS_Tanggal       = $request['TRANS_Tanggal'];
        $TRANS->save();
        return redirect()->route('admin-home');
    }

    public function transaksi_edit($id)
    {
        $query = transaksi_mdl::where('id',$id)
                ->first();
        $data = array(
            'view'        => 'admin.admin_edit_transaksi_view' ,
            'query'       => $query, 
            'title'       => 'Transaksi-edit',
            'id'          => $id,
            );
        return view('layout.render',$data);
    }
    public function transaksi_update(Request $request, $id)
    {
        $TRANS = transaksi_mdl::find($id);
        $TRANS->TRANS_HargaJual     = $request['TRANS_HargaJual'];
        $TRANS->TRANS_Dibayar       = $request['TRANS_Dibayar'];
        $TRANS->TRANS_Hutang        = $request['TRANS_Hutang'];
        $TRANS->update();
        return redirect()->route('admin-home'); 
    }
}
