<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unica+One&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css\style1.css">

      <!--Ícone-->
      <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    
    <title>GYM</title>
  </head>

  <body>
    <!--NAVBAR-->
      
    <section id="homee">
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
                      <a class="nav-link active" aria-current="page" href="index.php"><u style="text-decoration-color: #FFB612" >Início</u></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " href="nossosplanos.php">Nossos Planos</a>
                  </li>
                  <li class="nav-item">
                  <?php
                    if(!isset($_SESSION)){
                        session_start();
                    }
                    if(isset($_SESSION['username'])){                            
                      $username = $_SESSION['username'];
                      $name = $_SESSION['name'];
                      $email = $_SESSION['email'];
                      
                      echo "<a class='nav-link' href='perfil.php'>$username</a>";
                        
                    }
                    else{
                        echo "<a class='nav-link' href='login.php'>Cadastro</a>";
                    }
                  ?>
                     
                  </li>
                  </ul>
              </div>
          </div>
      </nav>
      <div class="homee">
        <div class="row align-items-start">
         <div class="col-md-6">
           <h1 class="inicio">GYM academia perfeita para você!</h1>
          </div>
          <button type="button" class="btn btn-warning">Saiba Mais</button>
        </div>        
     </div>
   </section>
    <!--home titulo e button-->
    <section class="sobre" id="sobre">
    
      <div class="retangulo">
        <img src="img/retangulo.png" class="retangulo" alt="">
      </div>
      
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-sm-12">
            <p id="msgconteudo">
              Equipamentos de alto  <br>padrão
            <p>
         </div>

          <div class="col-md-6 col-sm-12" >
            <img src="img/img1.png" class="img1">
          </div>
        </div>

        <div class="row">
          
          <div class="col-md-6 col-sm-12">
             <img src="img/img2.png" class="img2">
          </div>

          <div class="col-md-6 col-sm-12">
              <p id="msgconteudodir">
                Salas exclusivas para aulas coletivas
              </p>
          </div>
        </div>

        <div class="row">

          <div class="col-md-6 col-sm-12">
            <p id="msgconteudoesq">
              Áreas de musculação <br> e cardio
            </p>
          </div>

          <div class="col-md-6 col-sm-12">
            <img src="img/img3.png" class="img3" >
          </div>
        </div>
     </div>
    </section>
  
    <section class="aulas">
      <div class="row">
        <div class="col-md-12 col-sm-12 text-center">
          <h1 class="text-center tit">Aulas Coletivas</h1>
        </div>
        <div class="col-md-12 col-sm-12 text-end">
          <img src="img/Rectanaula1.png" class="retdir1" alt="">
        </div>
        <div class="container2">
          <div class="itens">
              <img src="img/grupo1.png" class="planos" alt="">
          </div>
          <div class="itens">
              <img src="img/zumba.png" class="planos" alt="">
          </div>
          <div class="itens">
              <img src="img/body combat.png" class="planos" alt="">
          </div>
          <div class="itens">
            <img src="img/balance.png" class="planos" alt="">
          </div>
          <div class="itens">
            <img src="img/Group 24.png" class="planos" alt="">
          </div>
          <div class="itens">
            <img src="img/Group 5.png" class="planos" alt="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-sm-12 text-start">
         <img src="img/Rectanaula2.png" class="retdir2" alt="">
        </div>
      </div>
      
    </section>


    <section id="rodape">
      <div class="text-center">
          <img src="img/logopreta.png" id="logorodape">
       </div> 
   </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
    
  </body>
</html>