<div class='modal fade' id='inseri_captal' tabindex='-1' aria-labelledby='inseri_captal' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalLabel'>Injetar capital</h5>
    
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
    </div>
    <p>Nesta aba voce pode lançar emprestimos e capital injetado na empresa de bancos, Investidores e donos.</p>
    <form id="meu-formulario" action='?valores=$id_os#lacar_valor' method='POST'>

    

  

    <div class='modal-body'>
 
    <span style=' float:right;'>
   
    <label for='data_pagamento' class='form-label'>Data do Recebimento</label>
        
          
    <input type='date' class='form-check-label' id='data_pagamento'name='data_recebimento' value='<?=$data_i?>'>
      </span>
     <br>

    <label for='Descri' class='form-check-label'>Descrição</label>
    
    
    <input type='text' id="Descri" class='form-control' step='0.05'  min='0' name='valor' placeholder='Ex:Emprestimo para pagar em 10 meses'>
    <br>
   
  
         
        
         
         
         
          
    
         <label for='valor' class='form-check-label'>Valor</label>
    
    
         <input type='number'  class='form-control' step='0.05'  min='0' id="valor" name='valor' placeholder='0,00'>
        
        
           
         </div>
          <button type='submit'class='w-100 btn btn-primary btn-purple btn-custom' name='bt_ok' id="bt_ok" value='1'>Salvar (injetar)</button>
         
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
    document.getElementById('bt_ok').addEventListener('click', function(event) {
      // impede o envio do formulário
      event.preventDefault();

      // verifica se os campos estão vazios
      var formulario = document.getElementById('meu-formulario');//este pega o formulario que quero usa
      var inputs = formulario.getElementsByTagName('input');//este pega o tipo de input etc
      
        if (inputs['valor'].value.trim() == '') {
          alert('Por favor, digite o valor');
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