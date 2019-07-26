<?php

$arrcampos = array (
		"tabela"=> "feature",

		"campos"=> array (

			"id" => array (
					"listar"=>1, 
					"chave"=>1, 
					"legenda"=>"ID"
					),
			"imagem" => array (
				"listar"=>1, 
				"legenda"=>"Imagem",
				"editar"=>1,
				"tipo"=>"file",
				),

			"titulo" => array (
					"listar"=>1, 
					"legenda"=>"Titulo",
					"editar"=>1,
					"tipo"=>"text"
					),
			"texto" => array (
				"listar"=>1, 
				"legenda"=>"Texto",
				"editar"=>1,
				"tipo"=>"text"
					),
			"link" => array (
				"listar"=>1, 
				"legenda"=>"Link",
				"editar"=>1,
				"tipo"=>"text"
					),
			"texto_botao" => array (
				"listar"=>1, 
				"legenda"=>"Texto do Botao",
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