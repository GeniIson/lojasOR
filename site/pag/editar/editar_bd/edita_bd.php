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
    $sql = "UPDATE site_anuncios SET
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






    //

    if (isset($_POST['bt_ed_valor'])) {
        // criar variaveis e pegar dados para atualizar
        $id     =  $_POST['bt_ed_valor'];
        $valo_de_venda	  = mysqli_real_escape_string($con, $_POST['valorvenda']); 
        $valor_de_novo             = mysqli_real_escape_string($con, $_POST['valorzero']);    
      
    
        // SQL DE ATUALIZACAO
        $sql = "UPDATE site_anuncios SET
                valo_de_venda	 = '$valo_de_venda',
                valor_de_novo='$valor_de_novo'
                WHERE id = '$id'";

        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Preços do anuncio atualizado com sucesso!";
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


      //

      if (isset($_POST['bt_ed_detalhes'])) {
        // criar variaveis e pegar dados para atualizar
        $id     =  $_POST['bt_ed_detalhes'];
        $detalhes	  =  $_POST['detalhes']; 
        
      
    
        // SQL DE ATUALIZACAO
        $sql = "UPDATE site_anuncios SET
                detalhes	 = '$detalhes'
                WHERE id = '$id'";

        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Detalhes do anuncio atualizado com sucesso!";
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
    if (isset($_POST['bt_arquivo'])) {
        // criar variaveis e pegar dados para atualizar
        $id     =  $_POST['id_detalhes'];
        $capa_arquivo	  = mysqli_real_escape_string($con, $_POST['bt_arquivo']); 
        
      
    
        // SQL DE ATUALIZACAO
        $sql = "UPDATE site_anuncios SET
                capa_arquivo	 = '$capa_arquivo'
                WHERE id = '$id'";

        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Capa do anuncio atualizado com sucesso!";
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
