<?php
session_start();
require_once 'verifica_sessao.php';
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Library</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/estilo_02.css">
</head>

<body>
    <div class="bloco">
        <img src="./imagens/library.png" style="width:12%" ;br>
        <h2>Olá, <?php echo $dados['nome']; ?></h2>
        <ul>
            <li><a href="./ver_emprestimos.php">Ver Emprestimos</a></li>
            <li><a href="./pesquisar_livros.php">Pesquisar Livros</a></li>
            <li><a href="./cadastro.php">Alterar Cadastro</a></li>
            <li><a href="./logout.php">Sair</a></li>
    </div>

    <body>

</html>