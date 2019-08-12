<?php
include '../library/functions.lib.php';
include '../library/db.lib.php';


    $name = $_POST['name'];
    $username = $_POST['username'];
    $password =$_POST['password'];
    $re_pass = $_POST['re_password'];
    $email = $_POST['email'];
    $terms = $_POST['agree-term'];
   

    if ($terms == 1 && $password == $re_pass) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $query = "INSERT INTO users (nome,username,password,email,estado,tipo) VALUES ('".$name."','".$username."','".$password."','".$email."',1,'user')";
        pr($query);
        my_query($query);
        
        
        header ('location: login.php');
    }else{
        header ('location: login.php');
    }

    


?>