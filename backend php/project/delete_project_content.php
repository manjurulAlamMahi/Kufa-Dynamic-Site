<?php 
session_start();
// Database Require
require '/xampp/htdocs/L/database/database.php';

$id = $_GET['id'];

// Banner Content Delete 
$delete_id= "DELETE FROM projects WHERE id=$id";
$delete_id_result = mysqli_query($db_connect, $delete_id);

$_SESSION['delete'] = "User Deleted Permanently";
header("location:view_project_content.php");

?>