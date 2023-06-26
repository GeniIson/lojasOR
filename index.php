<?php
 if (!isset($_SESSION)) {
    session_start();
    if (!isset($_SESSION['permissoes_id'])) { $_SESSION['permissoes_id']=0;

      include "../config/comfg_e_DNS_todos_app.php";
      $_SESSION['DNS']     = $DNS;}
  }




//header('Location: paineis/');
header('Location: site/');

?>

