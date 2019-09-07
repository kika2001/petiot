<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PetIoT - Home</title>
  <link rel="stylesheet" href=" ../css/menus.css"> 
</head>

<body>
  
	<?php 
		session_start();
		include '../library/config.lib.php';
		include '../library/db.lib.php';
		include '../library/functions.lib.php';
	 
		$addurl= '?user='. $_GET['user'];
		$user= $_GET['user'];
		include 'menu.php';
	?>

	<div id="maquinas" class="centered">
		<?php
		// Formulate Query
		$query = "SELECT * FROM maquina WHERE user='". $user. "'";
		// Perform Query
		$maquinas = my_query($query);
		//Verificar se esta vazio
		if (!$maquinas) {
			$maquina= "Não existe nenhuma máquina"; //in case the user is dumb (or a Ricardinho)
		} else {
			if (sizeof($maquinas) > 1) {
				// More than one machine
				echo "<br>ID Maquina: ";
				$maquina = $maquinas[0]['nome_maq'];
				$tempo_minimo = $maquinas[0]['tempo_minimo'];
				echo $maquina;
				echo "<br>";
			} else {
				// Only one machine
					//echo "<br>Maquina: ";
				$maquina = $maquinas[0]['nome_maq'];
					//echo $maquina;
				$tempo_minimo = $maquinas[0]['tempo_minimo'];
				echo "<br><br>";
				// Formulate Query
				$query = "SELECT * FROM estado WHERE idmaquina='". $maquinas[0]['idmaquina']. "'";
				// Perform Query
				$tempos = my_query($query);
				// Last time registration
				$date1 = $tempos[sizeof($tempos)-1]['data'];
					//echo "Ultimo registo: ". $date1. "<br><br>";
				// Time diference for now
				$date2 = date("Y-m-d H:i");
					//echo "Data actual: ". $date2. "<BR>";
								 
				//Convert them to timestamps.
				$date1Timestamp = strtotime($date1);
				$date2Timestamp = strtotime($date2);
				 
				//Calculate the difference.
				$difference = ($date2Timestamp - $date1Timestamp) / 60;
					//echo $difference. "<br>";
				$tempo_resultado = ($tempo_minimo * 60 - $difference);
					//echo "( ". $tempo_minimo. " x 60 - ". $difference. ")<br>";
				if ($tempo_resultado > 0){
					?>
					<img src="../images/pet_machine_on.png" alt="Machine On"> <br>
					<?php
					echo "A ". $maquinas[0]['nome_maq']. " está optima por mais ". $tempo_resultado. " minutos<BR>";
				} else {
					?>
					<img src="../images/pet_machine_off.png" alt="Machine On"> <br>
					<?php
					echo "A ". $maquinas[0]['nome_maq']. " não é vista à mais de ". $tempo_resultado. " minutos<BR>";
				}
				echo "<br><br>";
			}
		}

		// Zona de controlo
//		echo $query;
		//Print the array
//		echo '<pre>'; print_r($tempos); echo '</pre>';
//   	$maquinasult = sizeof($tempos); 
		  
//		   print($maquinasult);		
		 ?>
	</div>
	<div class="rodape">
		Ricardo Teixeira <span>&copy;2018</span>
	</div>

</body>
</html>