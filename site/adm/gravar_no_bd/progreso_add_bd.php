<?php 

  date_default_timezone_set('America/Sao_Paulo');
  $data = date("Y-m-d");
  $hora = date("H:i:s");
  $id_tecnico=    $_SESSION['idusuario'] ;
  $tecnico=      $_SESSION['nome']   ; 

if(mysqli_query($con, $sql)) {

         

   
    $comentario=$nome_progreso;

$sql = "INSERT INTO os_progresso (nome_progreso,id_os,usuario,id_usuario,hora,data,os_status,comentario)
                         VALUES ('$nome_progreso','$os_id','$tecnico','$id_tecnico','$hora','$data','$os_status','$comentario')";
}







?>