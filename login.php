<?php include('server.php');?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Php login system</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="header">
            <h2>Login</h2>
        </div>

    <form method="post" action="login.php">
        <?php include('errors.php');?>
        <div class="input-group">
            <label>Nome</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Senha</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>
        <p>
            Ainda não possui uma conta? <a href="register.php">Cadastrar-se</a>
        </p>
    </form>
        
    </body>
</html>