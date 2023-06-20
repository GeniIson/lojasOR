


<div class='modal fade' id='vender<?=$id_ap?>' tabindex='-1' aria-labelledby='vender<?=$id_ap?>' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalLabel'>Venda de aparelho: <strong><?=$descricao?></strong> <br>Preço: <strong><?=$valor_venda?></strong></h5>
    
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
    </div>



    <form id="meu-formulario455<?=$id_ap?>" action='gravar_no_bd/verde_aparelho_bd.php' method='POST'>

    

  

    <div class='modal-body'>
 
    <span style=' float:right;'>
   
    <label for='data_pagamento' class='form-label'>Data da venda</label>
        
          
    <input type='date' class='form-check-label' id='data_venda'name='data_venda' value='<?=$data_i?>'>
      </span>
     <br>

    <label for='descricao_venda' class='form-check-label'>Decreva para quem vendeo com detailhes</label>
    
    
    <input type='text' id="descricao_venda" class='form-control' name='descricao_venda' placeholder='Ex:Foi vendido a João com um desconto de x valor'>
    <br>
   
  
         
        
         
         
         
          
    
         <label for='valor_venda' class='form-check-label'>Valor total da venda</label>
    
    
         <input type='number'  class='form-control' step='0.05'  min='0' id="valor_venda" name='valor_venda' placeholder='0,00'>
        
        
           
         </div>
          <button type='submit'class='w-100 btn btn-primary btn-purple btn-custom' name='bt_ok_veder' id="bt_ok_veder<?php echo $id_ap; ?>" value='1'>OK</button>
         
          <p></p>

          <input type='hidden' name='bt_vender_v' value='<?=$id_ap?>' />
          <input type='hidden' name='valor_compra' value='<?=$valor_compra?>' />
          <input type='hidden' id='id_impresa' name='id_impresa' value='<?= $idimpresa ?>' />
        

       </form>
       <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Voltar</button>
        <p></p>
        </div> 
        
        </div>
      </div>
    </div>








<script src="../assets/js/bootstrap.bundle.min.js"></script>


<?php
    
   
        ?>
        

        <script>
            var idap = '<?php echo $id_ap; ?>';
            var bt = document.getElementById('bt_ok_vedererrrooooooooo' + idap);
            bt.addEventListener('click', function(event) {
               
              console.log('Aqui estou!');
              alert('Por favor, digite o uma discrição');
      // impede o envio do formulário
      event.preventDefault();
      
      
      // verifica se os campos estão vazios
     
      var formulario = document.getElementById('meu-formulario455' + idap);//este pega o formulario que quero usa
      var inputs = formulario.getElementsByTagName('input');//este pega o tipo de input etc
     

        if (inputs['De' + idap].value.trim() == '') {
          alert('Por favor, digite o uma discrição');
          return;
        }
    
     

      // se todos os campos estiverem preenchidos, envia o formulário
      formulario.submit();
    });
  </script>