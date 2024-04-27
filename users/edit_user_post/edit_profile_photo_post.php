<?php 
    session_start();
    // Database Require
    require '/xampp/htdocs/L/database/database.php';
    // Edit User Variable
    $id = $_POST["id"];
    $photo = $_FILES['profile_photo']['name'];

    // Photo update proccess
    if($photo != ''){

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
                $delete_from = "../../assets/photos/upload/user_profile_photos/".$user_photo;
                unlink($delete_from);
                // File New Name & Location 
                $file_name = $id . '.' . $upload_file_extension;
                $new_location = '../../assets/photos/upload/user_profile_photos/'.$file_name;
                move_uploaded_file($upload_file_location,$new_location);
                // Update database file 
                $update_upload_file = "UPDATE users SET profile_photo='$file_name' WHERE id=$id";
                $update_upload_file_rslt = mysqli_query($db_connect,$update_upload_file);

                $_SESSION["pp_success"] = "Profile Photo IS Changed";
                header("location:../../dashboard.php");
            }
            // Size Condition else
            else{
                header("location:../edit_user/edit_user_profile_photo.php?id=".$id);
                $_SESSION["size_err"]= "File is too large Max= 2MB";
            }
        }
        // Extension Condition else
        else{
            header("location:../edit_user/edit_user_profile_photo.php?id=".$id);
            $_SESSION["extension_err"]= "Invalid Extension";
        }
    }
    else{
        $_SESSION["file_err"] = "Please Insert a Photo Before Submit!";
        header("location:../edit_user/edit_user_profile_photo.php?id=".$id);
    }


?>