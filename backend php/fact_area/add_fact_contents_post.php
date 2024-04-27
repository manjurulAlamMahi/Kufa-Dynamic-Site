<?php 
session_start();
// Database Require
require '/xampp/htdocs/L/database/database.php';

// Banner Contents Variable 
$icon_name = $_POST['icon'];
$number = $_POST['number'];
$content = $_POST['content'];
// Preg Match
$number_match = preg_match('@[0-9]@',$number);

// Empty Conditon Start
if(empty($icon_name)){
    $_SESSION['fact_empty_err']= 'Please Select a Icon!';
    header('location:add_fact_contents.php');
}
else if(empty($number)){
    $_SESSION['fact_empty_err']= 'Please Enter Your Title!';
    header('location:add_fact_contents.php');
}
else if(!$number_match){
    $_SESSION['fact_empty_err']= 'Countdown Must be Number!';
    header('location:add_fact_contents.php');
}
else if(empty($content)){
    $_SESSION['fact_empty_err']= 'Please Enter Your Description!';
    header('location:add_fact_contents.php');
}
else{ 
    $insert = "INSERT INTO fact_area(icon, number, content)VALUES('$icon_name','$number','$content')";
    $insert_rslt = mysqli_query($db_connect,$insert);
    $_SESSION['content_added']= 'Content Added Successfully';
    header('location:add_fact_contents.php');
}

?>