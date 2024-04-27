<?php 
session_start();
// Database Require
require '/xampp/htdocs/L/database/database.php';

$id = $_GET['id'];

// UPDATE IMAGE STATUS 
$update_img_dct = "UPDATE banner_image SET status=0";
$update_img_dct_rslt = mysqli_query($db_connect,$update_img_dct);

$update_img_act = "UPDATE banner_image SET status=1 WHERE id=$id";
$update_img_act_rslt = mysqli_query($db_connect,$update_img_act);

header('location:banner_image.php');

?>