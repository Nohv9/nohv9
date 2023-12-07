<?php
include('conectar.php');

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];


    $sql_code = "INSERT INTO pwd_pj(email,senha,nome) VALUES ('$email','$senha','$nome')";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
}
header('Location: ../login/login-pj.html');


?>