<div class='modal fade' id='cadastra_empresa' tabindex='-1' aria-labelledby='cadastra_empresa' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalLabel'>Cadastra uma nova Empresa</h5>
    
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
    </div>
    
    <form id="meu-formulario3" action='gravar_no_bd/cadastraimpresa_bd.php' method='POST'>

    

  

    <div class='modal-body'>
 
    <span style=' float:right;'>
   
    <label for='data_inicial' class='form-label'>Data inicial da atividade</label>
        
          
    <input type='date' class='form-check-label' id='data_inicial'name='data_inicial' value='<?=$data_i?>'>
      </span>
     <br>

    <label for='nome_empresa' class='form-check-label'>Nome da empresa</label>
    
    
    <input type='text' id="nome_empresa" name="nome_empresa" class='form-control' placeholder='Ex:Lojas OR'>
    <br>
    <label for='cnpj' class='form-check-label'>Cnpj/CPF</label>
    
    
    <input type='text' id="bnpj" name="cnpj" class='form-control' placeholder='Ex:00000000-00'>
    <br>
    <label for='contato' class='form-check-label'>Contato</label>
    
    
    <input type='text' id="contato" name="contato" class='form-control' placeholder='Ex: 87 9888888'>
    <br>
   
   
  
         
        
         
         
         
          
    
         <label for='patrimonio_inicial' class='form-check-label'>Patrimonio inicial</label>
    
    
         <input type='number'  class='form-control' step='0.05'  min='0' id="patrimonio_inicial" name='patrimonio_inicial' placeholder='0,00'>
        
        
           
         </div>
          <button type='submit'class='w-100 btn btn-primary btn-purple btn-custom' name='bt_ok' id="bt_ok3" value='1'>Salvar cadastro</button>
         
          <p></p>

         
          <input type='hidden' id='bt_cadstra_imp' name='bt_cadstra_imp' value='' />
     

       </form>
       <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Voltar</button>
        <p></p>
        </div> 
        
        </div>
      </div>
    </div>








<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script>//formulario de validação
    document.getElementById('bt_ok3').addEventListener('click', function(event) {
      // impede o envio do formulário
      event.preventDefault();

      // verifica se os campos estão vazios
      var formulario = document.getElementById('meu-formulario3');//este pega o formulario que quero usa
      var inputs = formulario.getElementsByTagName('input');//este pega o tipo de input etc
      
        if (inputs['patrimonio_inicial'].value.trim() == '') {
          alert('Por favor, digite o valor do ptrimonio inicial');
          return;
        }
        var msg = formulario.getElementsByTagName('input');
        if (msg['nome_empresa'].value.trim() == '') {
          alert('Mensagem vazia! digite a o nome da empresa');
          return;
        }

     

      // se todos os campos estiverem preenchidos, envia o formulário
      formulario.submit();
    });
  </script>