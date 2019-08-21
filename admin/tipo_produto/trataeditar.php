<?php

include '../../library/config.lib.php';
include '../../library/functions.lib.php';
include '../../library/db.lib.php';
include 'data.ini.php';


$arrCamposChave = array();
$arrCamposEditar = array();
foreach ($arrcampos['campos'] as $key => $value) {
	// CHAVES
	if(isset($value['chave'])) {
		if($value['chave']==1) {
			$arrCamposChave[]=$key;
		}		
	}
	// CAMPOS A EDITAR
	if(isset($value['editar'])) {
		if($value['editar']==1) {
			$arrCamposEditar[]=$key;
		}		
	}
}
	if (!isset($_POST['estado'])) {
		$_POST['estado'] = 0;
	}



$query = "UPDATE ".$arrcampos['tabela']. " SET";
foreach ($arrCamposEditar as $k => $v) {
	$query .= " ".$arrCamposEditar[$k]. "='". $_POST[$v]."',"; 
}

$query = substr($query, 0, -1);
$query .= " WHERE id=" .$_POST['id'];

$res = editar($query);
header("Location: index.php?user=". $_GET['user']."");
?>

