<?php 
    session_start();
    // Database Require
    require '/xampp/htdocs/L/database/database.php';

    // Banner Contents Variable 
    $sub_title = $_POST['sub_title'];
    $title = $_POST['title'];
    $description = $_POST['desc'];

    // Added Previous before error Information 
    $_SESSION['prv_sub_title'] = $sub_title;
    $_SESSION['prv_title'] = $title;
    $_SESSION['prv_desc'] = $description;

    // File Upload Variable
    $upload_about_img = $_FILES['about_image'];
    $upload_about_img_name = $upload_about_img["name"];
    $upload_about_img_size = $upload_about_img["size"];
    $upload_about_img_location = $upload_about_img["tmp_name"];
    $explode_about_img_name = explode(".",$upload_about_img_name);
    $upload_about_img_extension = end($explode_about_img_name);

    // Extension Allowed for Uploaded File
    $allow_extension = array("png");


    // Empty Conditon Start
    if(empty($sub_title)){
        $_SESSION['about_empty_err']= 'Please enter your sub title!';
        header('location:add_about_content.php');
    }
    else if(empty($title)){
        $_SESSION['about_empty_err']= 'Please enter your title!';
        header('location:add_about_content.php');
    }
    else if(empty($description)){
        $_SESSION['about_empty_err']= 'Please Enter Your Description!';
        header('location:add_about_content.php');
    }
    else if($upload_about_img_name = ""){
        $_SESSION['file_err']= 'Please Enter Image';
        header('location:add_about_content.php');
    }
    else{ 

        // Upload File Size if
        if($upload_about_img_size <= 3000000){
            // Upload File Extension check if
            if(in_array($upload_about_img_extension,$allow_extension)){
                // Database Insert 
                $insert = "INSERT INTO about_content(sub_title, title, description)VALUES('$sub_title','$title','$description')";
                $insert_rslt = mysqli_query($db_connect,$insert);
                // Database Inserted ID
                $insert_id = mysqli_insert_id($db_connect);
                // Uploaded File New Name
                $about_img_name = $insert_id . "." . $upload_about_img_extension;
                // Uploaded File New Location 
                $new_location = "../../assets/photos/index/about/".$about_img_name;
                move_uploaded_file($upload_about_img_location,$new_location);
                // Update File on Database 
                $update_file = "UPDATE about_content SET about_image='$about_img_name' WHERE id=$insert_id";
                $update_file_rslt = mysqli_query($db_connect,$update_file);
                // After Added Unset Previous Content
                unset($_SESSION['prv_sub_title']);
                unset($_SESSION['prv_title']);
                unset($_SESSION['prv_desc']);
                // After Signup Unset Previous end
                $_SESSION['successful'] = 'Content Added Successsfully';
                header('location:add_about_content.php');
            }
            // Upload File Extension check else
            else{
                $_SESSION['extension_err']= 'Ivalid File Extension Please enter PNG file';
                header('location:add_about_content.php');
            }
        }
        // Upload File Size else
        else{
            $_SESSION['size_err']= 'File Size is too large (Max 3MB)';
            header('location:add_about_content.php');
        }
    }

?>