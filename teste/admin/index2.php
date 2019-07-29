
  <?php
  
	$servername= "127.0.0.1:3307";
	$username = "root";
	$password = "saldanha";
	$dbname = "projeto";
  
      $error = '';
      $texto="Prencha os campos";

      //Establishing Connection with server by passing server_name, user_id and pass as a patameter
      $mysqli = new mysqli($servername,$username,$password,$dbname);
	  if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}else{
	
	echo"Hello carecao";
}

      