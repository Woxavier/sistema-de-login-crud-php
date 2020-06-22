<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
    </head>
    <body>

        <?php
            //require('database.php');
            require_once('autenticacao.php');
            session_start();
           
        ?>
            <p> <?='Olá, seja bem vindo '.$_SESSION['auth']['name'] ?></p>
            <p>Eu posso fazer toda uma página HTML aqui!!</p>
            <a href="/logout.php">Sair</a>
            <a href="delete/delete.php">Excluir usuário</a>
            <a href="update/edit.php">Alterar dados</a>
    </body>
</html>