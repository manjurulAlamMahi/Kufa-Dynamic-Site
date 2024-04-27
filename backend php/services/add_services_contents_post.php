<?php 
session_start();
// Database Require
require '/xampp/htdocs/L/database/database.php';

// Banner Contents Variable 
$icon_name = $_POST['icon'];
$title = $_POST['title'];
$description = $_POST['decp'];

// Empty Conditon Start
if(empty($icon_name)){
    $_SESSION['service_empty_err']= 'Please Select a Icon!';
    header('location:add_services_contents.php');
}
else if(empty($title)){
    $_SESSION['service_empty_err']= 'Please Enter Your Title!';
    header('location:add_services_contents.php');
}
else if(empty($description)){
    $_SESSION['service_empty_err']= 'Please Enter Your Description!';
    header('location:add_services_contents.php');
}
else{ 
    $insert = "INSERT INTO service_content(icon, title, description)VALUES('$icon_name','$title','$description')";
    $insert_rslt = mysqli_query($db_connect,$insert);
    $_SESSION['content_added']= 'Content Added Successfully';
    header('location:add_services_contents.php');
}

?>