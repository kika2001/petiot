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
	
	if(isset($value['inserir'])) {
		if($value['inserir'] == 1) {
			$arrCamposEditar[] = $key;
		}
	}
}

$query = "INSERT INTO ".$arrCAMPOSlogin['tabela']. "(";


foreach ($arrCamposEditar as $key => $value) {
	$query .= $value .",";
}
$query = substr($query, 0, strlen($query)-1);

$query .= ") VALUES(";


foreach ($arrCamposEditar as $key => $value) {
	$query .="'". $_POST[$value]."',";
}
$query = substr($query, 0, strlen($query)-1);
$query .=")";

//die($query);

$res = my_query($query);
header("Location: home.php");

?>