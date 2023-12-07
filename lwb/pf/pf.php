<?php 
session_start();
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION_['email']) == true)){

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location: ../login/login-pf.html');
}
$logado = $_SESSION['email'];

include_once('banco/conectar.php');

$query = "SELECT * FROM vaga";  
$result = $mysqli->query($query);


$empresa = $mysqli->query($query);
$title = $mysqli->query($query);
$salario = $mysqli->query($query);
$descri = $mysqli->query($query);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L.W.B "Encontre vagas inúmeras vagas.</title>
    <link rel="stylesheet" href="painel.css">
    <link rel="stylesheet" href="cor.css">
</head>
<body>
    <header>
        <div class="div-logo">
            <div class="container1">
                <a href="sair.php"><img class="header-img" src="../assets/39.png" alt=""></a>
                <input type="text" name="busca" id="buscar" placeholder="Pesquisar cargo, competências ou empreas.">
                <input class="buscar" type="button" value="Buscar">
            </div>
            <div class="container2">
                <a href="pf.php" class="btn-a vagas2">Vagas</a>
                <a href="funcionalidades/curriculo.php" class="btn-a">Meu currículo</a>
                <a href="funcionalidades/candidatura.php" class="btn-a">Candidaturas</a>
            </div>
        </div>
    </header>
    <main>
        <div class="global">
            <div class="box">
                <?php 
                while($user_data = mysqli_fetch_assoc($result))
                {
                    echo "<div class='teste'>";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    echo "<p class='ppp'><strong>Nome da empresa:</strong> "."<td>".$user_data['empresa']."</td>"."</p>";
                    echo "<br>";
                    echo "<br>";
                    echo "<p class='ppp'><strong>Vaga a ser preenchida:</strong> "."<td>".$user_data['title']."</td>"."</p>";
                    echo "<br>";
                    echo "<br>";
                    echo "<p class='ppp'><strong>Sálario:</strong> R$"."<td>".$user_data['salario']."</td>"."</p>";
                    echo "<br>";
                    echo "<br>";
                    echo "<p class='ppp'><strong>Descrição da vaga:</strong> "."<td>".$user_data['descri']."</td>"."</p>";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    echo "<input class='input-editar' type='submit' name='submit' value='Candidatar-se a vaga'>";
                }
                ?>
            </div>
        </div>
    </main>
</body>
</html>