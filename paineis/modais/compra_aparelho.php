





<div class='modal fade' id='comprar_aparelho' tabindex='-1' aria-labelledby='comprar_aparelho' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalLabel'>Inserir uma compra de um aparelho</h5>
    
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
    </div>
  
    <form id="meu-formulario2" action='?valores=$id_os#lacar_valor' method='POST'>

    

  

    <div class='modal-body'>
 
    <span style=' float:right;'>
   
    <label for='data_pagamento' class='form-label'>Data da compra</label>
        
          
    <input type='date' class='form-check-label' id='data_pagamento'name='data_recebimento' value='<?=$data_i?>'>
      </span>
     <br>
     <label for='tipo' class='form-check-label'>Tipo</label>
      
      <select class='form-select' id='tipo' name='tipo' required>
        <optgroup label='Escolha um tipo e motivo deste lançamento'>
        <option value='0'></option>
        <option value='TV'>TV</option>
        <option value='outros'>Outro</option>
       <?php
        //include 'pull/consultar-tecnico_caxabox.php';
       ?>    
        </optgroup>
      </select>
      <br>

    <label for='Marca' class='form-check-label'>Marca</label>
    
    
    <input type='text' id="Marca" class='form-control'  name='Marcar' placeholder='Ex: LG'>
    <br>
    <label for='Modelo' class='form-check-label'>Modelo</label>
    
    
    <input type='text' id="Modelo" class='form-control'  name='Modelo' placeholder='Ex:Pt32ls2050'>
    <br>
    <label for='Descri' class='form-check-label'>Descrição</label>
    
    
    <input type='text' id="Descri" class='form-control'  name='Descri' placeholder='Ex:Tv lg de 32 polegadas comprada a João'>
    <br>
   
  
         
        
         
         
         
          
    
         <label for='valor2' class='form-check-label'>Valor da compra</label>
    
    
         <input type='number'  class='form-control' step='0.05'  min='0' id="valor2" name='valor2' placeholder='0,00'>
        
        
           
         </div>
          <button type='submit'class='w-100 btn btn-primary btn-purple btn-custom' name='bt_ok_compra' id="bt_ok_compra" value='1'>Salvar compra</button>
         
          <p></p>

         
        

       </form>
       <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Voltar</button>
        <p></p>
        </div> 
        
        </div>
      </div>
    </div>








<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script>//formulario de validação
    document.getElementById('bt_ok_compra').addEventListener('click', function(event) {
      // impede o envio do formulário
      event.preventDefault();

      // verifica se os campos estão vazios
      var formulario = document.getElementById('meu-formulario2');//este pega o formulario que quero usa
      var inputs = formulario.getElementsByTagName('input');//este pega o tipo de input etc
      
        if (inputs['valor2'].value.trim() == '') {
          alert('Por favor, digite o valor');
          return;
        }
        var select=formulario.getElementsByTagName('select');
        if (select['tipo'].value.trim() == 0) {
          alert('Por favor, escolha o tipo');
          return;
        }
        var msg = formulario.getElementsByTagName('input');
        if (msg['Descri'].value.trim() == '') {
          alert('Mensagem vazia! digite a descrição');
          return;
        }

     

      // se todos os campos estiverem preenchidos, envia o formulário
      formulario.submit();
    });
  </script>