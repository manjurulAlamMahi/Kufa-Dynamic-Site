<?php 
session_start();
// Database Require
require '/xampp/htdocs/L/database/database.php';

// File Upload Variable
$upload_banner_img = $_FILES["banner_image"];
$upload_banner_img_name = $upload_banner_img["name"];
$upload_banner_img_size = $upload_banner_img["size"];
$upload_banner_img_location = $upload_banner_img["tmp_name"];
$explode_banner_img_name = explode(".",$upload_banner_img_name);
$upload_banner_img_extension = end($explode_banner_img_name);

// Extension Allowed for Uploaded File
$allow_extension = array("png");


// Upload File if
if($upload_banner_img_name != ""){
    // Upload File Size if
    if($upload_banner_img_size <= 3000000){
        // Upload File Extension check if
        if(in_array($upload_banner_img_extension,$allow_extension)){
            // Database Insert 
            $insert = "INSERT INTO banner_image(image)VALUES('$upload_banner_img_name')";
            $insert_rslt = mysqli_query($db_connect,$insert);
            // Database Inserted ID
            $insert_id = mysqli_insert_id($db_connect);
            // Uploaded File New Name
            $banner_img_name = $insert_id . "." . $upload_banner_img_extension;
            // Uploaded File New Location 
            $new_location = "../../assets/photos/index/banner/".$banner_img_name;
            move_uploaded_file($upload_banner_img_location,$new_location);
            // Update File on Database 
            $update_file = "UPDATE banner_image SET image='$banner_img_name' WHERE id=$insert_id";
            $update_file_rslt = mysqli_query($db_connect,$update_file);
            // After Signup Unset Previous end
            $_SESSION['successful'] = 'Image Added Successsfully';
            header('location:banner_content_add.php');
        }
        // Upload File Extension check else
        else{
            $_SESSION['extension_err']= 'Ivalid File Extension Please enter PNG file';
            header('location:banner_content_add.php');
        }
    }
    // Upload File Size else
    else{
        $_SESSION['size_err']= 'File Size is too large (Max 3MB)';
        header('location:banner_content_add.php');
    }
}
// Upload File else
else{
    $_SESSION['file_err']= 'Please Enter your Banner Photo';
    header('location:banner_content_add.php');
}


?>