<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

<body class="">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="background-image: url('/concessionaria/img/../Black-Dark-Spot-White-Texture-Background-Pattern-WallpapersByte-com-1366x768.jpg');">
    <div class="container">
      <a class="navbar-brand" href="">
        <i class="fa d-inline fa-lg fa-car"></i>
        <b>Superauto</b>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <div class="py-5 bg-primary" style="background-image: url('/concessionaria/img/Black-Dark-Spot-White-Texture-Background-Pattern-WallpapersByte-com-1366x768.jpg');background-size:cover;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center">Bem-Vindo à Superauto</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card text-white p-5 bg-primary" style="background-image: url('/concessionaria/img/thumb-1920-719872.jpg');background-size:cover;">
            <div class="card-body">
              <h1 class="mb-4">Cadastro</h1>
              <form method="post" action="../control/controleUsuario.php">
                <div class="form-group">
                  <label>Crie um nome de Usuário</label>
                  <input type="text" name="nome" id="nome" class="form-control" placeholder="Informe um nome"> </div>
                <div class="form-group">
                  <label>Crie uma senha pessoal</label>
                  <input type="password" name="senha" id="senha" class="form-control" placeholder="Crie sua senha"> </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" name="tipo" id="funcionario" value="funcionario" class="custom-control-input">
                  <label class="custom-control-label" for="funcionario">Funcionario</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" name="tipo" id="cliente" value="cliente" class="custom-control-input">
                  <label class="custom-control-label" for="cliente">Cliente</label>
                </div>
              <div>
              <button type="submit" name="opcao" class="btn btn-primary" value="Cadastrar Usuario">Cadastrar</button>
              <a class="btn btn-info" href="../index.php">Cancelar</a></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-white bg-dark" style="background-image: url('/concessionaria/img/Black-Dark-Spot-White-Texture-Background-Pattern-WallpapersByte-com-1366x768.jpg');background-size:cover;">
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
</body>

</html>