<?php 
include '../library/db.lib.php';
include '../library/functions.inc.php';
 $query = "INSERT INTO carrinho (nome_produto,preco_produto,quantidade_produto) VALUES ('".$_GET['nome_produto']."','".$_GET['preco_produto']."','".$_GET['quantidade']."');";
 $res = my_query($query);
 echo $query;
header('Location: comprar_maquina.php')










?>