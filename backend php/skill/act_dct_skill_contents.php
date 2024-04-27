<?php 
session_start();
// Database Require
require '/xampp/htdocs/L/database/database.php';

$id = $_GET['id'];
// Select data from social content
$select = "SELECT * FROM skills WHERE id=$id";
$select_rslt = mysqli_query($db_connect,$select);
$after_assoc = mysqli_fetch_assoc($select_rslt);

// COUNT ACTIVE STATUS 
$count = "SELECT COUNT(*) as total FROM skills WHERE status=1";
$count_rslt = mysqli_query($db_connect,$count);
$after_assoc_count = mysqli_fetch_assoc($count_rslt);

if($after_assoc['status'] == 1){

    if($after_assoc_count['total'] == 1){
        $_SESSION['limit'] = 'Minimum One Skill Must Active!';
        header('location:view_skill.php');
    }
    else{
        $update_content_act = "UPDATE skills SET status=0 WHERE id=$id";
        $update_content_act_rslt = mysqli_query($db_connect,$update_content_act);
        header('location:view_skill.php');
    }
}

else{
    // UPDATE Contents STATUS 
    if($after_assoc_count['total'] == 4){
        $_SESSION['limit'] = 'Maximum Skill Activated!';
        header('location:view_skill.php');
    }
    else{
        $update_content_act = "UPDATE skills SET status=1 WHERE id=$id";
        $update_content_act_rslt = mysqli_query($db_connect,$update_content_act);

        header('location:view_skill.php');
    }
}






?>