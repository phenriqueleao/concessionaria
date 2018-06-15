<?php
	include 'conexaoBD.php';

	function cadastrarProduto($nome, $ano, $preco)
	{
		conectar();
		query("INSERT INTO estoque(nome, ano, preco) VALUES ('$nome', '$ano', $preco)");
		fechar();
	}

	function mostrarProduto()
	{
		conectar();
		$resultado = query("SELECT * FROM estoque");
		fechar();

		return $resultado;
	}

	function mostrarProdutoAlterar($codigo)
	{
		conectar();
		$resultado = query("SELECT * FROM estoque WHERE codigoEstoque = $codigo");
		fechar();

		return $resultado;

	}
	function alterarProduto($codigo, $nome, $preco, $ano)
	{
		conectar();
		query("UPDATE estoque SET nome = '$nome', preco = $preco ,ano = '$ano' WHERE codigoEstoque=$codigo");
		fechar();
	}
	function excluirProduto($codigo)
	{
		conectar();
		query("DELETE FROM estoque WHERE codigoEstoque =$codigo");
		fechar();
	}
	function mostrarConcessionariaPesquisar($pesquisa)
	{
		conectar();
		$resultado = query("SELECT * FROM estoque WHERE nome LIKE '%$pesquisa%'
 		OR ano LIKE '%$pesquisa%'"); //Alterar conforme nome da tabela dada.
		fechar();						 // NOME DA TABELA E NAO DA BASE DE DADOS..
		return $resultado;
	}

?>