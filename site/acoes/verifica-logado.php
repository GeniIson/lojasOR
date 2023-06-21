<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    $_SESSION['url']= "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];//pegar a url e por na variavel
    if(!isset($_SESSION['idusuario']) || !isset($_SESSION['email'])) {
        header('Location:..');
    }
    // Atualizar a hora de início da sessão a cada vez que o usuário fizer uma ação na página
   // $_SESSION['inicio'] = time();
?>
