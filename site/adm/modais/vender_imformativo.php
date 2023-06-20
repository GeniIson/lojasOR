<div class='modal fade' id='vender_ifor' tabindex='-1' aria-labelledby='vender_ifor' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalLabel'>Vender um aparelho</h5>
    
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
    </div>
    <p>Para realizar uma venda de um aparelho clic no icone vender ao lado do aparelho que esta avenda.</p>



   
  
         
        
         
         
          <button type='submit'class='w-100 btn btn-primary btn-purple btn-custom' name='bt_ok' id="bt_ok" value='1' data-bs-dismiss='modal'>Ok</button>
         
          
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