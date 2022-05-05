<?php

require_once('connection.php');

if(isset($_POST['change']))
{
    $regno=$_POST['regno'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];

if ($pass1!=$pass2) {
    header('location:../passrecovery.php?fail');
}
else {
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
?>
