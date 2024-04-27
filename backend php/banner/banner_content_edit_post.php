<?php 
    session_start();
    // Database Require
    require '/xampp/htdocs/L/database/database.php';

    // Banner Contents Variable 
    $id = $_POST['id'];
    $sub_title = $_POST['sub_title'];
    $title = $_POST['title'];
    $description = $_POST['desc'];

    // Added Previous before error Information 
    $_SESSION['prv_sub_title'] = $sub_title;
    $_SESSION['prv_title'] = $title;
    $_SESSION['prv_desc'] = $description;

    // Empty Conditon Start
    if(empty($sub_title)){
        $_SESSION['banner_empty_err']= 'Please enter your sub title!';
        header('location:banner_content_edit.php?id='.$id);
    }
    else if(empty($title)){
        $_SESSION['banner_empty_err']= 'Please enter your title!';
        header('location:banner_content_edit.php?id='.$id);
    }
    else if(empty($description)){
        $_SESSION['banner_empty_err']= 'Please Enter Your Description!';
        header('location:banner_content_edit.php?id='.$id);
    }
    else{ 
        $update = "UPDATE  banner_content SET sub_title='$sub_title', title='$title', description='$description' WHERE id=$id";
        $update_rslt = mysqli_query($db_connect,$update);
        // After Added Unset Previous Content
        unset($_SESSION['prv_sub_title']);
        unset($_SESSION['prv_title']);
        unset($_SESSION['prv_desc']);
        $_SESSION['banner_content_updated']= 'Banner Content Updated Successfully';
        header('location:banner_content.php');
    }

?>