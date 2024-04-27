<?php 
session_start();
// Database Require
require '/xampp/htdocs/L/database/database.php';

// Banner Contents Variable 
$skill_name = $_POST['skill_name'];
$skill_details = $_POST['skill_details'];
$skill_percentage = $_POST['skill_percentage'];
// Preg Match 
$number = preg_match("@[0-9]@",$skill_percentage);

// Empty Conditon Start
if(empty($skill_name)){
    $_SESSION['skill_err']= 'Please Select a Skill Name!';
    header('location:add_skill.php');
}
else if(empty($skill_details)){
    $_SESSION['skill_err']= 'Please Enter Your Skill Details!';
    header('location:add_skill.php');
}
else if(empty($skill_percentage)){
    $_SESSION['skill_err']= 'Please Enter Your Skill Percentage!';
    header('location:add_skill.php');
}
else if(!$number ){
    $_SESSION['skill_err']= 'Percentage must be number!';
    header('location:add_skill.php');
}
else{
    if(0 < $skill_percentage){
        if($skill_percentage <= 100){
            $insert = "INSERT INTO skills(name, details, percentage)VALUES('$skill_name','$skill_details','$skill_percentage')";
            $insert_rslt = mysqli_query($db_connect,$insert);
            $_SESSION['skill_added']= 'Skill Added Successfully';
            header('location:add_skill.php');
        }
        else{
            $_SESSION['skill_err']= 'Percentage Must be 0-100 %';
            header('location:add_skill.php');
        }
    }
    else{
        $_SESSION['skill_err']= 'Percentage Must be 0-100 %';
        header('location:add_skill.php');
    }
    
}

?>