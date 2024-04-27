<?php 
    session_start();

    // Database Require
    require '../database/database.php';

    // Messege Variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $messege = $_POST['message'];

    // Empty Conditon Start
    if(empty($name)){
        $_SESSION['msg_err']= 'Please Enter Your Name!';
        header('location:../index.php#form');
    }
    else if(empty($email)){
        $_SESSION['msg_err']= 'Please Enter Your Email!';
        header('location:../index.php#form');
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['msg_err']= 'Please Enter Valid Email!';
        header('location:../index.php#form');
    }
    else if(empty($messege)){
        $_SESSION['msg_err']= 'Please Enter Your Messege!';
        header('location:../index.php#form');
    }
    else{
        $insert = "INSERT INTO messeges(name, email, messege)VALUES('$name','$email','$messege')";
        $insert_rslt = mysqli_query($db_connect,$insert);
        $_SESSION['msg_send']= 'Your Messege Send Successfully!';
        header('location:../index.php#form');
    }
?>