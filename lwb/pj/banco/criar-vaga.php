<?php
include('conectar.php');

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $empresa = $_POST['empresa'];
    $title = $_POST['title'];
    $salario = $_POST['salario'];
    $descri = $_POST['descri'];

    

    $sql_code = "INSERT INTO vaga(email,empresa,title,salario,descri) VALUES ('$email','$empresa','$title','$salario','$descri')";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
}
header('Location: ../gerenciar.php');

?>