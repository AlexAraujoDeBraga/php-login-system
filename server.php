<?php
    session_start();


    $username = "";
    $email = "";
    $errors = array();
    //conectando ao database
    $db = mysqli_connect('localhost', 'root', '', 'registration');
    //quando o botao é clicado
    if(isset($_POST['register'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']); 

        // obrigar que os campos sejam preenchidos
        if(empty($username)){
            array_push($errors, "Preencha seu nome");
        }
        if(empty($email)){
            array_push($errors, "Preencha seu email");
        }
        if(empty($password_1)){
            array_push($errors, "Preencha uma senha");
        }
        if($password_1 != $password_2){
            array_push($errors, "As senhas não correspondem");
        }
        //salvando informações do formulário no database
        if(count($errors) == 0){
            $password = md5($password_1); //encriptando a senha
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', 
            '$email', '$password')";
            mysqli_query($db, $sql);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Você agora está logado";
            header('location: index.php');
        }
    }

    // login user
    if(isset($_POST['login'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']); 

        // obrigar que os campos sejam preenchidos
        if(empty($username)){
            array_push($errors, "Preencha seu nome");
        }
        if(empty($password)){
            array_push($errors, "Preencha sua senha");
        }
        if(count($errors) == 0){
            $password = md5($password); // encriptando senha para comparar com a do database
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $result = mysqli_query($db, $query);
            if(mysqli_num_rows($result) == 1){
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "Você agora está logado";
                header('location: index.php');
            } else{
                array_push($errors, "Usuário ou Senha incorretos.");
            }
        }
    }

    //logout
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>