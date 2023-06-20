
<!-- modal OBS mudar o numero no id para ficar igual id no banco de dados -->



<div class='modal fade' id='transforma<?=$id_ap?>' tabindex='-1' aria-labelledby='transforma<?=$id_ap?>' aria-hidden='true'>
          <div class='modal-dialog'>
            <div class='modal-content'>
              <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>
               Tansforma o aparelho:<?=$descricao?> </h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
              </div>
              <div class='modal-body'>

              <p>Atenção para tranforma precisa responder as perguntas coretamente!</p>
             <h3> O aparelho tem conseto? </h3>

             <a href='#'
    class='w-100 btn btn-primary btn-purple btn-custom'
    data-bs-toggle='modal' 
    data-bs-target='#transforma3<?=$id_ap?>'
    style= 'text-decoration: none; ' ;
    
    >Sim</a>
    <p></p>
    <a href='#'
    class='w-100 btn btn-primary btn-purple btn-custom'
    data-bs-toggle='modal' 
    data-bs-target='#transforma2<?=$id_ap?>'
    style= 'text-decoration: none; ' ;
    
    >Não</a>
             
                 </div>
              <div class='modal-footer'>
    
              </div><button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
             <br>
            </div>
          </div>
        </div>
    
            
<div class='modal fade' id='transforma2<?=$id_ap?>' tabindex='-1' aria-labelledby='transforma2<?=$id_ap?>' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalLabel'>Tranforma aparelho</h5>
    
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
    </div>
    <p>Trasfome o aparelho em uma destas opções!</p>



   
  
         
        
  
    <p> <a href='#'
    class='w-100 btn btn-primary btn-purple btn-custom'
    data-bs-toggle='modal' 
    data-bs-target='#material$id_ap'
    style= 'text-decoration: none; ' ;
    
    >
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-minecart-loaded" viewBox="0 0 16 16">
  <path d="M4 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm8-1a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM.115 3.18A.5.5 0 0 1 .5 3h15a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 14 12H2a.5.5 0 0 1-.491-.408l-1.5-8a.5.5 0 0 1 .106-.411zm.987.82 1.313 7h11.17l1.313-7H1.102z"/>
  <path fill-rule="evenodd" d="M6 1a2.498 2.498 0 0 1 4 0c.818 0 1.545.394 2 1 .67 0 1.552.57 2 1h-2c-.314 0-.611-.15-.8-.4-.274-.365-.71-.6-1.2-.6-.314 0-.611-.15-.8-.4a1.497 1.497 0 0 0-2.4 0c-.189.25-.486.4-.8.4-.507 0-.955.251-1.228.638-.09.13-.194.25-.308.362H3c.13-.147.401-.432.562-.545a1.63 1.63 0 0 0 .393-.393A2.498 2.498 0 0 1 6 1z"/>
</svg>Material</a></p> 
    <p>  <a href='#'
    class='w-100 btn btn-primary btn-purple btn-custom'
    data-bs-toggle='modal' 
    data-bs-target='#Reciclagem$id_ap'
    style= 'text-decoration: none; ' ;
    
    >
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-prescription2" viewBox="0 0 16 16">
  <path d="M7 6h2v2h2v2H9v2H7v-2H5V8h2V6Z"/>
  <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v10.5a1.5 1.5 0 0 1-1.5 1.5h-7A1.5 1.5 0 0 1 3 14.5V4a1 1 0 0 1-1-1V1Zm2 3v10.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V4H4ZM3 3h10V1H3v2Z"/>
</svg>Reciclagem</a></p> 
         
         
   
   
         
          
     
        </div> 
        
        </div>
      </div>
    </div>

    
<div class='modal fade' id='transforma3<?=$id_ap?>' tabindex='-1' aria-labelledby='transforma3<?=$id_ap?>' aria-hidden='true'>
          <div class='modal-dialog'>
            <div class='modal-content'>
              <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>
               Tansforma o aparelho:<?=$descricao?> </h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
              </div>
              <div class='modal-body'>

              <p>Atenção para tranforma precisa responder as perguntas coretamente!</p>
             <h3>Foi utilizado material cadastrado neste sistema ? </h3>
             <p>Material que tenha sido cadastrado no sitema como um aparelho sem conserto que foi separdo no sista as peças ou peças que foi comprado a agum fornecedor e foi devidamente cadastrado</p>

             <a href='?por_a_venda'
    class='w-100 btn btn-primary btn-purple btn-custom'
    
    style= 'text-decoration: none; ' ;
    
    >Sim</a>
    <p></p>
    <a href='#'
    class='w-100 btn btn-primary btn-purple btn-custom'
    data-bs-toggle='modal' 
    data-bs-target='#a_venda<?=$id_ap?>'
    style= 'text-decoration: none; ' ;
    
    >Não</a>
             
                 </div>
              <div class='modal-footer'>
    
              </div><button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
             <br>
            </div>
          </div>
        </div>
<?php


include "modais/a_venda_aparelho.php";


