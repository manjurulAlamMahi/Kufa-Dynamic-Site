<?php 
session_start();
// Database Require
require '/xampp/htdocs/L/database/database.php';

$id = $_GET['id'];
// Select data from social content
$select = "SELECT * FROM service_content WHERE id=$id";
$select_rslt = mysqli_query($db_connect,$select);
$after_assoc = mysqli_fetch_assoc($select_rslt);

// COUNT ACTIVE STATUS 
$count = "SELECT COUNT(*) as total FROM service_content WHERE status=1";
$count_rslt = mysqli_query($db_connect,$count);
$after_assoc_count = mysqli_fetch_assoc($count_rslt);

if($after_assoc['status'] == 1){

    if($after_assoc_count['total'] == 3){
        $_SESSION['limit'] = 'Minimum Three Services Must Active!';
        header('location:view_services_contents.php');
    }
    else{
        $update_content_act = "UPDATE service_content SET status=0 WHERE id=$id";
        $update_content_act_rslt = mysqli_query($db_connect,$update_content_act);
        header('location:view_services_contents.php');
    }
}

else{
    // UPDATE Contents STATUS 
    if($after_assoc_count['total'] == 6){
        $_SESSION['limit'] = 'Maximum Services Activated!';
        header('location:view_services_contents.php');
    }
    else{
        $update_content_act = "UPDATE service_content SET status=1 WHERE id=$id";
        $update_content_act_rslt = mysqli_query($db_connect,$update_content_act);

        header('location:view_services_contents.php');
    }
}






?>