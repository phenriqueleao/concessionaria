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
      <a class="navbar-brand" href="produtosDisponiveis.php">
        <i class="fa d-inline fa-lg fa-car"></i>
        <b>Superauto</b>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="btn btn-default navbar-btn btn-dark" href="produtosDisponiveis.php">Produtos Disponiveis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="produtosSelecionados.php">Produtos Selecionados</a>
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
  <div class="py-5 h-75" style="background-image: url('../img/thumb-1920-719872.jpg');background-size:cover;background-position:right center;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-light">Produtos disponíveis no estoque</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th class="text-light">Nome do veículo</th>
                <th class="text-light">Data de lançamento</th>
                <th class="text-light">Preço</th>
                <th class="text-light">Opção</th>
              </tr>
            </thead>
            <tbody>
              <?php
                include '../model/crudVenda.php';
                
                $resultado=mostrarProdutos($_SESSION['codigoUsuario']); //Mostra apenas os produtos relacionado ao codigo do usuario logado.
                
                if($resultado)
                {
                  while($linha=mysqli_fetch_assoc($resultado)){
                  $codigoEstoque=$linha['codigoEstoque'];
                  $nome=$linha['nome'];
                  $ano = $linha['ano'];
                  $preco = $linha['preco'];
                  
                  echo "
                        <tr>
                           <td class='text-light'>".$nome."</td>
                           <td class='text-light'>".$ano."</td>
                           <td class='text-light'>".$preco."</td>
                           <td><a class='btn btn-primary' href='../control/controlaVenda.php?opcao=selecionar&codigo=$codigoEstoque'>Selecionar</a></td>
                        </tr>
                       ";
                  }
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="text-white bg-dark py-3" style="background-image: url('../img/Black-Dark-Spot-White-Texture-Background-Pattern-WallpapersByte-com-1366x768.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-3 text-center">
          <p>Superauto - 2018</p>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 
</body>

</html>