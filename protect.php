<?php 

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("Você não pode acessar esta página, efetue o login para visualizá-la. <p><a href=\"index.php\">Entrar</a></p>");
}

?> 