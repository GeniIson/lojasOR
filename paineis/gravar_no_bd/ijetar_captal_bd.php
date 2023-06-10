<?php

    // iniciar uma nova sessão
    //session_start();
  //  require_once 'verifica-logado.php';
    // chamar nossa conexao
    require "../conf_bd/conexao.php";
   
   
  
    if(isset($_POST['bt_s'])) {
        $idOs   =mysqli_real_escape_string($con, $_POST['idOs']);

        if(  $_POST['sintoma']!=''&&  $_POST['causa']!=''  && $_POST['solucao']!=""){ 
  
       
        $sintoma  =mysqli_real_escape_string($con, $_POST['sintoma']);
        $causa  =mysqli_real_escape_string($con, $_POST['causa']);
        $modelo  =mysqli_real_escape_string($con, $_POST['Modelo']);
        $marca  ='';//mysqli_real_escape_string($con, $_POST['marca']);
        
        $solucao  =mysqli_real_escape_string($con, $_POST['solucao']);

        $link_ =mysqli_real_escape_string($con, $_POST['link_']);


        $data_inserir  =mysqli_real_escape_string($con, $_POST['data']);
       
        $id_logado =mysqli_real_escape_string($con, $_POST['id_logado']);
        $criador =mysqli_real_escape_string($con, $_POST['criador']);
       
        $_SESSION["id_os"]=$idOs ;
      
       
        $nivel=0;

$sql = "INSERT INTO dicas (marca,data,sintoma,causa,modelo,tipo,nivel,id_criador,criador,solucao,link_)

VALUES ('$marca','$data_inserir','$sintoma','$causa','$modelo','$tipo','$nivel','$id_logado','$criador','$solucao','$link_')";

       
        // EXECUTAR INSTRUCAO SQL E VERIFICAR SUCESSO
        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Dica inserida com sucesso!";
            $_SESSION['status']   = "success";

           header("Location: ../?iniciar_Os=$idOs&_BD_sucesso");
        } 
    }
        else {
            $_SESSION['mensagem'] = "Não foi possível inserir informações";
            $_SESSION['status']   = "danger";
            header("Location: ../?iniciar_Os=$idOs");
        }


    
   }
        // FECHAR CONEXAO
       
     mysqli_close($con);
