<?php
include '../../library/config.lib.php';
include '../../library/functions.lib.php';
include '../../library/db.lib.php';
include 'data.ini.php';
?>
<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../assets/css/style.css">
	<title>Produtos - Listagem</title>
</head>
<body>
		<div class ="card">
			<div class ="table-stats order-table ov-h">
		<table class ="table">
		<thead>
		<tr>
			<?php 
			foreach($arrcampos['campos'] as $k => $v) {
				if($v['listar'] == 1) {
					echo '<th>'.$v['legenda'].'</th>';
				}
			}
			?>
			<th>Editar</th>
			<th>Eliminar</th>
		</tr>
		</thead>
		<tbody>
		<?php
		$query = "SELECT * FROM ".$arrcampos['tabela'];
		$res = my_query($query);
		foreach($res as $key => $value) {
			echo '<tr>';
			foreach($arrcampos['campos'] as $k => $v) {
				if($v['listar'] == 1) 
					if (($k == 'estado')&&($value['estado']==1)) {
						echo '<td>'.'<img src="../feeder/icons/ativo.png" width="42" height="42" '."/>".'</td>';
					}else{
						if (($k == 'estado')&&($value['estado']==0)) {
							echo '<td>'.'<img src="../feeder/icons/inativo.png" width="42" height="42"'."/>".'</td>';
						}else{
							echo '<td> <span class ="name">'.$value[$k].'</span></td>';
							}
						}
			}
		
				
			echo '<td><a href="editar.php?id='.$value['id'].'&user='.$_GET['user'].'"><img src="../feeder/icons/editar.png" width="42" height="42"</a></td>';
			echo '<td><a href="eliminar.php?id='.$value['id'].'&user='.$_GET['user'].'"><img src="../feeder/icons/delete.png" width="42" height="42"</a></td>';
			echo '</tr>';

		}
		
		?>
	<tbody>
	</table>
	</div>
	</div>
	<table border ="1">
		<td>
		<a href="../index.php?user=<?php echo $_GET['user'] ?>"><img src="../feeder/icons/back.png" width="42" height="42"</a>	
		<td>
		<a href="inserir.php?user=<?php echo $_GET['user'] ?>"><img src="../feeder/icons/inserir.png" width="42" height="42"</a>
		</td>
		</td>
	</table>
</body>
</html>