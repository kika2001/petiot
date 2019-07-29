<?php
include '../../library/config.lib.php';
include $arrConfig['dir'].'library/db.lib.php';
include $arrConfig['dir'].'library/functions.lib.php';

include 'data.ini.php';
//pr($arrCAMPOS);


$query = "UPDATE ".$arrCAMPOS['tabela']." SET nome='".$_POST['nome']."', texto='".$_POST['funcao']."', img='".$_POST['img']."', estado='".$_POST['estado']."' WHERE id='".$_POST['id']."';";

$res = my_query($query);
header("Location: index.php");
?>