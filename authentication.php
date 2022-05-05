<?php
 session_start();
require_once('config/connection.php');
    if(isset($_POST['login'])){
        $regno=$_POST['regno'];
        $pass=$_POST['password'];

        $qry="SELECT * FROM users where regno='$regno' and password='$pass' limit 1 ";

        $login=mysqli_query($conn,$qry);

        if(!$login) 
        {
            echo mysqli_error($login);
        }
        
        else{
        $rows=mysqli_num_rows($login);
        if($rows==0){
            header('location:index.php?request=1');
           
        }
        else{
            $res=mysqli_fetch_array($login);
            $id=$res['userid'];
            $fname=$res['fname'];
            $mname=$res['mname'];
            $lname=$res['lname'];
            $role=$res['role'];
            $regno=$res['regno'];
            $level=$res['level'];
            $school=$res['school'];

            // session creation
            $_SESSION['id']=$id;
            $_SESSION['fname']=$fname;
            $_SESSION['mname']=$mname;
            $_SESSION['lname']=$lname;
            $_SESSION['role']=$role;
            $_SESSION['level']=$level;
            $_SESSION['regno']=$regno;
            $_SESSION['school']=$school;
            if ($_SESSION['role']=='1') {
                header('Location:admin.php');
            }
            elseif ($_SESSION['role']=='2') {
                header('Location:ecom.php');
            }
            elseif ($_SESSION['role']=='3') {
                header('Location:candidate.php');
            }
            else {
                header('Location:voter.php');
            }
            
        }
           
        }
    }
    ?>
