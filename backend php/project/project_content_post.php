<?php 
    session_start();
    // Database Require
    require '/xampp/htdocs/L/database/database.php';

    // Banner Contents Variable 
    $category = $_POST['category'];
    $project_name = $_POST['project_name'];
    $description = $_POST['desc'];
    $user_id = $_SESSION['id'];

    // Added Previous before error Information 
    $_SESSION['prv_category'] = $category;
    $_SESSION['prv_project_name'] = $project_name;
    $_SESSION['prv_desc'] = $description;

    // File Upload Variable
    $upload_project_img = $_FILES['project_img'];
    $upload_project_img_name = $upload_project_img["name"];
    $upload_project_img_size = $upload_project_img["size"];
    $upload_project_img_location = $upload_project_img["tmp_name"];
    $explode_project_img_name = explode(".",$upload_project_img_name);
    $upload_project_img_extension = end($explode_project_img_name);

    // File Upload Variable
    $upload_cover_img = $_FILES['cover_img'];
    $upload_cover_img_name = $upload_cover_img["name"];
    $upload_cover_img_size = $upload_cover_img["size"];
    $upload_cover_img_location = $upload_cover_img["tmp_name"];
    $explode_cover_img_name = explode(".",$upload_cover_img_name);
    $upload_cover_img_extension = end($explode_cover_img_name);

    // Extension Allowed for Uploaded File
    $allow_extension = array("png","jpg","jpeg");


    // Empty Conditon Start
    if(empty($category)){
        $_SESSION['project_empty_err']= 'Please enter your category!';
        header('location:add_project_content.php');
    }
    else if(empty($project_name)){
        $_SESSION['project_empty_err']= 'Please enter your Project Name!';
        header('location:add_project_content.php');
    }
    else if(empty($description)){
        $_SESSION['project_empty_err']= 'Please Enter Your Description!';
        header('location:add_project_content.php');
    }
    else if($upload_project_img_name = ""){
        $_SESSION['file_err']= 'Please Enter Project Image';
        header('location:add_project_content.php');
    }
    else if($upload_cover_img_name = ""){
        $_SESSION['file_err']= 'Please Enter Conver Image';
        header('location:add_project_content.php');
    }
    else{ 
        // Upload File Size if
        if($upload_project_img_size <= 3000000){
            // Upload File Extension check if
            if(in_array($upload_project_img_extension,$allow_extension)){
                // Database Insert 
                $insert = "INSERT INTO projects(user_id, category, project_name, project_details)VALUES('$user_id','$category','$project_name','$description')";
                $insert_rslt = mysqli_query($db_connect,$insert);
                // Database Inserted ID
                $insert_id = mysqli_insert_id($db_connect);
                // Uploaded File New Name
                $project_img_name = $insert_id . "." . $upload_project_img_extension;
                // Uploaded File New Location 
                $new_location_project = "../../assets/photos/index/project/main/".$project_img_name;
                move_uploaded_file($upload_project_img_location,$new_location_project);
                // Update File on Database 
                $update_project_file = "UPDATE projects SET project_img='$project_img_name' WHERE id=$insert_id";
                $update_project_file_rslt = mysqli_query($db_connect,$update_project_file);
                // Cover Image Upload
                if($upload_cover_img_size <= 3000000){
                    if(in_array($upload_cover_img_extension,$allow_extension)){
                        // Uploaded File New Name
                        $cover_img_name = $insert_id . "." . $upload_cover_img_extension;
                        // Uploaded File New Location 
                        $new_location_cover = "../../assets/photos/index/project/cover/".$cover_img_name;
                        move_uploaded_file($upload_cover_img_location,$new_location_cover);
                        // Update File on Database 
                        $update_cover_file = "UPDATE projects SET project_cover_img='$cover_img_name' WHERE id=$insert_id";
                        $update_cover_file_rslt = mysqli_query($db_connect,$update_cover_file);
                        // After Added Unset Previous Content
                        unset($_SESSION['prv_category']);
                        unset($_SESSION['prv_project_name']);
                        unset($_SESSION['prv_desc']);
                        // After Signup Unset Previous end
                        $_SESSION['successful'] = 'Content Added Successsfully';
                        header('location:add_project_content.php');
                    }
                    else{
                        $_SESSION['extension_err']= 'Ivalid File Extension Please enter JPG JPEG PNG file';
                        header('location:add_project_content.php');
                    }
                }
                else{
                    $_SESSION['size_err']= 'File Size is too large (Max 3MB)';
                    header('location:add_project_content.php');
                }
            }
            // Upload File Extension check else
            else{
                $_SESSION['extension_err']= 'Ivalid File Extension Please enter JPG JPEG PNG file';
                header('location:add_project_content.php');
            }
        }
        // Upload File Size else
        else{
            $_SESSION['size_err']= 'File Size is too large (Max 3MB)';
            header('location:add_project_content.php');
        }
    }

?>