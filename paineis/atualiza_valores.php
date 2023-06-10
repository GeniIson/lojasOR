<?php





//pegar data e hora di sistema
 date_default_timezone_set('America/Sao_Paulo');
 $data = date("d/m/Y");
 $data_i = date("Y-m-d");
 $hora = date("H:i:s");
 $dia = date("d");
 $mes= date("m");
 $ano= date("Y");


 //pegar ip do servidor e transmformar em dominio DNS
 $ip = gethostbyname(gethostname());
 $url="http://$ip/lojasor/paineis/";

  $_SESSION['DNS'] = $url;
  $_SESSION['aparelho_compra_valor_total']=1;
 $_SESSION['captal']=1;
$_SESSION['id_usuario']=1;
$_SESSION['ID_emprersa']=1;