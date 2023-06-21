





<div class='modal fade' id='capa_add' tabindex='-1' aria-labelledby='capa_add' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalLabel'>Adcionar uma capa para ser usada nos anuncios</h5>
    
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
    </div>
  
    <form action='gravar_no_bd/nova_capa_bd.php' method="POST" enctype="multipart/form-data">
    

  

    <div class='modal-body'>
    <span style=' float:right;'>
   
   <label for='data_inicio' class='form-label'>Data</label>
       
         
   <input type='date' class='form-check-label' id='data_inicio'name='data_inicio' value='<?=$data_i?>'> 
     </span>
    
 
   
      
     
  

    
   
   
  
         
        
         
         
         
          
    
         <label for='valor2' class='form-check-label'>Escolha um Imagem</label>
    
    
         <input type="file" name="foto" id="foto" value="" />
         <br>
         <label for='descricao' class='form-check-label'>Nome da capa</label>
    
    
    <input type='text' id="descricao" class='form-control'  name='descricao' placeholder='Ex:Capa para tv lg 32 polegadas'>
  
        
        
           
         </div>
          <button type='submit'class='w-100 btn btn-primary btn-purple btn-custom' name='bt_ok_compra' id="bt_ok_compra" value='1'>Salvar</button>
         
          <p></p>

         
          <input type='hidden' id='salvar_capa' name='salvar_capa' value='' />
          <input type='hidden' id='id_impresa' name='id_impresa' value='<?= $idimpresa ?>' />

       </form>
      

        
        </div>
      </div>
    </div>








<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script>//formulario de validação
    document.getElementById('bt_ok_compra').addEventListener('click', function(event) {
      // impede o envio do formulário
      event.preventDefault();

      // verifica se os campos estão vazios
      var formulario = document.getElementById('meu-formulario23');//este pega o formulario que quero usa
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
        var mcc = formulario.getElementsByTagName('input');
        if (mcc['Descri_compra'].value.trim() == '') {
          alert('Mensagem vazia! Descreva onde e a quem voce comprou a tv');
          return;
        }

     

      // se todos os campos estiverem preenchidos, envia o formulário
      formulario.submit();
    });
  </script>