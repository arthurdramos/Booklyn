<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Escreva o seu e-mail!";
    } else if(strlen($_POST['senha']) == 0){
        echo "Escreva sua senha!";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM users WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die ("Falha na execução do código SQL: " . $mysqli->error);
        
        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "E-mail ou senha incorretos!";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Booklyn Login</title>
</head>
<body>
    <div class="main-login">

        <div class="left-login">
        <h1>Acesse sua conta Booklyn!</h1>

        <img src="leitores.svg" alt="Leitores" width="50%"> 

        </div>

        <div class="right-login">
        <div class="card-login">

        <form action="" method="POST"> 


       <center><img src="imgs/leitura.png" width="25%"></center>


        <div class="textfield">

            <label class="default-text">E-mail</label>

            <input type="text" name="email" placeholder="Digite seu e-mail!">
        </div>

        <br>

        <div class="textfield">
            <label class="default-text">Senha</label>
            
            <input type="password" name="senha" placeholder="Digite sua senha!">
        </div>
        <p>
            <button class="btn-login" type="submit">Entrar</button>
        </p>
        <p class="center-text">
            Se você não possui cadastro, solicite o seu convite <a href="https://docs.google.com/forms/d/e/1FAIpQLScvSlhZA369X5kT6aTcwX3YmxYYnLr6MFyyBuAh_SeL5V9G-g/viewform?usp=sharing" target=”_blank”> clicando aqui! </a>
        </p></div></div></div>

</body>
</html>