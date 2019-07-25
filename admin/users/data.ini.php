<?php

$arrcampos = array (
		"tabela"=> "users",

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

			"username" => array (
					"listar"=>1, 
					"legenda"=>"Username",
					"editar"=>1,
					"tipo"=>"text"
					),

			"password" => array (
					"listar"=>1, 
					"legenda"=>"Password",
					"editar"=>1,
					"tipo"=>"text"
					),
			"email" => array (
					"listar"=>1, 
					"legenda"=>"Email",
					"editar"=>1,
					"tipo"=>"text"
						),
			"estado" => array (
					"listar"=>1, 
					"legenda"=>"Ativo",
					"editar"=>1,
					"tipo"=>"checkbox"
							),
			"tipo" => array(
					"listar" => 1,
					"legenda" => "Tipo",
					"editar" =>1,
					"tipo" => "text"
			),
		
					
		)
					);

?>