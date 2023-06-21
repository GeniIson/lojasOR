<?php

    // iniciar uma nova sessão
    //session_start();
  //  require_once 'verifica-logado.php';
    // chamar nossa conexao
    include "../../../config/conf_bd_or/conexao.php";
    session_start(); 
   
  
    if(isset($_POST['salvar_capa'])) {
        
        $ipresa_verificador =mysqli_real_escape_string($con, $_POST['id_impresa']);

          

        if( $_SESSION['ID_emprersa'] ==$ipresa_verificador  ){ 
  
         
            $id_usuario   =$_SESSION['id_usuario'];
            

          
            $descricao  =mysqli_real_escape_string($con, $_POST['descricao']);
            $data_inicio  =mysqli_real_escape_string($con, $_POST['data_inicio']);


            $foto          = mysqli_real_escape_string($con, $_FILES['foto']['name']);
            $nome=    $foto ;
            $tipo          = $_FILES['foto']['tmp_name'];

           
            // UPLOAD da foto do perfil
            include_once 'upload.php';
           
            $nome=    $novo_nome;

$sql = "INSERT INTO  capas (nome_arquivo,descricao,data_inicio,id_usuario)

VALUES ('$nome','$descricao','$data_inicio','$id_usuario')";

                      
        // EXECUTAR INSTRUCAO SQL E VERIFICAR SUCESSO
        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Capa inserida com sucesso!";
            $_SESSION['status']   = "success";

           header("Location: ../");
        } 
    }
        else {
            $_SESSION['mensagem'] = "Não foi possível inserir informações";
            $_SESSION['status']   = "danger";
            header("Location: ../");
        }


    
   }

   
        // FECHAR CONEXAO
       
     mysqli_close($con);
     echo"Erro!";
