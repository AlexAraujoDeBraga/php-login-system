<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Php register system</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/style-register.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    </head>
    <body>
    <header>
        <h3>Login</h3>
    <div class="container col-6 col-md-12">        
        <div class="header">
            <h2>Criar um conta</h2>
        </div>

        <form method="post" action="register.php">
            <?php include('errors.php');?>
            <div class="input-group">
                <input type="text" name="username" placeholder="Nome" value="<?php echo $username; ?>">
            </div>
            <div class="input-group">
                <input type="text" name="email" placeholder="E-mail" value="<?php echo $email; ?>">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Senha" name="password_1">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirmar Senha" name="password_2">
            </div>
            <div class="input-group">
                <button type="submit" name="register" class="btn">Registrar-se</button>
            </div>
            <p>
                Já possui uma conta? <a href="login.php">Entrar</a>
            </p>
        </form>
    </div>
    </header>
    <div class="flex-container">
        <div class="bottom-icon">
            <i class="fab fa-facebook fa-3x text-white"></i>
            <p>Facebook</p>
        </div>
        <div class="bottom-icon">
            <i class="fab fa-google-plus fa-3x text-white"></i>
            <p>Google Plus</p>
        </div>
    </div>
    <footer>
        <div class="footer">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div> 
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    </body>
</html>