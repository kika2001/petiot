<?php
include '../library/functions.lib.php';
include '../library/db.lib.php';
include '../library/config.lib.php';

    $token = $_GET['token'];
    $password =$_POST['password'];
    $re_pass = $_POST['re_password'];

    echo $token;echo '<br>';
    echo $password;echo '<br>';
    echo $re_pass;echo '<br>';

           
     
        $query = "SELECT * FROM users WHERE token = ".$token;        
        $res = my_query($query);   
        
        $size = sizeof($res); 
        
        



    if ($password == $re_pass) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $query = "UPDATE users SET password ='".$password."' AND token = '0' WHERE token = ".$token."";
        pr($query);
        die();
        my_query($query);
        
        
        header ('location: login.php');
    }

    


?>