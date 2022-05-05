<?php

require_once('connection.php');

$id=$_POST['regno'];


if(isset($_POST['approve']))
{


// query preparation

    $qry1="UPDATE `users` SET `role`='3' WHERE regno='$id'";

    $qry2="UPDATE `request` SET `status`='approved' WHERE regno='$id' ";
// query execution 
   $update=mysqli_query($conn,$qry1);
   $update1=mysqli_query($conn,$qry2);
  if(!$update && !$update1){
    //   die.((mysqli_error($register));
    echo "failed";
    }

    else
    {

   header('location:../viewcandidate.php?success=1');
 }
}

if(isset($_POST['disapproved']))
{


// query preparation

$qry1="UPDATE `users` SET `role`='4' WHERE regno='$id'";

$qry2="UPDATE `request` SET `status`='disapproved' WHERE regno='$id' ";
// query execution 
$update=mysqli_query($conn,$qry1);
$update1=mysqli_query($conn,$qry2);
if(!$update && !$update1){
//   die.((mysqli_error($register));
echo "failed";
}

else
{

header('location:../viewcandidate.php?success=1');
}
}
?>
