<?php 
session_start();
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION_['email']) == true)){

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location: ../../login/login-pf.html');
}
$logado = $_SESSION['email'];
include_once('../../../banco/conectar.php');
$query = "SELECT * FROM pwd_pf WHERE email = '$logado'";  

$id = $mysqli->query($query);
$nome = $mysqli->query($query);
$nasc = $mysqli->query($query);
$cpf = $mysqli->query($query);
$telefone = $mysqli->query($query);
$cidade = $mysqli->query($query);
$bairro = $mysqli->query($query);
$email = $mysqli->query($query);
$obj = $mysqli->query($query);
$hab = $mysqli->query($query);
$formac = $mysqli->query($query);
$exp = $mysqli->query($query);
$adress = $mysqli->query($query);
$genero = $mysqli->query($query);
$idioma = $mysqli->query($query);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Litoral Work Bank "EDIT'</title>
    <link rel="stylesheet" href="../../../header.css">
    <link rel="stylesheet" href="edit-curriculo.css">
</head>
<body>
    <header>
        <div class="container1">
            <a href="../../pf.php"><img class="header-img" src="../../../assets/39.png" alt=""></a>
        </div>
        <div class="container3">
            <h3>Edite seu currículo a qualquer momento</h3>
        </div>
        <div class="container2">
            <a href="../../pf.php" class="btn-a vagas">Vagas</a>
            <a href="../curriculo.php" class="btn-a curriculo">Meu currículo</a>
            <a href="../candidatura.php" class="btn-a candidaturas">Candidaturas</a>
        </div>
    </header>
    <main>
        <div class="global">
        <p class="p-edit">Sistema de edição de currículo</p>
            <div class="box1">
                <form class="forms" action="../../../banco/banco-edit.php" method="post">
                    <div class="parte1">
                        <p class="p-p">
                            <strong>Nome:</strong>
                            <?php
                                while($user_nome = mysqli_fetch_assoc($nome)){
                                    echo "<td>".$user_nome['nome']."</td>";
                                }
                            ?>
                        </p>
                        <input class="inp" type="text" name="nome" id="" placeholder="Digite um nome">
                    </div>
                    <div class="parte2">
                        <p class="p-p">
                            <strong>Cidade:</strong>
                            <?php
                                while($user_cidade = mysqli_fetch_assoc($cidade)){
                                    echo "<td>".$user_cidade['cidade']."</td>";
                                }
                            ?>
                        </p>
                        <input class="inp" type="text" name="cidade" id="" placeholder="Digite sua cidade">
                    </div>
                    <div class="parte3">
                        <p class="p-p">
                            <strong>Bairro:</strong>
                            <?php
                                while($user_bairro = mysqli_fetch_assoc($bairro)){
                                    echo "<td>".$user_bairro['bairro']."</td>";
                                }
                            ?>
                        </p>
                        <input class="inp" type="text" name="bairro" id="" placeholder="Digite seu bairro">
                    </div>
                    <div class="parte4">
                        <p class="p-p">
                            <strong>Endereço:</strong>
                            <?php
                                while($user_adress = mysqli_fetch_assoc($adress)){
                                    echo "<td>".$user_adress['adress']."</td>";
                                }
                            ?>
                        </p>
                        <input class="inp" type="text" name="adress" id="" placeholder="Digite seu endereço">
                    </div>
                    <div class="parte5">
                        <p class="p-p">
                            <strong>Telefone:</strong>
                            <?php
                                while($user_telefone = mysqli_fetch_assoc($telefone)){
                                    echo "<td>".$user_telefone['telefone']."</td>";
                                }
                            ?>
                        </p>
                        <input class="inp" type="number" name="telefone" id="" placeholder="Digite seu telefone">
                    </div>
                    <div class="parte6">
                        <p class="p-p">
                            <strong>Objetivo:</strong>
                            <?php
                                while($user_obj = mysqli_fetch_assoc($obj)){
                                    echo "<td>".$user_obj['obj']."</td>";
                                }
                            ?>
                        </p>
                        <input class="inp" type="text" name="obj" id="" placeholder="Digite seu objetivo">
                    </div>
                    <div class="parte7">
                        <p class="p-p">
                            <strong>Habilidades:</strong>
                            <?php
                                while($user_hab = mysqli_fetch_assoc($hab)){
                                    echo "<td>".$user_hab['hab']."</td>";
                                }
                            ?>
                        </p>
                        <input class="inp" type="text" name="hab" id="" placeholder="Digite suas habilidades">
                    </div>
                    <div class="parte8">
                        <p class="p-p">
                            <strong>Formação acâdemica:</strong>
                            <?php
                                while($user_formac = mysqli_fetch_assoc($formac)){
                                    echo "<td>".$user_formac['formac']."</td>";
                                }
                            ?>
                        </p>
                        <input class="inp" type="text" name="formac" id="" placeholder="Digite sua formação">
                    </div>
                    <div class="parte9">
                        <p class="p-p">
                            <strong>Experiências:</strong>
                            <?php
                                while($user_exp = mysqli_fetch_assoc($exp)){
                                    echo "<td>".$user_exp['exp']."</td>";
                                }
                            ?>
                        </p>
                        <input class="inp" type="text" name="exp" id="" placeholder="Digite suas Experiências">
                    </div>
                    <div class="parte1">
                        <p class="p-p">
                            <strong>Idiomas:</strong>
                            <?php
                                while($user_idioma = mysqli_fetch_assoc($idioma)){
                                    echo "<td>".$user_idioma['idioma']."</td>";
                                }
                            ?>
                        </p>
                        <input class="inp" type="text" name="idioma" id="" placeholder="Idiomas">
                    </div>
                    <input class="inpp" type="submit" name="submit" value="Editar">
                </form>
            </div>
        </div>
    </main>
</body>
</html>