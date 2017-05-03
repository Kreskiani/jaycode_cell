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
          <i class="fa fa-credit-card"></i>

          <h3 class="box-title"> Provider </h3>

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
            <form action="{{ $url }}/provider-save" method="POST">
				{{ csrf_field() }}
				<div class="box-body">
					<div class="form-group">
						<label class="col-sm-2 control-label"> Provider Name</label>
						<div class="col-sm-4">
							<input class="form-control" type="text" name="provName">
						</div>
					</div>
				</div>
				<div class="box-body">
					<div class="form-group">
						<label class="col-sm-2 control-label"> Provider Nominal </label>
						<div class="col-sm-4">
							<select class="form-control" name="provNominal">
								<option>=Nominal=</option>
								@for($i=5; $i <=200 ;$i = $i+5)
									<option value="{{ $i }}">{{ $i }}k</option>
								@endfor
							</select>
						</div>
					</div>
				</div>
				<div class="box-body">
					<div class="form-group">
						<label class="col-sm-2 control-label">	Provider Harga </label>
						<div class="col-sm-4">
							<input class="form-control" type="Number" name="provHarga">
						</div>
					</div>
				</div>
				<div class="box-footer">
					<input type="submit" name="provSubmit" value="save">
				</div>
			</form>
            <!-- ./ form -->
			<table class="table table-bordered table-striped" id="example1">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Pelanggan</th>
						<th>Nominal</th>
						<th>Harga</th>
						<th>Tanggal Daftar</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$i = 1;
						foreach ($query as $row){
						?>
							<tr>
								<td>{{ $i }}</td>
								<td>{{ $row->PROV_Name }}</td>
								<td>{{ $row->PROV_Nominal }}</td>
								<td style="text-align: right;">Rp.{{ $row->PROV_Harga }}</td>
								<td>{{ $row->created_at }}</td>
							</tr>
						<?php 
						$i++;
						}
					?>
				</tbody>
			</table>
          </div>
        <!-- /.item -->
      </div>
      <!-- /.chat -->
        <div class="box-footer">
          <div class="input-group">
            <!-- Isi footernya -->
            <div class="input-group-btn">
              <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
            </div>
          </div>
        </div>
        <!-- /.box-footer -->
      </div>
      <!-- /.box (chat box) -->
  </div>
  <!-- /.row -->
</section>

