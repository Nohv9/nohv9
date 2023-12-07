<?php
include('conectar.php');

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $cpf = $_POST['cpf'];
    $nasc = $_POST['nasc'];

    

    $sql_code = "INSERT INTO pwd_pf(email,senha,nome,telefone,cidade,bairro,cpf,nasc) VALUES ('$email','$senha','$nome','$telefone','$cidade','$bairro','$cpf','$nasc')";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
}
header('Location: ../login/login-pf.html');

?>