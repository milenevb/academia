
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style1.css">
  </head>
  <body style= "background-color: #320F49">
    <nav class="navbar navbar-expand-lg bg-transparent navbarnossosplanos">
            <div class="container">
                <a class="navbar-brand">
                    <img class="img-fluid" src="img/logo.png" alt=" Logo Gym" width="90">
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
                <?php
                    if(!isset($_SESSION)){
                        session_start();
                    }
                    if(isset($_SESSION['username'])){                            
                      $username = $_SESSION['username'];
                      $name = $_SESSION['name'];
                      $email = $_SESSION['email'];
                      
                      echo "<a class='nav-link active' href='perfil.php'><u style='text-decoration-color: #FFB612'> $username </u></a>";
                        
                    }
                    else{
                        
                    }
                  ?>
                </li>
                </ul>
            </div>
            </div>
    </nav>
    <div class="container perf">
        <div class="text-center">
              <img src="img/per.png" alt=""> <br>
              <?php
                echo"$username";
              ?>
        </div>
        <div class="neperf">
            <?php
              echo"Nome: $name"
            ?> 
            <p></p>
            <?php
              echo "Email: $email"
            ?>
        </div>
        <div class="col-12 text-center " id="ntl">
          <button style="border-color: #FFB612" class="btn btn-primary text-center" onclick="window.location.href = 'logout.php'">Logout</button>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>