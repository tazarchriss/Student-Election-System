<?php
session_start();
require_once('connection.php');

if(isset($_POST['add']))
{
    $userid=$_SESSION['regno'];
    $message=$_POST['message'];
    $file=$_POST['file'];


// query preparation
    $qry="INSERT INTO `posts`(`userid`, `message`, `file`) VALUES ('$userid', '$message','$file')";

 // $qry1="UPDATE `users` SET `role`='2' WHERE regno='$regno'";
// query execution 
   $post=mysqli_query($conn,$qry);
//    $update=mysqli_query($conn,$qry1);
  if(!$post){
    //   die.((mysqli_error($register));
    echo "failed";
    }

    else
    {

   header('location:../timeline.php?success=1');
 }
}
?>
