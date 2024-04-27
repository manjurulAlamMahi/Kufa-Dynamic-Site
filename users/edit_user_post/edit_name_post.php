<?php 
    session_start();
    // Database Require
    require '/xampp/htdocs/L/database/database.php';
    // Edit User Variable
    $id = $_POST["id"];
    $f_name= $_POST["f_name"];
    $l_name= $_POST["l_name"];

    // empty condition 
    if(empty($f_name)){
        header("location:../edit_user/edit_user_profile_name.php?id=".$id);
        $_SESSION["fname_err"]= "Please Enter Your First Name!";
    }
    else if(empty($l_name)){
        header("location:../edit_user/edit_user_profile_name.php?id=".$id);
        $_SESSION["lname_err"]= "Please Enter Your Last Name!";
    }
    else{
        $update = "UPDATE users SET firstname = '$f_name' , lastname='$l_name' WHERE id=$id";
        $update_rslt = mysqli_query($db_connect,$update);
        $_SESSION["name_chng"] = "Name Changed Succesfully!";
        header("location:../../dashboard.php");
    }



    


?>