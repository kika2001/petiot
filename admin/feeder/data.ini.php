<?php

$arrcampos = array (
		"tabela"=> "feeder",

		"campos"=> array (

			"id" => array (
					"listar"=>1, 
					"chave"=>1, 
					"legenda"=>"ID"
					),
			"titulo1" => array (
				"listar"=>1, 
				"legenda"=>"Titulo Principal",
				"editar"=>1,
				"tipo"=>"text",
				),

			"titulo2" => array (
					"listar"=>1, 
					"legenda"=>"Subtitulo",
					"editar"=>1,
					"tipo"=>"text"
					),

			"texto" => array (
					"listar"=>1, 
					"legenda"=>"Texto",
					"editar"=>1,
					"tipo"=>"text"
					),
			"link_botao" => array (
					"listar"=>1, 
					"legenda"=>"Link do Botão",
					"editar"=>1,
					"tipo"=>"text"
						),
			"texto_botao" => array (
				"listar"=>1, 
				"legenda"=>"Link do Botão",
				"editar"=>1,
				"tipo"=>"text"
					),
			"imagem" => array (
				"listar"=>1, 
				"legenda"=>"Imagem",
				"editar"=>1,
				"tipo"=>"text"
					),
			"linguas" => array(
				"listar" => 1,
				"legenda" => "Lingua",
				"editar" =>1,
				"tipo" => "text"
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