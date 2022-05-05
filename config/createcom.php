<?php

require_once('connection.php');

if(isset($_POST['save']))
{
    $year=$_POST['year'];
    $nmember=$_POST['nmember'];
    $ename="MUSO/EC/".$year;


//    query preparation
    $qry="INSERT INTO `ecommitee`(`ename`, `year`, `nmember`) VALUES ('$ename', '$year', '$nmember')";
// query execution 
   $register=mysqli_query($conn,$qry);
  if(!$register){
    //   die.((mysqli_error($register));
    echo "failed";
    }

    else
    {

   header('location:../viewcom.php');
 }
}
?>
