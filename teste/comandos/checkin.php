<?php
include '/volume1/web/admin/library/config.lib.php';
//include '/volume1/web/comandos/estado.php';
//include $arrConfig['dir'].'/library/db.lib.php';
//include $arrConfig['dir'].'/library/functions.lib.php';


	// Create connection
	$db = new mysqli($arrConfig['servername'],$arrConfig['username'],$arrConfig['password'],$arrConfig['dbname']);
	// Check connection
	if ($db->connect_error) {
		die("Connection failed: " . $db->connect_error);
	} 
	echo ("Connected successfully\n");

	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$parts = parse_url($actual_link);
	parse_str($parts['query'], $query);
	$idmaquina = $query['idmaquina'];
	$versao = $query['versao'];
	$quantidade = $query['quantidade'];
	$action = $query['action'];
	echo ("'".$actual_link."'\n");
	
	
	$sql = "INSERT INTO estado (data, idmaquina, action, versao, quantidade) VALUES('".date("Y-m-d H:i")."','".$idmaquina."','".$action."','".$versao."','".$quantidade."') "; 
	echo ("'".$sql."'\n");
    if ($db->query($sql) === true) 
	{ 
		echo ("Records inserted successfully.\n");
	} 
	else
	{ 
		echo "ERROR: Could not able to execute $sql. "
			   .$mysqli->error; 
	} 
	  
	// Close connection 
	//$db->close();
	
	//Validar se existe algum update para a maquina


	$sql = "SELECT * FROM maquina WHERE idmaquina = '".$idmaquina."'"; 
	echo ("'".$sql."'\n");

	echo("£\n");
	
if($result = mysqli_query($db, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
			echo "|intervalo£" . $row['intervalo'];
			echo "|quantidade£" . $row['quantidade'];
			echo "|versao£" . $row['versao'];
			echo "|osupdate£" . $row['osupdate'];
			echo "|";
        }	
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


 
	  
	// Close connection 
	$db->close();
	
?>