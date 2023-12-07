<?php 
session_start();
$logado = $_SESSION['email'];

include('conectar.php');

if(isset($_POST['submit']))
{
    $query = "SELECT * FROM pwd_pf WHERE email='$logado'";

    $nome_post = $_POST['nome'];
    $cidade_post = $_POST['cidade'];
    $bairro_post = $_POST['bairro'];
    $adress_post = $_POST['adress'];
    $telefone_post = $_POST['telefone'];
    $obj_post = $_POST['obj'];
    $hab_post = $_POST['hab'];
    $formac_post = $_POST['formac'];
    $exp_post = $_POST['exp'];
    $idioma_post = $_POST['idioma'];

    

    $sql_code = "UPDATE pwd_pf SET nome='$nome_post',cidade='$cidade_post',bairro='$bairro_post',adress='$adress_post',telefone='$telefone_post',obj='$obj_post',hab='$hab_post',formac='$formac_post',exp='$exp_post',idioma='$idioma_post' WHERE email='$logado'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
    header('location: ../pf/funcionalidades/perfil/edit-curriculo.php');
}
?>