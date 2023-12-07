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
    <title>L.W.B "Atualize seu currículo sempre que obter novas experiências.</title>
    <link rel="stylesheet" href="../../header.css">
    <link rel="stylesheet" href="curriculo.css">
</head>
<body>
    <header>
        <div class="container1">
            <a href="../../index.php"><img class="header-img" src="../../assets/39.png" alt=""></a>
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
    <main>
        <div class="global">
            <div class="curriculoo">
                <div class="box1">
                    <div class="voltar">
                        <a class="a-voltar" href="../pf.php">Currículo</a>
                    </div>
                    <div class="p1">
                        <div class="foto">
                            <img class="t-foto" src="../../assets/39.png" alt="">
                        </div>
                        <div class="nome">
                            <p class="p-nome pp">
                                Nome
                                <?php
                                    while($user_nome = mysqli_fetch_assoc($nome)){
                                        echo "<p class='tttt'><td>".$user_nome['nome']."</td>"."</p>";
                                    }
                                ?>
                            </p>
                            <p class="p-nascimento pp">
                                Nascimento
                                <?php
                                    while($user_nasc = mysqli_fetch_assoc($nasc)){
                                        echo "<p class='tttt'><td>".$user_nasc['nasc']."</td>"."</p>";
                                    }
                                ?>
                            </p>
                            <p class="p-genero pp">Gênero:</p>
                        </div>
                    </div>
                    <div class="p2">
                        <a class="aa" href="perfil/edit-curriculo.php">Editar curriculo</a>
                        <a class="aa" href="../../index.php">Deslogar</a>
                    </div>
                    <div class="p3">
                        <p class="p-email pp">
                            Telefone
                            <?php
                                while($user_data = mysqli_fetch_assoc($telefone)){
                                    echo "<p class='tttt'><td>".$user_data['telefone']."</td>"."</p>";
                                }
                             ?>
                        </p>
                        <p class="p-email pp">
                            Email
                            <?php
                                while($user_email = mysqli_fetch_assoc($email)){
                                    echo "<p class='tttt'><td>".$user_email['email']."</td>"."</p>";
                                }
                            ?>
                        </p>
                        <p class="p-cidade pp">
                            Cidade
                            <?php
                                while($user_cidade = mysqli_fetch_assoc($cidade)){
                                    echo "<p class='tttt'><td>".$user_cidade['cidade']."</td>"."</p>";
                                }
                            ?>
                        </p>
                        <p class="p-bairro pp">
                            Bairro
                            <?php
                                while($user_bairro = mysqli_fetch_assoc($bairro)){
                                    echo "<p class='tttt'><td>".$user_bairro['bairro']."</td>"."</p>";
                                }
                            ?>
                        </p>
                    </div>
                </div>
                <div class="box2">
                    <div class="title-curriculo">
                        <p class="p-curriculo">Currículo</p>
                    </div>
                    <div class="box-box1">
                        <div class="obj">
                            <p class="p-obj oo">
                                Objetivo
                                <?php
                                while($user_obj = mysqli_fetch_assoc($obj)){
                                    echo "<p class='tttt'><td>".$user_obj['obj']."</td>"."</p>";
                                }
                                ?>
                            </p>
                        </div>
                        <div class="hab">
                            <p class="p-hab oo">
                                Habilidades
                                <?php
                                while($user_hab = mysqli_fetch_assoc($hab)){
                                    echo "<p class='tttt'><td>".$user_hab['hab']."</td>"."</p>";
                                }
                                ?>
                            </p>
                        </div>
                        <div class="formac">
                            <p class="p-formac oo">
                                Formação
                                <?php
                                while($user_formac = mysqli_fetch_assoc($formac)){
                                    echo "<p class='tttt'><td>".$user_formac['formac']."</td>"."</p>";
                                }
                                ?>
                            </p>
                        </div>
                        <div class="exp">
                            <p class="p-exp oo">
                                Experiências
                                <?php
                                while($user_exp = mysqli_fetch_assoc($exp)){
                                    echo "<p class='tttt'><td>".$user_exp['exp']."</td>"."</p>";
                                }
                                ?>
                            </p>
                        </div>
                        <input type="hidden" name="email" value="<?php echo $logado?>">
                    </div>
                </div>
            </div>
        </div>
        
    </main>
</body>
</html>