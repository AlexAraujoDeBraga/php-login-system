<?php
    //conectando ao database
    $db = mysqli_connect('127.0.0.1', 'root', '', 'registration');
    //quando o botao é clicado
    if(isset($_POST['register'])){
        $username = mysql_real_escape_string($_POST['username']);
        $email = mysql_real_escape_string($_POST['email']);
        $password_1 = mysql_real_escape_string($_POST['password_1']);
        $password_2 = mysql_real_escape_string($_POST['password_2']);

        // obrigar que os campos sejam preenchidos
        if(empty($username)){
            
        }

    }

?>