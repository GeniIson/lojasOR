<div class='modal fade' id='iserir_despesa' tabindex='-1' aria-labelledby='iserir_despesa' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalLabel'>Inserir uma dispesa</h5>
    
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
    </div>
    <p>*As dispesas sera descontado do capital da impresa, Pode ser lançado gasto com: material não cadastrado,trasporte,contas etc.</p>



    <form id="meu-formulario6565" action='gravar_no_bd/iserir_despesa.php' method='POST'>

    

  

    <div class='modal-body'>
 
    <span style=' float:right;'>
   
    <label for='data_pagamento' class='form-label'>Data da dispesa</label>
        
          
    <input type='date' class='form-check-label' id='data_pagamento'name='data_recebimento' value='<?=$data_i?>'>
      </span>
     <br>

    <label for='Descri_dispesa' class='form-check-label'>Descrição da dispesa</label>
    
    
    <input type='text' id="Descri_dispesa" class='form-control' name='Descri_dispesa' placeholder='Ex: Compra de uma placa para aparelho X.'>
    <br>
   
  
         
        
         
         
         
          
    
         <label for='valor_d' class='form-check-label'>Valor da despesa(custo)</label>
    
    
         <input type='number'  class='form-control' step='0.05'  min='0' id="valor_d" name='valor' placeholder='0,00'>
        
        
           
         </div>
          <button type='submit'class='w-100 btn btn-primary btn-purple btn-custom' name='bt_ok' id="bt_ok4" value='1'>Ok</button>
         
          <p></p>

          <input type='hidden' id='bt_inserir' name='bt_inserir' value='' />
          <input type='hidden' id='id_impresa' name='id_impresa' value='<?= $idimpresa ?>' />
        

       </form>
       <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Voltar</button>
        <p></p>
        </div> 
        
        </div>
      </div>
    </div>








<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script>//formulario de validação
    document.getElementById('bt_ok4').addEventListener('click', function(event) {
      // impede o envio do formulário
      event.preventDefault();

      // verifica se os campos estão vazios
      var formulario = document.getElementById('meu-formulario6565');//este pega o formulario que quero usa
      var inputs = formulario.getElementsByTagName('input');//este pega o tipo de input etc
      
        if (inputs['valor_d'].value.trim() == '') {
          alert('Por favor, digite o valor gasto');
          return;
        }
       
        if (inputs['Descri_dispesa'].value.trim() == '') {
          alert('Descrição vazia! digite a descrição da despesa');
          return;
        }

     

      // se todos os campos estiverem preenchidos, envia o formulário
      formulario.submit();
    });
  </script>