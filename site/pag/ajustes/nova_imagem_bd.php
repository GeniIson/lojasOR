<?php

    // iniciar uma nova sessão
    //session_start();
  //  require_once 'verifica-logado.php';
    // chamar nossa conexao
    include "../../../../config/conf_bd_or/conexao.php";
    if (!isset($_SESSION)) {
        session_start();
      } 
   
  
    if(isset($_POST['salvar_imag'])) {
        
        $ipresa_verificador =mysqli_real_escape_string($con, $_POST['id_impresa']);

        $id_anuncio2 =mysqli_real_escape_string($con, $_POST['id_anuncio']);

        if( $_SESSION['ID_emprersa'] ==$ipresa_verificador  ){ 
  
         
            $id_usuario   =$_SESSION['id_usuario'];
            

          
            $descricao  =mysqli_real_escape_string($con, $_POST['descricao']);
          
           

            $foto          = mysqli_real_escape_string($con, $_FILES['foto']['name']);
            $nome=    $foto ;
            $tipo          = $_FILES['foto']['tmp_name'];

           
            // UPLOAD da foto do perfil
            include_once 'upload.php';
           
            $nome=    $novo_nome;

$sql = "INSERT INTO  site_anuncios_fotos (nome_arquivo,descricao,id_anuncio,id_usuario)

VALUES ('$nome','$descricao','$id_anuncio2','$id_usuario')";

                      
        // EXECUTAR INSTRUCAO SQL E VERIFICAR SUCESSO
        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Imagem inserida com sucesso!";
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
