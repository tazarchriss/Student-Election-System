<?php

require_once('connection.php');

if(isset($_POST['add']))
{
    $regno=$_POST['regno'];
    $EID=$_POST['EID'];
    $position=$_POST['position'];


//    query preparation
    $qry="INSERT INTO `emember`(`EID`, `member`, `position`) VALUES('$EID','$regno', '$position') ";

    $qry1="UPDATE `users` SET `role`='2' WHERE regno='$regno'";
// query execution 
   $register=mysqli_query($conn,$qry);
   $update=mysqli_query($conn,$qry1);
  if(!$register){
    //   die.((mysqli_error($register));
    echo "failed";
    }

    else
    {

   header('location:../addMember.php?success=1');
 }
}
?>
