<?php

    // iniciar uma nova sessão
    //session_start();
  //  require_once 'verifica-logado.php';
    // chamar nossa conexao
    include "../../../../config/conf_bd_or/conexao.php";
    session_start(); 
   
  
    if(isset($_POST['apaga_imag'])) {
        
        $ipresa_verificador =mysqli_real_escape_string($con, $_POST['id_impresa']);


        $id_anuncio2 =mysqli_real_escape_string($con, $_POST['id_anuncio']);

        if( $_SESSION['ID_emprersa'] ==$ipresa_verificador  ){ 
  
         $nome_imag  =mysqli_real_escape_string($con, $_POST['nome_imag']);

            $id_usuario   =$_SESSION['id_usuario'];
            

          
            // Apaga a foto
            include_once 'apagar_imag.php';
           
            $nome=    $novo_nome;
         


                // Exclua o registro da imagem no banco de dados
                $sql = "DELETE FROM site_anuncios_fotos WHERE nome_arquivo = '$nome_imag'";
            

                      
        // EXECUTAR INSTRUCAO SQL E VERIFICAR SUCESSO
        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Apagada com sucesso!";
            $_SESSION['status']   = "success";
            header("Location: ../../?produto=$id_anuncio2");
        } 
    }
        else {


            $_SESSION['mensagem'] = "Não foi possível inserir informações";
            $_SESSION['status']   = "danger";
            header("Location: ../../?produto=$id_anuncio2");
        }


    
   }

   
        // FECHAR CONEXAO
       
     mysqli_close($con);
     echo"Erro!";
