<?php
include '../library/config.lib.php';
include $arrConfig['dir_admin'].'/library/db.lib.php';
include $arrConfig['dir_admin'].'/library/functions.lib.php';

include 'data.ini.php';

//pr($arrCAMPOS);

$arrCamposChave = array();
$arrCamposEditar = array();

foreach ($arrCAMPOSlogin['campos'] as $key => $value) {
	
	if(isset($value['chave'])) {
		if($value['chave'] == 1) {
			$arrCamposChave[] = $key;
		}
	}
	
	if(isset($value['editar'])) {
		if($value['editar'] == 1) {
			$arrCamposEditar[] = $key;
		}
	}
}

$query = "UPDATE ".$arrCAMPOSlogin['tabela']." SET ";


foreach ($arrCamposEditar as $key => $value) {
	$query .= $value . "='".$_POST[$value]."', ";
}
$query = substr($query, 0, strlen($query)-2);

$query .= " WHERE ";


foreach ($arrCamposChave as $key => $value) {
	$query .= $value . "='".$_POST[$value]."' AND ";
}
$query = substr($query, 0, strlen($query)-5);

//die($query);
$res = my_query($query);
header("Location: cliente.php");

?>





