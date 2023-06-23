<?php

    // UPLOAD
 //   if($_FILES['foto']['name'] != "" || $_FILES['foto']['name'] != null ) {
if(0==0){
        $tipos_permitidos = ['image/jpg', 'image/jpeg', 'image/gif', 'image/png'];
        $extensao = mime_content_type($tipo);
        $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

        // ver array de tipos existe a extensao do arquivo
        if (in_array($extensao, $tipos_permitidos)) {

            $pasta = "../../../../arquivos_fixos_importante_or/imagens_anuncio_reais/";                      // pasta onde vamos guardar
            $temporario = $_FILES['foto']['tmp_name']; // nome original do arquivo
            $novo_nome = uniqid().".$ext";             // novo nome do arquivo

            // fazer o upload do arquivo
            if(move_uploaded_file($temporario, $pasta.$novo_nome)) {
                $foto = $novo_nome;
                // echo "<p>Upload realizado! $foto</p>";
            } // fim fazer upload

        } else {
            // echo "<p>Tipo do arquivo não é permitido.</p>";
            $foto = $_SESSION['foto'];                 // manter a foto anterior
            $_SESSION['msg_upload'] = "Imagem em formato $extensao inválido";
        } // fim if array
        // FIM UPLOAD DA FOTO

    } else {
        $foto = $_SESSION['foto']; // manter a foto anterior
        $_SESSION['msg_upload'] = "imagem não foi adicionada";

    } // fim do if foto nao nula
