<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Maquina</title>
  <link rel="stylesheet" href=" ../css/menus.css">
  
  
</head>

<body>
	<?php 

	session_start();
	include '../library/config.lib.php';
	include '../library/db.lib.php';
	include '../library/functions.lib.php';
	$addurl= '?user='. $_GET['user'];
	include 'menu.php'; 

   ?>


			










  


  <div class="rodape">
    Ricardo Teixeira <span>&copy;2018</span>
  </div>
</body>
</html>