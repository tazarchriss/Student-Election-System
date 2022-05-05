<?php 
 include 'connection.php';
    if (isset($_POST['von'])) {

        $sql1 = "UPDATE `switch` SET `value`='on' WHERE switch='voting'";
        $query1 = mysqli_query($conn, $sql1);
        if (!$query1) {
            die(mysqli_error($query1));
        }
        else{
            header("Location:../voting.php?voting=on");
        }
        
    }
    if (isset($_POST['voff'])) {
      
        $sql1 = "UPDATE `switch` SET `value`='off' WHERE switch='voting'";
        $query1 = mysqli_query($conn, $sql1);
        if (!$query1) {
            die(mysqli_error($query1));
        }
        else{
        header("Location:../voting.php?voting=off");
        }
    }

    if (isset($_POST['ron'])) {
      
        $sql1 = "UPDATE `switch` SET `value`='on' WHERE switch='request'";
        $query1 = mysqli_query($conn, $sql1);
        if (!$query1) {
            die(mysqli_error($query1));
        }
        else{
        header("Location:../voting.php?request=off");
        }
    }
    if (isset($_POST['roff'])) {
      
        $sql1 = "UPDATE `switch` SET `value`='off' WHERE switch='request'";
        $query1 = mysqli_query($conn, $sql1);
        if (!$query1) {
            die(mysqli_error($query1));
        }
        else{
        header("Location:../voting.php?request=off");
        }
    }

    if (isset($_POST['con'])) {
      
        $sql1 = "UPDATE `switch` SET `value`='on' WHERE switch='viewCandidate'";
        $query1 = mysqli_query($conn, $sql1);
        if (!$query1) {
            die(mysqli_error($query1));
        }
        else{
        header("Location:../voting.php?request=off");
        }
    }
    if (isset($_POST['coff'])) {
      
        $sql1 = "UPDATE `switch` SET `value`='off' WHERE switch='viewCandidate'";
        $query1 = mysqli_query($conn, $sql1);
        if (!$query1) {
            die(mysqli_error($query1));
        }
        else{
        header("Location:../voting.php?request=off");
        }
    }
    if (isset($_POST['reson'])) {
      
        $sql1 = "UPDATE `switch` SET `value`='on' WHERE switch='results'";
        $query1 = mysqli_query($conn, $sql1);
        if (!$query1) {
            die(mysqli_error($query1));
        }
        else{
        header("Location:../voting.php?request=off");
        }
    }
    if (isset($_POST['resoff'])) {
      
        $sql1 = "UPDATE `switch` SET `value`='off' WHERE switch='results'";
        $query1 = mysqli_query($conn, $sql1);
        if (!$query1) {
            die(mysqli_error($query1));
        }
        else{
        header("Location:../voting.php?request=off");
        }
    }
    if (isset($_POST['campon'])) {
      
        $sql1 = "UPDATE `switch` SET `value`='on' WHERE switch='campaign'";
        $query1 = mysqli_query($conn, $sql1);
        if (!$query1) {
            die(mysqli_error($query1));
        }
        else{
        header("Location:../voting.php?request=off");
        }
    }
    if (isset($_POST['campoff'])) {
      
        $sql1 = "UPDATE `switch` SET `value`='off' WHERE switch='campaign'";
        $query1 = mysqli_query($conn, $sql1);
        if (!$query1) {
            die(mysqli_error($query1));
        }
        else{
        header("Location:../voting.php?request=off");
        }
    }
    
 ?>
