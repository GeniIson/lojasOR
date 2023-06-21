
     
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="capas/<?=$capa_arquivo?>"alt="<?=$id_an?>" /></div>
                    <div class="col-md-6" >
                   
                        <div class="small mb-1">Estoque:1</div>
                        <h1 class="display-5 fw-bolder"><?=$descricao?></h1>
                        <div class="fs-5 mb-5">
                            <span class="text-decoration-line-through" style="font-size: 16px;">R$<?=$valor_novo?></span>
                            <span style="font-size: 25px;" >R$<?=$valor_venda?></span>
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="pag/?produto=<?=$id_ap ?>">
                    <i class="bi-cart-fill me-1"></i>


Comprar</a>

<a class="btn btn-lg btn-info" href="perfil.php"
           style=" background-color:#006eff59;
           border-color:#006eff59; position: fixed; right: 0; top: 0.5%;z-index: 1;
           font-size: 12px; ">  
           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
</svg>
         Comprar</a>


</div>
                        </div>
                        
                        <p class="lead"><?=$detalhes ?></p>


                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Imagens reais</h2>


                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

<?php  
 include "ler_bd/imagens_reais_lista.php";
?>



            
</div> </div>
        </section>
     
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

