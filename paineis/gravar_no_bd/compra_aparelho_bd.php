<?php

    // iniciar uma nova sessão
    //session_start();
  //  require_once 'verifica-logado.php';
    // chamar nossa conexao
    require "../../conf_bd/conexao.php";
    session_start(); 
   
  
    if(isset($_POST['bt_coprar'])) {
        
        $ipresa_verificador =mysqli_real_escape_string($con, $_POST['id_impresa']);

          

        if( $_SESSION['ID_emprersa'] ==$ipresa_verificador  ){ 
  
         
            $id_usuario   =$_SESSION['id_usuario'];
            


            $empresa_id   =mysqli_real_escape_string($con, $_POST['id_impresa']);
            $descricao  =mysqli_real_escape_string($con, $_POST['Descri']);
            

            $valor_compra_add=mysqli_real_escape_string($con, $_POST['valor2']);
            $data  =mysqli_real_escape_string($con, $_POST['data_recebimento']);


$sql = "INSERT INTO aparelhos (id_empresa,descricao,valor_compra,data_compra)

VALUES ('$empresa_id','$descricao','$valor_compra_add','$data')";

if(mysqli_query($con, $sql)) {


    $valocomp=  $_SESSION['aparelho_compra_valor_total'];
    $gastos_valor=$_SESSION['gastos_valor'];
   $material_valo= $_SESSION['material_valor_total'];
    $captal= $_SESSION['captal'];

    $capital_valor= $captal-  $valor_compra_add;
    $aparelho_valo=$valocomp+ $valor_compra_add;


    $sql = "INSERT INTO movimentacao_financeir (empresa_id,descricao,id_usuario,capital_valor,aparelho_valo,gastos_valor,material_valo,data)
    
    VALUES ('$empresa_id','$descricao','$id_usuario','$capital_valor','$aparelho_valo','$gastos_valor','$material_valo','$data')"; 
    
    
                      } 
                      
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
