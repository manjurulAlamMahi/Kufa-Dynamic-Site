<?php 
session_start();
// Database Require
require '/xampp/htdocs/L/database/database.php';

$id = $_GET['id'];

// UPDATE Contents STATUS 
$update_content_dct = "UPDATE banner_content SET status=0";
$update_content_dct_rslt = mysqli_query($db_connect,$update_content_dct);

$update_content_act = "UPDATE banner_content SET status=1 WHERE id=$id";
$update_content_act_rslt = mysqli_query($db_connect,$update_content_act);

header('location:banner_content.php');

?>