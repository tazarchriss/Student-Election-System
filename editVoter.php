<?php
    session_start();
    if ($_SESSION['role']!='1'){
      header('Location:index.php');
   }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <?php  include 'anavbar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-info">Edit Voter</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Manage Voters</a></li>
              <li class="breadcrumb-item active">Edit Voter</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" style="margin:auto;">
        <div class="container-fluid">
          <div class="row" style="margin:auto;">
            <!-- left column -->
            <div class="col-md-10" style="margin:auto">
              <!-- jquery validation -->
              <div class="card card-info">
                <!-- /.card-header -->
                <div class="card-header">
                  <form action="config/editvoter.php" method="post">
                    <div class="form-inline">
                        <div class="input-group" >
                          <input class="form-control " type="search" name="reg" placeholder="Search" aria-label="Search">
                          <div class="input-group-append">
                            <button class="btn btn-sidebar" name="search">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                    </form>
                      </div>
                  </div>
                <!-- form start -->
                <form id="quickForm" method="post" action="admin.html">
                  <div class="card-body ">
                  
                    <div class="form-group">
                      <label for="exampleInputEmail1">Fisrt Name</label>
                      <input type="text" name="regno" class="form-control" id="exampleInputEmail1" placeholder="Eg.13301099/T.19">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Middle Name</label>
                        <input type="text" name="regno" class="form-control" id="exampleInputEmail1" placeholder="Eg.13301099/T.19">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" name="regno" class="form-control" id="exampleInputEmail1" placeholder="Eg.13301099/T.19">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sex</label>
                        <select name="sex" id="" style="width:100%;height:40px;">
                            <option value="">Male</option>
                            <option value="">Female</option>
                        </select>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Registration Number</label>
                        <input type="text" name="regno" class="form-control" id="exampleInputEmail1" placeholder="Eg.13301099/T.19">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" name="regno" class="form-control" id="exampleInputEmail1" placeholder="Eg.13301099/T.19">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone Number</label>
                        <input type="text" name="regno" class="form-control" id="exampleInputEmail1" placeholder="Eg.13301099/T.19">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">School</label>
                        <select name="school" id="" style="width:100%;height:40px;">
                            <option value="">Faculty Of Science And Technology</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Level</label>
                        <select name="school" id="" style="width:100%;height:40px;">
                            <option value="">Certificate</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Programme</label>
                        <select name="school" id="" style="width:100%;height:40px;">
                            <option value="">Information Technology And Systems</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Year</label>
                        <select name="school" id="" style="width:100%;height:40px;">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                    </div>

               
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info btn-block">EDIT VOTER</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
              </div>
            <!--/.col (left) -->
        
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="https://adminlte.io">TazarChriss</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
