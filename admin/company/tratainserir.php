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

	
	$query = "INSERT INTO ".$arrcampos['tabela']." (";
	$i=0;

	foreach ($arrCamposEditar as $k => $v) {
		if ($i==0) {
			$query.=$arrCamposEditar[$k].",";
			$i = 1; 
		} else {
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
	header("Location: index.php?user=<?php echo $_GET['user'] ?>");
?>