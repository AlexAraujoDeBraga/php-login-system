<?php include('server.php');?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Php login system</title>
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
            <h2>Login</h2>
        </div>

        <form method="post" action="login.php">
        <?php include('errors.php');?>
        <div class="input-group">
            <input type="text" placeholder="Nome" name="username">
        </div>
        <div class="input-group">
            <input type="password" placeholder="Senha" name="password">
        </div>
        <div class="row justify-content-center">
                <div class="input-button">
                    <button type="submit" name="login" class="btn">Entrar</button>
                </div>
            </div>
        <p>
            Ainda não possui uma conta? <a href="register.php">Criar uma conta!</a>
        </p>
    </form>

    </div>
    </header>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="bottom-icon col-lg-1 col-md-4 col-sm-4 col-10">
                <i class="fab fa-facebook fa-3x"></i>
                <p>Facebook</p>
            </div>
            <div class="bottom-icon col-lg-1 col-md-4 col-sm-4 col-10">
                <i class="fab fa-google-plus fa-3x"></i>
                <p>Google Plus</p>
            </div>
            <div class="bottom-icon col-lg-1 col-md-4 col-sm-4 col-10">
                <i class="fab fa-instagram-square fa-3x"></i>
                <p>Instagram</p>
            </div>
        </div>
    </div>
    <footer>
        <div class="container-fluid footer">
            <div class="row text-left">
                <div class="col-md-5">
                    <h2 class="text-light pt-4">
                        Sobre Nós
                    </h2>
                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                    <p class="pt-4 text-muted">Copyright &copy2020 Todos os Diretos Reservados | Esse template </br> foi obra de
                        <span class="text-warning">Alex Dev</span></p>
                </div>
                <div class="col-md-5">
                    <p class="pt-4 text-light">Fale-Conosco</p>
                    <div class="column">
                        <i class="fab fa-whatsapp text-warning"><span class="text-light">  (21) 91111-1111</span></i>
                        <br>
                        <i class="fas fa-envelope text-warning"><span class="text-light">  phpregister@mail.com</span></i>
                        <br>
                        <i class="fas fa-phone text-warning"><span class="text-light">  (21) 2222-2222</span></i>
                    </div>
                </div>
                <div class="col-md-2">
                    <p class="pt-4 text-light">Siga-Nos</p>
                    <div class="column">
                        <i class="fab fa-facebook-f text-warning"></i>
                        <i class="fab fa-instagram text-warning"></i>
                        <i class="fab fa-twitter text-warning"></i>
                        <i class="fab fa-youtube text-warning"></i>
                    </div>
                </div>
            </div>
        </div> 
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    </body>
</html>