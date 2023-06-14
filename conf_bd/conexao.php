<?php

    $host     = "127.0.0.1:3306"; // use localhost caso nao funcione o endereco ip
    $user     = "u309471170_admin";
    $password = "G101990g";
    $dbname   = "u309471170_lojas_or";

    // CONEXAO
    @$con = mysqli_connect($host, $user, $password, $dbname);
  

    // TESTAR CONEXAO
    if(mysqli_connect_error()) {
        echo "<p>ERRO: (" . mysqli_connect_errno($con) . ") " . mysqli_connect_error($con) . "</p>";
        exit;
    } else {
        // echo "<p>Conexão realizada com sucesso!</p>";
    }
