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
          <i class="fa fa-user-md"></i>

          <h3 class="box-title"> <!-- Judul --> </h3>

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
            <form class="form-horizontal" action="/admin/customer/customer-save" method="POST">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label"> <!-- Nama Label --> </label>
                  <div class="col-sm-4">
                    <!-- Inputan -->
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <!-- form footer  -->
              </div>
            </form>
            <!-- ./ form -->
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