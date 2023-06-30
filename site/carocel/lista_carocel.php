<?php

  
$sqlcc = "SELECT * FROM site_carocel  ORDER BY id DESC ";
//$sql = "SELECT * FROM  site_anuncios WHERE status LIKE 'venda' ORDER BY id ASC ";
$resultadocc = mysqli_query($con, $sqlcc);

$active=0;
while($dadoscc = mysqli_fetch_array($resultadocc)) { 
// criar variaveis para cada dado do array associativo
$id_cc   = $dadoscc['id'];
$descricaocc  = $dadoscc['descricao'];
$nome_arquivocc  = $dadoscc['nome_arquivo'];
$titulocc  = $dadoscc['titulo'];
$frase  = $dadoscc['frase'];

 
    
    include "item_carocel.php";




}