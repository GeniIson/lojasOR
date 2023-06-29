
  
    
<div class="carousel-item">
  
      <img src="images/<?=$nome_arquivocc?>" alt="" />



      <div class="container">
        
        <div class="carousel-caption">
        <p style=' text-align:right;z-index:9999;
text-decoration: none;'>
<a href=""
    data-bs-toggle='modal' 
       data-bs-target='#carocel_edt'  
    
    
    ><i class="bi bi-pencil-square"></i></a>
<a href=""
    data-bs-toggle='modal' 
       data-bs-target='#carocel_edt'  
    
    
    ><i class="bi bi-archive-fill"></i></a>



          </p>
        <h1 class="display-4 fw-bolder"><?=$titulocc?><?php
           
           if( $permi==1) {
            
            include "bt_editar/paragrafo_carocel.php";
           }?>


    </h1>
              <p class="lead fw-normal text-white-50 mb-0"><?=$frase?> 



           <?php
           
           if( $permi==1) {
            
            include "bt_editar/paragrafo_carocel.php";

            
           }?>


</p>
         
        </div>
      </div>
   



      
    </div>


    
 


    





    




