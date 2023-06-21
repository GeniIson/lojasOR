<?php


  
$sql = "SELECT * FROM site_anuncios WHERE data_fim LIKE '0000-00-00' ORDER BY id DESC ";
//$sql = "SELECT * FROM  site_anuncios WHERE status LIKE 'venda' ORDER BY id ASC ";
$resultado = mysqli_query($con, $sql);


while($dados = mysqli_fetch_array($resultado)) { 
// criar variaveis para cada dado do array associativo
$id_an   = $dados['id'];
$descricao  = $dados['descricao'];
$detalhes   = $dados['detalhes'];
//$valor_compra   = $dados['valor_compra'];
$capa_arquivo = $dados['capa_arquivo'];
$valor_venda  = $dados['valo_de_venda'];
$valor_novo  = $dados['valor_de_novo'];



               include "anuncios.php";








}










               ?>   