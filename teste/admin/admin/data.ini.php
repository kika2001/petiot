<?php

$arrCAMPOSlogin = array (
		"tabela"=> "login",
		"campos"=> array (
			"id" => array ("listar"=>1, "chave"=>1, "legenda"=>"Código"),
			"user" => array ("listar"=>1, "legenda"=>"User","editar"=>1, "inserir"=>1),
			"pass" => array ("listar"=>1, "legenda"=>"Password", "editar"=>1, "inserir"=>1),
			"estado" => array ("listar"=>1, "legenda"=>"Estado", "editar"=>1, "inserir"=>1),
			"email" => array ("listar"=>1, "legenda"=>"Email", "editar"=>1, "inserir"=>1)
			
		)
		
);
$arrCAMPOSlogs = array (
	"tabela"=> "estado",
	"campos"=> array (
		"data" => array ("listar"=>1, "legenda"=>"data", "inserir"=>1),
		"idmaquina" => array ("listar"=>1, "legenda"=>"IdMaquina", "editar"=>1, "inserir"=>1),
		"estado" => array ("listar"=>1, "legenda"=>"Estado", "inserir"=>1),
		
	)
	
);
