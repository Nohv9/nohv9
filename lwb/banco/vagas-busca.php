<?php 
    include('conectar.php');

    $sql_code = "INSERT INTO pwd_pf(user,nome) VALUES ('$user','$nome')";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
?>