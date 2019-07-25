<?php

$arrcampos = array (
		"tabela"=> "header",

		"campos"=> array (

			"id" => array (
					"listar"=>1, 
					"chave"=>1, 
					"legenda"=>"ID"
					),
			"nome" => array (
				"listar"=>1, 
				"legenda"=>"Nome",
				"editar"=>1,
				"tipo"=>"text",
				),
			"link" => array (
				"listar"=>1, 
				"legenda"=>"Link",
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