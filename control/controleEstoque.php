<?php
	
	include '../model/crudEstoque.php';

	$opcao = $_POST["opcao"];

	if($opcao == "Cadastrar Veiculo"){
		$nome = $_POST["nome"];
		$ano = $_POST["ano"];
		$preco = $_POST["preco"];
		cadastrarProduto($nome, $ano, $preco);

		header("Location: ../view/cadastrarVeiculo.php");
	}
	else if($opcao == "Alterar")
	{
		$codigo = $_POST['codigo'];
		$nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $ano = $_POST['ano']; 

		alterarProduto($codigo, $nome, $preco, $ano);
		header("Location: ../view/visualizarEstoquePesquisar.php");
	}
	else if($opcao == "Excluir")
	{
		$codigo = $_POST["codigo"];

		excluirProduto($codigo);
		header("Location: ../view/visualizarEstoquePesquisar.php");
	}



?>