<?php

include('protect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<header class="menu-principal">
    <div class="header1">
    <ul class="lista-categorias">
        <button class="logout"><a href="logout.php">Sair</a></button>
    </ul>

    <div>
    </div></div>
<ul>
    <div class="logo-header">
<img src="imgs/Booklyn-logo" width="20%"></ul>
    </div>
</header>
<div class="content">
<div class="boas-vindas">Bem vindo ao Booklyn, <?php echo $_SESSION['nome']; ?>!</div>

<div class="flexer"><input class="searcher" type="text" name="searcher" id="buscador" placeholder="O que vamos ler hoje?"><button class="btn-searcher">Pesquisar</button></div>


<div>
</body>
</html>