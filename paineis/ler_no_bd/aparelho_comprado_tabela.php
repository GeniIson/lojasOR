<?php






  
    $sql = "SELECT * FROM aparelhos WHERE status LIKE 'Comprado' ORDER BY id DESC ";
    $resultado = mysqli_query($con, $sql);



while($dados = mysqli_fetch_array($resultado)) { 
    // criar variaveis para cada dado do array associativo
    $id_ap   = $dados['id'];
    $tipo  = $dados['tipo'];
    $descricao_compra  = $dados['descricao_compra'];
    $descricao   = $dados['descricao'];
    $valor_compra   = $dados['valor_compra'];
    $data_compra  = $dados['data_compra'];
    $valor_venda  = $dados['valor_venda'];

echo"
<tr>
              <td>OR$id_ap</td>
              
              <td>$descricao</td>
              <td>$descricao_compra</td>
              <td>$data_compra</td>
              <td>$valor_compra</td> 
                          
              <td> <a href='#'
        
              data-bs-toggle='modal' 
              data-bs-target='#transforma$id_ap'
              style= 'text-decoration: none; ' ;
              
              >
              <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-stack-overflow' viewBox='0 0 16 16'>
              <path d='M12.412 14.572V10.29h1.428V16H1v-5.71h1.428v4.282h9.984z'/>
              <path d='M3.857 13.145h7.137v-1.428H3.857v1.428zM10.254 0 9.108.852l4.26 5.727 1.146-.852L10.254 0zm-3.54 3.377 5.484 4.567.913-1.097L7.627 2.28l-.914 1.097zM4.922 6.55l6.47 3.013.603-1.294-6.47-3.013-.603 1.294zm-.925 3.344 6.985 1.469.294-1.398-6.985-1.468-.294 1.397z'/>
            </svg>Transforma
            </a> 
              </td>
            </tr>
            
            
            
            
            
            <div class='modal fade' id='transforma$id_ap' tabindex='-1' aria-labelledby='transforma$id_ap' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalLabel'>Tranforma aparelho</h5>
    
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
    </div>
    <p>Trasfome o aparelho em aguma destas opções!</p>



   
  
         
        
    <p> <a href='#'
    class='w-100 btn btn-primary btn-purple btn-custom'
    data-bs-toggle='modal' 
    data-bs-target='#a_venda$id_ap'
    style= 'text-decoration: none; ' ;
    
    >A venda</a></p> 
    <p> <a href='#'
    class='w-100 btn btn-primary btn-purple btn-custom'
    data-bs-toggle='modal' 
    data-bs-target='#material$id_ap'
    style= 'text-decoration: none; ' ;
    
    >Material</a></p> 
    <p>  <a href='#'
    class='w-100 btn btn-primary btn-purple btn-custom'
    data-bs-toggle='modal' 
    data-bs-target='#Reciclagem$id_ap'
    style= 'text-decoration: none; ' ;
    
    >Reciclagem</a></p> 
         
         
   
   
         
          
     
        </div> 
        
        </div>
      </div>
    </div>
";




include "modais/a_venda_aparelho.php";





}?>