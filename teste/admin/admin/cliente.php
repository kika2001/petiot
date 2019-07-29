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
	include 'menu.php';

include $arrConfig['dir_admin'].'/admin/data.ini.php';


	//pr($arrCAMPOS);
	
	// Create connection
	$db = new mysqli($arrConfig['servername'],$arrConfig['username'],$arrConfig['password'],$arrConfig['dbname']);
	// Check connection
				if ($db->connect_error) {
					die("Connection failed: " . $db->connect_error);
				} 
	echo nl2br("Connected successfully\n");
	
	//Query
	$resource = $db->query('SELECT * FROM login');

	?>
<table>
		<tr class="table100-head"> <?php 
			foreach($arrCAMPOSlogin['campos'] as $k => $v) {
				if($v['listar'] == 1) {
					echo '<th>'.$v['legenda'].'</th>';
				}
			}
			?>
			<th>Editar</th>
			<th>Eliminar</th>
		</tr>




		<?php
		$query = "SELECT * FROM ".$arrCAMPOSlogin['tabela'];
		$res = my_query($query);
		foreach($res as $key => $value) 
		{
			echo '<tr>';
			foreach($arrCAMPOSlogin['campos'] as $k => $v) 
			{
				if($v['listar'] == 1) 
				{
					
					echo '<td class="column2">'.$value[$k].'</td >';	
						
				}
			}
			echo '<td><a href="edicao.php?id='.$value['id'].'&user='.$value['user'].'&pass='.$value['pass'].'&email='.$value['email'].'&estado='.$value['estado'].'">x</a></td>';
		
			echo '<td><a href="eliminar.php?id='.$value['id'].'">x</a></td>';
			echo '</tr>';
		}

		?>

			


	</table>

















	<div class="caixacomandos">
		<td><a href="inserircampos.php">Inserir</a></td>
		</div>
	

</body>
</html>
  

  <div class="rodape">
    Ricardo Teixeira <span>&copy;2018</span>
  </div>
</body>
</html>