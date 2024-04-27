<?php 
session_start();
// Database Require
require '../database/database.php';

$id = $_GET["id"];

$select = "SELECT * FROM users WHERE id=$id";
$select_rslt = mysqli_query($db_connect , $select);
$after_assoc = mysqli_fetch_assoc($select_rslt);

if($after_assoc["status"] == 0){
    $update_status = "UPDATE users SET status=1 WHERE id=$id";
    $update_status = mysqli_query($db_connect,$update_status);
    $_SESSION["trash"] = "Trashed Successfully";
    header("location:../dashboard_users.php");
}
else{
    $update_status = "UPDATE users SET status=0 WHERE id=$id";
    $update_status = mysqli_query($db_connect,$update_status);
    $_SESSION["restore"] = "User Restored Successfully";
    header("location:../dashboard_trash.php");
}




?>