<?php

$usuario = 'root'; 
$senha = '';
$database = 'booklyn_users';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar" . $mysqli->error);

}