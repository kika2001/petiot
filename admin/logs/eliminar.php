<?php
include '../../library/functions.inc.php';
include '../../library/db.lib.php';

include 'data.ini.php';
 
//pr($arrCAMPOS);

$query = "DELETE FROM ".$arrcampos['tabela']." WHERE id = ".$_GET['id'];

$res = my_query($query);
header("Location: index.php");
?>