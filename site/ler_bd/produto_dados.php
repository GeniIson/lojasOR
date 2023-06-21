<?php


  
$sql = "SELECT * FROM aparelhos WHERE status LIKE 'venda' ORDER BY id ASC ";
//$sql = "SELECT * FROM  site_anuncios WHERE status LIKE 'venda' ORDER BY id ASC ";
$resultado = mysqli_query($con, $sql);


while($dados = mysqli_fetch_array($resultado)) { 
// criar variaveis para cada dado do array associativo
$id_ap   = $dados['id'];
$tipo  = $dados['tipo'];
$descricao   = $dados['descricao'];
$valor_compra   = $dados['valor_compra'];
$extra = $dados['extra'];
$valor_venda  = $dados['valor_usado'];
$valor_novo  = $dados['valor_novo'];



               include "anuncios.php";








}










               ?>   