<div class='modal fade' id='inseri_captal' tabindex='-1' aria-labelledby='inseri_captal' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalLabel'>Receber do cliente e lançar no Sistema. Os: $id_os</h5>
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
    </div>
   
    <form action='?valores=$id_os#lacar_valor' method='POST'>

    

  

    <div class='modal-body'>
 
    <span style=' float:right;'>
   
    <label for='data_pagamento' class='form-label'>Data do Recebimento</label>
        
          
    <input type='date' class='form-check-label' id='data_pagamento'name='data_pagamento' value='$data_hoje'>
      </span>
     <br>

    <label for='tipo_motivo' class='form-check-label'>Tipo</label>
      
    <select class='form-select' id='tipo_motivo' name='tipo_motivo' required>
      <optgroup label='Escolha um tipo e motivo deste lançamento'>
      <option value='0'>$res</option>
      <option value='receita/Pagamento de  valor'>Receberer (cliente pagou)</option>
      
      
      
      <option value='desconto/Desconto da loja'>Desconto (loja)</option>
     
     

     
      
      <option value='despesa/Estorno ou devolução'>Estorno(Devolução)</option>
      
    
<?php
      //include 'pull/consultar-tecnico_caxabox.php';
    ?>     
      </optgroup>
    </select>
    <br>
    <label for='valor' class='form-check-label'>Descrição</label>
    
    
    <input type='text'  class='form-control' step='0.05'  min='0' name='valor' placeholder='Ex:Pagou adiantado'>
    <br>
   
  
          <input type='hidden' id='idOs' name='idOs' value='$id_os' />

        
          <input type='hidden' id='data_hoje' name='data_hoje' value='$data_hoje'/>
         
          <input type='hidden' id='id_os' name='id_os' value='$id_os' />
         
          
    
         <label for='valor' class='form-check-label'>Valor</label>
    
    
         <input type='number'  class='form-control' step='0.05'  min='0' name='valor' placeholder='0,00'>
        
        
           
         </div>
          <button type='submit'class='w-100 btn btn-primary btn-purple btn-custom' name='Lancar_valor' value='1'>Salvar (Lançar)</button>
         
          <p></p>

         
<button type='button' class='w-100 btn btn-primary btn-purple btn-custom'  style='background-color:#0000007c;' data-bs-dismiss='modal'>Voltar</button>

       </form>
       
        <p></p>
        </div> 
        
        </div>
      </div>
    </div>








<script src="../assets/js/bootstrap.bundle.min.js"></script>