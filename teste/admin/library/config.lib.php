<?php
@session_start();
$arrConfig['nome_projeto'] = 'Pet IOT';
$arrConfig['ano_desenvolvimento'] = 2019;



$caminho = getcwd();
$arrConfig['url'] = 'http://petiot.ddns.net';
$arrConfig['url_admin'] = 'http://petiot.ddns.net/admin';
$arrConfig['dir'] = '/volume1/web';
$arrConfig['dir_admin'] = $arrConfig['dir'].'/admin';




$arrConfig['meta_description'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua';
$arrConfig['meta_keywords'] = 'Escola, Sucesso, Programação';



// http://petiot.ddns.net






//127.0.0.1:3307
//alterar pass




// BD
$arrConfig['servername'] = "127.0.0.1:3307";
$arrConfig['username'] = "root";
$arrConfig['password'] = "saldanha";
$arrConfig['dbname'] = "projeto";

//$db = new mysqli_connect($arrConfig['servername'], $arrConfig['username'], $arrConfig['password'], $arrConfig['dbname']);

?>