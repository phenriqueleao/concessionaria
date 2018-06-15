<?php
	
	include '../model/crudVenda.php';

	session_start(); //Inicia a sessao 
	$codigoUsuario = $_SESSION['codigoUsuario']; //Pega o codigo do usuario e armazena numa variavel;


	$opcao = $_GET['opcao'];

	if ($opcao == 'tirarSelecao')
	{
		$codigoEstoque = $_GET['codigo'];
		excluirVenda($codigoUsuario, $codigoEstoque); //Passa o codigo do usuario e estoque
		header("Location: ../view/produtosSelecionados.php");
	}
	elseif ($opcao == 'selecionar')
	{
		$codigoEstoque = $_GET['codigo'];
		inserirVenda($codigoUsuario, $codigoEstoque);
		header("Location: ../view/produtosDisponiveis.php");
	}
?>
