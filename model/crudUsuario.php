<?php
	include 'conexaoBD.php';
	
	function cadastrarUsuario($nome, $senha, $tipo){
		conectar();
		query("INSERT INTO usuario(nome, senha, tipo) VALUES ('$nome', '$senha', '$tipo')");
		fechar();
	}

	function buscarUsuario($nome)
	{
		conectar();
		$resultado=query("SELECT * FROM usuario WHERE nome='$nome'");
		fechar();
		return $resultado;
	}


?>