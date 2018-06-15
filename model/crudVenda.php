<?php
 	
 	include 'conexaoBD.php';

 	function mostrarProdutosSelecionados($codigoUsuario)
 	{
		conectar();
		$resultado = query("SELECT codigoEstoque, nome, ano, preco
 		FROM estoque, venda
		WHERE venda.codigoUsua = $codigoUsuario AND venda.codigoEstoq =
		estoque.codigoEstoque");
		fechar();
		return $resultado;
 	}

 	function excluirVenda($codigoUsuario, $codigoEstoque)
 	{
		conectar();
		query("DELETE FROM venda
 		WHERE codigoUsua = $codigoUsuario AND codigoEstoq = $codigoEstoque");
		fechar();
	}
	
	function mostrarProdutos($codigoUsuario)
	{
		conectar();
		$resultado = query("SELECT codigoEstoque, nome, ano, preco FROM estoque
		WHERE codigoEstoque NOT IN (SELECT codigoEstoque FROM estoque, venda WHERE
		venda.codigoUsua = $codigoUsuario AND venda.codigoEstoq = estoque.codigoEstoque)");
		fechar();
		return $resultado;
	}

	function inserirVenda($codigoUsuario, $codigoEstoque)
	{
		conectar();
		query("INSERT INTO venda (codigoUsua, codigoEstoq) VALUES ($codigoUsuario,
		$codigoEstoque)");
		fechar();
	}

?>
