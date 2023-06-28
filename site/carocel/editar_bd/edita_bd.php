<?php

include "../../../../../config/conf_bd_or/conexao.php";
if (!isset($_SESSION)) {
    session_start();
  } 


  if (isset($_POST['bt_ed_nome'])) {
    // criar variaveis e pegar dados para atualizar
    $id     =  $_POST['bt_ed_nome'];
    $nome          = mysqli_real_escape_string($con, $_POST['name_anucio']);
  

    // SQL DE ATUALIZACAO
    $sql = "UPDATE site_carocel SET
            descricao = '$nome'
          
            WHERE id = '$id'";

    if(mysqli_query($con, $sql)) {
        $_SESSION['mensagem'] = "Nome do anuncio atualizado com sucesso!";
        $_SESSION['status']   = "success";
        // redirecionamento
        header("Location: ../../../?produto=$id");
    }
     else {
        $_SESSION['mensagem'] = "Não foi possível!";
        $_SESSION['status']   = "danger";
        header("Location: ../../../?produto=$id");
    }

} 



   echo"Erro!";// fim if isset
