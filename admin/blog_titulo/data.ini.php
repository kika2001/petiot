<?php

$arrcampos = array (
		"tabela"=> "blog_titulo",

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

			"subtitulo" => array (
					"listar"=>1, 
					"legenda"=>"Subtitulo",
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