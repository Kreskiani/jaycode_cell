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
					<i class="fa fa-comments-o"></i>

					<h3 class="box-title">Transaction List</h3>

					<div class="box-tools pull-right" data-toggle="tooltip" title="Status">
							<a href="/admin/transaksi" class="btn btn-default btn-sm">
								<i class="fa fa-square text-green"> New Transaction</i>
							</a>
						<div class="btn-group" data-toggle="btn-toggle">
						</div>
					</div>
				</div>
				<!-- /.col -->
		        <div class="col-md-12">
		          <div class="box box-info box-solid">
		            <div class="box-header with-border">
		              <h3 class="box-title">Info</h3>
		              <div class="box-tools pull-right">
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		              </div>
		              <!-- /.box-tools -->
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		              Tanda minus (-) pada kolom hutang menandakan Kembalian
		            </div>
		            <!-- /.box-body -->
		          </div>
		          <!-- /.box -->
		        </div>
		        <!-- /.col -->
			<div class="box-body ">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No.</th>
							<th>Tanggal Pembelian</th>
							<th>Nama Admin</th>
							<th>Nama Pembeli</th>
							<th>Nomor Hp</th>
							<th>Provider</th>
							<th>Nominal</th>
							<th>Harga Asli</th>
							<th>Harga Pulsa</th>
							<th>Dibayar</th>
							<th>Hutang</th>
							<th>Sisa Saldo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$i = 1;
							foreach ($data as $row){
							?>
								<tr>
									<td>{{ $i }}</td>
									<td>{{ $row->TRANS_Tanggal }}</td>
									<td>{{ $row->ADMI_Username }}</td>
									<td>{{ $row->CUST_Name }}</td>
									<td>{{ $row->CUST_PhoneNumber }}</td>
									<td>{{ $row->PROV_Name }}</td>
									<td>{{ $row->PROV_Nominal }}</td>
									<td>Rp. {{ $row->PROV_Harga }}</td>
									<td>Rp. {{ $row->TRANS_HargaJual }}</td>
									<td>Rp. {{ $row->TRANS_Dibayar }}</td>
									<td>Rp. {{ $row->TRANS_Hutang }}</td>
									<td>Rp.595.000</td>
									<td><a href="/admin/transaksi-edit/{{ $row->id }}" class="btn btn-primary">Edit</a></td>
								</tr>
							<?php 
							$i++;
							}
							?>
					</tbody>
					<tfoot>
					</tfoot>
				</table>
			</div>
			<!-- /.chat -->
				<div class="box-footer">
					<div class="input-group">
						<div class="input-group-btn">
							
						</div>
					</div>
				</div>
			</div>
		  <!-- /.box (chat box) -->
	</div>
	<!-- /.row -->
</section>