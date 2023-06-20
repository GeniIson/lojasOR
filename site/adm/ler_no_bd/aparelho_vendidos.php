<?php






  
    $sql = "SELECT * FROM aparelhos WHERE status LIKE 'vedido' ORDER BY id DESC ";
    $resultado = mysqli_query($con, $sql);



while($dados = mysqli_fetch_array($resultado)) { 
    // criar variaveis para cada dado do array associativo
    $id_ap   = $dados['id'];
    $tipo  = $dados['tipo'];
    $descricao   = $dados['descricao'];
    $valor_compra   = $dados['valor_compra'];
    $data_compra  = $dados['data_compra'];
    $valor_venda  = $dados['valor_venda'];

echo"
<tr>
              <td>OR$id_ap</td>
              <td>$tipo</td>
              <td>$descricao</td>
              <td>$data_compra</td>
              <td>$valor_compra</td> 
              <td>$valor_venda</td>              
             
            </tr>";










}?>