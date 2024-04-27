<?php 
session_start();
// Database Require
require '../database/database.php';

$id = $_GET['id'];

// User Photo Delete 

$select_img = "SELECT * FROM users WHERE id=$id";
$select_img_rslt = mysqli_query($db_connect,$select_img);
$select_img_assoc = mysqli_fetch_assoc($select_img_rslt);
$user_photo = $select_img_assoc['profile_photo'];
$delete_from = "../assets/photos/upload/user_profile_photos/".$user_photo;
unlink($delete_from);

// User Info Delete 
$delete_id= "DELETE FROM users WHERE id=$id";
$delete_id_result = mysqli_query($db_connect, $delete_id);

$_SESSION['delete'] = "User Deleted Permanently";
header("location:../dashboard_trash.php");

?>