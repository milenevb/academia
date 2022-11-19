<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style1.css">
  </head>
  <body style= "background-color: #320F49 ">
  <nav class="navbar navbar-expand-lg bg-transparent navbarnossosplanos">
            <div class="container">
                <a class="navbar-brand">
                    <img src="img/logo.png" alt=" Logo Gym" width="90">
                </a>
            <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-dark " id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> <!-- Posicionar na direita ms-auto -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="nossosplanos.php">Nossos Planos</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active" href="login.php"><u style="text-decoration-color: #FFB612"> Cadastro </u></a>
                </li>
                </ul>
            </div>
            </div>
    </nav>
    <div class="container cadastro">
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="img/Vector.png" alt="">
            </div>
            <div class="col-12 col-md-6 cad">
                <h1 class="text-center" style="color: #FFB612" >Cadastre-se</h1>
                <form action="registrar.php" method="post" oninput='up2.setCustomValidity(up2.value != password.value ? "As senhas não correspondem" : "")' class="row g-3" >
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" >
                    </div>
                    <div class="col-md-6">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="email">
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="col-md-6">
                        <label for="confirm_password" class="form-label">Confirmar senha</label>
                        <input type="password" class="form-control" id="confirm_password" name="up2">
                    </div>
                            
                    <div class="col-12 text-center" id="ntl" >
                        <button type="submit" class="btn btn-primary" style="background-color: #6A468E ">Cadastre-se</button>
                    </div>
                </form>
            </div>
        </div>
        
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>