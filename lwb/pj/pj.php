<?php 
session_start();
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION_['email']) == true)){

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location: ../login/login-pj.html');
}
$logado = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L.W.B para Empresas</title>
    <link rel="stylesheet" href="../header.css">
    <link rel="stylesheet" href="pj.css">
</head>
<body>
    <header>
        <div class="div-logo">
            <a href="sair.php"><img class="header-img" src="../assets/39.png" alt=""></a>
        </div>
        <div class="btn">
            <a class="criar-vg aa" href="pj.php">Criar Vagas</a>
            <a class="gv aa" href="gerenciar.php">Gerenciar vagas</a>
            <a class="mp aa" href="">Meu perfil</a>
        </div>   
    </header>
    <main>
        <div class="global">
            <p class="p-vagas">Criar vaga</p>
            <div class="box">
                <form action="banco/criar-vaga.php" method="post">
                    <div class="box1">
                        <div class="email dd">
                            <p class="pp">Digite o email cadastrado:</p>
                            <input class="ii" type="text" name="email" id="" placeholder="Digite o email cadastrado">
                        </div>
                        <div class="empresa dd">
                            <p class="p-empresa pp">Nome da empresa:</p>
                            <input class="ii" type="text" name="empresa" id="" placeholder="Digite o nome da empresa">
                        </div>
                        <div class="title dd">
                            <p class="p-empresa pp">Nome da vaga:</p>
                            <input class="ii" type="text" name="title" id="" placeholder="Digite o nome da vaga">
                        </div>
                    </div>
                    <div class="box2">
                        <div class="salario dd">
                            <p class="p-empresa pp">Salario:</p>
                            <input class="ii" type="text" name="salario" id="" placeholder="Digite o sálario">
                        </div>
                        <div class="descri dd">
                            <p class="p-empresa pp">Descrição da vaga:</p>
                            <input class="ii" type="text" name="descri" id="" placeholder="Digite a descrição da vaga">
                        </div>
                    </div>
                    <input class="btnn" type="submit" name="submit" value="Criar vaga">
                </form>
            </div>
        </div>
    </main>
</body>
</html>