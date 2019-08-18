<?php

$arrcampos = array (
		"tabela"=> "produtos",

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

			"preco" => array (
					"listar"=>1, 
					"legenda"=>"Preço",
					"editar"=>1,
					"tipo"=>"text"
					),

			"foto" => array (
					"listar"=>1, 
					"legenda"=>"Imagem",
					"editar"=>1,
					"tipo"=>"file"
					),
			"estado" => array (
					"listar"=>1, 
					"legenda"=>"Estado",
					"editar"=>1,
					"tipo"=>"checkbox"
						),
			"tipo_produto" => array (
				"listar"=>1, 
				"legenda"=>"Tipo de Produto",
				"editar"=>1,
				"tipo"=>"text"
					),
		
					
		)
					);

?>