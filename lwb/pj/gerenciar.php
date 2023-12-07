<?php 
session_start();
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION_['email']) == true)){

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location: ../login/login-pj.html');
}
$logado = $_SESSION['email'];

include_once('banco/conectar.php');

$query = "SELECT * FROM vaga WHERE email = '$logado'";  
$result = $mysqli->query($query);


$empresa = $mysqli->query($query);
$title = $mysqli->query($query);
$salario = $mysqli->query($query);
$descri = $mysqli->query($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L.W.B para Empresas</title>
    <link rel="stylesheet" href="../header.css">
    <link rel="stylesheet" href="gerenciar.css">
</head>
<body>
    <header>
        <div class="div-logo">
            <a href="../index.php"><img class="header-img" src="../assets/39.png" alt=""></a>
        </div>
        <div class="btn">
            <a class="criar-vg aa" href="pj.php">Criar Vagas</a>
            <a class="gv aa" href="gerenciar.php">Gerenciar vagas</a>
            <a class="mp aa" href="">Meu perfil</a>
        </div>   
    </header>
    <main>
        <div class="global">
            <p class="p-gerenciar">Gerenciador de vagas</p>

            <div class="box">
                <?php 
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<div class='teste'>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<p class='ppp'><strong>Email:</strong> "."<td>".$user_data['email']."</td>"."</p>";
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
                        echo "<input class='input-editar' type='submit' name='submit' value='Editar vaga'>";
                        echo "<input class='input-editar' type='submit' name='submit' value='Excluir vaga'>";

                    }


                ?>
            </div>
        </div>
    </main>
    </main>
</body>
</html>