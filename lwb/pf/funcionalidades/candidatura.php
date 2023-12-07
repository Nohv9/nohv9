<?php 
session_start();
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION_['email']) == true)){

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location: ../../login/login-pf.html');
}
include_once('../../banco/conectar.php');

$logado = $_SESSION['email'];

$query = "SELECT * FROM pwd_pf WHERE email = '$logado'";  

$nome = $mysqli->query($query);
$nasc = $mysqli->query($query);
$telefone = $mysqli->query($query);
$cidade = $mysqli->query($query);
$bairro = $mysqli->query($query);
$email = $mysqli->query($query);
$obj = $mysqli->query($query);
$hab = $mysqli->query($query);
$formac = $mysqli->query($query);
$exp = $mysqli->query($query);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../header.css">
    <link rel="stylesheet" href="candidatura.css">
</head>
<body>
    <header>
        <div class="container1">
            <a href="../pf.php"><img class="header-img" src="../../assets/39.png" alt=""></a>
        </div>
        <div class="container3">
            <h3>Edite seu currículo a qualquer momento</h3>
        </div>
        <div class="container2">
            <a href="../pf.php" class="btn-a vagas">Vagas</a>
            <a href="curriculo.php" class="btn-a curriculo">Meu currículo</a>
            <a href="candidatura.php" class="btn-a candidaturas">Candidaturas</a>
        </div>
    </header>
</body>
</html>