<?php
include '../library/functions.lib.php';
include '../library/db.lib.php';


    $name = $_POST['name'];
    $username = $_POST['username'];
    $password =$_POST['password'];
    $re_pass = $_POST['re_password'];
    $email = $_POST['email'];
    $terms = $_POST['agree-term'];

           
     
        $query = "SELECT * FROM users";        
        $res = my_query($query);   
        
        $size = sizeof($res); 
        
        for ($i=0; $i <$size; $i++) { 
           
        if ($username == $res[$i]['username']) 
        {
           $erro=2;
        }
           
    
        }



    if ($terms == 1 && $password == $re_pass ) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $query = "INSERT INTO users (nome,username,password,email,estado,tipo,token) VALUES ('".$name."','".$username."','".$password."','".$email."',1,'user','0')";
        pr($query);
        my_query($query);
        die();
        
        header ('location: login.php');
    }elseif ($erro==2) {
        header ('location: register.php?erro=2');
    
        
    }else {
        header ('location: register.php?erro=1');
    }

    


?>