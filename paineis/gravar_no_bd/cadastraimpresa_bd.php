<?php

    // iniciar uma nova sessão
    //session_start();
  //  require_once 'verifica-logado.php';
    // chamar nossa conexao
    include "../../../config/conf_bd_or/conexao.php";
   
   
  
    if(isset($_POST['bt_cadstra_imp'])) {
        $nome   =mysqli_real_escape_string($con, $_POST['nome_empresa']);
        $contato   =mysqli_real_escape_string($con, $_POST['contato']);

        $cnpj   =mysqli_real_escape_string($con, $_POST['cnpj']);

        $patrimonio_inicial   =mysqli_real_escape_string($con, $_POST['patrimonio_inicial']);
        $data_inicial   =mysqli_real_escape_string($con, $_POST['data_inicial']);




$sql = "INSERT INTO empresa (nome,contato,cnpj,patrimonio_inicial,data_inicial)

VALUES ('$nome','$contato','$cnpj','$patrimonio_inicial','$data_inicial')";

       
        // EXECUTAR INSTRUCAO SQL E VERIFICAR SUCESSO
        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "impresa cadastrada com sucesso!";
            $_SESSION['status']   = "success";

           header("Location: ../");
        } 
    
       

    else {
        $_SESSION['mensagem'] = "Não foi possível inserir as informações";
        $_SESSION['status']   = "danger";
        header("Location: ../");
       echo"testtt";
    }
    
   }

   else {
    $_SESSION['mensagem'] = "Não foi possível inserir as informações";
    $_SESSION['status']   = "danger";
    header("Location: ../");
   echo"testtt";
}
        // FECHAR CONEXAO
       
     mysqli_close($con);
