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

	
	if ($_FILES['icon']['error'] != 4) {
		$path = $_FILES['icon']['name'];
		$ext = pathinfo($path, PATHINFO_EXTENSION);

		$nomeclean = clean($_POST['icon']);
		$file_name = $nomeclean."_".$_POST['lingua'].".".$ext;
		$file_tmp = $_FILES['icon']['tmp_name'];

		$upload_folder = "../../img/icon/";
		$movefile = move_uploaded_file($file_tmp, $upload_folder .$file_name);
		$_POST['icon'] = $file_name;

		if ($movefile) {
			echo "Sucesso";
		}
		else {
			echo "Erro";
		}
	}

	if ($_FILES['imagem1']['error'] != 4) {
		$path = $_FILES['imagem1']['name'];
		$ext = pathinfo($path, PATHINFO_EXTENSION);

		$nomeclean = clean($_POST['imagem1']);
		$file_name = $nomeclean."_".$_POST['lingua'].".".$ext;
		$file_tmp = $_FILES['imagem1']['tmp_name'];

		$upload_folder = "../../img/team/people/";
		$movefile = move_uploaded_file($file_tmp, $upload_folder .$file_name);
		$_POST['imagem1'] = $file_name;

		if ($movefile) {
			echo "Sucesso";
		}
		else {
			echo "Erro";
		}
	}


	if ($_FILES['imagem2']['error'] != 4) {
		$path = $_FILES['imagem2']['name'];
		$ext = pathinfo($path, PATHINFO_EXTENSION);

		$nomeclean = clean($_POST['imagem2']);
		$file_name = $nomeclean."_".$_POST['lingua'].".".$ext;
		$file_tmp = $_FILES['imagem2']['tmp_name'];

		$upload_folder = "../../img/team/people/";
		$movefile = move_uploaded_file($file_tmp, $upload_folder .$file_name);
		$_POST['imagem2'] = $file_name;

		if ($movefile) {
			echo "Sucesso";
		}
		else {
			echo "Erro";
		}
	}

	if ($_FILES['imagem3']['error'] != 4) {
		$path = $_FILES['imagem3']['name'];
		$ext = pathinfo($path, PATHINFO_EXTENSION);

		$nomeclean = clean($_POST['imagem3']);
		$file_name = $nomeclean."_".$_POST['lingua'].".".$ext;
		$file_tmp = $_FILES['imagem3']['tmp_name'];

		$upload_folder = "../../img/team/people/";
		$movefile = move_uploaded_file($file_tmp, $upload_folder .$file_name);
		$_POST['imagem3'] = $file_name;

		if ($movefile) {
			echo "Sucesso";
		}
		else {
			echo "Erro";
		}
	}

	if ($_FILES['imagem4']['error'] != 4) {
		$path = $_FILES['imagem4']['name'];
		$ext = pathinfo($path, PATHINFO_EXTENSION);

		$nomeclean = clean($_POST['imagem4']);
		$file_name = $nomeclean."_".$_POST['lingua'].".".$ext;
		$file_tmp = $_FILES['imagem4']['tmp_name'];

		$upload_folder = "../../img/team/people/";
		$movefile = move_uploaded_file($file_tmp, $upload_folder .$file_name);
		$_POST['imagem4'] = $file_name;

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
header("Location: index.php?user=". $_GET['user']."");
?>

