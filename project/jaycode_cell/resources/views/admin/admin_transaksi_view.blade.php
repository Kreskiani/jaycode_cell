<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <!-- Chat box -->
      <div class="box box-success">
        <div class="box-header">
          <i class="fa fa-usd"></i>

          <h3 class="box-title"> Transaksi </h3>

          <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
            <div class="btn-group" data-toggle="btn-toggle">
              <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
              </button>
              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
            </div>
          </div>
        </div>
      <div class="box-body chat" id="chat-box">
        <!-- chat item -->
          <div class="item">
          	<!-- form -->
          	<form class="form-horizontal" action="/admin/transaksi-save" method="POST">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Admin Username  </label>
                  <div class="col-sm-4">
					<input class="form-control" type="text" name="TRANS_ADMI_Username">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Customer ID  </label>
                  <div class="col-sm-4">
					<input class="form-control" type="Number" name="TRANS_CUST_Id">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Provider Id  </label>
                  <div class="col-sm-4">
					<input type="Number" name="TRANS_PROV_Id" class="form-control">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Harga Jual  </label>
                  <div class="col-sm-4">
					<input class="form-control" type="Number" name="TRANS_HargaJual" id="TRANS_HargaJual">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Bayar</label>
                  <div class="col-sm-4">
					<input class="form-control" type="Number" name="TRANS_Dibayar" id="TRANS_Dibayar">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Hutang  </label>
                  <div class="col-sm-4">
					<input class="form-control" readonly="true" type="Number" name="TRANS_Hutang" id="TRANS_Hutang">
                  </div>
                  <label class="btn btn-primary" id="ambil_hutang" onclick="ambil_hutang()">
                  	Ambil Hutang
                  </label>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Tanggal  </label>
                  <div class="col-sm-4">
					<input type="date" name="TRANS_Tanggal" class="form-control">
                  </div>
                </div>
              </div>
              <div class="box-footer">
				<input class="btn btn-primary pull-right" type="submit" name="TRANS_Submit" value="save">
              </div>
            </form>
            <!-- ./ form -->
          </div>
        <!-- /.item -->
      </div>
      <!-- /.chat -->
      </div>
      <!-- /.box (chat box) -->
  </div>
  <!-- /.row -->
</section>

<script type="text/javascript">
	function ambil_hutang() {
		var harga = document.getElementById('TRANS_HargaJual').value;
		var bayar = document.getElementById('TRANS_Dibayar').value;
		var rumus = harga-bayar;
		document.getElementById('TRANS_Hutang').value = rumus ;
	}
</script>