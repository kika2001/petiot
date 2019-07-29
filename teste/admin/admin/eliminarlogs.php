<?php
include '../library/config.lib.php';
include $arrConfig['dir_admin'].'/library/db.lib.php';
include $arrConfig['dir_admin'].'/library/functions.lib.php';

include 'data.ini.php';
//pr($arrCAMPOS);

$query = "DELETE FROM ".$arrCAMPOSlogs['tabela']." WHERE id = ".$_GET['id'];
$res = my_query($query);
header("Location: logs.php");
?>