<?php 
session_start();
// Database Require
require '/xampp/htdocs/L/database/database.php';

// Banner Contents Variable 
$icon_name = $_POST['icon'];
$link = $_POST['link'];

// Empty Conditon Start
if(empty($icon_name)){
    $_SESSION['icon_empty_err']= 'Please Select a Icon!';
    header('location:add_social_contents.php');
}
else if(empty($link)){
    $_SESSION['icon_empty_err']= 'Please Enter Your Link!';
    header('location:add_social_contents.php');
}
else{ 
    $insert = "INSERT INTO social_content(icon, link)VALUES('$icon_name','$link')";
    $insert_rslt = mysqli_query($db_connect,$insert);
    $_SESSION['social_content_added']= 'Content Added Successfully';
    header('location:add_social_contents.php');
}

?>