<?php

$di =mysqli_real_escape_string($con, $_GET['produto']);
  
$sqlf = "SELECT * FROM site_anuncios_fotos WHERE id_anuncio LIKE '$di' ORDER BY id DESC ";
//$sql = "SELECT * FROM  site_anuncios WHERE status LIKE 'venda' ORDER BY id ASC ";
$resultadof = mysqli_query($con, $sqlf);


$imageUrls = [
    "../../../arquivos_fixos_importante_or/imagens_anuncio_reais/x",
   
   
    // Adicione mais URLs das imagens aqui
  ];

for ($i = 0; $i < count($imageUrls); $i++) {
    $imageId = $i + 1;}
    $modalId = "imagemModal" . $imageId;
    $zoomInBtnId = "zoomInBtn" . $imageId;
    $zoomOutBtnId = "zoomOutBtn" . $imageId;
    $imageSrc = "../../../arquivos_fixos_importante_or/imagens_anuncio_reais/x";
    


while($dadosf = mysqli_fetch_array($resultadof)) { 
// criar variaveis para cada dado do array associativo
$id_f   = $dadosf['id'];
$descricao  = $dadosf['descricao'];

$nome_arquivo = $dadosf['nome_arquivo'];

 


               include "imagens_anucios.php";








}










               ?>  