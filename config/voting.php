<?php
    session_start();
    include 'connection.php';
   

   if (isset($_POST['vote'])) {
    $president=$_POST['president'];
    $senator=$_POST['senator'];
    $fr=$_POST['fr'];
    $voter=$_POST['voter'];
    

    $qry="INSERT INTO `vote`( `voter`, `president`, `senator`, `fr`) VALUES ('$voter', '$president','$senator','$fr')";
    $sql=mysqli_query($conn,$qry);
    if (!$sql) {
        // die(mysqli_error($sql));
        echo "failed !";
    }
    else{
        if ($_SESSION['role']==3) {
            header("Location:../candidate.php?choice=president");
        }
        if ($_SESSION['role']==4) {
            header("Location:../voter.php?choice=president");
        }
    }
   }
   ?>
