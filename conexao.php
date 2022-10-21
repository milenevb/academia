<?php

    $local = "localhost";
    $usuarios = "root";
    $senha = "";
    $banco = "gym";

    $conexao = mysqli_connect($local,$usuarios,$senha,$banco);

    //mysqli_connect("localhost","root","","eteot");

    header("Content-Type; text/html; charset=utf-8");
    mysqli_query($conexao, "SET character_set_connection = utf8");
    mysqli_query($conexao, "SET character_set_client = utf8");
    mysqli_query($conexao, "SET character_set_results = utf8");
    
?>