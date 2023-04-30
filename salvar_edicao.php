<?php

include("conexao.php");
$nome      = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$email     = $_POST["email"];
$sexo      = $_POST["sexo"]; 
$id        = $_POST["id"];
$sql = "UPDATE tabela SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', sexo = '$sexo' WHERE tabela.id_tabela = $id";
$query = $mysqli->query($sql);

$mysqli->close();
header("Location: listar.php");
?>
