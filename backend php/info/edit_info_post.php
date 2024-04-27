<?php 
    session_start();
    // Database Require
    require '/xampp/htdocs/L/database/database.php';

    // Banner Contents Variable 
    $id = $_POST['id'];
    $o_address = $_POST['o_address'];
    $p_number = $_POST['p_number'];
    $email = $_POST['email'];

    // Added Previous before error Information 
    $_SESSION['prv_o_address'] = $o_address;
    $_SESSION['prv_p_number'] = $p_number;
    $_SESSION['prv_email'] = $email;

    // Empty Conditon Start
    if(empty($o_address)){
        $_SESSION['info_empty_err']= 'Please enter your address!';
        header('location:edit_info.php?id='.$id);
    }
    else if(empty($p_number)){
        $_SESSION['info_empty_err']= 'Please enter your number!';
        header('location:edit_info.php?id='.$id);
    }
    else if(empty($email)){
        $_SESSION['info_empty_err']= 'Please Enter Your email!';
        header('location:edit_info.php?id='.$id);
    }
    else{ 
        $update = "UPDATE information SET address='$o_address', number='$p_number', email='$email' WHERE id=$id";
        $update_rslt = mysqli_query($db_connect,$update);
        // After Added Unset Previous Content
        unset($_SESSION['prv_o_address']);
        unset($_SESSION['prv_p_number']);
        unset($_SESSION['prv_email']);
        $_SESSION['information_updated']= 'Information Updated Successfully';
        header('location:view_info.php');
    }

?>