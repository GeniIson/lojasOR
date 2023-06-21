<?php

$d =mysqli_real_escape_string($con, $_GET['produto']);
  
$sqlp = "SELECT * FROM site_anuncios WHERE id LIKE '$d'";
//$sql = "SELECT * FROM  site_anuncios WHERE status LIKE 'venda' ORDER BY id ASC ";
$resultadop = mysqli_query($con, $sqlp);


$dadosp = mysqli_fetch_array($resultadop);
// criar variaveis para cada dado do array associativo
$id_an   = $dadosp['id'];
$descricao  = $dadosp['descricao'];
$detalhes   = $dadosp['detalhes'];
//$valor_compra   = $dadosp['valor_compra'];
$capa_arquivo = $dadosp['capa_arquivo'];
$valor_venda  = $dadosp['valo_de_venda'];
$valor_novo  = $dadosp['valor_de_novo'];


               ?>   