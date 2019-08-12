<?php
include '../../library/functions.inc.php';
include '../../library/db.lib.php';
include 'data.ini.php';
?>

<?php
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../contactos/css.css">
	<title>Logs - Listagem</title>
</head>
<body>

	<table border="1">
		<tr>
			<?php 
			foreach($arrcampos['campos'] as $k => $v) {
				if($v['listar'] == 1) {
					echo '<td>'.$v['legenda'].'</td>';
				}
			}
			?>
			<td>Eliminar</td>
		</tr>
	
		<?php

		$p = paginacao();
		$inicio=($p-1)*10;

		$query="SELECT * FROM ".$arrcampos['tabela']." LIMIT $inicio,10";
		$res = my_query($query);

		if ($res == null) {
			header("Location:index.php?p=1");
		}

		foreach($res as $key => $value) {
			echo '<tr>';
			foreach($arrcampos['campos'] as $k => $v) {
				if($v['listar'] == 1) {
					echo '<td>'.$value[$k].'</td>';
				}
			}
			echo '<td><a href="eliminar.php?id='.$value['id'].'"><img src="../contactos/icons/delete.png" width="42" height="42"</a></td>';
			echo '</tr>';
		}
		?>
	</table>
	<table border ="1">
		<td>
		<a href="index.php?p=<?php echo $p+1?>"> <img src="../contactos/icons/plus.png" width="42" height="42" alt=""></a>
		</td>
		<td>
		<a href="index.php?p=<?php echo $p-1?>"> <img src="../contactos/icons/minus.png" width="42" height="42" alt=""></a>
		</td>
	</table>
	<table border ="1">
		<td>
		<a href="../index.php?user=<?php echo $_GET['user'] ?>"><img src="../contactos/icons/back.png" width="42" height="42"</a>	
		</td>
	</table>
	
</body>
</html>