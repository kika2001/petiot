<?php


function paginacao()
{
	if (isset($_GET['p'])) {
		$p=$_GET['p'];
	}else{
	$p=1;
	}

	if ($p<=0) {
		header("Location:index.php?p=1");
	}
	return $p;
}

function verifica() {
	if ($_SESSION['asd'] != 1) {
		header("location: http://localhost/funder/admin/login.php");
	}
}

function pr($arr) {
	echo '<pre style="text-align:left;">';
	print_r($arr);
	echo '</pre>';
} 

function limpar($string) {
   $string = str_replace(' ', '_', $string); 
   $string = preg_replace("/[^a-zA-Z0-9\/_|+ .-]/", '', $string); 
   return preg_replace('/-+/', '-', $string);
}

function getTIPO_editar($v, $valor) {
	$str='';
	switch ($v['tipo']) {
		case 'checkbox':
			$checked = ( $valor ? 'checked' : '' );
			$str.='<input type="checkbox" name="'.$v['nome_campo_editar'].'" value="1" '.$checked.'>';
			break;

		case 'password':
			$str.='<input type="password" name="'.$v['nome_campo_editar'].'" value="1">';
			break;

		case 'file':
			$str.='<input type="file" name="'.$v['nome_campo_editar'].'" value="">';
			break;

		case 'select':
			$str.='<select name="'.$v['nome_campo_editar'].'">';
			if($v['carrega']['tipo'] == 'tabela') {
				$quer = "SELECT * FROM ".$v['carrega']['nome'];
				if(isset($v['carrega']['campo_estado'])) {
					$quer.= " WHERE ".$v['carrega']['campo_estado']."=1";
				}
				$res = my_query($quer);
				$tam = sizeof($res);

				pr($res);
				pr($v);
				die;

				if ($v['legenda'] == "Curso") {
					for ($i=0; $i < $tam ; $i++) { 
					$str.='<option value="'.$res[$i]['id'].'">'.$res[$i]['sigla'].'</option>';
				}

				} else {
					pr($res);
					die;
					for ($i=0; $i < $tam ; $i++) { 
					$str.='<option value="'.$res[$i]['id'].'">'.$res[$i]['sigla'].'</option>';
				}
				}

				
			//	foreach ($res as $key => $value) {
			//		$str.='<option value="'.$value[$v['carrega']['campo_legenda']].'">'.$value[$v['carrega']['campo_legenda']].'</option>';
			//	}
			}
			$str.='</select>';		
			break;

		case 'radio':
			if($v['carrega']['tipo'] == 'tabela') {
				$query = "SELECT * FROM ".$v['carrega']['nome'];
				if(isset($v['carrega']['campo_estado'])) {
					$query .= " WHERE ".$v['carrega']['campo_estado']."=1";
				}
				$res = my_query($query);
				
				foreach ($res as $key => $value) {
					$str.='<input type="radio" name="'.$v['nome_campo_editar'].'" value="'.$value[$v['carrega']['campo_ligacao']].'"> '.$value[$v['carrega']['campo_legenda']];
				}

			} elseif($v['carrega']['tipo'] == 'vector') {
				foreach ($v['carrega']['valores'] as $key => $value) {
					$str.='<input type="radio" name="'.$v['nome_campo_editar'].'" value="'.$key.'"> '.$value;
				};
			}		
			break;

		case 'lista':
			$str.='<select name="'.$v['nome_campo_editar'].'" size="'.$v['tamanho'].'">';
			if($v['carrega']['tipo'] == 'tabela') {
				$quer = "SELECT * FROM ".$v['carrega']['nome'];
				if(isset($v['carrega']['campo_estado'])) {
					$quer.= " WHERE ".$v['carrega']['campo_estado']."=1";
				}
				$res = my_query($quer);
				
				foreach ($res as $key => $value) {
					$str.='<option value="'.$value[$v['carrega']['campo_legenda']].'">'.$value[$v['carrega']['campo_legenda']].'</option>';
				}
			}
			$str.='</select>';		
			break;

		case 'textarea':
			$str.='<textarea name="'.$v['nome_campo_editar'].'" rows="10" cols="21">';
			$str.=$valor;
			$str.='</textarea>';
		break;

		case 'text':		
		default:
			$str.='<input type="text" name="'.$v['nome_campo_editar'].'" value="'.$valor.'">';
			break;
	}

	return $str;
}


function getTIPO_inserir($v) {
	$str='';
	switch ($v['tipo']) {
		case 'checkbox':
			$str.='<input type="checkbox" name="'.$v['nome_campo_editar'].'" value="1">';
			break;

		case 'password':
			$str.='<input type="password" name="'.$v['nome_campo_editar'].'" value="1">';
			break;

		case 'file':
			$str.='<input type="file" name="'.$v['nome_campo_editar'].'" value="">';
			break;

		case 'select':
			$str.='<select name="'.$v['nome_campo_editar'].'">';
			if($v['carrega']['tipo'] == 'tabela') {
				$quer = "SELECT * FROM ".$v['carrega']['nome'];
				if(isset($v['carrega']['campo_estado'])) {
					$quer.= " WHERE ".$v['carrega']['campo_estado']."=1";
				}
				$res = my_query($quer);
				
				foreach ($res as $key => $value) {
					$str.='<option value="'.$value[$v['carrega']['campo_legenda']].'">'.$value[$v['carrega']['campo_legenda']].'</option>';
				}
			}
			$str.='</select>';		
			break;

		case 'radio':
			if($v['carrega']['tipo'] == 'tabela') {
				$query = "SELECT * FROM ".$v['carrega']['nome'];
				if(isset($v['carrega']['campo_estado'])) {
					$query .= " WHERE ".$v['carrega']['campo_estado']."=1";
				}
				$res = my_query($query);
				
				foreach ($res as $key => $value) {
					$str.='<input type="radio" name="'.$v['nome_campo_editar'].'" value="'.$value[$v['carrega']['campo_ligacao']].'"> '.$value[$v['carrega']['campo_legenda']];
				}

			} elseif($v['carrega']['tipo'] == 'vector') {
				foreach ($v['carrega']['valores'] as $key => $value) {
					$str.='<input type="radio" name="'.$v['nome_campo_editar'].'" value="'.$key.'"> '.$value;
				};
			}		
			break;

		case 'lista':
			$str.='<select name="'.$v['nome_campo_editar'].'" size="'.$v['tamanho'].'">';
			if($v['carrega']['tipo'] == 'tabela') {
				$quer = "SELECT * FROM ".$v['carrega']['nome'];
				if(isset($v['carrega']['campo_estado'])) {
					$quer.= " WHERE ".$v['carrega']['campo_estado']."=1";
				}
				$res = my_query($quer);
				
				foreach ($res as $key => $value) {
					$str.='<option value="'.$value[$v['carrega']['campo_legenda']].'">'.$value[$v['carrega']['campo_legenda']].'</option>';
				}
			}
			$str.='</select>';		
			break;

		case 'textarea':
			$str.='<textarea name="'.$v['nome_campo_editar'].'" rows="10" cols="21">';
			$str.='</textarea>';
		break;

		case 'text':		
		default:
			$str.='<input type="text" name="'.$v['nome_campo_editar'].'" value="">';
			break;
	}

	return $str;
}

?>