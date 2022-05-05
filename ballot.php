<?php
      session_start();
      
      include_once "config/connection.php";
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

<?php include 'mnavbar.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-info">Ballot Paper</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">E-Committee</a></li>
              <li class="breadcrumb-item active">Ballot Paper Setting</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card card-solid">
          <div class="card-body pb-0">
            <div class="row">
              <div class="col-12 col-sm-6 col-md-12 d-flex align-items-stretch flex-column">
                <div class="card card-info bg-light d-flex flex-fill">
                  <div class="card-header text-white border-bottom-0">
                    <h3 class="text-center">PRESIDENT AND VICE PRESIDENT</h3>
                  </div>
                  <?php
                      $sql1 = "select * from request WHERE position='1' AND status='approved' ";
                      $query1 = mysqli_query($conn, $sql1);
                     if($query1){
                    if (mysqli_num_rows($query1) == 0){
                    echo "There is no candidate contesting for this post !";
                      echo "<br>";

                    ?>
                      <a href="parking_registration.php">Register a parking spot</a>

                    <?php

                    }

                    else{
                      ?>
                  <div class="card-body pt-0" style="margin-top:20px;">
                    <div class="row">
                    <?php
                    for ($i=1; $i<=mysqli_num_rows($query1); $i++){
                      $row = mysqli_fetch_array($query1);
                      $regno=$row['regno'];
                      $sql2 = "select * from users WHERE regno='$regno'";
                     $query2 = mysqli_query($conn, $sql2);
                     $row2 = mysqli_fetch_array($query2);
                     $pid=$row['position'];
                     $sql3 = "select * from position WHERE positionID='$pid'";
                     $query3 = mysqli_query($conn, $sql3);
                     $row3 = mysqli_fetch_array($query3);
                     $sid=$row['school'];
                     $sql4 = "select * from school WHERE sid='$sid'";
                     $query4 = mysqli_query($conn, $sql4);
                     $row4 = mysqli_fetch_array($query4);
                     $prog=$row['programme'];
                     $sql6 = "select * from programme WHERE pid='$prog'";
                     $query6 = mysqli_query($conn, $sql6);
                     $row6 = mysqli_fetch_array($query6);
                      ?>
                        <div class="col-12 col-sm-6 col-md-5 d-flex align-items-stretch flex-column">
                            <div class="card bg-light d-flex flex-fill">
                              <div class="card-body pt-0">
                                <div class="row">
                                  <div class="col-7 text-center" style="margin:auto;">
                                    <div class="col-12 text-center">
                                        <br>
                                        <img src="dist/img/user2-160x160.jpg" alt="user-avatar" class=" img-fluid">
                                    </div>
                                    <br>
                                    <div class="col-12 float-left">
                                    <h2 class="lead text-info text-left"><b>Name:<?php echo $row2['fname']." ".$row2['lname'];?></b></h2>
                                    <p class=" text-info text-left">School:<?php echo $row4['school'];?></p>
                                   
                                   </div>
                                  </div>
                                 
                                </div>
                              </div>
                              <div class="card-footer">
                                <div class="text-right">
                                  <a href="#" class="btn btn-success btn-block" >
                                    <i class="fas fa-ballot"></i> EDIT
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-2">

                          </div>
                          <?php 
                        }
                        

              }


              }

              else {


                die(mysqli_error($conn));
              }



            
              ?>
                        
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="text-right">

                      <a href="#" class="btn btn-sm btn-info">
                        <i class="fas fa-pen"></i> EDIT
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Senator -->

              <div class="col-12 col-sm-6 col-md-12 d-flex align-items-stretch flex-column">
                <div class="card pt-0 card-info bg-light d-flex flex-fill">
                  <div class="card-header text-white border-bottom-0">
                    <h3 class="text-center">SENATOR</h3>
                  </div>
                  <?php
                      $sql1 = "select * from request WHERE position='3' AND status='approved' ";
                      $query1 = mysqli_query($conn, $sql1);
                     if($query1){
                    if (mysqli_num_rows($query1) == 0){
                    echo "There is no candidate contesting for this post !";
                      echo "<br>";

                    ?>
                      <a href="parking_registration.php">Register a parking spot</a>

                    <?php

                    }

                    else{
                      ?>
                  <div class="card-body pt-0" style="margin-top:20px;">
                    <div class="row">
                    <?php
                    for ($i=1; $i<=mysqli_num_rows($query1); $i++){
                      $row = mysqli_fetch_array($query1);
                      $regno=$row['regno'];
                      $sql2 = "select * from users WHERE regno='$regno'";
                     $query2 = mysqli_query($conn, $sql2);
                     $row2 = mysqli_fetch_array($query2);
                     $pid=$row['position'];
                     $sql3 = "select * from position WHERE positionID='$pid'";
                     $query3 = mysqli_query($conn, $sql3);
                     $row3 = mysqli_fetch_array($query3);
                     $sid=$row['school'];
                     $sql4 = "select * from school WHERE sid='$sid'";
                     $query4 = mysqli_query($conn, $sql4);
                     $row4 = mysqli_fetch_array($query4);
                     $prog=$row['programme'];
                     $sql6 = "select * from programme WHERE pid='$prog'";
                     $query6 = mysqli_query($conn, $sql6);
                     $row6 = mysqli_fetch_array($query6);
                      ?>
                        <div class="col-12 col-sm-6 col-md-5 d-flex align-items-stretch flex-column">
                            <div class="card bg-light d-flex flex-fill">
                              <div class="card-body pt-0">
                                <div class="row">
                                  <div class="col-7 text-center" style="margin:auto;">
                                    <div class="col-12 text-center">
                                        <br>
                                        <img src="dist/img/user2-160x160.jpg" alt="user-avatar" class=" img-fluid">
                                    </div>
                                    <br>
                                    <div class="col-12 float-left">
                                    <h2 class="lead text-info text-left"><b>Name:<?php echo $row2['fname']." ".$row2['lname'];?></b></h2>
                                    <p class=" text-info text-left">School:<?php echo $row4['school'];?></p>
                                  
                                   </div>
                                  </div>
                                 
                                </div>
                              </div>
                              <div class="card-footer">
                                <div class="text-right">
                                  <a href="#" class="btn btn-success btn-block" >
                                    <i class="fas fa-ballot"></i> EDIT
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-2">

                          </div>
                          <?php 
                        }
                        

              }


              }

              else {


                die(mysqli_error($conn));
              }



              
              ?>
                        
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="text-right">

                      <a href="#" class="btn btn-sm btn-info">
                        <i class="fas fa-pen"></i> EDIT
                      </a>
                    </div>
                  </div>
                </div>
              </div>
                  
            
                
              

              <!-- Faculty Representative -->

              <div class="col-12 col-sm-6 col-md-12 d-flex align-items-stretch flex-column">
                <div class="card card-info bg-light d-flex flex-fill">
                  <div class="card-header text-white border-bottom-0">
                    <h3 class="text-center">FACULTY/SCHOOL REPRESENTATIVE</h3>
                  </div>
                  
                  <?php
                      $sql1 = "select * from request WHERE position='4' AND status='approved' ";
                      $query1 = mysqli_query($conn, $sql1);
                     if($query1){
                    if (mysqli_num_rows($query1) == 0){
                    echo "There is no candidate contesting for this post !";
                      echo "<br>";

                    ?>
                      <a href="parking_registration.php">Register a parking spot</a>

                    <?php

                    }

                    else{
                      ?>
                  <div class="card-body pt-0" style="margin-top:20px;">
                    <div class="row">
                    <?php
                    for ($i=1; $i<=mysqli_num_rows($query1); $i++){
                      $row = mysqli_fetch_array($query1);
                      $regno=$row['regno'];
                      $sql2 = "select * from users WHERE regno='$regno'";
                     $query2 = mysqli_query($conn, $sql2);
                     $row2 = mysqli_fetch_array($query2);
                     $pid=$row['position'];
                     $sql3 = "select * from position WHERE positionID='$pid'";
                     $query3 = mysqli_query($conn, $sql3);
                     $row3 = mysqli_fetch_array($query3);
                     $sid=$row['school'];
                     $sql4 = "select * from school WHERE sid='$sid'";
                     $query4 = mysqli_query($conn, $sql4);
                     $row4 = mysqli_fetch_array($query4);
                     $prog=$row['programme'];
                     $sql6 = "select * from programme WHERE pid='$prog'";
                     $query6 = mysqli_query($conn, $sql6);
                     $row6 = mysqli_fetch_array($query6);
                      ?>
                        <div class="col-12 col-sm-6 col-md-5 d-flex align-items-stretch flex-column">
                            <div class="card bg-light d-flex flex-fill">
                              <div class="card-body pt-0">
                                <div class="row">
                                  <div class="col-7 text-center" style="margin:auto;">
                                    <div class="col-12 text-center">
                                        <br>
                                        <img src="dist/img/user2-160x160.jpg" alt="user-avatar" class=" img-fluid">
                                    </div>
                                    <br>
                                    <div class="col-12 float-left">
                                    <h2 class="lead text-info text-left"><b>Name:<?php echo $row2['fname']." ".$row2['lname'];?></b></h2>
                                    <p class=" text-info text-left">School:<?php echo $row4['school'];?></p>
                                  
                                   </div>
                                  </div>
                                 
                                </div>
                              </div>
                              <div class="card-footer">
                                <div class="text-right">
                                  <a href="#" class="btn btn-success btn-block" >
                                    <i class="fas fa-ballot"></i> EDIT
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-2">

                          </div>
                          <?php 
                        }
                        

              }


              }

              else {


                die(mysqli_error($conn));
              }


              ?>
                        
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="text-right">

                      <a href="#" class="btn btn-sm btn-info">
                        <i class="fas fa-pen"></i> EDIT
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            
                          <!-- senators -->
                    
                  
                <div class="card-footer">
            <div class="text-right">
              <a href="#" class="btn btn-block btn-info">
                <i class="fas fa-save"></i> SAVE
              </a>
            </div>
          </div>
        </div>
                
        </div>
            </div>      
              

            
          </div>
          <!-- /.card-body -->
         
        <!-- /.card -->
  </div>
                  </div>
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
