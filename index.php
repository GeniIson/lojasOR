<?php
 if (!isset($_SESSION)) {
    session_start();
    if (!isset($_SESSION['permissoes_id'])) { $_SESSION['permissoes_id']=0;}
  }




//header('Location: paineis/');
header('Location: site/');

?>

