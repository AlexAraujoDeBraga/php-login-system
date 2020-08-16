<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Php register system</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="header">
            <h2>Registrar-se</h2>
        </div>

    <form method="post" action="register.php">
        <?php include('errors.php');?>
        <div class="input-group">
            <label>Nome</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
            <label>E-mail</label>
            <input type="text" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
            <label>Senha</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirmar Senha</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" name="register" class="btn">Registrar-se</button>
        </div>
        <p>
            Já possui uma conta? <a href="login.php">Entrar</a>
        </p>
    </form>

    </body>
</html>