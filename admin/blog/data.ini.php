<?php

$arrcampos = array (
		"tabela"=> "blog",

		"campos"=> array (

			"id" => array (
					"listar"=>1, 
					"chave"=>1, 
					"legenda"=>"ID"
					),
			"dia" => array (
				"listar"=>1, 
				"legenda"=>"Dia",
				"editar"=>1,
				"tipo"=>"text",
				),

			"mes_ano" => array (
					"listar"=>1, 
					"legenda"=>"Mes e Ano",
					"editar"=>1,
					"tipo"=>"text"
					),

			"imagem" => array (
					"listar"=>1, 
					"legenda"=>"Imagem",
					"editar"=>1,
					"tipo"=>"file"
					),
			"titulo" => array (
					"listar"=>1, 
					"legenda"=>"Titulo",
					"editar"=>1,
					"tipo"=>"text"
						),
			"autor" => array (
				"listar"=>1, 
				"legenda"=>"Autor",
				"editar"=>1,
				"tipo"=>"text"
					),
			"introducao" => array (
				"listar"=>1, 
				"legenda"=>"Introdução",
				"editar"=>1,
				"tipo"=>"text"
					),
			"noticia" => array (
				"listar"=>1, 
				"legenda"=>"Noticia",
				"editar"=>1,
				"tipo"=>"textarea"
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