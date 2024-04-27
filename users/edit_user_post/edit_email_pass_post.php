<?php 
    session_start();
    // Database Require
    require '/xampp/htdocs/L/database/database.php';
    // Edit User Variable
    $id = $_POST["id"];
    $email= $_POST["email"];
    $old_pass = $_POST["old_pass"];
    $new_pass = $_POST["new_pass"];
    $con_pass = $_POST["con_pass"];
    $hash_pass = password_hash($new_pass, PASSWORD_DEFAULT);
    // Select Item
    $select = "SELECT * FROM users WHERE id='$id'";
    $select_rslt = mysqli_query($db_connect,$select);
    $old_pass_assoc = mysqli_fetch_assoc($select_rslt);
    $old_password = $old_pass_assoc['password'];
    // Select Item
    // Pass Empty Condition if
    if(!empty($old_pass) && !empty($new_pass) && !empty($con_pass)){
        // old pass match if
        if(password_verify($old_pass, $old_password)){
            // Confirm New Pass if
            if($new_pass == $con_pass){
                $update = "UPDATE users SET email = '$email' , password = '$hash_pass' WHERE id=$id";
                $update_rslt = mysqli_query($db_connect,$update);
                $_SESSION["email"] = "Email $ Password Updated Successfully";
                header("location:../../dashboard.php");
            }
            // Confirm New Pass else
        }
        // old pass match else
        else{
            $_SESSION['old_pass_err']= 'Please Enter Your Old Password!';
            header("location:../edit_user/edit_user_profile_email_pass.php?id=".$id);
        }
    }
    // Pass Empty Condition else
    else{
        // email empty condition if
        if(!empty($email)){
            // Valid Email if
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $update = "UPDATE users SET email = '$email' WHERE id=$id";
                $update_rslt = mysqli_query($db_connect,$update);
                $_SESSION["email"] = "Email Updated Successfully";
                header("location:../../dashboard.php");
            }
            // Valid Email else
            else{
                $_SESSION['valid_email_err']= 'Please Enter Valid Email Address!';
                header("location:../edit_user/edit_user_profile_email_pass.php?id=".$id);
            }
        }
        // email empty condition else
        else{
            header("location:../edit_user/edit_user_profile_email_pass.php?id=".$id);
            $_SESSION["email"]= "Please Enter Your Email!";
        }
    }



