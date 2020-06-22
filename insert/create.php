<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registrar</title>
    </head>
    <body>

        <?php require('../connection.php')?>
        <h2>Criar sua conta</h2>
        <form action='store.php' method='POST'>
            <label for="name">Nome:</label><br>
            <input type="text" name='name'><br>
            
            <label for="username">Usuário:</label><br>
            <input type="text" name='username'><br>

            <label for="password">Senha:</label><br>
            <input type="password" name='password'><br>

            <?php
                session_start();
                if(isset($_SESSION['login_errado'])){
                    echo 'Senha e/ou login incorreto!</br>';
                    unset($_SESSION['login_errado']);
                }

                if(isset($_SESSION['auth'])){
                    header('location: /home.php');
                }
            ?>
            <button type='submit'>Registrar-se</button>
            <a href="/login.php">Login</a>
        </form>
        
    </body>
</html>