<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>HOME</title>
  <link rel="stylesheet" href=" ../css/menus.css">
  
  
</head>

<body>
<?php 

  session_start();
  include '../library/config.lib.php';
include $arrConfig['dir_admin'].'/library/db.lib.php';
include $arrConfig['dir_admin'].'/library/functions.lib.php';
$addurl= '?user='. $_GET['user'];
include 'menu.php'; 
   
   
   
   ?>

 

			










  


  <div class="rodape">
    Ricardo Teixeira <span>&copy;2018</span>
  </div>
</body>
</html>