<?php






  
    $sql = "SELECT * FROM aparelhos WHERE status LIKE 'Comprado' ORDER BY id DESC ";
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
              <td><a href='#'
        
              data-bs-toggle='modal' 
              data-bs-target='#compra'
              style= 'text-decoration: none; ' ;
              
              >$valor_venda</a></td>              
              <td> <a href='#'
        
              data-bs-toggle='modal' 
              data-bs-target='#compra'
              style= 'text-decoration: none; ' ;
              
              >
              <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-stack-overflow' viewBox='0 0 16 16'>
              <path d='M12.412 14.572V10.29h1.428V16H1v-5.71h1.428v4.282h9.984z'/>
              <path d='M3.857 13.145h7.137v-1.428H3.857v1.428zM10.254 0 9.108.852l4.26 5.727 1.146-.852L10.254 0zm-3.54 3.377 5.484 4.567.913-1.097L7.627 2.28l-.914 1.097zM4.922 6.55l6.47 3.013.603-1.294-6.47-3.013-.603 1.294zm-.925 3.344 6.985 1.469.294-1.398-6.985-1.468-.294 1.397z'/>
            </svg>
            Transforma
            </a> ou              
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