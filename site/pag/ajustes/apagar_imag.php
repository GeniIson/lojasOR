<?php

$caminho_imagem = "../../../../arquivos_fixos_importante_or/imagens_anuncio_reais/$nome_imag";

// Verifica se o arquivo existe
if (file_exists($caminho_imagem)) {
    // Tenta apagar o arquivo
    if (unlink($caminho_imagem)) {
        echo "Imagem apagada com sucesso.";
    } else {
        echo "Não foi possível apagar a imagem.";
    }
} else {
    echo "A imagem não existe.";
}
?>
