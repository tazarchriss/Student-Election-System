<?php
    $server='127.0.0.1';
    $user='root';
    $password='';
    $dbname='mes';

    $conn=mysqli_connect($server,$user,$password,$dbname);

    if(!$conn){
        die(mysqli_error($conn));
    }
    ?>
