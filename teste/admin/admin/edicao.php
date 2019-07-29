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
</head>
<body>

<form action="editar.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
User: <input type="text" name="user" value="<?php echo $_GET['user']  ?>"><br><br>
Password: <input type="password" name="pass" value="<?php echo $_GET['pass']  ?>"><br><br>
email: <input type="text" name="email" value="<?php echo $_GET['email']  ?>"><br><br>
<input type="hidden" name="estado" value="0" >
Estado:
<?php 
Estado: 

	 $sql ="SELECT * FROM team WHERE estado=1";
	$res=my_query($sql);
	$size=sizeof($res);
	$i = $_GET['id'];
	if ($res[$i]['estado'] == 1) {
		?>
		<input type="checkbox" name="estado" value="1" checked="1" >
		<?php 
		}else{
			?>
			<input type="checkbox" name="estado" value="1" checked="0" >
			<?php 
		}
	?>
<br>

<input type="submit"><br><br>

</form>

</body>
</html>


