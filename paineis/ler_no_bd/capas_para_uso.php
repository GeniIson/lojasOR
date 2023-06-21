<?php


//include "../../config/conf_bd_or/conexao.php";



  //ORDER BY id ASC
    $sql58 = "SELECT * FROM capas  ORDER BY id DESC ";
    $resultado58 = mysqli_query($con, $sql58);


while($dados58 = mysqli_fetch_array($resultado58)) { 
    // criar variaveis para cada dado do array associativo
    $id   = $dados58['id'];
    $nome_arquivo  = $dados58['nome_arquivo'];
    $descricao  = $dados58['descricao'];
    $data_inicio  = $dados58['data_inicio'];
    $id_usuario = $dados58['id_usuario'];
    

   
      $imagem='../site/capas/'.$nome_arquivo;



//$imagem='imagens_tipo/celular2.png';


echo" 




<button type='submit' class='card h-100' name='bt_arquivo' id='bt_arquivo$id' value='$nome_arquivo'>

                      
                            <!-- Sale badge-->
                            <div class='badge bg-dark text-white position-absolute' style='top: 0.5rem; right: 0.5rem'><h5>$descricao</h5></div>
                            
                        
                            <img class='card-img-top' src='$imagem'alt='...' />
                          
                          

                        
                        </button>
                        <hr>
      
       ";






}?>