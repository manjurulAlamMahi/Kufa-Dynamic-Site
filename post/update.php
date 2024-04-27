<?php 
    session_start();
    // Database Require
    require '../database/database.php';
    // Edit User Variable
    $id = $_POST["id"];
    $f_name= $_POST["firstname"];
    $l_name= $_POST["lastname"];
    $email= $_POST["email"];
    $pass= $_POST["password"];
    $photo = $_FILES['profile_photo']['name'];

    $hash_pass = password_hash($pass, PASSWORD_DEFAULT);

    // Update Name , Email & Photo
    if(empty($pass)){
        // Photo update proccess
        if($photo != ''){

            // Update Name , Email & Photo

            // File Information
            $upload_file = $_FILES['profile_photo'];
            $upload_file_name = $upload_file['name'];
            $upload_file_size = $upload_file['size'];
            $upload_file_location = $upload_file['tmp_name'];

            $explode_file = explode('.',$upload_file_name);
            $upload_file_extension = end($explode_file);
        
            $extension_allow = array('png', 'jpg', 'jpeg');

            // Extension Condition if
            if(in_array($upload_file_extension,$extension_allow)){
                // Size Condition if
                if($upload_file_size <= 2000000 ){
                    // Delete Previous Photo 
                    $select_img = "SELECT * FROM users WHERE id=$id";
                    $select_img_rslt = mysqli_query($db_connect,$select_img);
                    $select_img_assoc = mysqli_fetch_assoc($select_img_rslt);
                    $user_photo = $select_img_assoc['photo'];
                    $delete_from = "../assets/photos/upload/user_profile_photos/".$user_photo;
                    unlink($delete_from);
                    // Update Data 
                    $update = "UPDATE users SET firstname = '$f_name' , lastname='$l_name' , email = '$email' WHERE id=$id";
                    $update_rslt = mysqli_query($db_connect,$update);
                    // File New Name & Location 
                    $file_name = $id . '.' . $upload_file_extension;
                    $new_location = '../assets/photos/upload/user_profile_photos/'.$file_name;
                    move_uploaded_file($upload_file_location,$new_location);
                    // Update database file 
                    $update_upload_file = "UPDATE users SET profile_photo='$file_name' WHERE id=$id";
                    $update_upload_file_rslt = mysqli_query($db_connect,$update_upload_file);

                    $_SESSION["edit"] = "User Information Updated";
                    header("location:../dashboard_users.php");
                }
                // Size Condition else
                else{
                    header("location:../edit.php?id=".$id);
                    $_SESSION["size_err"]= "File is too large Max= 2MB";
                }
            }
            // Extension Condition else
            else{
                header("location:../edit.php?id=".$id);
                $_SESSION["extension_err"]= "Invalid Extension";
            }
        }
        else{
            // Update Name & Email
            $update = "UPDATE users SET firstname = '$f_name' , lastname='$l_name' , email = '$email' WHERE id=$id";
            $update_rslt = mysqli_query($db_connect,$update);
            $_SESSION["edit"] = "User Information Updated";
            header("location:../dashboard_users.php");
        }
        
    }
    // Update Name , Email , Password & photo
    else{

        // Photo update proccess
        if($photo != ''){

            // Update Name , Email & Photo

            // File Information
            $upload_file = $_FILES['photo'];
            $upload_file_name = $upload_file['name'];
            $upload_file_size = $upload_file['size'];
            $upload_file_location = $upload_file['tmp_name'];

            $explode_file = explode('.',$upload_file_name);
            $upload_file_extension = end($explode_file);
        
            $extension_allow = array('png', 'jpg', 'jpeg');

            // Extension Condition if
            if(in_array($upload_file_extension,$extension_allow)){
                // Size Condition if
                if($upload_file_size <= 2000000 ){
                    // Delete Previous Photo 
                    $select_img = "SELECT * FROM users WHERE id=$id";
                    $select_img_rslt = mysqli_query($db_connect,$select_img);
                    $select_img_assoc = mysqli_fetch_assoc($select_img_rslt);
                    $user_photo = $select_img_assoc['photo'];
                    $delete_from = "../assets/photos/uploads/user_profile_photos/".$user_photo;
                    unlink($delete_from);
                    // Update Data 
                    $update = "UPDATE users SET firstname = '$f_name' , lastname='$l_name' , email = '$email' , password = '$hash_pass' WHERE id=$id";
                    $update_rslt = mysqli_query($db_connect,$update);
                    // File New Name & Location 
                    $file_name = $id . '.' . $upload_file_extension;
                    $new_location = '../assets/photos/upload/user_profile_photos/'.$file_name;
                    move_uploaded_file($upload_file_location,$new_location);
                    // Update database file 
                    $update_upload_file = "UPDATE users SET profile_photo='$file_name' WHERE id=$id";
                    $update_upload_file_rslt = mysqli_query($db_connect,$update_upload_file);

                    $_SESSION["edit"] = "User Information Updated";
                    header("location:../dashboard_users.php");
                }
                // Size Condition else
                else{
                    header("location:../edit.php?id=".$id);
                    $_SESSION["size_err"]= "File is too large Max= 2MB";
                }
            }
            // Extension Condition else
            else{
                header("location:../edit.php?id=".$id);
                $_SESSION["extension_err"]= "Invalid Extension";
            }
        }

        // Update Name , Email & Password

        else{
            $update = "UPDATE users SET firstname = '$f_name' , lastname='$l_name' , email = '$email' , password = '$hash_pass' WHERE id=$id";
            $update_rslt = mysqli_query($db_connect,$update);
            $_SESSION["edit"] = "User Information Updated";
            header("location:../dashboard_users.php");
        }
        
    }

    


?>