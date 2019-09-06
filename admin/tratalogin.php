<?php

include '../library/config.lib.php';
include '../library/functions.lib.php';
include '../library/db.lib.php';

$error = '';
$texto="Prencha os campos";


        if(isset($_POST['username']) && isset($_POST['password'])) {
          
          $username = $_POST['username'];
          $password = $_POST['password'];
    
          $query = "SELECT * FROM users WHERE username=" . "'$username'"; 

          $res = my_query($query);
  

          $size = sizeof($res); 
      
          
          
          for ($i=0; $i < $size; $i++) { 
            $hash = $res[$i]['password'];
       
            
            if($res[$i]['tipo'] == 'admin' && $res[$i]['estado'] == 1 && password_verify($password, $hash)) {
              
              $data = date("Y-m-d H:i:s"); 
              $b = "INSERT INTO logs(username,data) VALUES('".$username."','".$data."');";
              inserir($b);
              header('Location: index.php?user='.$username);
              mysqli_close($conn);
            
            } elseif ($res[$i]['tipo'] == 'user' && $res[$i]['estado'] == 1 && password_verify($password, $hash)) {
              $data = date("Y-m-d H:i:s"); 
              $b = "INSERT INTO logs(username,data) VALUES('".$username."','".$data."');";
              inserir($b);
              header('Location: site.php');
              mysqli_close($conn);
            
            } elseif ($res[$i]['tipo'] == 'professor' && $res[$i]['estado'] == 1 && password_verify($password, $hash)) {
              $data = date("Y-m-d H:i:s"); 
              $b = "INSERT INTO logs(username,data) VALUES('".$username."','".$data."');";
              inserir($b); 
              header('Location: professor_home.php');
              mysqli_close($conn);
            }
      }
    }


     
      

 
?>