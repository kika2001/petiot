<?php

include '../library/config.lib.php';
include '../library/functions.lib.php';
include '../library/db.lib.php';

$error = '';
$texto="Prencha os campos";


        if(isset($_POST['username']) && isset($_POST['password'])) {
          
          $username = $_POST['username'];
          $password = $_POST['password'];
    
          $query = "SELECT * FROM users WHERE username=" . "'$username'" . " AND password=" . "'$password'"; 
          pr($query);
          $res = my_query($query);
          pr($res);

          $size = sizeof($res); 
          pr($size);
          
          for ($i=0; $i < $size; $i++) { 
      
            if($res[$i]['tipo'] == 'admin' && $res[$i]['estado'] == 1) {
              
              $data = date("Y-m-d H:i:s"); 
              $b = "INSERT INTO logs(username,data) VALUES('".$username."','".$data."');";
              inserir($b);
              header('Location: index.php?user='.$username);
              mysqli_close($conn);
            
            } elseif ($res[$i]['tipo'] == 'user' && $res[$i]['estado'] == 1) {
              $data = date("Y-m-d H:i:s"); 
              $b = "INSERT INTO logs(username,data) VALUES('".$username."','".$data."');";
              inserir($b);
              header('Location: site.php');
              mysqli_close($conn);
            
            } elseif ($res[$i]['tipo'] == 'professor' && $res[$i]['estado'] == 1) {
              $data = date("Y-m-d H:i:s"); 
              $b = "INSERT INTO logs(username,data) VALUES('".$username."','".$data."');";
              inserir($b); 
              header('Location: professor_home.php');
              mysqli_close($conn);
            }
      }
    }


     
      

 
?>