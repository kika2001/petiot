<?php

$arrcampos = array (
		"tabela"=> "testemonials",

		"campos"=> array (

			"id" => array (
					"listar"=>1, 
					"chave"=>1, 
					"legenda"=>"ID"
					),
			"titulo" => array (
				"listar"=>1, 
				"legenda"=>"Titulo",
				"editar"=>1,
				"tipo"=>"text",
				),
			"texto" => array (
				"listar"=>1, 
				"legenda"=>"Texto",
				"editar"=>1,
				"tipo"=>"text",
				),
			"nome" => array (
				"listar"=>1, 
				"legenda"=>"Nome",
				"editar"=>1,
				"tipo"=>"text"
					),
			"cargo" => array (
				"listar"=>1, 
				"legenda"=>"Cargo",
				"editar"=>1,
				"tipo"=>"text"
					),
			"imagem" => array (
				"listar"=>1, 
				"legenda"=>"Imagem",
				"editar"=>1,
				"tipo"=>"file"
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