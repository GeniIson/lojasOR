<?php

    // iniciar uma nova sessão
    //session_start();
  //  require_once 'verifica-logado.php';
    // chamar nossa conexao
    include "../../../config/conf_bd_or/conexao.php";
    session_start(); 
   
  
    if(isset($_POST['bt_arquivo'])) {
        
        $ipresa_verificador =mysqli_real_escape_string($con, $_POST['id_impresa']);

        $id_aparelho =mysqli_real_escape_string($con, $_POST['id_ap']);

        if( $_SESSION['ID_emprersa'] ==$ipresa_verificador  ){ 
  
         
            $id_usuario   =$_SESSION['id_usuario'];
            

          



                $sql = "UPDATE aparelhos SET
                 
                 anucia='1'

     WHERE id = '$id_aparelho'";


if(mysqli_query($con, $sql)) {


    $data_inicio  =mysqli_real_escape_string($con, $_POST['data_a']);
    $valor_venda2  =mysqli_real_escape_string($con, $_POST['valor_venda2']);

    $descricao=mysqli_real_escape_string($con, $_POST['desc_ap']);

    $detalhes=mysqli_real_escape_string($con, $_POST['detalhes']);
    $valor_novo =mysqli_real_escape_string($con, $_POST['valor_novo']);
    $capa_arquivo =mysqli_real_escape_string($con, $_POST['bt_arquivo']);
  



    $sql = "INSERT INTO site_anuncios (descricao,detalhes,data_inicio,id_aparelho,capa_arquivo,valor_de_novo,valo_de_venda)
    
    VALUES ('$descricao','$detalhes','$data_inicio','$id_aparelho','$capa_arquivo','$valor_novo',' $valor_venda2')"; 
    
    
                      } 

                      else {
                        $_SESSION['mensagem'] = "Não foi possível inserir informações";
                        $_SESSION['status']   = "danger";
                        header("Location: ../");
                    }



            }
          


        // EXECUTAR INSTRUCAO SQL E VERIFICAR SUCESSO
        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Valor inserida com sucesso!";
            $_SESSION['status']   = "success";

           header("Location: ../");
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
