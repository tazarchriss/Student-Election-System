<?php

require_once('connection.php');

if(isset($_POST['submit']))
{

    $regno=$_POST['regno'];
    $position=$_POST['position'];
    $level=$_POST['level'];
    $school=$_POST['school'];
    $programme=$_POST['programme'];
    $year=$_POST['year'];


//    query preparation
    $qry="INSERT INTO `request`(`regno`, `position`, `school`, `level`, `programme`, `year`, `status`) VALUES('$regno', '$position', '$school', '$level', '$programme', '$year','pending')";
// query execution 
   $register=mysqli_query($conn,$qry);
  if(!$register){
    //   die.((mysqli_error($register));
    echo "failed";
    }

    else
    {

   header('location:../candReq.php?request=1');
 }
}
?>
