<?php

    // iniciar uma nova sessão
    //session_start();
  //  require_once 'verifica-logado.php';
    // chamar nossa conexao
    require "../../conf_bd/conexao.php";
    session_start(); 
   
  
    if(isset($_POST['bt_trasfomar_v'])) {
        
        $ipresa_verificador =mysqli_real_escape_string($con, $_POST['id_impresa']);

          

        if( $_SESSION['ID_emprersa'] ==$ipresa_verificador  ){ 
  
         
            $id_usuario   =$_SESSION['id_usuario'];
            

            $id   =mysqli_real_escape_string($con, $_POST['bt_trasfomar_v']);

            $valor_novo  =mysqli_real_escape_string($con, $_POST['valor_novo']);
            $valor_usado  =mysqli_real_escape_string($con, $_POST['valor_usado']);
            $valo_gasto_materiais=mysqli_real_escape_string($con, $_POST['valo_gasto_materiais']);

            $extra=mysqli_real_escape_string($con, $_POST['extra']);
          



            $sql = "UPDATE aparelhos SET
                
                status='venda',
                valor_novo='$valor_novo',
                valor_usado='$valor_usado',
                valo_gasto_materiais='$valo_gasto_materiais',
                extra='$extra'

     WHERE id = '$id'";


        // EXECUTAR INSTRUCAO SQL E VERIFICAR SUCESSO
        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Valor inserida com sucesso!";
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
