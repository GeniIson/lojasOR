<?php
   if (!isset($_SESSION)) {
    session_start();
  }             // iniciar sessao
  //  require_once 'conexao.php'; // chamar conexao


    // pegar os dados postados e fazer o escape
    
    if(isset($con, $_SESSION['ID_emprersa'])){

    $id_empresa = (mysqli_real_escape_string($con, $_SESSION['ID_emprersa']));}

    
    $sqlat = "SELECT * FROM movimentacao_financeir WHERE empresa_id = '$id_empresa' ORDER BY id DESC LIMIT 1";//aqui verifica np banco de dados se o banco posue exatamente 
    
    // EXECUTAR A INSTRUCAO SQL
    $resultado = mysqli_query($con, $sqlat);

    if(mysqli_affected_rows($con) > 0) {//aqui se o resutado da consulta for maior que 0 prenche os campos se fo menor nao pula pro else
        // CRIAR ARRAY ASSOCIATIVO COM O RESULTADO DA CONSULTA
        $dados     = mysqli_fetch_array($resultado);
        
        // CRIAR VARIAVEIS DE SESSAO
      
        $capital_valor  =                   $dados['capital_valor'];
        $aparelho_valo  =                   $dados['aparelho_valo'];
        $material_valo =                   $dados['material_valo'];
        $gastos_valor  =                   $dados['gastos_valor'];
    }



//pegar data e hora di sistema
 date_default_timezone_set('America/Sao_Paulo');
 $data = date("d/m/Y");
 $data_i = date("Y-m-d");
 $hora = date("H:i:s");
 $dia = date("d");
 $mes= date("m");
 $ano= date("Y");


 //pegar ip do servidor e transmformar em dominio DNS
 $ip = gethostbyname(gethostname());
 $url="http://$ip/lojasor/paineis/";
 $_SESSION['id_usuario']=1;
 $_SESSION['ID_emprersa']=1;
  $_SESSION['DNS'] = $url;


  $_SESSION['aparelho_compra_valor_total']=$aparelho_valo;
  $_SESSION['gastos_valor']=$gastos_valor;
  $_SESSION['material_valor_total']=$material_valo;
  $_SESSION['captal']=$capital_valor;
