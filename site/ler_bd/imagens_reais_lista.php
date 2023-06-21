<?php

$di =mysqli_real_escape_string($con, $_GET['produto']);
  
$sqlf = "SELECT * FROM site_anuncios_fotos WHERE id_anuncio LIKE '$di' ORDER BY id DESC ";
//$sql = "SELECT * FROM  site_anuncios WHERE status LIKE 'venda' ORDER BY id ASC ";
$resultadof = mysqli_query($con, $sqlf);


while($dadosf = mysqli_fetch_array($resultadof)) { 
// criar variaveis para cada dado do array associativo
$id_f   = $dadosf['id'];
$descricao  = $dadosf['descricao'];

$nome_arquivo = $dadosf['nome_arquivo'];




               include "imagens_anucios.php";








}










               ?>  