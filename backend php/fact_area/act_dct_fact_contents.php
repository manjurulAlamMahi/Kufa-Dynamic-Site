<?php 
session_start();
// Database Require
require '/xampp/htdocs/L/database/database.php';

$id = $_GET['id'];
// Select data from social content
$select = "SELECT * FROM fact_area WHERE id=$id";
$select_rslt = mysqli_query($db_connect,$select);
$after_assoc = mysqli_fetch_assoc($select_rslt);

// COUNT ACTIVE STATUS 
$count = "SELECT COUNT(*) as total FROM fact_area WHERE status=1";
$count_rslt = mysqli_query($db_connect,$count);
$after_assoc_count = mysqli_fetch_assoc($count_rslt);

if($after_assoc['status'] == 1){

    if($after_assoc_count['total'] == 1){
        $_SESSION['limit'] = 'Minimum One Countdown Must Active!';
        header('location:view_fact_contents.php');
    }
    else{
        $update_content_act = "UPDATE fact_area SET status=0 WHERE id=$id";
        $update_content_act_rslt = mysqli_query($db_connect,$update_content_act);
        header('location:view_fact_contents.php');
    }
}

else{
    // UPDATE Contents STATUS 
    if($after_assoc_count['total'] == 4){
        $_SESSION['limit'] = 'Maximum Countdown Activated!';
        header('location:view_fact_contents.php');
    }
    else{
        $update_content_act = "UPDATE fact_area SET status=1 WHERE id=$id";
        $update_content_act_rslt = mysqli_query($db_connect,$update_content_act);

        header('location:view_fact_contents.php');
    }
}






?>