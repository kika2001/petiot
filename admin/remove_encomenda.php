<?php
    include '../library/db.lib.php';
    include '../library/functions.inc.php';

    $query = "DELETE FROM carrinho WHERE id='".$_GET['id']."'";
    $res = my_query($query);
    echo $query;
    header('Location: comprar_maquina.php')


?>