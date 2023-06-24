<?php
 if (!isset($_SESSION)) {
    session_start();
  }
   if (!isset( $_SESSION['DNS'] )) {
   header('Location: ../');
  }
  $permi=$_SESSION['permissoes_id'];

  
  ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Lojas OR</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/carousel.css" rel="stylesheet">
      
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="?home">Lojas OR</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page"  href="?home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Vender</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Conhecer</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">Nossos Produtos</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Nossa Historia</a></li>
                                <li><a class="dropdown-item" href="#!">Nossos parceiros</a></li>
                            </ul>
                        </li>
                    </ul>
                    
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                           
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                    
               <div  style="text-align: end;"> 
               
               <?php
               if( $permi==0) {  

                echo".<a href='../paineis' class='w-10 btn btn-primary btn-purple btn-custom'
    
    data-bs-toggle='modal' 
       data-bs-target='#logrr'
       >Entrar</a></div>";}
       else{
$fot=$_SESSION['foto'];
$p= $_SESSION['nome'];
$an= explode(' ',$p);
$p_n=$an[0];
    echo" 
    
    
    <img src='fotos/$fot' class='img-responsive img-redonda' style='display:inline' alt='' width='25'> &nbsp; &nbsp;
   $p_n 
    
           <a href='../acoes/logout.php' class='btn btn-danger'>Sair</a>
           
           ";
       }
    ?>

    
    </div>
            </div>
       
            


   
        </nav>
       
        <!-- Header-->
        <?php

include 'modal_sit/logim_modal.php';
include 'modal_sit/x_imformativo.php';
include 'modal_sit/vender_modal.php';

if( $permi==1) {

    echo"
<a class='btn btn-lg btn-info' href='../paineis/?entrar=&senha=c3000'
style=' background-color: #00c3ff9f;
border-color:#00c3ff9f; position: fixed;  top: 0.5%;z-index: 1;
font-size: 12px; '>Painel
<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-graph-up-arrow' viewBox='0 0 16 16'>
  <path fill-rule='evenodd' d='M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z'
</svg>

</a>";
}
include "../../config/conf_bd_or/conexao.php";
if(!isset($_GET['produto'])) {include "painel.php";}

if(isset($_GET['produto'])) { 
    include "ler_bd/produto_dados.php";
    include "pag/produto.php";}

       ?>
      
        <header class="bg-dark py-5">


            
<div class="container px-4 px-lg-5 my-5">


    <div class="text-center text-white"
   >
   
    </div>
</div>
</header>
        <!-- Footer-->
        <footer class="py-5 bg-dark" style="margin-bottom:-80px;">
            <div class="container"><p class="m-0 text-center text-white">Gerasoft &copy; 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
