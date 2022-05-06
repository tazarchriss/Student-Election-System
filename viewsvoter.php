<?php
      session_start();
      if ($_SESSION['role']!='1'){
        header('Location:index.php');
     }
      include_once "config/connection.php";
      $sql1 = "select * from users WHERE regno='".$_GET['regno']."'";
      $query1 = mysqli_query($conn, $sql1);
      if ($query1){
   ?>
<?php include "include/header.php"; ?>

<?php include "anavbar.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-info">View Voter</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">View Voter</li>
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
            <div class="col-md-12" style="margin:auto;">

                <!-- Profile Image -->
                <div class="card card-info card-outline col-md-10" style="margin:auto;">
                    
                      
                  <div class="card-body box-profile">
                                    <?php

                    if (mysqli_num_rows($query1) == 0){
                 
                      echo "<br>";

                    ?>
                   <p class="text-info">This voter does not exist!</p>

                    <?php

                    }

                    else{
                      ?>
                    <form action="config/approve.php" method="post" >
                    <?php
                    for ($i=1; $i<=mysqli_num_rows($query1); $i++){
                      $row = mysqli_fetch_array($query1);
                      $name=$row['regno'];
                      $sql2 = "select * from users WHERE regno='$name'";
                      
                      $query2 = mysqli_query($conn, $sql2);
                      $row2 = mysqli_fetch_array($query2);
                      $pid=$row2['programme'];
                      $sql3 = "select * from programme WHERE pid='$pid' ";
                      $query3 = mysqli_query($conn, $sql3);
                      $row3 = mysqli_fetch_array($query3);
                      $sid=$row['school'];
                      $sql4 = "select * from school WHERE sid='$sid' ";
                      $query4 = mysqli_query($conn, $sql4);
                      $row4 = mysqli_fetch_array($query4);
                      $lid=$row['level'];
                      $sql5 = "select * from level WHERE lid='$lid' ";
                      $query5 = mysqli_query($conn, $sql5);
                      $row5 = mysqli_fetch_array($query5);
                  ?>
                    <strong><i class="fas fa-user-tie mr-1"></i> Full Names</strong>
            
                    <p class="text-info">
                    <?php echo $row2['fname']. " " . $row2['mname']. " " . $row2['lname']; ?>
                    </p>
            
                    <hr>
                    <strong><i class="fas fa-poll mr-1"></i> Registration Number</strong>
            
                    <p class="text-info">
                      <?php echo $row['regno']; ?>
                    </p>
            
                    <hr>

                    <strong><i class="fas fa-school mr-1"></i> School</strong>
            
                    <p class="text-info"><?php echo $row4['school']; ?> </p>
            
                    <hr>
                      
                    <strong><i class="far fa-polls mr-1"></i> level</strong>
                    <p class="text-info"><?php echo $row5['level']; ?> </p>
                    <hr>
                    <strong><i class="fas fa-book mr-1"></i> Programme</strong>
            
                    <p class="text-info"><?php echo $row3['programme']."-".$row['year']; ?> </p>
                   
                    <br>
                    <input type="text" name="regno" value="<?php echo $row2['regno'];?>" id="" hidden>
                    <button type="submit" class="btn btn-success" name="approve">Edit</button>
                    <button type="submit" class="btn btn-danger" name="disapproved">Delete</button>
                  </div>
                  <!-- /.card-body -->
                  

                  <?php 
              }
              ?>
            </form>
            <br>
            <?php

        }


      }

        else {


          die(mysqli_error($conn));
        }


        // include 'config/approve.php';
        ?>
                </div>
                <!-- /.card -->
            
          
              </div>
          
        </div>
        <!-- /.row -->
   
      </div><!-- /.container-fluid -->
    </section>
    <br>
    <br>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="https://tazarchriss.me">TazarChriss</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
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


