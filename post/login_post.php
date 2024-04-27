<?php 

session_start();

// Database Require
require '../database/database.php';

// Admin Login Details
$email = $_POST['email'];
$password = $_POST['password'];


// Get Exist Email
$select_email = "SELECT COUNT(*) as exist_email, id FROM users WHERE email='$email'";
$select_email_rslt = mysqli_query($db_connect,$select_email);
$email_assoc = mysqli_fetch_assoc($select_email_rslt);

$exist_email = $email_assoc['exist_email'];
$id = $email_assoc['id'];

// Empty Condition Start 
if(empty($email)){
    $_SESSION["email_err"] = 'Please Enter Email';
    header('location:../login.php');
}

else if(empty($password)){
    $_SESSION["pass_err"] = 'Please Enter Password';
    header('location:../login.php');
}
// Empty Condition End

// Result
else{

    // Exist Email Condition if
    if($exist_email == 1){
        // Select Exist Email Password
        $select_email_pass = "SELECT * FROM users WHERE email='$email'";
        $select_email_pass_rslt = mysqli_query($db_connect,$select_email_pass);
        $email_pass_assoc = mysqli_fetch_assoc($select_email_pass_rslt);
        $email_pass = $email_pass_assoc['password'];
        $email_id = $email_pass_assoc['id'];

        // Verify or Pass Matching if 
        if(password_verify($password , $email_pass)){
            $_SESSION['verify'] = "Please Login First!";
            $_SESSION['login_success'] = 'Login Succesfull';
            $_SESSION['id'] = $id;
            header('location:../dashboard.php');
        }
        // Verify or Pass Matching else  
        else{
            $_SESSION["pass_verify"] = 'Incorrect Password';
            header('location:../login.php');
        } 

    }
    // Exist Email Condition else
    else{
        $_SESSION["email_exist"] = 'Invalid Email';
        header('location:../login.php');
    }
}




?>