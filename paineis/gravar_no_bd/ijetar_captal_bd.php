<?php

    // iniciar uma nova sessão
    //session_start();
  //  require_once 'verifica-logado.php';
    // chamar nossa conexao
    include "../../../config/conf_bd_or/conexao.php";
    session_start(); 


   
  
    if(isset($_POST['bt_injetar'])) {
        
        $ipresa_verificador =mysqli_real_escape_string($con, $_POST['id_impresa']);

          

        if( $_SESSION['ID_emprersa'] ==$ipresa_verificador  ){ 
  
            $captal= $_SESSION['captal'];
            $id_usuario   =$_SESSION['id_usuario'];


            $empresa_id   =mysqli_real_escape_string($con, $_POST['id_impresa']);
            $descricao  =mysqli_real_escape_string($con, $_POST['Descri']);
            

            $capital_add=mysqli_real_escape_string($con, $_POST['valor']);
            $data  =mysqli_real_escape_string($con, $_POST['data_recebimento']);


         

            $valocomp=  $_SESSION['aparelho_compra_valor_total'];
            $gastos_valor=$_SESSION['gastos_valor_total'];
           $material_valo= $_SESSION['material_valor_total'];
            $captal= $_SESSION['captal'];
        
          
            $aparelho_valo=$valocomp;
            $capital_valor= $captal+ $capital_add;
        
            $sql = "INSERT INTO movimentacao_financeir (empresa_id,descricao,id_usuario,capital_valor,aparelho_valo,gastos_valor,material_valo,data)
            
            VALUES ('$empresa_id','$descricao','$id_usuario','$capital_valor','$aparelho_valo','$gastos_valor','$material_valo','$data')"; 
            

       
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
