<?php






  
    $sql = "SELECT * FROM aparelhos WHERE status LIKE 'venda' ORDER BY id ASC ";
    $resultado = mysqli_query($con, $sql);



while($dados = mysqli_fetch_array($resultado)) { 
    // criar variaveis para cada dado do array associativo
    $id_ap   = $dados['id'];
    $tipo  = $dados['tipo'];
    $descricao   = $dados['descricao'];
    $valor_compra   = $dados['valor_compra'];
    $extra = $dados['extra'];
    $valor_venda  = $dados['valor_usado'];

echo"
<tr>
              <td>OR$id_ap</td>
              
              <td>$descricao</td>
              <td style='font-size:16px;'>$valor_venda</td>
              <td>$extra</td>
          
                       
              <td> 
                          
            <a href='#'
        
              data-bs-toggle='modal' 
              data-bs-target='#compra'
              style= 'text-decoration: none; ' ;
              
              >
              <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-bag-check-fill' viewBox='0 0 16 16'>
  <path fill-rule='evenodd' d='M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z'/>
</svg>
            Vender
            </a> 
              </td>
            </tr>";










}?>