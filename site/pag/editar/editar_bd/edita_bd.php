<?php

include "../../../../config/conf_bd_or/conexao.php";
if (!isset($_SESSION)) {
    session_start();
  } 


    if (isset($_POST['bt_ed_nome'])) {
        // criar variaveis e pegar dados para atualizar
        $idusuario     = $_SESSION['idusuario'];
        $nome          = mysqli_real_escape_string($con, $_POST['nome']);
      
    
        // SQL DE ATUALIZACAO
        $sql = "UPDATE usuarios SET
                descricao = '$nome',
                id  = '$funcionario',
              
                foto = '$foto'
                WHERE idusuario = '$idusuario'";

        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Nome do anuncio atualizado com sucesso!";
            $_SESSION['status']   = "success";
            // redirecionamento
            header('Location: ../?produto=1');
        } else {
            $_SESSION['mensagem'] = "Não foi possível!";
            $_SESSION['status']   = "danger";
            header('Location: ../?produto=1');
        }
        
    } // fim if isset
