<?php

    // iniciar uma nova sessão
    //session_start();
  //  require_once 'verifica-logado.php';
    // chamar nossa conexao
    include "../../../config/conf_bd_or/conexao.php";
    session_start(); 
   
  
    if(isset($_POST['bt_vender_v'])) {
        
        $ipresa_verificador =mysqli_real_escape_string($con, $_POST['id_impresa']);

          

        if( $_SESSION['ID_emprersa'] ==$ipresa_verificador  ){ 
  
         
            $id_usuario   =$_SESSION['id_usuario'];
            

            $id   =mysqli_real_escape_string($con, $_POST['bt_vender_v']);

            $data_venda  =mysqli_real_escape_string($con, $_POST['data_venda']);
            $valor_venda  =mysqli_real_escape_string($con, $_POST['valor_venda']);

            $descricao_venda=mysqli_real_escape_string($con, $_POST['descricao_venda']);


            if($descricao_venda!='' &&  $valor_venda!='0' ){



                $sql = "UPDATE aparelhos SET
                 
                status='vendido',
                valor_venda='$valor_venda',
                data_venda='$data_venda',
              
                descricao_venda='$descricao_venda'

     WHERE id = '$id'";


if(mysqli_query($con, $sql)) {


    $valor_compra=mysqli_real_escape_string($con, $_POST['valor_compra']);
    $empresa_id =mysqli_real_escape_string($con, $_POST['id_impresa']);


    $valocomp=  $_SESSION['aparelho_compra_valor_total'];
    $gastos_valor=$_SESSION['gastos_valor_total'];
   $material_valo= $_SESSION['material_valor_total'];
    $captal= $_SESSION['captal'];

    $x=$valor_venda-$valor_compra;

    $capital_valor= $captal+$valor_venda;

    $aparelho_valo=$valocomp-$valor_compra;


    $sql = "INSERT INTO movimentacao_financeir (empresa_id,descricao,id_usuario,capital_valor,aparelho_valo,gastos_valor,material_valo,data)
    
    VALUES ('$empresa_id','$descricao_venda','$id_usuario','$capital_valor','$aparelho_valo','$gastos_valor','$material_valo','$data_venda')"; 
    
    
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
