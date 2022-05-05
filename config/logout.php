<?php
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['fname']);
    unset($_SESSION['regno']);
    header('Location:../index.php');
    ?>
    
