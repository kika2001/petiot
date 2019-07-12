<?php
include 'config.lib.php';






		$conn = mysqli_connect($arrConfig['servername'] , $arrConfig['username'] , $arrConfig['password'] , $arrConfig['dbname']);

		if (!$conn) {
	    	die("Connection failed: " . mysqli_connect_error());
		}
		mysqli_set_charset($conn,"utf8");
    return $conn;

	function my_query($sql) {
		global $conn;
		$result = $conn->query($sql);

		if (isset($result->num_rows)) {
			$arrRes = array();
			if ($result->num_rows > 0) {
    			while($row = $result->fetch_assoc()) {
        			$arrRes[] = $row;
    			}
			}
			return $arrRes;

		}
	}

	function editar($sql) {
		global $conn;

		if ($conn->query($sql)) {
	    	echo "Record updated successfully";
	} 	else {
	    	echo "Error updating record: " . mysqli_error($conn);
	}
	mysqli_close($conn);
	}

	function inserir($a) {
        global $conn;

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        if ($conn->query($a) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Erro: " . "<br>" . $conn->error;
        }
    }
	function clean($str) 
{ 
$str = strip_tags(addslashes(stripslashes(htmlspecialchars($str)))); 
return $str; 
} 

?>