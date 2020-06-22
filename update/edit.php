<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registrar</title>
    </head>
    <body>

        <?php require('../connection.php')?>
        <h2>Criar sua conta</h2>
        <form action='update.php' method='POST'>
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

                if(!$_SESSION['auth']){
                    header('location: /login.php');
                }
            ?>
            <button type='submit'>Atualizar dados</button>
            <a href="/home.php">Home</a>
        </form>
        
    </body>
</html>