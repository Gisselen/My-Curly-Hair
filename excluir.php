<?php

include("conexao.php");
$id = $_GET["id"];
settype($id, "integer");

$sql = "delete from tabela where id_tabela = $id";
$query = $mysqli->query($sql);
$query->affected_rows;
		


$mysqli->close();
header("Location: listar.php");
?>
