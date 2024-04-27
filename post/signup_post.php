<?php 
session_start();

// Database Require
require '../database/database.php';

// User information Variable 
$first_name = $_POST['f_name'];
$last_name = $_POST['l_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['c_password'];

// Incripted Password
$hash_password = password_hash($password, PASSWORD_DEFAULT);

// Added Previous before error Information 
$_SESSION['prv_f_name']= $first_name;
$_SESSION['prv_l_name']= $last_name;
$_SESSION['prv_email']= $email;
$_SESSION['prv_password']= $password;
$_SESSION['prv_c_password']= $confirm_password;

// Exist Email Select
$select = "SELECT count(*) as email_exist FROM `users` WHERE email='$email'";
$select_rslt = mysqli_query($db_connect,$select);
$email_exist_assoc = mysqli_fetch_assoc($select_rslt);
$exist_email = $email_exist_assoc['email_exist'];

// Input Password Match Character
$upper = preg_match("@[A-Z]@", $password);
$lower = preg_match("@[a-z]@", $password);
$num = preg_match("@[0-9]@", $password);
$spcl = preg_match("@[!,#,$,%,^,&,*]@", $password);

// File Upload Variable
$upload_file = $_FILES["profile_photo"];
$upload_file_name = $upload_file["name"];
$upload_file_size = $upload_file["size"];
$upload_file_location = $upload_file["tmp_name"];
$explode_file_name = explode(".",$upload_file_name);
$upload_file_extension = end($explode_file_name);

// Created At Date/Time
date_default_timezone_set("Asia/Dhaka");
$date = date("y/m/d h:i:s");

// Extension Allowed for Uploaded File
$allow_extension = array("png","jpg","jpeg");

// Empty Conditon Start
if(empty($first_name)){
    $_SESSION['f_name_err']= 'Please enter your first name!';
    header('location:../signup.php');
}
else if(empty($last_name)){
    $_SESSION['l_name_err']= 'Please enter your last name!';
    header('location:../signup.php');
}
else if(empty($email)){
    $_SESSION['email_err']= 'Please enter your email!';
    header('location:../signup.php');
}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $_SESSION['valid_email_err']= 'Please enter valid email address!';
    header('location:../signup.php');
}
else if($exist_email == 1){
    $_SESSION['email_exist']= 'Email Already Exist!';
    header('location:../signup.php');
}
else if(empty($password)){
    $_SESSION['password_err']= 'Please enter your password!';
    header('location:../signup.php');
}
else if(!$upper || !$lower || !$num || !$spcl || strlen($password) < 8){
    $_SESSION['password_mtch_err']= 'Password should have uppercase,lowercase,number,special character and minimum 8 CHaracter!';
    header('location:../signup.php');
}
else if(empty($confirm_password)){
    $_SESSION['c_password_err']= 'Please confirm your password!';
    header('location:../signup.php');
}
// Empty Conditon End

// RESULT
else{
    // Upload File if
    if($upload_file_name != ""){
        // Upload File Size if
        if($upload_file_size <= 2000000){
            // Upload File Extension check if
            if(in_array($upload_file_extension,$allow_extension)){
                // Database Insert 
                $insert = "INSERT INTO users(firstname , lastname , email , password , created_at)VALUES('$first_name','$last_name','$email','$hash_password','$date')";
                $insert_rslt = mysqli_query($db_connect,$insert);
                // Database Inserted ID
                $insert_id = mysqli_insert_id($db_connect);
                // Uploaded File Name
                $profile_photo_name = $insert_id . "." . $upload_file_extension;
                // Uploaded File New Location 
                $new_location = "../assets/photos/upload/user_profile_photos/".$profile_photo_name;
                move_uploaded_file($upload_file_location,$new_location);
                // Update File on Database 
                $update_file = "UPDATE users SET profile_photo='$profile_photo_name' WHERE id=$insert_id";
                $update_file_rslt = mysqli_query($db_connect,$update_file);
                // After Signup Unset Previous start
                unset($_SESSION['prv_f_name']);
                unset($_SESSION['prv_l_name']);
                unset($_SESSION['prv_email']);
                unset($_SESSION['prv_password']);
                unset($_SESSION['prv_c_password']);
                // After Signup Unset Previous end
                $_SESSION['successful'] = 'YOU ARE SUCCESSFULLY SIGNED UP';
                header('location:../signup.php');
            }
            // Upload File Extension check else
            else{
                $_SESSION['extension_err']= 'Ivalid File Extension Please enter (JPG,PNG,JPEG)';
                header('location:../signup.php');
            }
        }
        // Upload File Size else
        else{
            $_SESSION['size_err']= 'File Size is too large (Max 2MB)';
            header('location:../signup.php');
        }
    }
    // Upload File else
    else{
        $_SESSION['file_err']= 'Please Enter your Profile Photo';
        header('location:../index.php');
    }
}


?>