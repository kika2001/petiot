<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Maquina</title>
  <link rel="stylesheet" href=" ../css/menus.css">
</head>

<body>
	<?php 
		session_start();
		include '../library/config.lib.php';
	include '../library/db.lib.php';
	include '../library/functions.lib.php';
		
		$addurl = '?user='. $_GET['user'];
		$user= $_GET['user'];
		$idmaquina= $_GET['maquina'];
		include 'menu.php'; 
   ?>

	<div id="maquina" class="centered">
		<?php 
		// Formulate Query
		$query = "SELECT * FROM maquina WHERE user='". $user. "' and idmaquina='". $idmaquina. "'";
		// Perform Query
		$maquinas = my_query($query);
		//Verificar se esta vazio
		if (!$maquinas) {
			$maquina= "Não existe nenhuma máquina"; //in case the user is dumb (or a Ricardinho)
			echo $maquina;
		} else {
			echo "<br>";
			// Only one machine
				//echo "<br>Maquina: ";
			$maquina = $maquinas[0]['nome_maq'];
				echo $maquina;
			$intervalo = $maquinas[0]['intervalo'];
				echo "<br><br>";
			//Quantidade de comida
			$quantidade = $maquinas[0]['quantidade'];
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
			//Ultima versão instalada
			$versao = $tempos[sizeof($tempos)-1]['versao'];

			 
			//Calculate the difference.
			$difference = ($date2Timestamp - $date1Timestamp) / 60;
				//echo $difference. "<br>";
			$tempo_resultado = ($intervalo * 60 - $difference);
				//echo "( ". $intervalo. " x 60 - ". $difference. ")<br>";
			if ($tempo_resultado > 0){
				// Image On and link
				$imagem = "../images/pet_machine_on.png";
				echo "<img src=$imagem height=\"72\" width=\"72\"><br>";
			} else {
				// Image Off and link
				$imagem = "../images/pet_machine_off.png";
				echo "<img src=$imagem height=\"72\" width=\"72\"><br>";
				$tempo_resultado = abs($tempo_resultado);
			}
			// Last Meal
			echo "Ultimo registo: ". $date1. "<br><br>";
			echo "MAC: ". $maquinas[0]['idmaquina']. "<br><br>";
			echo "Versão: ". $versao. "<br><br>";
		}

		
		//echo $idmaquina;
		
		 ?>
		 
	<?php
	// validação se os campos estão bem preenchidos e depois gravar
	
	// define variables and set to empty values
	$intervaloErr = $quantidadeErr = "";
	$gravar = false;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["intervalo"])) {
		$intervaloErr = "Valor obrigatório";
	  } else {
		  if (($_POST["intervalo"]) != $intervalo) {
			$intervaloErr = "Valores diferentes";
			$gravar = true;
		  } 		  
	  }
		
	  if (empty($_POST["quantidade"])) {
		$quantidadeErr = "Valor obrigatório";
	  } else {
		  if (($_POST["quantidade"]) != $quantidade) {
			$quantidadeErr = "Valores diferentes";
			$gravar = true;
		  } 
	  }
	  
	  // Se $gravar for true, vamos actualizar a base de dados <<<-------------------------------------------------------
	  
	  
	}
	?>
	
	</div>
	
     <form class="centered" method="post" >
	  Intervalo entre refeições (horas):<br>
	  <input type="number" class="centered" name="intervalo" min="1" max="100" style="width: 3em" value="<?php echo $intervalo ?>">
	  <span class="error"><font color="red">* <?php echo $intervaloErr;?></font></span><br>
	  Quantidade de Comida:<br>
	  <input type="number" class="centered" name="quantidade" min="1" max="10" style="width: 3em" value="<?php echo $quantidade ?>">
	  <span class="error"><font color="red">* <?php echo $quantidadeErr;?></font></span><br><br>
	   <input type="submit" name="submit" value="Gravar">  
	</form>



  <div class="rodape">
    Ricardo Teixeira <span>&copy;2018</span>
  </div>
</body>
</html>