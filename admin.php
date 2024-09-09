<?php
// admin.php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];
    $autor = $_POST['autor'];

    $stmt = $pdo->prepare("INSERT INTO noticias (titulo, conteudo, autor) VALUES (:titulo, :conteudo, :autor)");
    $stmt->execute([
        ':titulo' => $titulo,
        ':conteudo' => $conteudo,
        ':autor' => $autor
    ]);

    echo "Notícia adicionada com sucesso!";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Admin - Adicionar Notícia</title>
</head>
<body>
    <h1>Adicionar Notícia</h1>
    <form method="POST" action="">
        <label for="titulo">Título:</label><br>
        <input type="text" id="titulo" name="titulo" required><br><br>
        <label for="conteudo">Conteúdo:</label><br>
        <textarea id="conteudo" name="conteudo" rows="10" cols="30" required></textarea><br><br>
        <label for="autor">Autor:</label><br>
        <input type="text" id="autor" name="autor" required><br><br>
        <button type="submit">Adicionar Notícia</button>
    </form>
</body>
</html>
