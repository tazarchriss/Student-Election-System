<?php
    session_start();
    include_once "config/connection.php";
    $reg=$_SESSION['regno'];
    $sql10 = "select * from users WHERE regno='$reg'";
    $query10 = mysqli_query($conn, $sql10);
    if ($query10){
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
<?php
   if ($_SESSION['role']=='1') {
     include 'anavbar.php';
   }
   if ($_SESSION['role']=='2') {
    include 'mnavbar.php';
  }

if ($_SESSION['role']=='3') {
 include 'cnavbar.php';
}
if ($_SESSION['role']=='4') {
  include 'vnavbar.php';
 }
  ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-info">Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
              <?php
                      $row10 = mysqli_fetch_array($query10);
                      $name=$row10['regno'];
                      $sql2 = "select * from users WHERE regno='$name'";
                      
                      $query2 = mysqli_query($conn, $sql2);
                      $row2 = mysqli_fetch_array($query2);
                      $pid=$row2['programme'];
                      $sql3 = "select * from programme WHERE pid='$pid' ";
                      $query3 = mysqli_query($conn, $sql3);
                      $row3 = mysqli_fetch_array($query3);
                      $sid=$row10['school'];
                      $sql4 = "select * from school WHERE sid='$sid' ";
                      $query4 = mysqli_query($conn, $sql4);
                      $row4 = mysqli_fetch_array($query4);
                      $lid=$row10['level'];
                      $sql5 = "select * from level WHERE lid='$lid' ";
                      $query5 = mysqli_query($conn, $sql5);
                      $row5 = mysqli_fetch_array($query5);
                ?>
                <!-- Profile Image -->
                <div class="card card-info card-outline">
                    
                      
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <img class="profile-user-img img-fluid img-circle"
                           src="dist/img/user4-128x128.jpg"
                           alt="User profile picture">
                    </div>
            
                    <h3 class="profile-username text-center"> <?php echo $row10['fname']. " " . $row10['mname']. " " . $row10['lname']; ?></h3>
            
                    <p class="text-muted text-center">upload profile picture</p>
            
                    <strong><i class="fas fa-book mr-1"></i> Registration Number</strong>
                      
                      <p class="text-info">
                        <?php echo $row10['regno']; ?>
                      </p>
                    <hr>      
                    <strong><i class="fas fa-school mr-1"></i> School</strong>
            
                    <p class="text-info"><?php echo $row4['school']; ?> </p>

                    <hr>
                    <strong><i class="far fa-poll mr-1"></i> level</strong>
                    <p class="text-info"><?php echo $row5['level']; ?> </p>
                    <hr>
                    <strong><i class="fas fa-book mr-1"></i> Programme</strong>
            
                     <p class="text-info"><?php echo $row3['programme']."-".$row10['year']; ?> </p>
           
                    <hr>
            
                  
                    <a href="changepassword.php?regno=<?php echo $_SESSION['regno'];?>" class="btn btn-info btn-block"><i class="fa fa-key"> </i>   <b>Change Password</b></a>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
            
          
              </div>
          
        </div>
        <!-- /.row -->
   <?php

      }

      ?>
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


