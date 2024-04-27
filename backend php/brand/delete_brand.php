<?php 
session_start();
// Database Require
require '/xampp/htdocs/L/database/database.php';

$id = $_GET['id'];

// Content Delete 
$delete_id= "DELETE FROM brand WHERE id=$id";
$delete_id_result = mysqli_query($db_connect, $delete_id);

$_SESSION['delete'] = "Information Deleted Permanently";
header("location:view_brand.php");

?>