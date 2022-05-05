<?php

require_once('connection.php');

if(isset($_POST['change']))
{
    $regno=$_POST['regno'];
    $oldpass=$_POST['oldpass'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];

if ($pass1!=$pass2) {
    header('location:../changepassword.php?fail');
}

else {
    $sql1="SELECT * FROM `users` WHERE regno='$regno' AND password='$oldpass' ";
    $qry1=mysqli_query($conn,$sql1);
    if (!$qry1) {
        die(mysqli_error($qry1));
    }
    else{
    if (mysqli_num_rows($qry1)==0) {
        header("Location:../changepassword.php?old");
    }
    else{
    $sql="UPDATE `users` SET `password`='$pass1' WHERE regno='$regno' ";
    $qry=mysqli_query($conn,$sql);
    if (!$qry) {
        die(mysqli_error($qry));
    }
    else{
        header("Location:../passrecovery.php?success");
    }
    }
}
}
}
?>
