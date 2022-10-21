<?php

    include "conexao.php";

    if(isset($_POST['password'])){
        $username = trim($_POST['username']);
        $password = md5(trim($_POST['password']));

        //escreve a sql
        $sql = "select * from users where username = '$username' and password = '$password' ";

        //executa a sql
        $testeLogin = mysqli_query($conexao,$sql);
        $existe = mysqli_num_rows($testeLogin);//conta o numero de linhas, a partir do 0, masss 0 é nº negativo

        if($existe){
            //carrega a sql em um vetor(array)
            $dados = mysqli_fetch_array($testeLogin);
            $password = $dados['password'];
            $name = $dados['name'];
            $username = $dados['username'];
            $email = $dados['email'];

            if(!isset($_SESSION)){ //como se fosse um cookie, a informação fica guardada em execução, fica armazenada desde o início da sessão(login) até a destruição dessa sessão (logout)
                session_start();
            }


            $_SESSION['username'] = $username;
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;

            header('location: index.php');
        }
        else{
            echo "Usuario ou senha invalidos.";
        }
    }
?>