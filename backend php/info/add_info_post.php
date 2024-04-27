<?php 
session_start();
// Database Require
require '/xampp/htdocs/L/database/database.php';

// Banner Contents Variable 
$office_address = $_POST['adress'];
$phone_number = $_POST['number'];
$email_address = $_POST['email'];
$office_at = $_POST['city'];
$details = $_POST['details'];

// Preg Match
$number = preg_match("@[0-9]@",$phone_number);

// Empty Conditon Start
if(empty($office_address)){
    $_SESSION['info_empty_err']= 'Please Enter Your Office Address!';
    header('location:add_info.php');
}
else if(empty($phone_number)){
    $_SESSION['info_empty_err']= 'Please Enter Your Phone Number!';
    header('location:add_info.php');
}
else if(empty($email_address)){
    $_SESSION['info_empty_err']= 'Please Enter Your Email Address!';
    header('location:add_info.php');
}
else if(empty($office_at)){
    $_SESSION['info_empty_err']= 'Please Enter Your Email Address!';
    header('location:add_info.php');
}
else if(empty($details)){
    $_SESSION['info_empty_err']= 'Please Enter Your Email Address!';
    header('location:add_info.php');
}
else{ 
    $insert = "INSERT INTO information(address, number, email, details, office_at)VALUES('$office_address','$phone_number','$email_address','$details','$office_at')";
    $insert_rslt = mysqli_query($db_connect,$insert);
    $_SESSION['info_added']= 'Information Added Successfully';
    header('location:add_info.php');
}

?>