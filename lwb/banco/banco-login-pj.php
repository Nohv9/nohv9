<?php
    session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']) )
    {
        // Acessa
        include_once('conectar.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //print_r('Rm: ' . $id);
        //print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM pwd_pj WHERE email = '$email' AND senha = '$senha'";
        $result = $mysqli->query($sql);

        //print_r($sql);
        //print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            //print_r('Conta não existe');
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: ../login/login-pj.php');
        }
        else
        {
            //print_r('Conta existe');
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;            
            header('Location: ../pj/pj.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: ../index.html');
    }
?>