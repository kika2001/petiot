<?php

include '../../library/config.lib.php';
include '../../library/functions.lib.php';
include '../../library/db.lib.php';
include 'data.ini.php';


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

	if ($_FILES['foto']['error'] != 4) {
		$path = $_FILES['foto']['name'];
		$ext = pathinfo($path, PATHINFO_EXTENSION);

		$nomeclean = clean($_POST['foto']);
		$file_name = $nomeclean."_".$_POST['nome'].".".$ext;
		$file_tmp = $_FILES['foto']['tmp_name'];

		$upload_folder = "../../img/produtos/";
		$movefile = move_uploaded_file($file_tmp, $upload_folder .$file_name);
		$_POST['foto'] = $file_name;

		if ($movefile) {
			echo "Sucesso";
		}
		else {
			echo "Erro";
		}
	}

	
	
	$query = "INSERT INTO ".$arrcampos['tabela']." (";
	$i=0;

	foreach ($arrCamposEditar as $k => $v) {
		if ($i==0) {
			$query.=$arrCamposEditar[$k].",";
			$i = 1; 
		} 
		else 
		{
			$query .= " ".$arrCamposEditar[$k].","; 
		}
	}

	$query = substr($query, 0, -1);
	$query.= ") VALUES (";

	$i=0;
	if (!isset($_POST['estado'])) {
		$_POST['estado'] = 0;
	}

	foreach ($arrCamposEditar as $key => $value) {
		if ($i==0) {
			$query .= "'".$_POST[$value]."',";
			$i = 1; 
		} else {
			$query .= " '".$_POST[$value]."',";
		}
		
	}

	$query = substr($query, 0, -1);
	$query.= ")";

	$res = inserir($query);
	header("Location: index.php?user=". $_GET['user']."");
?>