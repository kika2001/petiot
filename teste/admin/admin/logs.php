<?php
include '../library/config.lib.php';
include $arrConfig['dir_admin'].'/library/db.lib.php';
include $arrConfig['dir_admin'].'/library/functions.lib.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Menu-Logs</title>
  <link rel="stylesheet" href="<?php echo $arrConfig['url_admin']; ?>/css/menus.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<?php 
  session_start();
  
	include 'menu.php';

   ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listagem</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<?php

include $arrConfig['dir_admin'].'/admin/data.ini.php';

	
	// Create connection
	$db = new mysqli($arrConfig['servername'],$arrConfig['username'],$arrConfig['password'],$arrConfig['dbname']);
	// Check connection
	if ($db->connect_error) {
		die("Connection failed: " . $db->connect_error);
	} 
	echo nl2br("Connected successfully\n");
	
	//Query
	$resource = $db->query('SELECT * FROM estado');

	?>
<div class="caixatabela">
<table border="1">
		<tr>
			<?php 
			foreach($arrCAMPOSlogs['campos'] as $k => $v) {
				if($v['listar'] == 1) {
					echo '<th>'.$v['legenda'].'</th>';
				}
			}
			?>
			<th>Eliminar</th>
		</tr>




		<?php
		$query = "SELECT * FROM ".$arrCAMPOSlogs['tabela'];
		
		$res = my_query($query);
		
		foreach($res as $key => $value) 
		{
			echo '<tr>';
			foreach($arrCAMPOSlogs['campos'] as $k => $v) 
			{
				if($v['listar'] == 1) 
				{
					
					echo '<td>'.$value[$k].'</td>';	
						
				}
			}
				
			echo '<td><a href="eliminarlogs.php?id='.$value['id'].'">x</a></td>';
			echo '</tr>';
			
		}
		
		?>

			


	</table>
	</div>





	<div class="caixacomandoslogs">
		<td><a href="eliminartudologs.php">Eliminar Tudo</a></td>
		</div>

	




  <div class="rodape">
    Ricardo Teixeira <span>&copy;2018</span>
  </div>
</body>
</html>