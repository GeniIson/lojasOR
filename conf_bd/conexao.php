<?php

    $host     = "127.0.0.1"; // use localhost caso nao funcione o endereco ip
    $user     = "root";
    $password = "";
    $dbname   = "dados_or";

    // CONEXAO
    @$con = mysqli_connect($host, $user, $password, $dbname);
  

    // TESTAR CONEXAO
    if(mysqli_connect_error()) {
        echo "<p>ERRO: (" . mysqli_connect_errno($con) . ") " . mysqli_connect_error($con) . "</p>";
        exit;
    } else {
        // echo "<p>Conexão realizada com sucesso!</p>";
    }
