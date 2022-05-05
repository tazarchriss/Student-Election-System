<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MES | Login </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body  style="background-color:grey;">
<div >
  <!-- Navbar -->
  <nav class="navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <h3 class="text-white">M.E.S</h3>
  </nav>
  <!-- /.navbar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content" style="margin:auto;">
 

    <!-- Main content -->
    <section class="content" style="margin:auto;">
      <div class="container-fluid">
        <div class="row" style="margin:auto;">
          <!-- left column -->
          <div class="col-md-5" style="margin:auto;margin-top:80px;">
            <!-- jquery validation -->
            <div class="card card-primary">

              <div style="margin:auto;margin-top:20px;">
                  <img src="dist/img/logo.jpg" width="120px;" style="margin:auto;">
                
              </div>
              <br>
              <span class="badge badge-dark" style="font-size:25px;width:80%;margin:auto;">
                  MUSO ELECTION SYSTEM
              </span>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="post" action="authentication.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="regno" class="form-control" id="exampleInputEmail1" placeholder="Eg.13301099/T.19">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="************">
                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">Remember me.</label>
                    </div>
                  </div>
                </div>
                <?php
                  if (isset($_GET["request"])){
                  ?>
                <p class="text-danger " style="margin-left:20px;">wrong username or password</p>
                  <?php     
                }

                ?>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info btn-block" name="login">Log in</button>
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



  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {

  $('#quickForm').validate({
    rules: {
      regno: {
        required: true,
       
      },
      password: {
        required: true,
        
      },
   
    },
    messages: {
      regno: {
        required: "Please enter a email address",
       
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
    
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>
