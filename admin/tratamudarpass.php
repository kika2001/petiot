<?php
include '../library/functions.lib.php';
include '../library/db.lib.php';


    $token = $_GET['token'];
    $password =$_POST['password'];
    $re_pass = $_POST['re_password'];

   

           
     
        $query = "SELECT * FROM users WHERE token = '".$token."'";        
        $res = my_query($query);   
        
        $size = sizeof($res); 
        
        



    if ($password == $re_pass) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $query = "UPDATE users SET token = '0'AND password ='".$password."' WHERE token = ".$token."";
        pr($query);
        
        my_query($query);
        
        
        header ('location: login.php');
    }

    


?>