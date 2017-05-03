<?php 
  if (empty($dashboard)) {
      $dashboard="";
  }
  if (empty($customer)) {
      $customer="";
  }
  if (empty($provider)) {
      $provider="";
  }
  if (empty($transaksi)) {
      $transaksi="";
  }
  if (empty($admin)) {
      $admin="";
    }
?>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/assets/dist/img/IMG_3246.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Kresna Aji Hidayat</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menu</li>
        <li class="treeview {{ $dashboard }}">
          <a href="/admin">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
          <!-- <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
          </ul> -->
        </li>
        <li class="treeview {{ $transaksi }}">
          <a href="/admin/transaksi">
            <i class="fa fa-usd"></i> <span>Transaksi</span>
          </a>
          <!-- <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
          </ul> -->
        </li>
        <li class="treeview {{ $customer }}">
          <a href="/admin/customer/">
            <i class="fa fa-users"></i> <span>Customer</span>
          </a>
          <!-- <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
          </ul> -->
        </li>
        <li class="treeview {{ $provider }}">
          <a href="/admin/provider">
            <i class="fa fa-credit-card"></i> <span>Provider</span>
          </a>
          <!-- <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
          </ul> -->
        </li>
        <li class="treeview {{ $admin }}">
          <a href="#">
            <i class="fa fa-user-secret"></i> <span>Admin</span>
          </a>
          <!-- <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
          </ul> -->
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>