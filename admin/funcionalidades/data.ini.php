<?php

$arrcampos = array (
		"tabela"=> "funcionalidades",

		"campos"=> array (

			"id" => array (
					"listar"=>1, 
					"chave"=>1, 
					"legenda"=>"ID"
					),
			"funcionalidade" => array (
				"listar"=>1, 
				"legenda"=>"Imagem",
				"editar"=>1,
				"tipo"=>"file",
				),

			"explicacao" => array (
					"listar"=>1, 
					"legenda"=>"Titulo",
					"editar"=>1,
					"tipo"=>"text"
					),
			"lingua" => array (
				"listar"=>1, 
				"legenda"=>"Lingua",
				"editar"=>1,
				"tipo"=>"text"
					),
			"estado" => array (
					"listar"=>1, 
					"legenda"=>"Ativo",
					"editar"=>1,
					"tipo"=>"checkbox"
							),
		
					
		)
					);

?>