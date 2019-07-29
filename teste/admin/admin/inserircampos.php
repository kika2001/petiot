<?php 
include '../library/config.lib.php';
include $arrConfig['dir_admin'].'/library/db.lib.php';
include $arrConfig['dir_admin'].'/library/functions.lib.php';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<form action="inserir.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" ">
User: <input type="text" name="user" "><br><br>
Pass: <input type="password" name="pass" "><br><br>
Cliente:  <input type="radio" name="estado" value="1" >
Admin:  <input type="radio" name="estado" value="0" ><br><br>
Email : <input type="text" name="email" ><br><br>
<input type="submit"><br><br>

</form>

</body>
</html>


