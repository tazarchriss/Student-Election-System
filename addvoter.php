<?php

require_once('connection.php');

if(isset($_POST['save']))
{
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $pnumber=$_POST['pnumber'];
    $sex=$_POST['sex'];
    $level=$_POST['level'];
    $school=$_POST['school'];
    $programme=$_POST['programme'];
    $year=$_POST['year'];
    $regno=$_POST['regno'];

//    query preparation
    $qry="INSERT INTO `users`(`fname`, `mname`, `lname`, `sex`, `regno`, `email`, `pnumber`, `school`, `level`,`programme`, `year`, `password`, `role`) VALUES ('$fname','$mname','$lname','$sex', '$regno', '$email', '$pnumber', '$school', '$level', '$programme','$year', '$password', '4')";
// query execution 
   $register=mysqli_query($conn,$qry);
  if(!$register){
    //   die.((mysqli_error($register));
    echo "failed";
    }

    else
    {

   header('location:../viewvoters.php');
 }
}
?>
