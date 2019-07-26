<?php
include '../../library/db.lib.php';
include '../../library/functions.inc.php';

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

	if ($_FILES['imagem']['error'] != 4) {
		$path = $_FILES['imagem']['name'];
		$ext = pathinfo($path, PATHINFO_EXTENSION);

		$nomeclean = clean($_POST['imagem']);
		$file_name = $nomeclean."_".$_POST['id'].".".$ext;
		$file_tmp = $_FILES['imagem']['tmp_name'];

		$upload_folder = "../../img/";
		$movefile = move_uploaded_file($file_tmp, $upload_folder .$file_name);
		$_POST['imagem'] = $file_name;

		if ($movefile) {
			echo "Sucesso";
		}
		else {
			echo "Erro";
		}
	}


$query = "UPDATE ".$arrcampos['tabela']. " SET";
foreach ($arrCamposEditar as $k => $v) {
	$query .= " ".$arrCamposEditar[$k]. "='". $_POST[$v]."',"; 
}

$query = substr($query, 0, -1);
$query .= " WHERE id=" .$_POST['id'];

$res = editar($query);
header("Location: index.php");
?>

