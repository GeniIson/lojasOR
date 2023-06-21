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
    $valor_novo  = $dados['valor_novo'];
    $anucia  = $dados['anucia'];

echo"
<tr>
              <td>OR$id_ap</td>
              
              <td>$descricao</td>
              <td style='font-size:16px;'>$valor_venda</td>
              <td>$extra</td>
          
                       
              <td> 

             
              <a href='#'
     
           data-bs-toggle='modal' 
           data-bs-target='#vender$id_ap'
           style= 'text-decoration: none; ' ;
           
           >
           <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-bag-check-fill' viewBox='0 0 16 16'>
<path fill-rule='evenodd' d='M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z'/>
</svg>
         Vender
         </a> 
         


";




include "modais/vender_aparelho.php";
              
              if($anucia!='1'){


                echo"
            <a href='#'
        
            data-bs-toggle='modal' 
            data-bs-target='#anucia$id_ap'
            style= 'text-decoration: none; ' ;
            
            >
        
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-megaphone-fill' viewBox='0 0 16 16'>
  <path d='M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-11zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25.222 25.222 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56V3.224zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009a68.14 68.14 0 0 1 .496.008 64 64 0 0 1 1.51.048zm1.39 1.081c.285.021.569.047.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a65.81 65.81 0 0 1 1.692.064c.327.017.65.037.966.06z'/>
</svg>
          Anuncia
          </a> 

          </td>
          </tr>
            ";

            include "modais/anuciar_aparelho.php";
            }
      







}?>