<?php
include '../library/config.lib.php';
include $arrConfig['dir_admin'].'/library/db.lib.php';
include $arrConfig['dir_admin'].'/library/functions.lib.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Menu-Cliente</title>
  <link rel="stylesheet" href="<?php echo $arrConfig['url_admin']; ?>/css/menus.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
<?php 
  session_start();


   ?>
<?php 
  session_start();
  
	include 'menu.php';

   ?>


	
	<?php
include $arrConfig['dir_admin'].'/admin/data.ini.php';
	
	//pr($arrCAMPOS);
	?>




	
	



  <div class="rodape">
    Ricardo Teixeira <span>&copy;2018</span>
  </div>
</body>
</html>