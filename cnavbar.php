<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block"><?php echo $_SESSION['fname']." ".$_SESSION['lname'];?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item navbar-info" style="margin:2px;">
            <a href="#" class="nav-link text-white">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
            
              </p>
            </a>

          </li>
          <?php 
                   $sql1 = "select * from switch WHERE switch='campaign'";
                   $query1 = mysqli_query($conn, $sql1);
                   $row = mysqli_fetch_array($query1);

                   if($row['value']=='on'){
                   ?>
          <li class="nav-item navbar-info" style="margin:2px;">
            <a href="#" class="nav-link text-white">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Manage Campaigne
              </p>
            </a>
            <ul class="nav nav-treeview text-white">
              <li class="nav-item">
                <a href="timeline.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="addpost.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Post</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="editVoter.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Campaigne Schedule</p>
                </a>
              </li>
            </ul>
          </li>
          <?php
                   }


                   $sql2 = "select * from switch WHERE switch='voting'";
                   $query2 = mysqli_query($conn, $sql2);
                   $row1 = mysqli_fetch_array($query2);

                   if($row1['value']=='on'){
                   ?>
          <li class="nav-item navbar-info" style="margin:2px;">
            <a href="estats.php" class="nav-link text-white">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Election Statistics
               
              </p>
            </a>

          </li>
          
          <li class="nav-item navbar-info" style="margin:2px;">
            <a href="vstats.html" class="nav-link text-white">
              <i class="nav-icon fas fa-vote-yea"></i>
              <p>
                Election Results
           
              </p>
            </a>
     
          </li>
          <?php
                   }
              ?>
          <li class="nav-item navbar-info" style="margin:2px;">
          <a href="profile.php?id=<?php echo $_SESSION['regno'];?>" class="nav-link text-white">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
            
              </p>
            </a>

          </li>
          <li class="nav-item navbar-info" style="margin:2px;">
            <a href="config/logout.php" class="nav-link text-white">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
  
              </p>
            </a>

          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
