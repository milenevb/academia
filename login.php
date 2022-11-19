<?php
session_start();
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style1.css">
  </head>
  <body style= "background-color: #320F49 ">

      <nav class="navbar navbar-expand-lg bg-transparent ">
              <div class="container">
              <a class="navbar-brand">
                  <img src="img/logo.png" alt="Bootstrap" width="90">
              </a>
              <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse navbar-dark " id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link " aria-current="page" href="index.php">Início</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " href="nossosplanos.php">Nossos Planos</a>
                  </li>
                  <li class="nav-item">
                    <?php
                      if(!isset($_SESSION)){
                          session_start();
                      }
                      if(isset($_SESSION['login'])){
                        $username = $_SESSION['username'];
                        $name = $_SESSION['name'];
                        $email = $_SESSION['email'];
      
                        echo "<a href='perfil.php'>$username</a>";
      
                      }
                      else{
                        echo "<a class='nav-link active' href='login.php'><u style='text-decoration-color: #FFB612'> Cadastro </u></a>";
                      }
                    ?>
      
                  </li>
                  </ul>
              </div>
              </div>
      </nav>

    <div class="container cadastro">
        <?php
          include "ver_login.php";
        ?>
        <div class="row login" >
          <div class="col-12 col-md-6">
            <img src="img/Vector.png" alt="">
          </div>
          <div class="col-12 col-md-6 cad">
            <h1 class="text-center"style="color: #FFB612" id="log" >Login</h1>
            <form action="#" method="post"  class="row g-3" >
                <div class="col-md-12">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-12">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="col-12 text-center" id="ntl" >
                  <button type="submit" class="btn btn-primary" style="background-color: #6A468E ">Login</button>
                </div>
            </form>
            <div class="lct">
              <span>Não tem login?</span>
            </div>
            <div class="col-12 text-center" id="ntl">
              <button style="border-color: #FFB612" class="btn btn-primary" onclick="window.location.href = 'registro.php'">Cadastre-se</button>
            </div>
          </div>
          
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
