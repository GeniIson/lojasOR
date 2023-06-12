





<div class='modal fade' id='a_venda<?=$id_ap?>' tabindex='-1' aria-labelledby='a_venda<?=$id_ap?>' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalLabel'>Por aparelho para venda</h5>
    
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
    </div>
  
    <form id="formulario_p_venda<?=$id_ap?>" action='gravar_no_bd/trasfomar_venda_aparelho_bd.php' method='POST'>

    

  

    <div class='modal-body'>
 
   
    
    
   
  
    <label for='valor2<?=$id_ap?>' class='form-check-label'>Preço de Novo</label>
    
    
    <input type='number'  class='form-control' step='0.05'  min='0' id="valor2<?=$id_ap?>" name='valor_novo' placeholder='0,00'>
        
         
    <label for='valor2<?=$id_ap?>' class='form-check-label'>Quanto gastou para conserta</label>
    
    
    <input type='number'  class='form-control' step='0.05'  min='0' id="valo_gasto_materiais<?=$id_ap?>" name='valo_gasto_materiais' placeholder='0,00'>
         
  
         <label for='valor_usado<?=$id_ap?>' class='form-check-label'>Preço de venda</label>
    
    
         <input type='number'  class='form-control' step='0.05'  min='0' id="valor_usado<?=$id_ap?>" name='valor_usado' placeholder='0,00'>
         <br>
        
         <label for='extra<?=$id_ap?>' class='form-check-label'>Informação extras</label>
    
    
    <input type='text' id="extra<?=$id_ap?>" class='form-control'  name='extra' placeholder='Ex:Pode da desconto ou so pode vender avista etc'>
    <br>
           
         </div>
          <button type='submit'class='w-100 btn btn-primary btn-purple btn-custom' name='bt_ok_compra' id="bt_ook<?=$id_ap?>" value='1'>Salvar</button>
         
          <p></p>

         
          <input type='hidden'  name='bt_trasfomar_v' value='<?=$id_ap?>' />
          <input type='hidden'  name='id_impresa' value='<?= $idimpresa ?>' />

       </form>
       <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Voltar</button>
        <p></p>
        </div> 
        
        </div>
      </div>
    </div>








<script src="../assets/js/bootstrap.bundle.min.js"></script>
