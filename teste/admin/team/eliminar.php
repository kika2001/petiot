<?php
include '../../library/config.lib.php';
include $arrConfig['dir'].'library/db.lib.php';
include $arrConfig['dir'].'library/functions.lib.php';

include 'data.ini.php';
//pr($arrCAMPOS);

$query = "DELETE FROM ".$arrCAMPOS['tabela']." WHERE id = ".$_GET['id'];
$res = my_query($query);
header("Location: index.php");
?>