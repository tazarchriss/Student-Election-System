<?php 
    session_start();
    include('config/connection.php');
    $school=$_SESSION['school'];
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
            <h1 class="m-0 text-info">Election</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Election</a></li>
              <li class="breadcrumb-item active">Statistics</li>
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
      
        <!-- /.row -->
        <div class="card-body">
            <div class="row">
         
              <div class="col-md-10">
                   <?php
                        $qry1="SELECT * FROM `request` WHERE status='approved' AND position='1' ";
                        $sql1=mysqli_query($conn,$qry1);
                        $r1=mysqli_num_rows($sql1);
                    if ($r1==0){
                    
                      echo "<br>";

                    ?>
                    <h2 class="text-info text-center">No Candidate has been approved yet ! </h2>

                    <?php

                    }

                    else{
                    ?>
                      <p class="text-center">
                  <strong>PRESIDENT AND VICE PRESIDENT</strong>
                </p>
                <?php
                // $r1=mysqli_num_rows($sql1);
                    for ($i=1; $i<=$r1; $i++){
                      $row = mysqli_fetch_array($sql1);
                       $regno=$row['regno'];
                       $sql2 = "select * from users WHERE regno='$regno'";
                      $query2 = mysqli_query($conn, $sql2);
                      $row2 = mysqli_fetch_array($query2);
                     
                      $sql3 = "select * from vote WHERE president='$regno'";
                      $query3 = mysqli_query($conn, $sql3);
                      $row3 = mysqli_fetch_array($query3);
                      $v=mysqli_num_rows($query3);
                     
                      // $sid=$row2['school'];
                      $sql4 = "select * from vote ";
                      $query4 = mysqli_query($conn, $sql4);
                      $t=mysqli_num_rows($query4);
                      // $row4 = mysqli_fetch_array($query4);
                      // $prog=$row['programme'];
                      // $sql6 = "select * from programme WHERE pid='$prog'";
                      // $query6 = mysqli_query($conn, $sql6);
                      // $row6 = mysqli_fetch_array($query6);
                          ?>
              

                <div class="progress-group">
                  <?php echo $row2['fname']." ".$row2['lname'];?>
                  <span class="float-right"><b><?php echo $v; ?></b>/<?php echo $t; ?></span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-primary" style="width: 80%"></div>
                  </div>
                </div>
                <?php
                    }
                  }
                    // start senator votes
                  $qry2="SELECT * FROM `request` WHERE status='approved' AND position='3' AND school='$school' ";
                  $sql2=mysqli_query($conn,$qry2);

                  $r2=mysqli_num_rows($sql2);
                    if ($r2 == 0){
                    
                      echo "<br>";

                    ?>
                    <h2 class="text-info text-center">You already have a Senator ! </h2>

                    <?php

                    }

                    else{
                    ?>
                    <br>
                <p class="text-center">
                  <strong>SENATOR</strong>
                </p>
                <!-- /.progress-group -->
                <?php
                $nrow=mysqli_num_rows($sql2);
                    for ($i=1; $i<=$r2; $i++){
                      $row = mysqli_fetch_array($sql2);
                       $regno=$row['regno'];
                       $sql2 = "select * from users WHERE regno='$regno'";
                      $query2 = mysqli_query($conn, $sql2);
                      $row2 = mysqli_fetch_array($query2);
                     
                      $sql3 = "select * from vote WHERE senator='$regno'";
                      $query3 = mysqli_query($conn, $sql3);
                      $row3 = mysqli_fetch_array($query3);
                      $v=mysqli_num_rows($query3);
                     
                      // $sid=$row2['school'];
                      $sql4 = "select * from vote ";
                      $query4 = mysqli_query($conn, $sql4);
                      $t=mysqli_num_rows($query4);
                      // $row4 = mysqli_fetch_array($query4);
                      // $prog=$row['programme'];
                      // $sql6 = "select * from programme WHERE pid='$prog'";
                      // $query6 = mysqli_query($conn, $sql6);
                      // $row6 = mysqli_fetch_array($query6);
                          ?>
              
                <div class="progress-group">
                <?php echo $row2['fname']." ".$row2['lname'];?>
                <span class="float-right"><b><?php echo $v; ?></b>/<?php echo $t; ?></span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-danger" style="width: 75%"></div>
                  </div>
                </div>
                      <?php
                    }
                  }
                    
                      $qry2="SELECT * FROM `request` WHERE status='approved' AND position='4'  AND school='$school' ";
                  $sql2=mysqli_query($conn,$qry2);
                    if (mysqli_num_rows($sql2) == 0){
                    
                      echo "<br>";

                    ?>
                   <h2 class="text-info text-center">You already have a Faculty or School Representative ! </h2>

                    <?php

                    }

                    else{
                    ?>
                    <br>
                <p class="text-center">
                  <strong>FACULTY/SCHOOL REPRESENTATIVE</strong>
                </p>
                <!-- /.progress-group -->
                <?php
                $nrow=mysqli_num_rows($sql2);
                    for ($i=1; $i<=$nrow; $i++){
                      $row = mysqli_fetch_array($sql2);
                       $regno=$row['regno'];
                       $sql2 = "select * from users WHERE regno='$regno'";
                      $query2 = mysqli_query($conn, $sql2);
                      $row2 = mysqli_fetch_array($query2);
                     
                      $sql3 = "select * from vote WHERE president='$regno'";
                      $query3 = mysqli_query($conn, $sql3);
                      $row3 = mysqli_fetch_array($query3);
                      $v=mysqli_num_rows($query3);
                     
                      // $sid=$row2['school'];
                      $sql4 = "select * from vote ";
                      $query4 = mysqli_query($conn, $sql4);
                      $t=mysqli_num_rows($query4);
                      // $row4 = mysqli_fetch_array($query4);
                      // $prog=$row['programme'];
                      // $sql6 = "select * from programme WHERE pid='$prog'";
                      // $query6 = mysqli_query($conn, $sql6);
                      // $row6 = mysqli_fetch_array($query6);
                          ?>
              
                <div class="progress-group">
                <?php echo $row2['fname']." ".$row2['lname'];?>
                <span class="float-right"><b><?php echo $v; ?></b>/<?php echo $t; ?></span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-success" style="width: 75%"></div>
                  </div>
                </div>
                      <?php
                    }
                  }
                    ?>
                <!-- /.progress-group -->
                <!-- <div class="progress-group">
                  <span class="progress-text">Visit Premium Page</span>
                  <span class="float-right"><b>480</b>/800</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-success" style="width: 60%"></div>
                  </div>
                </div> -->

                <!-- /.progress-group -->
                <!-- <div class="progress-group">
                  Send Inquiries
                  <span class="float-right"><b>250</b>/500</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-warning" style="width: 50%"></div>
                  </div>
                </div> -->
                <!-- /.progress-group -->
              
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
        
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
