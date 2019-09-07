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
			for ($i=0; $i<sizeof($maquinas); $i++) {
				// Only one machine
					//echo "<br>Maquina: ";
				$maquina = $maquinas[$i]['nome_maq'];
					//echo $maquina;
				$intervalo = $maquinas[$i]['intervalo'];
				echo "<br><br>";
				// Formulate Query
				$query = "SELECT * FROM logs WHERE idmaquina='". $maquinas[$i]['idmaquina']. "'";
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
				$tempo_resultado = ($intervalo * 60 - $difference);
					//echo "( ". $intervalo. " x 60 - ". $difference. ")<br>";
				if ($tempo_resultado > 0){
					// Image On and link
					$id_maquina = $maquinas[$i]['idmaquina'];
					$url = "maquina.php?user=$user&maquina=$id_maquina";
					$imagem = "../images/pet_machine_on.png";
					echo "<a href=$url> <img src=$imagem> </a><br>";
					if ($tempo_resultado < 60) {
						echo "A ". $maquinas[$i]['nome_maq']. " está optima por mais ". $tempo_resultado. " minutos<BR>";
					} else {
						echo "A ". $maquinas[$i]['nome_maq']. " está optima por mais ". round(($tempo_resultado / 60),2). " horas<BR>";
					}
				} else {
					// Image Off and link
					$id_maquina = $maquinas[$i]['idmaquina'];
					$url = "maquina.php?user=$user&maquina=$id_maquina";
					$imagem = "../images/pet_machine_off.png";
					echo "<a href=$url> <img src=$imagem> </a><br>";
					$tempo_resultado = abs($tempo_resultado);
					if ($tempo_resultado < 60) {
						echo "A ". $maquinas[$i]['nome_maq']. " não é vista à mais de ". $tempo_resultado. " minutos<BR>";
					} else {
						echo "A ". $maquinas[$i]['nome_maq']. " não é vista à mais de ". round(($tempo_resultado / 60),2). " horas<BR>";
					}
					
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
		Ricardo Teixeira <span>&copy;2019</span>
	</div>

</body>
</html>