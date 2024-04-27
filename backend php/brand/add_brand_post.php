<?php 
session_start();
// Database Require
require '/xampp/htdocs/L/database/database.php';

// File Upload Variable
$upload_brand_img = $_FILES['brand'];
$upload_brand_img_name = $upload_brand_img["name"];
$upload_brand_img_size = $upload_brand_img["size"];
$upload_brand_img_location = $upload_brand_img["tmp_name"];
$explode_brand_img_name = explode(".",$upload_brand_img_name);
$upload_brand_img_extension = end($explode_brand_img_name);

// Extension Allowed for Uploaded File
$allow_extension = array("png");

if($upload_brand_img_name = ""){
    $_SESSION['file_err']= 'Please Enter Your brand!';
    header('location:add_brand.php');
}
else{ 

    // Upload File Size if
    if($upload_brand_img_size <= 3000000){
        // Upload File Extension check if
        if(in_array($upload_brand_img_extension,$allow_extension)){
            // Database Insert 
            $insert = "INSERT INTO brand(brand)VALUES('$upload_brand_img_name')";
            $insert_rslt = mysqli_query($db_connect,$insert);
            // Database Inserted ID
            $insert_id = mysqli_insert_id($db_connect);
            // Uploaded File New Name
            $brand_img_name = $insert_id . "." . $upload_brand_img_extension;
            // Uploaded File New Location 
            $new_location = "../../assets/photos/index/brand/".$brand_img_name;
            move_uploaded_file($upload_brand_img_location,$new_location);
            // Update File on Database 
            $update_file = "UPDATE brand SET brand='$brand_img_name' WHERE id=$insert_id";
            $update_file_rslt = mysqli_query($db_connect,$update_file);
            // After Signup Unset Previous end
            $_SESSION['successful'] = 'brand Added Successsfully';
            header('location:add_brand.php');
        }
        // Upload File Extension check else
        else{
            $_SESSION['extension_err']= 'Ivalid File Extension Please enter PNG file';
            header('location:add_brand.php');
        }
    }
    // Upload File Size else
    else{
        $_SESSION['size_err']= 'File Size is too large (Max 3MB)';
        header('location:add_brand.php');
    }
}

?>