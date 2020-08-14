<!DOCTYPE html>
<html>
    <head>
        <title>Php login system</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="header">
            <h2>Login</h2>
        </div>

    <form method="post" action="login.php">
        <div class="input-group">
            <label>Nome</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Senha</label>
            <input type="password" name="password_1">
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