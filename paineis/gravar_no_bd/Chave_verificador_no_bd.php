<?php

if(!isset($_GET['Cript'])) {
       
   
 
        $_SESSION['mensagem'] = "Erro Fatal!";
        $_SESSION['status']   = "danger";
       // header("Location: ../");
       

    }  

    if(isset($_GET['Cript'])) {
        $chave= $_GET['Cript'];
 
        if($chave!= $_SESSION['Chave']){
 
         $_SESSION['mensagem'] = "Não foi possível inserir informações";
         $_SESSION['status']   = "danger";
         header("Location: ../");
        }
 
     }   

    


        ?>