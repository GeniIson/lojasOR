


<div class='modal fade' id='anucia<?=$id_ap?>' tabindex='-1' aria-labelledby='anucia<?=$id_ap?>' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalLabel'>Anuciar o aparelho: <strong><?=$descricao?></strong> no site.<br>Preço: <strong><?=$valor_venda?></strong></h5>
    
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
    </div>



    <form id="meu-formulario455<?=$id_ap?>" action='gravar_no_bd/anucia_aparelho_bd.php' method='POST'>

    

  <p>Verifique as informaçãoes se estiver tudo certo é so clicar em avançar</p>

    <div class='modal-body'>
 
    <span style=' float:right;'>
   
    <label for='data_aa' class='form-label'>Data do inicio do anuncio</label>
        
          
    <input type='date' class='form-check-label' id='data_aa'name='data_a' value='<?=$data_i?>'>
      </span>
     <br>

    
  
         
        
         
          
    
     <label for='valor_novo' class='form-check-label'>Preço deste aparelho novo</label>
    
    
    <input type='number'  class='form-control' step='0.05'  min='0' id="valor_novo" name='valor_novo' value='<?=$valor_novo?>'placeholder='0,00'>
         
          <p>Geralmente o preço de venda fica entorno de metade do valor de um novo.</p>
    
         <label for='valor_venda' class='form-check-label'>Preço de venda</label>
    
    
         <input type='number'  class='form-control' step='0.05'  min='0' id="valor_venda" name='valor_venda2' value='<?=$valor_venda?>'  placeholder='<?=$valor_venda?>'>
        
        
           
         </div>
          <a  class='w-100 btn btn-primary btn-purple btn-custom'
          
          data-bs-toggle='modal' 
                           data-bs-target='#anuciap2<?=$id_ap?>'
          >Avançar</a>
         
          <p></p>

          <input type='hidden' name='bt_vender_v' value='<?=$id_ap?>' />
          <input type='hidden' name='id_ap' value='<?=$id_ap?>' />

          <input type='hidden' name='desc_ap' value='<?=$descricao?>' />
        
          <input type='hidden' id='id_impresa' name='id_impresa' value='<?= $idimpresa ?>' />
        

   
       <button type='button' class='w-100 btn btn-secondary' data-bs-dismiss='modal'>Voltar</button>
        <p></p>
        </div> 
        
        </div>
      </div>
    </div>








    <div class='modal fade' id='anuciap2<?=$id_ap?>' tabindex='-1' aria-labelledby='anuciap2<?=$id_ap?>' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalLabel'>Anuciar o aparelho: <strong><?=$descricao?></strong> no site.
    
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
    </div>




    

  <p>Presisamos de mas informaçãoes, apois digitar é so clicar em avançar</p>

    <div class='modal-body'>
 
  
    
  
         
    <label for='di' class='form-check-label'>Descrição mais detalhada do produto</label>
    <textarea cols="1800" rows="6" class="form-control" id="di" name="detalhes" placeholder="">
   </textarea>
   
    
    
    
    <br>
           
         </div>
          <a  class='w-100 btn btn-primary btn-purple btn-custom'
          
          data-bs-toggle='modal' 
                           data-bs-target='#anuciap3<?=$id_ap?>'
          >Avançar</a>
         
          <p></p>

          <a type='button'  class='w-100 btn btn-secondary' 
         
         data-bs-toggle='modal' 
                             data-bs-target='#anucia<?=$id_ap?>'
         >Voltar</a>
        <p></p>
        </div> 
        
        </div>
      </div>
    </div>











    <div class='modal fade' id='anuciap3<?=$id_ap?>' tabindex='-1' aria-labelledby='anuciap3<?=$id_ap?>' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalLabel'>Anuciar o aparelho: <strong><?=$descricao?></strong> no site.</h5>
    
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
    </div>



   

    

    <p>Escolha uma capa para ser apresentada</p>

    <div class='modal-body'>
 

   
           
    <div class="container px-4 px-lg-5 mt-5">

    
               
                <?php  
    include "ler_no_bd/capas_para_uso.php";
    ?>   
                   
                   </div>
      
   
  
         
           
         </div>
         
         
          <p></p>


       </form>
       <a type='button'  class='w-100 btn btn-secondary' 
         
       data-bs-toggle='modal' 
                           data-bs-target='#anuciap2<?=$id_ap?>'
       >Voltar</a>
        <p></p>
        </div> 
        
        </div>
      </div>
    </div>





<script src="../assets/js/bootstrap.bundle.min.js"></script>


<?php
    
   
        ?>
        

      