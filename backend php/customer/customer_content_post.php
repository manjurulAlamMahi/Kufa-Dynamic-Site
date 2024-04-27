<?php 
    session_start();
    // Database Require
    require '/xampp/htdocs/L/database/database.php';

    // Banner Contents Variable 
    $name = $_POST['name'];
    $title = $_POST['title'];
    $quotes = $_POST['quotes'];

    // Added Previous before error Information 
    $_SESSION['prv_name'] = $name;
    $_SESSION['prv_title'] = $title;
    $_SESSION['prv_quotes'] = $quotes;

    // File Upload Variable
    $upload_customer_img = $_FILES['customer_photo'];
    $upload_customer_img_name = $upload_customer_img["name"];
    $upload_customer_img_size = $upload_customer_img["size"];
    $upload_customer_img_location = $upload_customer_img["tmp_name"];
    $explode_customer_img_name = explode(".",$upload_customer_img_name);
    $upload_customer_img_extension = end($explode_customer_img_name);

    // Extension Allowed for Uploaded File
    $allow_extension = array("png","jpg","jpeg");


    // Empty Conditon Start
    if(empty($name)){
        $_SESSION['customer_empty_err']= 'Please enter your Customer Name!';
        header('location:add_customer_content.php');
    }
    else if(empty($title)){
        $_SESSION['customer_empty_err']= 'Please enter your title!';
        header('location:add_customer_content.php');
    }
    else if(empty($quotes)){
        $_SESSION['customer_empty_err']= 'Please Enter Your Quotes!';
        header('location:add_customer_content.php');
    }
    else if($upload_customer_img_name = ""){
        $_SESSION['file_err']= 'Please Enter Customer Photo';
        header('location:add_customer_content.php');
    }
    else{ 

        // Upload File Size if
        if($upload_customer_img_size <= 3000000){
            // Upload File Extension check if
            if(in_array($upload_customer_img_extension,$allow_extension)){
                // Database Insert 
                $insert = "INSERT INTO customer(name, title, quotes)VALUES('$name','$title','$quotes')";
                $insert_rslt = mysqli_query($db_connect,$insert);
                // Database Inserted ID
                $insert_id = mysqli_insert_id($db_connect);
                // Uploaded File New Name
                $customer_img_name = $insert_id . "." . $upload_customer_img_extension;
                // Uploaded File New Location 
                $new_location = "../../assets/photos/index/customer/".$customer_img_name;
                move_uploaded_file($upload_customer_img_location,$new_location);
                // Update File on Database 
                $update_file = "UPDATE customer SET customer_img='$customer_img_name' WHERE id=$insert_id";
                $update_file_rslt = mysqli_query($db_connect,$update_file);
                // After Added Unset Previous Content
                unset($_SESSION['prv_name']);
                unset($_SESSION['prv_title']);
                unset($_SESSION['prv_quotes']);
                // After Signup Unset Previous end
                $_SESSION['successful'] = 'Content Added Successsfully';
                header('location:add_customer_content.php');
            }
            // Upload File Extension check else
            else{
                $_SESSION['extension_err']= 'Ivalid File Extension Please enter PNG file';
                header('location:add_customer_content.php');
            }
        }
        // Upload File Size else
        else{
            $_SESSION['size_err']= 'File Size is too large (Max 3MB)';
            header('location:add_customer_content.php');
        }
    }

?>