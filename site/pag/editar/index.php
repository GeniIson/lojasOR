<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Exemplo de uso do CKEditor</title>
    <script src="ckeditor/ckeditor.js"></script>
</head>
<body>
    <h1>Exemplo de uso do CKEditor</h1>

    <form method="POST">
        <textarea name="conteudo" id="editor"></textarea>
        <br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $conteudo = $_POST['conteudo'];

        // Aqui você pode processar o conteúdo enviado pelo CKEditor
        // Exemplo: salvar em um banco de dados, exibir na página, etc.

        echo "<h2>Conteúdo enviado:</h2>";
        echo $conteudo;
    }
    ?>

    <script>
        // Inicializando o CKEditor
        CKEDITOR.replace('editor');
    </script>
</body>
</html>
