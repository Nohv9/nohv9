<?php 
  include("conectar.php");

  $sql_query = "SELECT * FROM userC";
  $resultado = $conectar->query($sql_query);

  $dados = "";

  while ($row_curriculo = $resultado->fetch_assoc()){

    extract($row_curriculo);
    $nome = $row_curriculo['nome'];
    $email = $row_curriculo['email'];
    $dataa = $row_curriculo['dataa'];
    $endereco = $row_curriculo['endereco'];
    $telefone = $row_curriculo['telefone'];
    $objetivo = $row_curriculo['$objetivo'];
    $form_acad = $row_curriculo['form_acad'];
    $exp_profi = $row_curriculo['exp_profi'];
    $cursos_adic = $row_curriculo['cursos_adic'];
    $idioma = $row_curriculo['idioma'];

    $dados .= "</tr>
    <td>$nome</td>
    <td>$email</td>
    <td>$dataa</td>
    <td>$endereco</td>
    <td>$telefone</td>
    <td>$objetivo</td>
    <td>$form_acad</td>
    <td>$exp_profi</td>
    <td>$cursos_adic</td>
    <td>$idioma</td>
    ";

  }
  echo $dados;
?>