<?php

    // iniciar uma nova sessão
    //session_start();
  //  require_once 'verifica-logado.php';
    // chamar nossa conexao
    include "../../../config/conf_bd_or/conexao.php";
   
   
  
    if(isset($_POST['bt_cadstra_uso'])) {
        $nome   =mysqli_real_escape_string($con, $_POST['nome_uso']);
        $contato   =mysqli_real_escape_string($con, $_POST['contato']);
        $cargo_uso  =mysqli_real_escape_string($con, $_POST['cargo_uso']);
        $id_impresa   =mysqli_real_escape_string($con, $_POST['id_impresa']);
        $permi_a   =mysqli_real_escape_string($con, $_POST['permi_a']);
        $email   =mysqli_real_escape_string($con, $_POST['email']);
     
        $senha = md5(mysqli_real_escape_string($con, $_POST['senha']));

        $data_inicial   =mysqli_real_escape_string($con, $_POST['data_inicial']);


    $sql = "INSERT INTO usuario (nome,contato,id_empresa,id_permicao,data_inicial,email,senha,cargo)

    VALUES ('$nome','$contato','$id_impresa','$permi_a','$data_inicial','$email','$senha','$cargo_uso')";

}


       
        // EXECUTAR INSTRUCAO SQL E VERIFICAR SUCESSO
        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Usuario cadastrado com sucesso!";
            $_SESSION['status']   = "success";

           header("Location: ../");
        } 
    
       

    else {
        $_SESSION['mensagem'] = "Não foi possível inserir as informações";
        $_SESSION['status']   = "danger";
        header("Location: ../");
       echo"testtt";
    }
    
   

        // FECHAR CONEXAO
       
     mysqli_close($con);
