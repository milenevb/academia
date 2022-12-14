<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM</title>

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css\style1.css">

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

    <!--Ícone-->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>
<body>
    <section id="nossosplanos">
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
                    <a class="nav-link active" href="#"><u style="text-decoration-color: #FFB612" >Nossos Planos</u></a>
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
        <div class="container">
            
            <h1 class="text-end titplanos">
                Planos <br> para toda <br> família!
            </h1>
        </div>
    </section>

    <section id="nossosplanos2">
        
        <div class="text-center">
            <h1 id="titpart2">Conheça nossos planos</h1>
        </div>
        
        <div class="container1">
            <div class="itens">
                <img src="img/pass.png" class="planos" alt="">
            </div>
            <div class="itens">
                <img src="img/plus.png" class="planos" alt="">
            </div>
            <div class="itens">
                <img src="img/black.png" class="planos" alt="">
            </div>
        </div>

        
     <!--        <div class="row">
            <div class="text-start ret">
                <img src="img/retangpag2.1.png" alt="">
            </div>
            <div class="">
    
            </div>
        </div>
        
-->

    </section>

    <section id="pagapp">
        <div class="container">
        
            <div class= row >
                <div class="col-md-6 text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 id="titapp">Gym APP</h1>
                        </div>
                        <div class="col-md-12">
                            <p id="contapp">
                                Acompanhe o progresso das suas metas, aulas online e a experiência Gym dentro e fora da academia na palma da mão.
                            </p>
                        </div>
                        <div class="col-md-6 col-12 baixe">
                            <a href="https://www.apple.com/br/app-store/" target="_blank" > <img src="img/appstore.png" alt=""></a>
                        </div>
                        <div class="col-md-6 col-12 baixe">
                            <a href="https://play.google.com/" target="_blank" ><img src="img/google.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mt-5 ">
                    <img src="img/app.png" class="app" alt="">
                </div>
            </div>
            
        </div>
    </section>
    <section id="rodape">
       <div class="text-center">
           <img src="img/logopreta.png" id="logorodape">
        </div> 
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>