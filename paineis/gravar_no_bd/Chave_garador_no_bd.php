<?php
        $chave= uniqid(rand());

        $_SESSION['Chave']= $chave;

        

        $id_impresa=0;

        if(isset($_GET['Com'])) {

            $id_impresa=$_GET['Com'];  
        }


           // CONSULTAR NO BANCO DE DADOS
 
   $sql = "SELECT * FROM config WHERE id_impresa = '$id_impresa';";
    // $sql = "SELECT * FROM usuarios WHERE email = '$email';";//aqui verifica np banco de dados se o banco posue exatamente 
     
     // EXECUTAR A INSTRUCAO SQL
     $resultado = mysqli_query($con, $sql);
 
     if(mysqli_affected_rows($con) > 0) {


      
         $_SESSION['idusuario'] = $dados['idUsuarios'];}
         else{


            $sql = "INSERT INTO config (id_impresa,descricao,id_usuario,capital_valor,aparelho_valo,gastos_valor,material_valo,data)
            
            VALUES ('$id_impresa','$descricao','$id_usuario','$capital_valor','$aparelho_valo',' $despesa_2','$material_valo','$data')"; 
            


         }
        ?>