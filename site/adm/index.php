<?php
if (!isset($_SESSION)) {
  session_start();
} 

 $senha2=1;
 
 
if(isset($_GET['bt_entrar'])) {
    
    
    $_SESSION['Bem_vido'] =$_GET['senha'] ;
     
}

if (isset($_SESSION)) {
    
     $senha2=  $_SESSION['Bem_vido'] ;

} 


if( $senha2 == 'c3000'){
    
    
    
      
        $_SESSION['mensagem']  = " <h1>Bem vido!</h1>";
        $_SESSION['status']    = "success";



 //esta parte para inia e indentificar
 $_SESSION['ID_emprersa'] = '1';

//conctar ao banco de dados
include "../../config/conf_bd_or/conexao.php";
//atualizar valores
include "atualiza_valores.php";

//paine que mostara as funções
include "painel.php";
//modais para enserir os dados 
include "modais/ijeta_captal.php";include "modais/cadastra_usuario.php";
include "modais/compra_aparelho.php";
include "modais/cadastra_empresa.php";
include "modais/vender_imformativo.php";include "modais/iserir_despesa.php";
include "modais/x_imformativo.php";

}
else{
        // CRIAR VARIAVEIS DE SESSAO
        $_SESSION['mensagem'] = "Erro no login! Usuario ou senha incorretos {$senha2}";
        $_SESSION['status'] = "danger";
        header('Location: ../'); // REDIRECIONAR PARA O INDEX
    }