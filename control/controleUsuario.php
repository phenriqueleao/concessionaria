<?php
	
	include '../model/crudUsuario.php';
	
	if(isset($_POST["opcao"])){

	$opcao = $_POST["opcao"];

	if($opcao == "Cadastrar Usuario")
	{
		$nome = $_POST["nome"];
		$senha =sha1($_POST["senha"]); //sha1 codigo para criptografar a senha;
		$tipo = $_POST["tipo"];
		cadastrarUsuario($nome, $senha, $tipo);
		header("Location: ../index.php");
	}
	else if($opcao == "Entrar")
	{
		$nome = $_POST["nome"];
		$senha =sha1( $_POST["senha"]);
		$nomeBanco = "null";
		$senhaBanco = "null";
		$tipoBanco = "null";
		$codigoBanco = "null";
		$resultado = buscarUsuario($nome);

		while($linha = mysqli_fetch_assoc($resultado))
		{
			$codigoBanco = $linha['codigoUsuario'];
			$nomeBanco = $linha['nome'];
			$senhaBanco = $linha['senha'];
			$tipoBanco = $linha['tipo'];
		}
		if($nome == $nomeBanco)
		{
			if($senha == $senhaBanco)
			{
				if($tipoBanco == "funcionario")
				{
					session_start();
					$_SESSION['codigoUsuario'] = $codigoBanco;
					$_SESSION['nome'] = $nomeBanco;
					$_SESSION['senha'] = $senhaBanco;
					header("Location: ../view/visualizarEstoquePesquisar.php");
				}
				else if($tipoBanco == "cliente")
				{
					session_start();
					$_SESSION['codigoUsuario'] = $codigoBanco;
					$_SESSION['nome'] = $nomeBanco;
					$_SESSION['senha'] = $senhaBanco;
					header("Location: ../view/produtosDisponiveis.php");
				}
			}
			else{
				echo "<script>alert('Senha Incorreta');</script>";
				echo "<script>window.location = '/concessionaria/index.php ';</script>";
			}
		}
		else
			{
				echo "<script>alert('Nome Incorreto');</script>";
				echo "<script>window.location = '/concessionaria/index.php';</script>";
			}
	}
}
else if(isset($_GET["opcao"]))
{
	$opcao = $_GET["opcao"];
	if($opcao == 'Sair')
	{
		session_start();
		session_destroy();
		//echo "DESTRUIU SESSÃO";
		header("Location: /concessionaria/index.php");
	}
}
?>