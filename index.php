<?php
// index.php
require 'config.php';

$stmt = $pdo->query("SELECT * FROM noticias ORDER BY data_publicacao DESC");
$noticias = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Portal de Notícias</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: 20px auto;
        }
        .noticia {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .noticia h2 {
            margin-top: 0;
        }
        .noticia p {
            line-height: 1.5;
        }
        .noticia .data {
            color: #777;
            font-size: 0.9em;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Portal de Notícias</h1>
</div>

<div class="container">
    <?php foreach ($noticias as $noticia): ?>
        <div class="noticia">
            <h2><?= htmlspecialchars($noticia['titulo']); ?></h2>
            <p class="data">Publicado em: <?= date('d/m/Y H:i', strtotime($noticia['data_publicacao'])); ?> | Autor: <?= htmlspecialchars($noticia['autor']); ?></p>
            <p><?= nl2br(htmlspecialchars($noticia['conteudo'])); ?></p>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
