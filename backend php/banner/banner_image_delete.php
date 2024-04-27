<?php 
session_start();
// Database Require
require '/xampp/htdocs/L/database/database.php';

$id = $_GET['id'];

// Banner Image Delete 

$select_img = "SELECT * FROM banner_image WHERE id=$id";
$select_img_rslt = mysqli_query($db_connect,$select_img);
$select_img_assoc = mysqli_fetch_assoc($select_img_rslt);
$banner_photo = $select_img_assoc['image'];
$delete_from = "../../assets/photos/index/banner/".$banner_photo;
unlink($delete_from);

$delete_id= "DELETE FROM banner_image WHERE id=$id";
$delete_id_result = mysqli_query($db_connect, $delete_id);

$_SESSION['delete'] = "Image Deleted Permanently";
header("location:banner_image.php");

?>