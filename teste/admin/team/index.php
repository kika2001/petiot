<?php
include '../../library/config.lib.php';
include $arrConfig['dir'].'library/db.lib.php';
include $arrConfig['dir'].'library/functions.lib.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listagem</title>
</head>
<body>
	
	<?php
	include 'data.ini.php';
	
	//pr($arrCAMPOS);
	?>





	<table border="1">
		<tr>
			<?php 
			foreach($arrCAMPOS['campos'] as $k => $v) {
				if($v['listar'] == 1) {
					echo '<td>'.$v['legenda'].'</td>';
				}
			}
			?>
			<td>Editar</td>
			<td>Eliminar</td>
		</tr>




		<?php
		$query = "SELECT * FROM ".$arrCAMPOS['tabela'];
		$res = my_query($query);
		foreach($res as $key => $value) {
			echo '<tr>';
			foreach($arrCAMPOS['campos'] as $k => $v) {
				if($v['listar'] == 1) {
					echo '<td>'.$value[$k].'</td>';
				}
			}
			echo '<td><a href="edicao.php?id='.$value['id'].'&nome='.$value['nome'].'&texto='.$value['texto'].'&img='.$value['img'].'&estado='.$value['estado'].'">x</a></td>';
		
			echo '<td><a href="eliminar.php?id='.$value['id'].'">x</a></td>';
			echo '</tr>';
		}
		?>
			


	</table>




</body>
</html>