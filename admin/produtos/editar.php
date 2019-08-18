<?php
include '../../library/config.lib.php';
include '../../library/functions.lib.php';
include '../../library/db.lib.php';
include 'data.ini.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../assets/css/style.css">
	<title>Editar</title>
</head>
<body>
<?php

$query = "SELECT * FROM ". $arrcampos['tabela']. " WHERE id=". $_GET['id'];
$res = my_query($query);

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

$query = 'SELECT * FROM '.$arrcampos['tabela'];
if(isset($arrCamposChave[0])) {
	$query .= ' WHERE ';
}
foreach ($arrCamposChave as $key => $value) {
	$query .= $value . '="'.$_GET[$value].'" AND ';
}
$query = substr($query, 0, strlen($query)-5);
$dados = my_query($query);
if(!isset($dados[0])) {
	die("ERRO");
}

?>

<form action="trataeditar.php?user=<?php echo $_GET['user'] ?>" method="POST" enctype="multipart/form-data">

<?php
foreach ($arrCamposChave as $key => $value) {
echo '<input type="hidden" name="'.$value.'" value="'.$_GET[$value].'">';
}
?>
<div class ="card">
<div class ="table-stats order-table ov-h">
<table>
<?php
foreach ($arrCamposEditar as $key => $value) {
	$arrcampos['campos'][$value]['nome_campo_editar']=$value;
	echo '<tr>';
	echo '<td>'.$arrcampos['campos'][$value]['legenda'].'</td>';
	echo '<td>'.getTIPO_editar($arrcampos['campos'][$value], $dados[0][$value]).'</td>';
	echo '</tr>';
}
?>
<tr> 
	<td><input type="submit" name="submeter" value="Submeter"></td>
</tr>
</table>
</div>
</div>
</form>
</body>
</html>