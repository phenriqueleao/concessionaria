<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

<body class="">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="background-image: url('../img/Black-Dark-Spot-White-Texture-Background-Pattern-WallpapersByte-com-1366x768.jpg');">
    <div class="container">
      <a class="navbar-brand" href="visualizarEstoquePesquisar.php">
        <i class="fa d-inline fa-lg fa-car"></i>
        <b>Superauto</b>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="visualizarEstoquePesquisar.php">Visualizar estoque</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="cadastrarVeiculo.php">Cadastrar veículos</a>
          </li>
        </ul>
        <div class="col-md-3">
          <div class="btn-group"></div>
          <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php
          session_start();
          if(isset($_SESSION['nome']))
          {
            echo 'Bem-Vindo ', $_SESSION['nome'];
          }
          
          ?>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="../control/controleUsuario.php?opcao=Sair">Sair</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <div class="bg-primary py-5 h-75" style="background-image: url('../img/thumb-1920-719872.jpg');background-position:right center;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php
            include '../model/crudEstoque.php';
            $codigoEstoque = $_GET["codigoEstoque"];
            $resultado=mostrarProdutoAlterar($codigoEstoque);
            if($resultado)
            {
              while($linha=mysqli_fetch_assoc($resultado))
              {
                //$codigo = $linha['codigo'];
                $nome = $linha['nome'];
                $preco = $linha['preco'];
                $ano = $linha['ano']; 
              }
            }
          ?>
          <form method="post" action="../control/controleEstoque.php">
            <h1 class="mb-4">Editar Estoque</h1>
            <div class="form-group" id="nome">
              <label>Nome veículo</label>
              <input type="text" name="nome" id="nome" class="form-control" placeholder="Informe o nome do veículo" value="<?php echo $nome; ?>"> </div>
            <div class="form-group" id="ano">
              <div class="form-group" id="preco">
              <label>Preço</label>
              <input type="number" name="preco" id="preco" class="form-control" placeholder="Informe o preco do veículo" value="<?php echo $preco; ?>"> </div>
              <label>Data de lançamento</label>
              <input type="text" name="ano" id="ano" class="form-control ano" placeholder="Informe o ano do veículo" value="<?php echo $ano; ?>"> </div>
            <input type="hidden" name="codigo" value="<?php echo $codigoEstoque; ?>">
            <button type="submit" name="opcao" value="Alterar" class="btn btn-secondary">Alterar</button>
            <button class="btn btn-danger" type="submit" name="opcao" value="Excluir">Excluir</button>
            <a class="btn btn-info" href="visualizarEstoquePesquisar.php">Cancelar</a>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="text-white bg-dark py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-3 text-center">
          <p>Superauto - 2018</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script src="jquery.maskedinputs.js" type="text/javascript"></script>
  <script src="mascaras.js" type="text/javascript"></script>
</body>

</html>