<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
    </head>
    <body>

        <?php require('connection.php')?>
        <h2>login</h2>
        <form action='./valida_login.php' method='POST'>
            <label for="">Usuário</label><br>
            <input type="text" name='username'><br>

            <label for="">Senha</label><br>
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
            <button type='submit'>Enviar</button>
            <a href="insert/create.php">Registrar-se</a>
        </form>
        
    </body>
</html>