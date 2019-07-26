<?php

$arrcampos = array (
		"tabela"=> "blog_quote",

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
			"icon" => array (
				"listar"=>1, 
				"legenda"=>"Icon",
				"editar"=>1,
				"tipo"=>"text",
				),

			"texto" => array (
					"listar"=>1, 
					"legenda"=>"Texto",
					"editar"=>1,
					"tipo"=>"text"
					),

			"linguas" => array (
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